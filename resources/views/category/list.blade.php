@extends('layouts.mainlayout')
@section('title','Category')
@section('content')
    <div class="container">
        <div class="mt-5">
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
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="{{route('add-category')}}" name="addCategory" id="addCategory" class="btn btn-success">Add<i class="fa fa-add"></i></a>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(!$category->isEmpty())
                @foreach($category as $cat)
                    <tr>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->description}}</td>
                        <td>
                            <a href="{{route('edit-category',$cat->id)}}">Edit</a> |
                            <a href="{{route('delete-category',$cat->id)}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>

                    <th colspan="3" style="align-content: center">No Data Found</th>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
