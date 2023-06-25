<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ol>
        @foreach ($computers as $computer)
            <li><a href="{{ route('admin.computer.show', $computer->id) }}">{{ $computer->name }}</a></li>
        @endforeach
    </ol>
    
</body>
</html>