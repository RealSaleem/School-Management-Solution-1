<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Modules\RegisterUserRequest;
use Illuminate\Auth\Events\Registered;
use Mail;
use App\Mail\EmailVerification;
use App\Mail\NewRegisteration;
use App\Mail\Congratulation;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request)
    {
       
        $res =  $this->validator($request->all())->validate();

        $result = $this->create($res);
        return ($result == true)? view('auth.login') : redirect()->back();

    }

    public function verification($id){
        $user = User::find($id);
        if ($user->verified == 1) {
            return redirect('/');
        }else{
            return view('email.emailVerification', ['user' => $user]);
        }
    }



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password'=>'required|min:6|confirmed',
        ]);
    }

    // public function refreshCaptcha()
    // {
    //     return response()->json(['captcha'=> captcha_img()]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        // $data['email_token'] = base64_encode($data['email']);

        $data['store_id'] = null;
        $data['username'] = null;
        $data['outlet_id'] = null;

        // try {
        //     $email = new EmailVerification((object)$data);
        //     Mail::to($data['email'])->send($email);

        //     $emailAdmin = new NewRegisteration((object)$data);
        //     Mail::to(config('app.MAIL_FROM_ADDRESS'))->queue($emailAdmin);

        // } catch (\Exception $e) {
        //     dd($e);
        // }


       $user = User::create([
            'name' => $data['name'],
            'username' => $data['name'],
            'email' => $data['email'],
            'is_school' => 0,
            'verified' => 1,
            'active' => 1,
            'password' => bcrypt($data['password']),
        ]);

        return isset($user) ? true : false;
    }
    public function app_register(RegisterUserRequest $request){
        $response = $this->RequestExecutor->execute($request);
        return response()->json($response);
    }

    public function verify($token){
        $user = User::where('email_token',$token)->first();
        if($user->verified != 1){
            $user->verified = 1;
            if($user->save()){
                try {
                    $mailCongrats = new Congratulation($user);
                    Mail::to($user->email)->queue($mailCongrats);

                } catch (\Exception $e) {
                    dd($e);
                }
            }
        }
        return view('email.emailConfirmation',['user'=>$user]);
    }

    public function resendmail(Request $request)
    {
        $data['email'] = $request->input('email');
        $data['email_token'] = $request->input('email_token');
        $data['name'] = $request->input('name');
        $user = User::where('email_token',$data['email_token'])->first();
        if($user->verified != 1){
            try {
                $email = new EmailVerification((object)$data);
                Mail::to($data['email'])->send($email);
            } catch (\Exception $e) {
                dd($e);
            }
        }
        return redirect()->back()->with('message', 'Email has been send successfully');
    }
}
