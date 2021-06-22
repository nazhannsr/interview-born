@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Create New University</h3>
        </div>
        <form action="{{ route('university.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="input" name="name" id="name" value="{{ old('name')}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="acronym">Acronym</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="input" name="acronym" id="acronym" value="{{ old('acronym')}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="image">Image</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" class="input" name="image" id="image">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
        
    </div>
@endsection