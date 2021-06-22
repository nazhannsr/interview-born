@extends('layouts.master')

@section('breadcrumb')
    {{Breadcrumbs::render('department.edit', $university, $department)}}
@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-12">
                    <h3>Edit {{$department->name }} ({{$department->acronym}}) Department</h3>
                </div>
            </div>
        </div>
        <form action="{{ route('department.update', [$university->id, $department->id]) }}" method="post">
            @csrf
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="name" id="name" class="input" value="{{ $department->name }}" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="acronym">Acronym</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="acronym" id="acronym" class="input" value="{{ $department->acronym }}" required>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection