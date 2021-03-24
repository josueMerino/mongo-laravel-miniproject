<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('news.search') }}" method="GET">
        <label for="title">
            Título
            <input type="text" name="title" id="title">
        </label>

        <select name="topic" id="label">
            <option value="" disabled selected>Elige</option>
            <option value="Actualidad">Actualidad</option>
            <option value="Internacional">Internacional</option>
            <option value="Otros">Otros</option>
        </select>

        <input type="submit" value="Enviar">
      </form>
</body>
</html>