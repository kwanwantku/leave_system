<?php
/**
 * Created by PhpStorm.
 * User: pranger54
 * Date: 27/4/2018 AD
 * Time: 16:00
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Departments extends Model
{
    protected $table = 'Departments';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function getdata(){
        $table = $this->table;
        $datas = DB::select("select * from $table");
        return $datas;
    }
    public function insertdata($data)
    {
        $table = $this->table;
        //
        $name = $data['name'];
        # code...
        DB::insert("insert into $table (name) values (?)", [ $name]);
    }
    public function finddata($id){
        $table = $this->table;
        $datas = DB::select("select * from $table where id = ?", [$id]);
        return $datas;
    }
    public function updatedata($data)
    {
        $table = $this->table;
        //
        $id = $data['id'];
        $name = $data['name'];
        # code...
        DB::update("update $table set name = ?   where id = ?",[ $name, $id]);
    }

}
