@props(['category'])
<div>
    <a href="/marketplace/{{$category->slug}}">{{$category->title}} | id: {{$category->id}}</a>
    @foreach($category->children as $child)
        <div style="margin-left:20px;">
            <x-category-item :category="$child" />
        </div>
    @endforeach
</div>
