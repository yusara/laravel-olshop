@extends('layout/main')

@section('title','Produk - Biarbrewok Official Store')

@section('container')
<div class="container-fluid">
    <div class="row nav-margin">
        <div class="offset-2 col-lg-8 text-center">
            <span class="section-title">Semua Produk</span>
            <hr>

        </div>

    </div>

    <div class="row mt-3">
        @foreach( $products as $prod )
            <div class="col-lg-3">
                <div class="text-center">
                    <img src="assets/img/products/{{$prod->thumbnail}}" alt="" class="text-center mb-2 rounded-lg border border-dark">
                </div>
                <div class="mx-3 text-center">
                    <a href="/produk/{{$prod->products_code}}" class="my-0">{{$prod -> products_name}}</a>
                    <p class="harga my-0">{{$prod -> price}}</p>
                </div>
                <div class="text-center mt-2">
                <form action=""></form>
                    <button href="/produk/{{$prod->products_code}}" class="btn btn-outline-danger"><i class="far fa-heart"></i></button>
                    <button type="button" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i> Beli Sekarang</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection