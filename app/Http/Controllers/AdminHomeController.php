<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use  \Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;


class AdminHomeController extends Controller
{
    public function index(){


        return view('adminPanel.index');


    }
    public function login(){
       
        return view('adminPanel.login');
       


    }


    public function logincheck(Request $request)
    {
 
            if($request->isMethod('post'))
            { 
                        $credentials = $request->only('email');



                        


                        if (!Auth::attempt($credentials)) {

                            $request->session()->regenerate();

                            return redirect()->intended('/admin');

                        }

                        else{

                            
                        return back()->withErrors([

                            'email' => 'The provided credentials do not match our records.'
                        ]);
                        

                        }

            }
            else{
            
                

                                return view('adminPanel.login');

            }

            }
        }
/*



*/


