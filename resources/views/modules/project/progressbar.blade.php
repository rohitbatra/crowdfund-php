<div class="progressbar">
	@include('modules.project.progressbaronly',['p'=>$p])
	<div class="row">
		<div class="col-md-3">
			<b>{{{$p->percentage}}}%</b>
			<br>
			{{trans('project.percentage')}} 
		</div>
        <div class="col-md-3">
            <b>{{{number_format($p->totalgoal)}}} $</b>
            <br>
            {{trans('project.goals')}}
        </div>
		<div class="col-md-3">
			<b>{{{number_format($p->totalpayment)}}} {{trans('messages.currencysymbol')}}</b>
			<br>
			{{trans('project.totalpayment')}} 
		</div>
		<div class="col-md-3">
			<b>{{{$p->daysleft}}}</b>
			<br>
			{{trans('project.daysleft')}} 
		</div>
	</div>
</div>
