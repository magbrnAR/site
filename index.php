<!DOCTYPE html>
<html>
<body>
<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://daftsex.com/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: daftsex.com';
$headers[] = 'Cache-Control: max-age=0';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'Sec-Fetch-Site: none';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'Cookie: ppu_main_a59632dda777535e591fa2e7dde66a93=1; ppu_exp_a59632dda777535e591fa2e7dde66a93=1634473037015; dom3ic8zudi28v8lr6fgphwffqoz0j6c=5e4e22dc-f3f6-477b-8f76-5740cef76778%3A2%3A1; ppu_show_on_a59632dda777535e591fa2e7dde66a93=4; total_count_a59632dda777535e591fa2e7dde66a93=1; ppu_sub_a59632dda777535e591fa2e7dde66a93=1; ppu_delay_a59632dda777535e591fa2e7dde66a93=1; ext_on=1';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
<iframe href=$result/>
?>
</body>
</html>
