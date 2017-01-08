<div class="progress">
    @if($p->percentage > 0 && $p->percentage < 25)
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{{$p->percentage}}}"
             aria-valuemin="0" aria-valuemax="100" style="width:{{{$p->percentage}}}%">
            {{{$p->percentage}}}%
        </div>
    @elseif($p->percentage > 25 && $p->percentage < 50)
        <div class="progress-bar progress-bar" role="progressbar" aria-valuenow="{{{$p->percentage}}}"
             aria-valuemin="0" aria-valuemax="100" style="width:{{{$p->percentage}}}%">
            {{{$p->percentage}}}%
        </div>
    @elseif($p->percentage > 50)
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{{$p->percentage}}}"
             aria-valuemin="0" aria-valuemax="100" style="width:{{{$p->percentage}}}%">
            {{{$p->percentage}}}%
        </div>
    @endif
</div>