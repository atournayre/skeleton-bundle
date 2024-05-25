<?php

namespace Bundle\Tests\App\Func;

class FooTest extends KernelTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        self::bootKernel();
    }

    public function testItSuccess(): void
    {
        //$fooService = self::$container->get('foo.such_service');
        //$this->assertInstanceOf(FooService::class, $fooService);
        //...
    }
}