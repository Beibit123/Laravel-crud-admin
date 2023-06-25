<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form class="form-group" action="{{ route('admin.computer.update', $computer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <label for="name">Смените имя</label>
            <input class="form-control" type="text" name="name" value="{{ $computer->name }}">
            <label for="price">Смените цену</label>
            <input class="form-control" type="text" name="price" value="{{ $computer->price }}">
            <label for="image"></label>
            <input class="form-control" type="file" name='image' value="{{ $computer->image }}">
            <input type="submit" value="Отправить">
        </form>
    </div>
</body>
</html>