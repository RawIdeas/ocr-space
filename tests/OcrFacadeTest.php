<?php

use Orchestra\Testbench\TestCase;
use RawIdeas\OcrSpace\OcrFacade;

class OcrFacadeTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return ['RawIdeas\OcrSpace\OcrServiceProvider'];
    }

    public function testValidFacade()
    {
        $this->assertEquals('YOUR-API-KEY', OcrFacade::getApiKey());
    }
}
