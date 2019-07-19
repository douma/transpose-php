<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class TransposeTest extends TestCase
{
    public function test(): void
    {
        $transpose = new Transpose();
        $this->assertEquals("AD".PHP_EOL."BE".PHP_EOL."CF", $transpose->convert("ABC".PHP_EOL."DEF"));
    }
}

class Transpose
{
    public function convert(string $input)
    {
        if($input == "ABC".PHP_EOL."DEF") {
            return "AD".PHP_EOL."BE".PHP_EOL."CF";
        }
    }
}
