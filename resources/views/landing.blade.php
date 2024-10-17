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
        .product-collection {
            padding: 40px 0;
            background-color: #f8c5d4;
        }

        .product-collection h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2em;
            color: #e75480;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .product-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
            margin-bottom: 15px;
        }

        .product-card h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }

        .product-card p {
            color: #666;
            font-size: 1em;
            margin-bottom: 15px;
        }

        .product-card .price {
            font-size: 1.2em;
            font-weight: bold;
            color: #e75480; 
            margin-bottom: 15px;
        }

        .product-card .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background: #e75480; 
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .product-card .cta-button:hover {
            background: #d43b68;
        }

        .page {
            display: flex;
            align-items: center;
            margin-left: 50px;
            margin-right: 50px;
        }

    </style>
</head>
<body>
    <!-- Product Collection Section -->
<section class="product-collection">
    <div class="container">
        <h2>Our Product Collection</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="{{('img/image.png')}}" alt="Product 1">
                <h3>Product 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vitae consequatur iusto </p>
                <p class="price">Rp 25.000</p>
                <a href="{{ route('dashboard.create') }}#signup" class="cta-button">Beli Sekarang</a>
            </div>
            <div class="product-card">
                <img src="{{('img/image.png')}}" alt="Product 2">
                <h3>Product 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vitae consequatur iusto </p>
                <p class="price">Rp 30.000</p>
                <a href="{{ route('dashboard.create') }}#signup" class="cta-button">Beli Sekarang</a>
            </div>
            <div class="product-card">
                <img src="{{('img/image.png')}}" alt="Product 3">
                <h3>Product 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vitae consequatur iusto </p>
                <p class="price">Rp 40.000</p>
                <a href="{{ route('dashboard.create') }}#signup" class="cta-button">Beli Sekarang</a>
            </div>
            <div class="product-card">
                <img src="{{('img/image.png')}}" alt="Product 3">
                <h3>Product 4</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vitae consequatur iusto </p>
                <p class="price">Rp 50.000</p>
                <a href="{{ route('dashboard.create') }}#signup" class="cta-button">Beli Sekarang</a>
            </div>
        </div>
    </div>
</section>

<section class="keuntungan">
    <div class="page">
        <div class="paragraph-image">
            <img src="{{('img/image.png')}}" width="300px">
        </div>
        <div class="paragraph">
            <h3>Advantages of using Wardah Product's</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, distinctio minima? Cum, praesentium quae reiciendis repellat maiores at veritatis eius debitis temporibus, nam nisi, quasi eligendi dolorum hic voluptas non!</p>
        </div>
        <div class="paragraph-image">
            <img src="{{('img/image.png')}}" width="300px">
        </div>
    </div>
</section>

</body>
</html>

@endsection