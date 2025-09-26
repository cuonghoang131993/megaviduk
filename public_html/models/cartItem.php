<?php

class CartItem
{
  public $isGerman;
  public $selectedMedia;
  public $selectedContext;
  public $selectedRights;
  public $selectedPeriod;
  public $selectedDigitalPosts;
  public $selectedMonetization;
  public $selectedAudienceSize;
  public $selectedCredit;
  public $videoId;

  public function __construct($isGerman, $selectedMedia, $selectedContext, $selectedRights, $selectedPeriod, $selectedDigitalPosts, $selectedMonetization, $selectedAudienceSize, $selectedCredit, $videoId)
  {
    $this->isGerman = $isGerman;
    $this->selectedMedia = $selectedMedia;
    $this->selectedContext = $selectedContext;

    $this->selectedRights = $selectedRights;
    $this->selectedPeriod = $selectedPeriod;
    $this->selectedDigitalPosts = $selectedDigitalPosts;

    $this->selectedMonetization = $selectedMonetization;
    $this->selectedAudienceSize = $selectedAudienceSize;
    $this->selectedCredit = $selectedCredit;

    $this->videoId = $videoId;
  }
}

?>
