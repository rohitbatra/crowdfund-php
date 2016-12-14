@extends('layouts.default')
@section('header')
	@parent
@endsection

@section('content')
	<section class="text-center">
		<h2>How?</h2>
		<div class="row">
			<div class="col-md-4 col-md-4 col-sm-6">
				<div class="home-step-box">
					<a href="url('project/add')"><img src="{{{asset('images/main/add-project.jpg')}}}" alt="Add Project"/></a>
				</div>
				<h4>1. Add Project</h4>
			</div>
			<div class="col-md-4 col-md-4 col-sm-6">
				<div class="home-step-box">
					<img src="{{{asset('images/main/share-project.jpg')}}}" alt="Share Project"/>
				</div>
				<h4>2. Share your Project</h4>
			</div>
			<div class="col-md-4 col-md-4 col-sm-6">
				<div class="home-step-box">
					<img src="{{{asset('images/main/make-project.jpg')}}}" alt="Launch it to the World"/>
				</div>
				<h4>3. Launch it to the World</h4>
			</div>
		</div>
	</section>
</div>
	<section class="blue-box projects">
		<div class="container">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#featured" aria-controls="featured" role="tab" data-toggle="tab">Featured Projects</a></li>
				<li role="presentation"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">New Projects</a></li>
				<li role="presentation"><a href="#updated" aria-controls="updated" role="tab" data-toggle="tab">Updated Projects</a></li>
			</ul>
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
	<section class="text-center hidden">
		<div class="row">
			<div class="col-md-12">
				<div class="content-page clearfix">
					<h2>Төслийн үр дүн</h2>
					<p class="desc">Монголын мэдээлэл технологийн хөгжил нэг шатаар ахина.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<article class="icon-round">
					<div class="service-icon">
						<img src="http://poloniago.com/wp-content/themes/bootup/img/graph1.jpg" alt="">
					</div>
					<div class="service-content">
						<h3>МТ-ийн үйлдвэрлэл нэмэгдэнэ</h3>
						<p>Мэдээлэл технологийн чиглэлээр ажилладаг залуусыг дэмжиж тэдний хийх гээд чадахгүй байгаа зүйлд олон нийтийг татан хөрөнгө оруулснаар МТ-ийн бүтээгдэхүүн үйлдвэрлэл тодорхой хэмжээгээр нэмэгдэж импортыг орлох бүтээгдэхүүн олноор төрөн гарах болно.</p>
					</div>
				</article>
			</div>
			<div class="col-md-6">
				<article class="icon-round">
					<div class="service-icon">
						<img src="http://poloniago.com/wp-content/themes/bootup/img/graph2.jpg" alt="">
					</div>
					<div class="service-content">
						<h3>МТ-ийн залуус мөрөөдөлдөө илүү ойртоно</h3>
						<p>Залууст тулгардаг хамгийн том асуудал нь эхний хөрөнгө оруулалт байдаг. Банк зээл өгөхгүй, хөрөнгө оруулагчид хэт эрсдэлтэй гэж үздэг учраас тэдэнд мөрөөдлөө биелүүлэх боломж хомс байдаг. Тэгвэл бид энэ асуудлыг бага ч болон шийдэх юм.</p>
					</div>
				</article>
			</div>
		</div><!-- End row -->

		<div class="row">
			<div class="col-md-6">
				<article class="icon-round">
					<div class="service-icon">
						<img src="http://poloniago.com/wp-content/themes/bootup/img/graph3.jpg" alt="">
					</div>
					<div class="service-content">
						<h3>МТ-ийг хүмүүс илүү ойлгодог болно</h3>
						<p>МТ-ийг хэрэглэгчид, хөрөнгө оруулагчид төдийлөн салбарын залуусын хийсэн бүтээлийг ойлгож хүлээж авдаггүй. Бид хөрөнгө оруулалт татах зорилгоор хэрэглэгч, хөрөнгө оруулагчид тэдний бүтээлийг сурталчилан таниулж хөрөнгө татах учраас тэдний мэдлэг бага багаар нэмэгдэх нь гарцаагүй.</p>
					</div>
				</article>
			</div>
			<div class="col-md-6">
				<article class="icon-round">
					<div class="service-icon">
						<img src="http://poloniago.com/wp-content/themes/bootup/img/graph4.jpg" alt="">
					</div>
					<div class="service-content">
						<h3>МТ-оор экспорт хийгдэнэ</h3>
						<p>Бидний гол зорилго бол залуусын бүтээлийг дэлхийн түвшинд хүргэж, дэлхийн хэмжээний бүтээгдэхүүн хийхэд нь туслаж, гадны хөрөнгө оруулагчидтай холбож цаашид дэлхийн зах зээл дээр бүтээгдэхүүнээ борлуулах гарцыг нь нээж өгөх юм.</p>
					</div>
				</article>
			</div>
		</div>
	</section>
	<section class="text-center hidden">
		<h2>Хамтрагч байгууллагууд</h2>
		<div class="row">
			<div class="col-md-3">
				LOGO 1
			</div>
			<div class="col-md-3">
				LOGO 2
			</div>
			<div class="col-md-3">
				LOGO 3
			</div>
			<div class="col-md-3">
				LOGO 4
			</div>
		</div>
	</section>
	
@endsection