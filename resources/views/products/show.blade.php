<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$product->title}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="flex justify-between">
        <h1>Интернет-магазин</h1>
        <nav>
            <ul class="flex gap-4">
                <li><a href="{{route('products.index')}}">Главная</a></li>
                <li><a href="{{route('products.create')}}">Создать продукт</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container mx-auto">
            <h2>{{$product->title}}</h2>
            <div class="border mb-4 flex">
                <img class="w-28 h-full aspect-1 mr-4" src="{{ Vite::asset($product->path_img) }}" alt="{{ $product->title }}">
                <div>
                    <p>{{ $product->description }}</p>
                    <p>{{ $product->price}}</p>
                    <p>Категория: {{$product->category->title}}</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>