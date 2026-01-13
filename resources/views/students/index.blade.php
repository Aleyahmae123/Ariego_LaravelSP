@extends('layout')

@section('content')
    <h1>Student List</h1>

    <a href="/students/create" class="button">Add New Student</a>

    <br><br>

    @php
        $students = [
            [
                'id' => 1,
                'name' => 'Juan Cruz',
                'course' => 'BS Information Science',
                'year' => '3rd Year'
            ],
            [
                'id' => 2,
                'name' => 'Maria Santos',
                'course' => 'BS Computer Science',
                'year' => '2nd Year'
            ]
        ];
    @endphp

    <table>
        <tr>
            <th>Name</th>
            <th>Course</th>
            <th>Year Level</th>
            <th>Actions</th>
        </tr>

        @foreach ($students as $student)
            <tr>
                <td>{{ $student['name'] }}</td>
                <td>{{ $student['course'] }}</td>
                <td>{{ $student['year'] }}</td>
                <td>
                    <a href="/students/{{ $student['id'] }}">View</a> |
                    <a href="/students/{{ $student['id'] }}/edit">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
