<?php

namespace App\Http\Controllers;

use App\Presenter;
use Illuminate\Http\Request;

class PresenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presenters = Presenter::orderBy('name')->paginate(100);

        return view('presenters',compact('presenters'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Presenter  $presenter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('show', ['presenter'=> Presenter::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Presenter  $presenter
     * @return \Illuminate\Http\Response
     */
    public function edit(Presenter $presenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Presenter  $presenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presenter $presenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Presenter  $presenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presenter $presenter)
    {
        //
    }
}
