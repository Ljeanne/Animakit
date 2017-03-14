
// GLOBALS

var g_error_in_images   = false;
var g_count             = 0;
var g_catchphrase       = "GREETINGS FROM IAAPA2016 ! *";

// UTILS

function pad (i_str, i_pad, i_max)
{
    i_str = i_str.toString();
    return i_str.length < i_max ? pad(i_pad + i_str, i_pad, i_max) : i_str;
}

function imageError()
{
    g_error_in_images = true;
    $('#screenshot'+g_count.toString()).remove();
}

function imageLoaded()
{
    if( !g_error_in_images )
    {
        ++g_count;
        var src = "http://www.animakit.com/IAAPA2016/screenshot_" + pad(g_count.toString(), "0", 5) + ".jpg";
        //$('#gallery').append('<a href="'+src+'" target="_blank"> <img id="screenshot'+g_count.toString()+'" onerror="imageError()" onload="imageLoaded()" src="'+src+'" /> </a>');
        $('#gallery').append('\
            <a href="'+src+'" target="_blank">\
                <div id="screenshot'+g_count.toString()+'" class="polaroid">\
                    <img class="img_polaroid" onerror="imageError()" onload="imageLoaded()" src="'+src+'" />\
                    <div class="container">\
                        <p class="polaroid_text">'+g_catchphrase+'</p>\
                    </div>\
                </div>\
            </a>\
         ');
    }
}

// MAIN

(function()
{
    
    // Load first
    var src = "http://www.animakit.com/IAAPA2016/screenshot_00000.jpg";
    //$('#gallery').append('<a href="'+src+'" target="_blank"> <img id="screenshot0" onerror="imageError()" onload="imageLoaded()" src="'+src+'" /> </a>');
    $('#gallery').append('\
        <a href="'+src+'" target="_blank">\
            <div id="screenshot0" class="polaroid">\
                <img class="img_polaroid" onerror="imageError()" onload="imageLoaded()" src="'+src+'" />\
                <div class="container">\
                    <p class="polaroid_text">'+g_catchphrase+'</p>\
                </div>\
            </div>\
        </a>\
     ');
    
})(); // MAIN
