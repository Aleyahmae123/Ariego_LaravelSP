@extends('layout')

@section('content')
    <h1>Add Student</h1>

    <form>
        <p>
            Name:<br>
            <input type="text" placeholder="Enter name">
        </p>

        <p>
            Email:<br>
            <input type="email" placeholder="Enter email">
        </p>

        <p>
            Course:<br>
            <input type="text" placeholder="Enter course">
        </p>

        <p>
            Year Level:<br>
            <input type="text" placeholder="Enter year level">
        </p>

        <button>Add Student</button>
        <a href="/students" class="button">Cancel</a>
    </form>
@endsection
