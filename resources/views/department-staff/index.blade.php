@extends('layouts.master')

@section('breadcrumb')
    {{ Breadcrumbs::render('department.staff', $university, $department) }}
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-11">
                    <h3>Staff Management ({{$department->acronym}})</h3>
                </div>
                <div class="col-md-1">
                    <a href="{{ route('department.staff.create', [$university->id, $department->id]) }}" class="btn btn-success">Create <i class="glyph-icon icon-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="panel-body" id="table_data">
            @include('pagination.department-staff.index')
        </div>
    </div>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function(){

            $(document).on('click', '.pagination a', function(event){
                event.preventDefault(); 
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });

            function fetch_data(page)
            {
                $.ajax({
                    url: "{{ route('department.staff.pagination', [$university->id, $department->id]) }}",
                    data: {page : page},
                    success:function(data)
                    {
                        $('#table_data').html(data);
                    }
                });
            }
        });
    </script>
@endpush