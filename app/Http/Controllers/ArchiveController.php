<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Profiles;
use Illuminate\Support\Facades\Auth;
use App\Models\Applist;

class ArchiveController extends Controller
{
    //

    public function test(){
        $url = json_decode(file_get_contents('http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key=12E14F3C39E05909822C0C23A2C12DDA&steamid=76561198857060587&format=json&include_played_free_games'),true);
        $id = 1174180;
        // $app = getAppDetails(1174180, true);
        // $game = array();
        // $user = Auth::user();
        // $wishlist = getPlayerWishlist($user->profile->steam_id);
        // // foreach ($app[$id]['data']['genres'] as $genre){
        
        // //     array_push($game, $genre['description']);
        // // }
        // foreach ($wishlist as $id => $key){
        //     array_push($game, $id);
        // }
        $app = array();
        foreach ($url['response']['games'] as $game){
            array_push($app, $game['appid']);
        }
        
        dd($app);
        
        return view('archive.test');
    }
    public function uploadCropImage(Request $request)
    {
        $folderPath = public_path('archive/images');
 
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
 
        $imageName = 'test' . '.jpg';
 
        $imageFullPath = $folderPath.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);
 
         $saveFile = Profiles::where('id', 2)->get(['avatar']);;
         $saveFile->avatar = $imageName;
         $saveFile->save();
    
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);
    }
    public function create_old()
    {
        $newImage = NULL;
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
            }
        }
        $profile->save();
    }
    public function create_withArray()
    {
        $newImage = NULL;
        $user = new User();

        $recordAccount = [
            'name' => request('firstname') . ' ' . request('lastname'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ];
        $user = User::create($recordAccount);
        if (request('avatar')) {
            if (request('avatar')->isValid()) {
                $file = request('avatar');
                $newImage = generateClientFilename($user->id, $file->getClientOriginalExtension());
                $file->move(public_path('images/profiles/'), $newImage);   
            }
        }
        $recordProfile = [
            'id' => $user->id,
            'username' => strtolower(request('username')),
            'steam_id' => request('steam_id'),
            'phone' => request('phonenumber'),
            'birthdate' => request('birthdate'),
            'country' => request('country'),
            'address' => request('address'),
            'avatar' => $newImage
        ];
        $user->profile()->create($recordProfile);
    }
}
