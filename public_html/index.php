<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>My food Html</title>
    </head>
    <body>
        
        
        <?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://test-automationapi.microbiz.com/gettestoauth",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"grant_type\"\r\n\r\nclient_credentials\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
  CURLOPT_HTTPHEADER => array(
    "authorization: Basic TWljcm9iaXpXZWJzaXRlVGVzdENsaWVudDpNaWNyb2JpeldlYnNpdGVUZXN0Q2xpZW50U2VjcmV0",
    "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>
        <section class="section-form">
            <div class="row">
                <h2> We're happy to hear from you </h2>
            </div>
            <div class="row">
                <form method="POST" action="https://hetz-automationapi-560528.microbiz.com/instance-manager" class="contact-form">
                    <div class="row">
                        <div class="col span-2-of-3">
                            <input type="text" name="instance_type" id="instance_type" placeholder="instance_type" required> </div>
                        <div class="col span-2-of-3">                           
                            <input type="text" name="instance_name" id="instance_name" placeholder="instance_name" required>
</div>
                        <div class="col span-2-of-3">                            
                            <input type="email" name="admin_email" id="admin_email" placeholder="admin_email" required> 
                            </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="admin_first_name" id="admin_first_name" placeholder="admin_first_name" required> 
                            </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="admin_last_name" id="admin_last_name" placeholder="admin_last_name" required>  
                            </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="username" id="username" placeholder="username" required>  
                            </div>
                        <div class="col span-2-of-3">
                            <input type="password" name="password" id="password" placeholder="password" required>  
                            </div>
                        <div class="col span-2-of-3">
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="confirm_password" required>
</div>
                        <div class="col span-2-of-3">                            
                            <input type="text" name="country_code" id="country_code" placeholder="country_code" >  
                            </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="default_time_zone" id="default_time_zone" placeholder="default_time_zone"> 
                            </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="store_name" id="store_name" placeholder="store_name" >                            
                        </div>
                    </div>
                            <div class="col span-2-of-3">
                                <input type="submit" value="Send it!">
                            </div>
                </form>
            </div>
        </section>
    </body>
</html>
<!---------
/*
Request URL:https://hetz-automationapi-560528.microbiz.com/instance-manager?instance_type=shakil&instance_type=Hossain&admin_email=shakilaust81%40gmail.com&admin_first_name=Shakil&admin_last_name=hossain&username=shakilhossain&password=123456789&confirm_password=123456789&country_code=AM&default_time_zone=Asia&store_name=test+
*/

--------->