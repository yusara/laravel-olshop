@extends('layout/main')

@section('title','Biarbrewok Official Store')

@section('container')
<div class="container-fluid">
    <div class="row box1 mt-5"></div>
    <div class="row jumbotron jumbotron-fluid">
        <div class="text-center pt-5 col-lg-6 offset-3">
            <span class="">Mulai tumbuhkan brewokmu bersama #biarbrewok</span>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <button type="button" class="button jumbotron-btn" style="color: white;">Baru Mulai!</button>
                </div>
                <div class="col-lg-4">
                    <button type="button" class="button jumbotron-btn" style="color: white;">Langsung Belanja</button>
                </div>
                <div class="col-lg-4">
                    <button type="button" class="button jumbotron-btn" style="color: white;">Kontak Kami</button>
                </div>
            </div>
        </div>
    </div>


    <div class="section-wrapper mx-5 py-4" id="produk">
        <div class="row produk-title  px-4">
            <div class="col align-middle">
                <span class="section-title">Produk</span>
                <a href="{{ url('/produk') }}" class="see-more">Lihat Semua</a>
                <hr class="my-0" style="height:10px">
            </div>
        </div>
        <div class="row produk-content mt-1">
            <div class="col-lg-3 mb-4">
                <div class="text-center">
                    <img src="{{ asset('assets/img/products/produk-01.png') }}" alt="" class="text-center mb-2 rounded-lg border border-dark">
                </div>
                <div class="mx-3 text-center">
                    <h6 class="my-0">MiWox Beard Booster Oil</h6>
                    <p class="harga my-0">Rp. 200.000</p>
                </div>
                <div class="text-center mt-2">
                    <button type="button" class="btn btn-outline-danger"><i class="far fa-heart"></i></button>
                    <button type="button" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i> Beli Sekarang</button>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="text-center">
                    <img src="{{ asset('assets/img/products/produk-02.png') }}" alt="" class="text-center mb-2 rounded-lg border border-dark">
                </div>
                <div class="mx-3 text-center">
                    <h6 class="my-0">MiWox Beard Suplement</h6>
                    <p class="harga my-0">Rp. 200.000</p>
                </div>
                <div class="text-center mt-2">
                    <button type="button" class="btn btn-outline-danger"><i class="far fa-heart"></i></button>
                    <button type="button" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i> Beli Sekarang</button>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="text-center">
                    <img src="{{ asset('assets/img/products/produk-03.png') }}" alt="" class="text-center mb-2 rounded-lg border border-dark">
                </div>
                <div class="mx-3 text-center">
                    <h6 class="my-0">Minoxidil Beard Growth</h6>
                    <p class="harga my-0">Rp. 200.000</p>
                </div>
                <div class="text-center mt-2">
                    <button type="button" class="btn btn-outline-danger"><i class="far fa-heart"></i></button>
                    <button type="button" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i> Beli Sekarang</button>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="text-center">
                    <img src="{{ asset('assets/img/products/produk-03.png') }}" alt="" class="text-center mb-2 rounded-lg border border-dark">
                </div>
                <div class="mx-3 text-center">
                    <h6 class="my-0">Minoxidil Beard Growth</h6>
                    <p class="harga my-0">Rp. 200.000</p>
                </div>
                <div class="text-center mt-2">
                    <button type="button" class="btn btn-outline-danger"><i class="far fa-heart"></i></button>
                    <button type="button" class="btn btn-outline-warning"><i class="fas fa-shopping-cart"></i> Beli Sekarang</button>
                </div>
            </div>
        </div>
    </div>



    <div class="section-wrapper mx-5 testimoni" id="testimoni">
        <div class="row produk-title py-4 px-4">
            <div class="col">
                <a href="" class="section-title align-middle">Testimoni</a>
                <a href="" class="see-more">Lihat Semua</a>
                <hr class="my-0" style="height:10px">
            </div>
        </div>
        
        <div class="row text-center">
            <div class="offset-2 col-lg-1">

            </div>
            <div class="col-lg-3">
                <span>00000</span>
                <hr>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Consectetur aperiam ipsum neque ullam. Amet fugiat iure fugit 
                repellendus modi dolore illum dicta culpa? Soluta eveniet 
                expedita sed voluptatem asperiores nulla?</p>
            </div>
            
            <div class="col-lg-3">
                <span>00000</span>
                <hr>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Consectetur aperiam ipsum neque ullam. Amet fugiat iure fugit 
                repellendus modi dolore illum dicta culpa? Soluta eveniet 
                expedita sed voluptatem asperiores nulla?</p>
            </div>
            <div class="col-lg-1">

            </div>
        </div>

        <div class="row text-center">
            <div class="offset-2 col-lg-1">

            </div>
            
            <div class="col-lg-3">
                <span>00000</span>
                <hr>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Consectetur aperiam ipsum neque ullam. Amet fugiat iure fugit 
                repellendus modi dolore illum dicta culpa? Soluta eveniet 
                expedita sed voluptatem asperiores nulla?</p>
            </div>
            
            <div class="col-lg-3">
                <span>00000</span>
                <hr>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Consectetur aperiam ipsum neque ullam. Amet fugiat iure fugit 
                repellendus modi dolore illum dicta culpa? Soluta eveniet 
                expedita sed voluptatem asperiores nulla?</p>
            </div>
            <div class="col-lg-1">

            </div>
        </div>
    </div>
</div>




@endsection