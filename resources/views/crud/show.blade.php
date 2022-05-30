@extends('layouts.admin')
@section('content')
<div class="card col-4 offset-4 border-danger bg-gradient shadow rounded rounded-3">
    <div class="card-header bg-danger text-light bg-gradient">
        <h4>Subscribers page</h4>
        </div>
        <div class="card-body bg-light bg-gradiant">

                  <h5 class="card-title">{{ $show->name }}</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, molestiae laboriosam</p>
                </div>
                <ul class="list-group list-group-flush bg-light">
                  <li class="list-group-item">Born in {{ $show->born_date }}</li>
                  <li class="list-group-item">Email adress {{ $show->email }}</li>
                  <li class="list-group-item">Contact {{ $show->contact }}</li>
                  <li class="list-group-item">Record {{ $show->created_at }}</li>
                </ul>
                <div class="card-body bg-light">
                    <a href="{{ route('create.edit', $show) }}" title="Edit">
                        <button class="btn btn-info mx-1 shadow-sm bg-gradient text-light rounded" data-toggle="tooltip"
                            data-placement="top">Edit</button>
                    </a>
                  <a href="{{ route('tasks') }}" class="btn btn-danger" title="List">Return</a>
                </div>
              </div>

        </div>
    </div>
@endsection
