<div class="card border-0 shadow h-100">
    <img class="card-img-top" src="https://picsum.photos/200/300/?random={{ $movie->id }}" alt="Title">
    <div class="card-body">
        <h4 class="card-title">{{ $movie->title }}</h4>
        <div class="card-text">
            <h5>Original title:</h5>{{ $movie->original_title }}
        </div>
        <div class="card-text">
            <h5>Release:</h5>{{ $movie->date }}
        </div>
        <div class="card-text">
            <h5>Rating:</h5>{{ $movie->vote }}
        </div>
        <div class="card-text">
            <h5>Nationality:</h5>{{ $movie->nationality }}
        </div>
    </div>
</div>
