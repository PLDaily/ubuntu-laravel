<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $primaryKey = 'id';

    //允许批量添加
    protected $fillable = ['name', 'email'];

    //不允许批量添加
    protected $guarded = [];

}
