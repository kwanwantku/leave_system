<?php
/**
 * Created by PhpStorm.
 * User: pranger54
 * Date: 27/4/2018 AD
 * Time: 16:00
 */

namespace PranGerLeaveRequester\Models;


use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $table = 'Departments';
    protected $primaryKey = 'id';
    public $timestamps = false;
}