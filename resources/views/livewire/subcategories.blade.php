<div class="admin-container">
    <div class="category-create">
        <h2>Create a new Sub-category</h2>
        <form wire:submit.prevent = 'SaveSubCategory'>
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

                <label for="img_path">Add a sub-category image:</label>
                <input type="file" name="img_path" wire:model = 'img_path' value="">
                @error('img_path') <span class="error"> {{$message}} </span> @enderror

                <label for="category">Select a father category:</label>
                <select name="category_id" wire:model = 'category_id'>
                    @forelse ($categories as $category)
                        <option></option>
                        <option value=" {{$category->id}} "> {{$category->title}} </option>
                    @empty
                        
                    @endforelse
                </select>
                <input type="submit" value="Create">
            </div>
        </form>
    </div>
    <h2>List of Categories with Sub-categories that already exist</h2>
    <div class="sub-category-list">
        @foreach ($categories as $category)
            <div class="content">
                <h3> Category: {{$category->title}} </h3>
                <ul class="list">
                    @foreach($category->subcategories as $subcategory)
                        <li> > {{$subcategory->name}} </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>
