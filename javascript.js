function mouseOverceh() {
    document.getElementById("cehimg").style.display = "block";
    document.getElementById("basicimg").style.display = "none";

}

function mouseOutceh() {
    document.getElementById("cehimg").style.display = "none";
    document.getElementById("basicimg").style.display = "block";
}

function mouseOvercpe() {
    document.getElementById("cpeimg").style.display = "block";
    document.getElementById("basicimg").style.display = "none";

}

function mouseOutcpe() {
    document.getElementById("cpeimg").style.display = "none";
    document.getElementById("basicimg").style.display = "block";
}

$(document).ready(function() {
    $('.menu-toggle').click(function() {
        $('nav').toggleClass('active')
    })
})
