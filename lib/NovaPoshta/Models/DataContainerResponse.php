<?php

namespace NovaPoshta\Models;

use NovaPoshta\Core\BaseModel;

/**
 * Контейнер с ответом сервера
 *
 * Class DataContainerResponse
 * @package NovaPoshta\Models
 */
class DataContainerResponse extends BaseModel
{
    public $id;
    public $success;
    public $data = [];
    public $errors = [];
    public $errorCodes = [];
    public $warnings = [];
    public $info = [];

    public function __construct(\stdClass $data = null)
    {
        parent::__construct();

        if ($data) {
            foreach ($data as $key => $value) {
                $this->{$key} = $value;
            }
        }
    }
}