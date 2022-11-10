<?php

namespace App\Http\Controllers;

use App\Models\Age;
use Illuminate\Http\Request;

class AgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ages = Age::paginate(8);
        return view("ages.index", compact('ages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("ages.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maker = Age::create([
            'content' => $request->content,
        ]);

        //$makers = Maker::all();
        $ages = Age::paginate(8);
        //return view('makers.index',compact('makers'));
        return redirect(route('ages.index', compact('ages')))->with('flash_message', '登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $age = Age::find($id);
        return view('ages.show', compact('age'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function edit(Age $age)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $age = Age::find($id);
        $age->fill($request->all())->save();
        return redirect(route('ages.index'))->with('flash_message', '更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $age = Age::find($id);
        $age->delete();
        return redirect(route('ages.index'))->with('flash_message', '削除しました');
    }
}
