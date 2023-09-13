

<?php 

$site="https://www.upetrol.net";
$token='NlYlb9Z4EXFXpNM4';

$urls = array(
    'https://www.upetrol.net/devpc/product/detail?item_id=3104',
    'https://www.upetrol.net/devpc/product/detail?item_id=1600',
);
$api = 'http://data.zz.baidu.com/urls?site='.$site.'&token='.$token;
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;

?>
						