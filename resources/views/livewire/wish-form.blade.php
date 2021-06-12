<div class="overlay">
    <div class="wish-list">
        <h3>Choose the list for this product</h3>
        @if (session()->has('message'))
        <div class="alert-success">
            {{ session('message') }}
        </div>
        @endif
        <div class="lists">
            @if ($wish_lists !== null)
                @foreach ($wish_lists as $list)
                    <p wire:click.self = 'addWish({{$product->id}},{{$list->id}})'> {{$list->name}} </p>
                @endforeach
            @else
                <h5>There is no list still</h5>
            @endif
        </div>
        <hr>
        <h3>Or create a new list</h3>
        <div class="form-wish-conatiner">
            <form wire:submit.prevent = 'createList'>
                @csrf
                <label for="name">Name:</label>
                <input type="text" placeholder="list name..." wire:model = 'list_name'>
                @error('list_name') <span class="error"> {{$message}} </span> @enderror

                <label for="description">Description:</label>
                <textarea placeholder="list description..." wire:model = 'list_description'></textarea>
                @error('description') <span class="error"> {{$message}} </span> @enderror

                <label for="img_path">Image:</label>
                <input type="file" wire:model = 'list_image'>
                @error('img_path') <span class="error"> {{$message}} </span> @enderror

                <input type="submit" value="Create">
            </form>

            <div class="buttons">
                <button wire:click.self = 'toLists'>See my lists</button>
                <button class="yelllow" wire:click.self = 'showWish'>Continue shopping</button>
            </div>
        </div>
    </div>
</div>