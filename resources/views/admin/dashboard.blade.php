@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Categories: ( {{$count_categories}} )</span></p>
            </div>
        </div>
        <div class="col-3">
            <div class="jumbotron">
                <p><span class="label label-primary">Materials: ( {{$count_articles}} )</span></p>
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
            @foreach ($categories as $category)
                <a href="{{route('admin.category.edit', $category)}}" class="list-group-item">
                    <h4 class="list-group-item-heading">{{$category->title}} ({{$category->articles()->count()}})</h4>
                </a>
            @endforeach
        </div>
        <div class="col-6">
            <a href="" class="btn btn-secondary mb-3">Add Material</a>
            @foreach ($articles as $article)
                <a href="{{route('admin.article.edit', $article)}}" class="list-group-item">
                    <h4 class="list-group-item-heading">{{$article->title}}</h4>
                    <p class="list-group-item-text">
                        {{$article->categories()->pluck('title')->implode(', ')}}
                    </p>
                </a>
            @endforeach
        </div>
    </div>
</div>

@endsection