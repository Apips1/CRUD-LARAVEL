<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(Request $request)
    // {
    //     //
    //     $mahasiswa = Mahasiswa::query()->latest()->filter($request->query())->get();
    //     return view('index',[
    //         'mahasiswa' => $mahasiswa
    //     ]);
    // }
   public function index(Request $request)
{
    $search = $request->query('search');
    $sort = $request->query('sort', 'asc');

    // Membuat query builder untuk model Mahasiswa
    $query = Mahasiswa::query();

    // Jika ada pencarian, filter data
    if ($search) {
        $query->where('email', 'like', "%$search%");
            //   ->orWhere('nama', 'like', "%$search%")
            //   ->orWhere('email', 'like', "%$search%")
            //   ->orWhere('jurusan', 'like', "%$search%")
            //   ->orWhere('prodi', 'like', "%$search%");
    }

    // Menentukan urutan data
    $query->orderBy('nama', $sort);

    // Mendapatkan hasil query dengan metode get()
    $mahasiswa = $query->get();

    return view('index', compact('mahasiswa', 'sort', 'search'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $value = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required'
        ]);

        Mahasiswa::create($value);

        return redirect('/');
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

        $edit=Mahasiswa::find($id)->first();

        return view('edit')->with('edit', $edit);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $value = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi
        ];
        Mahasiswa::where('id', $id)->update($value);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Mahasiswa::find($id)->delete();
        return redirect('/');
    }
}
