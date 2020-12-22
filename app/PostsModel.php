<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PostsModel extends Model
{
    public function alldata(){
        return DB::table('ilkom_akbar.table_posts')->get()->count();
    }
    public function alldata1(){
        return DB::table('ilkom_adeputra.table_posts')->get()->count();
    }
}
