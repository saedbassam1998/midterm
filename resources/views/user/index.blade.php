@extends('basic')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">User</h1>   
    <div>
        <a style="margin: 19px;" href="{{ route('user.create')}}" class="btn btn-primary">New user</a>
        </div>   
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Job Title</td>
          <td>City</td>
          <td>Country</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $users)
        <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->first_name}} {{$users->last_name}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->job_title}}</td>
            <td>{{$users->city}}</td>
            <td>{{$users->country}}</td>
            <td>
                <a href="{{ route('user.edit',$user->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('user.destroy', $user->id)}}" method="post">
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