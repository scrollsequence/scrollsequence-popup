console.log('popup script loaded')

/**
 * Listen to ssqPreloadPercentage event. This event fires, once enough images have finished preloading. 
 * The percentage of images that require to finish loading, can be adjusted in Scrollsequence settgins.
 */ 
document.addEventListener("ssqPreloadPercentage", function(){ 
    console.log("Scrollsequence popup: ssqPreloadPercentage has been met! "); 
    // Enter here what you want to do after the ssqPreloadPercentage has been met. 
    fadeOutPopup(); // <----- UNCOMMENT THIS LINE IF YOU WANT THE PRELOADER TO BE TURNED OFF ONCE PRELOAD PERCENTAGE HAS BEEN MET. 
});


/**
 * 
 * Listen for event that checks when the ssq-popup-video stops playing and run a function once video has finished.
 * 
 */
document.getElementById('ssq-popup-video').addEventListener('ended',handleVideoEnded,false);
function handleVideoEnded(e) {
    // Enter here what you want to do after the video ends
    //fadeOutPopup(); // <----- UNCOMMENT THIS LINE IF YOU WANT THE PRELOADER TO BE TURNED OFF ONCE VIDEO ENDS. 
}

/**
 * This makes the popup fade out (autoAlpha uses visibility and opacity under the hood). 
 * You can use any GSAP animation as the library is being loaded for the Scrollsequence PRO version automatically
 * 
 */
function fadeOutPopup(){
    gsap.to("#ssq-popup", { autoAlpha: 0 })
}


