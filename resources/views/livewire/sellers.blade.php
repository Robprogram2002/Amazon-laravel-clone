<div class="admin-container">
    <div class="category-create">
        <h2>Create a new seller</h2>
        <form wire:submit.prevent = 'saveSeller'>
            @csrf
            <div class="input-container">
                @if (session()->has('message'))
                <div class="alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <label for="name">Name:</label>
                <input type="text" name="title" placeholder="seller complete name..." wire:model = 'name'>
                @error('name') <span class="error"> {{$message}} </span> @enderror

                <label for="description">Description :</label>
                <textarea name="description"  cols="30" rows="10" placeholder="seller description..." wire:model = 'description'></textarea>
                @error('description') <span class="error"> {{$message}} </span> @enderror

                <label for="country">Country:</label>
                <input type="text" name="country" placeholder="Here your country..." wire:model = 'country'>
                @error('country') <span class="error"> {{$message}} </span> @enderror

                <label for="state">State:</label>
                <input type="text" name="state" placeholder="Here your state..." wire:model = 'state'>
                @error('state') <span class="error"> {{$message}} </span> @enderror

                <label for="localidad">City:</label>
                <input type="text" name="localidad" placeholder="Here your city..." wire:model = 'localidad'>
                @error('localidad') <span class="error"> {{$message}} </span> @enderror

                <label for="adress">Address:</label>
                <input type="text" name="adress" placeholder="Here your complete addres..." wire:model = 'adress'>
                @error('adress') <span class="error"> {{$message}} </span> @enderror

                <label for="img_path">Add your image:</label>
                <input type="file" name="img_path" wire:model = 'img_path'>
                @error('img_path') <span class="error"> {{$message}} </span> @enderror

                <input type="submit" value="Create">
            </div>
        </form>
    </div>
    <h2>List of Sellers that already exist</h2>
    <div class="sellers-list">
        @foreach($sellers as $key => $seller)
            <div class="seller">
                <div class="text">
                    <h4> {{$seller->name}} </h4>
                    <p> {{ substr($seller->description, 0 ,250) }}  ...</p>
                    <p> {{$seller->country}} - {{$seller->state}} - {{$seller->localidad}} - {{$seller->adress}} </p>
                    <a href=" {{route('seller.detail', ['id' => $seller->id])}} ">View details</a>
                </div>
                <div class="img">
                    <img src=" {{route('seller_img', ['filename' => $seller->img_path])}} ">
                </div>
            </div>
        @endforeach
    </div>
</div>
