<?php

namespace Tests\Unit\Controller\Api;

use App\Dir\Tata;
use App\Dir\Toto;

/**
 * Class RadControllerTest
 */
class RadControllerTest extends \PHPUnit_Framework_TestCase
{
    public $toto;

    public $tata;

    public function setUp()
    {
        parent::setUp();

//        var_dump(Tata::class);
//        $this->tata = $this->getMockBuilder(Tata::class)
//            ->setMethods(['tataHere'])
//            ->getMock();
//
//        $this->toto = new Toto($this->tata);
    }

//    public function testStub()
//    {
//        // Create a stub for the SomeClass class.
//        $stub = $this->createMock(Toto::class);
//
//        // Configure the stub.
//        $stub->method('todo')
//            ->willReturn('STUBED');
//
//        // Calling $stub->doSomething() will now return
//        // 'foo'.
//        $this->assertEquals('STUBED', $stub->todo());
//    }

    public function testToto()
    {
        $tata = $this->getMockBuilder(Tata::class)
            ->setMethods(['tata'])
            ->getMock();

        $tata->expects($this->once())
            ->method('tata')
            ->willReturn('hello');

        $toto = new Toto($tata);

        $a = $toto->tata();

        var_dump($a);

        $this->assertEquals('hello', $a);
    }
}
