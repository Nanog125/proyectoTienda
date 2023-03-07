@extends('layouts.app')

@section('content')

    <!-- MAIN PRODUCTOS -->
    <section class="container-xl py-5">
        <h2 class="title-section text-center mb-5">Pods</h2>
        <div class="row">
            @foreach ($productos as $producto)
            <a href="{{route('product.show',$producto->id)}}" class="col-lg-3 col-md-4 mb-3" id="link">
                <div class="fproduct">
                    <img src="{{$producto->image}}" alt="" class="img-fluid" data-bs-toggle="modal" data-bs-target="#modal1" id="modal-imagen">
                    <h3>{{$producto->name}}</h3>
                    <p>{{$producto->precio}}€</p>
                    <p>{{$producto->categoria}}</p>
                </div>
            </a>
            @endforeach
        </div>
        {{-- {{$productos->links()}} --}}
      </section>

@endsection