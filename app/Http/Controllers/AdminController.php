<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        $album=Album::all();
        return view('admin.album.index',compact('album'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //

        return view('admin.album.create');
    }

    /*
     *
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
        $input = $request->all();

/*        if($file=$request->file('file'))
        {
            $name=$file->getClientOriginalName();
            $file->move("album",$name);
            $input['albumimage']=$name;

        }*/
        Album::create($input);
        return redirect('album/create');
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
        $album=Album::findOrFail($id);
        return view('admin.album.show.',compact('album'));

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
        $album=Album::findOrFail($id);
        return view('admin.album.edit.',compact('album'));
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
            $album=Album::findOrFail($id);
            $album->update($request->all());

            return redirect('admin/album');
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
        $album=Album::findOrFail($id);
        $album->delete($id);
        return redirect('/admin');

    }
}
