@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <h1>Career Crud
                <button type="button" class="btn btn-primary pull-right" data-bs-toggle="modal" data-bs-target="#addNew">
                    Add career
                  </button>
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Job Name</th>
                    <th scope="col">Company</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($career as $job)
                        <tr>
                            <td>{{ $job->job_name }}</td>
                            <td>{{ $job->company }}</td>
                            <td>{{ $job->salary }}</td>
                            <td>{{ $job->description }}</td>
                            <td>{{ $job->category }}</td>
                            <td>{{ $job->email }}</td>
                            <td>{{ $job->number }}</td>
                            <td>
                                <a href="#edit{{$job->id}}" type="button" class="btn btn-info" data-bs-toggle="modal">Edit</a>
                                <a href="#delete{{$job->id}}" type="button" class="btn btn-danger" data-bs-toggle="modal">Delete</a>
                                @include('action')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>


@endsection
