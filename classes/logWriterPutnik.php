<?php

class LogWriterPutnik{
    public $fn = 'SpisakPutnika.txt';
    public $imePutnika;
    public $prezimePutnika;
    public $message;
    public $currentTimeAndDate;

    public function __construct($imePutnika, $prezimePutnika ){
        $this->message = $imePutnika . ' ' . $prezimePutnika . 'je ukrcan u avion.';
        $this->currentTimeAndDate = date('d.m.Y H:i', time());
    }

    public function openFileForWriting(){
        $fh = fopen($this->fn, 'a');
        return $fh;
    }

    public function writeIntoFile($fh){
        fwrite($fh, '[' . $this->currentTimeAndDate . ']' .  $this->message . "\n");
        fclose($fh);
    }

    public function createLog(){
        $a = $this->openFileForWriting();
        $b = $this->writeIntoFile($a);
    }

    //
}
