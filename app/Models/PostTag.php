<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;
    /*нужно что бы могли изм. данные в таблице(если не пропишем будет ошибка"нет разреш. колонок для изм.")*/
    protected $table = 'post_tags';
    protected $quarded = false;
}
