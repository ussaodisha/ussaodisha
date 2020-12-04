<?php

namespace App\Models;

use CodeIgniter\Model;

class Subscribers extends Model{

    protected $table ='subscriber';
    protected $allowedFields = ['Sub_id','Emails','Sub_name','Sub_message','Date','Time'];

}

?>