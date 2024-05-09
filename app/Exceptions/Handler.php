<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response as HttpResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     * @throws Throwable
     */
    public function render($request, Throwable $e): Response|JsonResponse|HttpResponse|RedirectResponse
    {

        if ($e instanceof ValidationException) {
            if ($request->is('api/*')) {
                $error=$this->invalidJson($request, $e);
                return response()->json(json_decode($error->content()),400);
            }
           parent::render($request, $e);
        }

        if ($e instanceof TokenMismatchException) {
            return redirect()->back()
                ->withInput($request->except('password'))
                ->withErrors(trans('core::core.error token mismatch'));
        }

        if (config('app.debug') === false) {
            return $this->handleExceptions($request,$e);
        }

        return parent::render($request, $e);
    }

    private function handleExceptions($request,$e): Response|JsonResponse
    {
        if ($e instanceof ModelNotFoundException) {
            if ($request->is('api/*')) {
                return response()->json([
                    'error'=> trans('core::core.messages.resource not found',['name'=>'API']),
                    'message' =>$e->getMessage()
                ], 404);
            }
            return response()->view('errors.404', [], 404);
        }

        if ($e instanceof NotFoundHttpException) {
            if ($request->is('api/*')) {
                return response()->json([
                    'error'=> trans('core::core.messages.resource not found',['name'=>'API']),
                    'message' => $e->getMessage()
                ], 404);
            }
            return response()->view('errors.404', [], 404);
        }
        Log::Error($e->getMessage());
        if ($request->is('api/*')) {
            return response()->json([
                'error'=>trans('core::core.error 500 title'),
                'message' => $e->getMessage()
            ], 500);
        }
        return response()->view('errors.500', [], 500);
    }
}
