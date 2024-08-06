<?php
namespace App\Models;
use CodeIgniter\Model;
class ClassModel extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['class_name']; 
    protected $validationRules =['class_name'=>"required|is_unique[classes.class_name]"];
}