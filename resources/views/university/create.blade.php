@extends('layouts.master')

@section('breadcrumb')
    {{Breadcrumbs::render('university.create')}}
@endsection

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
                        <label for="rating">Rating</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="rating" id="rating" class="input">
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
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="address1">Address 1</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="address1" id="address1" class="input">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="address2">Address 2</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="address2" id="address2" class="input">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="address3">Address 3</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="address3" id="address3" class="input">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="postcode">Post Code</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="postcode" id="postcode" class="input">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="city">City</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="city" id="city" class="input">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="state">State</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="state" id="state" class="input">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="country">Country</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="country" id="country" class="input">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
        
    </div>
@endsection