@extends('layout/main')

@section('container')
<div class="container nav-margin">
    <div class="row">
        <div class="col">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/produk') }}">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $products->products_name}}</li>
            </ol>
        </nav>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <img width="400" src="/assets/img/products/{{ $products->thumbnail }}" alt="">
        </div>
        <div class="col product-content">
            <h1>{{$products->products_name}}</h1>
            <span>Rp. {{$products->price}}</span><br>
            <hr>
            <p>{{$products->description}}</p> 
            <hr>
            
            <form action="/cart/{{$products->products_code}}" method="GET">  
            <!-- @method('patch') -->
            @csrf      
            <div class="input-group text-center">
                
                    <button href="" class="mr-3 btn btn-outline-danger"><i class="far fa-heart"></i></button>
                
                    <div class="input-group-prepend" id="button-addon3">    
                        <button  class="btn btn-outline-secondary reduced items-count" type="button" onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>


                    <input type="text" size="1" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                    
                    <input type="hidden" name="product_id" value="{{ $products->id }}" class="form-control">
                    
                    
                    <div class="input-group-prepend" id="button-addon3"> 
                        <button class="btn btn-outline-secondary increase items-count" type="button" onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <button type="submit" class="ml-3 btn btn-outline-warning"><i class="fas fa-shopping-cart"></i> Masukkan ke Keranjang</button>
                
            </div>
            </form>
            <div class="">

            </div>         
        </div>

    </div>
    <div class="row mt-5">
        <div class="col text-center">
            <h4>Related Products</h1>
        </div>
    </div>
    
</div>

@endsection