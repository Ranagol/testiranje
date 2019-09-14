<?php

class LogCreatorSingleton{

    private static $storeMyObject;
    private $file = 'spisakPutnika.txt';
    private $fileHandle;

    public static function getMyObject(){
        if(self::$storeMyObject == null){
            self::$storeMyObject = new LogCreatorSingleton;
        }
        return self::$storeMyObject;
    }
    
    public function openFile(){
        $this->fileHandle = fopen($this->file, 'w');
    }

    public function writeLog($message){
        $currentTimeAndDate = date('H:i:s; d.m.Y', time());
        fwrite($this->fileHandle, '[' . $currentTimeAndDate . '] ' .  $message . "\n");
        
    }

    public function closeFile(){
        fclose($this->fileHandle);
    }

}

?>