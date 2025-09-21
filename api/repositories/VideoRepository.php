<?php
// api/repositories/VideoRepository.php
require_once('api/entities/VideoDAO.php');

class VideoRepository
{
    private $db; // PDO object or database connection
    private $response = [];

    public function __construct(DatabaseConnection $db)
    {
        $this->db = $db;

        $this->response[] = new VideoDAO("RVwLHX6lgzQ", "INCREDIBLE COLLAPSE TRIGGERED BY GLACIER CALVING | South America, Chile", "An incredibly large chunk of the Grey Glacier's ice-sheet breaks off and flips o ");
        $this->response[] = new VideoDAO("IFzXB2dKgcU", "GREENLAND TSUNAMI: Fishermen Run For Their Lives - Camera 3", "Shocking video captures the impact when one of the tallest tsunamis recorded in  ");
    }

    public function findByParams(string $cat, string $sort, int $minIndex, int $maxIndex)
    {
        return $this->response;
    }

    // Add other CRUD methods like save, update, delete
    public function countByParams(string $cat, string $sort)
    {
        return count($this->response);
    }
}
