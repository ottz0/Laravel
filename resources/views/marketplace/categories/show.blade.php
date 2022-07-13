@extends('layouts.app')
@section('content')
<div class="container">
    <div class="columns">
        <aside class="column is-3 menu">
            <p class="menu-label">Marketplace</p>
            <ul class="menu-list">
                @foreach ($parents as $parent)
                    <li><a href="/marketplace/{{$parent->slug}}" class="{{ (request()->segment(2) === $parent->slug) ? 'is-active' : '' }}">{{$parent->title}} <span class="tag is-info is-pulled-right">{{$parent->recursiveArticles->count()}}</span></a></li>
                    <li>
                        <ul>
                            @foreach($parent->children as $child)
                                <li><a href="/marketplace/{{$parent->slug}}/{{$child->slug}}" class="{{ (request()->segment(3) === $child->slug) ? 'is-active' : '' }}">{{$child->title}} <span class="tag is-info is-light is-pulled-right">{{$child->recursiveArticles->count()}}</span></a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </aside>
        <div class="column is-9">
            <h1 class="is-size-1 pb-5">{{$categories[0]->title}}</h1>
            @foreach ($articles as $article)
                <div class="columns">
                    <div class="column">
                        <h2 class="is-size-3">{{$article->title}}</h2>
                    </div>
                </div>
                <div class="columns is-multiline pb-5">
                    @foreach ($article->articles->slice(0,8) as $bb)
                        <div class="column is-3">
                            <div class="card">
                                <div class="card-content">
                                    {{$bb->title}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="columns">
                        <div class="column">
                            <div>Total articles: {{$article->articles->count()}} - <a href=""> Browse {{$article->title}} articles</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
