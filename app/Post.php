<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //初期設定
    protected $table ='posts';
    protected $guarded =array('id');

    
}
