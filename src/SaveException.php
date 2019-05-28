<?php
/**
 * Created by PhpStorm.
 * User: Xiaomi
 * Date: 28.05.2019
 * Time: 10:36
 */

namespace Dietrich\ApiHandleExc;


use Exception;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Request;

class SaveException
{
    public function save(Exception $exception){
        if(Request::wantsJson()){
            ApiLogException::create([
                'user_id' => Auth::id(),
                'code_error' => $exception->getCode(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine(),
                'error' => $exception->getMessage()
            ]);
        }
    }
}