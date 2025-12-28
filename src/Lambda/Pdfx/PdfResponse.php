<?php declare(strict_types = 1);

namespace JuicyFx\Juicy\Lambda\Pdfx;

use Psr\Http\Message\ResponseInterface;

class PdfResponse
{

	protected ResponseInterface $origin;

	protected mixed $parsed;

	public function __construct(ResponseInterface $origin)
	{
		$this->origin = $origin;
	}

	public function getOrigin(): ResponseInterface
	{
		return $this->origin;
	}

	public function getStatusCode(): int
	{
		return $this->origin->getStatusCode();
	}

	public function getData(): mixed
	{
		return $this->getParsedBody();
	}

	public function save(string $filename): void
	{
		file_put_contents($filename, $this->getData());
	}

	protected function getParsedBody(): mixed
	{
		if ($this->parsed === null) {
			$body = $this->origin->getBody();
			$body->rewind();
			$this->parsed = $body->getContents();
		}

		return $this->parsed;
	}

}
