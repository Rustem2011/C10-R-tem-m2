@extends('layouts.head')

@section('main-content')
    <div class="container-lg my-5">
        <div class="h3 fw-bold">Kategoriyalar</div>
        <hr>
        <div class="row g-4">
            @foreach($categories as $category)
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="/category/show/{{ $category->id }}" class="text-decoration-none text-black">
                        <div class="p-3 bg-white shadow-sm border rounded text-center h-100">
                            <img src="img/{{ $category->img }}.png" class="img-fluid rounded mb-2" alt="">
                            <div class="fw-bold">{{ $category->name }} <span
                                    class="text-muted fw-normal">({{ $category->foods_count }})</span></div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection