@extends('main')

@section('contact')
<div class="container">
    <div class="row">
        <div class="col-5 offset-3 my-5">
            <a href="{{route('contact#page')}}" class="btn btn-danger my-2">Back</a>
            <div class="">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control my-2" value="{{ $data->name}}">
            </div>
            <div class="">
                <label for="">Address</label>
                <input type="text" name="address" id="" class="form-control my-2" value="{{ $data->address}}">
            </div>
            <div class="">
                <label for="">Email</label>
                <input type="text" name="email" id="" class="form-control my-2" value="{{ $data->email}}">
            </div>
            <div class="">
                <label for="">Email</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control">{{ $data->description }}</textarea>
            </div>
            <a href="{{ route('edit#page',$data->id)}}">
                <button class="btn btn-danger float-end my-2" type="submit">Edit</button>
            </a>
        </div>
    </div>
</div>

@endsection
