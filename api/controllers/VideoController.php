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
        try {
            return $this->videoService->findByParams($cat, $sort, $minIndex, $maxIndex);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function countByParams(string $cat, string $sort)
    {
        try {
            return $this->videoService->countByParams($cat, $sort);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function findById(string $id)
    {
        return $this->videoService->findById($id);
    }
}

?>
