<?php
    if(!empty($_POST)) {
    $shapewaysURL = $_POST["modelFilePath"];
    $newfilename = $_POST["modelFileName"];
    $coname = $_POST["coname"];
    $email = $_POST["email"];
    }

    $local_path = '';
    
    $parseURL = parse_url($shapewaysURL);
    if(strpos($parseURL['host'],"shapeways.net") != false && substr($parseURL['path'],-5) == ".x3db") {
        $err_msg = ''; 
        echo "<br>Attempting download for $shapewaysURL<br>$email $coname"; 
        $out = fopen($local_path.$newfilename,"wb");
        if ($out == FALSE){ 
          print "File not opened<br>"; 
          exit; 
        } 

        $ch = curl_init(); 

        curl_setopt($ch, CURLOPT_FILE, $out); 
        curl_setopt($ch, CURLOPT_HEADER, 0); 
        curl_setopt($ch, CURLOPT_URL, $shapewaysURL); 

        curl_exec($ch); 
        echo "<br>Error is : ".curl_error ( $ch); 

        curl_close($ch); 
        //fclose($handle); 

        // send email to WSI with information
        $to = "james@woodruffscientific.com";
        $subject = "New CAD model from $coname was uploaded";
        $message = "Model filename: $newfilename
        File: $shapewaysURL";
        $header = "From:james@woodruffscientific.com \r\n";
        $retval = mail ($to,$subject,$message,$header);
        if( $retval == true )  
        {
           echo "Message sent successfully...";
        }
        else
        {
           echo "Message could not be sent...";
        }

    } else {
        echo "Invalid Shapeways URL<br>";
        echo "host", $parseURL['host'], "<br>";
        echo substr($parseURL['path'],-5);
    }

    