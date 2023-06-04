<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class SystemController extends Controller
{
    function index(){
        return view('login');
    }

    function shop(){
        $products=Product::all();
        return view('shop',['prod'=>$products]);
    }


    function register(){
        return view('register');
    }
    function validate_register(Request $request)
    {
        $request->validate([
            'name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:6'
        ]);

        $data = $request->all();

        User::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('login')->with('success', 'Registration Completed, now you can login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        }

        return redirect('login')->with('success', 'Login details are not valid');
    }

    function dashboard()
    {
        if(Auth::check())
        {
            $products=Product::all();
            return view('dashboard',['prod'=>$products]);
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

    function add_product(){
        return view('add_product');
    }

    function validate_product(Request $request)
    {
        $request->validate([
            'product_name'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'note'=>'required',
            'images'=>'required'
        ]);

        $requsetData = $request->all();
        $fileName = time().$request->file('images')->getClientOriginalName();
        $path = $request->file('images')->storeAs('images',$fileName,'public');
        $requsetData['images']='/storage/'.$path;

        Product::create($requsetData);
        return redirect('dashboard');
    }




    function logout()
    {
        session()->flush();

        Auth::logout();

        return Redirect('login');
    }
}
