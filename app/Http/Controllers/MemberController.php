<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $member=Member::all();
        return view('admin.member.index',compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //

        return view('admin.member.create');
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
            $file->move("member",$name);
            $input['image']=$name;

        }
       Member::create($input);
        return redirect('member/create');
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
        $member=Gallery::findOrFail($id);
        return view('admin.member.show.',compact('member'));

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
        $member=Member::findOrFail($id);
        return view('admin.member.edit.',compact('member'));
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
        $member=Member::findOrFail($id);
        $member->update($request->all());

        return redirect('admin/member');
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
        $member=Member::findOrFail($id);
        $member->delete($id);
        return redirect('/admin');

    }
}
