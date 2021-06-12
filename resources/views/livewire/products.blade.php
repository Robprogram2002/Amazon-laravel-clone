<div class="admin-container">
    <div class="category-create">
        <h2>Create a new Product</h2>
        <form wire:submit.prevent = 'saveProduct'>
            @csrf
            <div class="input-container">
                @if (session()->has('message'))
                <div class="alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <label for="title">Title:</label>
                <input type="text" name="title" placeholder="Product name..." wire:model = 'title'>
                @error('title') <span class="error"> {{$message}} </span> @enderror

                <label for="description">Description :</label>
                <textarea name="description"  cols="30" rows="10" placeholder="product description..." wire:model = 'description'></textarea>
                @error('description') <span class="error"> {{$message}} </span> @enderror

                <label for="category">Select a category: </label>
                <select name="category_id" wire:model = 'category_id' wire:click="currentCategory">
                    <option>List of categories ...</option>
                    @forelse ($categories as $category)
                        <option value=" {{$category->id}} "> {{$category->title}} </option>
                    @empty
                        
                    @endforelse
                </select>
                @error('category_id') <span class="error"> {{$message}} </span> @enderror

                <label for="subcategory">Select a subcategory: </label>
                <select name="subcategory_id" wire:model = 'subcategory_id'>
                    <option>List of subcategories...</option>
                    @if ($current_category !== null )
                        @forelse ($current_category->subcategories as $subcategory)
                        <option value=" {{$subcategory->id}} "> {{$subcategory->name}} </option>
                        @empty
                        @endforelse
                    @endif
                </select>
                @error('subcategory_id') <span class="error"> {{$message}} </span> @enderror

                <label for="category">Select a seller:</label>
                <select name="seller_id" wire:model = 'seller_id'>
                    <option>List of sellers...</option>
                    @forelse ($sellers as $seller)
                        <option value=" {{$seller->id}} "> {{$seller->name}} </option>
                    @empty
                        
                    @endforelse
                </select>
                @error('seller_id') <span class="error"> {{$message}} </span> @enderror
                
                <div class="numbers">
                    <div>
                        <label for="cost">Product Cost:</label>
                        <input type="number" placeholder="Product cost..." wire:model = 'cost'>
                        @error('cost') <span class="error"> {{$message}} </span> @enderror
                    </div>
                    <div>
                        <label for="stuck">Product Stuck:</label>
                        <input type="numer" placeholder="Product Stuck..." wire:model = 'stuck'>
                        @error('stuck') <span class="error"> {{$message}} </span> @enderror
                    </div>
                    <div>
                        <label for="sale">Produc is on sale:</label>
                        <select name='sale' wire:model = 'onSale'>
                            <option value= true >Yes</option>
                            <option value= false >No</option>
                        </select>
                    </div>
                    @if ($onSale)
                    <div>
                        <label for="discount">Produc discount (percentage):</label>
                        <input type= 'number' wire:model = 'discount' name = 'discount' placeholder = 'add discount in percentage' />
                    </div>
                    @endif
                </div>

                <h4 class="product-section">Product Tags:</h4>
                <div class="tags">


                    <select name="tag1_id" wire:model = 'tag1_id'>
                            <option>Select tag one</option>
                        @forelse ($tags as $tag)
                            <option value=" {{$tag->id}} "> {{$tag->name}} </option>
                        @empty
                            
                        @endforelse
                    </select>
                    @error('tag1_id') <span class="error"> {{$message}} </span> @enderror

                    <select name="tag2_id" wire:model = 'tag2_id'>
                            <option>Select tag two</option>
                        @forelse ($tags as $tag)
                            <option value=" {{$tag->id}} "> {{$tag->name}} </option>
                        @empty
                            
                        @endforelse
                    </select>
                    @error('tag2_id') <span class="error"> {{$message}} </span> @enderror

                    <select name="tag3_id" wire:model = 'tag3_id'>
                            <option>Select tag three</option>
                        @forelse ($tags as $tag)
                            <option value=" {{$tag->id}} "> {{$tag->name}} </option>
                        @empty
                            
                        @endforelse
                    </select>
                    @error('tag3_id') <span class="error"> {{$message}} </span> @enderror

                    <select name="tag4_id" wire:model = 'tag4_id'>
                        <option>Select tag four</option>
                        @forelse ($tags as $tag)
                            <option value=" {{$tag->id}} "> {{$tag->name}} </option>
                        @empty
                            
                        @endforelse
                    </select>
                    @error('tag4_id') <span class="error"> {{$message}} </span> @enderror
                </div>

                <h4 class="product-section">Product Specifications:</h4>
                <div class="specifics">

                    <input type="text"  placeholder="Specification One..." wire:model = 'specific1'>
                    @error('specific1') <span class="error"> {{$message}} </span> @enderror

                    <input type="text" placeholder="Specification two..." wire:model = 'specific2'>
                    @error('specific2') <span class="error"> {{$message}} </span> @enderror

                    <input type="text"  placeholder="Specification three..." wire:model = 'specific3'>
                    @error('specific3') <span class="error"> {{$message}} </span> @enderror

                    <input type="text" placeholder="Specification four..." wire:model = 'specific4'>
                    @error('specific4') <span class="error"> {{$message}} </span> @enderror
                </div>

                <div class="images-container">
                    <h4 class="product-section">Add the main image of your product:</h4>
                    <input type="file"  wire:model = 'img_path1'>
                    @error('img_path1') <span class="error"> {{$message}} </span> @enderror
                    <h4 class="product-section">Add other five image:</h4>
                    <div class="others">
                        <input type="file"  wire:model = 'img_path2'>
                        @error('img_path2') <span class="error"> {{$message}} </span> @enderror
    
                        <input type="file"  wire:model = 'img_path3'>
                        @error('img_path3') <span class="error"> {{$message}} </span> @enderror
    
                        <input type="file"  wire:model = 'img_path4'>
                        @error('img_path4') <span class="error"> {{$message}} </span> @enderror
    
                        <input type="file"  wire:model = 'img_path5'>
                        @error('img_path5') <span class="error"> {{$message}} </span> @enderror
    
                        <input type="file"  wire:model = 'img_path6'>
                        @error('img_path6') <span class="error"> {{$message}} </span> @enderror
                    </div>

                </div>
                <input type="submit" value="Create">
            </div>
        </form>
    </div>
</div>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi hic quasi facere illo alias, mollitia, architecto possimus tenetur necessitatibus quia deserunt facilis enim et aut repellat aperiam iste? Iusto, fugit. Repellat nam sint voluptate. Cumque deserunt cupiditate incidunt rem dolores quam in provident? Animi, eos. Ducimus voluptates, porro illum quasi delectus placeat tempora eius blanditiis ipsam aut? Nam, ad hic. Nemo odit et quo, in quam commodi est quidem harum nulla, error sint, quas atque autem quae ratione reiciendis sapiente molestiae libero accusamus quaerat magni? Repellendus odit molestiae adipisci nulla? Debitis architecto voluptates quae tempora nihil totam corporis explicabo consequuntur!