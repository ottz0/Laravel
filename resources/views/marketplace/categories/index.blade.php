@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="columns">
            <aside class="column is-2 menu">
                <p class="menu-label">Marketplace</p>
                @foreach ($categories as $category)
                    {{$category->title}}





                    {{-- @foreach ($category->articles- as )

                    @endforeach --}}
                @endforeach

            </aside>
            <div class="column is-10">
                <h1 class="is-size-1">Marketplace</h1>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                bb
                {{-- @foreach($categories as $category)
                    <x-category-item :category="$category" />
                @endforeach --}}


                {{-- @foreach($categories as $category)
                    <x-category-item :category="$category" />
                @endforeach --}}

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

            {{-- <code style="">{{$categories}}</code> --}}

            @foreach ($categories as $category)
                <h2 class="is-size-2">{{$category->title}}</h2>
                <p class="is-size-5">Articles: {{$category->articles->count()}}</p>
                <div class="columns is-multiline">
                    @foreach ($category->articles as $article)
                        <div class="column is-3">
                        <div class="card">
                            <div class="card-content">
                                <h4 class="is-size-4">{{$article->title}}</h4>

                                <div class="content">
                                    {{$category->content}}
                                    <a href="#">#css</a> <a href="#">#responsive</a>
                                    <br>
                                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                </div>
                                </div>
                          </div>
                        </div>
                    @endforeach

                </div>
            @endforeach
            </div>
        </div>
    </div>


@endsection
