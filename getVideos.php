<?php 
include_once('models/video.php');
  $response = [];
   $response[] = new Video("RVwLHX6lgzQ", "INCREDIBLE COLLAPSE TRIGGERED BY GLACIER CALVING | South America, Chile", "An incredibly large chunk of the Grey Glacier's ice-sheet breaks off and flips o ");
  $response[] = new Video("IFzXB2dKgcU", "GREENLAND TSUNAMI: Fishermen Run For Their Lives - Camera 3", "Shocking video captures the impact when one of the tallest tsunamis recorded in  ");
?>
  
  <?php
  foreach ($response as $item) {
    echo '<div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark(\'' . $item->id .'\');" id="bookmarkSetter-' . $item->id .'" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-' . $item->id .'"  href="./footage.php?v=' . $item->id .'">
                <div class="youtube" data-embed="' . $item->id .'"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">02:38</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-' . $item->id .'" class="videoInfoLink" href="./footage.php?v=' . $item->id .'">' . $item->title .'</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">' . $item->description .'<a class="videoInfoLink" id="videoMoreLink-' . $item->id .'" href="./footage.php?v=' . $item->id .'">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="169.74" name="' . $item->id .'">
                <a class="btn btn-default sr-button orange" id="btn-' . $item->id .'" href="./footage.php?v=' . $item->id .'" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>';
}
  ?>
  
  <!-- <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('RVwLHX6lgzQ');" id="bookmarkSetter-RVwLHX6lgzQ" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-RVwLHX6lgzQ"  href="./footage.php?v=RVwLHX6lgzQ">
                <div class="youtube" data-embed="RVwLHX6lgzQ"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">02:38</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-RVwLHX6lgzQ" class="videoInfoLink" href="./footage.php?v=RVwLHX6lgzQ">INCREDIBLE COLLAPSE TRIGGERED BY GLACIER CALVING | South America, Chile</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">An incredibly large chunk of the Grey Glacier&#039;s ice-sheet breaks off and flips o <a class="videoInfoLink" id="videoMoreLink-RVwLHX6lgzQ" href="./footage.php?v=RVwLHX6lgzQ">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="169.74" name="RVwLHX6lgzQ">
                <a class="btn btn-default sr-button orange" id="btn-RVwLHX6lgzQ" href="./footage.php?v=RVwLHX6lgzQ" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('IFzXB2dKgcU');" id="bookmarkSetter-IFzXB2dKgcU" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-IFzXB2dKgcU"  href="./footage.php?v=IFzXB2dKgcU">
                <div class="youtube" data-embed="IFzXB2dKgcU"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:37</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-IFzXB2dKgcU" class="videoInfoLink" href="./footage.php?v=IFzXB2dKgcU">GREENLAND TSUNAMI: Fishermen Run For Their Lives - Camera 3</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">Shocking video captures the impact when one of the tallest tsunamis recorded in  <a class="videoInfoLink" id="videoMoreLink-IFzXB2dKgcU" href="./footage.php?v=IFzXB2dKgcU">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="IFzXB2dKgcU">
                <a class="btn btn-default sr-button orange" id="btn-IFzXB2dKgcU" href="./footage.php?v=IFzXB2dKgcU" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('jtX3q3cY2rk');" id="bookmarkSetter-jtX3q3cY2rk" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-jtX3q3cY2rk"  href="./footage.php?v=jtX3q3cY2rk">
                <div class="youtube" data-embed="jtX3q3cY2rk"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:42</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-jtX3q3cY2rk" class="videoInfoLink" href="./footage.php?v=jtX3q3cY2rk">CLOSE CALL: Huge Landslide Makes Spectators Run For Their Lives In Nepal</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">During this lake tour, the mountains started to collapse and numerous rocks came <a class="videoInfoLink" id="videoMoreLink-jtX3q3cY2rk" href="./footage.php?v=jtX3q3cY2rk">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="jtX3q3cY2rk">
                <a class="btn btn-default sr-button orange" id="btn-jtX3q3cY2rk" href="./footage.php?v=jtX3q3cY2rk" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('TYe2tkXgPqs');" id="bookmarkSetter-TYe2tkXgPqs" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-TYe2tkXgPqs"  href="./footage.php?v=TYe2tkXgPqs">
                <div class="youtube" data-embed="TYe2tkXgPqs"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:59</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-TYe2tkXgPqs" class="videoInfoLink" href="./footage.php?v=TYe2tkXgPqs">Warship Smashed by +20M Monster Wave Near Antarctica</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">The RNZN vessel HMNZS Otago sailing through a storm in the Southern Ocean. 20m s <a class="videoInfoLink" id="videoMoreLink-TYe2tkXgPqs" href="./footage.php?v=TYe2tkXgPqs">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="TYe2tkXgPqs">
                <a class="btn btn-default sr-button orange" id="btn-TYe2tkXgPqs" href="./footage.php?v=TYe2tkXgPqs" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('MgXEL2tpTqc');" id="bookmarkSetter-MgXEL2tpTqc" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-MgXEL2tpTqc"  href="./footage.php?v=MgXEL2tpTqc">
                <div class="youtube" data-embed="MgXEL2tpTqc"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:37</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-MgXEL2tpTqc" class="videoInfoLink" href="./footage.php?v=MgXEL2tpTqc">Insane Navy Boat Exercise Nearly Gone Wrong (Storm Force 12)</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">Watch this navy patrol boat facing rough seas, big waves and extreme winds (stor <a class="videoInfoLink" id="videoMoreLink-MgXEL2tpTqc" href="./footage.php?v=MgXEL2tpTqc">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="MgXEL2tpTqc">
                <a class="btn btn-default sr-button orange" id="btn-MgXEL2tpTqc" href="./footage.php?v=MgXEL2tpTqc" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('vFTD0rqL5Z0');" id="bookmarkSetter-vFTD0rqL5Z0" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-vFTD0rqL5Z0"  href="./footage.php?v=vFTD0rqL5Z0">
                <div class="youtube" data-embed="vFTD0rqL5Z0"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">06:09</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-vFTD0rqL5Z0" class="videoInfoLink" href="./footage.php?v=vFTD0rqL5Z0">Uncut and Unseen: Greenland Tsunami (First Wave to Largest Wave in 6 mins.)</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">Watch the never before published uncut video of the Greenland Tsunami, to learn  <a class="videoInfoLink" id="videoMoreLink-vFTD0rqL5Z0" href="./footage.php?v=vFTD0rqL5Z0">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="vFTD0rqL5Z0">
                <a class="btn btn-default sr-button orange" id="btn-vFTD0rqL5Z0" href="./footage.php?v=vFTD0rqL5Z0" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('pKd0PCI6Sx4');" id="bookmarkSetter-pKd0PCI6Sx4" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-pKd0PCI6Sx4"  href="./footage.php?v=pKd0PCI6Sx4">
                <div class="youtube" data-embed="pKd0PCI6Sx4"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">06:36</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-pKd0PCI6Sx4" class="videoInfoLink" href="./footage.php?v=pKd0PCI6Sx4">'TSUNAMI-LIKE WAVES' Hit Village in Indonesia (Tidal Bore) | Kampar River (Sumatra)</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">Spectacular moment caught on camera when several meter high waves are speeding u <a class="videoInfoLink" id="videoMoreLink-pKd0PCI6Sx4" href="./footage.php?v=pKd0PCI6Sx4">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="pKd0PCI6Sx4">
                <a class="btn btn-default sr-button orange" id="btn-pKd0PCI6Sx4" href="./footage.php?v=pKd0PCI6Sx4" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('QEWENb7eNBw');" id="bookmarkSetter-QEWENb7eNBw" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-QEWENb7eNBw"  href="./footage.php?v=QEWENb7eNBw">
                <div class="youtube" data-embed="QEWENb7eNBw"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:39</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-QEWENb7eNBw" class="videoInfoLink" href="./footage.php?v=QEWENb7eNBw">FLASH FLOOD: Drivers TRAPPED In Traffic Fear For Their Lives!</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">Watch closely as you get to see the moment a flash flood unfolds, and the locals <a class="videoInfoLink" id="videoMoreLink-QEWENb7eNBw" href="./footage.php?v=QEWENb7eNBw">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="QEWENb7eNBw">
                <a class="btn btn-default sr-button orange" id="btn-QEWENb7eNBw" href="./footage.php?v=QEWENb7eNBw" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('TrTBjpXioEo');" id="bookmarkSetter-TrTBjpXioEo" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-TrTBjpXioEo"  href="./footage.php?v=TrTBjpXioEo">
                <div class="youtube" data-embed="TrTBjpXioEo"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:38</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-TrTBjpXioEo" class="videoInfoLink" href="./footage.php?v=TrTBjpXioEo">Triple Sneak Pass Maneuver at Jones Beach Airshow Practice</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">NEW YORK, UNITED STATES - MAY 26: Spectators witness the mindblowing Triple Snea <a class="videoInfoLink" id="videoMoreLink-TrTBjpXioEo" href="./footage.php?v=TrTBjpXioEo">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.30" name="TrTBjpXioEo">
                <a class="btn btn-default sr-button orange" id="btn-TrTBjpXioEo" href="./footage.php?v=TrTBjpXioEo" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('16bAhJSL2-o');" id="bookmarkSetter-16bAhJSL2-o" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-16bAhJSL2-o"  href="./footage.php?v=16bAhJSL2-o">
                <div class="youtube" data-embed="16bAhJSL2-o"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:50</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-16bAhJSL2-o" class="videoInfoLink" href="./footage.php?v=16bAhJSL2-o">MEGA-TSUNAMI caused by LANDSLIDE devastates village - Camera 1 | Greenland, Nuugaatsiaq</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">Shocking video captures the impact when one of the tallest tsunamis recorded in  <a class="videoInfoLink" id="videoMoreLink-16bAhJSL2-o" href="./footage.php?v=16bAhJSL2-o">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="169.74" name="16bAhJSL2-o">
                <a class="btn btn-default sr-button orange" id="btn-16bAhJSL2-o" href="./footage.php?v=16bAhJSL2-o" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('MTFmuWHZVSo');" id="bookmarkSetter-MTFmuWHZVSo" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-MTFmuWHZVSo"  href="./footage.php?v=MTFmuWHZVSo">
                <div class="youtube" data-embed="MTFmuWHZVSo"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:43</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-MTFmuWHZVSo" class="videoInfoLink" href="./footage.php?v=MTFmuWHZVSo">Deadliest European Tornado In 20 Years Devastates Village In Czechia</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">While locals are inside their home, they film the moment an F4 tornado is gettin <a class="videoInfoLink" id="videoMoreLink-MTFmuWHZVSo" href="./footage.php?v=MTFmuWHZVSo">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.30" name="MTFmuWHZVSo">
                <a class="btn btn-default sr-button orange" id="btn-MTFmuWHZVSo" href="./footage.php?v=MTFmuWHZVSo" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('M3NxW4hL-tM');" id="bookmarkSetter-M3NxW4hL-tM" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-M3NxW4hL-tM"  href="./footage.php?v=M3NxW4hL-tM">
                <div class="youtube" data-embed="M3NxW4hL-tM"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:44</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-M3NxW4hL-tM" class="videoInfoLink" href="./footage.php?v=M3NxW4hL-tM">Ship in Storm | Multiple MONSTER WAVES Hit Rescue Vessel in the North Sea! [See Until End]</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">See Until End: During storm force 12 in the North Sea, waves got that big that t <a class="videoInfoLink" id="videoMoreLink-M3NxW4hL-tM" href="./footage.php?v=M3NxW4hL-tM">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="M3NxW4hL-tM">
                <a class="btn btn-default sr-button orange" id="btn-M3NxW4hL-tM" href="./footage.php?v=M3NxW4hL-tM" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('T2MtSjsVHE8');" id="bookmarkSetter-T2MtSjsVHE8" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-T2MtSjsVHE8"  href="./footage.php?v=T2MtSjsVHE8">
                <div class="youtube" data-embed="T2MtSjsVHE8"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">02:17</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-T2MtSjsVHE8" class="videoInfoLink" href="./footage.php?v=T2MtSjsVHE8">GIANT Iceberg 'Shooter' Triggered By Massive Glacier Calving [4K]</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">The Perito Moreno Glacier is famous for insane glacier wall collapses during the <a class="videoInfoLink" id="videoMoreLink-T2MtSjsVHE8" href="./footage.php?v=T2MtSjsVHE8">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="162.36" name="T2MtSjsVHE8">
                <a class="btn btn-default sr-button orange" id="btn-T2MtSjsVHE8" href="./footage.php?v=T2MtSjsVHE8" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('DUbDwek6rAQ');" id="bookmarkSetter-DUbDwek6rAQ" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-DUbDwek6rAQ"  href="./footage.php?v=DUbDwek6rAQ">
                <div class="youtube" data-embed="DUbDwek6rAQ"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:44</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-DUbDwek6rAQ" class="videoInfoLink" href="./footage.php?v=DUbDwek6rAQ">Ship in Storm | MONSTER WAVE DESTROYS Oil Tanker's Bridge in Baltic Sea!</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">When a Russian captain said BLYAT, you know things are getting bad... ! During a <a class="videoInfoLink" id="videoMoreLink-DUbDwek6rAQ" href="./footage.php?v=DUbDwek6rAQ">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="DUbDwek6rAQ">
                <a class="btn btn-default sr-button orange" id="btn-DUbDwek6rAQ" href="./footage.php?v=DUbDwek6rAQ" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('c9fsH1zImLU');" id="bookmarkSetter-c9fsH1zImLU" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-c9fsH1zImLU"  href="./footage.php?v=c9fsH1zImLU">
                <div class="youtube" data-embed="c9fsH1zImLU"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:49</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-c9fsH1zImLU" class="videoInfoLink" href="./footage.php?v=c9fsH1zImLU">World's Largest Plane Separates The Clouds While Landing (An-225)</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">POLAND - JANUARY 9: The crowd witnessed a majestic moment as the Antonow An-225  <a class="videoInfoLink" id="videoMoreLink-c9fsH1zImLU" href="./footage.php?v=c9fsH1zImLU">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="162.36" name="c9fsH1zImLU">
                <a class="btn btn-default sr-button orange" id="btn-c9fsH1zImLU" href="./footage.php?v=c9fsH1zImLU" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('JsO-QDoGPY0');" id="bookmarkSetter-JsO-QDoGPY0" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-JsO-QDoGPY0"  href="./footage.php?v=JsO-QDoGPY0">
                <div class="youtube" data-embed="JsO-QDoGPY0"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:48</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-JsO-QDoGPY0" class="videoInfoLink" href="./footage.php?v=JsO-QDoGPY0">Monster Waves Reaching Norwegian Oil Rig's Windows</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">During a storm in the north sea, waves got that big that they even reached a siz <a class="videoInfoLink" id="videoMoreLink-JsO-QDoGPY0" href="./footage.php?v=JsO-QDoGPY0">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="JsO-QDoGPY0">
                <a class="btn btn-default sr-button orange" id="btn-JsO-QDoGPY0" href="./footage.php?v=JsO-QDoGPY0" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('KBE9t1IrqXE');" id="bookmarkSetter-KBE9t1IrqXE" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-KBE9t1IrqXE"  href="./footage.php?v=KBE9t1IrqXE">
                <div class="youtube" data-embed="KBE9t1IrqXE"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:12</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-KBE9t1IrqXE" class="videoInfoLink" href="./footage.php?v=KBE9t1IrqXE">Crowds of People Gather Together to Watch an Incredible Avalanche at Oeschinensee</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">BERNESE OBERLAND, SWITZERLAND - FEBRUARY 27: A tourist captures the video of an  <a class="videoInfoLink" id="videoMoreLink-KBE9t1IrqXE" href="./footage.php?v=KBE9t1IrqXE">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.30" name="KBE9t1IrqXE">
                <a class="btn btn-default sr-button orange" id="btn-KBE9t1IrqXE" href="./footage.php?v=KBE9t1IrqXE" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('zjJCrM7kBZA');" id="bookmarkSetter-zjJCrM7kBZA" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-zjJCrM7kBZA"  href="./footage.php?v=zjJCrM7kBZA">
                <div class="youtube" data-embed="zjJCrM7kBZA"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:13</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-zjJCrM7kBZA" class="videoInfoLink" href="./footage.php?v=zjJCrM7kBZA">EXPENSIVE FAIL: Ferrari Spins Out And Crashes When Accelerating!</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">WASSENAAR, NETHERLANDS - MAY 6: The driver loses control of his expensive Ferrar <a class="videoInfoLink" id="videoMoreLink-zjJCrM7kBZA" href="./footage.php?v=zjJCrM7kBZA">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.30" name="zjJCrM7kBZA">
                <a class="btn btn-default sr-button orange" id="btn-zjJCrM7kBZA" href="./footage.php?v=zjJCrM7kBZA" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('kCz6ma-0CXU');" id="bookmarkSetter-kCz6ma-0CXU" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-kCz6ma-0CXU"  href="./footage.php?v=kCz6ma-0CXU">
                <div class="youtube" data-embed="kCz6ma-0CXU"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">02:04</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-kCz6ma-0CXU" class="videoInfoLink" href="./footage.php?v=kCz6ma-0CXU">'Tsunami-Like Waves' Overrun Small Harbor in Italy During Storm | Tyrrhenian Sea</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">Several meter high &#039;tsunami-like waves&#039; caused by heavy storms in the Tyrrhenian <a class="videoInfoLink" id="videoMoreLink-kCz6ma-0CXU" href="./footage.php?v=kCz6ma-0CXU">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="kCz6ma-0CXU">
                <a class="btn btn-default sr-button orange" id="btn-kCz6ma-0CXU" href="./footage.php?v=kCz6ma-0CXU" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('Jno2DawFSfg');" id="bookmarkSetter-Jno2DawFSfg" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-Jno2DawFSfg"  href="./footage.php?v=Jno2DawFSfg">
                <div class="youtube" data-embed="Jno2DawFSfg"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:59</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-Jno2DawFSfg" class="videoInfoLink" href="./footage.php?v=Jno2DawFSfg">Fishing Trawler Tossed Around Like a Toy in Rough Seas and Massive Waves [4K]</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">Scottish fishing vessels Audacious facing rough seas and massive waves in the No <a class="videoInfoLink" id="videoMoreLink-Jno2DawFSfg" href="./footage.php?v=Jno2DawFSfg">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="169.74" name="Jno2DawFSfg">
                <a class="btn btn-default sr-button orange" id="btn-Jno2DawFSfg" href="./footage.php?v=Jno2DawFSfg" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('vmTmGRV0RWQ');" id="bookmarkSetter-vmTmGRV0RWQ" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-vmTmGRV0RWQ"  href="./footage.php?v=vmTmGRV0RWQ">
                <div class="youtube" data-embed="vmTmGRV0RWQ"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">06:55</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-vmTmGRV0RWQ" class="videoInfoLink" href="./footage.php?v=vmTmGRV0RWQ">Monstrous Tornado Wreaks Havoc on Locality</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">WISNER, USA - JUNE 17: Spectator captures the footage of two massive tornados wr <a class="videoInfoLink" id="videoMoreLink-vmTmGRV0RWQ" href="./footage.php?v=vmTmGRV0RWQ">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.30" name="vmTmGRV0RWQ">
                <a class="btn btn-default sr-button orange" id="btn-vmTmGRV0RWQ" href="./footage.php?v=vmTmGRV0RWQ" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('ND9PIn1zvYA');" id="bookmarkSetter-ND9PIn1zvYA" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-ND9PIn1zvYA"  href="./footage.php?v=ND9PIn1zvYA">
                <div class="youtube" data-embed="ND9PIn1zvYA"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:50</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-ND9PIn1zvYA" class="videoInfoLink" href="./footage.php?v=ND9PIn1zvYA">EXTREME EVENT: Explosive Volcanic Eruption Recorded at Mount Shinmoedake</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">KIRISHIMA, JAPAN - JANUARY 26: On January 26, 2011, in Kirishima, Japan, a perso <a class="videoInfoLink" id="videoMoreLink-ND9PIn1zvYA" href="./footage.php?v=ND9PIn1zvYA">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.30" name="ND9PIn1zvYA">
                <a class="btn btn-default sr-button orange" id="btn-ND9PIn1zvYA" href="./footage.php?v=ND9PIn1zvYA" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('eEQouP7T9kU');" id="bookmarkSetter-eEQouP7T9kU" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-eEQouP7T9kU"  href="./footage.php?v=eEQouP7T9kU">
                <div class="youtube" data-embed="eEQouP7T9kU"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:31</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-eEQouP7T9kU" class="videoInfoLink" href="./footage.php?v=eEQouP7T9kU">Merchant Navy Ship in a Storm Force 10 within the Bay of Biscay, Atlantic Ocean (France)</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">This footage shows a 12,000 tonne ship steaming into a Storm force 10 in the Bay <a class="videoInfoLink" id="videoMoreLink-eEQouP7T9kU" href="./footage.php?v=eEQouP7T9kU">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="eEQouP7T9kU">
                <a class="btn btn-default sr-button orange" id="btn-eEQouP7T9kU" href="./footage.php?v=eEQouP7T9kU" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('w8Db7A3JQ6g');" id="bookmarkSetter-w8Db7A3JQ6g" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-w8Db7A3JQ6g"  href="./footage.php?v=w8Db7A3JQ6g">
                <div class="youtube" data-embed="w8Db7A3JQ6g"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:12</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-w8Db7A3JQ6g" class="videoInfoLink" href="./footage.php?v=w8Db7A3JQ6g">Helicopter Knocks Down Lamp Posts During Emergency Landing On Romanian Highway</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">BUCHAREST, ROMANIA - JULY 15: A crazy moment unfolds as a US Black Hawk helicopt <a class="videoInfoLink" id="videoMoreLink-w8Db7A3JQ6g" href="./footage.php?v=w8Db7A3JQ6g">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.30" name="w8Db7A3JQ6g">
                <a class="btn btn-default sr-button orange" id="btn-w8Db7A3JQ6g" href="./footage.php?v=w8Db7A3JQ6g" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('DisUyaUketk');" id="bookmarkSetter-DisUyaUketk" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-DisUyaUketk"  href="./footage.php?v=DisUyaUketk">
                <div class="youtube" data-embed="DisUyaUketk"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">03:17</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-DisUyaUketk" class="videoInfoLink" href="./footage.php?v=DisUyaUketk">Giant Rolling Iceberg Creates a Tsunami-like Wave</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">Large chunks of ice breaking off from glaciers can trigger huge icebergs to flip <a class="videoInfoLink" id="videoMoreLink-DisUyaUketk" href="./footage.php?v=DisUyaUketk">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="108.24" name="DisUyaUketk">
                <a class="btn btn-default sr-button orange" id="btn-DisUyaUketk" href="./footage.php?v=DisUyaUketk" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('WaUPTUItMI8');" id="bookmarkSetter-WaUPTUItMI8" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-WaUPTUItMI8"  href="./footage.php?v=WaUPTUItMI8">
                <div class="youtube" data-embed="WaUPTUItMI8"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">04:21</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-WaUPTUItMI8" class="videoInfoLink" href="./footage.php?v=WaUPTUItMI8">Chemical Tanker In Hurricane</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">A Chemical Tanker is beating into +10 metre high waves during hurricane force wi <a class="videoInfoLink" id="videoMoreLink-WaUPTUItMI8" href="./footage.php?v=WaUPTUItMI8">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="WaUPTUItMI8">
                <a class="btn btn-default sr-button orange" id="btn-WaUPTUItMI8" href="./footage.php?v=WaUPTUItMI8" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('R68Gj9jT_Gg');" id="bookmarkSetter-R68Gj9jT_Gg" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-R68Gj9jT_Gg"  href="./footage.php?v=R68Gj9jT_Gg">
                <div class="youtube" data-embed="R68Gj9jT_Gg"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">02:02</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-R68Gj9jT_Gg" class="videoInfoLink" href="./footage.php?v=R68Gj9jT_Gg">'Tsunami-Like Waves' Overrun Hotel Complex in Russia During Storm | Black Sea</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">SOCHI, RUSSIA - DECEMBER 1: Man captured breath taking footage of waves from his <a class="videoInfoLink" id="videoMoreLink-R68Gj9jT_Gg" href="./footage.php?v=R68Gj9jT_Gg">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.30" name="R68Gj9jT_Gg">
                <a class="btn btn-default sr-button orange" id="btn-R68Gj9jT_Gg" href="./footage.php?v=R68Gj9jT_Gg" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('n-f4ru5eyqg');" id="bookmarkSetter-n-f4ru5eyqg" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-n-f4ru5eyqg"  href="./footage.php?v=n-f4ru5eyqg">
                <div class="youtube" data-embed="n-f4ru5eyqg"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:10</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-n-f4ru5eyqg" class="videoInfoLink" href="./footage.php?v=n-f4ru5eyqg">CLOSE CALL: Luckiest Guy Survives An Unexpected Rockfall By Inches</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">A giant boulder comes spiralling downhill directly towards an unsuspecting civil <a class="videoInfoLink" id="videoMoreLink-n-f4ru5eyqg" href="./footage.php?v=n-f4ru5eyqg">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="n-f4ru5eyqg">
                <a class="btn btn-default sr-button orange" id="btn-n-f4ru5eyqg" href="./footage.php?v=n-f4ru5eyqg" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('0S4HhifEKyo');" id="bookmarkSetter-0S4HhifEKyo" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-0S4HhifEKyo"  href="./footage.php?v=0S4HhifEKyo">
                <div class="youtube" data-embed="0S4HhifEKyo"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">02:41</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-0S4HhifEKyo" class="videoInfoLink" href="./footage.php?v=0S4HhifEKyo">EXTREME EVENT: Enormous Eruption of The Shinmoedake Volcano Caught on Camera</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">KIRISHIMA, JAPAN - JANUARY 26: On January 26, 2011, in Kirishima, Japan, dramati <a class="videoInfoLink" id="videoMoreLink-0S4HhifEKyo" href="./footage.php?v=0S4HhifEKyo">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.30" name="0S4HhifEKyo">
                <a class="btn btn-default sr-button orange" id="btn-0S4HhifEKyo" href="./footage.php?v=0S4HhifEKyo" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('yBJEoISE00w');" id="bookmarkSetter-yBJEoISE00w" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-yBJEoISE00w"  href="./footage.php?v=yBJEoISE00w">
                <div class="youtube" data-embed="yBJEoISE00w"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:19</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-yBJEoISE00w" class="videoInfoLink" href="./footage.php?v=yBJEoISE00w">NATURAL DISASTER: Gigantic Tornado Moves Through Switzerland Town</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">LA CHAUX-DE-FONDS, SWITZERLAND - JULY 24: Bystander captures the fascinating foo <a class="videoInfoLink" id="videoMoreLink-yBJEoISE00w" href="./footage.php?v=yBJEoISE00w">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.61" name="yBJEoISE00w">
                <a class="btn btn-default sr-button orange" id="btn-yBJEoISE00w" href="./footage.php?v=yBJEoISE00w" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('IEJzj5of7W0');" id="bookmarkSetter-IEJzj5of7W0" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-IEJzj5of7W0"  href="./footage.php?v=IEJzj5of7W0">
                <div class="youtube" data-embed="IEJzj5of7W0"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:55</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-IEJzj5of7W0" class="videoInfoLink" href="./footage.php?v=IEJzj5of7W0">Ganges River Erosion: Spectators Celebrate When Local's Home Collapses And Lands In the River</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">As time went on it became clear that this house was about to collapse and specta <a class="videoInfoLink" id="videoMoreLink-IEJzj5of7W0" href="./footage.php?v=IEJzj5of7W0">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="IEJzj5of7W0">
                <a class="btn btn-default sr-button orange" id="btn-IEJzj5of7W0" href="./footage.php?v=IEJzj5of7W0" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('Ytwg87IFldc');" id="bookmarkSetter-Ytwg87IFldc" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-Ytwg87IFldc"  href="./footage.php?v=Ytwg87IFldc">
                <div class="youtube" data-embed="Ytwg87IFldc"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:29</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-Ytwg87IFldc" class="videoInfoLink" href="./footage.php?v=Ytwg87IFldc">CLOSE CALL: Military Helicopter Hits Massive Object Midair And Almost Crashes</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">While the Indian Airforce transports Indian Army members, a big plastic sheet ge <a class="videoInfoLink" id="videoMoreLink-Ytwg87IFldc" href="./footage.php?v=Ytwg87IFldc">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="Ytwg87IFldc">
                <a class="btn btn-default sr-button orange" id="btn-Ytwg87IFldc" href="./footage.php?v=Ytwg87IFldc" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('IICa799zTPw');" id="bookmarkSetter-IICa799zTPw" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-IICa799zTPw"  href="./footage.php?v=IICa799zTPw">
                <div class="youtube" data-embed="IICa799zTPw"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:42</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-IICa799zTPw" class="videoInfoLink" href="./footage.php?v=IICa799zTPw">Helicopter Crashes After Flying Into Steel Cables</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">Pilot cheats death as helicopter crashes while putting up a seven-storey Christm <a class="videoInfoLink" id="videoMoreLink-IICa799zTPw" href="./footage.php?v=IICa799zTPw">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.30" name="IICa799zTPw">
                <a class="btn btn-default sr-button orange" id="btn-IICa799zTPw" href="./footage.php?v=IICa799zTPw" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('tZ2674_UZtA');" id="bookmarkSetter-tZ2674_UZtA" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-tZ2674_UZtA"  href="./footage.php?v=tZ2674_UZtA">
                <div class="youtube" data-embed="tZ2674_UZtA"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:48</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-tZ2674_UZtA" class="videoInfoLink" href="./footage.php?v=tZ2674_UZtA">Huge Crane Slides Off Trailer and Crashes Downhill</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">400t construction machinery slides from trailer and down a hill after towing tru <a class="videoInfoLink" id="videoMoreLink-tZ2674_UZtA" href="./footage.php?v=tZ2674_UZtA">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="141.45" name="tZ2674_UZtA">
                <a class="btn btn-default sr-button orange" id="btn-tZ2674_UZtA" href="./footage.php?v=tZ2674_UZtA" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('MEnAFaGZssE');" id="bookmarkSetter-MEnAFaGZssE" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-MEnAFaGZssE"  href="./footage.php?v=MEnAFaGZssE">
                <div class="youtube" data-embed="MEnAFaGZssE"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:23</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-MEnAFaGZssE" class="videoInfoLink" href="./footage.php?v=MEnAFaGZssE">Seaplane Smashes Into Floating Debris And Spirals Out Of Control</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">SALZKAMMERGUT, AUSTRIA - DECEMBER 13: A Dornier DO-24 seaplane hit floating debr <a class="videoInfoLink" id="videoMoreLink-MEnAFaGZssE" href="./footage.php?v=MEnAFaGZssE">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="129.15" name="MEnAFaGZssE">
                <a class="btn btn-default sr-button orange" id="btn-MEnAFaGZssE" href="./footage.php?v=MEnAFaGZssE" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('AsGosWTHyOA');" id="bookmarkSetter-AsGosWTHyOA" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-AsGosWTHyOA"  href="./footage.php?v=AsGosWTHyOA">
                <div class="youtube" data-embed="AsGosWTHyOA"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:22</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-AsGosWTHyOA" class="videoInfoLink" href="./footage.php?v=AsGosWTHyOA">CLOSE CALL: Jet Shoots Over Airshow Fans</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">Watch how this Eurofighter Typhoon performs an extremely dangerous landing makin <a class="videoInfoLink" id="videoMoreLink-AsGosWTHyOA" href="./footage.php?v=AsGosWTHyOA">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.30" name="AsGosWTHyOA">
                <a class="btn btn-default sr-button orange" id="btn-AsGosWTHyOA" href="./footage.php?v=AsGosWTHyOA" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('9sYG8ixnS6c');" id="bookmarkSetter-9sYG8ixnS6c" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-9sYG8ixnS6c"  href="./footage.php?v=9sYG8ixnS6c">
                <div class="youtube" data-embed="9sYG8ixnS6c"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">03:28</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-9sYG8ixnS6c" class="videoInfoLink" href="./footage.php?v=9sYG8ixnS6c">Controlled Demolition of 60 meters high Business Center (Multiple Cameras)</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">On 19.03.2017 the &quot;Bonn-Center&quot; was blown up at 11:00. 250 kg of explosives were <a class="videoInfoLink" id="videoMoreLink-9sYG8ixnS6c" href="./footage.php?v=9sYG8ixnS6c">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.30" name="9sYG8ixnS6c">
                <a class="btn btn-default sr-button orange" id="btn-9sYG8ixnS6c" href="./footage.php?v=9sYG8ixnS6c" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('-ewdgRtWtGA');" id="bookmarkSetter--ewdgRtWtGA" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink--ewdgRtWtGA"  href="./footage.php?v=-ewdgRtWtGA">
                <div class="youtube" data-embed="-ewdgRtWtGA"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">01:38</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink--ewdgRtWtGA" class="videoInfoLink" href="./footage.php?v=-ewdgRtWtGA">HUGE LANDSLIDE Destroys Mountain Road in India!</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">CHAMOLI, INDIA - MAY 4: Bystanders capture the footage of a terrifying landslide <a class="videoInfoLink" id="videoMoreLink--ewdgRtWtGA" href="./footage.php?v=-ewdgRtWtGA">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="142.07" name="-ewdgRtWtGA">
                <a class="btn btn-default sr-button orange" id="btn--ewdgRtWtGA" href="./footage.php?v=-ewdgRtWtGA" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('i97qxKkbCXM');" id="bookmarkSetter-i97qxKkbCXM" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-i97qxKkbCXM"  href="./footage.php?v=i97qxKkbCXM">
                <div class="youtube" data-embed="i97qxKkbCXM"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:50</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-i97qxKkbCXM" class="videoInfoLink" href="./footage.php?v=i97qxKkbCXM">CLOSE CALL: Metal Roof Flies off Truck and Smashes into Oncoming Vehicle</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">CASSIA VEIENTANA, ITALY - APRIL 6: Dashcam records the footage of an unfortunate <a class="videoInfoLink" id="videoMoreLink-i97qxKkbCXM" href="./footage.php?v=i97qxKkbCXM">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.61" name="i97qxKkbCXM">
                <a class="btn btn-default sr-button orange" id="btn-i97qxKkbCXM" href="./footage.php?v=i97qxKkbCXM" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
              <div class="card " >
                <div class="card-body" style="padding-top:4px;">
                <div class="text-center" >
                <a onclick="addBookmark('znb_AIQT0UA');" id="bookmarkSetter-znb_AIQT0UA" style="cursor:pointer;"><i style="font-size:24px;color:#DE0404;" class="fa fa-bookmark-o" title="Bookmark video for later" ></i></a>
                </div>
                <a id="videoElementLink-znb_AIQT0UA"  href="./footage.php?v=znb_AIQT0UA">
                <div class="youtube" data-embed="znb_AIQT0UA"> 
                <div style="position: absolute;bottom: 0px;right: 0px; padding: 2px; margin:5px;z-index:50;background-color:black;"><font color="white">00:37</font></div>
                </div>
                </a>
                  <h4 class="card-title videoElementTitle">
                    <a style="color:#DE0404 !important;" id="titleLink-znb_AIQT0UA" class="videoInfoLink" href="./footage.php?v=znb_AIQT0UA">CLOSE CALL: Hippo Unexpectedly Attacks Vehicle While on a Safari</a>
                  </h4>
                  <p class="card-text">
                      <div style="height:3em;overflow:hidden;text-overflow: ellipsis;">
                      <p align="justify">BOTSWANA, AFRICA - MARCH 1: Aggressive hippo attacks safari vehicle on March 1,  <a class="videoInfoLink" id="videoMoreLink-znb_AIQT0UA" href="./footage.php?v=znb_AIQT0UA">...[more]</a></p>
                      </div>
                  </p>

                <input type="hidden" value="135.30" name="znb_AIQT0UA">
                <a class="btn btn-default sr-button orange" id="btn-znb_AIQT0UA" href="./footage.php?v=znb_AIQT0UA" style="width:100%;    white-space: normal;" ><i class="fa fa-arrow-circle-right" ></i> REQUEST LICENSE</a>
                </div>

              </div>
            </div> -->




