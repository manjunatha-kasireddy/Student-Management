@extends('layout')
@section('content')
<div class="card">
    <div class="card-header"> Enrollment Page</div>

    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Enrollment Number : {{ $enrollments->enroll_no }}</h5>
            <p class="card-text">Batch Name : {{ $enrollments->batch_id }}</p>
            <p class="card-text">Student Name : {{ $enrollments->students_id }}</p>
            <p class="card-text">Join Date : {{ $enrollments->join_date }}</p>

            <p class="card-text">Fee : {{ $enrollments->fee }}</p>
        </div>
        </br>
    </div>
</div>
@endsection