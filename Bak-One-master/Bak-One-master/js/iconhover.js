(function() {
    var img = document.querySelectorAll('.samples .col-3');
    var i;
    for (i = 0; i < img.length; i++) {
        img[i].addEventListener('mouseover', showTitle);
        img[i].addEventListener('mouseout', hideTitle);
    }
    var face = document.querySelectorAll('.about [class*="col-"]');
    for (i = 0; i < face.length; i++) {
        face[i].addEventListener('mouseover', showTitle);
        face[i].addEventListener('mouseout', hideTitle);
    }
    function showTitle() {
        this.firstElementChild.nextElementSibling.style.visibility = "visible";
    }
    function hideTitle() {
        this.firstElementChild.nextElementSibling.style.visibility = "hidden";
    }
})();