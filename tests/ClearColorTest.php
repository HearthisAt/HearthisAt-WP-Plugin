<?php
use PHPUnit\Framework\TestCase;

class ClearColorTest extends TestCase
{
    public function testValidColor()
    {
        $this->assertSame('FFAA00', hearthis_clear_color('#FFAA00'));
    }

    public function testInvalidColor()
    {
        $this->assertSame('invalid', hearthis_clear_color('invalid'));
    }
}
