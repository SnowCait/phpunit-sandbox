<?php
use PHPUnit\Framework\TestCase;

class ATest extends TestCase
{
    public function test1()
    {
        sleep(5);
        $this->assertTrue(true);
    }
}
