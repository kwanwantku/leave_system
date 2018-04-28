<?php
/**
 * Created by PhpStorm.
 * User: pranger54
 * Date: 27/4/2018 AD
 * Time: 11:41
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tasks extends Model
{
    protected $table = 'Tasks';
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
        $title = $data['title'];
        $description = $data['description'];
        $userid = $data['userid'];
        # code...
        DB::insert("insert into $table (title, description, userid) values (?, ?, ?)", [ $title, $description, $userid]);
    }

    public function deletedata($id){
        $table = $this->table;
        DB::delete("delete from $table where id = ?",[$id]);
    }

    public function finddata($id){
        $table = $this->table;
        $datas = DB::select("select * from $table where id = ?", [$id]);
        return $datas;
    }


}