<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class TransposeTest extends TestCase
{
    public function test_abcdef(): void
    {
        $transpose = new \Transpose\Transpose();
        $this->assertEquals("AD".PHP_EOL."BE".PHP_EOL."CF" . PHP_EOL, $transpose->convert("ABC".PHP_EOL."DEF"));
    }

    public function test_multiple(): void
    {
        $transpose = new \Transpose\Transpose();
        $this->assertEquals("AD".PHP_EOL."BE".PHP_EOL." F" . PHP_EOL, $transpose->convert("AB".PHP_EOL."DEF"));
    }
}
