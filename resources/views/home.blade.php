@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <!-- <th>Password</th> -->
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <!-- <td>{{$user['password']}}</td> -->
                <td><a href="{{action('HomeController@create', $user['id'])}}" class="btn btn-warning">Create</a></td>
                <td><a href="{{action('HomeController@edit', $user['id'])}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('HomeController@destroy', $user['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
<div class="paginate">
    {{ $users->links() }}
</div>
@endsection
