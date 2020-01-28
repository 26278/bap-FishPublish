<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fish;


class FishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fish.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fishData = $request->validate(
            [
                'species' => 'required | min:3',
                'length' => 'required | numeric | gt:0',
                'weight' => 'nullable | numeric | gt:0',
                'description' => 'required | min:10',
            ]
        );

        // Gegevens opslaan in de database

        $fish = new Fish();
        $fish->species = $fishData['species'];
        $fish->length = $fishData['length'];
        $fish->weight = $fishData['weight'];
        $fish->description = $fishData['description'];

        $fish->save();

        return "Mooi man!";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}