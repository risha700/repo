
<?php
include('smtp-contactform.php');


$errName='';
$errEmail='';
$errPhone='';
$errMessage='';
$errHuman='';
$result='';

 ?>

						<!-- modal -->
			<div class="ui basic modal contact">
				<i class="remove circle outline icon pull-right close" style="font-size:2em;"></i>
			  <div class="ui icon header">
			    <i class="open envelope outline icon"></i>
			   		Get in touch
			  </div>
			  <div class="content">


				<form method="POST" class="ui form ajax"  >

				  <div class="field">

				    <label for="name">Name</label>
				    <input type="text" name="name" placeholder="Name" id="name" >


				  </div>
				  <div class="field">
				    <label for="email">E-mail</label>
				    <input type="email" placeholder="Email" id="email" name="email" >

				  </div>

				  <div class="field">
			    	  <label for="phone">Phone Number</label>
				      <input type="text" placeholder="Phone Number" id="phone" name="phone" >

			     </div>
			     <div class="field">
				    <label for="message">Message</label>
				    <textarea name="message" id="message" placeholder="Message"></textarea>

				  </div>
				  <div class="field">
			    	  <label for="human">Human</label>
				      <input type="text" placeholder="3+4=?" id="human" name="human">

			     </div>
			     <div class="field response">
			     	<?php if (!empty($msg)) {echo $msg;}?>   

            	</div>
            	<div class="actions">
				  <button class="ui green inverted button "  type="submit" id="submit" value="Send" name="submit"><i class="send icon"></i>Send</button>
				  <button class="ui button reset">Reset</button>
			    </div>
				</form>
		

             
			  </div>


			</div>