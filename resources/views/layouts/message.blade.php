@if(session()->has('message_susuccess'))
    <div class="message-box success"style="display: block;">
      
            {{ session()->get('message_susuccess') }}
        
    </div>
    <br />
@endif

@if(session()->has('message_error'))
    <div class="message-box error " style="display: block;">
        
            {{ session()->get('message_error') }}
      
    </div>
    <br />
@endif


 @if(isset($_COOKIE['message_text']))
			<div class="message-box success"style="display: block;">
			     {{ $_COOKIE['message_text'] }}                       
			</div>
			<br />
	<?php 
	setcookie("message_text","", time()-30, "/");
	?>
@endif
