/**
 * Created by aahladmadireddy on 10/4/17.
 */

function truncateByHeight(element, height) {
  for(var i = 0; i < element.length; i++) {
    var textContent = typeof element[i].textContent === 'undefined' ? 'innerText' : 'textContent';
    var parts = element[i][textContent].split(' ');

    while (parts.pop() && element[i].clientHeight > height) {
      element[i][textContent] = parts.join(' ');
    }
    element[i][textContent] += "...";
  }
}

var elements = document.querySelectorAll('.featured-game-description-paragraph');

truncateByHeight(elements, 100);