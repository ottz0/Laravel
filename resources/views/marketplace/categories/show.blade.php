@extends('layouts.app')
@section('content')


<div class="container">
    <div class="columns">
        <aside class="column is-2 menu">
            @foreach ($categories as $category)
                <p class="menu-label">{{$category->title}}</p>
                @foreach ($category->articles- as )

                @endforeach
            @endforeach
              <ul class="menu-list">
                <li><a>Dashboard</a></li>
                <li><a>Customers</a></li>
              </ul>
              <p class="menu-label">
                Administration
              </p>
              <ul class="menu-list">
                <li><a>Team Settings</a></li>
                <li>
                  <a class="is-active">Manage Your Team</a>
                  <ul>
                    <li><a>Members</a></li>
                    <li><a>Plugins</a></li>
                    <li><a>Add a member</a></li>
                  </ul>
                </li>
                <li><a>Invitations</a></li>
                <li><a>Cloud Storage Environment Settings</a></li>
                <li><a>Authentication</a></li>
              </ul>
              <p class="menu-label">
                Transactions
              </p>
              <ul class="menu-list">
                <li><a>Payments</a></li>
                <li><a>Transfers</a></li>
                <li><a>Balance</a></li>
              </ul>
        </aside>
        <div class="column is-10">
            therre
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
