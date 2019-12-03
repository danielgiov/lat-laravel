@extends('layouts.app')
@section('content')


<div class="card">
    <div class="card-body"> 
        <table class="table table-hover">
            <thead>
                <th>Company Name </th>
                <th>Company Email </th>
                <th>Editing</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <td>
                        {{ $company->name }}
                    </td>
                    <td>
                        {{ $company->email }}
                    </td>
                    <td>
                        <a href="{{ route('company.edit', ['id' => $company->id ]) }}" class="btn btn-xs btn-info">Edit</a>
                    </td>
                    <td>
                        <a href="{{ route('company.delete', ['id' => $company->id ]) }}" class="btn btn-xs btn-danger">Delete</a>
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
                @stop
    </div>
</div>