@extends('layout.layout')
@section('main')

<form action="{{ route('user.update', $user->id) }}" method="POST" class="card p-5">
    @csrf
    @method('PUT')
    
    @if(Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nama :</label>
        <div class="col-sm-10">
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email :</label>
        <div class="col-sm-10">
            <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="address" class="col-sm-2 col-form-label">Address :</label>
        <div class="col-sm-10">
            <input class="form-control" type="address" name="address" id="address" value="{{ old('address', $user->address) }}" required>
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input class="form-control" type="password" name="password" id="password" placeholder="Kosongkan Jika Tidak Mau Di Ubah">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="product" class="col-sm-2 col-form-label">Pilih Product :</label>
        <div class="col-sm-10">
            <select class="form-select" id="product" name="product">
                <option value="produk1">Product 1</option>
                <option value="produk2">Product 2</option>
                <option value="produk3">Product 3</option>
                <option value="produk4">Product 4</option>
            </select>
        </div>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
