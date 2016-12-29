<li data-goalid="{{{$g->id}}}">
	<h4>{{{$g->title}}}</h4>
	<p>{{{$g->description}}}</p>
	<p>Goal Phase: {{{$g->phase}}}</p>
	<p>Goal Total: {{{$g->goal}}} {{trans('messages.currencysymbol')}}</p>
	<p>Start Date: {{{$g->start}}} - End Date:  {{{$g->end}}}</p>
	@if(isset($remove) && $remove == true)
		<button type="button" class="btn btn-default" data-action="removeGoal" data-goalid="{{{$g->id}}}">
			<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Delete
		</button>
	@endif
</li>