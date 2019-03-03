@extends('layouts.app')

@section('content')
<div class="container">
        <form action="store" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <label for="usr">Day:</label>
                <input type="text" name="day" class="form-control">
            </div>
            
            

            </br>
            <input type="submit" value="add day" class="btn btn-primary"/>
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