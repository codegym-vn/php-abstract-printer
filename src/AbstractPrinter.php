<?php


abstract class AbstractPrinter
{
    protected $printerName;

    public function __construct($printerName)
    {
        $this->printerName = $printerName;
    }

    abstract function printer($message);
}