@extends('layout')

@section('content')
    <h1>Student List</h1>

    <a href="/students/create" class="button">Add New Student</a>

    <br><br>

    <table> 
        <tr>
            <th>Names</th>
            <th>Course</th>
            <th>Year Level</th>
            <th>Actions</th>
        </tr>
// make this a dynamic table //
        <tr>
            <td>Juan Cruz</td>
            <td>BS Information Science</td>
            <td>3rd Year</td>
            <td>
                <a href="/students/1">View</a> |
                <a href="/students/1/edit">Edit</a>
            </td>
        </tr>

        <tr>
            <td>Maria Santos</td>
            <td>BS Computer Science</td>
            <td>2nd Year</td>
            <td>
                <a href="/students/2">View</a> |
                <a href="/students/2/edit">Edit</a>
            </td>
        </tr>
    </table>
@endsection
