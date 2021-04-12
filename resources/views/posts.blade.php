<h1> Posts </h1>
<h2>Total Posts : {{ count($posts) }}</h2>

@if (count($posts) > 5)
    <h2>5+ Posts</h2>

@elseif(count($posts) > 10)
    <h2>10+ Posts </h2>

@else
    <h2>{{ count($posts) }} Posts</h2>

@endif
