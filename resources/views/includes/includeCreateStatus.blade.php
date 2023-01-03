@if(session()->has('status'))
  @if(session('status'))
    <div style="color:#09AC60;" > Added successfully </div>
  @else
    <div style="color:#D90B0B;" > Failed </div>
  @endif
@endif