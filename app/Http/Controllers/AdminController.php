<?php

namespace App\Http\Controllers;

use App\Models\Applist;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profiles;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Profiler\Profile;

Gate::define('admin-access', function (User $user) {
    // $user = User::find(1);
    return $user->meta_value == 'Administrator'
        ? Response::allow()
        : Response::deny('You must be an administrator.');
        // $response = Gate::inspect('admin-access');
        // if ($response->allowed()) {
        //     // The action is authorized...
        //     return view('admin');
        // } else {
        //     echo $response->message();
        // }
});
class AdminController extends Controller
{
    //
    public function auth()
    {
        Gate::authorize('admin-access');
        $_Auth = Auth::user();
        $users = count(User::all());
        $products = count(Applist::all());
        $profile = Profiles::find($_Auth->id);
        return view('admin-dash', compact('_Auth','users','products'));
    }
    public function create()
    {
        $user = new User();
        $profile = new Profiles();
        $user->name = request('firstname') . ' ' . request('lastname');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->meta_value = request('meta_value');
        $user->save();
        $profile->id = $user->id;
        $profile->username = strtolower(request('username'));
        $profile->steam_id = request('steam_id');
        $profile->phone = request('phonenumber');
        $profile->birthdate = request('birthdate');
        $profile->country = request('country');
        $profile->address = request('address');
        if (request('avatar')) {
            if (request('avatar')->isValid()) {
                $file = request('avatar');
                $newImage = generateClientFilename($user->id, $file->getClientOriginalExtension());
                $file->move(public_path('images/profiles/'), $newImage); 
                $profile->avatar = $newImage;
            }
        }
        $profile->save();
        return redirect()->route('account.list');
    }
}
