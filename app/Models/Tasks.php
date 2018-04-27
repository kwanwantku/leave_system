<?php
/**
 * Created by PhpStorm.
 * User: pranger54
 * Date: 27/4/2018 AD
 * Time: 11:41
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table = 'Tasks';
    protected $primaryKey = 'id';
    public $timestamps = false;
}