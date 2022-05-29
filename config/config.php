<?php

	define('__ROOT__', $_SERVER['DOCUMENT_ROOT']);

    session_start();

	require_once __ROOT__ . '/config/db_config.php';
    require_once __ROOT__ . '/lib/rb.php';

   	date_default_timezone_set('Europe/Kiev');

   	R::setup("mysql:host={$db_connect['host']};dbname={$db_connect['dbname']}", $db_connect['user'], $db_connect['password']);
   	
   	$visit = R::dispense('visits');
	   	$visit->ip = $_SERVER['REMOTE_ADDR'];
	   	$visit->info = $_SERVER['HTTP_USER_AGENT'];
	   	$visit->path = $_SERVER['REQUEST_URI'];
	   	$visit->date = date("Y-m-d H:i:s");
   	R::store($visit);
    

    // $_SERVER
    // Array
    // (
    //     [HTTPS] => on
    //     [SSL] => on
    //     [UNIQUE_ID] => YmqzAoMfboWxDeVvAfvYWgAAAAw
    //     [VH_GECOS] => 70

    //     [VH_PATH] => /home/vol2_1/epizy.com/epiz_31398493/htdocs
    //     [SERVER_ROOT] => /home/vol2_1/epizy.com/epiz_31398493/htdocs
    //     [PHP_DOCUMENT_ROOT] => /home/vol2_1/epizy.com/epiz_31398493/htdocs
    //     [PATH] => /opt/rh/httpd24/root/usr/bin:/opt/rh/httpd24/root/usr/sbin:/sbin:/usr/sbin:/bin:/usr/bin
    //     [HTTP_HOST] => plotva228.rf.gd
    //     [HTTP_X_FORWARDED_PROTO] => https
    //     [HTTP_X_REAL_IP] => 193.31.40.42
    //     [HTTP_X_FORWARDED_FOR] => 193.31.40.42
    //     [HTTP_CONNECTION] => close
    //     [HTTP_USER_AGENT] => Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:99.0) Gecko/20100101 Firefox/99.0
    //     [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8
    //     [HTTP_ACCEPT_LANGUAGE] => ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3
    //     [HTTP_ACCEPT_ENCODING] => gzip, deflate, br
    //     [HTTP_DNT] => 1
    //     [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
    //     [HTTP_SEC_FETCH_DEST] => document
    //     [HTTP_SEC_FETCH_MODE] => navigate
    //     [HTTP_SEC_FETCH_SITE] => cross-site
    //     [HTTP_CACHE_CONTROL] => max-age=0
    //     [HTTP_COOKIE] => __test=91be4b31ffbeec92a078a658909c935f
    //     [LD_LIBRARY_PATH] => /opt/rh/httpd24/root/usr/lib64
    //     [SERVER_SIGNATURE] => 
    //     [SERVER_SOFTWARE] => Apache
    //     [SERVER_NAME] => plotva228.rf.gd
    //     [SERVER_ADDR] => 127.0.0.7
    //     [SERVER_PORT] => 443
    //     [REMOTE_ADDR] => 193.31.40.42
    //     [DOCUMENT_ROOT] => /home/vol2_1/epizy.com/epiz_31398493/htdocs
    //     [REQUEST_SCHEME] => https
    //     [CONTEXT_PREFIX] => 
    //     [CONTEXT_DOCUMENT_ROOT] => /home/vol2_1/epizy.com/epiz_31398493/htdocs
    //     [SERVER_ADMIN] => root@foo.tld
    //     [SCRIPT_FILENAME] => /home/vol2_1/epizy.com/epiz_31398493/htdocs/index.php
    //     [REMOTE_PORT] => 33338
    //     [GATEWAY_INTERFACE] => CGI/1.1
    //     [SERVER_PROTOCOL] => HTTP/1.0
    //     [REQUEST_METHOD] => GET
    //     [QUERY_STRING] => 
    //     [REQUEST_URI] => /
    //     [SCRIPT_NAME] => /index.php
    //     [PHP_SELF] => /index.php
    //     [REQUEST_TIME_FLOAT] => 1651159810.38
    //     [REQUEST_TIME] => 1651159810
    // )