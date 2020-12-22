<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsersModel extends Model
{
    public function alldata(){
        return DB::table('ilkom_akbar.table_users')
        ->leftJoin('ilkom_akbar.table_posts','ilkom_akbar.table_posts.ID', '=', 'ilkom_akbar.table_users.ID')
        ->first();
    }
    public function alldata1(){
        return DB::table('ilkom_adeputra.table_users')
        ->leftJoin('ilkom_adeputra.table_posts','ilkom_adeputra.table_posts.ID', '=', 'ilkom_adeputra.table_users.ID')
        ->first();
    }
  
}
