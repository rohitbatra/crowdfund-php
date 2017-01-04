@if (isset($datalayer))
<script>
	 dataLayer = [{{$datalayer}}];
</script>
@endif

@if (isset($settings) && $settings['live'] == '0')


@else
	
	@if (isset($settings['gtm']))
		<!-- Google Tag Manager --> 
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id={{Setting::getSetting('gtm')}}"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','<?php echo $settings['gtm']; ?>');</script>
		<!-- End Google Tag Manager -->
	@endif
	
	@if (isset($settings['ga']))
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', '<?php echo $settings['ga']; ?>', 'auto');
		  ga('send', 'pageview');
		</script>
	@endif
@endif

@yield('beginbody')