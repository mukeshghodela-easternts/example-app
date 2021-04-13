<h1> Posts </h1>
<h2>Total Posts : {{ count($posts) }}</h2>

{{-- Conditional Statement --}}
@if (count($posts) > 5)
    <h2>5+ Posts</h2>

@elseif(count($posts) > 10)
    <h2>10+ Posts </h2>

@else
    <h2>{{ count($posts) }} Posts</h2>

@endif

<h1>Post Listing</h1>

{{-- Foreach loop to iterate php array --}}
@foreach ($posts as $post)
    <h3>{{ $post }}</h3>
@endforeach

{{-- Include View --}}
@include('inner')

{{-- Use PHP in JS --}}
<script>
    var postsData = @JSON($posts);
    console.log("postsData", postsData);

</script>
