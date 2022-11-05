@extends('master')

@section('title')
@endsection

@section('body')
    <div class="container">
        <div class="row text-center" >
            <h3 class="title">QR Code Scanner</h3>
        </div>
            <div class="row">
                <div class="text-center hero-image">
                    <img src="/images/hero-image.2.jpg" style="width: 800px; border-radius:1%" alt="">
                </div>
            </div>
        
        <div class="row">
            <div class="footer-button text-center pt-5">
                <Button class="btn btn-warning text-white">Scan QR Code</Button>
            </div>
        </div>
    </div>

@endsection