@extends('layouts.master')

@section('content')
<h1>{{{ $post->title }}}</h1>
<p> {{ $post->body }}</p>
<img src="{{ $post->img }}">

<hr>
		
		<p>({{{$post->user->first_name}}})</p>
		

<p><a href="{{{action('PostsController@index') }}}">Return to Posts</a></p>
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'blackonair'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    

@if (Auth::check())
@if (Auth::user()->is_admin || Auth::user()->id === $post->user_id)
<p><a href="" id="btnDeletePost">Delete Post</a></p>
<p><a href="{{{action('PostsController@edit', $post->id) }}}">Edit Post</a></p>
@endif
@endif
{{Form::open(array('action'=> array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'formDeletePost' )) }}
{{Form::close()}}

 @stop

 @section('bottom-script')

 <script type="text/javascript">
$('#btnDeletePost').on('click', function (e){
	e.preventDefault();
	if (confirm('Are you sure you want to delete this post?')){
		$('#formDeletePost').submit();
	}
});


 </script>

 @stop