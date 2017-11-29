<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Input;

class HealthTestController extends Controller
{
    public function create()
    {
        $inputs = Input::except('_token', 'Submit', 'email');
        $values = array_values($inputs);
        $user = new User();
        $email_input = Input::only('email');
        $email = $email_input['email'];
        $user->email = $inputs = $email . rand(1, 1000);
        $user->name = $email;
        $user->password = bcrypt($email);
        $user->save();
        $user->answers()->sync($values);
    }
}
