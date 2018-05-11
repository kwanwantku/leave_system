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

class Contact extends Model
{
    protected $table = 'Contact';
    protected $primaryKey = 'userid';
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
        $facebook = $data['facebook'];
        $ig = $data['ig'];
        $lineid = $data['lineid'];
        # code...
        DB::insert("insert into $table (facebook, ig, lineid) values (?, ?, ?)", [ $facebook, $ig, $lineid]);
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
        $facebook = $data['facebook'];
        $ig = $data['ig'];
        $lineid = $data['lineid'];
        # code...
        DB::update("update $table set facebook = ?, ig = ?, lineid = ?   where id = ?",[ $facebook, $ig, $lineid,  $id]);
    }
}