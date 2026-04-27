@extends('layouts.head')

@section('main-content')
    <div class="container-lg my-5">
        <div class="border my-5 shadow-lg bg-white">
            <div class="d-flex align-items-center">
                <img src="{{ asset('img/' . $category->img . '.png') }}" width="150" class="p-3" alt="">
                <div class="h4 mx-3 montserrat-1">{{ $category->name }} <span
                        class="text-muted fw-normal">({{ $category->foods_count }})</span></div>
            </div>
        </div>
        <div class="row">
            @foreach ($foods as $food)

                <div class="col-lg-6 col-12 mb-4">
                    <a href="/food/show/{{ $food->id }}" class="text-decoration-none text-black">
                        <div class="border rounded p-3 h-100 bg-white shadow-sm">
                            <div class="d-flex row">
                                <img src="{{ asset('img/003.png') }}" class="img-fluid col-6" alt="">
                                <div class="col-6">
                                    <div class="fw-bold h4 montserrat-3">{{ $food->title }}</div>
                                    <div class="text-muted small montserrat-2">{{ $food->price }} TMT</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection