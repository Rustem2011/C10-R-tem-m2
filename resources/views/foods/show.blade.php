@extends('layouts.head')

@section('main-content')
    <div class="container-lg my-5">
        <div class="border bg-white shadow-lg rounded">
            <div class="row">
                <div class="border bg-white shadow-lg rounded">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="{{ asset('img/003.png') }}" class="img-fluid rounded p-3" alt="">
                        </div>
                        <div class="col-lg-7 p-3 pe-lg-5">
                            <div class="mx-lg-0 mx-3">
                                <div class="d-flex justify-content-between">
                                    <div class="h3 text-black montserrat-1">{{ $food->title }} </div>
                                    <div class="h3 fw-normal text-black">{{ $food->like_count }}<i
                                            class="bi bi-heart text-danger ms-1"></i></div>
                                </div>

                                <div class="h6 py-3 text-black montserrat-3">{{ $food->content }} </div>
                                <div class="h4 montserrat-2">Kategoriýa:<a class="text-decoration-none text-danger ms-1"
                                        href="/category/show/{{ $food->category_id }}">{{ $category->name}}</a></div>
                                <div class="h4 montserrat-2">Restoran:<a class="text-decoration-none text-danger ms-1"
                                        href="/restaurant/show/{{ $food->restaurant_id }}">{{ $restaurant->name}}</a></div>

                                <div class="d-flex justify-content-between">
                                    <div class="h4 py-3 text-black montserrat-2">{{ $food->price }} TMT </div>
                                    <div class="h4 py-3 text-black montserrat-2"> Haryt Kody: {{ $food->code }}</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection