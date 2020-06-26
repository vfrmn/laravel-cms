<hr class="featurette-divider">

<div class="row featurette">

    <div class="col-md-12">
        <a href="{{route('page', $child->caption)}}">
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">{{$child->intro}}</strong>
                   {{$child->content}}
                </p>
            </div>
        </a>
    </div>


</div>

