<?php
    require_once 'vendor/autoload.php';
    require_once 'env.php';

    use Google\Client;
    use Google\Service\YouTube;
    use Google\Service\Exception;

    # Configs
    $apiKey = $KEY;

    # Initialize Youtube API CLient
    $client = new Client();
    $client->setDeveloperKey($apiKey);
    $service = new YouTube($client);

    $playlistId = 'PLyE584xF0zBqOmEbe3DWzitbmbaFakmoW';
    
    $videos = $service->playlistItems->listPlaylistItems('snippet', ['playlistId' => $playlistId, 'maxResults' => 3]);
    
    /* 
        => Falta ordernar os vídeos por data 
    */