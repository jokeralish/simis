<?php
/*
copyright @ medantechno.com
Modified by Ilyasa
2017
*/
require_once('./line_class.php');
require_once('./unirest-php-master/src/Unirest.php');
$channelAccessToken = 'rGLmU7kWFFSW7+2K64LofStlXbOkKPE0ahpWAzt/qIjBpKhhgC6ViTRCNJyN2Iv8GBuBmzPncbsmrDGP7SH0SFiNE+KZ3texYrirn4/4pnIefVgNEpSJIo0oko2rqJmOg0/+8VX/AIn4ZQEhzuNNBgdB04t89/1O/w1cDnyilFU='; //sesuaikan 
$channelSecret = '5f6a60f6771c29b326a998965f391580';//sesuaikan

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$userId 	= $client->parseEvents()[0]['source']['userId'];
$replyToken = $client->parseEvents()[0]['replyToken'];
$message 	= $client->parseEvents()[0]['message'];
$profil = $client->profil($userId);
$pesan_datang = $message['text'];
if ($type == 'join') {
    $text = "Makasih dh invite aku ke grup";
    $text .= "silahkan tambahkan aku sebagai teman untuk menikmati fitur lengkapnya\n";
    $balas = array(
        'replyToken' => $replyToken,
        'messages' => array(
            array(
                'type' => 'text',
                'text' => $text
            )
        )
    );
}
//show menu, saat join dan command /menu
if ($command == '/menu') {
    $balas = array(
        'replyToken' => $replyToken,
        'messages' => array(
          array (
  'type' => 'template',
  'altText' => 'Anda di sebut',
  'template' =>
  array (
    'type' => 'carousel',
    'columns' =>
    array (
        0 =>
      array (
        'thumbnailImageUrl' => 'https://pedestalsearch.com/wp-content/uploads/2016/04/video-seo-youtube-logo.png',
        'imageBackgroundColor' => '#00FFFF',
        'title' => 'YOUTUBE',
        'text' => 'Temukan Vidio Kesukaanmu',
        'defaultAction' =>
        array (
          'type' => 'uri',
          'label' => 'View detail',
          'uri' => 'http://example.com/page/123',
        ),
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Show me',
            'text' => 'Ketik /youtube <judul vidio>',
          ),
        ),
      ),
       1 =>
      array (
        'thumbnailImageUrl' => 'https://seeklogo.com/images/T/twitter-2012-negative-logo-5C6C1F1521-seeklogo.com.png',
        'imageBackgroundColor' => '#00FFFF',
        'title' => 'TWITTER',
        'text' => 'Mencari Informasi Akun Twitter',
        'defaultAction' =>
        array (
          'type' => 'uri',
          'label' => 'View detail',
          'uri' => 'http://example.com/page/123',
        ),
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Show me',
            'text' => 'Ketik /twitter <username>',
          ),
        ),
      ),
      2 =>
      array (
        'thumbnailImageUrl' => 'https://mirror.umd.edu/xbmc/addons/gotham/plugin.audio.soundcloud/icon.png',
        'imageBackgroundColor' => '#00FFFF',
        'title' => 'SOUND CLOUD',
        'text' => 'Mencari Dan Unduh Musik Di SoundCloud',
        'defaultAction' =>
        array (
          'type' => 'uri',
          'label' => 'View detail',
          'uri' => 'http://example.com/page/123',
        ),
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Show me',
            'text' => 'Ketik /soundcloud <judul lagu>',
          ),
        ),
      ),
      3 =>
      array (
        'thumbnailImageUrl' => 'https://1c7qp243xy9g1qeffp1k1nvo-wpengine.netdna-ssl.com/wp-content/uploads/2016/03/instagram_logo.jpg',
        'imageBackgroundColor' => '#00FFFF',
        'title' => 'INSTAGRAM',
        'text' => 'Menemukan Informasi Akun Instagram Berdasarkan Keyword',
        'defaultAction' =>
        array (
          'type' => 'uri',
          'label' => 'View detail',
          'uri' => 'http://example.com/page/123',
        ),
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Show me',
            'text' => 'Ketik /instagram <username>',
          ),
        ),
      ),
      4 =>
      array (
        'thumbnailImageUrl' => 'https://unnecessaryexclamationmark.files.wordpress.com/2016/05/myanimelist-logo.jpg',
        'imageBackgroundColor' => '#00FFFF',
        'title' => 'ANIME SEARCH',
        'text' => 'Mencari Informasi Anime Berdasarkan Keyword',
        'defaultAction' =>
        array (
          'type' => 'uri',
          'label' => 'View detail',
          'uri' => 'http://example.com/page/123',
        ),
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Show me',
            'text' => 'Ketik /anime <judul anime>',
          ),
        ),
      ),
      5 =>
      array (
        'thumbnailImageUrl' => 'https://is3-ssl.mzstatic.com/image/thumb/Purple62/v4/cc/68/6c/cc686c29-ffd2-5115-2b97-c4821b548fe3/AppIcon-1x_U007emarketing-85-220-6.png/246x0w.jpg',
        'imageBackgroundColor' => '#00FFFF',
        'title' => 'PRAYTIME',
        'text' => 'Mengetahui Jadwal Shalat Wilayah Indonesia',
        'defaultAction' =>
        array (
          'type' => 'uri',
          'label' => 'View detail',
          'uri' => 'http://example.com/page/123',
        ),
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Show me',
            'text' => 'Ketik /shalat <nama kota>',
          ),
        ),
      ),
      6 =>
      array (
        'thumbnailImageUrl' => 'https://i.pinimg.com/originals/d7/d8/a5/d7d8a5c1017dff37a359c95e88e0897b.jpg',
        'imageBackgroundColor' => '#00FFFF',
        'title' => 'FANSIGN ANIME',
        'text' => 'Membuat FS Anime Berdasarkan Keyword',
        'defaultAction' =>
        array (
          'type' => 'uri',
          'label' => 'View detail',
          'uri' => 'http://example.com/page/123',
        ),
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Show me',
            'text' => 'Ketik /fansign <text nya>',
          ),
        ),
      ),
      7 =>
      array (
        'thumbnailImageUrl' => 'https://taisy0.com/wp-content/uploads/2015/07/Google-Maps.png',
        'imageBackgroundColor' => '#00FFFF',
        'title' => 'GOOGLEMAP',
        'text' => 'Mengetahui Lokasi Dan Koordinat Nama Tempat',
        'defaultAction' =>
        array (
          'type' => 'uri',
          'label' => 'View detail',
          'uri' => 'http://example.com/page/123',
        ),
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Show me',
            'text' => 'Ketik /location <nama tempat>',
          ),
        ),
      ),
      8 =>
      array (
        'thumbnailImageUrl' => 'https://st3.depositphotos.com/3921439/12696/v/950/depositphotos_126961774-stock-illustration-the-tv-icon-television-and.jpg',
        'imageBackgroundColor' => '#00FFFF',
        'title' => 'TELEVISION',
        'text' => 'Mencari Jadwal Acara Televisi Indonesia & Jakarta',
        'defaultAction' =>
        array (
          'type' => 'uri',
          'label' => 'View detail',
          'uri' => 'http://example.com/page/123',
        ),
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Show me',
            'text' => 'Ketik /jadwaltv <channel tv>',
          ),
        ),
      ),
      9 =>
      array (
        'thumbnailImageUrl' => 'https://4vector.com/i/free-vector-cartoon-weather-icon-05-vector_018885_cartoon_weather_icon_05_vector.jpg',
        'imageBackgroundColor' => '#00FFFF',
        'title' => 'WEATHER STATUS',
        'text' => 'Mengetahui Prakiraan Cuaca Seluruh Dunia',
        'defaultAction' =>
        array (
          'type' => 'uri',
          'label' => 'View detail',
          'uri' => 'http://example.com/page/222',
        ),
        'actions' =>
        array (
          0 =>
          array (
            'type' => 'message',
            'label' => 'Show me',
            'text' => 'Ketik /cuaca <nama kota>',
          ),
        ),
      ),
    ),
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
  ),
)
)
);
}
if($message['type']=='contact')
{	
	$balas = array(
							'UserID' => $profil->userId,	
                                                        'replyToken' => $replyToken,							
							'messages' => array(
								array(
										'type' => 'text',									
										'text' => 'siapa itu'										
									
									)
							)
						);
						
}
else
$pesan=str_replace(" ", "%20", $pesan_datang);
$key = 'f1830f11-af68-49ef-bbc8-c4308cbf4d20'; //API SimSimi
$url = 'http://sandbox.api.simsimi.com/request.p?key='.$key.'&lc=id&ft=1.0&text='.$pesan;
$json_data = file_get_contents($url);
$url=json_decode($json_data,1);
$diterima = $url['response'];
if($message['type']=='text')
{
if($url['result'] != 100)
	{
		
		
		$balas = array(
							'UserID' => $profil->userId,
                                                        'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Maaf '.$profil->displayName.' lagi puasa chat.'
									)
							)
						);
				
	}
	else{
		$balas = array(
							'UserID' => $profil->userId,
                                                        'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => ''.$diterima.''
									)
							)
						);
						
	}
}
 
$result =  json_encode($balas);
file_put_contents('./reply.json',$result);
$client->replyMessage($balas);
