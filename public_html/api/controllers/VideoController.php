<?php
// api/VideoController.php

class VideoController
{
    private $videoService;

    public function __construct(VideoService $videoService)
    {
        $this->videoService = $videoService;
    }

    public function findByParams(string $cat, string $sort, int $minIndex, int $maxIndex)
    {
        return $this->videoService->findByParams($cat, $sort, $minIndex, $maxIndex);
    }

    public function countByParams(string $cat, string $sort)
    {
        return $this->videoService->countByParams($cat, $sort);
    }

    public function findById(string $id)
    {
        return $this->videoService->findById($id);
    }

    public function findRelatedVideosById(string $id)
    {
        return $this->videoService->findRelatedVideosById($id);
    }
}

?>
