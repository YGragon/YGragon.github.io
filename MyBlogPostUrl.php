<?php
$urls = array(
    'http://dongxi520.com/2016/07/05/Android%E5%B8%83%E5%B1%80%E4%BD%A0%E6%9C%AA%E7%9F%A5%E7%9A%84%E5%B1%9E%E6%80%A7/',
    'http://dongxi520.com/2016/07/04/Android%E5%9F%BA%E7%A1%80%E5%AD%A6%E4%B9%A0%E8%B5%84%E6%BA%90/',
    'http://dongxi520.com/2016/06/21/JavaWeb%E7%AC%94%E8%AE%B0/',
    'http://dongxi520.com/baidu_verify_n0SC9YZ9l4.html',
    'http://dongxi520.com/2016/06/17/git%E5%91%BD%E4%BB%A4%E8%AE%B0%E5%BD%95/',
    'http://dongxi520.com/2016/06/12/Bolg-With-Hexo/',
    'http://dongxi520.com/2016/06/13/GooglePlay-1/',
    'http://dongxi520.com/guestbook/index.html',
    'http://dongxi520.com/about/index.html',
    'http://dongxi520.com/2016/06/11/hello-world/',
    'http://dongxi520.com/tags/index.html',
    'http://dongxi520.com/categories/index.html',
);
$api = 'http://data.zz.baidu.com/urls?site=dongxi520.com&token=XBMmHBJi7DCQMVhr';
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