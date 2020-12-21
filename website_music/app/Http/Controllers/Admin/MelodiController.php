<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Melodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class MelodiController extends Controller
{

    public function welcome()
    {
        $melodies = Melodi::get();
        return view('welcome', compact('melodies'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $melodis = Melodi::paginate(10);
        return view('admin.melodi.list', compact('melodis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.melodi.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => [
                'file', 'max:5120'
            ]
        ]);

        $data = $request->only([
            'title', 'singer'
        ]);

        // $data['address'] = ($request->hasFile('file') && $file = $request->file('file'))
        //     ? $file->store('/melodies')
        //     : null;

        if ($request->hasFile('file') && $file = $request->file('file')) {
            $fileName = time(). '.' . $file->extension();
            $path = public_path('/music');
            $data['address'] = '/music/' . $fileName;
            $file->move($path, $fileName);
        }

        Melodi::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Melodi  $melodi
     * @return \Illuminate\Http\Response
     */
    public function show(Melodi $melodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Melodi  $melodi
     * @return \Illuminate\Http\Response
     */
    public function edit(Melodi $melodi)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Melodi  $melodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Melodi $melodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Melodi  $melodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Melodi $melodi)
    {
        $path = public_path($melodi->address);
        if (File::exists($path)) {
            File::delete($path);
        }
        $melodi->delete();
        return redirect()->back();

    }
}
