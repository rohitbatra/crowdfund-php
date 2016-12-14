<div class="padding">
</div>
<div class="footer-wide">
	<div class="container">
		<footer>
			<div class="row">
				<div class="col-md-3">
					<h3>POLONIAGO</h3>
				</div>
				<div class="col-md-3">
					<h4>About Us</h4>
					@if(isset($navigations['about']))
						<ul>
							@foreach($navigations['about'] as $n)
								<li>
									<a href="{{{$n['url']}}}" title="{{{$n['title']}}}">
										{{{$n['title']}}}
									</a>
								</li>
							@endforeach
						</ul>
					@endif
				</div>
				<div class="col-md-3">
					<h4>Help</h4>
					@if(isset($navigations['help']))
						<ul>
							@foreach($navigations['help'] as $n)
								<li>
									<a href="{{{$n['url']}}}" title="{{{$n['title']}}}">
										{{{$n['title']}}}
									</a>
								</li>
							@endforeach
						</ul>
					@endif
				</div>
				<div class="col-md-3">
					<h4>Category</h4>
					@if(isset($navigations['categories']))
						<ul>
							@foreach($navigations['categories'] as $n)
								<li>
									<a href="{{{$n['url']}}}" title="{{{$n['title']}}}">
										{{{$n['title']}}}
									</a>
								</li>
							@endforeach
						</ul>
					@endif
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6">
				All Rights Reserved! &copy; 2015 - {{{date('Y')}}}
				@yield('footer')
				</div>
				<div class="col-md-6 text-right">
					<ul>
					</ul>
				</div>
			</div>
		</footer>
	</div>
</div>