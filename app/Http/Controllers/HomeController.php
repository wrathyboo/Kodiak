<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function goToAdmin()
    {
        
        if (Auth::check()){
            $user = Auth::user();
        if (!empty($user->meta_value)){
            if ($user->meta_value == 'Administrator'){
                return redirect()->route('admin.index', [$user->profile->username]);
            }
        }
        }
        else return redirect()->route('home');
    }
}
