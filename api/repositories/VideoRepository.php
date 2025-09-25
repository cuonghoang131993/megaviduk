<?php
// api/repositories/VideoRepository.php

class VideoRepository
{
    private $db; // PDO object or database connection
    private $response = [];

    public function __construct(DatabaseConnection $db)
    {
        $this->db = $db;

        $this->response["RVwLHX6lgzQ"] = new VideoDAO(
            "RVwLHX6lgzQ", 
            "INCREDIBLE COLLAPSE TRIGGERED BY GLACIER CALVING | South America, Chile", 
            "An incredibly large chunk of the Grey Glacier's ice-sheet breaks off and flips over in a spectacular way in Southern Patagonia, Chile. The ice-sheet of the Grey Glacier is currently declining due to increasing temperatures and changes in rainfall. It is part of the 'Southern Patagonian Ice Field', the world's 2nd largest contiguous extrapolar ice field and the largest freshwater reservoir in South America. The Grey Glacier is famous for insane glacier wall collapses during the summer when large icebergs – often up to 100 feet in height – are breaking off the glacier and collapsing into the water of the 'Lago Grey'. In the right time of the year big blocks of ice break off the glacier and drop into the water. The waves created by such glacier calving events often splash dozens of meters through the air. The glacier itself is about 6 km (3.7 mi) wide and has an average height of over 30 m (100 ft) above the surface of the water. Thankfully, no-one was injured as boats stay at a safe distance from the glacier (for a good reason).",
            "Laura Q.");
        $this->response["IFzXB2dKgcU"] = new VideoDAO(
            "IFzXB2dKgcU", 
            "GREENLAND TSUNAMI: Fishermen Run For Their Lives - Camera 3", 
            "Shocking video captures the impact when one of the tallest tsunamis recorded in history hits and devastates the village of Nuugaatsiaq (Greenland) in the late evening hours, causing four deaths. Subsequent tsunami waves surprised the residents when they were trying to secure their property.",
            "Rasmus J.");
        $this->response['jtX3q3cY2rk'] = new VideoDAO(
            "jtX3q3cY2rk",
            "CLOSE CALL: Huge Landslide Makes Spectators Run For Their Lives In Nepal",
            "During this lake tour, the mountains started to collapse and numerous rocks came flying down the hill where the tourists were. They tried their best to evacuate in time, but it’s unclear how many people might’ve gotten injured. This unexpected event happened on July 29th, 2020 in Bharatpur, Nepal.",
            "Mukti K."
        );
        $this->response['QEWENb7eNBw'] = new VideoDAO(
            "QEWENb7eNBw",
            "FLASH FLOOD: Drivers TRAPPED In Traffic Fear For Their Lives!",
            "Watch closely as you get to see the moment a flash flood unfolds, and the locals are forced to flee. This flash flood didn’t hold back, and swept the bridge, and all surrounding areas in under 2 minutes forcing all the drivers and the locals into a frenzy. All the cars were honking non-stop to try to rush each other out of the way.",
            "Younes H."
        );
        $this->response['oH7gECQ0ZPc'] = new VideoDAO(
            "oH7gECQ0ZPc",
            "Crazy Landslide Crashes into Power Line Causing an Explosion",
            "These locals noticed that the mountain was starting to crumble. Soon after, the earth collapsed onto the main roads, hitting the power lines and causing an explosion. This event happened on August 20, 2017 in Shimla, Himachal Pradesh, India.",
            "Jag M."
        );
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

    public function findById(string $id)
    {
        return $this->response[$id];
    }

    public function findRelatedVideosById(string $id)
    {
        return $this->response;
    }
}

?>
