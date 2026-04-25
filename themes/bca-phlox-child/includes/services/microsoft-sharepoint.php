<?php 
function initiate_sharepoint($folderName, $files) {
    $accessToken = get_access_token();
    if(!$accessToken) return new WP_Error('Upload Failed', 'Not able to fetch the access token');

    $driveId = get_drive_id($accessToken);
    if(!$driveId) return new WP_Error('Upload Failed', 'Not able to fetch the Drive ID');

    if(checkFolderExists($accessToken, $driveId, $folderName)) {        
        for ($i = 0; $i < count($files['name']); $i++) {
            $file = [ 
                'name' => sanitize_file_name($files['name'][$i]), 
                'tmp_name' => $files['tmp_name'][$i] 
            ];
            // error_log('Filename: ' . $files['name'][$i] . ' ' . $files['tmp_name'][$i]);

            $response = upload_file_to_sharepoint($accessToken, $driveId, $folderName, $file);
            if (is_wp_error($response)) return new WP_Error('Upload Failed', $response->get_error_message());
            else {
                $res = wp_remote_retrieve_body($response); 
                $json = json_decode($res, true);
                error_log($json['name'] . " uploaded on " . $json['createdDateTime']);
            }
        }

        return true;
    } else return new WP_Error('Upload Failed', 'Folder doesnt exists.');
}

function upload_file_to_sharepoint ($accessToken, $driveId, $folderName, $file) {
    $fileName = $file['name'];
    $filePath = $file['tmp_name'];

    return wp_remote_request(BCA_MS_DRIVE_URL . $driveId . BCA_DRIVE_PATH . $folderName . '/' . $fileName . ':/content', [
        'method' => 'PUT',
        'headers' => [
            'Authorization' => 'Bearer ' . $accessToken
        ],
        'body' => file_get_contents($filePath)
    ]);
}

function checkFolderExists($accessToken, $driveId, $folderName) {
    $response = wp_remote_get(BCA_MS_DRIVE_URL . $driveId . BCA_DRIVE_PATH . $folderName, [
        'headers' => [
            'Authorization' => "Bearer $accessToken"
        ]
    ]);

    if (is_wp_error($response)) return false; 
    $status = wp_remote_retrieve_response_code($response);
    if ($status === 200) return true;
    return false;
}

function get_drive_id ($accessToken) {
    /* Check if Valid Drive ID */
    $response = wp_remote_get(BCA_MS_DRIVE_URL . BCA_MS_DRIVE_ID . '/root', [
        'headers' => [
            'Authorization' => "Bearer $accessToken"
        ]
    ]);

    if (is_wp_error($response)) return get_drive_graph_api($accessToken);
    
    $status = wp_remote_retrieve_response_code($response);
    if($status != 200) return get_drive_graph_api($accessToken);
        
    $body = wp_remote_retrieve_body($response);
    $jsonData = json_decode($body, true);
    
    if (!isset($jsonData['parentReference']['driveId'])) {
        error_log('Function "get_drive_id()" Drive ID not found in response: ' . $body);
        return false;
    }

    return $jsonData['parentReference']['driveId'];
}

function get_drive_graph_api ($accessToken)  {
    error_log('DRIVE not found using the drive_id. Trying to fetching the drive id using Graph API now');
    $siteId = fetch_site_id($accessToken);
    if(!$siteId) return false;
    $driveId = fetch_drive_id($accessToken, $siteId);
    if(!$driveId) return false;
    return $driveId;
}

function get_access_token () {
    $response = wp_remote_post(MS_API_URL, [
        'body' => [
            'client_id'     => BCA_MS_CLIENT_ID,
            'client_secret' => BCA_MS_CLIENT_SECRET,
            'scope'         => SCOPE,
            'grant_type'    => 'client_credentials'
        ]
    ]);

    if (is_wp_error($response)) {
        error_log('API Request Failed: ' . $response->get_error_message());
        return false;
    }

    $status_code = wp_remote_retrieve_response_code($response);
    if ($status_code !== 200) {
        $body = wp_remote_retrieve_body($response);
        error_log("HTTP Response Error: Status $status_code - Body: $body");
        return false;
    }

    $body = wp_remote_retrieve_body($response);
    $jsonData = json_decode($body, true);

    if (!isset($jsonData['access_token'])) {
        error_log('Microsoft Sharepoint response missing access_token: ' . $body);
        return false;
    }
    
    $accessToken = $jsonData['access_token'];
    return $accessToken;
}

function fetch_site_id ($accessToken) {
    $response = wp_remote_get(BCA_MS_SITE_URL . BCA_SHAREPOINT_URL, [
        'headers' => [
            'Authorization' => 'Bearer ' . $accessToken
        ]
    ]);

    if (is_wp_error($response)) {
        error_log('API Request Failed: ' . $response->get_error_message());
        return false;
    }

    $body = wp_remote_retrieve_body($response);
    $jsonData = json_decode($body, true);

    if (!isset($jsonData['id'])) {
        error_log('Site ID not found in response: ' . $body);
        return false;
    }

    return $jsonData['id'];
}

function fetch_drive_id ($accessToken, $siteId) {
    $response = wp_remote_get(BCA_MS_SITE_URL . $siteId . '/drives', [
        'headers' => [
            'Authorization' => 'Bearer ' . $accessToken
        ]
    ]);

    if (is_wp_error($response)) {
        error_log('DRIVE API Request Failed: ' . $response->get_error_message());
        return false;
    }

    $body = wp_remote_retrieve_body($response);
    $jsonData = json_decode($body, true);

    if (!isset($jsonData['value'][0]['id'])) {
        error_log('Drive ID not found in response: ' . $body);
        return false;
    }

    return $jsonData['value'][0]['id'];
}

?>