<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    </head>
    <body>
        <div class="container">
            <div class="columns">
                <div class="column">
                    bb
                    {{-- @foreach($categories as $category)
                        <x-category-item :category="$category" />
                    @endforeach --}}


                    {{-- @foreach($categories as $category)
                        <x-category-item :category="$category" />
                    @endforeach --}}


{{-- {{dd($categories)}} --}}


                <table border="1">
                    <thead>
                        <tr>
                            <td>Category</td>
                            <td># Articles</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->title}}</td>
                                <td>{{$category->articles->count()}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <code style="">{{$categories}}</code>





                </div>
            </div>
        </div>

    </body>
</html>
