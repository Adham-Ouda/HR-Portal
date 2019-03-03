@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Employee</h2></div>

                <div class="panel-body">
                    

                    <a href="{{ url('/add') }}">Add employee</a>
                    <a href="{{ url('/attendance') }}">Attendance</a>
                
                    <table class="table table-striped">
                    <thead>
                    <tr>
                     <!--<th>ID</th>-->
                     <th>Name</th>
                     <th>Email</th>
                     <th>Mobile number</th>
                     <th>HireDate</th>
                     


                     <th colspan="2">Action</th>
                     </tr>
                     </thead>

                    @foreach($employees as $em)

                    <tr>
                        <!--<td>  {{$em->user_id}} </td>-->
                        <td>  {{$em->name}} </td>
                        <td>  {{$em->email}} </td>
                        <td>  {{$em->mobile_number}} </td>
                        <td>  {{$em->hire_date}} </td>
                        
                        <td>
                        <a class='btn btn-danger' 
                        href="{{ url('/delete/'.$em->id) }}" > Delete </a>    
                        </td>
                        <td>
                        <a class='btn btn-primary' href="{{ url('/edit/'.$em->id)}}" > Edit </a>    
                        </td>

                    </tr>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
