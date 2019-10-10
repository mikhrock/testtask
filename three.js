/**
 * Task 3
 */

var div = document.getElementById('t');
for (var i = 0; i < div.childNodes.length; i++) {
  if (div.childNodes[i].className == 'text_el') {
    // 1
    div.childNodes[i].style.color = 'red';

    // 2
    div.childNodes[i].style.cssText = 'color: red';

    // 3
    div.childNodes[i].setAttribute('style', 'color: red');
  }
}
