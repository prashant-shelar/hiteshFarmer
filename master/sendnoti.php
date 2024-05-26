

<?php

    
    // FCM API Url
    $url = 'https://fcm.googleapis.com/fcm/send';
    
    // Put your Server Response Key here
    $apiKey = "AAAAuDShYNw:APA91bF8jTbALsZwZmN3IZIdYz95gFVBzmMj4TpPikh8kMk7ocBwFcuJIQzJ9HqeL6uDNaXTQl1J1mwfmtq1pyl6azaJbbt6j9hiCx-RA8ddngdN6b9mEYzQbhTGh3GHNzgPmdj7_iet";
    
    // Compile headers in one variable
    $headers = array (
    'Authorization:key=' . $apiKey,
    'Content-Type:application/json'
        );
    
    // Add notification content to a variable for easy reference
    $notifData = [
    'title' => "Test Title no 1",
    'body' => "Test notification body no 1"
  
        ];
    
    // Create the api body
    $apiBody = [
    'notification' => $notifData,
    'data' => $notifData,
    'to' => 'fagi5EyrR7mlBHnaO5-WZ4:APA91bHVcwt8I4wC88iKupJq78wkI6nvGZZ3abHN3wjQ95U1zHT9b3jkEKy_JiR4cQNa6nbX-PqhUvzuPf6DFM3c6fpxu5BlgPHqs6P8Zm9OyDq8Zv_3kjizRqGStjYCH968JQvfPcZD' // Replace 'mytargettopic' with your intended notification audience
    ];
    
    // Initialize curl with the prepared headers and body
    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $url );
    curl_setopt ($ch, CURLOPT_POST, true );
    curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt ($ch, CURLOPT_POSTFIELDS, json_encode($apiBody));
    
    // Execute call and save result
    $result = curl_exec ( $ch );
    
    // Close curl after call
    curl_close ( $ch );

?>