@extends('layout.layout')

@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            .big-card {
                    display: flex;
                    margin: 20px;
                    flex-wrap: wrap
                }

                
            .mini-card {
                justify-content: center;
                background: #f8c5d4;
                border: 1px solid #ddd;
                border-radius: 10px;
                text-align: center;
                padding: 20px;
                margin: 10px 0px 20px 30px; 
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                width: 400px;
                justify-content: center;
            }

            /* Atur ukuran gambar agar seragam */
            .mini-card img {
                width: 150px; /* Ukuran gambar diatur sama */
                height: 150px; /* Ukuran gambar diatur sama */
                object-fit: cover; /* Menjaga rasio dan memastikan gambar tidak terdistorsi */
                border-radius: 50%; /* Agar gambar tetap bulat */
                margin-bottom: 15px;
            }

            .mini-card h5 {
                font-size: 1.5em;
                margin-bottom: 10px;
                color: #333;
            }

            .mini-card p {
                color: #666;
                font-size: 15px;
                margin-bottom: 15px;
            }


            h2 {
                text-align: center;
                padding-top: 50px;
            }

            .fakta {
                background-color: #f8c5d4;
            }

            .fakta-kecil {
                display: flex;
                justify-content: space-evenly
            }

            .group-input button{
                padding: 25px 50px;
                margin: 10px;
                margin-bottom: 0px;
            }

            .paragraph-fakta {
                margin: 60px 20px 0px 120px;
            }

    </style>
</head>
<body>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li> <!-- Tampilkan semua error -->
            @endforeach
        </ul>
    </div>
    @endif
    <h2>Apa Kata Mereka Tentang Wardah product?</h2>
    <div class="d-flex justify-content-center mt-5">
        <a href="{{ route('reviews.create') }}" class="btn btn-dark mb-3">Deskripsi  <i class="fa-solid fa-plus fa-xs"></i></a>
    </div>
<div class="big-card">
    @foreach($reviews as $review)
    <div class="mini-card">
        <p>{{ $review->description }}</p>
        <img src="{{ asset('images/' . $review->photo) }}" alt="User photo" />
        <h5>{{ $review->name }}</h5>
        <p>Pelanggan Pecinta Wardah Product</p>
        
        <!-- Edit and Delete buttons -->
        <a href="{{ route('reviews.edit', $review) }}" class="btn btn-primary"><i class="fa-solid fa-pen-clip fa-xs"></i>     Edit</a>
        <button class="btn btn-secondary" onclick="showModalDelete('{{ $review->id }}', '{{ $review->name }}')"><i class="fa-solid fa-trash-can fa-xs"></i>  Hapus</button>

        <!-- Modal Konfirmasi Delete (unikan setiap modal dengan ID) -->
        <div class="modal fade" id="modalDelete{{ $review->id }}" tabindex="-1" aria-labelledby="modalDeleteLabel{{ $review->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" method="POST" action="{{ route('reviews.destroy', $review->id) }}">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDeleteLabel{{ $review->id }}">Konfirmasi Penghapusan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin ingin menghapus review dari <strong>{{ $review->name }}</strong>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="fakta">
    <div class="fakta-kecil">
    <div class="paragraph-fakta">
        <h1>Hal Yang Sering <br> Ditanyakan (FAQ)</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, quod! Assumenda accusamus nihil optio quis sapiente, inventore debitis, voluptatem explicabo, molestias quibusdam <br>officiis laborum velit! Ducimus voluptatem ipsam accusantium amet.</p>
        <p>Tidak dapat jawaban? <a href="">Hubungi Kami</a></p>
    </div>
    <div class="input-group mb-3">
        <div class="group-input">
        <button type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">Hal yang sering ditanyakan pembeli 1</button>
        <button type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">Hal yang sering ditanyakan pembeli 2</button>
        <button type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">Hal yang sering ditanyakan pembeli 3</button>
        <button type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">Hal yang sering ditanyakan pembeli 4</button>

        </div>
    </div>
    </div>
</div>

    </body>
    </html>
@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    function showModalDelete(id, name) {
        $('#modalDelete' + id).modal('show');  // Tampilkan modal berdasarkan ID
    }
</script>
@endpush
