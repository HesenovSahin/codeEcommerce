<?php 

/**
 * Payriff Payment System
 * 
 * PHP Codeigniter Payriff Library
 * 
 * Toghrul Valibayli
 * 
 * ver 1.0
 */
class Payriff
{
	private $url = "https://api.payriff.com/api/v2/";
	private $terminal = "ES1090341";
	private $key = "51DD7E24058F4A7F89945982E6C8A546";
	private $currency = "AZN";
	private $approve_url = "https://modelders.az/callback/approve_url";
	private $decline_url = "https://modelders.az/callback/decline_url";
	private $cancel_url = "https://modelders.az/callback/cancel_url";
	

	public function create_order($order_data){

        $order = $order_data;

        $encryptionToken = $order['user_id'] . time() . rand();

        $result = [];
        $result['status'] = 0;
        
        $request_data = [
            'body' => [
                'amount' => $order['amount'],
                'currencyType' => $this->currency,
                'description' => 'Sifariş #'.$order['user_id'],
                'language' => 'AZ',
                'approveURL' => $this->approve_url,
                'cancelURL' => $this->cancel_url,
                'declineURL' => $this->decline_url,
            ],
            'encryptionToken' => $encryptionToken,
            'merchant' => $this->terminal
        ];

        if(isset($order['credit'])){
            $request_data['body']['installmentProductType'] = 'BIRKART';
            $request_data['body']['installmentPeriod '] = $order['month'];
        }

        $auth = $this->key;

        $url = $this->url."createOrder";
        
        $request = $this->post_data($url,$auth, json_encode($request_data));

        if ($request['http_code'] == 200) {
            $content = json_decode($request['content'],true);

            if ($content['code'] == '00000') {
                $payload = $content['payload'];

                $result['status'] = 1;
                $result['payment_url'] = $payload['paymentUrl'];
                $result['orderId'] = $payload['orderId'];
                $result['sessionId'] = $payload['sessionId'];
            }else{
                echo "error";
            }
        }else{
            echo "error 2";
        }

        return $result;
    }

    public function create_terminal_order($order_data,$user_info){

        $order = $order_data;

        $encryptionToken = mt_rand(100000, 99999999) . time() . rand();

        $result = [];
        $result['status'] = 0;
        
        $request_data = [
            'body' => [
                'amount' => $order['amount'],
                'email' => $user_info['email'],
                'fullname' => $user_info['name']." ".$user_info['surname'],
                'phoneNumber' => $user_info['phone'],
                'sendSms' => true,
                'currencyType' => $this->currency,
                'description' => 'Balansartırma #'.$order['created_at'],
                'customMessage' => 'Balansartırma #'.$order['created_at'],
                'expireDate' => '',
                'languageType' => 'AZ',
                'approveURL' => $this->approve_url,
                'cancelURL' => $this->cancel_url,
                'declineURL' => $this->decline_url,
            ],
            'encryptionToken' => $encryptionToken,
            'merchant' => $this->terminal
        ];


        $auth = $this->key;

        $url = $this->url."invoices";
        
        $request = $this->post_data($url,$auth, json_encode($request_data));

        if ($request['http_code'] == 200) {
            $content = json_decode($request['content'],true);
            
            if ($content['code'] == '00000') {
                $payload = $content['payload'];

                $result['status'] = 1;
                $result['payment_url'] = $payload['paymentUrl'];
                $result['orderId'] = $payload['orderId'];
                $result['sessionId'] = $payload['sessionId'];
            }else{
                echo "error";
            }
        }else{
            echo "error 2";
        }

        return $result;
    }

	    //CURL query
    public function post_data($url, $auth, $reqeust_data ){
        $options = array(
            CURLOPT_RETURNTRANSFER => true,     // return web page
            CURLOPT_HEADER         => false,    // don't return headers
            CURLOPT_FOLLOWLOCATION => true,     // follow redirects
            CURLOPT_ENCODING       => "",       // handle all encodings
            CURLOPT_AUTOREFERER    => true,     // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
            CURLOPT_TIMEOUT        => 120,      // timeout on response
            CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
            //-------to post-------------
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $reqeust_data, //$data,
            CURLOPT_SSL_VERIFYPEER => false,    // DONT VERIFY      
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_HTTPHEADER     => array(
                'Authorization: '. $auth,
                'Content-type: application/json'
            ),
        );

        $ch      = curl_init( $url );
        curl_setopt_array( $ch, $options );
            $content = curl_exec( $ch );
            $err     = curl_errno( $ch );
            $errmsg  = curl_error( $ch );
            $header  = curl_getinfo( $ch );
        curl_close( $ch );
            $header['errno']   = $err;
            $header['errmsg']  = $errmsg;
            $header['content'] = $content;
        
        return $header;
    }

}