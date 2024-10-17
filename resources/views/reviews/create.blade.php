@extends('layout.layout')

@section('main')
<form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
    @csrf  <!-- Ini penting untuk keamanan, mencegah CSRF attacks -->
    
    <div class="m-4">
    <!-- Field input seperti nama, deskripsi, foto -->
    <div class="form-group mb-3">
        <label for="name" class="form-label">Nama :</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label for="description" class="form-label"> Deskripsi Review Produk :</label>
        <textarea name="description" class="form-control" rows="5" required></textarea>
    </div>

    <div class="form-group mb-3">
        <label for="photo" class="form-label">Upload Foto :</label>
        <input type="file" name="photo" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit Review</button>
</form>
</div>

@endsection
