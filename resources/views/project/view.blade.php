@extends('layouts.default')
@section('header')
</div>
<div class="gray-box">
	<div class="container">
		@if(isset($project) && !empty($project))
			<h1>{{{$project->title}}}</h1>
			@if(isset($edit) && $edit == true)
				<a href="{{{url('project/edit/'.$project->id)}}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</a>
			@endif
			<div class="row">
				<div class="col-md-8">
					@if(isset($video) && !empty($video) && $video['status']==true)
						<div class="videoWrapper">
							@if($video['type']=='youtube')
								<iframe width="560" height="315" src="https://www.youtube.com/embed/{{{$video['id']}}}" frameborder="0" allowfullscreen></iframe>
							@endif
						</div>
					@endif
				</div>
				<div class="col-md-4">
					<div class="padding-lg">
						<div>
							<a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseDonation" aria-expanded="false" aria-controls="collapseDonation">
                                Backers <span class="badge">{{count($project->donation)}}</span>
							</a>
							<div class="collapse" id="collapseDonation">
							  <div class="well">
								@foreach($project->donation as $payment)
									<div class="media">
										@if($payment->user->avatar && $payment->user->public == 1)
										<a href="{{$payment->user->url}}">
											<img class="pull-left" src="{{asset('images/avatar/thumbnail/'.$payment->user->avatar)}}" />
										</a>
										@endif
										<div class="media-body">
										<h4 class="media-heading">
											@if($payment->user->public == 1)
												<a href="{{$payment->user->url}}">
													{{{$payment->user->fullname}}}
												</a>
											@else
												{{trans('messages.anonymous')}}
											@endif
										</h4>
										{{{$payment->valuetext}}}
											@if($payment->note)
												<p class="note">{{$payment->note}}</p>
											@endif
										</div>
									</div>
								@endforeach
							  </div>
							</div>
						</div>
						<div>
							<b>{{{number_format($project->totalpayment)}}} {{trans('messages.currencysymbol')}}</b>
							<br>
							Total Goal: {{{number_format($project->totalgoal)}}} {{trans('messages.currencysymbol')}}
						</div>
						<div>
							<b>{{{$project->daysleft}}}</b>
							<br>
                            Days left
						</div>
					</div>
				</div>
			</div>
		@endif
	</div>
</div>
<div class="container">
@endsection

@section('content')
	@include('errors.errors')
	
	<div class="row">
		<div class="col-md-8">
            <div class="padding">
				Categories: @include('modules.categories.list',['categories'=>$project->categories])
                <p>{{{$project->intro}}}</p>
                <hr class="tiny" />
                <ul class="list-inline">
                    <li>
                        <h5>Share this on: </h5>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{{urlencode($project->url)}}}&amp;src=sdkpreparse">
                            <img class="social_icons_homepage" src="{{{asset('images/social_icons/FB_logo_29.png')}}}" />
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="http://twitter.com/share?text={{{$project->title}}}&amp;url={{{urlencode($project->url)}}}&amp;tags={{{$project->tags}}}">
                            <img class="social_icons_homepage"  src="{{{asset('images/social_icons/TW_logo.png')}}}" />
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="http://plus.google.com/share?url={{{urlencode($project->url)}}}">
                            <img  class="social_icons_homepage" src="{{{asset('images/social_icons/gplus_logo.png')}}}" />
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{{urlencode($project->url)}}}&amp;title={{{$project->title}}}&amp;summary={{{$project->summary}}}">
                            <img class="social_icons_homepage"  src="{{{asset('images/social_icons/IN_logo_28.png')}}}" />
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="http://www.tumblr.com/share/link?url={{{urlencode($project->url)}}}&amp;name={{{$project->title}}}&amp;description={{{$project->summary}}}">
                            <img class="social_icons_homepage"  src="{{{asset('images/social_icons/tumblr_logo.png')}}}" />
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="http://pinterest.com/pin/create/button/?url={{{urlencode($project->url)}}}&description={{{$project->title}}}">
                            <img class="social_icons_homepage"  src="{{{asset('images/social_icons/PIN_logo.png')}}}" />
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site <br/>  <a href='{{{$project->url}}}'>{{{$project->url}}}</a>" title="Share by Email">
                            <img class="social_icons_homepage"  src="{{{asset('images/social_icons/mail_icon.png')}}}" />
                        </a>
                    </li>
                </ul>
            </div>
		</div>
		<div class="col-md-4">
			<div class="padding">
				<div class="project-leader">Project Leader: @include('modules.user.list',['users'=>[$project->leader],'contact'=>true])</div>
                <a class="btn" type="button" data-toggle="collapse" data-target="#collapseProjectMemebers" aria-expanded="false" aria-controls="collapseProjectMemebers">
                    <span class="glyphicon glyphicon-list"></span> View Project Members
                </a>
                <div id="collapseProjectMemebers" class="project-teammembers collapse">@include('modules.user.list',['users'=>$project->team,'contact'=>true])</div>
			</div>
		</div>
	</div>

	</div>

	  <!-- Nav tabs -->
	  <div>
		  <div class="container">
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">{{trans('project.project')}}</a></li>
				<li role="presentation"><a href="#updates" aria-controls="updates" role="tab" data-toggle="tab">{{trans('project.updates')}}</a></li>
				<li role="presentation"><a href="#comment" aria-controls="comment" role="tab" data-toggle="tab">{{trans('comment.comments')}}</a></li>
			  </ul>
		  </div>
	  </div>

	<div class="container">

	<div class="row">
	  <!-- Tab panes -->
	  <div class="col-md-8">
		  <div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="description">
				<h2>About the Project</h2>
				@if($project->image)
				<img src="{{{asset('images/project/large/'.$project->image)}}}"/>
				@endif
				<h3>Breakdown</h3>
					<table class="table">
						<thead>
							<th>
                                Stage
							</th>
							<th>
								Title
							</th>
							<th>
								Goal
							</th>
							<th>
                                Days
							</th>
						</thead>
						<tbody>
							@foreach($project->goal as $g)
								<tr>
									<td>
									{{{$g->phase}}}
									</td>
									<td>
									{{{$g->title}}}
									</td>
									<td>
									{{{number_format($g->goal)}}} {{trans('messages.currencysymbol')}}
									</td>
									<td>
									{{{$g->start}}} - {{{$g->end}}}
									</td>
								</tr>
							@endforeach
						<tbody>
					</table>
				<div>
					{!!$project->detail!!}
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="comment">
				@include('modules.comment.list',['comments'=>$project->comment,'type'=>1,'item_id'=>$project->id])
			</div>
			<div role="tabpanel" class="tab-pane" id="updates">
				@foreach($project->updates as $content)
					<article>
					<h2><a href="{{$content->url}}">{{{$content->title}}}</a></h2>
					<div><small>{{trans('blog.author')}} {{{$content->author->firstname}}} {{{$content->author->lastname}}} | {{trans('messages.date')}} {{{$content->updated_at->format('Y/m/d')}}}</small></div>
					
					{{{$content->summary}}}
					</article>
					<hr>
				@endforeach
			</div>
		  </div>
	  </div>
	  <div class="col-md-4">
			<div class="padding">
				@foreach($project->reward as $r)
					<div class="gray-box padding-sm">
						<h4>{{{$r->title}}}</h4>
						@if($r->image)
							<img src="{{{asset('images/reward/medium/'.$r->image)}}}" alt="{{{$r->title}}}" />
						@endif
						<b>Reward Value: {{{number_format($r->value)}}} {{trans('messages.currencysymbol')}}</b>
						<br>
						@if($r->amountleft > 0)
							<b>Left / Total: {{{$r->amountleft}}}/{{{$r->amount}}}</b>
							<br>
						@else
							<b>Finished</b>
							<br>
						@endif
						{{{$r->description}}}
						@if($r->amountleft > 0)
							{!! Form::open(array('url'=>'/','method'=>'post','class'=>'preventSubmit')) !!}
								{!! Form::submit('Claim Reward',['class'=>'btn btn-default','data-action'=>'claimReward','data-rewardid'=>$r->id]) !!}
							{!! Form::close()!!}
						@endif
					</div>
					<div class="padding-sm">
					</div>
				@endforeach
			</div>
		</div>
	</div>

	</div>
@endsection