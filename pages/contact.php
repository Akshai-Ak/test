<?php include 'header.php' ?>
<?php 
    $name=$email=$ph=$known=$event=$date=$guest="";
    $nameErr=$emailErr=$phErr=$knownErr=$eventErr=$dateErr=$guestErr="";
    if($_POST){
        $name = $_POST["name"]; 
        $email = $_POST["email"];  
        $ph = $_POST["number"]; 
        $known = $_POST["known"];
        $event = $_POST["event"]; 
        $date= $_POST["event-date"];  
        $guest= $_POST["guest"]; 
    }
    // if ($_POST) {
    //     if (empty ($_POST["name"])) {  
    //         $nameErr = "Please Fill This Field";    
    //     } else {  
    //         $name = $_POST["name"];  
    //     }  
    //     if (empty ($_POST["email"])) {  
    //         $emailErr = "Please Fill This Field";    
    //     } else {  
    //         $email = $_POST["email"];  
    //     } 
    //     if (empty ($_POST["number"])) {  
    //         $phErr = "Please Fill This Field";    
    //     } else {  
    //         $ph = $_POST["number"];  
    //     } 
    //     if (empty ($_POST["known"])) {  
    //         $knownErr = "Please Fill This Field";    
    //     } else {  
    //         $checked = $_POST['options'];
    //         $known = $checked; 
    //     } 
    //     if (empty ($_POST["event"])) {  
    //         $eventErr = "Please Fill This Field";    
    //     } else {  
    //         $event = $_POST["event"];  
    //     } 
    //     if (empty ($_POST["event-date"])) {  
    //         $dateErr = "Please Fill This Field";    
    //     } else {  
    //         $date= $_POST["event-date"];  
    //     } 
    //     if (empty ($_POST["guest"])) {  
    //         $guestErr = "Please Fill This Field";    
    //     } else {  
    //         $guest= $_POST["guest"];  
    //     } 
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assests/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assests/css/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assests/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <p class="text-center">SEND US A MESSAGE</p>
                <h1 class="text-center">LET'S GET STARTED</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
            <form action="" method="post">
                <div class="form-group">
                    <label for="firstName">FIRST NAME <sup>*</sup></label>
                    <input type="text" name="name" class="form-control" id="firstName" aria-describedby="firsthelp" placeholder="First Name" required>
                    <small id="firsthelp" class="err"><?php echo $nameErr; ?></small>
                </div>
                <div class="form-group">
                    <label for="lastName">LAST NAME</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" >
                </div>
                <div class="form-group">
                    <label for="email">EMAIL <sup>*</sup></label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    <small id="firsthelp" class="err"><?php echo $emailErr; ?></small>
                </div>
                <div class="form-group">
                    <label for="contact">PHONE NUMBER<sup>*</sup></label>
                    <input type="number" name="number" class="form-control" id="contact" placeholder="Phone Number" required>
                    <small id="firsthelp" class="err"><?php echo $phErr; ?></small>
                </div>
                <div class="form-group">
                    <label for="known-us">HOW DID YOU HEAR ABOUT US?<sup>*</sup></label>
                    <select class="form-control" id="known-us"name="known" required>
                    <option   value="">Please Select</option>
                    <option value="Referral">Referral</option>
                    <option value="Social Media">Social Media</option>
                    <option value="Phone Call">Phone Call</option>
                    <option value="Google">Google</option>
                    <option >Other(post in comments)</option>
                    </select>
                    <small id="firsthelp" class="err"><?php echo $knownErr; ?></small>
                </div>
                <div class="form-group">
                    <label for="event">TYPE OF EVENT<sup>*</sup></label>
                    <select class="form-control" name="event"  id="event" required>
                    <option value="">Please Select</option>
                    <option>Wedding</option>
                    <option>Birthday</option>
                    <option>Corporate or social</option>
                    </select>
                    <small id="firsthelp" class="err"><?php echo $eventErr; ?></small>
                </div>
                <div class="form-group">
                    <label for="date">EVENT DATE<sup>*</sup></label>
                    <input type="date" name="event-date" class="form-control" id="date" placeholder="Phone Number" required>
                    <small id="firsthelp" class="err"><?php echo $dateErr; ?></small>
                </div>
                <div class="form-group">
                    <label for="guestCount">ESTIMATED GUEST COUNT<sup>*</sup></label>
                    <select class="form-control" name="guest"  id="guestCount"required >
                    <option  value="">Please Select</option>
                    <option>0-49</option>
                    <option>50+</option>
                    <option>100+</option>
                    <option>200+</option>
                    <option>300+</option>
                    </select>
                    <small id="firsthelp" class="err"><?php echo $guestErr; ?></small>
                </div>
                <div class="form-group">
                    <label for="notes">ADDITIONAL NOTES</label>
                    <br>
                    <textarea name="" id="" cols="100" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3 mt-5 phNumber">
                <h5>ADDRESS</h5>
                <p>Dubai Kuruku Snadu Dubai</p>
                <br>
                <h5>Phone Number</h5>
                <a  href="tel:123456789">123456789</a>
                <br> <br>
                <h5>Social Links</h5>
                <ul class="social-icons ">
                    <li><a href=""><i class="fa fa-instagram mr-3" aria-hidden="true"></i></a> </li>
                    <li><a href=""><i class="fa fa-facebook-official mr-3" aria-hidden="true"></i></a> </li>
                    <li><a href=""><i class="fa fa-whatsapp mr-3" aria-hidden="true"></i></a> </li>
                    <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a> </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="../assests/css/bootstrap/jquery.min.js"></script>
    <script src="../assests/css/bootstrap/popper.min.js"></script>
    <script src="../assests/css/bootstrap/bootstrap.min.js"></script>
</body>
</html>

<?php 
    require '../php/class.phpmailer.php';
    require '../php/class.smtp.php';
    // require '../php/PHPMailerAutoload.php';
   
if($_POST){
    // require '../php/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    // configure an SMTP
    // $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'akshaymaxwell26@gmail.com';
    $mail->Password = 'akshaykumar26';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    
    $mail->SetFrom($email,$name);
    $mail->addAddress('akshaiiak@gmail.com','Fevista Events');
    $mail->Subject = 'Regarding '.$event.' Event';
    // Set HTML 
    $mail->isHTML(TRUE);
    /* $mail->Body = '<html>Name:'.$_REQUEST['plates'].'<br></html>'; */
    $mail->Body ='<html>Name:'.$name.'<br> Mobile:'.$ph.'<br> Mail:'.$email.'<br> Known By:'.$known.'<br> Event Type:'.$event.'<br> Event Date:'.$date.'<br> Guest Count:'.$guest.'</html>';
    
    // send the message
    if(!$mail->send()){
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}
?>
