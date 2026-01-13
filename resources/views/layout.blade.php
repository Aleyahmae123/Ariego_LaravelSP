<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f6f8;
        }

        nav {
            background-color: #502c46;
            padding: 15px;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            padding: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        button, a.button {
            padding: 8px 12px;
         background-color: #2c3e50;
            color: white;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        a.button {
            display: inline-block;
        }
    </style>
</head>
<body>

    <nav>
        <a href="/">Home</a>
        <a href="/students">Students</a>
        <a href="/students/create">Add Student</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
