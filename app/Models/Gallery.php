<?php

namespace App\Models;

use CodeIgniter\Model;

class Gallery extends Model{

    protected $table ='gallery';
    protected $allowedFields = ['gallery_id','image_name','date'];

}

?>