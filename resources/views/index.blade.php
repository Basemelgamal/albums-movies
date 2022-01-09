
@extends('layouts.app')
@section('content')
    <section class="check_demo_movie">
        <div class="container">
            <h2 class=" wow fadeInDown">Check Our <span class="main-color"> Packages</span></h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry is standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book.</p>

            <div class="row">
                @foreach ($albums as $album)
                <div class="col-md-4">
                    <div class="card wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <div class="card-header">
                            <img src="{{ url($album->image->image) }}" data-src="{{ url($album->image->image) }}" class="lazyload">
                        </div>
                        <div class="card-body">
                            <h4> <a href="#"> {{ $album->title }}</a></h4>
                            <div class="rating">
                                <ul class="d-flex justify-content-center rating_stars">
                                    <li><i class="fas fa-star star_gold"></i></li>
                                    <li><i class="fas fa-star star_gold"></i></li>
                                    <li><i class="fas fa-star star_gold"></i></li>
                                    <li><i class="fas fa-star star_gold"></i></li>
                                    <li><i class="fas fa-star star_gold"></i></li>
                                </ul>
                            </div>
                            <p class="package-price">
                                <span>{{ $album->price - ($album->price * ($album->discount / 100)) }}$ </span>
                                <span><del class="text-danger">{{ $album->price }}$</del></span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
