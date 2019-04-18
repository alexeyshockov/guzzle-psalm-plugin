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
    public function __invoke(RegistrationInterface $psalm, SimpleXMLElement $config = null)
    {
        foreach ($this->getStubFiles() as $file) {
            $psalm->addStubFile($file);
        }
    }

    private function getStubFiles()
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
