@extends('main')

@section('contact')
<div class="container">
    <form action="{{ route('postedit#page',$data->id)}}" method="post">
        @csrf
        <div class="col-5 offset-3">
            <div class="my-2">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $data->name}}">
            </div>
            <div class="my-2">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $data->email}}">
            </div>
            <div class="my-2">
                <label>Address</label>
                <input type="text" name="address" id="" class="form-control" value="{{ $data->address}}">
            </div>
            <div class="my-2">
                <label>Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$data->description}}</textarea>
            </div>
            <button class="btn btn-danger" type="submit">Update</button>
        </div>
    </form>
</div>
@endsection
