<hr class="featurette-divider">

    <div class="row featurette">

        <div class="col-md-7">
            <a href="{{route('page', $child->caption)}}">
                <h2 class="featurette-heading"> <span class="text-muted">{{$child->intro}}.</span></h2>
                <p class="lead">{{$child->content}}.</p>
            </a>
        </div>

        <div class="col-md-5">
            <a href="{{route('page', $child->caption)}}">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
            </a>
        </div>
    </div>

