<?php

if (! function_exists('user_token_encrypt_decrypt')) {
   function user_token_encrypt_decrypt($action, $string)
   {
        //user token 加解密的key
        $key = 'sjie23jia1ji';
        $iv = substr(md5(md5($key)), 0, 16);
        $token_days = 30;

        if ($action == 'encrypt') {
            $expire_time = strtotime(date('Y-m-d H:i:s').'+'.$token_days.' day');
            $string = $string.'|'.$expire_time;
            $encrypted = openssl_encrypt($string, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv);
            $output = base64_encode($encrypted);
            // echo $encrypted,"\n";
        }else{
            $string = base64_decode($string);
            $decrypted = openssl_decrypt($string, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv);
            $output = $decrypted;
        }
        return $output;
   }
}

function can_see_client_data($client_id){
    if (!empty(Auth::user()->clients)) {
        $user_clients = explode(',', Auth::user()->clients);
    }

    if (!empty($client_id)) {
        if (!in_array($client_id, $user_clients)) {
            redirect()->back()->with('error', '無此操作權限，請聯繫管理員');
            return false;
        }
    } else {
        redirect()->back()->with('error', '無此操作權限，請聯繫管理員');
        return false;
    }
    redirect()->back()->with('', '');
    return true;
}