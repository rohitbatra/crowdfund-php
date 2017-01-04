{!! Form::open(array('url'=>'project/update','method'=>'post','class'=>'')) !!}
	<div class="projectstepcontainer row">
		<div class="col-md-12">
            <label>Project Name:</label> {{{$project->title}}}
			<br/>
			<label>Category:</label> @include('modules.categories.list',['categories'=>$project->categories])
			<br/>
			<label>Project URL:</label> <a href="{{{$project->url}}}" target="_blank">{{{$project->url}}}</a>
		<hr class="tiny" />
		</div>
		<div class="col-md-12">
            Please fill in all the fields below about the Fund-Raiser. Your submission will be reviewed once by our Team & then Published if found appropriate. <br/>
			You can always reach out to our Team for any doubts/queries/issues at <a href="mailto:support@poloniago.com">support@poloniago.com</a>. <br/>
			We wish you succeed in your Project/Fund-Raiser.
		</div>
		
		
		<div class="col-md-4 projectteammemberscontainer" data-teamleader="{{{$project->user_id}}}">
			<h3>Project Members</h3>
			<p class="help-block">Add your Team-Members to the Project, to show-case there strengths & accomplishments in their respective fields. This adds a lot of weight most of the times, when people funding your project know about the Team working on it.</p>
			{!! Form::hidden('team_members',$project->team_members,['class'=>'team_members']) !!}
			
			<div class="projectteammembersadd">
				<button type="button" class="btn btn-primary" data-action="addTeamMemberModal"><span class="glyphicon glyphicon-plus-sign glyphicon-align-left" aria-hidden="true"></span> Add members</button>
			</div>
			
			<div class="projectteammemberslist">
				@include('modules.user.list',['users'=>$project->team,'remove'=>true])
			</div>
			
		</div>
		
		<div class="col-md-4 projectgoalscontainer">
			<h3>Project Goals</h3>
			<p class="help-block">Goals are a vital part of Project. Project Goals are based on Time & Value. Goals cannot be changed once the Project is LIVE.</p>
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
			<h3>Project Rewards</h3>
			<p class="help-block">We all like to reward people who have supported us in our Life. Same is the basic concept here, we can offer rewards to People who supported our Project in time of need. Rewards are optional, but are considered as a sign of Good Gesture.</p>
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
		@include('modules.form.formgroup',['data'=>$project,'type'=>'text','label'=>'Video','id'=>'video','note'=>'Video is mandatory & it should be able explain the Project. ** Youtube & Vimeo Only Supported **'])
		@include('modules.form.formgroup',['data'=>$project,'type'=>'text','label'=>'Project Summary','id'=>'intro','note'=>'This is where you explain your Project briefly. Mention important details.'])
		@include('modules.form.formgroup',['data'=>$project,'type'=>'text','label'=>'Project Keywords','id'=>'tags','note'=>'Enter some keywords which define your Projects (comma-separated values only).'])
		@include('modules.form.formgroup',['data'=>$project,'type'=>'textarea','label'=>'Project Detail','id'=>'detail','cke'=>'true',
		'note' => 'Write a story/description that does justice to your Project and makes the supporter reach the donate button. Please Avoid pasting information directly from a Word document.'])
		{!! Form::hidden('step','addprojectdetail',['class'=>'step']) !!}
		{!! Form::hidden('id',$project->id,['id'=>'id','class'=>'project_id']) !!}
		{!! Form::submit('Submit',['class'=>'btn btn-default next']) !!}
		</div>
	</div>
{!! Form::close() !!}
