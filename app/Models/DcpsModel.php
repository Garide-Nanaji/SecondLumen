<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DcpsModel extends Model
{
    use HasFactory;
    protected $table = "dcps";
    public $timestamps = false;

    protected $fillable = [
        'request_type_id',
         'employee_name',
         'employee_no',
         'designation_name',
        
    ];

}
