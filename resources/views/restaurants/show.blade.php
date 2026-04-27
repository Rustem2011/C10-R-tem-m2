@extends('layouts.head')

@section('main-content')
    <div class="container-lg my-5">
        <div class="border bg-white shadow-lg rounded">
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{ asset('img/004.png') }}" class="img-fluid rounded p-3" alt="">
                </div>
                <div class="col-lg-7 p-3 pe-lg-5">
                    <div class="px-lg-0 px-3">
                        <div class="h1 text-black montserrat-1">{{ $restaurant->name }} </div>
                        <div class="montserrat-2"><i class="bi bi-geo-alt-fill small text-primary"></i>
                            {{ $restaurant->address }}</div>
                        <div class="d-flex py-4">
                            <div class="fw-semibold me-2 montserrat-2">{{ $restaurant->rating }} </div>
                            @if ($restaurant->rating == 5)
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                            @elseif ($restaurant->rating >= 4.5 and $restaurant->rating < 5)
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-half me-1 text-warning"></i>
                            @elseif ($restaurant->rating >= 4 and $restaurant->rating < 4.5)
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star me-1 text-warning"></i>
                            @elseif ($restaurant->rating >= 3.5 and $restaurant->rating < 4)
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-half me-1 text-warning"></i>
                                <i class="bi bi-star me-1 text-warning"></i>
                            @elseif ($restaurant->rating >= 3 and $restaurant->rating < 3.5)
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star-fill me-1 text-warning"></i>
                                <i class="bi bi-star me-1 text-warning"></i>
                                <i class="bi bi-star me-1 text-warning"></i>
                            @endif
                        </div>
                        <div class="pt-2 montserrat-3">
                            <i class="bi bi-telephone-fill me-1"></i>+993 {{ $restaurant->phone_number }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h2 py-5 text-center"><span class="montserrat-1">NAHARLAR:</span> <span
                class="text-muted ms-lg-2 ms-1">({{ count($restaurant->foods) }})</span></div>
        <div class="row py-5">
            @foreach($foods as $food)
                <div class="col-lg-6 col-12 mb-4">
                    <a href="/food/show/{{ $food->id }}" class="text-decoration-none text-black">
                        <div class="border rounded p-3 h-100 bg-white shadow-sm">
                            <div class="d-flex row">
                                <div class="col-6">

                                    <div class="position-relative">
                                        <img src="{{ asset('img/003.png') }}" class="img-fluid" alt="">
                                        <div
                                            class="position-absolute top-0 end-0 me-2 bg-white mt-2 px-2 py-1 rounded text-dark small montserrat-1">
                                            {{ $categoryMap[$food->category_id]}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fw-bold h4 montserrat-3">{{ $food->title }}</div>
                                    <div class="text-muted small">{{ $food->price }} TMT</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
@endsection