<?php

class BrowserPrinter extends AbstractPrinter
{
    public function __construct($printerName)
    {
        parent::__construct($printerName);
    }

    function printer($message)
    {
        print_r($this->printerName . " :" . $message);
    }
}