
// slide show
var arr = [
    "../views/images/vans.png",
    "../views/images/vans2.png",
    "../views/images/vans3.png",
    "../views/images/vans4.png"
];

var slide_show = document.querySelector('#slide_show');
console.log(slide_show);

setInterval(slide, 2000);

var x = 0;
function slide() {
    x++;
    if (x > 3) {
        x = 0;
    }
    slide_show.src = arr[x];
}

