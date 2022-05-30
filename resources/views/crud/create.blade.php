@extends('layouts.admin')
@section('content')
<div class="card col-4 offset-4 border-danger bg-gradient">
    <div class="card-header bg-danger text-light bg-gradient">
        <h4>Add a subscriber</h4>
    </div>
    <div class="card-body">
            <form action="{{url('/create')}}" method="post">
                {!! csrf_field() !!}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id='name'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Born in</label>
                    <input type="date" name="born_date" class="form-control" id="borne_date">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contact</label>
                    <input type="text" name="contact" class="form-control" id="mobile">
                  </div>
                  <input type="submit" value="Save" class="btn btn-primary bg-gradiant" name="mobile">
                  <a href="{{ route('tasks') }}" class="btn btn-danger" title="List">Return</a>
              </form>

        </div>
    </div>
@endsection
