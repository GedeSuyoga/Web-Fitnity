<?php

namespace App\Http\Controllers;
use App\Models\event;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = event::orderBy('tanggal','desc')->get();
        return view('admin.admin')->with('event',$events);
    }

    public function eventindex(){
        $events = event::orderBy('tanggal','desc')->get();
        return view('event')->with('event',$events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addevent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming data including file upload
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'tempat' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link'=>'required',
        ]);
    
        // Handle file upload
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/gambar', $imageName); // Store in storage/app/public/gambar directory
            $validatedData['gambar'] = $imageName; // Save only the filename to the database
        }
    
        // Create new event
        Event::create($validatedData);
    
        // Redirect back or to desired route
        return redirect('/adminPage');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nama)
    {
        event::where('nama',$nama)->delete();
        return redirect('/adminPage');
    }
}