<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Artical;

class ArticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Articals = Artical::all();
        return view('articals.list',compact('Articals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articals.add_artical');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Artical::create($request->all());
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('articals.single_artical');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(request $request,$id)
    {
        $Artical = Artical::find($id);
        return view('articals.edit_artical',compact('Artical'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Artical = Artical::find($id);
        $Artical->title = $request->title;
        $Artical->description = $request->description;
        $Artical->author = $request->author;
        if($Artical->save())
        {
            return redirect('/');
        }else{
            echo "some thing wents to wrong";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Artical = Artical::find($id);
        $Artical->delete();
        return redirect('/');

    }
}
