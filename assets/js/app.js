(function() {

  var x = document.getElementsByClassName("results");

  var y = document.getElementsByTagName("body")[0];
  if(x == 'undefined') {
    y.style.backgroundImage = 'linear-gradient(78deg, #47D1AF 55%, transparent 0%), url("/assets/images/recycle.png")';
  }
  else {
    y.style.backgroundImage = 'linear-gradient(-78deg, #47D1AF 55%, transparent 0%), url("/assets/images/recycle.png")';
  }
})();
