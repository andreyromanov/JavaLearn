<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachTheme extends Model
{
    //Переменные для вывода данных из БД
    protected $table = "Theme";
    protected $primaryKey = 'theme_id';
}
