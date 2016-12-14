{!! Form::open(array('url'=>'project/update','method'=>'post','class'=>'')) !!}
	<div class="projectstepcontainer row">
		<div class="col-md-12">
            Name of project: {{{$project->title}}} | Project category @include('modules.categories.list',['categories'=>$project->categories]) | Project URL <a href="{{{$project->url}}}" target="_blank">{{{$project->url}}}</a>
		<hr>
		</div>
		<div class="col-md-12">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		
		
		<div class="col-md-4 projectteammemberscontainer" data-teamleader="{{{$project->user_id}}}">
			<h3>Project members</h3>
			<p class="help-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			{!! Form::hidden('team_members',$project->team_members,['class'=>'team_members']) !!}
			
			<div class="projectteammembersadd">
				<button type="button" class="btn btn-primary" data-action="addTeamMemberModal"><span class="glyphicon glyphicon-plus-sign glyphicon-align-left" aria-hidden="true"></span> Add members</button>
			</div>
			
			<div class="projectteammemberslist">
				@include('modules.user.list',['users'=>$project->team,'remove'=>true])
			</div>
			
		</div>
		
		<div class="col-md-4 projectgoalscontainer">
			<h3>Project Objectives</h3>
			<p class="help-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			@if($project->status == 0)
			<div class="projectgoalsadd">
				<button type="button" class="btn btn-primary" data-action="addGoalModal"><span class="glyphicon glyphicon-plus-sign glyphicon-align-left" aria-hidden="true"></span> Add goals</button>
			</div>
			<div class="projectgoalslist">
				@include('modules.project.goal_list',['goals'=>$project->goal,'remove'=>true])
			</div>
			@else
				<div class="projectgoalslist">
					@include('modules.project.goal_list',['goals'=>$project->goal,'remove'=>false])
				</div>
			@endif
		</div>
		
		<div class="col-md-4 projectrewardscontainer">
			<h3>Project Bonuses</h3>
			<p class="help-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			@if($project->status == 0)
			<div class="projectrewardsadd">
				<button type="button" class="btn btn-primary" data-action="addRewardModal"><span class="glyphicon glyphicon-plus-sign glyphicon-align-left" aria-hidden="true"></span> Add bonuses</button>
			</div>
			<div class="projectrewardslist">
				@include('modules.project.reward_list',['rewards'=>$project->reward,'remove'=>true])
			</div>
			@else
			<div class="projectrewardslist">
				@include('modules.project.reward_list',['rewards'=>$project->reward,'remove'=>false])
			</div>
			@endif
			
		</div>
		<div class="col-md-12">
		<hr>
		<h3>Project overview</h3>
		@include('modules.upload.uploaditem',['id'=>'image','label'=>'Project Header Image','view'=>'create','old'=>$project->image,'type'=>'project'])
		@include('modules.form.formgroup',['data'=>$project,'type'=>'text','label'=>'Video','id'=>'video','note'=>'Youtube & Vimeo supported. This video is mandatory, and it should explain the Project.'])
		@include('modules.form.formgroup',['data'=>$project,'type'=>'text','label'=>'Project Summary','id'=>'intro','note'=>'The main attraction field attention of others, and will be visible to all. Much is present not interested in the project as clearly.'])
		@include('modules.form.formgroup',['data'=>$project,'type'=>'textarea','label'=>'Project Detail','id'=>'detail','cke'=>'true'])
		{!! Form::hidden('step','addprojectdetail',['class'=>'step']) !!}
		{!! Form::hidden('id',$project->id,['id'=>'id','class'=>'project_id']) !!}
		{!! Form::submit('Submit',['class'=>'btn btn-default next']) !!}
		</div>
	</div>
{!! Form::close() !!}
