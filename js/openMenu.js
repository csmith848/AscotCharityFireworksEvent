/* BASIC VERSION OF SHOWING/HIDING MENU */
// function openMenu() {
//   var nav = document.getElementsByClassName('nav')[0];
//
//   if (nav.style.display === "block") {
//     nav.style.display = "none";
//   }
//   else {
//     nav.style.display = "block";
//   }
// }

/* ADVANCED VERSION OF SHOWING/HIDING MENU */
var y = -136;
var hideMenu = true;

function openMenu() {
  var nav = document.getElementsByClassName('nav')[0];
  var mainDiv = document.getElementById('mainDiv');
  var bot = document.getElementById('background_bottom');
  var foot = document.getElementById('charity_info');

  if (hideMenu == true) {
    var i = setInterval(animate, 1);
    function animate() {
      if (y == 0) {
        clearInterval(i);
        hideMenu = false;
        // alert('hideMenu = ' + hideMenu);
      }	else {
        nav.style.display = "block";
        y++;
        y++;
        mainDiv.style.top = y + 'px';
        nav.style.top = y + 'px';
        bot.style.top = y + 'px';
        foot.style.top = y + 'px';
      }
    }
  }
  else if (hideMenu == false) {
    var i = setInterval(animate, 1);
    function animate() {
      if (y == -136) {
        clearInterval(i);
        mainDiv.style.top = '0px';
        bot.style.top = '0px';
        foot.style.top = '0px';
        nav.style.display = "none";
        hideMenu = true;
        // alert('hideMenu = ' + hideMenu);
      }	else {
        y--;
        y--;
        mainDiv.style.top = y + 'px';
        nav.style.top = y + 'px';
        bot.style.top = y + 'px';
        foot.style.top = y + 'px';
      }
    }
  }
}
