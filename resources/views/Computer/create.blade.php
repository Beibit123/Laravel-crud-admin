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
        <form class="form-group" action="{{ route('admin.computer.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Введите название ноутбука</label>
            <input class="form-control" type="text" placeholder="Введите название" name="name"><br>
            <label for="price">Укажите цену</label>
            <input class="form-control" type="text" placeholder="Введите цену" name="price"><br>
            <label for="image">Добавьте изображение</label>
            <input class="form-control" type="file" name="image"><br>
            <input type="submit" class="btn btn-primary" value="Отправить">
        </form>
    </div>
    
</body>
</html>