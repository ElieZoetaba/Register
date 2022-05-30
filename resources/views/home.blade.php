@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-body border-0 border">
                <div class="card-header bg-danger bg-gradiant text-light">{{ __('You are logged in!') }}</div>

                <div class="card-body d-flex">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <div class="card col m-1 text-center ">
                        <img src="{{asset('img/studen.jpg')}}"class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="{{ route('tasks') }}" class="btn border-info border-2 hov" title="List">List of subscribers</a>
                        </div>
                      </div>

                      <div class="card col m-1 text-center">
                        <img src="{{asset('img/regis.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <div class="d-grid gap-3 d-md-block">
                          <a href="{{ route('create.create') }}" class="btn border-2 border-success hov">Add a new subscriber</a>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
