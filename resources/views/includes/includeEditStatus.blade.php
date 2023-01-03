@if(session()->has('status'))
  @if(session('status'))
    <div style="color:#09AC60;" > Updated successfully </div>
  @else
    <div style="color:#D90B0B; " > Failed </div>
  @endif
@endif