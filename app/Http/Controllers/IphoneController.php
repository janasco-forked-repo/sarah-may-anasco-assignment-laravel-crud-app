<?php

namespace App\Http\Controllers;

use App\Models\Iphone;
use Illuminate\Http\Request;

class IphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $iphones = Iphone::latest()->paginate(500); //paginate every 500 lines
    
        return view('iphones.index',compact('iphones'))
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
        return view('iphones.create');
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
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        Iphone::create($request->all());
     
        return redirect()->route('iphones.index')
                        ->with('success','iPhones created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iphones  $iphones
     * @return \Illuminate\Http\Response
     */
    public function show(Iphone $iphone)
    {
        //
        return view('iphones.show',compact('iphone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iphones  $iphones
     * @return \Illuminate\Http\Response
     */
    public function edit(Iphone $iphone)
    {
        //
        return view('iphones.edit',compact('iphone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Iphones  $iphones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iphone $iphone)
    {
        //
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $iphone->update($request->all());
    
        return redirect()->route('iphones.index')
                        ->with('success','iPhone updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iphones  $iphones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iphone $iphone)
    {
        //
        $iphone->delete();
    
        return redirect()->route('iphones.index')
                        ->with('success','iPhone deleted successfully');
    }
}
