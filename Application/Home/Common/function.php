<?php
/**
 * 文件名：function.php
 * 作者: Min
 * 日期时间: 2016/8/1  16:37
 * 描述：
 */

function p($array){
    dump($array, 1, '<pre>', 0);
}

/*
 * get 方法
 */
function get($url, $param = array()){
    if (!is_array($param)) {
        throw new Exception("参数必须为array");
    }
    $p = '';
    foreach ($param as $key => $value) {
        $p = $p.$key.'='.$value.'&';
    }
    if (preg_match('/\?[\d\D]+/', $url)) {//matched ?c
        $p = '&'.$p;
    } else if (preg_match('/\?$/', $url)) {//matched ?$
        $p = $p;
    } else {
        $p = '?'.$p;
    }
    $p = preg_replace('/&$/', '', $p);
    $url = $url.$p;
    //echo $url;
    $httph = curl_init($url);
    curl_setopt($httph, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($httph, CURLOPT_SSL_VERIFYHOST, 1);
    curl_setopt($httph, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($httph, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)");

    curl_setopt($httph, CURLOPT_HEADER, 0);
    curl_setopt($httph, CURLOPT_CONNECTTIMEOUT, 3);
//    curl_setopt($httph,CURLOPT_CONNECTTIMEOUT_MS,3);
    $rst = curl_exec($httph);
    curl_close($httph);
    return $rst;
}

/*
 * post方法
 */
function post($url, $param = array()){
    if (!is_array($param)) {
        throw new Exception("参数必须为array");
    }
    $httph = curl_init($url);
    curl_setopt($httph, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($httph, CURLOPT_SSL_VERIFYHOST, 1);
    curl_setopt($httph, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($httph, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)");
    curl_setopt($httph, CURLOPT_POST, 1);//设置为POST方式
    curl_setopt($httph, CURLOPT_POSTFIELDS, $param);
    curl_setopt($httph, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($httph, CURLOPT_HEADER, 1);
    $rst = curl_exec($httph);
    curl_close($httph);
    return $rst;
}

/**
 * 网络请求
 * @param $url
 * @param null $data
 * @return mixed
 */
function https_request($url, $data = NULL){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty ($data)) {
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}

/**
 * 向V3的WebApi发送POST请求
 * @param $component string 构件名
 * @param $method string 方法名
 * @param null $data array 参数array
 * @return array|mixed json对象
 */
function postToV3WebAPI($component, $method, $data = NULL){
    $postUrl = C('WEBAPI_URL').$component.'/'.$method;
    $result = json_decode(https_request($postUrl, $data),true);
    if (is_null($result)) {
        return array('success' => 0, 'msg' => '_404找不到该WebAPI或者服务器未开启');
    } else {
        if ($result['error'] == 1 || $result['success'] == 0) {
            echo $result.msg;
            return array('success' => 0, 'msg' => $result['msg']);
        }
        return $result;
    }
}


?>