<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model{

    protected $table ='Users';
    protected $allowedFields = ['user_id','Name','Surname','Email','Password','Role'];

}

?>