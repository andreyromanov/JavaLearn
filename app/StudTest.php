<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudTest extends Model
{

    //Переменные для вывода данных из БД
    protected $table = "Testing";
    protected $primaryKey = 'testing_id';
    public $timestamps = false;

    protected $fillable = [
        'users_id', 'testing_mark', 'testing_date','theme_id'
    ];
}
