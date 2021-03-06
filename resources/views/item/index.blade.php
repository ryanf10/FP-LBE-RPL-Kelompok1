@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{route('newitem')}}" class="badge badge-primary">+new Item</a>
            @if (session('create_success'))
            <div class="alert alert-success" role="alert">
                {{ session('create_success') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">
                    List Item
                </div>
                <ul class="list-group list-group-flush">
                    @forelse ($items as $i)
                    <li class="list-group-item"><a href="{{route('showitemdetail', ['id' => $i->id])}}">{{$i->item_name}}</a></li>
                    @empty
                    <p class="text-center font-italic text-secondary">No Item</p>
                    @endforelse
                </ul>
            </div>

        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-md-3 mt-3 pl-0">
                <a href="{{route('home')}}" class="btn btn-primary stretched-link">Back</a>
            </div>
        </div>
    </div>

</div>
@endsection