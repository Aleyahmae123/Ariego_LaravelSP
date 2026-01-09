@extends('layout')

@section('content')
    <h1>Edit Student</h1>

    <form>
        <p>
            Name:<br>
            <input type="text" value="Juan Dela Cruz">
        </p>

        <p>
            Email:<br>
            <input type="email" value="juan.delacruz@email.com">
        </p>

        <p>
            Course:<br>
            <input type="text" value="BS Information Technology">
        </p>

        <p>
            Year Level:<br>
            <input type="text" value="3rd Year">
        </p>

        <button>Update</button>
        <a href="/students" class="button">Cancel</a>
    </form>
@endsection
