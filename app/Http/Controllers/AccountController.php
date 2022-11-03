<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File; 
use App\Models\Profiles;

class AccountController extends Controller
{
    //
    public function login()
    {
       
       $info = request()->only('email','password');
       if (Auth::attempt($info)) {
         if (Auth::user()->meta_value == 'Administrator'){
            return redirect()->route('home');
         }
         else return redirect()->route('home');
       } 
       return redirect()->back()->with('no','');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function create(){
        $account = [
            'name'     => request('firstname') . ' ' . request('lastname'),
            'email'    => request('email'),
            'password' => bcrypt(request('password')),
        ];
        $user = User::create($account);
        $setupProfile = [
            'id' => $user->id,
            'username' => request('username'),
            'phone'    => request('phonenumber'),
            'address'  => request('address'),
            'country'  => request('ec_select_country'),
            'steam_id' => request('steam_id'),
            'api_key'  => request('api_key'),
        ];
        $user->profile()->create($setupProfile);
        return redirect()->route('home');
    }
    public function update($id)
    {
        $user = User::find($id);
       
        $user->name     = request('firstname') . ' ' . request('lastname');
        $user->email    = request('email');
        $user->profile->username = request('username');
        $user->profile->phone    = request('phonenumber');
        $user->profile->address  = request('address');
        $user->profile->country  = request('ec_select_country');
        $user->profile->steam_id = request('steam_id');
        $user->profile->api_key  = request('api_key');
       
        if (request('avatar')) {
            if (request('avatar')->isValid()) {
                $file = request('avatar');
                $newImage = generateClientFilename($user->id, $file->getClientOriginalExtension());
                if (file_exists(public_path('images/profiles/'.'/'.$newImage))){
                    File::delete(public_path('images/profiles/'.'/'.$newImage));
                }
                
                $file->move(public_path('images/profiles/'), $newImage);
               
                $user->profile->avatar = $newImage;
            }
        }
        if (($user->update() && $user->profile->update())){
            return redirect()->route('user.profile', [$id])->with('success','Record saved');
        }
        else {
            return redirect()->route('user.profile', [$id])->with('error','Something wrong');
        }
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        return  redirect()->back();
    }
    public function list()
    {
        $value = (!empty(request('sort')) ? request('sort') : 'created_at-asc');
        $selected = $value;
        $parts = explode("-",$value);
        $_Auth = Auth::user();
        $list = User::orderBy($parts[0], $parts[1])->paginate(6);
        $rank = $list->firstItem();
        return view('admin-pages.account-list', compact('list','rank','_Auth','selected'));
    }
}
