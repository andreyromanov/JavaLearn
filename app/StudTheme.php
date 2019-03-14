<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudTheme extends Model
{
    //Переменные для вывода данных из БД
    protected $table = "Topic";
    protected $primaryKey = 'theme_id';
}
