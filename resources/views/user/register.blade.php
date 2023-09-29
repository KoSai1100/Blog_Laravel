<x-layout>

    <form action="/register" method="POST">
    @csrf

    <div>
        <label for="">name</label>
        <input value="{{ old("name") }}" type="text" name="name">
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

     <div>
        <label for="">email</label>
        <input value="{{ old("email") }}" type="email" name="email"> 
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>  
    
    <div>
        <label for="profile_url">Profile Image</label>
        <input type="file" name="profile_image" id="profile_image">
        @error('profile_image')
        <p class="text-danger">{{ $message }}</p>
    @enderror
    </div>
    

    <div>
        <label for="">password</label>
        <input type="password" name="password">
        @error('password')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    
    <div>
       <button type="submit">Register</button>
    </div>
</form>

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}


</x-layout>