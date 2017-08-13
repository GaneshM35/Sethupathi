    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <h1>
              Sethupathi Institute Of Higher Studies
            </h1>
            <address>
              <p><i class="fa fa-home pr-10"></i>Address: No.2 Pykara Office Road ,Tatabad,
              <p><i class="fa fa-globe pr-10"></i>Coimbatore, Tamil Nadu  641012. INDIA </p>
              <p><i class="fa fa-mobile pr-10"></i>Mobile : +91 - 98 43 04 44 80  </p>
              <p><i class="fa fa-envelope pr-10"></i>Email : sethupathi.coimbatore@gmail.com </p>
            </address>
          </div>
          <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
          <h4>
            Quick Enquiry
          </h4>
          <div class="contact-form">
            <form role="form" action="" method="post">
              <div class="form-group">
                <input type="text" placeholder="Name" name="name" required class="form-control">
              </div>
              <div class="form-group">
                <input type="text" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required class="form-control">
              </div>
              <div class="form-group">
                <input type="text" placeholder="Mobile Number" pattern="[789][0-9]{9}" maxlength="10" onKeyUp="this.value=this.value.replace(/[^0-9,\.]/g,'');" name="phone" required class="form-control">
              </div>
			</div>
          </div>

          <div class="col-lg-3 col-sm-3">
            <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
              <div class="form-group">
                 <br><br>
                <textarea placeholder="Message" rows="6" name="message" required style="resize: none" cols="20" class="form-control"></textarea>
              </div>
              <button class="btn btn-info" type="submit" name="submit">
                Submit
              </button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
        <!--small footer start -->
    <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 pull-right">
                    <ul class="social-link-footer list-unstyled">
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a target="_blank" href="https://in.linkedin.com/in/"><i class="fa fa-linkedin"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
				
                <div class="col-md-4">
                  <div class="copyright">
                    <p>&copy; Copyright - sethupathi.in</p>
					<p> <h3>Developed By</h3>
				<h4>Section Incharge : M.Ganesh <span style="text-decoration: overline">B.E.,</span></h4></p>
                  </div>
                </div>
            </div>
        </div>
    </footer>
    
        <!--small footer end-->
<?php
include('config/config.php');
if(isset($_POST['submit']))
{
extract($_POST);
$page_title='Sethupathi Institute';
//mail start
$message1='<table width=100% border=0 border-color:none cellspacing=3 cellpadding=3 class=text style="font-family:Arial; line-height:160% word-spacing:0.4em font-size:18px; border: 1px solid" bgcolor="#CCCCCC" color:"#fffff">
<tr ><td colspan="4"  align="center" bgcolor="#CCCCCC"><strong>'.$page_title.'</strong></td></tr>
<tr><td>Name</td><td>:</td><td >'.$name.'</td></tr>
<tr><td>E-mail Id</td><td>:</td><td>'.$email.'</td></tr>
<tr><td>Mobile</td><td>:</td><td>'.$phone.'</td></tr>
<tr><td>Message</td><td>:</td><td>'.$message.'</td></tr>
</table>';
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$email;
Mail("ganesh.m635@gmail.com","$page_title","$message1","$headers");
//mail end
$ins="INSERT into enquiry (name,email,mobile,message) values ('$name','$email','$phone','$message')";
$result = mysqli_query($db, $ins);
    if($result == 1){
    print "Current fund amount updated successfully";
    }
    else
    {
    print "current Funds amount not updated Error!!!";
    }

header('location:index.php');
}  
?>