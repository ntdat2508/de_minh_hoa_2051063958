@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Student
                        <a href="{{ url('student-manage') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                  {{-- Attempt to read property "id" on bool?? --}}
                    <form action="{{ url('student-update/'.$students->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="fullname" value="{{$students->fullname}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Birthday</label>
                            <input type="text" name="birthday" value="{{$students->birthday}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Address</label>
                            <input type="text" name="address" value="{{$students->address}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </div>

                    </form>
                </div>
                {{-- Thông báo thành công --}}
  
            </div>
        </div>
    </div>
</div>


@endsection