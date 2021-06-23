@extends('layouts.master')

@section('breadcrumb')
    {{ Breadcrumbs::render('department.staff.create', $university, $department)}}
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Add staff to department</h3>
        </div>
        <form action="{{ route('department.staff.store', [$university->id, $department->id]) }}" method="post">
            @csrf
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <label for="staff">Staff</label>
                    </div>
                    <div class="col-md-8">
                        <select name="staff[]" id="staff" class="input" multiple="multiple" required>
                            <option value="">Please Select</option>
                            @foreach ($staffs as $staff)
                                <option value="{{ $staff->id }}">{{ $staff->name }}</option>
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
            $('#staff').select2({
                placeholder: 'Please Select',
                allowClear: true,
                multiple: true,
            })
        });
    </script>
@endpush