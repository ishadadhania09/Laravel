<!DOCTYPE html>
<html>
<head>
    <title>View</title>
</head>
<body>
    <h1>View Data</h1>
    @if(count($view) > 0)
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll No.</th>
            <th>City</th>
            <th>Email</th>
        </tr>
        @foreach($view as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->rollno }}</td>
                <td>{{ $post->city }}</td>
                <td>{{ $post->email}}</td>
            </tr>
        @endforeach
    </table>
    @else
        <p>No data found.</p>
    @endif
</body>
</html>
