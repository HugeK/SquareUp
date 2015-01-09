<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <META NAME="description" CONTENT="Hugo Kelly's web development test submission">
        <META NAME="keywords" CONTENT="square up media, square up, squareup, web dev, test, submission, hugo kelly, hugo, kelly">
        <META NAME="copyright" CONTENT="Copyright © <?php echo date('Y'); ?> Hugo Kelly. All Rights Reserved.">
        <META NAME="author" CONTENT="Hugo Kelly">
        <META NAME="language" CONTENT="English">
        <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" type="text/css" href="http://www.bootstrapcdn.com/twitter-bootstrap/3.2.0/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Square Up Media</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon"> 
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
        <script src="http://www.bootstrapcdn.com/twitter-bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bPopup.js" type="text/javascript"></script>
        <script src="js/ui.js" type="text/javascript"></script>
        <script type="text/javascript">
        $( document ).ready(function() {
			
			//stop browser form refresh
			$('form').submit(function(event) {
				event.preventDefault();
			});
			
			//only allow entry of certain characters
			$('input').keypress(function (e) {
				if($(this).attr('id')=='fname' || $(this).attr('id')=='sname' ){
					var regex = new RegExp("^[a-zA-Z-]+$");
				}else{
					var regex = new RegExp("^[a-zA-Z0-9@!#$%&'*+-/=?^_`{|}~-]+$");
				}
				var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
				if (regex.test(str)) {
					return true;
				}
				e.preventDefault();
				return false;
			});
			
			//email validate function
			function isValidEmailAddress(emailAddress) {
				var pattern = new RegExp("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$");
				return pattern.test(emailAddress);
			};
			
			//checkbox
			$('#tac').click(function(event){
				$(this).toggleClass('checked');
			});
			
			//submit
			$('#submit').click(function(event){
				//are all fields filled in?
				if($('#fname').val()!=''&&$('#lname').val()!=''&&$('#email').val()!=''){
					//is checkbox checked?
					if($('#tac').hasClass('checked')){
						//is email correct?
						if(!isValidEmailAddress($('#email').val())){//not a valid email address
							$('#dialogf').bPopup({ //open login dialog
								modalClose: true,
								positionStyle: 'fixed',							
								fadeSpeed: '300',
								modalColor: '#333',
								opacity: '0.2',
								closeClass:'cls'
							});
						}else{
							$('#dialogp').bPopup({ //open login dialog
								modalClose: true,
								positionStyle: 'fixed',							
								fadeSpeed: '300',
								modalColor: '#333',
								opacity: '0.2',
								closeClass:'cls'
							});
						}
					}else{
						$('#dialogt').bPopup({ //open login dialog
							modalClose: true,
							positionStyle: 'fixed',							
							fadeSpeed: '300',
							modalColor: '#333',
							opacity: '0.2',
							closeClass:'cls'
						});
					}
				}else{
					$('#dialoge').bPopup({ //open login dialog
						modalClose: true,
						positionStyle: 'fixed',							
						fadeSpeed: '300',
						modalColor: '#333',
						opacity: '0.2',
						closeClass:'cls'
					});
				}
			});
			
		});
        </script>
    </head>
    <body>
        <!--Popup-->
        <div id="dialogt" class="dialog" align="right"><form>
        	<div align="left">
            	Please click "I agree to the <u><a href="#">terms and conditions</a></u>".
            </div>
            <div class="break"></div>
            <div class="bttn cls">OK</div>
        </div>
        <div id="dialoge" class="dialog" align="right"><form>
        	<div align="left">
            	Please ensure no fields are empty.
            </div>
            <div class="break"></div>
            <div class="bttn cls">OK</div>
        </div>
        <div id="dialogf" class="dialog" align="right"><form>
        	<div align="left">
            	Please enter a valid email address.
            </div>
            <div class="break"></div>
            <div class="bttn cls">OK</div>
        </div>
        <div id="dialogp" class="dialog" align="right"><form>
        	<div align="left">
            	Great! Your email address has been added to our mailing list.
            </div>
            <div class="break"></div>
            <div class="bttn cls">OK</div>
        </div>
        <div class="text-center" id="leader">
            728x90 Leaderboard
        </div>
        <div style="max-width:1024px;min-width:683px;margin:0 auto;" id="container">
            <div class="text-center" style="background:#ffffff;padding:6mm 0;">
                <img src="img/logo.png" />
            </div>
            <div class="text-center" id="nav">
                <span class="link">ABOUT</span>
                <span class="link">CONTACT</span>
                <span class="link">BRANDS</span>
            </div>
            <div style="position:absolute;z-index:100;margin:-48px 0 0 0;">
                <img src="img/topleft.png" />
            </div>
            <div class="col-xs-12 col-md-8 pull-left">
                <img src="img/poster.jpg" style="margin:-48px 0 0 -15px; border-bottom-right-radius:306px;" />
            </div>
            <div class="col-xs-12 col-md-4 pull-right text-center vtop" style="padding:0 10mm;">
            	<img src="img/escapism.png" style="padding:13mm 0;display:block;margin:0 auto;" />
Escapism magazine takes a fresh look at global travel, featuring inspirational writing from some of the most exciting voices in travel, and photography and design that transports readers from busy London streets to amazing locations across the globe.
<br /><br />                
Sign up for notifications below:
				<div align="left" style="margin:15mm auto;width:270px;">
                	Firstname<br /><br />
                	Surname<br /><br />
            		Email<br /><br />
                    <div style="float:right;margin-top:-43.5mm;" align="right">
                    	<input type="text" id="fname" size="16" maxlength="30" />
                    	<input type="text" id="sname" size="16" maxlength="30" />
                    	<input type="text" id="email" size="16" maxlength="120" />
                    </div>
                    <div style="font-size:16px;margin:-2mm 0 0 0">
                    	I agree to the <u><a href="#">terms and conditions</a></u>:
                        
                    </div>
                    <div style="float:right;margin-top:-7mm;" align="right">
                    	<div id="tac" align="center">X</div>
                    </div>
                    <div align="center" id="submit">
                    	Notify Me!
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-8 pull-left" style="padding:0 8mm;">
<div style="font-size:27px;margin:8mm 0 0 0;">THE MAGAZINE</div><br />
Escapism is the largest circulating independent travel magazine in the UK, with 81,988 (ABC verified) copies distributed free throughout London every month.
<br /><br />
The magazine takes a fresh look at global travel, featuring inspirational writing from some of the most exciting voices in travel, and photography and design that transports readers from busy London streets to amazing locations across the globe.
<br /><br />
In Escapism, we’re as likely to explore the street food scene in Seattle as we are to follow the exploits of a polar explorer, alongside the latest travel gear, news and trends, and guides that help readers see destinations from a new perspective.
<br /><br />
We believe there should be more to going on holiday than just packing, getting on a plane and making a beeline for the nearest sunlounger. It should be fun, adventurous and life-changing. That’s why w e created Escapism – a magazine for travel lovers, made by travel lovers.
<br /><br />
You can view the latest issue online <u><a href="#">here</a></u>.
<br /><br />
Or browse the whole archive online <u><a href="#">here</a></u>.
<br /><br />
            </div>
            <div class="col-xs-12 col-md-4 pull-right text-center" style="padding:0 6mm 0 0;">
                <img src="img/cover.jpg" style="display:block;" />
                <div style="margin:10mm 0 8mm 0;min-width:320px;" align="left">
                	FOLLOW ESCAPISM ON:
                    <img class="slink" src="img/fb.png" height="36px" style="vertical-align:baseline;padding:0 0 0 3mm;" /> 
                    <img class="slink" src="img/ig.png" height="36px" style="vertical-align:baseline;padding:0 0 0 2mm;" /> 
                    <img class="slink" src="img/tw.jpg" height="36px" style="vertical-align:baseline;padding:0 0 0 2mm;" /> 
                </div>
            </div>
            <div class="break" style="clear:both;margin: auto;"></div>
            <div style="overflow:hidden;">
                <img src="img/ipad.png" style="padding:8mm;float:left;" />
                <div style="margin:0 0 0 147px;padding:0 3mm 0 0;">
<div style="font-size:27px;margin:8mm 0 0 0;">THE IPAD</div><br />
Every issue of Escapism is also available in an interactive iPad edition, with even more photography, animated articles, and a range of tools and features that bring the reader even closer to amazing locations throughout the world. Download the iPad edition here.
				</div>
            </div>
            <div class="text-center" id="footer">
                © <?php echo date('Y'); ?> SQUARE UP MEDIA
            </div>
        </div>
       
        </div>
    </body>
</html>