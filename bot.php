<?php
require_once('./LineBotTiny.php');
$channelAccessToken = '1B8pMUtZdLgdebgTuRrxV3YirCQv91mbXGnxvlTbX7Cxn471Fs0bBgwGVpedxnPKm7tZUWxnMrT2NqCBCLAG8L7r6vtYoZwb3iqRvYr3BZGrZX/mRNFG8lzNbLr5CHO4PWfTicerD5PVHYjC8mpQ4wdB04t89/1O/w1cDnyilFU=';
$channelSecret = '69b2d81ee6e8ff48d2cacdc8c7d8c337';
date_default_timezone_set('Asia/Jakarta');
$client 		= new LINEBotTiny($channelAccessToken, $channelSecret);
$reply 			= '';
$leave 			= false;
$event 			= $client->parseEvents()[0];
$type 			= $event['type']; 
$source     	= $event['source'];
$userId 		= $source['userId'];
$replyToken 	= $event['replyToken'];
$timestamp		= $event['timestamp'];
$message 		= $event['message'];
$messageid 		= $message['id'];


		$userData = null;
		if($source['type'] == "group") {
			$userData = $client->getProfilFromGroup($userId, $source['groupId']);
		}
		else if($source['type'] == "room") {
			$userData = $client->getProfilFromRoom($userId, $source['roomId']);
		}
		else if($source['type'] == "user") {
			$userData = $client->profil($userId);
		}

if($type == 'memberJoined') 
{
	$replyText = "";
	
	$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $replyText
										)
								)
							);
}
else if($type == 'follow') 
{
	$replyText = 'สวัสดีครับ มีอะไรให้ช่วยเหลือพิมพ์ "help"';
	
	$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $replyText
										)
								)
							);
}
else if($type == 'join') 
{
	$replyText = '';
	
	$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $replyText
										)
								)
							);
}
else if($message['type']=='text')
{
	
        $incomingMsg = strtolower($message['text']);
	if(strpos($incomingMsg,"kick") !== false)
        {
	$replyText = '';

		$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $replyText
										)
								)
							);
				$leave = true;
        }
	else if(strpos($incomingMsg,"msg") !== false)
        {
	$replyText = '123 ๑๒๓'.chr(10);
	$replyText .= 'ABC กขค @#$'.chr(10);
		$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $replyText
										)
								)
							);
        }

	
	
	
	
	
	else if(strpos($incomingMsg,"help") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
	
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
	    
  'type' =>  'bubble',
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
      array(
        'type' =>  'text',
        'text' =>  'Help Menu',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'none',
        'contents' => array(
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'message',
              'label' =>  'ดาวน์โหลดไฟล์รายวิชา',
              'text' =>  'รายชื่อวิชาที่มีไฟล์'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'ดูผลสอบเทอมล่าสุด',
               'uri' =>  'https://linebotba.herokuapp.com/1.php'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'กิจกรรมประจำชุดวิชา',
               'uri' =>  'https://linebotba.herokuapp.com/2.php'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'ปฏิทินการศึกษา',
               'uri' =>  'https://linebotba.herokuapp.com/3.php'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'd4lp STOU',
               'uri' =>  'https://linebotba.herokuapp.com/4.php'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'Moodle STOU',
               'uri' =>  'https://linebotba.herokuapp.com/5.php'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'STOU Regis',
               'uri' =>  'https://regis.stou.ac.th'
            )
            )
        )
      )
    )
  )
	                                                )
							)
							)	
							);
        }	

	
	else if(strpos($incomingMsg,"รายชื่อวิชาที่มีไฟล์") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
	
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
	    
  'type' =>  'bubble',
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
      array(
        'type' =>  'text',
        'text' =>  'Subjects List',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'none',
        'contents' => array(
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'message',
              'label' =>  '14211 การเรียนรู้ภาษาอังกฤษด้วยตนเอง',
              'text' =>  'dlfile14111'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'message',
              'label' =>  '14213 การเรียนรู้ภาษาอังกฤษด้วยตนเอง',
              'text' =>  'dlfile14113'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'message',
              'label' =>  '14216 การเรียนรู้ภาษาอังกฤษด้วยตนเอง',
              'text' =>  'dlfile14116'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'message',
              'label' =>  '14215 ภาษาศาสตร์เบื้องต้น',
              'text' =>  'dlfile14215'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'message',
              'label' =>  '14318 ทักษะการแปล',
              'text' =>  'dlfile14318'
            )
            )
        )
      )
    )
  )
	                                                )
							)
							)	
							);
        }		
	
	
	else if(strpos($incomingMsg,"dlfile14111") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
	
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
	    
  'type' =>  'bubble',
  'hero' => array(
    'type' =>  'image',
    'url' =>  'https://itdev.win/14111/14111.jpg',
    'size' =>  'full',
    'aspectRatio' =>  '20:13',
    'aspectMode' =>  'cover'
  ),
	
	    
	    
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
      array(
        'type' =>  'text',
        'text' =>  'Linguistics 14111',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'none',
        'contents' => array(
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่1',
              'uri' =>  'https://itdev.win/14111/1.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่2',
              'uri' =>  'https://itdev.win/14111/2.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่3',
              'uri' =>  'https://itdev.win/14111/3.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่4',
              'uri' =>  'https://itdev.win/14111/4.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่5',
              'uri' =>  'https://itdev.win/14111/5.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่6',
              'uri' =>  'https://itdev.win/14111/6.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่7',
              'uri' =>  'https://itdev.win/14111/7.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่8',
              'uri' =>  'https://itdev.win/14111/8.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่9',
              'uri' =>  'https://itdev.win/14111/9.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่10',
              'uri' =>  'https://itdev.win/14111/10.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่11',
              'uri' =>  'https://itdev.win/14111/11.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่12',
              'uri' =>  'https://itdev.win/14111/12.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่13',
              'uri' =>  'https://itdev.win/14111/13.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่14',
              'uri' =>  'https://itdev.win/14111/14.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่15',
              'uri' =>  'https://itdev.win/14111/15.pdf'
            )
            )
        )
      )
    )
  ),
	                                                )
							)
							)	
							);
	       }
	else if(strpos($incomingMsg,"dlfile14213") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
	
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
	    
  'type' =>  'bubble',
  'hero' => array(
    'type' =>  'image',
    'url' =>  'https://itdev.win/14213/14213.jpg',
    'size' =>  'full',
    'aspectRatio' =>  '20:13',
    'aspectMode' =>  'cover'
  ),
	
	    
	    
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
      array(
        'type' =>  'text',
        'text' =>  'Linguistics 14213',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'none',
        'contents' => array(
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่1',
              'uri' =>  'https://itdev.win/14213/1.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่2',
              'uri' =>  'https://itdev.win/14213/2.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่3',
              'uri' =>  'https://itdev.win/14213/3.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่4',
              'uri' =>  'https://itdev.win/14213/4.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่5',
              'uri' =>  'https://itdev.win/14213/5.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่6',
              'uri' =>  'https://itdev.win/14213/6.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่7',
              'uri' =>  'https://itdev.win/14213/7.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่8',
              'uri' =>  'https://itdev.win/14213/8.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่9',
              'uri' =>  'https://itdev.win/14213/9.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่10',
              'uri' =>  'https://itdev.win/14213/10.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่11',
              'uri' =>  'https://itdev.win/14213/11.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่12',
              'uri' =>  'https://itdev.win/14213/12.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่13',
              'uri' =>  'https://itdev.win/14213/13.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่14',
              'uri' =>  'https://itdev.win/14213/14.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่15',
              'uri' =>  'https://itdev.win/14213/15.pdf'
            )
            )
        )
      )
    )
  ),
	                                                )
							)
							)	
							);
	       }
	else if(strpos($incomingMsg,"dlfile14214") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
	
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
	    
  'type' =>  'bubble',
  'hero' => array(
    'type' =>  'image',
    'url' =>  'https://itdev.win/14214/14214.jpg',
    'size' =>  'full',
    'aspectRatio' =>  '20:13',
    'aspectMode' =>  'cover'
  ),
	
	    
	    
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
      array(
        'type' =>  'text',
        'text' =>  'Linguistics 14214',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'none',
        'contents' => array(
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่1',
              'uri' =>  'https://itdev.win/14214/1.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่2',
              'uri' =>  'https://itdev.win/14214/2.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่3',
              'uri' =>  'https://itdev.win/14214/3.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่4',
              'uri' =>  'https://itdev.win/14214/4.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่5',
              'uri' =>  'https://itdev.win/14214/5.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่6',
              'uri' =>  'https://itdev.win/14214/6.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่7',
              'uri' =>  'https://itdev.win/14214/7.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่8',
              'uri' =>  'https://itdev.win/14214/8.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่9',
              'uri' =>  'https://itdev.win/14214/9.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่10',
              'uri' =>  'https://itdev.win/14214/10.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่11',
              'uri' =>  'https://itdev.win/14214/11.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่12',
              'uri' =>  'https://itdev.win/14214/12.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่13',
              'uri' =>  'https://itdev.win/14214/13.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่14',
              'uri' =>  'https://itdev.win/14214/14.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่15',
              'uri' =>  'https://itdev.win/14214/15.pdf'
            )
            )
        )
      )
    )
  ),
	                                                )
							)
							)	
							);
	       }
	else if(strpos($incomingMsg,"dlfile14215") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
	
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
	    
  'type' =>  'bubble',
  'hero' => array(
    'type' =>  'image',
    'url' =>  'https://itdev.win/14215/14215.jpg',
    'size' =>  'full',
    'aspectRatio' =>  '20:13',
    'aspectMode' =>  'cover'
  ),
	
	    
	    
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
      array(
        'type' =>  'text',
        'text' =>  'Linguistics 14215',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'none',
        'contents' => array(
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่1',
              'uri' =>  'https://itdev.win/14215/1.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่2',
              'uri' =>  'https://itdev.win/14215/2.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่3',
              'uri' =>  'https://itdev.win/14215/3.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่4',
              'uri' =>  'https://itdev.win/14215/4.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่5',
              'uri' =>  'https://itdev.win/14215/5.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่6',
              'uri' =>  'https://itdev.win/14215/6.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่7',
              'uri' =>  'https://itdev.win/14215/7.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่8',
              'uri' =>  'https://itdev.win/14215/8.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่9',
              'uri' =>  'https://itdev.win/14215/9.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่10',
              'uri' =>  'https://itdev.win/14215/10.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่11',
              'uri' =>  'https://itdev.win/14215/11.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่12',
              'uri' =>  'https://itdev.win/14215/12.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่13',
              'uri' =>  'https://itdev.win/14215/13.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่14',
              'uri' =>  'https://itdev.win/14215/14.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่15',
              'uri' =>  'https://itdev.win/14215/15.pdf'
            )
            )
        )
      )
    )
  ),
	                                                )
							)
							)	
							);
	       }
	else if(strpos($incomingMsg,"dlfile14216") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
	
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
	    
  'type' =>  'bubble',
  'hero' => array(
    'type' =>  'image',
    'url' =>  'https://itdev.win/14216/14216.jpg',
    'size' =>  'full',
    'aspectRatio' =>  '20:13',
    'aspectMode' =>  'cover'
  ),
	
	    
	    
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
      array(
        'type' =>  'text',
        'text' =>  'Linguistics 14216',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'none',
        'contents' => array(
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่1',
              'uri' =>  'https://itdev.win/14216/1.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่2',
              'uri' =>  'https://itdev.win/14216/2.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่3',
              'uri' =>  'https://itdev.win/14216/3.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่4',
              'uri' =>  'https://itdev.win/14216/4.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่5',
              'uri' =>  'https://itdev.win/14216/5.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่6',
              'uri' =>  'https://itdev.win/14216/6.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่7',
              'uri' =>  'https://itdev.win/14216/7.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่8',
              'uri' =>  'https://itdev.win/14216/8.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่9',
              'uri' =>  'https://itdev.win/14216/9.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่10',
              'uri' =>  'https://itdev.win/14216/10.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่11',
              'uri' =>  'https://itdev.win/14216/11.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่12',
              'uri' =>  'https://itdev.win/14216/12.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่13',
              'uri' =>  'https://itdev.win/14216/13.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่14',
              'uri' =>  'https://itdev.win/14216/14.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่15',
              'uri' =>  'https://itdev.win/14216/15.pdf'
            )
            )
        )
      )
    )
  ),
	                                                )
							)
							)	
							);
	       }
	else if(strpos($incomingMsg,"dlfile14317") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
	
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
	    
  'type' =>  'bubble',
  'hero' => array(
    'type' =>  'image',
    'url' =>  'https://itdev.win/14317/14317.jpg',
    'size' =>  'full',
    'aspectRatio' =>  '20:13',
    'aspectMode' =>  'cover'
  ),
	
	    
	    
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
      array(
        'type' =>  'text',
        'text' =>  'Linguistics 14317',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'none',
        'contents' => array(
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่1',
              'uri' =>  'https://itdev.win/14317/1.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่2',
              'uri' =>  'https://itdev.win/14317/2.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่3',
              'uri' =>  'https://itdev.win/14317/3.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่4',
              'uri' =>  'https://itdev.win/14317/4.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่5',
              'uri' =>  'https://itdev.win/14317/5.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่6',
              'uri' =>  'https://itdev.win/14317/6.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่7',
              'uri' =>  'https://itdev.win/14317/7.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่8',
              'uri' =>  'https://itdev.win/14317/8.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่9',
              'uri' =>  'https://itdev.win/14317/9.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่10',
              'uri' =>  'https://itdev.win/14317/10.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่11',
              'uri' =>  'https://itdev.win/14317/11.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่12',
              'uri' =>  'https://itdev.win/14317/12.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่13',
              'uri' =>  'https://itdev.win/14317/13.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่14',
              'uri' =>  'https://itdev.win/14317/14.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่15',
              'uri' =>  'https://itdev.win/14317/15.pdf'
            )
            )
        )
      )
    )
  ),
	                                                )
							)
							)	
							);
	       }
	else if(strpos($incomingMsg,"dlfile14318") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
	
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
	    
  'type' =>  'bubble',
  'hero' => array(
    'type' =>  'image',
    'url' =>  'https://itdev.win/14318/14318.jpg',
    'size' =>  'full',
    'aspectRatio' =>  '20:13',
    'aspectMode' =>  'cover'
  ),
	
	    
	    
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
      array(
        'type' =>  'text',
        'text' =>  'Linguistics 14318',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'none',
        'contents' => array(
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่1',
              'uri' =>  'https://itdev.win/14318/1.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่2',
              'uri' =>  'https://itdev.win/14318/2.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่3',
              'uri' =>  'https://itdev.win/14318/3.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่4',
              'uri' =>  'https://itdev.win/14318/4.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่5',
              'uri' =>  'https://itdev.win/14318/5.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่6',
              'uri' =>  'https://itdev.win/14318/6.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่7',
              'uri' =>  'https://itdev.win/14318/7.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่8',
              'uri' =>  'https://itdev.win/14318/8.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่9',
              'uri' =>  'https://itdev.win/14318/9.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่10',
              'uri' =>  'https://itdev.win/14318/10.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่11',
              'uri' =>  'https://itdev.win/14318/11.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่12',
              'uri' =>  'https://itdev.win/14318/12.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่13',
              'uri' =>  'https://itdev.win/14318/13.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่14',
              'uri' =>  'https://itdev.win/14318/14.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่15',
              'uri' =>  'https://itdev.win/14318/15.pdf'
            )
            )
        )
      )
    )
  ),
	                                                )
							)
							)	
							);
	       }
	else if(strpos($incomingMsg,"dlfile14320") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
	
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
	    
  'type' =>  'bubble',
  'hero' => array(
    'type' =>  'image',
    'url' =>  'https://itdev.win/14320/14320.jpg',
    'size' =>  'full',
    'aspectRatio' =>  '20:13',
    'aspectMode' =>  'cover'
  ),
	
	    
	    
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
      array(
        'type' =>  'text',
        'text' =>  'Linguistics 14320',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'none',
        'contents' => array(
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่1',
              'uri' =>  'https://itdev.win/14320/1.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่2',
              'uri' =>  'https://itdev.win/14320/2.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่3',
              'uri' =>  'https://itdev.win/14320/3.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่4',
              'uri' =>  'https://itdev.win/14320/4.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่5',
              'uri' =>  'https://itdev.win/14320/5.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่6',
              'uri' =>  'https://itdev.win/14320/6.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่7',
              'uri' =>  'https://itdev.win/14320/7.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่8',
              'uri' =>  'https://itdev.win/14320/8.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่9',
              'uri' =>  'https://itdev.win/14320/9.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่10',
              'uri' =>  'https://itdev.win/14320/10.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่11',
              'uri' =>  'https://itdev.win/14320/11.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่12',
              'uri' =>  'https://itdev.win/14320/12.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่13',
              'uri' =>  'https://itdev.win/14320/13.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่14',
              'uri' =>  'https://itdev.win/14320/14.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่15',
              'uri' =>  'https://itdev.win/14320/15.pdf'
            )
            )
        )
      )
    )
  ),
	                                                )
							)
							)	
							);
	       }
	else if(strpos($incomingMsg,"dlfile14421") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
	
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
	    
  'type' =>  'bubble',
  'hero' => array(
    'type' =>  'image',
    'url' =>  'https://itdev.win/14421/14421.jpg',
    'size' =>  'full',
    'aspectRatio' =>  '20:13',
    'aspectMode' =>  'cover'
  ),
	
	    
	    
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
      array(
        'type' =>  'text',
        'text' =>  'Linguistics 14421',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'none',
        'contents' => array(
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่1',
              'uri' =>  'https://itdev.win/14421/1.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่2',
              'uri' =>  'https://itdev.win/14421/2.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่3',
              'uri' =>  'https://itdev.win/14421/3.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่4',
              'uri' =>  'https://itdev.win/14421/4.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่5',
              'uri' =>  'https://itdev.win/14421/5.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่6',
              'uri' =>  'https://itdev.win/14421/6.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่7',
              'uri' =>  'https://itdev.win/14421/7.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่8',
              'uri' =>  'https://itdev.win/14421/8.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่9',
              'uri' =>  'https://itdev.win/14421/9.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่10',
              'uri' =>  'https://itdev.win/14421/10.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่11',
              'uri' =>  'https://itdev.win/14421/11.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่12',
              'uri' =>  'https://itdev.win/14421/12.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่13',
              'uri' =>  'https://itdev.win/14421/13.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่14',
              'uri' =>  'https://itdev.win/14421/14.pdf'
            )
            ),
          array(
            'type' =>  'button',
            'action' => array(
              'type' =>  'uri',
              'label' =>  'หน่วยที่15',
              'uri' =>  'https://itdev.win/14421/15.pdf'
            )
            )
        )
      )
    )
  ),
	                                                )
							)
							)	
							);
	       }
	else if(strpos($incomingMsg,"groupid") !== false)
	{
		if($userData != null) {
			$replyText = "Hi ".$source['groupId'];
			$reply = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => $replyText
									)
							)
						);
		}
	}
}

if($reply != "") {
				
		$client->replyMessage($reply);
	 
	 	if($leave) {
	 		if($source['type'] == "group") {
				$client->leaveGroup($source['groupId']);
			}
			else if($source['type'] == "room") {
				$client->leaveRoom($source['roomId']);
			} 
	 	}	
}
?>
