@props(['blogs'])

<x-category></x-category>

    <form action="/" method="GET">
@if (request('category'))

    <input type="hidden" name="category" value="{{ request('category') }}">

@endif
@if (request('user'))
    
<input type="hidden" name="user" value="{{ request('user') }}">

@endif

        <label for="search">Search</label>
        <input value="{{ request('search') }}" type="text" name="search" id="search">
        <button type="submit">Search</button>
    </form>
</div>

@foreach ($blogs as $blog)
    <div class="">
     <x-blog_card :blog="$blog"/>
    </div>
@endforeach

{{ $blogs->links() }}
