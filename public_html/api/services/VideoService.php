<?php
// api/services/VideoService.php

class VideoService {
    private $videoRepository;

    public function __construct(VideoRepository $videoRepository) {
        $this->videoRepository = $videoRepository;
    }

    public function findByParams(string $cat, string $sort, int $minIndex, int $maxIndex) {
        // Implement business logic here, e.g., validation, authorization
        return $this->videoRepository->findByParams($cat, $sort, $minIndex, $maxIndex);
    }

    public function countByParams(string $cat, string $sort) {
        return $this->videoRepository->countByParams($cat, $sort);
    }

    public function findById(string $id)
    {
        return $this->videoRepository->findById($id);
    }

    public function findRelatedVideosById(string $id)
    {
        return $this->videoRepository->findRelatedVideosById($id);
    }
}

?>