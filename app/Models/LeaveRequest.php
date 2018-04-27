<?php
/**
 * Created by PhpStorm.
 * User: pranger54
 * Date: 27/4/2018 AD
 * Time: 16:01
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{
    protected $table = 'LeaveRequest';
    protected $primaryKey = 'id';
    public $timestamps = false;

}