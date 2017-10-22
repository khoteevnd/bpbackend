<?php

namespace budprirodi\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class UserController extends Controller
{
		protected $upload_path = DIRECTORY_SEPARATOR."uploads".DIRECTORY_SEPARATOR."avatars".DIRECTORY_SEPARATOR;

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
        if(!$request->hasFile('avatar')) {
            return response("Файл не завантажений!");
        }

        $avatar = $request->file('avatar')->store('avatar');
        $arr['avatar'] = $avatar;

        $visibility = Storage::getVisibility($avatar);
        $arr['visibility'] = $visibility;

	      $exists = Storage::disk('local')->exists($avatar);
	      $arr['exists'] = $exists;

	      $setVisibility = Storage::setVisibility($avatar, 'private');

	      dd(Storage::files("public"), $exists);
            //$filename = time()."_".$avatar->getClientOriginalName();
            //dd($filename, $avatar);
/*            Image::make($avatar)->resize(300, 300)->save(public_path($this->upload_path.$filename));

            $user = Auth::user();

            if($user->avatar != "" || $user->avatar != null)
            {
            	dd($user->avatar);
            } else {
            	dd($user-avatar);
            }
            $user->avatar = $filename;
            $user->save();*/

        return view('users.profile', ['user' => Auth::user()] );//, array('user' => Auth::user()) );
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
