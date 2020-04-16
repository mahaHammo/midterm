@extends('layout')
@section('midterm')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Mid Term</h1>   
    <div>
        <a style="margin: 19px;" href="{{ route('midterm.create')}}" class="btn btn-primary">New contact</a>
        </div>   
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Sr</td>
          <td>Name</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Record Date</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($midterm as $midterm)
        <tr>
            <td>{{$midterm->sr}}</td>
            <td>{{$midterm->first_name}} {{$midterm->last_name}}</td>
            <td>{{$midterm->email}}</td>
            <td>{{$midterm->phone}}</td>
            <td>{{$midterm->record_date}}</td>
            <td>
                <a href="{{ route('midterm.edit',$midterm->sr)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('midterm.destroy', $midterm->sr)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
<div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif
  </div>
@endsection