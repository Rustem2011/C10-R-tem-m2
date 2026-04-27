@extends('layouts.head')

@section('main-content')
    <div class="container-lg my-5">
        <div class="h3 fw-bold">Restoranlar</div>
        <hr>
        <div class="row g-4">
            @foreach($restaurants as $restaurant)
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="/restaurant/show/{{ $restaurant->id }}" class="text-decoration-none text-black">
                        <div class="p-2 bg-white shadow-sm border rounded text-center h-100">
                            <img src="img/004.png" class="img-fluid rounded p-1" alt="">
                            <div class="d-lg-flex justify-content-between">
                                <div class="text-start ms-lg-0 ms-1"><i class="bi bi-geo-alt-fill small text-primary"></i> {{ $restaurant->address }}</div>
                                <div class="d-flex me-lg-0 me-4 ms-lg-0 ms-1 justify-content-between">
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
                                    <div class="fw-semibold">{{ $restaurant->rating }}
                                    </div>
                                </div>

                            </div>
                            <div class="fw-bold">{{ $restaurant->name }} <span
                                    class="fs-6 text-muted fw-normal">({{ $restaurant->foods_count }})</span></div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection