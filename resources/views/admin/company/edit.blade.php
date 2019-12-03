@extends('layouts.app')
@section('content')
<h2 class="text-center">Edit Company</h2>
<div class="panelpanel-default">
    <div class="panel-heading">Update Company: {{ $company->name }} </div>
        <div class="panel-body">
            <form action="{{ route('company.update', ['id' => $company->id])}}" method="POST"> 
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $company->name }}" class="form-control"> </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" name="email" value="{{ $company->email }}" class="form-control"> </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit"> Update Company </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop