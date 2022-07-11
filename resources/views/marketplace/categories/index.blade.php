@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="columns">
            <aside class="column is-2 menu">


                @foreach ($categories as $category)
                    {{$category}}
                @endforeach

                {{-- <table border="1">
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
                </table> --}}



            </aside>
            <div class="column is-10">
                <h1 class="is-size-1">Marketplace</h1>
            </div>
        </div>
        <div class="columns">
            <div class="column">

                {{$categories}}


            </div>
        </div>
    </div>


@endsection
