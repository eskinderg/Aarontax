<p>
   <h2 style="align:center">Let us know</h2>
</p>
<?php
if(isset($_POST['submitted'])) {
	if(trim($_POST['contactName']) === '') {
		$nameError = 'Please enter your name.';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['comments']) === '') {
		$commentError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
               //$emailTo = "eskinderget@gmail.com";
		$subject = 'www.aarontax.com '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
        else
        {
            echo "<p style='color:red;'>Error sending mail</p>";
        }

} ?>





    <div id="contactdiv">
        <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
            <table style="border:none; width:100%;">

                <tr>


                    <td style=" border-bottom: 1px solid #DEDEDE; border-top: 1px solid #DEDEDE;">

                        <input style="width:100%;padding: 6px;height: 46px;"
                               placeholder="Name" required type="text" name="contactName" id="contactName" value="" />
                    </td>
                </tr>
                    <tr>

                        <td style=" border-bottom: 1px solid #DEDEDE;">

                            <input required placeholder="Email"
                                   style="width:100%;padding: 6px; height:46px; "
                                   type="email" name="email" id="email" value="" />
                        </td>
                    </tr>
                    <tr>

                        <td style=" border-bottom: 1px solid #DEDEDE;">

                            <textarea required placeholder="Message"
                                      style="width:100%;padding:10px;"
                                      name="comments" id="commentsText" rows="20" cols="30"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top:10px;">
                            <button type="submit">Send email</button>
                        </td>
                    </tr>

            </table>
            <input type="hidden" name="submitted" id="submitted" value="true" />
        </form>

        <style>
            #contactdiv table td
            {
                border:none;
                padding:3px;
            }
        </style>

    </div>



</div>
