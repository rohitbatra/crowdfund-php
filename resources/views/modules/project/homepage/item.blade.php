<div class="white-box">
	<img class="project-homepage-image" src="{{{asset('images/project/medium/'.$p->image)}}}">
	<div class="project-homepage-description">
		<h3><a href="{{{$p->url}}}" title="{{{$p->title}}}">{{{$p->title}}}</a></h3>
		<p>
		{{{$p->intro}}}
		</p>
		
		# @include('modules.categories.list',['categories'=>$p->categories])

		@include('modules.project.progressbar',['p'=>$p])
	</div>
</div>