@extends('layouts.main')

@section('content')
    <div class="position-relative overflow-hidden p-0 text-center bg-light text-dark"
         style="height: 600px; background-image: url('{{ asset('images/main.svg') }}'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed"
    >
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Lara blog</h1>
            <p class="lead font-weight-normal">Where you can communicate with all of the people around the world.</p>
            <button class="btn btn-outline-secondary" onclick="window.location.reload()">
                See peoples posts
            </button>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>
    <div
        class="h1 text-center w-50 text-light m-auto d-flex justify-content-start"
        style="margin-bottom: 40px !important;"
    >
    </div>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <x-post.post-card
                :post="$post"
                type="index"
                style="margin-bottom: 20px;"
            ></x-post.post-card>
        @endforeach
    @else
        <div class="w-50 m-auto bg-white text-dark rounded p-4">
            There are no posts yet ...
        </div>
    @endif
@stop
