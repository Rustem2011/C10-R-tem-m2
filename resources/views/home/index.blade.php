@extends('layouts.head')

@section('main-content')
    <div class="container-lg my-5">
        <div class="h3 mt-5 fw-bold text-black montserrat-1">Baş Sahypa</div>
        <hr>
        <div class="h3 mt-5 fw-bold"><a href="/foods" class="text-decoration-none text-black">Naharlar <i
                    class="bi bi-arrow-right"></i></a></div>
        <div class="row g-4 py-5">
            @foreach($foods as $food)
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="/food/show/{{ $food->id }}" class="text-decoration-none text-black">
                        <div class="bg-white p-lg-3 p-2 shadow-sm border rounded text-center h-100">
                            <div class="position-relative">
                                <img src="{{ asset('img/003.png') }}" class="img-fluid rounded mb-lg-2 mb-3" alt="">
                                <div class="position-absolute top-0 end-0 me-2 bg-light mt-2 px-2 py-1 rounded text-dark small montserrat-2">
                                    {{ $categoryMap[$food->category_id]}}
                                </div>
                            </div>
                            <div class="justify-content-between d-flex">
                                <div class="small fw-semibold">
                                    {{ $food->price }} TMT
                                </div>
                                <div class="small">
                                    <i class="bi bi-heart text-danger"></i> {{ $food->like_count }}
                                </div>
                            </div>
                            <div class="fw-bold mt-lg-3 my-2 my-lg-0 montserrat-1">{{ $food->title }}</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="h3 mt-5 fw-bold"><a href="/restaurants" class="text-decoration-none text-black">TOP Restoranlar <i
                    class="bi bi-arrow-right"></i></a></div>
        <hr>
        <div class="row g-4">
            @foreach($restaurants as $restaurant)
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="/restaurant/show/{{ $restaurant->id }}" class="text-decoration-none text-black">
                        <div class="p-lg-2 bg-white shadow-sm border rounded text-center h-100">
                            <img src="img/004.png" class="img-fluid rounded p-lg-1 p-2" alt="">
                            <div class="d-lg-flex justify-content-between">
                                <div class="text-start ms-2"><i class="bi bi-geo-alt-fill small text-primary"></i>
                                    {{ $restaurant->address }}</div>
                                <div class="d-flex me-lg-0 me-4 ms-lg-0 ms-2 justify-content-between">
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
                                    <div>{{ $restaurant->rating }}</div>
                                </div>

                            </div>
                            <div class="fw-bold mb-lg-0 mb-2">{{ $restaurant->name }}</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
@endsection