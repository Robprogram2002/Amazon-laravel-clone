<div class="overlay">
    <div class="comment-form">
        <h3>Add a new comment!</h3>
        <i class="fas fa-times-circle" wire:click.prevent = 'showComment' ></i>
        <form wire:submit.prevent = 'commentSave'>
            @csrf
            <div class="input-container">
                @if (session()->has('message'))
                <div class="alert-success">
                    {{ session('message') }}
                </div>
                @endif

                <label for="title">Title:</label>
                <input type="text" placeholder="Comment title..." wire:model = 'title'>
                @error('title') <span class="error"> {{$message}} </span> @enderror

                <label for="content">Content :</label>
                <textarea name="content"  cols="30" rows="4" placeholder="Add the content of your comment here..." wire:model = 'content'></textarea>
                @error('content') <span class="error"> {{$message}} </span> @enderror

                <label for="rate">Rate:</label>
                <input type="number" placeholder="product rate..." wire:model = 'rate' id="input_rate" min="0" max="5" step="0.1">
                @error('rate') <span class="error"> {{$message}} </span> @enderror

                <div class="rate">
                    @switch($rate)
                        @case($rate == 0 )
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            @break
                        @case($rate > 0.4 && $rate < 1)
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            @break
                        @case($rate == 1)
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            @break
                        @case($rate > 1 && $rate <= 1.9)
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            @break
                        @case($rate == 2 )
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            @break
                        @case($rate > 2 && $rate <= 2.9 )
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            @break
                        @case($rate == 3 )
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            @break
                        @case($rate > 3 && $rate <= 3.9)
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            @break
                        @case($rate == 4)
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            @break
                        @case($rate > 4 && $rate <= 4.9)
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            @break
                        @case($rate == 5)
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            @break
                        @default
                            
                    @endswitch
                </div>

                <label>Add some images: </label>
                <div class="images-container">
                    
                    <input type="file"  wire:model = 'img_path1'>
                    @error('img_path1') <span class="error"> {{$message}} </span> @enderror
    
                    <input type="file"  wire:model = 'img_path2'>
                    @error('img_path2') <span class="error"> {{$message}} </span> @enderror
    
                    <input type="file"  wire:model = 'img_path3'>
                    @error('img_path3') <span class="error"> {{$message}} </span> @enderror
                </div>

                <input type="submit" value="Send">
            </div>
        </form>
    </div>
</div>