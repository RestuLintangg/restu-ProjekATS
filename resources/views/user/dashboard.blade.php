@extends('layout.layout')

@section('main') 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wardah</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        .container h2 {
            padding-top: 30px;
            padding-bottom: 10px;
        }

        .header {
            background-color: #f8c5d4;
            padding: 70px 0;
            color: #fff;
            display: flex;
            justify-content: space-between;
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 30px;
            background: #e75480; 
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .button:hover {
            background: #d43b68;
        }

        /* .image img {
            margin-left: 250px;
            width: 70%;
            height: auto;
            border-radius: 10px 50px 10px 50px;
        } */

        /* registration */
        .registration-form {
            padding: 40px 0;
        }

        .registration-form form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .registration-form label {
            margin: 10px 0 5px;
        }

        .registration-form input,
        .registration-form textarea {
            padding: 10px;
            width: 100%;
            max-width: 500px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .registration-form button {
            padding: 10px 30px;
            background: #e75480; 
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .registration-form button:hover {
            background: #d43b68;
        }

        .box {
            display: flex;
            align-items: center;
        }

        .box img {
            width: 350px;
            height: auto;
        }

    </style>
</head>
<body>

    <header class="header">
        <div class="container">
            <div class="box">
                <img src="img/image.png">
                <div class="paragraf">
                    <h1>Formula Baru Untuk <br> Mencerahkan Kulit Wajahmu</h1>
                    <p>Wardah the natural skin</p>
                    <a href="#signup" class="button" onclick="scrollToForm(event)">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </header>

    <center>
    <section class="registration-form" id="signup">
        <div class="container">
            <h2 style="text-align:center;">Register If You Want to Buy</h2>
            <form id="registrationForm" action="{{ route('dashboard.register.store') }}" method="POST">
                @csrf 
                <div class="col-sm-10">
                <label for="name">Name:</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Masukkan Nama Anda" required>
                </div>

                <div class="col-sm-10 ">
                <label for="email">Email :</label>
                <input class="form-control" type="email" id="email" name="email" class="form-input" placeholder="Masukkan Email Anda" required>
                </div>
                 
                <div class="col-sm-10">
                <label for="address">Address :</label>
                <input class="form-control" type="text" id="address" name="address" placeholder="Masukkan alamat anda" required>
                </div>
                
                <div class="col-sm-10 justify-content-center">
                    <label for="product">Pilih Product :</label>
                    <select class="form-select w-25 mb-3" id="product" name="product">
                        <option value="produk1">Product 1</option>
                        <option value="produk2">Product 2</option>
                        <option value="produk3">Product 3</option>
                        <option value="produk4">Product 4</option>
                    </select>
                </div>
                

                <button type="submit" class="button">Submit</button>
            </form>
        </div>
    </section>
    </center>

    <script>
        function scrollToForm(event) {
            event.preventDefault(); 
            const formSection = document.getElementById('signup');
            formSection.scrollIntoView({ behavior: 'smooth' });
        }
    </script>

</body>
</html>
@endsection
