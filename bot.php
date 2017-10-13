<?php
$access_token = '0vAGpxZG7+30kW017m20c4MbGes89RLuH9TgE2sEmT/6Boz4ZEyUUsdK63kae3MEeMe1HEnUoNj6F2o6e/DtdoYrt0Lkm4mYESRfyw9/LJdpDcNvxfAms4DUCGN3iEWO+3W4LAFbFptmDe+r2dofjgdB04t89/1O/w1cDnyilFU=';
$roomToken = 'U3282f479864b26d1efd54b16de07a8dc';
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		$join = 0;
		if ($event['type'] == 'join'){
			$join = 1;
		}
		if ( ($event['type'] == 'message' && $event['message']['type'] == 'text' ) || $join == 1) {
			// Get text sent
			
			$question = [
				0 => [
					'keywords' => 'ดีจ้า',
					'ans' => 'สวัสดีคร๊อป'
				],
				1 => [
					'keywords' => 'ไฮ',
					'ans' => 'ไฮ...อีย์'
				],
				2 => [
					'keywords' => 'เหงา',
					'ans' => 'เหงา ๆ ก็คุยกับเฮียได้นะ'
				],
				3 => [
					'keywords' => 'รัก',
					'ans' => 'เฮียก็ดรั๊กนุชนะ'
				],
				4 => [
					'keywords' => 'ดรั๊ก',
					'ans' => 'ดรั๊กนุชก็จัง'
				],
				5 => [
					'keywords' => 'นม',
					'ans' => 'รูปเฮียยังไม่พร้อม นุชไปเสิร์จกูเกิ้ลดูเองก่อนนะคร๊อป'
				],
				6 => [
					'keywords' => 'ห่อหมก',
					'ans' => 'รูปเฮียยังไม่พร้อม นุชหากินเองไปก่อนนะคร๊อป'
				],
				7 => [
					'keywords' => '55',
					'ans' => '555'
				],
				8 => [
					'keywords' => 'จุ๊ฟ',
					'ans' => 'จุ๊ฟๆๆ'
				],
				9 => [
					'keywords' => 'กอด',
					'ans' => 'กอดกัน จุ๊ฟกัน'
				],
				10 => [
					'keywords' => 'โหวต',
					'ans' => 'ขอบคุณที่โหวตเฮียนะคร๊อป http://www.mtvema.com/en-asia/artists/9zo3mg/palitchoke-ayanaputra'
				],
				11 => [
					'keywords' => 'MTV',
					'ans' => 'จิ๋มเลยคร๊อป http://www.mtvema.com/en-asia/artists/9zo3mg/palitchoke-ayanaputra'
				],
				12 => [
					'keywords' => 'เพลง',
					'ans' => 'เงาะๆ กัน https://www.youtube.com/watch?v=uTrYnvMSuBE'
				],
				13 => [
					'keywords' => 'ตุ่น',
					'ans' => 'ต้องให้ได้วันละหมื่นตัวนะคร๊อป'	
				],
				14 => [
					'keywords' => 'ม่วง',
					'ans' => 'วันนี้นุช จิ๋มม่วง หรือยัง'
				],
				15 => [
					'keywords' => 'การบ้าน',
					'ans' => 'ใครเกินมีนมารับรางวัลที่เฮียเลยคร๊อป จุ๊ฟๆ'
				],
				16 => [
					'keywords' => 'ตุ่น',
					'ans' => 'ต้องให้ได้วันละหมื่นตัวนะคร๊อป'
				],
				17 => [
					'keywords' => 'บอท',
					'ans' => 'ใช่ครับ เฮียเป็นบอท'
				],
				18 => [
					'keywords' => 'เฮีย',
					'ans' => 'ใครเรียกเฮียคร๊อป'
				],
				19 => [
					'keywords' => 'อ้วน',
					'ans' => 'อ้วนแล้วไง กอดอุ่นแล้วกัน'
				],
				20 => [
					'keywords' => 'อ้วล',
					'ans' => 'อ้วนแล้วไง กอดอุ่นแล้วกัน'
				],
				21 => [
					'keywords' => 'ผัว',
					'ans' => 'เมียร์จ๋า เฮียมาแล้ว'
				],
				22 => [
					'keywords' => 'เป๊ก',
					'ans' => 'เป๊กกี้อยู่นี่แล้วคร๊อป'
				],
				23 => [
					'keywords' => 'ลุง',
					'ans' => 'ไม่แก่บ้างแล้วไปครัช'
				],
				24 => [
					'keywords' => 'ผลิต',
					'ans' => 'เรียกเฮีย คิดถึงเฮียหลอ'
				],
				25 => [
					'keywords' => 'พัน',
					'ans' => 'โหวตได้กี่พันเฮียก็รักนะคร๊อป'
				]
								
			];
			
			$found = 0;
			if($join == 0){
				foreach ( $question as $row ){
					if( strpos($event['message']['text'],$row['keywords']) !== false ){
						$text = $row['ans'];
						$found = 1;
						break;
					}
				}
			}else{
				$text = "สวัสดีครับ ไม่ต้องตกใจ ผมเป็นบอทครับ";	
			}
			
			if($found !== 0 || $join == 1){
				//$text = 'ผมไม่เข้าใจครับ';
			
				//$text = $event['message']['text'];
					// Get replyToken
				$replyToken = $event['replyToken'];

				// Build message to reply back
				$messages = [
					'type' => 'text',
					'text' => $text
				];

				// Make a POST Request to Messaging API to reply to sender
				$url = 'https://api.line.me/v2/bot/message/reply';
				$data = [
					'replyToken' => $replyToken,
					'messages' => [$messages],
				];
				$post = json_encode($data);
				$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
				
				$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				$result = curl_exec($ch);
				curl_close($ch);
				echo $result . "\r\n";

			}
		}
	}
	
}

echo "OK";

?>
