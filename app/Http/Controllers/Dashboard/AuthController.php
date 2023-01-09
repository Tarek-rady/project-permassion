<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AuthRequest;
use App\Http\Requests\Dashboard\ResetRequest;
use App\Mail\ResetPassword;
use App\Repositories\Contract\UserRepositoryInterface;
use App\Repositories\Sql\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function showLoginForm()
    {
        return \view('dashboard.auth.login');
    }

    public function login(AuthRequest $request)
    {
        //attempt to log admin
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password ])) {
            return \redirect()->intended(route('admin.home'))->with('success', 'تم تسجيل الدخول بنجاح');
        }else{
            return redirect()->back()->with('error', 'البريد الالكترونى او كلمة المرور غير صحيحة');
        }



    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('admin.login');
    }






}
