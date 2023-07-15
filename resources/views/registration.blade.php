@extends('layouts.mainlayout')
@section('title','Registration')
@section('content')
    <div class="container">
            @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">{{session('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form class="ms-auto me-auto mt-auto" style="width: 500px" method="post" action="{{route('register')}}">
               @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                    <div class="col-sm-6">
                        @if($errors->has('name'))
                            <div class="error" style="color: red">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div class="col-sm-6">
                        @if($errors->has('email'))
                            <div class="error" style="color: red">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="Password">
                    <div class="col-sm-6">
                        @if($errors->has('password'))
                            <div class="error" style="color: red">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('Login')}}" type="submit" class="btn btn-primary">Cancel</a>
            </form>
    </div>

@endsection
