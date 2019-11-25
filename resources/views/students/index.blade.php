@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h1>Students List Here</h1>
           <a class="btn btn btn-primary" href="{{ route('students.add') }}">Add student</a>
           <table class="table">
               <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $student->first_name}} {{ $student->middle_name}} {{ $student->last_name}}</td>
                    @endforeach
                </tr>
            </tbody>
           </table>
                
        </div>
    </div>
</div>
@endsection
