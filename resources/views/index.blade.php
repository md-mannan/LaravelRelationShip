@extends('layout')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="card bg-light border-0 rounded p-3">
                <h2>Student data One to One Relationship Method is : <span class="btn btn-sm btn-light fw-bold">hasOne</span>
                </h2>
            </div>
        </div>
        <div class="row">
            @if ($contact->count() > 0)
                <table class="table table-striped">
                    <thead>

                        <tr>
                            <th>ID#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Age </th>
                            <th>City </th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($contact as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->contact->email }}</td>
                                <td>{{ $data->contact->phone }}</td>
                                <td>{{ $data->contact->city }}</td>
                                <td>{{ $data->contact->address }}</td>
                                <td>{{ $data->age }}</td>
                                <td>{{ $data->gender }}</td>
                                <td>
                                    <a href="#" class="btn btn-secondary">View </a>
                                    <a href="#" class="btn btn-primary">Edit </a>
                                    <a href="#" class="btn btn-danger">Delete </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h2 class="alert alert-warning text-center">Data not Found</h2>
            @endif
        </div>

        <div class="row ">
            <div class="card bg-light border-0 rounded p-3">
                <h2>Student data Inverse Relationship method is <span class="btn btn-sm btn-light fw-bold">belongsTo</span>
                </h2>
            </div>
        </div>
        <div class="row">
            @if ($student->count() > 0)
                <table class="table table-striped">
                    <thead>

                        <tr>
                            <th>ID#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Age </th>
                            <th>City </th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($student as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->student->name ?? 'NA' }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->city }}</td>
                                <td>{{ $data->address }}</td>
                                <td>{{ $data->student->age ?? 'NA' }}</td>
                                <td>{{ $data->student->gender ?? 'NA' }}</td>
                                <td>
                                    <a href="#" class="btn btn-secondary">View </a>
                                    <a href="#" class="btn btn-primary">Edit </a>
                                    <a href="#" class="btn btn-danger">Delete </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h2 class="alert alert-warning text-center">Data not Found</h2>
            @endif
        </div>
    </div>

@endsection
