<?php
namespace App\Models;
use CodeIgniter\Model;
class AdminModel extends Model{
    protected $table="admin";
    protected $allowedFields =["username","password","email"];
    protected $validationRules =[
        "username"=>"required|is_unique[admin.username]",
        "password"=>"required|min_length[6]",
        "email"=>"required"
    ];
}
