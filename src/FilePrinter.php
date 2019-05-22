<?php

class FilePrinter extends AbstractPrinter
{
    private $path;
    public function __construct($printerName, $path)
    {
        parent::__construct($printerName);
        $this->path = $path;
    }

    function printer($message)
    {
        $myFile = fopen($this->path, "w");
        print_r($this->printerName . " :" . $message);
        fwrite($myFile, $message);
        fclose($myFile);
    }
}