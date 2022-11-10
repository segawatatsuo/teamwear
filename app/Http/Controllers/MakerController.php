<?php

namespace App\Http\Controllers;

use App\Models\Maker;
use Illuminate\Http\Request;

class MakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$maker = Maker::all();
        $makers = Maker::paginate(8);
        return view("makers.index", compact('makers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("makers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maker = Maker::create([
            'content' => $request->content,
            'person' => $request->person,
            'address' => $request->address,
            'tel' => $request->tel,
            'fax' => $request->fax,
            'mail' => $request->mail,
        ]);

        //$makers = Maker::all();
        $makers = Maker::paginate(8);
        //return view('makers.index',compact('makers'));
        return redirect(route('makers.index',compact('makers')))->with('flash_message', '登録しました');      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maker  $maker
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $maker = Maker::find($id);
        return view('makers.show',compact('maker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maker  $maker
     * @return \Illuminate\Http\Response
     */
    public function edit(Maker $maker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maker  $maker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $maker = Maker::find($id);
        $maker->fill($request->all())->save();
        return redirect(route('makers.index'))->with('flash_message', '更新しました');      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maker  $maker
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maker = Maker::find($id);
        $maker->delete();
        return redirect(route('makers.index'))->with('flash_message', '削除しました');
    }
}
