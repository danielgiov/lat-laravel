@extends('layouts.app')
@section('content')

<h2 class="text-center">Create new Category</h2>
<div class="panel panel-default">
    <div class="panel-heading">Create new post</div>
    <div class="panel-body">
        <form action="{{ route('category.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Name</label>
                
                <input type="text" name="name" class="form-control">
            </div>
        
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Store Category</button>
                </div>
            </div>
        </form>
    </div>
</div>@stop