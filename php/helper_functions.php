<?php

function generate_response($status, $response_message) {
        $response = array(
            'status' => $status,
            'message' => $response_message
        );
        return json_encode($response);
}





?>
