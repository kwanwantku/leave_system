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

    public function getdata(){
        $table = $this->table;
        $datas = DB::select("select * from $table");
        return $datas;
    }

    public function insertdata($data)
    {
        $table = $this->table;
        //
        $taskid = $data['taskid'];
        $userid = $data['userid'];
        # code...
        DB::insert("insert into $table (taskid, userid) values (?, ?)", [ $taskid, $userid]);
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