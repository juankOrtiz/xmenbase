<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Issues | X-Men Base</title>
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-4xl font-bold">List of Issues</h1>

    <ul>
        @forelse ($issues as $issue)
            <li>
                <a href="{{ route('issues.show', $issue) }}">{{ $issue->name }}</a>
            </li>
        @empty
            <li>There are currently no issues stored on the database</li>
        @endforelse
    </ul>
</body>
</html>