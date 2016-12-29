<?php $count = count($projects);?>
@if(isset($projects))
	@foreach($projects as $k => $p)
		@include('modules.project.homepage.item',['p'=>$p])
		@if ($k+1 < $count)
			<hr class="tiny">
		@else
			<br/>
			<div class="row">
				<button title="View All Projects" onclick="location.href = '{{{url('projects')}}}'" class="btn btn-default center-block">View All Projects</button>
			</div>
		@endif
		
	@endforeach
@endif