![](https://heatbadger.now.sh/github/readme/juicyfx/juicyphp/)

<p align=center>
  <a href="https://github.com/juicyfx/juicyphp/actions"><img src="https://badgen.net/github/checks/juicyfx/juicyphp"></a>
  <a href="https://coveralls.io/r/juicyfx/juicyphp"><img src="https://badgen.net/coveralls/c/github/juicyfx/juicyphp"></a>
  <a href="https://packagist.org/packages/juicyfx/juicy"><img src="https://badgen.net/packagist/dm/juicyfx/juicy"></a>
  <a href="https://packagist.org/packages/juicyfx/juicy"><img src="https://badgen.net/packagist/v/juicyfx/juicy"></a>
  <a href="https://packagist.org/packages/juicyfx/juicy"><img src="https://badgen.net/packagist/php/juicyfx/juicy"></a>
  <a href="https://github.com/juicyfx/juicyphp"><img src="https://badgen.net/github/license/juicyfx/juicyphp"></a>
</p>

<p align=center>
  🕹 <a href="https://f3l1x.io">f3l1x.io</a> | 💻 <a href="https://github.com/f3l1x">f3l1x</a> | 🐦 <a href="https://twitter.com/xf3l1x">@xf3l1x</a>
</p>

## Usage

To install latest version of `juicyfx/juicy` use [Composer](https://getcomposer.com).

```
composer require juicyfx/juicy
```

## Versions

| State       | Version | Branch   | PHP     |
|-------------|---------|----------|---------|
| dev         | `^0.4`  | `master` | `>=8.2` |
| stable      | `^0.3`  | `master` | `>=8.2` |

## Usage

### PDF(x)

```php
use JuicyFx\Juicy\JuicyFx;

$client = JuicyFx::createPdf();
$client = JuicyFx::createPdf(['base_uri' => 'your-pdfx.now.sh']);

$response = $client->pdf()->url('https://f3l1x.io');

$response = $client->pdf()->raw('raw string');

$response = $client->pdf()->json([);
    'body' => 'post body'
]);

$response = $client->pdf()->json([
    'body' => 'post data',
    'headerTemplate' => '<div style="font-size: 30px;">HEADER</div>',
    'footerTemplate' => '<div style="font-size: 30px;">FOOTER</div>',
], [
    'displayHeaderFooter' => 1,
    'marginTop' => 100,
    'marginBottom' => 100,
]);
```

## Development

See [how to contribute](https://f3l1x.io/github) to this package. This package is currently maintained by these authors.

<a href="https://github.com/f3l1x">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://github.com/sponsors/f3l1x) **f3l1x**. Also thank you for using this package.
