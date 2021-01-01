// wait for the last video to load, then show the right side content
document.getElementById('video-4').onload = function () {
    document.getElementById("loader").style.display = "none";
    document.getElementById("right-content").style.display = "block";
};

// play the clicked video
function playVideo(span, frameID, imageID) {
    const frame = document.getElementById(frameID);
    const image = document.getElementById(imageID);

    span.style.display = "none";
    image.style.display = "none";
    frame.style.display = "inline-block";
    frame.src += "?autoplay=1";
}