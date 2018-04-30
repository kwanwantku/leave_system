<?php

namespace PranGerLeaveRequester\Http\Controllers\Auth;

use PranGerLeaveRequester\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        $field = filter_var($request->get($this->username()), FILTER_VALIDATE_EMAIL)
            ? $this->username()
            : 'username';

        return [
            $field => $request->get($this->username()),
            'password' => $request->password,
        ];
    }

    public function login(Request $request){

        session_start();
       // app()->getLocale();

        $email = $_POST['email'];
        $password =  $_POST['password'];

        echo $email . '<br>' . $password;

        //echo $request;

        

        //$con    =    mysql_connect('localhost','root','root');
       // if(!$con) {   
        // echo 'Not connect'; 
        //}

            $users = DB::table('users')->where('email', $email)->where('password', $password)->get();
            //mysql_select_db('leave_request',$con);
            //$result = mysql_query('select * from users where email="$email" and password="$password" ');
            //$num = mysql_num_rows($result);
            $num = count($users);
        if($num <=0) {
            echo 'error';
            return $this->showLoginForm()->name('login');
        }    else {
            $_SESSION['id'] = session_id();
            $_SESSION['username'] = $users[0]->username;
            echo $_SESSION['username'];
            //while ($data = mysql_fetch_array($result) ) {
            //    echo $data['username']. '<br />';
            //    echo $data['lastname']. '<br />';
            //}

            header("Location: localhost/leave_system/public");
        }



        //$this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        //if ($this->hasTooManyLoginAttempts($request)) {
        //    $this->fireLockoutEvent($request);

         //   return $this->sendLockoutResponse($request);
        //}

       // if ($this->attemptLogin($request)) {
        //    return $this->sendLoginResponse($request);
       // }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        //$this->incrementLoginAttempts($request);

        //return $this->sendFailedLoginResponse($request);
        

        //if email is in database, password correct, go to home page, use UserModel thing

        //echo UserModel.login($email, $password);

        
        //else go back to login page with alert('Invalid Email or Password')

    }


    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'jj@jj.com' => 'required', '12345678' => 'required',
        ]);
    }
}
