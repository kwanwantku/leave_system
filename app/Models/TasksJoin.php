<?php
/**
 * Created by PhpStorm.
 * User: pranger54
 * Date: 27/4/2018 AD
 * Time: 16:00
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class TasksJoin extends Model
{
    protected $table = 'TasksJoin';
    protected $primaryKeyTask = 'taskid';
    protected $primaryKeyser = 'userid';
    public $timestamps = false;

}