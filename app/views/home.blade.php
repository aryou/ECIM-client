@include('global.header')
<header>
	<section class="left">
		<h1>Welcome {{ Session::get('user.username') }}!</h1>
	</section>
	<section class="right">
		<a href="/logout">logout</a>
	</section>
	<div class="clear"></div>
</header>
<main>
	<section id="content">
		<h2>Welcome to ECIM!</h2>
	</section>
</main>
@include('global.footer')