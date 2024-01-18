<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use PasswordValidationRules;

    public function update(Request $request) {


        $data = [
            'title' => $request['title'],
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'birthdate' => $request['birthdate']
        ];

        if ($request->password != null && $request->password == $request->password_confirmation) {
            $data['password'] = Hash::make($request['password']);
        } 

        User::where('id', $request->id)->first()->update($data);

        return redirect(route('account') . "#detail");
    }
}
