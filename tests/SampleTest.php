<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testPertama()
    {
        $name = true;
        $this->assertTrue($name);
    }

    /** @test */
    public function user_bisa_login()
    {
        $this->assertTrue(true);
    }
}
