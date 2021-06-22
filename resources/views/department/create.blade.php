@extends('layouts.master')

@section('breadcrumb')
    {{Breadcrumbs::render('department.create', $university)}}
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Create New Department</h3>
        </div>
        <form action="{{ route('department.store', $university->id) }}" method="post">
            @csrf
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="name" id="name" class="input" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="acronym">Acronym</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="acronym" id="acronym" class="input" required>
                    </div>
                </div>
                <br>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection