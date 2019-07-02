<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

/**
 *
 */
trait CaptchaTraite
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function myCaptcha()
    {
        return view('myCaptcha');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function myCaptchaPost(Request $request)
    // {
    //     request()->validate([
    //             'email' => 'required|email',
    //             'password' => 'required',
    //             'captcha' => 'required|captcha'
    //         ],
    //         ['captcha.captcha'=>'Invalid captcha code.']
    //     );
    //     return true;
    // }


    public function captchaValidator(request $request) {
        return ['captcha' => 'required|captcha'];
    }




    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function refreshCaptcha()
    {
        return   captcha_img();
    }
}
