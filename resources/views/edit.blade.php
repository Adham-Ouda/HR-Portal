@extends('layouts.app')

@section('content')
<div class="container">
        <form action="/update/{{$employee->id}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
{{ method_field('PUT') }}
            <div class="form-group">
                <label for="usr">Name:</label>
                <input type="text" name="name" class="form-control" value="{{$employee->name}}">
            </div>
            <div class="form-group">
                <label for="usr">Email:</label>
                <input type="text" name="email" class="form-control" value="{{$employee->email}}">
            </div>
            <div class="form-group">
                <label for="usr">Mobile number::</label>
                <input type="text" name="mobile_number" class="form-control" value="{{$employee->mobile_number}}">
            </div>
            <div class="form-group">
                <label for="usr">HireDate:</label>
                <textarea rows="4" cols="50"  name="hire_date" class="form-control" >{{$employee->hire_date}}
          </textarea>

            </div>

            </br>
            <input type="submit" value="update" class="btn btn-primary"/>
        </form>
        <div>
        @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif
        </div>

    </div>


@endsection