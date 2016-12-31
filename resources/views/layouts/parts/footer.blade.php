<div class="padding">
</div>
<div class="footer-wide">
	<div class="container">
		<footer>
			<div class="row">
				<div class="col-md-3">
					<h4>About Us</h4>
					@if(isset($navigations['about']))
						<ul class="ul-noBullets col-sm-4-8 column-0">
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
						<ul class="ul-noBullets">
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
					<h4>Discover</h4>
					@if(isset($navigations['categories']))
						<?php
							$cnt = count($navigations['categories']);

							if($cnt > 5)
							{
								$cntr = 0;
								$str = "<ul class='pull-left ul-noBullets'>";
									foreach ($navigations['categories'] as $n)
									{
										if((($cntr % 5) == 0) && $cntr !== 0)
										{
											$str .= "</ul>
														<ul class='pull-right ul-noBullets'>
															<li>
																<a href='".$n['url']."' title='".$n['title']."'>
																{$n['title']}
															</li>
														";
										} else {
											$str .= "<li>
														<a href='".$n['url']."' title='".$n['title']."'>
														{$n['title']}
													 </li>";
										}
										$cntr++;
									}
								$str .="</ul>";
								print($str);
							} else { ?>
							<ul class="ul-noBullets">
								@foreach($navigations['categories'] as $n)
									<li>
										<a href="{{{$n['url']}}}" title="{{{$n['title']}}}">
										{{{$n['title']}}}
										</a>
									</li>
								@endforeach
							</ul>
							<?php
							}
						?>
					@endif
				</div>
			</div>
			<hr class="tiny">
			<div class="row">
				<div class="col-md-3">
					<img src="{{ asset('images/logo/logo_200x65.png') }}" class="footer_logo" />
				</div>

				<div class="col-md-3 pull-right">

					<a target="_blank" href="http://www.facebook.com/PoloniaGo">
						<img src="{{{ asset('images/social_icons/FB_logo_29.png') }}}" class="social_icons_homepage" />
					</a>

					<a target="_blank" href="http://www.twitter.com/poloniago">
						<img src="{{{ asset('images/social_icons/TW_logo.png') }}}" class="social_icons_homepage" />
					</a>

					<a target="_blank" href="https://www.youtube.com/user/PoloniaGo">
						<img src="{{{ asset('images/social_icons/YT_logo_24.png') }}}" class="social_icons_homepage" />
					</a>

					<a target="_blank" href="https://www.instagram.com/poloniago/">
						<img src="{{{ asset('images/social_icons/IG_logo.png') }}}" class="social_icons_homepage" />
					</a>

					<a target="_blank" href="#" >
						<img src="{{{ asset('images/social_icons/IN_logo_28.png') }}}" class="social_icons_homepage" />
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					&nbsp;&nbsp; All Rights Reserved  &copy; {{{date('Y')}}}
					@yield('footer')
				</div>
			</div>
		</footer>
	</div>
</div>