function toggleImage() {
  var image = document.getElementById('pic');
  if (image.src === '' || image.style.display === 'none') {
      image.src = 'images/pic2.jpg'; // Set the image source
      image.style.display = 'block'; // Show the image
  } else {
      image.src = ''; // Clear the image source
      image.style.display = 'none'; // Hide the image
  }
}
{
  crossorigin="anonymous"
}











// var coll = document.getElementsByClassName("collapsible");
// var i;

// for (i = 0; i < coll.length; i++) {
//   coll[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var content = this.nextElementSibling;
//     if (content.style.display === "block") {
//       content.style.display = "none";
//     } else {
//       content.style.display = "block";
//     }
//   });
// }