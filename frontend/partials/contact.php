<div class="container-fluid">

<!-- row -->
<div class="row p-30-0">

  <!-- col -->
  <div class="col-lg-12">

    <!-- section title -->
    <div class="art-section-title">
      <!-- title frame -->
      <div class="art-title-frame">
        <!-- title -->
        <h4>Contact information</h4>
      </div>
      <!-- title frame end -->
    </div>
    <!-- section title end -->

  </div>
  <!-- col end -->
  <!-- col -->
  <div class="col-lg-4">
    <!-- contact card -->
    <div class="art-a art-card">
      <div class="art-table p-15-15">
        <ul>
          <li>
            <h6>Country:</h6><span>Bangladesh</span>
          </li>
          <li>
            <h6>City:</h6><span>Dhaka</span>
          </li>

          <li>
            <h6>Street:</h6><span>Mirpur-2</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- contact card end -->
  </div>
  <!-- col end -->
  <!-- col -->
  <div class="col-lg-4">
    <!-- contact card -->
    <div class="art-a art-card">
      <div class="art-table p-15-15">
        <ul>
          <li>
            <h6>Email:</h6><span><a href="mailto:asad@bdprogrammer.com">asad@bdprogrammer.com</a></span>
          </li>
          <li>
            <h6>Messenger:</h6><span><a href="https://www.messenger.com/t/asad.bdesh" target="_blank">asad.bdesh</a></span>
          </li>
          <li>
            <h6>Skype:</h6><span>asaduzzaman.uys</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- contact card end -->
  </div>
  <!-- col end -->
  <!-- col -->
  <div class="col-lg-4">
    <!-- contact card -->
    <div class="art-a art-card">
      <div class="art-table p-15-15">
        <ul>          
          <li>
            <h6>Whatsapp:</h6><span><a href="tel:+8801934809203">+8801934-809203</a></span>
          </li>
          <li>
            <h6>Personal:</h6><span><a href="tel:+8801934809203">+8801934-809203</a></span>
          </li>
          <li>
            <h6>Service:</h6><span><a href="tel:+8801934809203">+8801934-809203</a></span>
          </li>
        </ul>
      </div>
    </div>
    <!-- contact card end -->

  </div>
  <!-- col end -->

  <!-- col -->
  <div class="col-lg-12">

    <!-- section title -->
    <div class="art-section-title">
      <!-- title frame -->
      <div class="art-title-frame">
        <!-- title -->
        <h4>Get in touch</h4>
      </div>
      <!-- title frame end -->
    </div>
    <!-- section title end -->


<?php
if(isset($_POST['submit'])){
    
    $mailto = "asad@bdprogrammer.com";
    
    $name = $_POST["name"];
    $fromEmail = $_POST["email"];
    
    
   $message = "Cleint Name: " . $name . "\n"
 
 . "Client Message: " . "\n" . $_POST["message"];

	
	$sub="New Message From BD Programmer";		
	$headers = "From: " . $fromEmail;
	
	if(mail($mailto, $sub, $message, $headers)){
	    echo "Mail Sent.";
	}
	else{
	    echo "failed";
	}
}


    

?>
    <!-- contact form frame -->
    <div class="art-a art-card">

      <!-- contact form -->
      <form id="form" class="art-contact-form" method="POST" action="">
        <!-- form field -->
        <div class="art-form-field">
          <!-- name input -->
          <input id="fname" name="name" class="art-input" type="text" placeholder="Name" required>
          <!-- label -->
          <label for="fname"><i class="fas fa-user"></i></label>
        </div>
        <!-- form field end -->
        <!-- form field -->
        <div class="art-form-field">
          <!-- email input -->
          <input id="email" name="email" class="art-input" type="email" placeholder="Email" required>
          <!-- label -->
          <label for="email"><i class="fas fa-at"></i></label>
        </div>
        <!-- form field end -->
        <!-- form field -->
        <div class="art-form-field">
          <!-- message textarea -->
          <textarea id="message" name="message" class="art-input" placeholder="Message" required></textarea>
          <!-- label -->
          <label for="message"><i class="far fa-envelope"></i></label>
        </div>
        <!-- form field end -->
        <!-- button -->
        <div class="art-submit-frame">
          <button class="art-btn art-btn-md art-submit" name="submit" type="submit"><span>Send message</span></button>
          <!-- success -->
          <div class="art-success">Success <i class="fas fa-check"></i></div>
        </div>
      </form>
      <!-- contact form end -->

    </div>
    <!-- contact form frame end -->

  </div>
  <!-- col end -->

</div>
<!-- row end -->

</div>