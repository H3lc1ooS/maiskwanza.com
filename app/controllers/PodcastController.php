<?php

namespace app\controllers;

use app\services\YoutubeService;

class PodcastController
{
    private $youtubeService;

    public function __construct()
    {
        $apiKey = '';
        $this->youtubeService = new YouTubeService($apiKey);
    }

    public function index()
    {
        $playlistId = "PLyE584xF0zBqOmEbe3DWzitbmbaFakmoW";
        $videos = $this->getVideosFromPlaylist($playlistId);

        return Controller::view('home', ['videos' => $videos]);
    }

    public function show()
    {
        $playlistId = "PLyE584xF0zBqOmEbe3DWzitbmbaFakmoW";
        $videos = $this->getVideosFromPlaylist($playlistId);
        $videosStat = $this->getVideoStatistics($videos, $playlistId);

        // Ordenar pelo mais antigo
        $oldestVideos = array_reverse($videos);

        //Ordenar por popularidade 
        usort($videosStat, function ($a, $b) {
            return $b['views'] <=> $a['views']; // Ordena em ordem Decrescente
        });


        return Controller::view('podcasts', ['videosStat' => $videosStat, 'videos' => $videos,   'oldestVideos' => $oldestVideos]);
    }

    protected function getVideosFromPlaylist($playlistId)
    {
        $service = $this->youtubeService->getService();
        $videosApi = $service->playlistItems->listPlaylistItems('snippet', ['playlistId' => $playlistId]);

        $videos = array();
        foreach ($videosApi['items'] as $video) {
            if ($video['snippet']['title'] != 'Private video') {
                array_push($videos, $video);
            }
        }

        return $videos;
    }

    protected function getVideoStatistics($videos, $playlistId)
    {
        $service = $this->youtubeService->getService();
        $videosStat = array();
        $i = 0;

        foreach ($videos as $video) {
            $id = $video['snippet']['resourceId']['videoId'];
            $stats = $service->videos->listVideos('statistics', ['id' => $video['snippet']['resourceId']['videoId']]);
            $conteudo = $service->playlistItems->listPlaylistItems('snippet', ['playlistId' => $playlistId])['items'][$i]['snippet'];

            if (isset($stats['items'][0])) {
                $videoStat = [
                    "id" => $id,
                    "likes" => $stats['items'][0]['statistics']['likeCount'],
                    "views" => $stats['items'][0]['statistics']['viewCount'],
                    "comments" => $stats['items'][0]['statistics']['commentCount'],
                    "conteudo" => $conteudo
                ];
                array_push($videosStat, $videoStat);
            }

            $i++;
        }

        return $videosStat;
    }
}
