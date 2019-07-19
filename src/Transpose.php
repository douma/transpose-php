<?php
namespace Transpose;

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
