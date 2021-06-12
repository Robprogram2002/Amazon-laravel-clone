<div class="seller-container">
    <h2> {{$seller->name}} </h2>
    <img src=" {{route('seller_img', ['filename' => $seller->img_path])}} ">
    <div class="info">
        <div class="text">
            <h4>Description:</h4>
            <p> {{$seller->description}} </p>
        </div>
        <div class="address">
            <h4>Address:</h4>
            <p> {{$seller->country}} - {{$seller->state}} - {{$seller->localidad}} </p>
            <p> {{$seller->adress}} </p>
        </div>
    </div>
</div>
