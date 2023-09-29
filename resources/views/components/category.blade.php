
    <div class="container">
        <h1>Blogs</h1>
        <div class="">
            <select onchange="location = this.value;">
                <option value="/" {{ !isset($currentCategory) ? 'selected' : '' }}>Filter By Category</option>
                @foreach ($categories as $category)
                    <option value="/?category={{ $category->slug }}
                        {{ request('search') ? "&search=".request('search'):''}}
                        {{ request('user') ? "&user=".request('user'):''}}" 
                        {{ isset($currentCategory) && $currentCategory->id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
