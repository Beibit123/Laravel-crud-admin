<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        Id: {{ $computer->id }}<br>
        Name: {{ $computer->name }}<br>
        Price: {{ $computer->price }}<br>
        Image: <br><img src="{{ url('storage/' . $computer->image) }}" alt="image"><br>
    </div>
</body>
</html>