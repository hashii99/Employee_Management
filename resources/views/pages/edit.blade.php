@extends('layouts.app')

@section('content')

<div class="container">
        <h3 align="center" class="mt-5">Employee Management</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="{{ route('student.update', $student->id) }}">
                @csrf
                    @method("PATCH")
                    <div class="row">
                        <div class="col-md-6">
                            <label>Employee Name</label>
                            <input type="text" class="form-control" name="emp_name" value="{{ $student->emp_name }}">
                        </div>
                        <div class="col-md-6">
                            <label>Employee DOB</label>
                            <input type="date" class="form-control" name="dob" value="{{ $student->dob }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone"  value="{{ $student->phone }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                        <div class="col-md-6 mt-3">
                            <input type="submit" class="btn btn-secondary" value="Cancel">
                        </div>
                    </div>
                </form>
            </div>
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