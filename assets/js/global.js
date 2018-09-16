document.getElementById('video-2').onload = function () {
    document.getElementById("loader").style.display = "none";
    document.getElementById("right-content").style.display = "block";
};

function html(image, frameID) {
    const frame = document.getElementById(frameID);

    image.style.display = "none";
    frame.style.display = "inline-block";
    frame.src += "?autoplay=1";
}