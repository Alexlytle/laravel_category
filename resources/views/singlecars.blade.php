

@foreach ($posts as $post)
<div class="">
    <h2>{{$post->title}}</h2>
    <p>{{$post->body}}</p>
</div>
   
@endforeach