<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class TransposeTest extends TestCase
{
    public function test_abcdef(): void
    {
        $transpose = new Transpose();
        $this->assertEquals("AD".PHP_EOL."BE".PHP_EOL."CF" . PHP_EOL, $transpose->convert("ABC".PHP_EOL."DEF"));
    }

    public function test_multiple(): void
    {
        $transpose = new Transpose();
        $this->assertEquals("AD".PHP_EOL."BE".PHP_EOL." F" . PHP_EOL, $transpose->convert("AB".PHP_EOL."DEF"));
    }
}

class Transpose
{
    public function convert(string $input)
    {
        $splitNewLine = explode(PHP_EOL, $input);
        $output = [];
        $maxLineLength = 0;
        foreach($splitNewLine as $parentIndex=>$line) {
            foreach(str_split($line) as $index=>$char) {
                $output[$index][] = $char;
                if($maxLineLength < count($output[$index])) {
                    $maxLineLength = count($output[$index]);
                }
            }
        }
        $outputString = "";
        foreach($output as $line) {
            $outputString .= str_pad(implode("", $line), $maxLineLength,
                    " ", STR_PAD_LEFT) . PHP_EOL;
        }
        return $outputString;
    }
}
