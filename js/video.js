(function () {
    var youtube = document.querySelectorAll(".youtube");
    for (var i = 0; i < youtube.length; i++) {
        var source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed + "/hqdefault.jpg";
        var image = new Image();
        image.src = source;
        image.addEventListener("load", function () {
            youtube[i].appendChild(image);
        }(i));
    };

})();

function captchaSubmit(data) {
    document.getElementById("contactForm").submit();
}

// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);



function getYTPlayer() {
    $('div[class="youtube"]').each(function () {
        //to show video in modal:
        var ytID = this.getAttribute('data-embed');
        var player = {};
        player['player' + ytID];
        $('#videoInfo-modal' + ytID).on('show.bs.modal', function () {
            player['player' + ytID] = new YT.Player('youtubeModal2-' + ytID, {
                videoId: ytID,
                playerVars: {
                    enablejsapi: 1,
                    rel: 0,
                    showinfo: 0,
                    iv_load_policy: 3,
                },
                events: {
                    'onReady': onPlayerReady
                }
            });
            function onPlayerReady(event) {
                event.target.playVideo();
            }


        });
        $('#videoInfo-modal' + ytID).on('hide.bs.modal', function () {
            player['player' + ytID].a.parentNode.innerHTML = "<div class='youtubeModal2' id='youtubeModal2-" + ytID + "' style='max-width:100%;'> </div>";
        });


        // Grab video ID from the url (supports youtu.be and youtube.com links)
        var ytLink = "http://youtu.be/" + this.getAttribute('data-embed');
        var videoID = ytLink.match(/(youtu\.be\/|&*v=|\/v\/|\/embed\/)+([A-Za-z0-9\-_]{5,11})/);

        var tipAlignmentAt = 'right center';
        var tipAlignmentMy = 'left center';

        var carWidth = Math.round($(window).width() * 0.8 + 40);
        if ((this.getBoundingClientRect().left % carWidth) * 2 > carWidth) {
            tipAlignmentAt = 'left center';
            tipAlignmentMy = 'right center';
        }

        // If we couldn't parse the URL, continue on to the next link...
        if (!videoID || videoID.length < 1) { return; }

        /*
         * We'll also add a unique identifier to the end so we can have multiple tooltips
         * with the same youtube URL...
         */
        videoID = videoID[2] + $.fn.qtip.nextid;

        $(this).qtip({
            id: videoID,
            content: $('<div />', { id: videoID }),
            position: {
                at: tipAlignmentAt,
                my: tipAlignmentMy
            },
            show: {
                event: 'mouseover',

                /*
                 * Unfortunately for us, FF reloads iframe contents when any of its parents
                 * visibility is toggled, meaning we lose the player API reference on first hide.
                 * Luckily for us, setting and resetting the display property also causes the onReady
                 * event of the API palyer to fire! Woop. So we'll just reload it manually.
                 */
                effect: function () {
                    var style = this[0].style;
                    style.display = 'none';
                    setTimeout(function () { style.display = 'block'; }, 1);
                }
            },
            hide: {
                fixed: true,
                delay: 200
            },
            style: {
                classes: 'qtip-youtube',
                width: 550
            },
            events: {
                render: function (event, api) {
                    new YT.Player(videoID, {
                        playerVars: {
                            autoplay: 1,
                            enablejsapi: 1,
                            rel: 0,
                            showinfo: 0,
                            iv_load_policy: 3,
                            origin: document.location.host
                        },
                        origin: document.location.host,
                        height: 360,
                        width: 550,
                        videoId: videoID.substr(0, 11),
                        events: {
                            'onReady': function (e) {
                                api.player = e.target;
                                api.player.mute();
                            },
                        }
                    });
                },
                hide: function (event, api) {
                    api.player && api.player.pauseVideo();
                }
            }
        });
    });

}



//wait for caroussel to get position of elements
// carReady true if carroussel loaded
var carReady = false;
function onYouTubeIframeAPIReady() {
    if (carReady) {
        getYTPlayer();
    } else {
        setTimeout(function () { onYouTubeIframeAPIReady() }, 50);
    }
};


$(function () {
    $('[data-toggle="tooltip"]').tooltip();

    //TODO mehrere uebereinander bei schmalen displays
    $(".regular").slick({
        autoplay: true,
        autoplaySpeed: 9000,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: '<a class="carousel-control-prev" style="z-index:99;background-color:black;width:5%;height:5rem; margin:auto;"><span class="carousel-control-prev-icon" aria-hidden="true"></span></a>',
        nextArrow: '<a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next" style="z-index:99;background-color:black; width:5%;height:5rem; margin:auto;"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>',
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 700,
                settings: {
                    autoplaySpeed: 6500,
                    slidesToShow: 1,
                    slidesToScroll: 1

                }
            }
        ]
    });


    carReady = true;
});



document.getElementById('sub').style.display = 'none';
$('#selVal').on('change', function () {
    var selected = $(this).find("option:selected").val();

    if (selected.indexOf('Other') !== -1) {
        document.getElementById('sub').style.display = 'block';
    }
    else {
        document.getElementById('sub').style.display = 'none';
    }
});
