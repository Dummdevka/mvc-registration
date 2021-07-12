
<h1>Main page</h1>
<?php
$url = 'https://www.breakingbadapi.com/api/';
$opt = [
    'type' => 'quote',
    '' => 'random',
];
$path = implode('/', $opt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url . $path);

$res = curl_exec($ch);
$quote = json_decode($res);
//echo '<h3>Main Page</h3>
//<br>';
echo $quote[0]->author . ':';
//print_r($quote);
echo '<br>';
echo '<q>' . $quote[0]->quote . '</q>';
