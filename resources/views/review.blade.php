@extends('layout.layout')
@section('main')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Wardah</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            .big-card {
                display: flex;
                margin: 20px;
            }

            .mini-card {
                background: #f8c5d4;
                border: 1px solid #ddd;
                border-radius: 10px;
                text-align: center;
                padding: 20px;
                margin: 30px; 
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .mini-card img {
                max-width: 100px;
                height: auto;
                border-radius: 200px;
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
        <section>
            <h2>Apa Kata Mereka Tentang Wardah product ?</h2>
            <div class="big-card">
                <div class="mini-card">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quasi deserunt iste autem hic? Corporis possimus unde, quo ducimus labore accusamus molestias. Veritatis vitae odio dolores sequi est eos ipsam.</p>
                    <img src="{{('img/profil.jpg')}}" alt="">
                    <h5>Nama Pe-review</h5>
                    <p>Pelanggan Pecinta Wardah Product</p>
                </div>
                <div class="mini-card">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quasi deserunt iste autem hic? Corporis possimus unde, quo ducimus labore accusamus molestias. Veritatis vitae odio dolores sequi est eos ipsam.</p>
                    <img src="{{('img/profil.jpg')}}" alt="">
                    <h5>Nama Pe-review</h5>
                    <p>Pelanggan Pecinta Wardah Product</p>
                </div>
                <div class="mini-card">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quasi deserunt iste autem hic? Corporis possimus unde, quo ducimus labore accusamus molestias. Veritatis vitae odio dolores sequi est eos ipsam.</p>
                    <img src="{{('img/profil.jpg')}}" alt="">
                    <h5>Nama Pe-review</h5>
                    <p>Pelanggan Pecinta Wardah Product</p>
                </div>
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
        </section>
    </body>
    </html>
@endsection