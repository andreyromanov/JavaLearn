<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachTheme extends Model
{
    //Переменные для вывода данных из БД
    protected $table = "Topic";
    protected $primaryKey = 'theme_id';
    public $timestamps = false;

    protected $fillable = [
        'theme_name','theme_text', 'users_id'
    ];
}
