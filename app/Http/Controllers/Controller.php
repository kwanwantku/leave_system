<?php

namespace PranGerLeaveRequester\Http\Controllers;

use PranGerLeaveRequester\Models\Users;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function home($id)
    {
        echo "this is home in comtroller id=$id";
        //$users = DB::table('Users')->get();
        //print_r($users);

//        $users = Users::all();
        $user = Users::where('id', 2)->get();
        print_r($user);
        echo '<hr/>';
        // echo $user->picture;
        // $user->picture = '/src/img.jpg';
        // $user->save();
        // echo '<hr/>';
        // echo $user->picture;


//        $newUser = new Users();
//        $newUser->username = 'ann';
//        $newUser->password = 'qwerty';
//        $newUser->email = 'mail';
//        $newUser->type = 'Administrator';
//        $newUser->firstname = '-';
//        $newUser->lastname = '-';
//        $newUser->picture = '-';
//        $newUser->departmentid = 1;
//        $newUser->save();

        //$u1 = Users::insertNewUser('a', 'b');

        // echo $user->contact->ig;
        // $user->contact->lineid = 'newid';
        // $user->contact->save();

        //Users::where('id', 2)->first()->forceDelete();

        return view('page1', [
            // 'isAdmin' => $user->isAdmin(),
            'menus' => ['Login', 'Add Leave Request',]
        ]);
    }
}
