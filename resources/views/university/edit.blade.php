@extends('layouts.master')

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
                        <label for="name">Image</label>
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-2">
                            <img src="{{asset('images/'.$university->image)}}" class="img-preview" alt="{{$university->acronym}}">
                        </div>
                        <div class="col-md-10">
                            <input type="file" class="input" name="image" id="image" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection