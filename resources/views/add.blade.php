@extends('layouts.app')

@section('content')
<div class="container">
        <form action="store" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <label for="usr">Name:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="usr">Email:</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="usr">Mobile number:</label>
                <input type="text" name="mobile_number" class="form-control">
            </div>
            <div class="form-group">
                <label for="usr">HireDate:</label>
                <input type="text" name="hire_date" class="form-control">

            </div>
            

            </br>
            <input type="submit" value="add employee" class="btn btn-primary"/>
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