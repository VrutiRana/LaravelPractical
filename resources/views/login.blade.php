@extends('layouts.mainlayout')
@section('title','Login')
@section('content')
    <div class="container">
        <div class="mt-3">
            @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">{{session('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if(session()->has('success'))
                 <div class="alert alert-success" role="alert">{{session('success')}}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
            @endif
        </div>
        <form class="ms-auto me-auto mt-auto" style="width: 500px" action="{{route('checkLogin')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                @if($errors->has('email'))
                    <div class="error" style="color: red">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                @if($errors->has('password'))
                    <div class="error" style="color: red">{{ $errors->first('password') }}</div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('registration')}}" type="submit" class="btn btn-primary">Registration</a>
        </form>
    </div>
@endsection
