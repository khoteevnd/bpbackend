<?php

namespace budprirodi\Http\Controllers;

use Validator;
use budprirodi\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_link = Link::all();
        return view("links.index")->with('links', $all_link);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required|max:255|min:3',
            'href' => 'required|min:3',
            'order' => 'required|integer',
        ]);



        if ($validator->fails()) {
            return redirect('links/create')
                ->withErrors($validator)
                ->withInput();
        }

        $link = new Link([
            'text' => $request->get('text'),
            'href' => $request->get('href'),
            'order' => $request->get('order'),
        ]);

        $link->save();
        return redirect('/links');
    }

    /**
     * Display the specified resource.
     *
     * @param  \budprirodi\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        return view('links.show', ['link' => $link]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \budprirodi\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        return view('links.edit')->with('link', $link);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \budprirodi\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required|max:255|min:3',
            'href' => 'required|min:3',
            'order' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return redirect('links/'.$link->id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $link->text = $request->get('text');
        $link->href = $request->get('href');
        $link->order = $request->get('order');

        $link->saveOrFail();

        return redirect()->route('links.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \budprirodi\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        $link->delete();
        return back();
    }
}
