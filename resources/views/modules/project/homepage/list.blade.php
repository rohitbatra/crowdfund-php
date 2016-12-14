<?php $count = count($projects);?>
@if(isset($projects))
	@foreach($projects as $k => $p)
		@include('modules.project.homepage.item',['p'=>$p])
		@if ($k+1 < $count)
			<hr class="tiny">
		@else
			<a title="View all projects" href="{{{url('projects')}}}" class="btn btn-default btn-lrg">View all projects</a>
		@endif
		
	@endforeach
@endif