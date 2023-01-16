<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    @foreach ($movies as $items)
            <li>{{ $items->id }} - {{ $items->titole }} - {{ $items->original_title }} - {{ $items->nationality }} - {{ $items->date }}- {{ $items->vote }}</li>
        @endforeach
    </ul>
</body>
</html>
