<?php

namespace App\Http\Controllers\User;

use App\User;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    //admin registration Page
    public function adminRegisterPage(){
        return view('Admin.register');
    }

    //User registration Page
    public function userRegisterPage(){
        return view('Front.register');
    }

    //User login
    public function login(Request $request){
        if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password])){
            if(auth()->user()->admin == 1){
                return redirect('/dashboard');
            }else{
                return redirect('home');
            }

        }else{
            return redirect()->back()->with('message', 'Email and Password Do not Match');
        }
//        if (count(User::where('email', $request->email)->where('password', $request->password)->get()) == 1){
//            if (count(User::where('email', $request->email)->where('admin', 1)->get()) == 1){
//                Session::put('adminEmail', $request->email);
//                return redirect('/dashboard');
//            }else{
//                return view('Front.home');
//            }
//        }else{
//            return redirect()->back()->with('message', 'Email and Password Do not Match');
//        }


    }

    public function home(){
        return view('Front.home');
    }

    //Admin login Page
    public function adminLoginPage(){
        return view('Admin.login');
    }

    public function dashboard(){
        return view('Admin.dashboard');
    }

    //User login Page
    public function userLoginPage(){
        return view('Front.login');
    }

    //User registration controller
    public function userRegister(Request $request)
    {
        $request->validate([
        'name' => 'required|min:10|string',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed'

    ],
        [
            'name.required' => 'Please fill name field',
            'email.required' => 'Please fill email field',
            'password.required' => 'Please fill password field',
        ]);
        //admin registration
        if ($request->admin == 1){
            $registerAdmin = User::create([
                'name' =>$request->name,
                'email' =>$request->email,
                'password' =>bcrypt($request->password),
                'admin' => $request->admin
            ]);
            if($registerAdmin){
                if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password])){
                return redirect('dashboard');
                }
            }
        }

        //user registration
        if ($request->admin == 0){
            $registerUser = User::create([
                'name' =>$request->name,
                'email' =>$request->email,
                'password' =>bcrypt($request->password),
                'admin' => $request->admin
            ]);
            if($registerUser){
                if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password])) {
                    return redirect('home');
                }
            }
        }

    }

    public function facebookredirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function facebookhandleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $data['name'] = $user->name;
        $data['email'] = $user->email;
        $data['admin'] = 0;
        $data['remember_token'] = $user->token;
        $user = User::where('email', $data['email'])->first();
        if(!empty($user)){
            Auth::login($user);
            return redirect('home');
        }
        else{
           $create = User::create([
               'name' => $data['name'],
               'email' => $data['email'],
               'password' => bcrypt(''),
               'admin' => 0
           ]);
           $user = User::where('email', $data['email'])->first();
           if ($create){
               Auth::login($user);
               return redirect('home');
           }

        }
    }



    public function googleredirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function googlehandleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        $data['name'] = $user->name;
        $data['email'] = $user->email;
        $data['admin'] = 0;
        $data['remember_token'] = $user->token;
        $user = User::where('email', $data['email'])->first();
        if(!empty($user)){
            Auth::login($user);
            return redirect('home');
        }
        else{
            $create = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt(''),
                'admin' => 0
            ]);
            $user = User::where('email', $data['email'])->first();
            if ($create){
                Auth::login($user);
                return redirect('home');
            }

        }
    }

    public function userLogout(){

       Auth::logout();
       return redirect('user-login-page');
    }
}
