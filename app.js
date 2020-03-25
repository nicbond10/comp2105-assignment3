// set light to true
var light=true;
// when toggle is clicked run toggleTheme()
// light gets set to false to change the theme to dark
// on next click light changes back to true to change theme back to light
function toggleTheme(){
  light = !light;
  light ? document.documentElement.setAttribute('data-theme', 'light'):
  document.documentElement.setAttribute('data-theme', 'dark');
}

// jQuery text fade-in effect
$(document).ready(function () {
    // delay for 250 milliseconds and then fadeIn content over 2000 milliseconds
    $('.reveal1').delay(250).fadeIn(2000);
    // delay for 1500 milliseconds and then fadeIn content over 2000 milliseconds
    $('.reveal2').delay(1500).fadeIn(2000);
});