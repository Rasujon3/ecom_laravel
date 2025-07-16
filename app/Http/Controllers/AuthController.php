<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function userRegister(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'first_password' => 'required|min:4',
            're_password' => 'required|same:first_password',
            'name' => 'required',
            'mobile' => 'required',
        ]);

        $response = Http::asForm()->post('https://prodhanltd.com/api/join.php', [
            'user_name' => $request->mobile,
            'password' => '0',
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'gender' => $request->gender ?? '',
            'agent' => '0',
            'nid' => $request->nid ?? '',
            'referral_id' => $request->referral_id ?? '0',
            'first_password' => $request->first_password,
            're_password' => $request->re_password,
            'country' => 'BD',
            'type' => '0',
            'category' => '0',
            'division' => '0',
            'distict' => '0',
            'thana' => '0',
            'user' => $request->mobile,
            'product' => '0',
            'placement_id' => '0',
            'placement_hand' => '0',
            'euser' => '0'
        ]);

        $data = $response->json();

        if ($data['error'] == 0) {
            // Save session
            Session::put('user_id', $data['user_id']);
            Session::put('voucher', $data['voucher']);
            Session::put('name', $request->name);
            Session::put('mobile', $request->mobile);

            return redirect()->route('checkout')->with('success', 'Registration successful!');
        }

        return redirect()->back()->with('error', $data['error_report'] ?? 'Something went wrong.');
    }
    public function logout()
    {
        session()->forget(['user_id', 'voucher', 'name', 'mobile']);
        return redirect('/')->with('success', 'Logged out successfully');
    }
}
