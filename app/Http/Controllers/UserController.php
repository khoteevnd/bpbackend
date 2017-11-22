<?php

namespace budprirodi\Http\Controllers;

use Illuminate\Support\Str;
use Validator;
use Illuminate\Http\FileHelpers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;
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
        //
        $pathToSaveAvatar = 'app'.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'avatar'.DIRECTORY_SEPARATOR;
        $pathTmp = 'tmp'.DIRECTORY_SEPARATOR;

        $validator = Validator::make($request->all(), [
            'avatar' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect('profile')
                ->withErrors($validator);
        }

        $image = Image::make($request->file('avatar'));

        $saveTmpImage = function(&$image) use ($request, $pathToSaveAvatar, $pathTmp) {

            $tmpFileName = Str::random(40)."_".$request->avatar->getClientOriginalName();

            $image->save(storage_path($pathToSaveAvatar.$tmpFileName), 90);

            $tmpFullPath = storage_path($pathToSaveAvatar.$tmpFileName);

            if (file_exists($tmpFullPath) && is_file($tmpFullPath)){
                return $tmpFileName;
            }

            return false;
        };

        if($image->height() == $image->width() ) {
            $image->resize(300,300, function($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        } else if ($image->height() > $image->width()){
            $image->resize(300, null, function($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        } else {
            $image->resize(null, 300, function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }

        $tmpPath = $saveTmpImage($image);

        $user = Auth::user();

        Storage::delete('public'.DIRECTORY_SEPARATOR.'avatar'.DIRECTORY_SEPARATOR.$user->avatar);

        $user->avatar = $tmpPath;
        $user->save();

        $image->destroy();

        return redirect()->route('profile')->with('status', __('profile.updated'));
    }

    public function showEditPasswordView()
    {
        return view('users.editpassword');
    }

    public function getFiles($dir)
    {
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
