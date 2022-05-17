@props(['category'])

<a href="{{route('cat.name',$category->title)}}">{{$category->title}}</a>


        @foreach ($category->children  as $child)

                <div style="margin-left:30px;">
                    {{-- <x-category-item :$category="$child" /> --}}
                     <a href="{{route('cat.name',$child->title)}}"><x-category-item :category="$child"/></a>
                    </div>

        @endforeach
