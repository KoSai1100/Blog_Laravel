@props(['blog'])

<div>
    <h1><a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a></h1>
    <p>Intro: {!! $blog->intro !!} </p>
    <p>Body: {!! $blog->body !!} </p>
    <p>Published date: {!! $blog->create_at !!} </p>
    <p>Category: <a href="/?category={{ $blog->category->slug }}"> {{ $blog->category->name }}</a> </p>
    <p>Author: <a href="/?user={{ $blog->user->name }}
        {{ request('search') ? "&search=".request('search'):''}}
        {{ request('category') ? "&category=".request('category'):''}}
        "> {{$blog->user->name}}</a> </p>

</div>