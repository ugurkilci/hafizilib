window.onbeforeunload = function() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "exit.php", true);
  xhr.send();
};
