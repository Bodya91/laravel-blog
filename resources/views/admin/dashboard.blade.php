@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Categories: (0)</span></p>
            </div>
        </div>
        <div class="col-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Materials: (0)</span></p>
            </div>
        </div>
        <div class="col-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Registered users: (0)</span></p>
            </div>
        </div>
        <div class="col-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Users today: (0)</span></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <a href="{{ route('admin.category.create') }}" class="btn btn-secondary mb-3">Add Category</a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Latest category</h4>
                <p class="list-group-item-text">
                    Materials count
                </p>
            </a>
        </div>
        <div class="col-6">
            <a href="" class="btn btn-secondary mb-3">Add Material</a>
            <a href="#" class="list-group-item">
                <h4 class="list-group-item-heading">Latest material</h4>
                <p class="list-group-item-text">
                    Category
                </p>
            </a>
        </div>
    </div>
</div>

@endsection