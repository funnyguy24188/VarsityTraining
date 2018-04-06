// WHEN CLICK PLAY BUTTON
jQuery('#mu-abtus-video').on('click', function(event) {
    event.preventDefault();
    jQuery('body').append("<div id='about-video-popup'><span id='mu-video-close' class='fa fa-close'></span><iframe id='mutube-video' name='mutube-video' frameborder='0' allowfullscreen></iframe></div>");
    jQuery("#mutube-video").attr("src", jQuery(this).attr("href"));
});
// WHEN CLICK CLOSE BUTTON
jQuery(document).on('click','#mu-video-close', function(event) {
    jQuery(this).parent("div").fadeOut(1000);
});
// WHEN CLICK OVERLAY BACKGROUND
jQuery(document).on('click','#about-video-popup', function(event) {
    jQuery(this).remove();
});