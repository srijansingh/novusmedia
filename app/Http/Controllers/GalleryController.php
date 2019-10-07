<?php

namespace App\Http\Controllers;

use App\Album;
use App\Gallery;
use App\Member;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
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
        //
        $gallery=Gallery::all();
        return view('admin.gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(){


        return view('admin.gallery.create')
        ->with('album',Album::all())
        ->with('member',Member::all());
    }

    /*
     *
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request00
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $input = $request->all();

        if($file=$request->file('file'))
        {
            $name=$file->getClientOriginalName();
            $file->move("gallery",$name);
            $input['image']=$name;
        }
        Gallery::create($input);
        return redirect('gallery/create');
    }

    /*
     *
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
        $gallery=Gallery::findOrFail($id);
        return view('admin.gallery.show',compact('gallery'));

    }

    /*
     *
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //

        return view('admin.gallery.edit')
            ->with('gallery',Gallery::findOrFail($id))
            ->with('album',Album::all())
            ->with('member',Member::all());
    }

    /*
     *
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $gallery=Gallery::findOrFail($id);
        $gallery->update($request->all());

        return redirect('/gallery');
    }

    /*
     *
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gallery=Gallery::findOrFail($id);
        $gallery->delete($id);
        return redirect('/gallery');

    }
}
