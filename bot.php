<?php
    
    include "./functions.php";

    $conn = getConnection();

    $access_token = '0vAGpxZG7+30kW017m20c4MbGes89RLuH9TgE2sEmT/6Boz4ZEyUUsdK63kae3MEeMe1HEnUoNj6F2o6e/DtdoYrt0Lkm4mYESRfyw9/LJdpDcNvxfAms4DUCGN3iEWO+3W4LAFbFptmDe+r2dofjgdB04t89/1O/w1cDnyilFU=';

    $content = file_get_contents('php://input');
    $events = json_decode($content, true);

    if (!is_null($events['events'])) {

        foreach ($events['events'] as $event) {

            if($event['type'] == 'message' && $event['message']['type'] == 'text' ){

                if(strpos($event['message']['text'],"#?") !== false ){

                    $temp = $event['message']['text'];
                    $temp = explode('#?',$temp);

                    $key = $temp[0];
                    $ans = $temp[1];

                    addAnswer($key, $ans);

                    $text = 'โอเค เฮียจำได้แล้ว';
                    $data = setData(1,$event['replyToken'],$text);
                    sendMessage($data,$access_token);

                }
                else if(strcmp($event['message']['text'],"member") == false)
                {

                    $data = setData(0,$event['replyToken']);
                    sendMessage($data,$access_token);
                }
                else
                {

                    if ($result = getReplyMessages()) {
                        
                            while ($obj = $result->fetch_object()) {
                                if( strpos($event['message']['text'],$obj->key) !== false ){
                                    $text = $obj->ans;
                                    break;
                                }
                            }
                            $result->close();
                    }

                    $data = setData(1,$event['replyToken'],$text);
                    sendMessage($data,$access_token);
                }
            }
        }
    }
        
    closeConnection($conn);

    echo "Bot OK";

?>
