<?php

namespace NovaPoshta\Core\Logger;

use NovaPoshta\Config;

class BaseLogger
{
    public static function setDataLogger(DataLogger $dataLogger)
    {
        $classLogger = Config::getClassLogger();
        if($classLogger){
            if ($dataLogger->error !== null) {
                $classLogger->setError($dataLogger->error);
            }
            $classLogger->setOriginalData($dataLogger->toOriginalData, $dataLogger->fromOriginalData);
            if(!empty($dataLogger->toBatchData)){
                for($i = count($dataLogger->toBatchData); $i > 0; --$i){
                    $toData = array_shift($dataLogger->toBatchData);
                    $fromData = array_shift($dataLogger->fromBatchData);
                    $classLogger->setData($toData, $fromData);
                }
            } else {
                $classLogger->setData($dataLogger->toData, $dataLogger->fromData);
            }
        }
    }
}