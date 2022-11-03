<?php

namespace App\Http\Controllers;

use App\Models\Applist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    //
    public function store()
    {
        if (!count(Applist::all())) {
            $app = backupData();
            foreach ($app as $appid) {
                if (!empty(@getimagesize("https://steamcdn-a.akamaihd.net/steam/apps/" . $appid . "/library_600x900_2x.jpg"))) {
                    $genres = array();
                    $appDetails = getAppDetails($appid, false);
                    $app = new Applist();
                    $app->id = $appid;
                    $app->name = !empty($appDetails->$appid->data) ? $appDetails->$appid->data->name : "Unknown";
                    $app->status = request('status');
                    if (!empty($appDetails->$appid->data)) {
                        foreach ($appDetails->$appid->data->genres as $genre) {
                            array_push($genres, $genre->description);
                        }
                    }
                    $app->genres = json_encode($genres);
                    $app->save();
                }
            }
            return redirect()->back();
        }
        if (!empty(request('id'))) {
            if (!(Applist::where('id', Request('id'))->exists())) {
                $id = Request('id');
                $genres = array();
                $appDetails = getAppDetails($id, false);
                $app = new Applist();
                $app->id = $id;
                $app->name = $appDetails->$id->data->name;
                $app->status = request('status');
                foreach ($appDetails->$id->data->genres as $genre) {
                    array_push($genres, $genre->description);
                }
                $app->genres = json_encode($genres);
                $app->save();
                return redirect()->back();
            } else  return redirect()->back();
        } else  return redirect()->back();
    }
    public function destroy($id)
    {
        Applist::find($id)->delete();
        return  redirect()->back();
    }
    public function list()
    {
        $_Auth = Auth::user();
        $applist = Applist::all();
        return view('admin-pages.library', compact('applist', '_Auth'));
    }
    public function wishlist($id)
    {

        $wishlist = getPlayerWishlist($id);
        $_Auth = Auth::user();
        return view('admin-pages.wishlist', compact('wishlist', '_Auth'));
    }
}
