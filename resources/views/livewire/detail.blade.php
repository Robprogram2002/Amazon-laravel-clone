<div class="detail-container">
    <div class="detail-text">
        <h2> {{$category->title}} (details) </h2>
        <p> {{$category->description}} </p>
        <div class="links">
            <a href="#">Edit</a>
            <a href="#">Delete</a>
        </div>
    </div>
    <div class="detail-img">
        <img src=" {{route('category.img', ['filename' => $category->banner])}}"  />
    </div>
</div>
