
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>Bienvenido a Vacation Cards</title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #f1f1f1;
}

/* What it does: Stops email clients resizing small text. */
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

/* What it does: Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
    margin: 0 !important;
}

/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}

/* What it does: Fixes webkit padding issue. */
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}

/* What it does: Uses a better rendering method when resizing images in IE. */
img {
    -ms-interpolation-mode:bicubic;
}

/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
a {
    text-decoration: none;
}

/* What it does: A work-around for email clients meddling in triggered links. */
*[x-apple-data-detectors],  /* iOS */
.unstyle-auto-detected-links *,
.aBn {
    border-bottom: 0 !important;
    cursor: default !important;
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
.a6S {
    display: none !important;
    opacity: 0.01 !important;
}

/* What it does: Prevents Gmail from changing the text color in conversation threads. */
.im {
    color: inherit !important;
}

/* If the above doesn't work, add a .g-img class to any image in question. */
img.g-img + div {
    display: none !important;
}

/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
/* Create one of these media queries for each additional viewport size you'd like to fix */

/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    u ~ div .email-container {
        min-width: 320px !important;
    }
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u ~ div .email-container {
        min-width: 375px !important;
    }
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
    u ~ div .email-container {
        min-width: 414px !important;
    }
}

    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

	    .primary{
	background: #2f89fc;
}
.bg_white{
	background: #ffffff;
}
.bg_light{
	background: #f7fafa;
}
.bg_black{
	background: #000000;
}
.bg_dark{
	background: rgba(0,0,0,.8);
}
.email-section{
	padding:2.5em;
}

/*BUTTON*/
.btn{
	padding: 10px 20px;
	display: inline-block;
}
.btn.btn-primary{
	border-radius: 5px;
	background: #2f89fc;
	color: #ffffff;
}
.btn.btn-white{
	border-radius: 30px;
	background: #ffffff;
	color: #000000;
}
.btn.btn-white-outline{
	border-radius: 5px;
	background: transparent;
	border: 1px solid #fff;
	color: #fff;
}
.btn.btn-black-outline{
	border-radius: 0px;
	background: transparent;
	border: 2px solid #000;
	color: #000;
	font-weight: 700;
}
.btn-custom{
	color: rgba(0,0,0,.3);
	text-decoration: underline;
}

h1,h2,h3,h4,h5,h6{
	font-family: 'Work Sans', sans-serif;
	color: #000000;
	margin-top: 0;
	font-weight: 400;
}

body{
	font-family: 'Work Sans', sans-serif;
	font-weight: 400;
	font-size: 15px;
	line-height: 1.8;
	color: rgba(0,0,0,.4);
}

a{
	color: #2f89fc;
}

table{
}
/*LOGO*/

.logo h1{
	margin: 0;
}
.logo h1 a{
	color: #000;
	font-size: 24px;
	font-weight: 600;
	font-family: 'Work Sans', sans-serif;
}

/*HERO*/
.hero{
	position: relative;
	z-index: 0;
}

.hero .text{
	color: rgba(0,0,0,.3);
}
.hero .text h2{
	color: #000;
	font-size: 34px;
	margin-bottom: 15px;
	font-weight: 300;
	line-height: 1.2;
}
.hero .text h3{
	font-size: 24px;
	font-weight: 200;
}
.hero .text h2 span{
	font-weight: 600;
	color: #000;
}


/*PROJECT*/
.project-entry{
	position: relative;
	width: 100%;
	float: left;
}
.text-project{
	padding-top: 10px;
	position: absolute;
	bottom: 10px;
	left: 0;
	right: 0;
	width: 100%;
	float: left;
}
.text-project h3{
	margin-bottom: 0;
	font-size: 24px;
	font-weight: 400;
}
.text-project h3 a{
	color: #fff;
}
.text-project span{
	font-size: 13px;
	color: rgba(255,255,255,.8);
}
.text-project div{
	width: 43%;
	float: left;
	padding: 0 20px;
}

ul.social{
	padding: 0;
}
ul.social li{
	display: inline-block;
	margin-right: 10px;
}

/*FOOTER*/

.footer{
	border-top: 1px solid rgba(0,0,0,.05);
	color: rgba(0,0,0,.5);
}
.footer .heading{
	color: #000;
	font-size: 20px;
}
.footer ul{
	margin: 0;
	padding: 0;
}
.footer ul li{
	list-style: none;
	margin-bottom: 10px;
}
.footer ul li a{
	color: rgba(0,0,0,1);
}


@media screen and (max-width: 500px) {


}


    </style>


</head>

@if($mailData['idioma'] === 'us')
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
	<center style="width: 100%; background-color: #f1f1f1;">
    <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
     
    </div>
    <div style="max-width: 600px; margin: 0 auto;" class="email-container">
    	<!-- BEGIN BODY -->
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	
      	<tr>
          <td valign="top"  style="padding: 1em 2.5em 0 2.5em; background:#fff">
          	<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
          		<tr>
          			<td class="logo" style="text-align: center;">
			            <h1><a href="#"><img src="{{asset('assets/img/elements/logo.png')}}" alt="" style="width: 200px;"></a></h1>
			          </td>
          		</tr>
          	</table>
          </td>
	      </tr><!-- end tr -->
	      <tr>
	      	<td class="bg_white">
	      		<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
		      		<tr>
		            <td valign="top" width="100%" style="padding-bottom: 20px;">
		              <div class="project-entry">
		              	<img src="http://vacationcards.com/crm/imgemail/vacationscard.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
		              	
		              </div>
		            </td>
		          </tr>
		          
		          
						</table>
	      	</td>
	      </tr><!-- end tr -->
				<tr>
          <td valign="middle" class="hero bg_white" style="padding: 2em 0 2em 0;">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
            	<tr>
            		<td style="padding: 0 2.5em; text-align: center;">
            			<div class="text">
            				<h2>Congratulations us</h2>
            				<h3>{{ $mailData['nombre'] }}</h3>
            				<h3>Mail: {{ $mailData['Email'] }}</h3>
            				<h3>Password:{{ $mailData['password'] }}</h3>
            				<h3>{{ $mailData['tarjeta'] }}</h3>
            				
            				
            				<p style="color:#000;">You received a Vacation Cards, you are one step away from being able to enjoy your next vacation. Within 48 hours you will receive a welcome call from your travel concierge to activate your Vacation Cards 😊</p>
            				
            			</div>
            		</td>
            	</tr>
            </table>
          </td>
	      </tr><!-- end tr -->
	      
      <!-- 1 Column Text + Button : END -->
      </table>
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	
        <tr>
          <td class="bg_light" style="text-align: center; color: #000;">
          	<p>📍Av. Bonampak #77 77500 Cancún, México <br> 🇲🇽 +52 998 609 0009 | ✉️ hola@vacationcards.com</p>
          </td>
        </tr>
      </table>

    </div>
  </center>
</body>
@elseif($mailData['idioma']  === 'es')
Claro, puedo ayudarte a mejorar el formato del correo electrónico. A continuación, realizaré algunos ajustes para organizar mejor el contenido y hacer que el correo sea más atractivo visualmente:

```blade.php
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
    <center style="width: 100%; background-color: #f1f1f1;">
        <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;"></div>
        <div style="max-width: 600px; margin: 0 auto; font-family: sans-serif;">
            <!-- BEGIN BODY -->
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                <tr>
                    <td valign="top"  style="padding: 1em 2.5em 0 2.5em; background:#fff">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td class="logo" style="text-align: center;">
                                    <h1><a href="#"><img src="{{asset('assets/img/elements/logo.png')}}" alt="" style="width: 200px;"></a></h1>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr><!-- end tr -->
                <tr>
                    <td class="bg_white">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td valign="top" width="100%" style="padding-bottom: 20px;">
                                    <div class="project-entry">
                                        <img src="http://vacationcards.com/crm/imgemail/vacationscard.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr><!-- end tr -->
                <tr>
                    <td valign="middle" class="hero bg_white" style="padding: 2em 0 2em 0;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="padding: 0 2.5em; text-align: center;">
                                    <div class="text">
                                        <h2>Congratulations es</h2>
                                        <h3>{{ $mailData['nombre'] }}</h3>
                                        <h3>Mail: {{ $mailData['Email'] }}</h3>
                                        <h3>Password: {{ $mailData['password'] }}</h3>
                                        <h3>{{ $mailData['tarjeta'] }}</h3>
                                        <p style="color:#000;">Recibiste una Tarjeta Vacacional, estás a un paso de poder disfrutar de tus próximas vacaciones. Dentro de las 48 horas, recibirás una llamada de bienvenida de tu consejero de viajes para activar tus tarjetas de vacaciones. 😊</p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr><!-- end tr -->
                <!-- 1 Column Text + Button : END -->
            </table>
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                <tr>
                    <td class="bg_light" style="text-align: center; color: #000; padding: 1em 0;">
                        <p>📍Av. Bonampak #77 77500 Cancún, México <br> 🇲🇽 +52 998 609 0009 | ✉️ hola@preferencepassport.com</p>
                    </td>
                </tr>
            </table>
        </div>
    </center>
</body>

@endif
</html>

