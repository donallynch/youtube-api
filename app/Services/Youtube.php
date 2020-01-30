<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use League\Flysystem\Exception;

/**
 * Class Youtube
 *  Youtube API V3
 *
 * Driver:
 *  $videos = $this->youtube->handle($query);
 *
 * @package App
 */
class Youtube
{
    /** @var string $youtubeApiKey */
    private $youtubeApiKey;

    /** @var int $maxResults */
    private $maxResults = 10;

    /**
     * Youtube constructor.
     */
    public function __construct()
    {
        /* Get config */
        $this->youtubeApiKey = config('app.YOUTUBE_VIDEO_API_KEY');
    }

    /**
     * @param string $query
     * @return array|\Google_Service_YouTube_SearchListResponse
     * @throws Exception
     */
    public function handle($query = '')
    {
        /* Ensure query is provided */
        if ($query === '') {
            throw new Exception(__('messages.youtube-no-query-provided'));
        }

        return $this->makeRequest($query);
    }

    /**
     * Make API Request to Youtube Video API
     *
     * @param string $query
     * @return array|\Google_Service_YouTube_SearchListResponse
     */
    private function makeRequest($query)
    {
        /* Init Youtube API V3 */
        $client = new \Google_Client();
        $client->setDeveloperKey($this->youtubeApiKey);
        $youtube = new \Google_Service_YouTube($client);

        /* Try to get videos from Youtube */
        try {
            $response = $youtube->search->listSearch('id,snippet', [
                'q' => $query,
                'maxResults' => $this->maxResults,
                'type' => 'video',
                'part' => 'snippet',
                //'pageToken' => ''
            ]);
        } catch (\Google_Service_Exception $e) {
            die($e->getMessage());
        } catch (\Google_Exception $e) {
            die($e->getMessage());
        }

        return $response;
    }
}
