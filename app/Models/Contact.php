<?php
/**
 * Created by PhpStorm.
 * User: pranger54
 * Date: 27/4/2018 AD
 * Time: 11:41
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'Contact';
    protected $primaryKey = 'userid';
    public $timestamps = false;
}