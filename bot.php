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
					'keywords' => 'นิ้ม',
					'ans' => 'ดีใจเห็นที่นุชนิ้มนะ :)'
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
					'keywords' => 'ช็อค',
					'ans' => 'พริ๊งหลอ อยากดูรูปเฮียนุชไปเสิร์จกูเกิ้ลดูเองก่อนนะคร๊อป'
				],
				6 => [
					'keywords' => 'ห่อหมก',
					'ans' => 'พริ๊งหลอ รูปเฮียยังไม่พร้อมนุชหากินเองไปก่อนนะคร๊อป'
				],
				7 => [
					'keywords' => '5555',
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
					'keywords' => 'โหวตเฮีย',
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
					'keywords' => 'หล่อ',
					'ans' => 'เฮียเอง หล่อมากเทพบุตร :P'	
				],
				14 => [
					'keywords' => 'ม่วง',
					'ans' => 'วันนี้นุช จิ๋มม่วง หรือยัง'
				],
				15 => [
					'keywords' => 'การบ้าน',
					'ans' => 'ใครเกินมีนมารับรางวัลที่เฮียเลยคร๊อป ม๊วฟๆ'
				],
				16 => [
					'keywords' => 'ตุ่น',
					'ans' => 'ต้องให้ได้วันละหมื่นตัวนะคร๊อป'
				],
				17 => [
					'keywords' => 'บอทเฮีย',
					'ans' => 'ใช่ครับ เฮียเป็นบอท'
				],
				18 => [
					'keywords' => 'เฮียจ๋า',
					'ans' => 'ใครเรียกเฮียคร๊อป'
				],
				19 => [
					'keywords' => 'อ้วน',
					'ans' => 'อ้วนแล้วไง กอดอุ่นแล้วกัน'
				],
				20 => [
					'keywords' => 'ไปไหน',
					'ans' => 'ไปไหนก็ได้ โตแล้ว'
				],
				21 => [
					'keywords' => 'ผัวจ๋า',
					'ans' => 'เมียร์จ๋า ผัวร์มาแล้ว'
				],
				22 => [
					'keywords' => 'เป๊กกี้',
					'ans' => 'เป๊กกี้อยู่นี่แล้วคร๊อป'
				],
				23 => [
					'keywords' => 'ลุง',
					'ans' => 'ไม่แก่บ้างแล้วไปคร๊อป'
				],
				24 => [
					'keywords' => 'ผลิตโชค',
					'ans' => 'เรียกเฮีย คิดถึงเฮียหลอ'
				],
				25 => [
					'keywords' => 'ขอลิงค์',
					'ans' => 'สำรวจยอดตีตุ่น 13/10/17 https://docs.google.com/forms/d/e/1FAIpQLSci0rPKKHLqf9pEktWZaGIcK-KJI0wKyWWzfI6X84lrWMVvgw/viewform'
				],
				26 => [
					'keywords' => 'อะไร',
					'ans' => 'งงเด้ งงเด้'
				],
				27 => [
					'keywords' => 'พริ้ง',
					'ans' => 'พริ้งได้ เฮียชอบ'
				],
				28 => [
					'keywords' => 'คิดถึง',
					'ans' => 'เฮียก็คิดถึงนุชนะคร๊อป'
				],
				29 => [
					'keywords' => 'กิน',
					'ans' => 'อยากกินเฮียเลยหลออ'
				],
				30 => [
					'keywords' => 'หิว',
					'ans' => 'หาอะไรทานด้วยนะคร๊อป เฮียเป็นห่วง'
				],
				31 => [
					'keywords' => 'เกลียด',
					'ans' => 'เกลียดเป๊กกี้แล้วหรอคร๊อป'
				],
				32 => [
					'keywords' => 'เหนียง',
					'ans' => 'เค้าเรียกรอยพับ'
				],
				33 => [
					'keywords' => 'เล็ก',
					'ans' => 'เฮียไม่เล็กนะคร๊อป'
				],
				34 => [
					'keywords' => 'เด๋อ',
					'ans' => 'เด๋อยังไงก็ผัวนุชอ่ะคร๊อป'
				],
				35 => [
					'keywords' => 'งอน',
					'ans' => 'โอ๋นะ มาจุ๊ฟๆ '
				],
				36 => [
					'keywords' => 'นอกใจ',
					'ans' => 'รักเมียร์คนเดียว'
				],
				38 => [
					'keywords' => 'ซัง',
					'ans' => 'คิวนุชอยู่ที่ก้นหลุมนะคร๊อป'
				],
				39 => [
					'keywords' => 'นอร์',
					'ans' => 'ลงหลุมไปเลยคร๊อป'
				],
				40 => [
					'keywords' => 'แฝด',
					'ans' => 'อยากเป็น ปธ หลุมหลอออ'
				],
				41 => [
					'keywords' => 'นอน',
					'ans' => 'ง่วงก็ไปนอนเถอะนุชชช'
				],
				42 => [
					'keywords' => 'หลับ',
					'ans' => 'เป็นเมียร์เฮียต้องอดทน'
				],
				43 => [
					'keywords' => 'ฝัน',
					'ans' => 'ฝันถึงเฮียด้วยนะคร๊อป'
				],
				44 => [
					'keywords' => 'อ้าว',
					'ans' => 'อ้าวเฮ้ย ไม่เหมือนที่คุยกันไว้นี่หน่า'
				],
				45 => [
					'keywords' => 'แฟนมีท',
					'ans' => 'นุชอย่านกแฟนมีทนะคร๊อป'
				],
				46 => [
					'keywords' => 'สไลด์',
					'ans' => 'สไลด์ได้ แต่สไลด์กลับด้วยนะคร๊อป'
				],
				47 => [
					'keywords' => 'บีช',
					'ans' => 'นุชสายบีชน่ารักทุกคนเลยคร๊อป'
				],
				48 => [
					'keywords' => 'ขน',
					'ans' => 'ขนฮูวีย์ลู๊คคคคค'
				],
				49 => [
					'keywords' => 'ใคร',
					'ans' => 'เฮียเองคร๊อป'
				],
				50 => [
					'keywords' => 'ทำไม',
					'ans' => 'นุชถามเฮีย แล้วเฮียจะถามใคร?'
				],
				51 => [
					'keywords' => 'ที่ไหน',
					'ans' => 'ในใจเฮีย'
				],
				52 => [
					'keywords' => 'เมื่อไหร่',
					'ans' => 'พร้อมเสมอถ้านุชต้องการ'
				],
				53 => [
					'keywords' => 'ขอบคุณ',
					'ans' => 'ขอบคุณคร๊อป'
				],
				54 => [
					'keywords' => 'ตอบ',
					'ans' => 'ตอบว่าดรั๊กนุชได้หรือเปล่า'
				],
				55 => [
					'keywords' => 'เหนื่อย',
					'ans' => 'เหนื่อยก็มากอดเฮียนะคร๊อป จุ๊ฟ!'
				],
				56 => [
					'keywords' => 'โวย',
					'ans' => 'เก้วกาดหลออออออออ'
				],
				57 => [
					'keywords' => 'Vote',
					'ans' => 'ขอบคุณที่โหวตเฮียนะคร๊อป http://www.mtvema.com/en-asia/artists/9zo3mg/palitchoke-ayanaputra'
				],
				58 => [
					'keywords' => 'จิ้ม',
					'ans' => 'จิ๋มเลยคร๊อป http://www.mtvema.com/en-asia/artists/9zo3mg/palitchoke-ayanaputra'
					],
				59 => [
					'keywords' => 'แท่งไฟ',
					'ans' => 'แพงแล้วยังไม่สตรองอีก :('
				],
				60 => [
					'keywords' => 'ป่อง',
					'ans' => 'นมป่องตรูดหย่ายยยย'
				],
				61 => [
					'keywords' => 'เตย',
					'ans' => 'นมเตยย๊านนยานนนน'
				],
				62 => [
					'keywords' => 'หลุม',
					'ans' => 'ลงก้นหลุมไปเลยคร๊อป'
				],
				63 => [
					'keywords' => 'เคียวโฮ',
					'ans' => 'เคี้ยวหงึบ https://www.youtube.com/watch?v=Z-Sk1lwGwfg'
				],
				64 => [
					'keywords' => 'แหม',
					'ans' => 'แหมมมมมมมมมมมมมมม ให้ถึงดาว 702'
				],
				65 => [
					'keywords' => 'AIS',
					'ans' => '4G แอ๊ดแวนนนนนนซ์'		
				
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
				$text = "สวัสดีครับ ไม่ต้องตกใจ ผมเป็น
				ครับ";	
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
