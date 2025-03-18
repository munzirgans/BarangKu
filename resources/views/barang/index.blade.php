@extends('layouts.master')

@section('title', 'Item Data')

@section('heading', 'Item Data')

@section('sub-heading', 'Item Management System - Effortlessly add, edit, delete, and organize items in one place.')

@section('custom-link')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

@endsection

@section('content')
@if(session('success'))
    <div class="row justify-content-center align-items-center">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@elseif($errors->has('error'))
    <div class="row justify-content-center align-items-center">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong class="">{{$errors->first('error')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="flex-column d-flex flex-md-row align-items-center justify-content-between" style="gap:10px;">
            <h6 class="m-0 font-weight-bold text-primary">Item Data Table</h6>
            <a href="{{route('data-barang.create')}}" class="btn btn-success">Add New Item</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->price}}</td>
                            <td class="d-flex justify-content-center" style="gap:10px;">
                                <a href="{{route('data-barang.edit', $item->id)}}" class="btn btn-warning shadow">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{route('data-barang.delete', $item->id)}}" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('custom-script')
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
@endsection