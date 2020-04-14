<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<?php
require_once  "slideshow.php";
?>

<div class="slideshow-container">

<?php 
while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
  $beschrijving = $row['Beschrijving'];
  $afbeelding = $row['Afbeelding'];
  
  
  $compleet1 = "<div class='mySlides'><img src='";
  $compleet2 = "' style='width:100%'><div class='slidetext'>";
  $compleet3 = "</div></div>";

echo $compleet1;
echo $afbeelding;
echo $compleet2;
echo $beschrijving;
echo $compleet3;
}
?>




<a class="slideprev" onclick="plusSlides(-1)">&#10094;</a>
<a class="slidenext" onclick="plusSlides(1)">&#10095;</a>

</div>




<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>