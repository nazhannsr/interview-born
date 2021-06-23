@extends('layouts.master')

@section('breadcrumb')
    {{Breadcrumbs::render('home')}}
@endsection

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3>
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            University Rating
          </button>
        </h3>
    </div>
    <div class="panel-body collapse in" id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <canvas id="ratingChart" width="150" height="50"></canvas>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3>
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            Department/Staff Count
          </button>
        </h3>
    </div>
    <div class="panel-body collapse in"  id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Department Count</h3>
                    </div>
                    <div class="panel-body">
                        <canvas id="departmentChart" width="150" height="150"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Staff Count</h3>
                    </div>
                    <div class="panel-body">
                        <canvas id="staffChart" width="150" height="150"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<button id='toTop'>To The Top!</button>

@endsection

@push('after-scripts')
    <script src="{{ asset('js/chart.js/dist/chart.js') }}"></script>
    <script>
        var ctx = document.getElementById('ratingChart');
        var ratingChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: 'University Rating',
                    backgroundColor : [],
                    borderWidth: 1,
                    barThickness : 50,
                }]
            },
            options: {
            }
        });

        var ctx2 = document.getElementById('departmentChart');
        var departmentChart = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: [],
                datasets: [{
                    label: 'Department Count',
                    backgroundColor : [],
                    borderWidth: 1,
                }]
            },
            options: {
            }
        });

        var ctx3 = document.getElementById('staffChart');
        var staffChart = new Chart(ctx3, {
            type: 'pie',
            data: {
                labels: [],
                datasets: [{
                    label: 'Department Count',
                    backgroundColor : [],
                    borderWidth: 1,
                }]
            },
            options: {
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $.ajax({
                type : "POST",
                url : "{{ route('get.rating') }}",
                data: {_token: "{{csrf_token()}}"},
                success : function (data) {
                    removeData(ratingChart, data.length);
                    $.each(data, function (k, v) {
                        addData(ratingChart, v.acronym, parseFloat(v.rating), '#'+Math.floor(Math.random()*16777215).toString(16));
                    });
                }
            });

            $.ajax({
                    type : "POST",
                    url : "{{ route('get.department') }}",
                    data: {_token: "{{csrf_token()}}"},
                    success : function (data) {
                        removeData(departmentChart, data.length);
                        $.each(data, function (k, v) {
                            addData(departmentChart, v.acronym, parseInt(v.departments), '#'+Math.floor(Math.random()*16777215).toString(16));
                        });
                    }
                });

            $.ajax({
                type : "POST",
                url : "{{ route('get.staff') }}",
                data: {_token: "{{csrf_token()}}"},
                success : function (data) {
                        console.log(data);
                    removeData(staffChart, data.length);
                    $.each(data, function (k, v) {
                        addData(staffChart, v.acronym, parseInt(v.staff), '#'+Math.floor(Math.random()*16777215).toString(16));
                    });
                }
            });
        });
        function addData(chart, label, data, bgcolor) {
            chart.data.labels.push(label);
            chart.data.datasets.forEach((dataset) => {
                dataset.data.push(data);
                dataset.backgroundColor.push(bgcolor);
            });
            chart.update();
        }

        function removeData(chart, i) {
            for(j = 0; j < i; j++){
                chart.data.labels.pop();
                chart.data.datasets.forEach((dataset) => {
                    dataset.data.pop();
                    dataset.backgroundColor.pop();
                });
                chart.update();
            }
        }
    </script>
@endpush