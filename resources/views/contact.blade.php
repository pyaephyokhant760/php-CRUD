@extends('main')

@section('contact')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="my-5">
                    <form action="{{ route('view#page') }}" method="post">
                        @csrf
                        <div class="my-2">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="my-2">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="my-2">
                            <label>Address</label>
                            <input type="text" name="address" id="" class="form-control">
                        </div>
                        <div class="my-2">
                            <label>Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-danger" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-7 offset-1">

                    @foreach ($data as $p)
                        <div class="shadow-sm my-5 p-3">
                            <div class="row my-3">
                                <div class="col-8">
                                    <h3>{{ $p->name }}</h3>
                                </div>
                                <div class="col-4">
                                    <h4><i class="fa-solid fa-location-arrow me-1"></i>{{ $p->address }}</h4>
                                </div>
                            </div>
                            <p class=""><i class="fa-solid fa-envelope me-1"></i>{{ $p->email }}</p>
                            <p class="">{{$p->description}}</p>
                                <a href="{{ route('delete#page',$p->id)}}">
                                    <button class="btn btn-danger">DELETE</button>
                                </a>
                                <a href="{{ route('read#page',$p->id)}}">
                                    <button class="btn btn-danger">READ MORE</button>
                                </a>
                        </div>
                    @endforeach

            </div>
        </div>
    </div>
@endsection
