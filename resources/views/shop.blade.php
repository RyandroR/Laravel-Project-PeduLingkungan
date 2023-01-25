@extends('layouts.main')

@section('container')
    <div class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($items as $item)
                <div class="col-md-3">

                        <div class="card">
                            <img width="200px" height="200px" src="{{ asset('storage/app/' . $item->image) }}" alt="">
                            <div class="card-body">
                                <h5 name="name">{{ $item->name }}</h5>
                                <p class="h6" name="description">{{ $item->description }}</p>
                                <p class="h6" name="price">{{ $item->price }}</p>
                                <p class="h6" name="stock">{{ $item->stock }}</p>
                                <button type="button" class="btn btn-primary">Purchase</button>
                            </div>
                        </div>


                </div>
                 @endforeach
            </div>
        </div>

    </div>
@endsection
