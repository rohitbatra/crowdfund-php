@extends('layouts.default')
@section('header')
	@parent
@endsection

@section('content')
	<div class="container">
		<section class="text-center">
			<h2>How to Start ? </h2>
			<br/>
			<div class="row">
				<div class="col-md-4 col-md-4 col-sm-6">
					<div class="home-step-box">
						<a href="{{{url('project/add')}}}"><img src="{{{asset('images/main/add-project.jpg')}}}" alt="Add Project"/></a>
						<h4> 1. Add Project </h4>
					</div>
				</div>
				<div class="col-md-4 col-md-4 col-sm-6">
					<div class="home-step-box">
						<img src="{{{asset('images/main/share-project.jpg')}}}" alt="Share Project"/>
						<h4> 2. Share your Project </h4>
					</div>
				</div>
				<div class="col-md-4 col-md-4 col-sm-6">
					<div class="home-step-box">
						<img src="{{{asset('images/main/make-project.jpg')}}}" alt="Launch it to the World"/>
						<h4> 3. Launch it to the World </h4>
					</div>
				</div>
			</div>
			<br/>
		</section>
	</div>
</div>
<div class="container-fluid redbox-projects">
	<div class="container">
		<section class="text-center">
			<div class="container projects">
				<hr class="tiny">
				<ul class="nav nav-pills" role="tablist">
					<li role="presentation" class="active"><a href="#featured" aria-controls="featured" role="tab" data-toggle="tab"><h5>Featured Projects</h5></a></li>
					<li role="presentation"><a href="#new" aria-controls="new" role="tab" data-toggle="tab"><h5>New Projects</h5></a></li>
					<li role="presentation"><a href="#updated" aria-controls="updated" role="tab" data-toggle="tab"><h5>Updated Projects</h5></a></li>
				</ul>
				<hr class="tiny">
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="featured">
						@include('modules.project.homepage.list',['projects'=>$projects['featured']])
					</div>
					<div role="tabpanel" class="tab-pane" id="new">
						@include('modules.project.homepage.list',['projects'=>$projects['new']])
					</div>
					<div role="tabpanel" class="tab-pane" id="updated">
						@include('modules.project.homepage.list',['projects'=>$projects['updated']])
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<div class="container-fluid clearwhite-box">
	<div class="container">
		<section class="text-center">
			<h2>Why do it?</h2>
			<p>Lorem Ipsum is simply dummy text.</p>
			<div class="row">
				<div class="col-md-4 col-md-4 col-sm-6">
					<div class="feature feature-3 clearfix mb-xs-24 mb64">
						<div class="left">
							<i class="fa fa-level-up"></i>
						</div>
						<div class="right">
							<h3 class="uppercase mb16">Where does it come from?</h3>
							<p>
								Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
							</p>
						</div>
					</div>
					<!--end of feature-->
				</div>

				<div class="col-md-4 col-md-4 col-sm-6">
					<div class="feature feature-3 clearfix mb-xs-24 mb64">
						<div class="left">
							<i class="fa fa-hand-rock-o"></i>
						</div>
						<div class="right">
							<h3 class="uppercase mb16">Why do we use it?</h3>
							<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
							</p>
						</div>
					</div>
					<!--end of feature-->
				</div>

				<div class="col-md-4 col-md-4 col-sm-6">
					<div class="feature feature-3 clearfix mb-xs-24 mb64">
						<div class="left">
							<i class="fa fa-lightbulb-o"></i>
						</div>
						<div class="right">
							<h3 class="uppercase mb16">Where can I get some?</h3>
							<p>
								There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
							</p>
						</div>
					</div>
					<!--end of feature-->
				</div>
			</div>
		</section>
	</div>
</div>

<div class="container-fluid lightwhite-box">
	<div class="container">
		<section class="text-center">
			<div class="row">
				<div class="col-md-12">
					<div class="content-page clearfix">
						<h2>Recent Updates</h2>
						<p class="desc"><a href="//blog.poloniago.com" target="_blank">blog.poloniago.com</a></p>
					</div>
				</div>
			</div>
			<!-- Loop from Blog Articles to fetch latest 4 Posts & Show it Here -->
			<div class="row">
				<div class="col-md-6">
					<article class="icon-round">
						<div class="service-icon">
							<img src="{{{asset('images/avatar/thumbnail/aquaman.jpg')}}}" alt="">
						</div>
						<div class="service-content">
							<h3>Lorem Ipsum Post 1</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. <a href="javascript:void(1)">Read More...</a></p>
						</div>
					</article>
				</div>
				<div class="col-md-6">
					<article class="icon-round">
						<div class="service-icon">
							<img src="{{{asset('images/avatar/thumbnail/batgirl.jpg')}}}" alt="">
						</div>
						<div class="service-content">
							<h3>Lorem Ipsum Post 2</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. <a href="javascript:void(1)">Read More...</a></p>
						</div>
					</article>
				</div>
			</div>

			<!-- End row -->

			<div class="row">
				<div class="col-md-6">
					<article class="icon-round">
						<div class="service-icon">
							<img src="{{{asset('images/avatar/thumbnail/batman.jpg')}}}" alt="">
						</div>
						<div class="service-content">
							<h3>Lorem Ipsum Post 3</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. <a href="javascript:void(1)">Read More...</a></p>
						</div>
					</article>
				</div>
				<div class="col-md-6">
					<article class="icon-round">
						<div class="service-icon">
							<img src="{{{asset('images/avatar/thumbnail/arrow.jpg')}}}" alt="">
						</div>
						<div class="service-content">
							<h3>Lorem Ipsum Post 4</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. <a href="javascript:void(1)">Read More...</a></p>
						</div>
					</article>
				</div>
			</div>
		</section>
	</div>
</div>

<div class="container-fluid clearwhite-box">
	<div class="container">
		<section class="text-center">
			<h2>Featured In</h2>
			<br/>
			<div class="row">
				<div class="col-md-3">
					<a href="javascript:void(1);" > <img src="{{{asset('images/press/logo_npe.jpeg')}}}" width="190px" height="60px" /> </a>
				</div>
				<div class="col-md-3">
					<a href="javascript:void(1);" ><img src="{{{asset('images/press/logoMain.gif')}}}" width="190px" height="60px" /></a>
				</div>
				<div class="col-md-3">
					<a href="javascript:void(1);" ><img src="{{{asset('images/press/logoPRprint.gif')}}}" width="190px" height="60px" /></a>
				</div>
				<div class="col-md-3">
					<a href="javascript:void(1);" ><img src="{{{asset('images/press/kp_logo.png')}}}" width="190px" height="60px" /></a>
				</div>
			</div>
		</section>
	</div>
	
@endsection