<?php

namespace App\Http\Controllers;


use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
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

    public function create()
    {
        //

        return view('admin.gallery.create');
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
        //
        $input = $request->all();

        if($file=$request->file('image'))
        {
            $name=$file->getClientOriginalName();
            $file->move("gallery",$name);
            $input['image']=$name;

        }
        Album::create($input);
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
        return view('admin.gallery.show.',compact('gallery'));

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
        $gallery=Gallery::findOrFail($id);
        return view('admin.gallery.edit.',compact('gallery'));
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

        return redirect('admin/gallery');
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
        return redirect('/admin');

    }
}
