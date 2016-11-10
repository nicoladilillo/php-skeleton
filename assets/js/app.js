(function() {
  var x;
  x = document.getElementsByClassName("results")[0];
  var y = document.getElementsByTagName("body")[0];
  if(x) {
    y.style.backgroundImage = 'linear-gradient(-78deg, #47D1AF 55%, transparent 0%), url("/assets/images/recycle.png")';
  }
  else {
    y.style.backgroundImage = 'linear-gradient(78deg, #47D1AF 55%, transparent 0%), url("/assets/images/recycle.png")';
  }
})();
