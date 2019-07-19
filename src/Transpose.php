<?php
namespace Transpose;

class Transpose
{
    private function sameLengthInput(string $input) : string
    {
        $maxLineLength = 0;
        $lines = explode(PHP_EOL, $input);
        foreach($lines as $line) {
            $lineLength = strlen($line);
            if(strlen($line) > $maxLineLength) {
                $maxLineLength = $lineLength;
            }
        }
        $output = "";
        foreach($lines as $line) {
            $output .= str_pad($line,$maxLineLength," ", STR_PAD_RIGHT) . PHP_EOL;
        }
        return $output;
    }

    public function convert(string $input)
    {
        $input = $this->sameLengthInput($input);
        $splitNewLine = explode(PHP_EOL, $input);
        $output = [];
        foreach($splitNewLine as $parentIndex=>$line) {
            foreach(str_split($line) as $index=>$char) {
                $output[$index][] = $char;
            }
        }
        $outputString = "";
        foreach($output as $index=>$line) {
            $outputString .= implode("", $line) . PHP_EOL;
        }
        return $outputString;
    }
}
