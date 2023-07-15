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
        <form class="ms-auto me-auto mt-auto" style="width: 500px" method="post" action="{{route('update-category',$category->id)}}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$category->name}}">
                <div class="col-sm-6">
                    @if($errors->has('name'))
                        <div class="error" style="color: red">{{ $errors->first('name') }}</div>
                    @endif
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="description" value="{{$category->description}}">
                <div class="col-sm-6">
                    @if($errors->has('description'))
                        <div class="error" style="color: red">{{ $errors->first('description') }}</div>
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{route('category-list')}}" type="submit" class="btn btn-primary">Cancel</a>
        </form>
    </div>

@endsection
