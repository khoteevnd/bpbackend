<?php

namespace budprirodi\Http\Controllers;

use Validator;
use Illuminate\Http\FileHelpers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class UserController extends Controller
{
    use FileHelpers;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        return view('users.profile', ['user' => Auth::user()] );
    }

    /**
    * @param Request $request
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function update_avatar(Request $request)
    {


        $pathToSaveAvatar = 'public/avatar';

        $validator = Validator::make($request->all(), [
            'avatar' => 'required|mimes:jpeg,bmp,png|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect('profile')
                ->withErrors($validator);
        }

        $image = Image::make($request->file('avatar'));

        $response = function($image){
            $response = Response::setContent($image);
            $response->header('Content-Type', 'image/jpg');
            return $response;
        };

        if($image->height() == $image->width() ) {
            $image->resize(300,300, function($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            $response($image);
        } else if ($image->height() > $image->width()){
            $image->resize(300, null, function($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $response($image);
        } else {
            $image->resize(null, 300, function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $response($image);
        }

        $user = Auth::user();

        Storage::delete($user->avatar);

        $avatar = $request->file('avatar')->storePublicly($pathToSaveAvatar, ['visibility' => 'public']);
        $user->avatar = $avatar;
        $user->save();

        return view('users.profile', ['user' => Auth::user()] );
    }

    public function getFiles($dir)
    {
        //dd($dir);

        $files = Storage::files($dir);

        dd($files);
    }

    public function getAllFiles($dir)
    {

        $files = Storage::allFiles();
        $directories = Storage::allDirectories();
        dd($files, $directories);
    }

    public function storage()
    {
        $files = Storage::allFiles();

        dd($files);
    }
}
