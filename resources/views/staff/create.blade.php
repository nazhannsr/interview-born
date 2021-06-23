@extends('layouts.master')

@section('breadcrumb')
    {{ Breadcrumbs::render('staff.create')}}
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Create New Staff</h3>
        </div>
        <form action="{{ route('staff.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="name" id="name" class="input">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="image">Image</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="image" id="image" class="input">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="university">University</label>
                    </div>
                    <div class="col-md-8">
                        <select name="university" id="university" class="input">
                            <option value="">Please Select</option>
                            @foreach ($universities as $university)
                                <option value="{{ $university->id }}">{{$university->name}} - {{$university->acronym}}</option>
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
        $(document).ready(function() {
            $('#university').select2({
                placeholder: 'Please Select',
                allowClear: true,
            });
        });
    </script>
@endpush