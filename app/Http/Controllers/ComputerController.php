<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Computer;
use App\Models\Room;


class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers = Computer::all();
        return view('computer.index', compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view('computer.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required',
            'brand_id' => 'required',
        ]);

        Computer::create(
            [
                'name' => $request->name,
                'brand_id' => $request->brand_id,
            ]
        );
        return redirect()->route('computer.index')->with('success', 'Computer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function show(Computer $computer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function edit(Computer $computer)
    {
        $computer = Computer::find($computer->id);
        $rooms = Room::all();
        $brands = Brand::all();

        return view('computer.edit', compact('computer', 'rooms', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computer $computer)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'brand_id' => 'required',
            'room_id' => 'required',
            'condition' => 'required',
        ]);

        $computer->update(
            [
                'name' => $request->name,
                'brand_id' => $request->brand_id,
                'room_id' => $request->room_id,
                'condition' => $request->condition,
            ]
        );
        return redirect()->route('computer.index')->with('success', 'Computer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computer $computer)
    {
        $computer->delete();
        return redirect()->route('computer.index')->with('success', 'Computer deleted successfully');
    }

    public function status()
    {
        $computers = Computer::all();
        return view('computer.status', compact('computers'));
    }
}