var hinhanh = [];
var j = 1;
function loadanh() {
  for (var i = 1; i < 5; i++) {
    hinhanh[i] = new Image();
    hinhanh[i].src = "/img/banner" + i + ".jpg";
  }
}

setInterval(function () {
  j++;
  if (j > 4) {
    j = 1;
  }
  document.getElementById("slideshow").src = hinhanh[j].src;
}, 2000);
