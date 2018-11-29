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
	$replyText = 'พิมพ์ขอหวย';
	
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
	if(strpos($incomingMsg,"id") !== false)
        {
	        $replyText = "Hi ".$source['userId'];
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
	else if(strpos($incomingMsg,"14215") !== false)
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
        'text' =>  'ภาษาศาสตร์เบื้องต้น',
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

	   
  'footer' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'contents' => array(
      array(
        'type' =>  'spacer',
        'size' =>  'xxl'
      )
    )
  )
	                                                )
							)
							)	
							);
	       }
	else if(strpos($incomingMsg,"groupid") !== false)
	{
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
