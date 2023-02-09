<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjamans = Peminjaman::latest()->paginate(5);
        return view('peminjamans.index',compact('peminjamans'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peminjamans.create');
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
            'nama_peminjam' => 'required',
            'barang_pinjam' => 'required',
            'tgl_pinjam' => 'required',
            ]);
            Peminjaman::create($request->all());
            return redirect()->route('peminjamans.index')
            ->with('success','peminjaman created successfully.');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        return view('peminjamans.show',compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        return view('peminjamans.edit',compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'nama_peminjam' => 'required',
            'barang_pinjam' => 'required',
            'tgl_pinjam' => 'required',
            ]);
            $peminjaman->update($request->all());
            return redirect()->route('peminjamans.index')
            ->with('success','peminjaman updated successfully');            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();
        return redirect()->route('peminjamans.index')
        ->with('success','Peminjaman deleted successfully');

    }
}
