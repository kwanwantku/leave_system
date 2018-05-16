<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function home($id)
    {
        echo "this is home in comtroller id=$id";
        //$users = DB::table('Users')->get();
        //print_r($users);

//        $users = Users::all();
        $user = Users::where('id', 1)->first();
        print_r($user);
        echo '<hr/>';
        echo $user->picture;
        $user->picture = '/src/img.jpg';
        $user->save();
        echo '<hr/>';
        echo $user->picture;


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

//        echo $user->contact->ig;
//        $user->contact->lineid = 'newid';
//        $user->contact->save();

        //Users::where('id', 2)->first()->forceDelete();

        return view('page1', [
            'isAdmin' => $user->isAdmin(),
            'menus' => ['a', 'b']
        ]);
    }
    function login_view(){
        return view('login2');
    }
    function login_check(Request $request){
        //return view('login');
        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required'
        ]);
        // print_r($request->input('username'));
        // print_r($request->input('password'));
        session(['regiskey' => null]);
        $users = new Users();
        $data = array('username' => $request->input('username'),
        'password' => $request->input('password'),
         );
        $user = $users->finddata($data);
        if($user){
            //auth()->login($user);
            session(['regiskey' => $user[0]]);
            echo '<br/>';
            print_r(session('regiskey'));
            echo '<br/>';
            print_r(session('regiskey')->firstname);
            echo '<br/>';
            print_r(session('regiskey')->lastname);
            echo '<br/>';
            print_r(session('regiskey')->type);
        }
        else{
            print_r("NO");
        }
        
        
    }
}
