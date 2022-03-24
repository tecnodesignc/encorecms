<br/>
<p align="center">
    <img src="https://raw.githubusercontent.com/tecnodesignc/encorecms/master/resources/assets/images/logo.png" width="300" />
</p>

<br/>

> **[EncoreCMS](https://www.tecnodesign.com.ci/encorecms)** is an open-source web application development platform shipped with headless content management system.

<br/>

**EncoreCMS** is built  with `laravel 9`, `vue`, `vuex`, `buefy` and `bulma` which follows **Hierarchical Model View Controller (HMVC)** structure for its **Modules** & **Themes**.

## Quick Start
```shell
composer create-project tecnodes/encore ecms
```

```shell
cd ecms/ 
mv public_html ../../public_html 
```


**NOTA**:EncoreCMS is configured to leave the public_html folder separate from the system files, if you don't want that configuration you should:

- Modify the `bootstrap/app.php` file whith.
```php
// set the public path to this directory
$app->bind('path.public', function() {
    return __DIR__.'/../public_html';
});
```
- Modify the public_html/index.php file with:
```php

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';
```
###Install EncoreCMS

```shell
php artisan encore:install
```

## How is EncoreCMS different?

- It's purposed to develop large applications

- Structured (**HMVC**) based modules & themes

- Encourages to use latest technologies like `Vue`, `Vuex`, `Buefy`


## Why EncoreCMS?

Well, to answer that, ask a question to yourself: Do you want to develop an enterprise application with content management that doesn't come in your way? If answer is yes, EncoreCMS is for you.

## Join us
- Contribute and raise issues at: [GitHub](https://github.com/tecnodesignc/encorecms)

We're actively seeking contributors for our [encorecms's documentation](https://github.com/tecnodesignc/encorecms), feel free to send `pull requests`.

<br/>

## Support us

Please consider starring the project to show your and support.

[TecnoDesign](https://tecnodesign.com.co) is a web agency based in Colombia. You'll find an overview of all our open source projects [on github](https://github.com/tecnodesignc).


<br/>

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

<br/>

[license-url]: LICENSE.md
[license-image]: https://img.shields.io/github/license/tecnodesignc/encorecms?style=for-the-badge

[synk-image]: https://img.shields.io/snyk/vulnerabilities/github/tecnodesignc/encorecms?label=Synk%20Vulnerabilities&style=for-the-badge
[synk-url]: https://snyk.io/test/github/tecnodesignc/encorecms?targetFile=package.json "synk"
