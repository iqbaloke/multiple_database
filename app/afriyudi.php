<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class afriyudi extends Model
{
    protected $table = ('ilkom_afriyudi.table_users');
    protected $primaryKey = 'ID';
    protected $fillable = ['ID','user_login','user_pass','user_nicename',
    'user_email','url','user_registered','user_activation_key','user_status','display_name'];
    public function posts(){
        return $this->hasMany(afriyudiposts::class,'post_author');
    }
}
