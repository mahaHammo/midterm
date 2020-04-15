@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a contact</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('midterm.update', $midterm->sr) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $midterm->first_name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $midterm->last_name }} />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $midterm->email }} />
            </div>
            <div class="form-group">
                <label for="phone">phone:</label>
                <input type="text" class="form-control" name="phone" value={{ $midterm->phone }} />
            </div>
            <div class="form-group">
                <label for="record_date">Record_date:</label>
                <input type="text" class="form-control" name="record_date" value={{ $midterm->record_date }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection