<?php
require_once('./LineBotTiny.php');
$channelAccessToken = 'Token';
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
	$n1 = mt_rand(100000,999999);
        $item1 = (string)$n1;
	$nf3 = mt_rand(100,999);
        $item2 = (string)$nf3;
	$nb3 = mt_rand(100,999);
        $item3 = (string)$nb3;
	$nb2 = mt_rand(00,99);
        $item4 = (string)$nb2;
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
	$replyText = "Hi";
	
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
	if(strpos($incomingMsg,"999") !== false)
        {
	        $replyText = "Hi ".$source['userId'];
		$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $userData
										)
								)
							);
		$leave = true;
        }
	else if(strpos($incomingMsg,"ขอหวย") !== false)
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
    'url' =>  'https://i.ytimg.com/vi/taNCBWzkgWs/maxresdefault.jpg',
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
        'text' =>  'เลขเด็ดงวด 1 ธันวาคม 61',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
	    
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'sm',
        'contents' => array(
		
		
          array(
            'type' =>  'box',
            'layout' =>  'baseline',
            'contents' => array(
              array(
                'type' =>  'text',
                'text' =>  'รางวัลที่ 1',
                'weight' =>  'bold',
                'margin' =>  'sm',
                'flex' => 0
              ),
              array(
                'type' =>  'text',
                'text' =>  $item1,
                'size' =>  'sm',
                'weight' =>  'bold',
                'align' =>  'end',
                'color' =>  '#000000'
              )
            )
          ),	
          array(
            'type' =>  'box',
            'layout' =>  'baseline',
            'contents' => array(
              array(
                'type' =>  'text',
                'text' =>  'เลขหน้า 3 ตัว',
                'weight' =>  'bold',
                'margin' =>  'sm',
                'flex' => 0
              ),
              array(
                'type' =>  'text',
                'text' =>  $item2,
                'size' =>  'sm',
                'weight' =>  'bold',
                'align' =>  'end',
                'color' =>  '#000000'
              )
            )
          ),	
          array(
            'type' =>  'box',
            'layout' =>  'baseline',
            'contents' => array(
              array(
                'type' =>  'text',
                'text' =>  'เลขท้าย 3 ตัว',
                'weight' =>  'bold',
                'margin' =>  'sm',
                'flex' => 0
              ),
              array(
                'type' =>  'text',
                'text' =>  $item3,
                'size' =>  'sm',
                'weight' =>  'bold',
                'align' =>  'end',
                'color' =>  '#000000'
              )
            )
          ),
          array(
            'type' =>  'box',
            'layout' =>  'baseline',
            'contents' => array(
              array(
                'type' =>  'text',
                'text' =>  'เลขท้าย 2 ตัว',
                'weight' =>  'bold',
                'margin' =>  'sm',
                'flex' => 0
              ),
              array(
                'type' =>  'text',
                'text' =>  $item4,
                'size' =>  'sm',
                'weight' =>  'bold',
                'align' =>  'end',
                'color' =>  '#000000'
              )
            )
          )
		
        )
      ),
      array(
        'type' =>  'text',
        'text' =>  'สำนักอาจารย์คง',
        'wrap' => true,
        'color' =>  '#aaaaaa',
        'size' =>  'xxs'
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
