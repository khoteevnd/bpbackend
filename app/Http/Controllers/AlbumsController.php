<?php

namespace budprirodi\Http\Controllers;

use budprirodi\Albums;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AlbumsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('albums.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            '_token' => 'required'
        ]);

        $cover_image = $request->file('cover_image');

        return $input['imagename'] = time().'_'.$cover_image->getClientOriginalName().'.'.$cover_image->getClientOriginalExtension();

        //$destPath = public_path('/img');
        //$cover_image->move($destPath, $input['imagename']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \budprirodi\Albums  $albums
     * @return \Illuminate\Http\Response
     */
    public function show(Albums $albums)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \budprirodi\Albums  $albums
     * @return \Illuminate\Http\Response
     */
    public function edit(Albums $albums)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \budprirodi\Albums  $albums
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Albums $albums)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \budprirodi\Albums  $albums
     * @return \Illuminate\Http\Response
     */
    public function destroy(Albums $albums)
    {
        //
    }
}
