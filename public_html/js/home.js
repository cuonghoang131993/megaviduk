
var myPlayer;
jQuery(function () {
    var isIframe=function()
    {var a=!1;
    try{
    self.location.href!=top.location.href&&(a=!0)
    }
    catch(b){
    a=!0}return a};
    
    myPlayer = jQuery(".player").YTPlayer();
});

function captchaSubmit(data) {
    document.getElementById("contactForm").submit();
}

document.getElementById('sub').style.display = 'none';
$('#selVal').on('change', function(){
var selected = $(this).find("option:selected").val();

if (selected.indexOf('Other') !== -1){
document.getElementById('sub').style.display = 'block';
}
else{
document.getElementById('sub').style.display = 'none';
}
});