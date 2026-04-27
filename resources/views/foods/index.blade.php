@extends('layouts.head')

@section('main-content')
    <div class="container-lg my-5">
        <div class="h3 fw-bold">Naharlar</div>
        <hr>
        <div class="row g-4 py-5">
            @foreach($foods as $food)
                <div class="col-6 col-md-4 col-lg-3 ">
                    <a href="/food/show/{{ $food->id }}" class="text-decoration-none text-black">
                        <div class="bg-white p-lg-3 p-2 shadow-sm border rounded text-center h-100">
                            <div class="position-relative">
                                <img src="{{ asset('img/003.png') }}" class="img-fluid rounded mb-lg-2 mb-3" alt="">
                                <div class="position-absolute top-0 end-0 me-2 bg-light mt-2 px-2 py-1 rounded text-dark montserrat-1 small">
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
                            <div class="fw-bold mt-3">{{ $food->title }}</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection