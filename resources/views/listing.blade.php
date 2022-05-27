<h1>    {{$heading}}   </h1>

@unless(count($listing) == 0)
    <h2> {{$listing['title'] }} </h2>
    <p> {{$listing['description']}} </p>
@else
    <p>No listings found.</p>
@endunless
