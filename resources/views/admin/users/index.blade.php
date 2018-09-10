@extends('layouts.admin')

@section('content')


    <div class="container">
        <h2>admins</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created at</th>
            </tr>
            </thead>
            <tbody>
            @if($users)

                @foreach($users as $user)

                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>


                        <td>{{$user->role->name}}</td>
                        <td>{{$user->created_at}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection