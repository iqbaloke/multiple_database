<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users1 extends Model
{
    // protected $connection = 'mysql5';
    protected $table = 'ilkom_adeputra.table_users';
    protected $primaryKey = 'ID';
    protected $fillable = ['ID','user_login','user_pass','user_nicename',
    'user_email','url','user_registered','user_activation_key','user_status','display_name'];
    public function posts(){
        return $this->hasMany(Posts1::class,'post_author');
    }
}
