<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class User extends Model{

    protected $table = 'employee';
    protected $fillable = [
        'employee_lastname', 'employee_middlename', 'employee_firstname'];


    public $timestamps = false;
    protected $primaryKey = 'id';
}