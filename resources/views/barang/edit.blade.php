@extends('layouts.master')

@section('title', 'Edit Item Data')

@section('heading', 'Edit Item Data')

@section('sub-heading', 'Edit New Item - Manage and store item information easily and quickly.')

@section('content')
    @if($errors->any())
        <div class="row justify-content-center align-items-center">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong class="">Oops! Some fields need your attention:</strong>
                <ul class="text-left mt-2">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="{{route('data-barang.update', $item->id)}}" method="POST">
                        @csrf
                        <div class="row justify-content-center">
                            
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="text-dark">Name</label>
                            <input 
                                type="text" class="form-control form-control-user"
                                id="inputName"
                                placeholder="Enter Name"
                                name="name"
                                value="{{$item->name}}"
                            />
                        </div>
                        <div class="form-group">
                            <label for="inputDescription" class="text-dark">Description</label>
                            <textarea 
                                rows="4"
                                class="form-control form-control-user"
                                id="inputDescription"
                                placeholder="Enter Description"
                                name="description"
                            >{{$item->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputPrice" class="text-dark">Price</label>
                            <input 
                                type="number" 
                                class="form-control form-control-user"
                                id="inputPrice"
                                placeholder="Enter Price"
                                name="price"
                                value="{{$item->price}}"
                            />
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <a href="{{route('data-barang.index')}}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
