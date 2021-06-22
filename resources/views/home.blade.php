@extends('layouts.master')

@section('breadcrumb')
    {{Breadcrumbs::render('home')}}
@endsection

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="panel-body">
        uni management
    </div>
</div>
@endsection
