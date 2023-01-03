@if(session()->has('status'))
  @if(session('status'))
    <div style="color:#09AC60; padding:18px; background-color:#DCDCDC;" >Sent successfully</div>
  @else
    <div style="color:#D90B0B; padding:18px; background-color:#DCDCDC;" >Sent Failed</div>
  @endif
@endif