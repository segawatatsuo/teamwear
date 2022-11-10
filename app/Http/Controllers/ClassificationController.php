<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classifications = Classification::paginate(8);
        return view("classifications.index", compact('classifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("classifications.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maker = Classification::create([
            'content' => $request->content,
        ]);

        //$makers = Maker::all();
        $classification = Classification::paginate(8);
        return redirect(route('classifications.index', compact('classification')))->with('flash_message', '登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classification = Classification::find($id);
        return view('classifications.show', compact('classification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function edit(Classification $classification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $classification = Classification::find($id);
        $classification->fill($request->all())->save();
        return redirect(route('classifications.index'))->with('flash_message', '更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classification  $classification
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classification = Classification::find($id);
        $classification->delete();
        return redirect(route('classifications.index'))->with('flash_message', '削除しました');
    }
}
