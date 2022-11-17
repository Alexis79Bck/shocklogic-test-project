<?php

namespace App\Http\Controllers\CustomAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function register(Request $request) {
        $validate = $this->validatePassword($request->password);

        if ($validate['passed']) {
           $dataValid = $request->validate([
                'firstname' => ['required', 'string'],
                'familyname' => ['required', 'string'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'confirmed']
           ]);

            $user = new User;
            $user->firstname = $request->firstname;
            $user->familyname = $request->familyname;
            $user->bday = $request->bday ?? null;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            return redirect()->to('login')->with('message','Now you can Login.');

        }else{
            //dd('Cuando es invalido.', $request->password, $validate);
            return redirect()->to('register')->with([
                'digitStatus'=>$validate['digitStatus'],
                '8CharLenghtStatus' => $validate['8CharLenghtStatus'],
                'lowercaseCharStatus'=>$validate['lowercaseCharStatus'],
                'uppercaseCharStatus'=>$validate['uppercaseCharStatus'],
                'specialCharStatus'=>$validate['specialCharStatus']
                ])->withInput();
           // return view('auth.theme.register', ['dataInvalidated'=>$validate]));
        }

    }



    private function validatePassword(string $password) {
        $has8CharLenght = false;
        $hasDigit = false;
        $hasLowercaseChar = false;
        $hasUppercaseChar = false;
        $hasSpecialChar = false;
         //preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!"#$%&*-+_.])/, $password)
        if (strlen($password) >= 8) {
            $has8CharLenght = true;
            $has8CharLenghtStatus = 'success';
        }else{
            $has8CharLenghtStatus = 'danger';
        }
        if (preg_match('/^(?=.*\d)/',$password)) {
            $hasDigit = true;
            $hasDigitStatus = 'success';
        }else{
            $hasDigitStatus = 'danger';
        }
        if (preg_match('/^(?=.*[a-z])/',$password)) {
            $hasLowercaseChar = true;
            $hasLowercaseCharStatus = 'success';
        }else{
            $hasLowercaseCharStatus = 'danger';
        }
        if (preg_match('/^(?=.*[A-Z])/',$password)) {
            $hasUppercaseChar = true;
            $hasUppercaseCharStatus = 'success';
        }else{
            $hasUppercaseCharStatus = 'danger';
        }
        if (preg_match('/^(?=.*[!"#$%&*-+_.])/',$password)) {
            $hasSpecialChar = true;
            $hasSpecialCharStatus = 'success';
        }else{
            $hasSpecialCharStatus = 'danger';
        }
        if ($has8CharLenght && $hasDigit && $hasLowercaseChar && $hasUppercaseChar && $hasSpecialChar) {
            return [
                'passed'=> true,
                '8CharLenghtStatus' => $has8CharLenghtStatus,
                'digitStatus' => $hasDigitStatus,
                'lowercaseCharStatus' => $hasLowercaseCharStatus,
                'uppercaseCharStatus' => $hasUppercaseCharStatus,
                'specialCharStatus' => $hasSpecialCharStatus
                ];
        }else{
            return [
                'passed' => false,
                '8CharLenghtStatus' => $has8CharLenghtStatus,
                'digitStatus' => $hasDigitStatus,
                'lowercaseCharStatus' => $hasLowercaseCharStatus,
                'uppercaseCharStatus' => $hasUppercaseCharStatus,
                'specialCharStatus' => $hasSpecialCharStatus
                ];
        }
    }
}
