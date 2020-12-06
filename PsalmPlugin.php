<?php

namespace AlexS\Guzzle;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SimpleXMLElement;
use Psalm\Plugin\PluginEntryPointInterface;
use Psalm\Plugin\RegistrationInterface;
use SplFileInfo;

class PsalmPlugin implements PluginEntryPointInterface
{
    public function __invoke(RegistrationInterface $registration, ?SimpleXMLElement $config = null): void
    {
        foreach ($this->getStubFiles() as $file) {
            $registration->addStubFile($file);
        }
    }

    private function getStubFiles(): \Generator
    {
        /** @var SplFileInfo[] $files */
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . 'stubs')
        );

        foreach ($files as $file) {
            if (!$file->isDir()) {
                yield $file->getPathname();
            }
        }
    }
}
