<?php
//sender test

$url = "/SMSSend?user=inbox1&pass=ufmv6nhd&smsfrom=KPNUTS%20&smsto=447828292936&smsmsg=Sorry%20you're%20too%20early%20to%20enter.
		%20Please%20keep%20your%20pack%20and%20try%20again%20when%20the%20promotion%20%20starts%20on%201st%20May.
		%20You%20can%20also%20visit%20www.kpnuts.com%20to%20enter.";

$url_test = "/ub/kp/sms/receive.php?name=craig";

$fp = fsockopen("www.inboxwork.co.uk", 80, $errno, $errstr, 30);

if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {
    $out = "GET " . $url_test. " HTTP/1.1\r\n";
    $out .= "Host: www.inboxwork.co.uk\r\n";
    $out .= "Connection: Close\r\n\r\n";
	
	echo $out;
    fwrite($fp, $out);
    while (!feof($fp)) {
        echo fgets($fp, 1024);
    }
    fclose($fp);
}
?>