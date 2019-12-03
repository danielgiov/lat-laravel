@extends('layouts.app')
@section('content')
<h2 class="text-center">Edit category</h2>
<div class="panelpanel-default">
    <div class="panel-heading">Updatecategory: {{ $category->name }} </div>
        <div class="panel-body">
            <form action="{{ route('category.update', ['id' => $category->id])}}" method="POST"> 
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control"> </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit"> Update Category </button>
                    </div>
                </div>
                </form>
        </div>
    </div>
</div>
@stop