<?php 

     $app_id = "297332293668843";

     $canvas_page = "http://djepo.craym.eu/fbappleboncoincoin/";

     $auth_url = "http://www.facebook.com/dialog/oauth?client_id=" 
            . $app_id . "&redirect_uri=" . urlencode($canvas_page);
           
     header('Location: $auth_url');

     $signed_request = $_REQUEST["signed_request"];

     list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

     $data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

     if (empty($data["user_id"])) {
            header('Location: $auth_url');
     } else {
            echo ("Welcome User: " . $data["user_id"]);
     } 
 ?>