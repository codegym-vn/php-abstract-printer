<?php

require "src/AbstractPrinter.php";
require "src/BrowserPrinter.php";
require "src/FilePrinter.php";

$browserPrinter = new BrowserPrinter("First Printer");
$filePrinter = new FilePrinter("Second Printer", "log.txt");

$browserPrinter->printer("This is a log");
$filePrinter->printer("This is another log");