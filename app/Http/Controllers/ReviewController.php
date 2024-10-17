<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:200',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'description.max' => 'Deskripsi maximal 200 karakter !',
        ]);

        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
        } else {
            $imageName = null;
        }

        Review::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'photo' => $imageName,
        ]);

        return redirect()->route('reviews.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
{
    // Mengirim review ke view 'edit' tanpa perlu findOrFail
    return view('reviews.edit', compact('review'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'description' => 'required',
        'name' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    
    // Cari review berdasarkan ID
    $review = Review::findOrFail($id);

    // Update data review
    $review->description = $request->description;
    $review->name = $request->name;

    // Jika ada file foto baru yang diupload, hapus foto lama dan simpan yang baru
    if ($request->hasFile('photo')) {
        // Hapus foto lama jika ada
        if (File::exists(public_path('images/' . $review->photo))) {
            File::delete(public_path('images/' . $review->photo));
        }

        // Simpan foto baru
        $fileName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $fileName);
        $review->photo = $fileName;
    }

    // Simpan perubahan ke database
    $review->save();

    // Redirect dengan pesan sukses
    return redirect()->route('reviews.index')->with('success', 'Review berhasil diupdate!');
}
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->route('reviews.index')->with('success');
    }
}
