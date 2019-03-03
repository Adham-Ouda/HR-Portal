@extends('layouts.app')

@inject('employee','App\Employee')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Attendance</h2></div>

                <div class="panel-body">
                    
                <a href="{{ url('/attendance.add') }}">Add day</a>
                    
                
                    <table class="table table-striped">
                    <thead>
                    <tr>
                     <!--<th>ID</th>-->
                     <th>Name</th>
                     <th>Day</th>
                     <th>Working hours</th>
                     <th>Status</th>
                     


                     <th colspan="2">Action</th>
                     </tr>
                     </thead>

                    @foreach($days as $day)

                    <tr>
                        <!--<td>  {{$day->user_id}} </td>-->
                        <td>  {{optional($employee->day)->name}} </td>
                        <td>  {{$day->day}} </td>
                        <td>  {{$day->working_hours}} </td>
                        <td>  {{$day->status}} </td>
                        
                        <td>
                        <a class='btn btn-danger' 
                        href="{{ url('/delete/'.$day->id) }}" > Delete </a>    
                        </td>
                        <td>
                        <a class='btn btn-primary' href="{{ url('/edit/'.$day->id)}}" > Edit </a>    
                        </td>

                    </tr>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
