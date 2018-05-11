<?php
/**
 * Created by PhpStorm.
 * User: pranger54
 * Date: 27/4/2018 AD
 * Time: 16:01
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LeaveRequest extends Model
{
    protected $table = 'LeaveRequest';
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
        $type = $data['type'];
        $extra = $data['extra'];
        $record_at = $data['record_at'];
        $leave_start_at = $data['userid'];
        $leave_end_at = $data['leave_end_at'];
        # code...
        DB::insert("insert into $table (type, extra, record_at, leave_start_at, leave_end_at) values (?, ?, ?, ?, ?)", [ $type, $extra, $record_at, $leave_start_at, $leave_end_at]);
    }

    public function deletedata($id){
        $table = $this->table;
        DB::delete("delete from $table where id = ?",[$id]);
    }

    public function approvedata($data){
        $table = $this->table;

        $id = $data['id'];
        //
        $approve_at = $data['approve_at'];
        DB::update("update $table set approve_at = ?   where id = ?",[$approve_at,$id]);
    }

    public function finddata($id){
        $table = $this->table;
        $datas = DB::select("select * from $table where id = ?", [$id]);
        return $datas;
    }





}