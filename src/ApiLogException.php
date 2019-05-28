<?php
/**
 * Created by PhpStorm.
 * User: Xiaomi
 * Date: 28.05.2019
 * Time: 10:37
 */

namespace Dietrich\ApiHandleExc;

use Illuminate\Database\Eloquent\Model;

class ApiLogException extends Model
{

    protected $fillable = [
        'user_id',
        'code_error',
        'line',
        'file',
        'error'
    ];
}