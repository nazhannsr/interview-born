@extends('layouts.master')

@section('breadcrumb')
    {{Breadcrumbs::render('staff.edit', $staff)}}
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            
        </div>
        <form action="{{ route('staff.update', $staff->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-2">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="name" id="name" class="input" value="{{ $staff->name }}" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="image">Image</label>
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-2">
                            <img src="{{asset('images/'.$staff->image)}}" class="img-preview" alt="{{$staff->name}}">
                        </div>
                        <div class="col-md-10">
                            <input type="file" class="input" name="image" id="image">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="university">University</label>
                    </div>
                    <div class="col-md-10">
                        <select name="university" id="university" class="input" required>
                            <option value="">Please Select</option>
                            @foreach ($universities as $university)
                                <option value="{{$university->id}}" {{($staff->university_id == $university->id)? 'selected' : ''}}>{{$university->name}} - {{$university->acronym}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
@endsection

@push('after-styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('after-scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#university').select2({
                placeholder : 'Please Select',
                allowClear : true
            });
        });
    </script>
@endpush