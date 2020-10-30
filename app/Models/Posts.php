<?php

namespace App\Models;

use CodeIgniter\Model;

class Posts extends Model{

    protected $table ='Posts';
    protected $allowedFields = ['Post_id','Post_title','post_desciption','Post_date','Post_owner','Post_image'];

}

?>