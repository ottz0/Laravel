@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="columns">
            <aside class="column is-2 menu">



                {{-- @foreach ($categories as $parentCategories)
                    @foreach($parentCategories as $parentCategory)
                        {{ $parentCategory }}
                    @endforeach
                @endforeach --}}


                {{-- {{var_dump($categories)}} --}}

                @foreach($categories as $category)
                    {{$category->title}}
                    @foreach ($category->children as $child)
                        <div style="margin-left:30px;">
                            {{$child->title}} | {{$child->articles->count()}}
                        </div>
                    @endforeach
                @endforeach



            </aside>
            <div class="column is-10">
                {{-- <h1 class="is-size-1">Marketplace</h1> --}}
            </div>
        </div>
        <div class="columns">
            <div class="column">

                @foreach($categories as $category)
                    @foreach ($category->children as $child)
                        @foreach ($child->children as $article)
                            {{$article}}
                        @endforeach
                    @endforeach
                @endforeach


            </div>
        </div>
    </div>


@endsection
