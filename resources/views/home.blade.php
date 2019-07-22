@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-header">
          
          <form action="{{ route('user.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Add your image</label>
              <input type="file" name="img" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-success">Add</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
