//BLUE IMP GALLERY popis bicikli hr
document.getElementById("bhr").onclick = function(event) {
  event = event || window.event;
  var target = event.target || event.srcElement,
    link = target.src ? target.parentNode : target,
    options = { index: link, event: event },
    links = this.getElementsByTagName("a");
  blueimp.Gallery(links, options);
};

blueimp.Gallery(document.getElementById("bhr").getElementsByTagName("a"), {
  container: "#blueimp-gallery-carousel",
  carousel: true
});
var options = {
  displayClass: "blueimp-gallery-display"
};
//BLUE IMP GALLERYbicikli hr
document.getElementById("ghr").onclick = function(event) {
  event = event || window.event;
  var target = event.target || event.srcElement,
    link = target.src ? target.parentNode : target,
    options = { index: link, event: event },
    links = this.getElementsByTagName("a");
  blueimp.Gallery(links, options);
};

blueimp.Gallery(document.getElementById("ghr").getElementsByTagName("a"), {
  container: "#blueimp-gallery-carousel",
  carousel: true
});
var options = {
  displayClass: "blueimp-gallery-display"
};
