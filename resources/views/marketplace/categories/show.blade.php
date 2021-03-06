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
                    @foreach ($parents as $parent)
                        <tr>
                            <td><a href="/marketplace/{{$parent->slug}}">{{$parent->title}}</a></td>
                            <td>{{$parent->recursiveArticles->count()}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <table border="1">
                <thead>
                    <tr>
                        <td>Category</td>
                        <td># Articles</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td><a href="#">{{$article->title}}</a></td>
                            <td>{{$article->recursiveArticles->count()}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </aside>
        <div class="column is-10">
            <h1 class="is-size-1">{{$subCategories[0]->title}}</h1>

            @foreach ($articles as $article)
                <h2 class="is-size-2">{{$article->title}}</h2>
                <div class="columns is-multiline">
                    @foreach ($article->articles->slice(0,8) as $bb)
                        <div class="column is-3">
                            <div class="card">
                                <div class="card-content">
                                    {{$bb->title}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach






            {{-- <div class="column is-10">
                <h1 class="is-size-1">Marketplace</h1>
                @foreach($articles as $article)
                <h2 class="is-size-2">{{$parent->title}}</h2>
                <div class="columns is-multiline">
                    @foreach ($parent->recursiveArticles->slice(0,8) as $article)
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
            </div> --}}
        </div>
    </div>
</div>


@endsection
