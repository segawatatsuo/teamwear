<?php

namespace App\Http\Controllers;

use App\Models\PulldownMain;
use App\Models\PulldownDetail;
use Illuminate\Http\Request;

class PulldownMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pulldowns = PulldownMain::paginate(8);
        return view("pulldowns.index", compact('pulldowns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pulldowns.create", );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->input('content');
        $PulldownMain = PulldownMain::create(['name' => $name]);
        return redirect(route('pulldowns.index'))->with('flash_message', '登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pulldown_main  $pulldown_main
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pulldown = PulldownMain::find($id);
        return view('pulldowns.show',compact('pulldown') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pulldown_main  $pulldown_main
     * @return \Illuminate\Http\Response
     */
    public function edit(Pulldown_main $pulldown_main)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pulldown_main  $pulldown_main
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect(route('pulldowns.index'))->with('flash_message', '更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pulldown_main  $pulldown_main
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = PulldownMain::find($id);
        $product->delete();
        return redirect(route('pulldowns.index'))->with('flash_message', '削除しました');
    }
}
