<?php
	if(!empty($_POST['name'])){
		if(!empty($_POST['email'])){
			if(!empty($_POST['message'])){
			    if (intval($_POST['excercise']) == 25) {
                    $to = "jamie.greatorex99@gmail.com";
                    $subject = "jgreatorex.com || Website contact";
                    $htmlStart = "<html><head><style>*{font-family: sans-serif;}</style></head><body>";
                    $htmlEnd = "</body></html>";
                    $message = $htmlStart . "<h1>" . $_POST['name'] . "</h1><h4>" . $_POST['email'] . "</h4><p>" . $_POST['message'] . "</p>" . $htmlEnd;
                    $headers[] = 'MIME-Version: 1.0';
                    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                    // Additional headers
                    $headers[] = 'To: Jamie Greatorex <jamie.greatorex99@gmail.com>';
                    $headers[] = 'From: JGreatorex.com Contact <contact@jgreatorex.com>';
                    mail($to, $subject, $message, implode("\r\n", $headers));
                    //echo $message;
                    header("location: index.html");
                } else { header("location: index.html?error=FailedVerification"); }
			} else {header("location: index.html?error=NoMessage");}
		} else {header("location: index.html?error=NoEmail");}
	} else {header("location: index.html?error=NoName");}