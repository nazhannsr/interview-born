@extends('layouts.master')

@section('breadcrumb')
    {{Breadcrumbs::render('university.edit', $university)}}
@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Edit {{$university->name}} ({{$university->acronym}}) Profile
        </div>
        <form action="{{ route('university.update', $university->id) }}" method="post" enctype="multipart/form-data">
            <div class="panel-body">
                @csrf
                <div class="row">
                    <div class="col-md-2">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="input" name="name" id="name" value="{{$university->name}}" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="name">Acronym</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" class="input" name="acronym" id="acronym" value="{{$university->acronym}}" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="rating">Rating</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="rating" id="rating" class="input" required value="{{$university->rating}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="name">Image</label>
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-2">
                            <img src="{{asset('images/'.$university->image)}}" class="img-preview" alt="{{$university->acronym}}">
                        </div>
                        <div class="col-md-10">
                            <input type="file" class="input" name="image" id="image">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="address1">Address 1</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="address1" id="address1" class="input" value="{{$university->address1}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="address1">Address 2</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="address2" id="address2" class="input" value="{{$university->address2}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="address1">Address 3</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="address3" id="address3" class="input" value="{{$university->address3}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="postcode">Post Code</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="postcode" id="postcode" class="input" value="{{$university->postcode}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="city">City</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="city" id="city" class="input" value="{{$university->city}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="state">State</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="state" id="state" class="input" value="{{$university->state}}">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="country">Country</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="country" id="country" class="input" value="{{$university->country}}">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection