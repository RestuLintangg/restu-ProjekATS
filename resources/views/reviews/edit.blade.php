@extends('layout.layout')

@section('main')
<div class="container mt-5">
    <!-- Tampilkan pesan error jika ada -->
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li> <!-- Tampilkan semua error -->
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('reviews.update', $review->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Masukkan Nama :</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $review->name) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label"> Tuliskan Deskripsi :</label>
            <textarea name="description" class="form-control" id="description" rows="3">{{ old('description', $review->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Masukkan Photo :</label>
            <input type="file" class="form-control" id="photo" name="photo">
            <img src="{{ asset('images/' . $review->photo) }}" alt="Current photo" width="150" class="mt-2">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Update Review</button>
    </form>
</div>
@endsection
