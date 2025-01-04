<?php 
  class Mail extends Objects {

    public function registration_info($u_reg_email){
     $u_mail = $u_reg_email;
     $get_info = $this->find('vercity_demand','u_reg_email' , $u_mail);

      $to = $u_mail; 
      $from = 'uavisa.eu'; 
      $subject = "Your information"; 
       
       $htmlContent = ' 
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>
  </title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--<![endif]-->
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    #outlook a {
      padding: 0;
    }

    .ReadMsgBody {
      width: 100%;
    }

    .ExternalClass {
      width: 100%;
    }

    .ExternalClass * {
      line-height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    p {
      display: block;
      margin: 13px 0;
    }
  </style>
  <style type="text/css">
    @media only screen and (max-width:480px) {
      @-ms-viewport {
        width: 320px;
      }

      @viewport {
        width: 320px;
      }
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet" type="text/css">
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open Sans);
  </style>
  <style type="text/css">
    @media only screen and (min-width:480px) {
      .mj-column-per-100 {
        width: 100% !important;
        max-width: 100%;
      }
    }
  </style>
  <style type="text/css">
    [owa] .mj-column-per-100 {
      width: 100% !important;
      max-width: 100%;
    }
  </style>
  <style type="text/css">
    @media only screen and (max-width:480px) {
      table.full-width-mobile {
        width: 100% !important;
      }

      td.full-width-mobile {
        width: auto !important;
      }
    }
  </style>
</head>

<body style="background-color:#f8f8f8;">
  <div style="background-color:#f8f8f8;">
   
    <div style="Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top;">
          
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="left" style="font-size:0px;padding:0px 0px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;">
                      <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:11px;line-height:22px;text-align:left;color:#797e82;">
                       
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
          
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  
    <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-left:0px;padding-right:0px;padding-top:0px;text-align:center;vertical-align:top;">
           
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td style="font-size:0px;padding:10px 25px;padding-top:0px;padding-right:0px;padding-bottom:40px;padding-left:0px;word-break:break-word;">
                      <p style="border-top:solid 7px #54119F;font-size:1;margin:0px auto;width:100%;">
                      </p>
      
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                        <tbody>
                          <tr>
                            <td style="width:110px;">
                              <img alt="" height="auto" src="http://uavisa.eu/assets/img/UA%20Visa%20LOGO.png" style="border:none;display:block;outline:none;text-decoration:none;height:auto;width:100%;" title="" width="110" />
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
        
            </td>
          </tr>
        </tbody>
      </table>
    </div>
   
    <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top;">
            
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="center" style="font-size:0px;padding:10px 25px;padding-top:40px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                        <tbody>
                          <tr>
                            <td style="width:300px;">
                              <img alt="" height="auto" src="https://www.mailjet.com/wp-content/uploads/2019/07/Welcome-02.png" style="border:none;display:block;outline:none;text-decoration:none;height:auto;width:100%;" title="" width="300" />
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
           
            </td>
          </tr>
        </tbody>
      </table>
    </div>
   
    <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:70px;padding-top:30px;text-align:center;vertical-align:top;">
      
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                      <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                        <h1 style="text-align:center; color: #000000; line-height:32px">Welcome '.$get_info->u_reg_f_name.' ! We are so happy to have you on board.</h1>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                      <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                        <p style="margin: 10px 0; text-align: center;">You can now start using UAVis.</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" vertical-align="middle" style="font-size:0px;padding:10px 25px;padding-top:20px;padding-bottom:10px;word-break:break-word;">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
                        <tr>
                          <td align="center" bgcolor="#54119F" role="presentation" style="border:none;border-radius:100px;cursor:auto;padding:15px 25px 15px 25px;background:#54119F;" valign="middle">
                            <a href="facebok.com" style="background:#54119F;color:#ffffff;font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;font-weight:normal;line-height:120%;Margin:0;text-decoration:none;text-transform:none;" target="_blank">
                              <b style="font-weight:700"><b style="font-weight:700">Get Started</b></b>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
             
            </td>
          </tr>
        </tbody>
      </table>
    </div>
   
    <div style="Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:0px;padding-top:20px;text-align:center;vertical-align:top;">
          
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="center" style="font-size:0px;padding:10px 25px;padding-bottom:0px;word-break:break-word;">
           
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                        <tr>
                          <td style="padding:4px;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#54119F;border-radius:6px;width:30;">
                              <tr>
                                <td style="font-size:0;height:30;vertical-align:middle;width:30;">
                                  <a href="[[SHORT_PERMALINK]]" target="_blank">
                                    <img height="30" src="http://www.mailjet.com/saas-templates-creator/static/img/facebook_white.png" style="border-radius:6px;" width="30" />
                                  </a>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
              
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                        <tr>
                          <td style="padding:4px;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#54119F;border-radius:6px;width:30;">
                              <tr>
                                <td style="font-size:0;height:30;vertical-align:middle;width:30;">
                                  <a href="[[SHORT_PERMALINK]]" target="_blank">
                                    <img height="30" src="http://www.mailjet.com/saas-templates-creator/static/img/twitter_white.png" style="border-radius:6px;" width="30" />
                                  </a>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                        <tr>
                          <td style="padding:4px;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#54119F;border-radius:6px;width:30;">
                              <tr>
                                <td style="font-size:0;height:30;vertical-align:middle;width:30;">
                                  <a href="[[SHORT_PERMALINK]]" target="_blank">
                                    <img height="30" src="http://www.mailjet.com/saas-templates-creator/static/img/linkedin_white.png" style="border-radius:6px;" width="30" />
                                  </a>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
           
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="font-size:0px;padding:0px 20px 0px 20px;padding-top:0px;padding-bottom:0px;word-break:break-word;">

                    </td>
                  </tr>
                </table>
              </div>
           
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  
  </div>
</body>

</html>
          '; 
       
      // Set content-type header for sending HTML email 
      $headers = "MIME-Version: 1.0" . "\r\n"; 
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
       
      // Send email 
      mail($to, $subject, $htmlContent, $headers);
      
    }

    // randdom password send function 

    public function send_rand_pass($u_reg_email,$rand_pass,$v_key) {
      $u_mail = $u_reg_email;

      $to = $u_mail; 
      $from = 'uavisa.eu'; 
      $subject = "Your login email and password";
      $password  = $rand_pass;
      $verification_key = $v_key;
       
       $htmlContent = ' 
          
          <!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
  <title>
  </title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    #outlook a {
      padding: 0;
    }

    .ReadMsgBody {
      width: 100%;
    }

    .ExternalClass {
      width: 100%;
    }

    .ExternalClass * {
      line-height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    p {
      display: block;
      margin: 13px 0;
    }
  </style>
  <style type="text/css">
    @media only screen and (max-width:480px) {
      @-ms-viewport {
        width: 320px;
      }

      @viewport {
        width: 320px;
      }
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet" type="text/css">
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open Sans);
  </style>
  <style type="text/css">
    @media only screen and (min-width:480px) {
      .mj-column-per-100 {
        width: 100% !important;
        max-width: 100%;
      }
    }
  </style>
  <style type="text/css">
    [owa] .mj-column-per-100 {
      width: 100% !important;
      max-width: 100%;
    }
  </style>
  <style type="text/css">
    @media only screen and (max-width:480px) {
      table.full-width-mobile {
        width: 100% !important;
      }

      td.full-width-mobile {
        width: auto !important;
      }
    }
  </style>
</head>

<body style="background-color:#f8f8f8;">
  <div style="background-color:#f8f8f8;">
    <div style="Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="left" style="font-size:0px;padding:0px 0px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;">
                      <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:11px;line-height:22px;text-align:left;color:#797e82;">
                       
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-left:0px;padding-right:0px;padding-top:0px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td style="font-size:0px;padding:10px 25px;padding-top:0px;padding-right:0px;padding-bottom:40px;padding-left:0px;word-break:break-word;">
                      <p style="border-top:solid 7px #54119F;font-size:1;margin:0px auto;width:100%;">
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                        <tbody>
                          <tr>
                            <td style="width:110px;">
                              <img alt="" height="auto" src="http://uavisa.eu/assets/img/UA%20Visa%20LOGO.png" style="border:none;display:block;outline:none;text-decoration:none;height:auto;width:100%;" title="" width="110" />
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          
        </tr>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="center" style="font-size:0px;padding:10px 25px;padding-top:40px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                        <tbody>
                          <tr>
                            <td style="width:300px;">
                              <img alt="" height="auto" src="http://9pl9.mjt.lu/tplimg/9pl9/b/ygjj/t65lu.png" style="border:none;display:block;outline:none;text-decoration:none;height:auto;width:100%;" title="" width="300" />
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:70px;padding-top:30px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                      <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                        <h1 style="text-align:center; color: #000000; line-height:32px">You&apos;re almost there!</h1>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                      <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                        <p style="margin: 10px 0; text-align: center;">Hi Dear, Thank you for signing up to UAVISA.&nbsp;</p>
                        <p style="margin: 10px 0; text-align: center;">Your email is '.$u_mail.', and password is '.$password.'</p>
                        <p style="margin: 10px 0; text-align: center;">To confirm your account, simply click on the button below:</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" vertical-align="middle" style="font-size:0px;padding:10px 25px;padding-top:20px;padding-bottom:20px;word-break:break-word;">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
                        <tr>
                          <td align="center" bgcolor="#54119F" role="presentation" style="border:none;border-radius:100px;cursor:auto;padding:15px 25px 15px 25px;background:#54119F;" valign="middle">
                            <a href="http://linkingcc.com/testing_project/uaviissa/user_verify.php?vkey='.$v_key.'" style="background:#54119F;color:#ffffff;font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;font-weight:normal;line-height:120%;Margin:0;text-decoration:none;text-transform:none;" target="_blank">
                              <b style="font-weight:700"><b style="font-weight:700">Activate My Account</b></b>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                      <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                        <p style="margin: 10px 0; text-align: center;">If the link doesn&rsquo;t work, copy this URL into your browser: <a target="_blank" rel="noopener noreferrer" href="#" style="color:#54119F">Var URL</a></p>
                        <p style="margin: 10px 0; text-align: center;"><i style="font-style:normal"><b style="font-weight:700">Welcome!</b></i></p>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:0px;padding-top:20px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="center" style="font-size:0px;padding:10px 25px;padding-bottom:0px;word-break:break-word;">
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                        <tr>
                          <td style="padding:4px;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#54119F;border-radius:6px;width:30;">
                              <tr>
                                <td style="font-size:0;height:30;vertical-align:middle;width:30;">
                                  <a href="[[SHORT_PERMALINK]]" target="_blank">
                                    <img height="30" src="http://www.mailjet.com/saas-templates-creator/static/img/facebook_white.png" style="border-radius:6px;" width="30" />
                                  </a>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                        <tr>
                          <td style="padding:4px;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#54119F;border-radius:6px;width:30;">
                              <tr>
                                <td style="font-size:0;height:30;vertical-align:middle;width:30;">
                                  <a href="[[SHORT_PERMALINK]]" target="_blank">
                                    <img height="30" src="http://www.mailjet.com/saas-templates-creator/static/img/twitter_white.png" style="border-radius:6px;" width="30" />
                                  </a>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                        <tr>
                          <td style="padding:4px;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#54119F;border-radius:6px;width:30;">
                              <tr>
                                <td style="font-size:0;height:30;vertical-align:middle;width:30;">
                                  <a href="[[SHORT_PERMALINK]]" target="_blank">
                                    <img height="30" src="http://www.mailjet.com/saas-templates-creator/static/img/linkedin_white.png" style="border-radius:6px;" width="30" />
                                  </a>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="font-size:0px;padding:0px 20px 0px 20px;padding-top:0px;padding-bottom:0px;word-break:break-word;">
         
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>
'; 
       
      // Set content-type header for sending HTML email 
      $headers = "MIME-Version: 1.0" . "\r\n"; 
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
       
      // //Send email 
      mail($to, $subject, $htmlContent, $headers);
      
    }

// emial verification link send email 
public function reg_mail($email,$c_password,$v_key) {
      $u_mail = $email;

      $to = $u_mail; 
      $from = 'uavisa.eu'; 
      $subject = "Email verification";
      $u_password  = $c_password;
      $verification_key = $v_key;
       
       $htmlContent = ' 
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
  <title>Verify Your account</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    #outlook a {
      padding: 0;
    }

    .ReadMsgBody {
      width: 100%;
    }

    .ExternalClass {
      width: 100%;
    }

    .ExternalClass * {
      line-height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    p {
      display: block;
      margin: 13px 0;
    }
  </style>
  <style type="text/css">
    @media only screen and (max-width:480px) {
      @-ms-viewport {
        width: 320px;
      }

      @viewport {
        width: 320px;
      }
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet" type="text/css">
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open Sans);
  </style>
  <style type="text/css">
    @media only screen and (min-width:480px) {
      .mj-column-per-100 {
        width: 100% !important;
        max-width: 100%;
      }
    }
  </style>
  <style type="text/css">
    [owa] .mj-column-per-100 {
      width: 100% !important;
      max-width: 100%;
    }
  </style>
  <style type="text/css">
    @media only screen and (max-width:480px) {
      table.full-width-mobile {
        width: 100% !important;
      }

      td.full-width-mobile {
        width: auto !important;
      }
    }
  </style>
</head>

<body style="background-color:#f8f8f8;">
  <div style="background-color:#f8f8f8;">
    <div style="Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="left" style="font-size:0px;padding:0px 0px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;">
                      <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:11px;line-height:22px;text-align:left;color:#797e82;">
                       
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-left:0px;padding-right:0px;padding-top:0px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td style="font-size:0px;padding:10px 25px;padding-top:0px;padding-right:0px;padding-bottom:40px;padding-left:0px;word-break:break-word;">
                      <p style="border-top:solid 7px #54119F;font-size:1;margin:0px auto;width:100%;">
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                        <tbody>
                          <tr>
                            <td style="width:110px;">
                              <img alt="" height="auto" src="http://uavisa.eu/assets/img/UA%20Visa%20LOGO.png" style="border:none;display:block;outline:none;text-decoration:none;height:auto;width:100%;" title="" width="110" />
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          
        </tr>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="center" style="font-size:0px;padding:10px 25px;padding-top:40px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                        <tbody>
                          <tr>
                            <td style="width:300px;">
                              <img alt="" height="auto" src="http://9pl9.mjt.lu/tplimg/9pl9/b/ygjj/t65lu.png" style="border:none;display:block;outline:none;text-decoration:none;height:auto;width:100%;" title="" width="300" />
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:70px;padding-top:30px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                      <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                        <h1 style="text-align:center; color: #000000; line-height:32px">You&apos;re almost there!</h1>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                      <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                        <p style="margin: 10px 0; text-align: center;">Hi Dear, Thank you for signing up to UAVISA.&nbsp;</p>
                        <p style="margin: 10px 0; text-align: center;">To confirm your account, simply click on the button below:</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" vertical-align="middle" style="font-size:0px;padding:10px 25px;padding-top:20px;padding-bottom:20px;word-break:break-word;">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
                        <tr>
                          <td align="center" bgcolor="#54119F" role="presentation" style="border:none;border-radius:100px;cursor:auto;padding:15px 25px 15px 25px;background:#54119F;" valign="middle">
                            <a href="http://linkingcc.com/testing_project/uaviissa/user_verify.php?vkey='.$v_key.'" style="background:#54119F;color:#ffffff;font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;font-weight:normal;line-height:120%;Margin:0;text-decoration:none;text-transform:none;" target="_blank">
                              <b style="font-weight:700"><b style="font-weight:700">Activate My Account</b></b>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                      <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                        <p style="margin: 10px 0; text-align: center;">If the link doesn&rsquo;t work, copy this URL into your browser: <a target="_blank" rel="noopener noreferrer" href="#" style="color:#54119F">http://linkingcc.com/testing_project/uaviissa/user_verify.php?vkey='.$v_key.'</a></p>
                        <p style="margin: 10px 0; text-align: center;"><i style="font-style:normal"><b style="font-weight:700">Welcome!</b></i></p>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:0px;padding-top:20px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="center" style="font-size:0px;padding:10px 25px;padding-bottom:0px;word-break:break-word;">
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                        <tr>
                          <td style="padding:4px;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#54119F;border-radius:6px;width:30;">
                              <tr>
                                <td style="font-size:0;height:30;vertical-align:middle;width:30;">
                                  <a href="[[SHORT_PERMALINK]]" target="_blank">
                                    <img height="30" src="http://www.mailjet.com/saas-templates-creator/static/img/facebook_white.png" style="border-radius:6px;" width="30" />
                                  </a>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                        <tr>
                          <td style="padding:4px;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#54119F;border-radius:6px;width:30;">
                              <tr>
                                <td style="font-size:0;height:30;vertical-align:middle;width:30;">
                                  <a href="[[SHORT_PERMALINK]]" target="_blank">
                                    <img height="30" src="http://www.mailjet.com/saas-templates-creator/static/img/twitter_white.png" style="border-radius:6px;" width="30" />
                                  </a>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                        <tr>
                          <td style="padding:4px;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#54119F;border-radius:6px;width:30;">
                              <tr>
                                <td style="font-size:0;height:30;vertical-align:middle;width:30;">
                                  <a href="[[SHORT_PERMALINK]]" target="_blank">
                                    <img height="30" src="http://www.mailjet.com/saas-templates-creator/static/img/linkedin_white.png" style="border-radius:6px;" width="30" />
                                  </a>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="font-size:0px;padding:0px 20px 0px 20px;padding-top:0px;padding-bottom:0px;word-break:break-word;">
         
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>
'; 
       
      // Set content-type header for sending HTML email 
      $headers = "MIME-Version: 1.0" . "\r\n"; 
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
      mail($to, $subject, $htmlContent, $headers);
      
    }

    // forget password link send function 

    public function forget_pass_mail($forgt_pass_mail,$password_change_link) {
      $u_mail = $forgt_pass_mail;

      $to = $u_mail; 
      $from = 'uavisa.eu'; 
      $subject = "Email verification";
      $u_password  = $c_password;
      $forget_key = $password_change_link;
       
       $htmlContent = ' 
         <!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
  <title>Reset your password</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    #outlook a {
      padding: 0;
    }

    .ReadMsgBody {
      width: 100%;
    }

    .ExternalClass {
      width: 100%;
    }

    .ExternalClass * {
      line-height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    p {
      display: block;
      margin: 13px 0;
    }
  </style>
  <style type="text/css">
    @media only screen and (max-width:480px) {
      @-ms-viewport {
        width: 320px;
      }

      @viewport {
        width: 320px;
      }
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet" type="text/css">
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open Sans);
  </style>
  <style type="text/css">
    @media only screen and (min-width:480px) {
      .mj-column-per-100 {
        width: 100% !important;
        max-width: 100%;
      }
    }
  </style>
  <style type="text/css">
    [owa] .mj-column-per-100 {
      width: 100% !important;
      max-width: 100%;
    }
  </style>
  <style type="text/css">
    @media only screen and (max-width:480px) {
      table.full-width-mobile {
        width: 100% !important;
      }

      td.full-width-mobile {
        width: auto !important;
      }
    }
  </style>
</head>

<body style="background-color:#f8f8f8;">
  <div style="background-color:#f8f8f8;">
    <div style="Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="left" style="font-size:0px;padding:0px 0px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;">
                      <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:11px;line-height:22px;text-align:left;color:#797e82;">
                        
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-left:0px;padding-right:0px;padding-top:0px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td style="font-size:0px;padding:10px 25px;padding-top:0px;padding-right:0px;padding-bottom:40px;padding-left:0px;word-break:break-word;">
                      <p style="border-top:solid 7px #54119F;font-size:1;margin:0px auto;width:100%;">
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                        <tbody>
                          <tr>
                            <td style="width:110px;">
                              <img alt="" height="auto" src="http://uavisa.eu/assets/img/UA%20Visa%20LOGO.png" style="border:none;display:block;outline:none;text-decoration:none;height:auto;width:100%;" title="" width="110" />
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="center" style="font-size:0px;padding:10px 25px;padding-top:40px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                        <tbody>
                          <tr>
                            <td style="width:300px;">
                              <img alt="" height="auto" src="http://9pl9.mjt.lu/tplimg/9pl9/b/yg0q/t65sy.png" style="border:none;display:block;outline:none;text-decoration:none;height:auto;width:100%;" title="" width="300" />
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          
        </tr>
      
                  </table>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:70px;padding-top:30px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                      <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                        <h1 style="text-align:center; color: #000000; line-height:32px">Need to reset your password?Simply click the button lower</h1>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" vertical-align="middle" style="font-size:0px;padding:10px 25px;padding-top:20px;padding-bottom:20px;word-break:break-word;">
                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
                        <tr>
                          <td align="center" bgcolor="#54119F" role="presentation" style="border:none;border-radius:100px;cursor:auto;padding:15px 25px 15px 25px;background:#54119F;" valign="middle">
                            <a href="http://linkingcc.com/testing_project/uaviissa/forget_password.php?forget_pass_key='.$forget_key.'" style="background:#54119F;color:#ffffff;font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;font-weight:normal;line-height:120%;Margin:0;text-decoration:none;text-transform:none;" target="_blank">
                              <b style="font-weight:700"><b style="font-weight:700">Reset Password</b></b>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td align="left" style="font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-right:50px;padding-bottom:0px;padding-left:50px;word-break:break-word;">
                      <div style="font-family:Open Sans, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#797e82;">
                        <p style="margin: 10px 0; text-align: center;">If you did not just try to reset your password, please contact our Support Team to help secure your account.</p>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="Margin:0px auto;max-width:600px;">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;padding-bottom:0px;padding-top:20px;text-align:center;vertical-align:top;">
              <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                  <tr>
                    <td align="center" style="font-size:0px;padding:10px 25px;padding-bottom:0px;word-break:break-word;">
                     
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                        <tr>
                          <td style="padding:4px;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#54119F;border-radius:6px;width:30;">
                              <tr>
                                <td style="font-size:0;height:30;vertical-align:middle;width:30;">
                                  <a href="[[SHORT_PERMALINK]]" target="_blank">
                                    <img height="30" src="http://www.mailjet.com/saas-templates-creator/static/img/facebook_white.png" style="border-radius:6px;" width="30" />
                                  </a>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                        <tr>
                          <td style="padding:4px;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#54119F;border-radius:6px;width:30;">
                              <tr>
                                <td style="font-size:0;height:30;vertical-align:middle;width:30;">
                                  <a href="[[SHORT_PERMALINK]]" target="_blank">
                                    <img height="30" src="http://www.mailjet.com/saas-templates-creator/static/img/twitter_white.png" style="border-radius:6px;" width="30" />
                                  </a>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
                        <tr>
                          <td style="padding:4px;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#54119F;border-radius:6px;width:30;">
                              <tr>
                                <td style="font-size:0;height:30;vertical-align:middle;width:30;">
                                  <a href="[[SHORT_PERMALINK]]" target="_blank">
                                    <img height="30" src="http://www.mailjet.com/saas-templates-creator/static/img/linkedin_white.png" style="border-radius:6px;" width="30" />
                                  </a>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td align="center" style="font-size:0px;padding:0px 20px 0px 20px;padding-top:0px;padding-bottom:0px;word-break:break-word;">
                
                    </td>
                  </tr>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>'; 
       
      // Set content-type header for sending HTML email 
      $headers = "MIME-Version: 1.0" . "\r\n"; 
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
      mail($to, $subject, $htmlContent, $headers);
      
    }
}
 ?>