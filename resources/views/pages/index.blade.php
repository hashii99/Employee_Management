@extends('layouts.app')

@section('content')

<div class="container">
        <h3 align="center" class="mt-5">Employee Management</h3>
        <div>
            <a href="{{ url('/') }}">
                <button class="btn btn-secondary">Go Back</button>
            </a>
        </div>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="{{ route('student.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Employee Name</label>
                            <input type="text" class="form-control" name="emp_name">
                            @error('emp_name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label>Employee DOB</label>
                            <input type="date" class="form-control" name="dob">
                            @error('dob')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone">
                            @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Register">
                        </div>
                    </div>
                </form>
            </div>
                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Employee Name</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $students as $key => $student )
                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $student->emp_name }}</td>
                            <td scope="col">{{ $student->dob }}</td>
                            <td scope="col">{{ $student->phone }}</td>
                            <td scope="col">
                            <a href="{{  route('student.edit', $student->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('student.destroy', $student->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    @endsection

    @push('css')
        <style>
            .form-area{
                padding: 20px;
                margin-top: 20px;
                background-color:#b3e5fc;
            }
            .bi-trash-fill{
                color:red;
                font-size: 18px;
            }
            .bi-pencil{
                color:green;
                font-size: 18px;
                margin-left: 20px;
            }
        </style>
    @endpush