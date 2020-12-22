<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
  protected  $table = 'ilkom_akbar.table_posts'; 
  protected $primaryKey = 'ID';
  protected $fillable =['ID','post_author','post_date','post_date_gmt','post_content',
'post_title','post_excerpt','post_status','comment_status','ping_status','post_password',
'post_name','to_ping','pinged','post_modified','post_modified_gmt','post_content_filtered',
'post_parent','guid','menu_order','post_type','post_mime_type','comment_count'];
  public function users(){
      return $this->belongsTo(Users::class,'ID');
  }
}
