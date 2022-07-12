@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="columns">
            <aside class="column is-2 menu">
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
                                <td><a href="/marketplace/{{$category->id}}">{{$category->title}}</a></td>
                                <td>{{$category->recursiveArticles->count()}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </aside>
            <div class="column is-10">
                <h1 class="is-size-1">Marketplace</h1>
                @foreach($categories as $category)
                <h2 class="is-size-2">{{$category->title}}</h2>
                <div class="columns is-multiline">
                    @foreach ($category->recursiveArticles as $article)
                        <div class="column is-3">
                        <div class="card">
                            <div class="card-content">
                                <h4 class="is-size-4">{{$article->title}}</h4>
                                <div class="content">
                                    {{$category->content}}
                                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time><br>
                                    <a href="#">Read more</a>
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
