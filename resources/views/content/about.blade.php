@extends('welcome')
@section('content')
    <div class="mt-5">
            <h4>Enter Your Information : </h4>
            <form method="post" action="{{route('cast.store')}}">
                @csrf
                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="name" class="col-sm-2 col-form-label"> Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                     <div class="col-md-12">
                        <label for="email" class="col-sm-2 col-form-label"> Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" id="email">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-5 col-sm-4">
                        <button  class="btn btn-outline-secondary">Save</button>
                    </div>
                </div>
            </form>
    </div>

    <div class="mt-5">
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name (Casting )</th>
                <th scope="col">Email</th>
                <th scope="col">Name-Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $datum)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$datum->name}}</td>
                <td>{{$datum->email}}</td>
                <td>{{$datum->name_email}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
