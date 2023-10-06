<?php
namespace Jdev2\Apij\app\controllers;

use Illuminate\Database\Eloquent\Collection;

class BaseController{

    protected function transformCollectToJSON(Collection $collection): string{
        return $collection->toJson();
    }

    public function isJson(string $string): bool{
        json_decode($string);
        return json_last_error() === JSON_ERROR_NONE;
    }
}