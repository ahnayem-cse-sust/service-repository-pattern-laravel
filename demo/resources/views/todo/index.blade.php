@extends('layouts.app')

@section('content')
    <div class="container">

        <form class="form-inline" action="{{route('todo.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" class="form-control" name="task">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

        <h2>Todo list</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
            </tr>
            <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
