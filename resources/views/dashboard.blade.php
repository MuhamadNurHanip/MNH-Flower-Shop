@extends('layouts.app')

@section('title', 'Selamat Datang di Toko Bunga')

@section('contents')
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700');
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
        }

        a {
            text-decoration: none;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 50px auto;
        }

        .product-card {
            width: 30%;
            position: relative;
            box-shadow: 0 2px 7px #dfdfdf;
            background: #fafafa;
            margin: 0 10px 20px;
        }

        .badge {
            position: absolute;
            left: 0;
            top: 20px;
            text-transform: uppercase;
            font-size: 13px;
            font-weight: 700;
            background: red;
            color: #fff;
            padding: 3px 10px;
        }

        .product-tumb {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 300px;
            background: #f0f0f0;
        }

        .product-tumb img {
            max-width: 100%;
            max-height: 100%;
        }

        .product-details {
            padding: 30px;
        }

        .product-catagory {
            display: block;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            color: #ccc;
            margin-bottom: 18px;
        }

        .product-details h4 a {
            font-weight: 500;
            display: block;
            margin-bottom: 18px;
            text-transform: uppercase;
            color: #363636;
            text-decoration: none;
            transition: 0.3s;
        }

        .product-details h4 a:hover {
            color: #fbb72c;
        }

        .product-details p {
            font-size: 15px;
            line-height: 22px;
            margin-bottom: 18px;
            color: #999;
        }

        .product-bottom-details {
            overflow: hidden;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }

        .product-bottom-details div {
            float: left;
            width: 50%;
        }

        .product-price {
            font-size: 18px;
            color: #fbb72c;
            font-weight: 600;
        }

        .product-price small {
            font-size: 80%;
            font-weight: 400;
            text-decoration: line-through;
            display: inline-block;
            margin-right: 5px;
        }

        .product-links {
            text-align: right;
        }

        .product-links a {
            display: inline-block;
            margin-left: 5px;
            color: #e1e1e1;
            transition: 0.3s;
            font-size: 17px;
        }

        .product-links a:hover {
            color: #fbb72c;
        }
    </style>
</head>
<body>
    <div class="product-container">
        <!-- First Card -->
        <div class="product-card">
            <div class="badge">Hot</div>
            <div class="product-tumb">
            <img src="{{ asset('images/bunga1.jpg') }}">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women, bag</span>
                <h4><a href="#">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href="#"><i class="fa fa-heart"></i></a>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Card -->
        <div class="product-card">
        <div class="badge">Hot</div>
            <div class="product-tumb">
            <img src="{{ asset('tokobunga-app/images/1.jpg') }}">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women, bag</span>
                <h4><a href="#">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href="#"><i class="fa fa-heart"></i></a>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Third Card -->
        <div class="product-card">
        <div class="badge">Hot</div>
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women, bag</span>
                <h4><a href="#">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href="#"><i class="fa fa-heart"></i></a>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fourth Card -->
        <div class="product-card">
        <div class="badge">Hot</div>
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women, bag</span>
                <h4><a href="#">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href="#"><i class="fa fa-heart"></i></a>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fifth Card -->
        <div class="product-card">
        <div class="badge">Hot</div>
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women, bag</span>
                <h4><a href="#">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href="#"><i class="fa fa-heart"></i></a>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sixth Card -->
        <div class="product-card">
        <div class="badge">Hot</div>
            <div class="product-tumb">
                <img src="https://i.imgur.com/xdbHo4E.png" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">Women, bag</span>
                <h4><a href="#">Women leather bag</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>$96.00</small>$230.99</div>
                    <div class="product-links">
                        <a href="#"><i class="fa fa-heart"></i></a>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection