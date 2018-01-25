

						<!-- modal -->
			<div class="ui basic modal contact">
				<i class="remove circle outline icon pull-right close" style="font-size:2em;"></i>
			  <div class="ui icon header">
			    <i class="open envelope outline icon"></i>
			   		Get in touch
			  </div>
			  <div class="content">


				<form class="ui form ajax" action="index.php#form" method="post" >

				  <div class="field">

				    <label for="name">Name</label>
				    <input type="text" name="name" placeholder="Name" id="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
				    	<?php echo "<p class='ui error message'>$errName</p>";?>

				  </div>
				  <div class="field">
				    <label for="email">E-mail</label>
				    <input type="email" placeholder="Email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
				    <?php echo "<p class='error message'>$errEmail</p>";?>
				  </div>

				  <div class="field">
			    	  <label for="phone">Phone Number</label>
				      <input type="text" placeholder="Phone Number" id="phone" name="phone" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
				      <?php echo "<p class='error message'>$errPhone</p>";?>
			     </div>
			     <div class="field">
				    <label for="message">Message</label>
				    <textarea name="message" id="message" placeholder="Message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
				       <?php echo "<p class='error message'>$errMessage</p>";?>
				  </div>
				  <div class="field">
			    	  <label for="human">Human</label>
				      <input type="text" placeholder="3+4=?" id="human" name="human">
				      <?php echo "<p class='error message'>$errHuman</p>";?>
			     </div>
			     <div class="field response">
			     	<?php echo htmlspecialchars($result); ?>   
            	</div>
            	<div class="actions">
				  <button class="ui green inverted button "  type="submit" id="submit" value="Send" name="submit"><i class="send icon"></i>Send</button>
				  <button class="ui button reset">Reset</button>
			    </div>
				</form>
		

             
			  </div>


			</div>