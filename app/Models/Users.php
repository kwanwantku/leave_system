<?php
/**
 * Created by PhpStorm.
 * User: pranger54
 * Date: 27/4/2018 AD
 * Time: 11:41
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'Users';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function isAdmin(){
        return $this->type == 'Administrator';
    }

    public static function insertNewUser($username, $password){
        $newUser = new Users();
        $newUser->username = $username;
        $newUser->password = $password;
        $newUser->email = 'mail';
        $newUser->type = 'Administrator';
        $newUser->firstname = '-';
        $newUser->lastname = '-';
        $newUser->picture = '-';
        $newUser->departmentid = 1;
        $newUser->save();
        return $newUser;
    }

    public function contact(){
        return $this->hasOne(Contact::class, 'userid', 'id');
    }

}