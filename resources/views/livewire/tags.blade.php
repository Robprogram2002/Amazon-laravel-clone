<div class="admin-container">
    <div class="category-create">
        <h2>Create a new Product Tag </h2>
        <form wire:submit.prevent = 'SaveTag'>
            @csrf
            <div class="input-container">

                @if (session()->has('message'))
                <div class="alert-success">
                    {{ session('message') }}
                </div>
                @endif

                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="sub-category name..." wire:model = 'name'>

                @error('name') <span class="error"> {{$message}} </span> @enderror
                        
                <input type="submit" value="Create">
            </div>
        </form>
    </div>
    <h2>List of Tags that already exits</h2>
    <div class="tag-list">
        @foreach ($tags as $tag)
        <div>
            <h4> {{$tag->name}} </h4>
        </div>
        @endforeach
    </div>
</div>
