$urls = array(
    'http://www.example.com/1.html',
    'http://www.example.com/2.html',
);
$api = 'http://data.zz.baidu.com/urls?site=https://www.upetrol.net&token=NlYlb9Z4EXFXpNM4';
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
						