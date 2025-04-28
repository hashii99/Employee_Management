@extends('layouts.app')

@section('content')


<div class="container">
    <h1 class="display-4">EMPLOYEE MANAGEMENT SYSTEM</h1>

    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('student.index') }}">
                <button class="btn btn-primary">Add New Employee</button>
            </a>
        </div>

        <div class="col-md-6">
            <a href="{{ route('student.index') }}">
                <button class="btn btn-dark">All Employees</button>
            </a>
        </div>

    </div>
</div>

