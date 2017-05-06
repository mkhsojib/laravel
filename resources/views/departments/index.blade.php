@extends('layouts.master')

@section('content')

    <h1 class="mytest">Department list</h1>

    <div class="row">
        <div class="col-md-12">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                </thead>
                <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>{{ $department->name }}</td>
                        <td>{{ $department->code }}</td>
                        <td>{{ $department->created_at }}</td>
                        <td>{{ $department->updated_at }}</td>

                    </tr>
                @endforeach

                </tbody>

            </table>
            {{ $departments->links() }}
        </div>
    </div>
@endsection


