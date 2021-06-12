<div class="admin-container">
    <div class="category-create">
        <h2>Create a new category</h2>
        <form wire:submit.prevent = 'saveCategory'>
            @csrf
            <div class="input-container">
                @if (session()->has('message'))
                <div class="alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <label for="name">Name:</label>
                <input type="text" name="title" placeholder="category name..." wire:model = 'title'>
                @error('title') <span class="error"> {{$message}} </span> @enderror

                <label for="description">Description :</label>
                <textarea name="description"  cols="30" rows="10" placeholder="category description..." wire:model = 'description'></textarea>
                @error('description') <span class="error"> {{$message}} </span> @enderror

                <label for="banner">Add a category image:</label>
                <input type="file" name="img_path" wire:model = 'img_path'>
                @error('img_path') <span class="error"> {{$message}} </span> @enderror

                <input type="submit" value="Create">
            </div>
        </form>
    </div>
    <h2>List of Categories that already exist</h2>
    <div class="category-list">
        @foreach ($categories as $category)
        <div class="category-info">
            <div class="text">
                <h4> {{$category->title}} </h4>
                <p> {{$category->description}} </p>
                <a href=" {{route('category.detail', ['id' => $category->id])}} ">View more</a>
            </div>
            <div class="img">
                <img src=" {{route('category.img', ['filename' => $category->banner])}}"  />
            </div>
        </div>
        @endforeach
    </div>
</div>
