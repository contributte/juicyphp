<?php declare(strict_types = 1);

namespace Tests\Cases\E2E\Lambda\Pdfx;

use Contributte\Tester\Environment;
use Contributte\Tester\Toolkit;
use JuicyFx\Juicy\JuicyFx;
use Tester\Assert;

require_once __DIR__ . '/../../../../bootstrap.php';

Toolkit::test(function (): void {
	$client = JuicyFx::createPdfx();
	$response = $client->pdf()->url('https://f3l1x.io');

	Assert::equal(200, $response->getStatusCode());

	Assert::false(file_exists(Environment::getTestDir() . '/pdf-url.pdf'));
	$response->save(Environment::getTestDir() . '/pdf-url.pdf');
	Assert::true(file_exists(Environment::getTestDir() . '/pdf-url.pdf'));
});

Toolkit::test(function (): void {
	$client = JuicyFx::createPdfx();
	$response = $client->pdf()->raw('raw string');

	Assert::equal(200, $response->getStatusCode());

	Assert::false(file_exists(Environment::getTestDir() . '/pdf-raw.pdf'));
	$response->save(Environment::getTestDir() . '/pdf-raw.pdf');
	Assert::true(file_exists(Environment::getTestDir() . '/pdf-raw.pdf'));
});

Toolkit::test(function (): void {
	$client = JuicyFx::createPdfx();
	$response = $client->pdf()->json([
		'body' => 'post data',
	]);

	Assert::equal(200, $response->getStatusCode());

	Assert::false(file_exists(Environment::getTestDir() . '/pdf-json.pdf'));
	$response->save(Environment::getTestDir() . '/pdf-json.pdf');
	Assert::true(file_exists(Environment::getTestDir() . '/pdf-json.pdf'));
});

Toolkit::test(function (): void {
	$client = JuicyFx::createPdfx();
	$response = $client->pdf()->json([
		'body' => 'post data',
		'headerTemplate' => '<div style="font-size: 30px;">HEADER</div>',
		'footerTemplate' => '<div style="font-size: 30px;">FOOTER</div>',
	], [
		'displayHeaderFooter' => 1,
		'marginTop' => 100,
		'marginBottom' => 100,
	]);

	Assert::equal(200, $response->getStatusCode());

	Assert::false(file_exists(Environment::getTestDir() . '/pdf-json-full.pdf'));
	$response->save(Environment::getTestDir() . '/pdf-json-full.pdf');
	Assert::true(file_exists(Environment::getTestDir() . '/pdf-json-full.pdf'));
});
