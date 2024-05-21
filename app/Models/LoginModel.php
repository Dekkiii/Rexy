<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'logins';
    protected $primaryKey = 'Id';

    protected $useAutoIncrement = true;
    
    protected $returnType = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name','department', 'ip_address', 'datelogin', 'timelogin']; // Replace 'logins' with the name of your login table

    protected $useTimestamps = false;
    protected $createddate = 'datelogin';
    protected $createdtime = 'timelogin';
    

    
    
}