<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universes table</title>
</head>
<body>
<h1>Universes</h1>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
    </tr>
    </thead>

    <tbody>
    @foreach($universes as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{ route('universes.create') }}">Create New Universe</a>
</body>
</html>
