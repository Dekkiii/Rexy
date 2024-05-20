<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Touchpad Problem</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="../public/css/touchpad.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  >
    <link href='https://fonts.googleapis.com/css?family=Alkatra' rel='stylesheet'>  
   


<body>
    <!-- <div class="steps">
    <div class="background-container"> 
        <div class="center">
            <h1>Touchpad is not working/ghosting</h1>
        </div>

        <h2>Solution:</h2><br><span class= "Solution"> Solution &nbsp <i class="fa fa-lightbulb-o fa-2x"></i></span> 
        <div class="clean">

        <div style="text-align:left">  
        <span class="dot">1</span>
        <span>Press <b><i>"Win + S"</i></b> key.<br></span> 
        <div class="text-container">
    <p> Press <b><i>"Win + S"</i></b> key.<br></p>
</div>
        </div>
              <h3>Step 1:</h3>
                Press <b><i>"Win + S"</i></b> key.<br>
                2. Search for "Touchpad" and click on the first option as shown in the picture.
                <br>
                
                   
                <div class="content"> <br><br><br>
                    <img src="img/touchpad.png" alt="" width="60%" height="60%" class="center"> <br><br><br></p>    
                </div>
                <br>
                3. Turn on the "touchpad" as shown in the picture and try again. <br><br><br>
                <img src="img/touchpad1.png" alt="" width="60%" height="60%"> <br><br><br>
                4. If the touchpad is still not working or ghosting (sometimes work, sometimes doesn't) then try your best to record a video of it and notify the IT dept regarding this. <br><br><br>
            
        </div>
    </div>
    </div> -->
<!-- 


    <div class="wrapper">
    <div class="background-container"> 
        <span class="touchpad-text"><center><i> Touchpad not Working/Ghosting? </i><br></center></span>
<br>
<span class= "Solution"> Solution &nbsp <i class="fa fa-lightbulb-o fa-2x"></i></span> 

    <div id="test-div">
    <div class="step-container">
        <span class="badge">Step 1</span>
        <div class="text-container">
            <span class="step-text">Press <b><i>Windows key + S</i></b>.</span>
        </div>
    </div>
    <div class="step-container">
        <span class="badge">Step 2</span>
        <div class="text-container">
            <span class="step-text"> Search for "Touchpad" and click on the first option as shown in the picture.
    <button class="button"  onclick="toggleImage()">Show Image</button>
        <div class="image-container" id="image3">
            <img id="pic" src="img/touchpad.png" alt="Step 2 Image" style="display: none;"></div>
        </div>
    </div>
    <div class="step-container">
        <span class="badge">Step 3</span>
        <div class="text-container">
            <span class="step-text">Turn on the "touchpad" as shown in the picture and try again.
            <button class="button2"  onclick="toggleImage2()">Show Image</button>
            <div class="image-container2" id="image4">
            <img id="pic2" src="img/touchpad1.png" alt="Step 3 Image" style="display: none;"></div>
        </div>
    </div>

    <span class="Note"><b>Note:</b>  If the touchpad is still not working or ghosting (sometimes work, sometimes doesn't) then try your best to record a video of it and notify the IT dept regarding this.
</div>
</div> -->

    
<!-- 
<style>

.step-container {
    display: flex;
    align-items: center;
    margin: 0 200px;
 margin-bottom: 20px; /* Add margin below each step */ -->
    <!-- margin-top: 00px;
     
} -->
<!-- 
.badge {
    height: 70px;
    width: 70px;
    display: flex;
    padding: 20px;
    justify-content: center; 
    align-items: center;
    place-content: center;
    border-radius: 80%;
    background: #269FC0;
    color:#ffffff;
  font-size: 13px;
    font-family: Poppins, Constantia, "Lucida Bright", "DejaVu Serif", Georgia, "serif";
    margin-right: 20px; /* Add margin between steps */
    /* box-sizing: border-box; */
    text-align: center;
   
 
}
/*  -->
<!-- .text-container {
    padding-left: 0px;
    position: relative;

   
} */

.text-container {
    padding-left: 0px;
    position: relative;
    max-width: 100%; /* Ensure the container doesn't exceed the width of its parent */
    box-sizing: border-box; /* Include padding and border in the width calculation */

}



.step-text {
    font-family: Poppins, Constantia, "Lucida Bright", "DejaVu Serif", Georgia, "serif";
    width: 600px;
    padding: 30px;
    background-color:rgba(106, 144, 247, 0.386);
    border: 2px solid rgba(1, 144, 228, 0.5);
    border-radius: 10px;
    display: inline-block;
    color:black;
    font-size: 13px;

}

.button {
    padding: 2px 4px;
    background-color: #286aba;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    position: absolute; /* Position the button absolutely */
    bottom: 10px; /* Adjust the distance from the bottom */
    right: 10px; /* Adjust the distance from the right */
    Font-size: 10px;
    
}

.button2 {
    padding: 2px 4px;
    background-color: #286aba;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    position: absolute; /* Position the button absolutely */
    bottom: 10px; /* Adjust the distance from the bottom */
    right: 10px; /* Adjust the distance from the right */
    Font-size: 10px;
}
.button:hover {
    background-color: #1f4d85; 
}

.button2:hover {
    background-color: #1f4d85; 
}
.image-container {
    display: flex;
    justify-content: center; /* Align items horizontally at the center */
    align-items: center; /* Align items vertically at the center */
    height: auto; /* Set a fixed height for the container */
    margin-top: 10px;
}
.image-container img {
    max-width: 100%; /* Ensure the image doesn't exceed its container's width */
    height: auto; /* Maintain the aspect ratio */
    position: center;    
}

.image-container2 {
    display: flex;
    justify-content: center; /* Align items horizontally at the center */
    align-items: center; /* Align items vertically at the center */
    height: auto; /* Set a fixed height for the container */
    margin-top: 10px;
}

.image-container2 img {
    max-width: 100%; /* Ensure the image doesn't exceed its container's width */
    height: auto; /* Maintain the aspect ratio */
    position: center;    
}

/* body {
    margin-top: 100px; Add margin at the top of the body */
/* } */

.touchpad-text {
    
    font-weight: bold;
   /* font-family: 'Times New Roman', Times, serif; */
   font-family: sans-serif;
    font-size: 40px;
    color: black;
   
}

.Solution {
    font-size: 25px;
    font-weight: bold;
    font-family: 'Alkatra';
    display: flex;
    align-items: center;
    padding-left: 40px; 
    padding-bottom: 20px;
}

.Note {
    color: black;
    font-size: 14px;
}
.fa-lightbulb-o { 
    color: gold;
}

.background-container {
    background-color: #ffffff; /* Background color */
    padding: 10px 5px; /* Add some padding */
    border-radius: 10px;
    /* height: 600%; */
   
}
body {
    background-color: rgba(106, 144, 247, 0.386) !important; /* Change the background color of the entire HTML document */
    width: 100%; /* Set the width to 100% of the viewport */
    height: 100%; /* Set the height to 100% of the viewport height */
    margin: 0; /* Remove default body margin */
    padding: 0; /* Remove default body padding */
}

/* Styles for the wrapper div */
.wrapper {
    width: 100%; /* Set the width of the wrapper */
    max-width: 1200px; /* Set a maximum width to prevent it from becoming too wide on larger screens */
    margin: 0 auto; /* Center the wrapper horizontally */
    padding: 50px; /* Add some padding to the wrapper */
    padding-top: 100px;
    
}

</style>
    <script> -->
<!-- 
function toggleImage() {
    var image = document.getElementById('pic');
    if (image.src === '' || image.style.display === 'none') {
        image.src = 'img/touchpad.png'; // Set the image source
        image.style.display = 'block'; // Show the image
    } else {
        image.src = ''; // Clear the image source
        image.style.display = 'none'; // Hide the image
    }
}

function toggleImage2() {
    var image = document.getElementById('pic2');
    if (image.src === '' || image.style.display === 'none') {
        image.src = 'img/touchpad1.png'; // Set the image source
        image.style.display = 'block'; // Show the image
    } else {
        image.src = ''; // Clear the image source
        image.style.display = 'none'; // Hide the image
    }
}

{
    crossorigin="anonymous"
} -->

<!-- 
    </script> -->
    <!-- custom js -->
     <!-- <script src="js/script.js"></script> -->
    <!--<script src="js/touchpad.js"></script> -->
<!-- </body>
</html> -->



<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="touchpad.css" />  
  <link rel="stylesheet" type="text/Javascript" href="touchpad.js">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  >
  <link href='https://fonts.googleapis.com/css?family=Itim' rel='stylesheet'>

  
  <body>  
    <!-- <div class="wrapper"> -->
        
    
     <div class="background-container"> 
        <h1> <span class="touchpad-text"><center>Touchpad not Working?<br></center></span> </h1>
<br>
 <span class= "Solution"> Solution &nbsp <i class="fa fa-lightbulb-o fa-2x"></i></span> <br> 
    <div class="row g-5 justify-content-center">
        <div class="col-md-6 col-lg-3">
          <div class="card bg-light position-relative">
            <span class="step-indicator">1</span><br>
            <div class="card-body text-center">
                <h3 class="card-title mb-3">John Doe</h3>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                </p>
            </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card bg-light  position-relative">
            <span class="step-indicator">2</span><br>
          <div class="card-body text-center">
            <button class="button"  onclick="toggleImage()">Show Image</button>
    	<div class="image-container" id="image3">
            <img id="pic" src="images/pic2.jpg" alt="Step 2 Image" style="display: none;"></div>
            <h3 class="card-title mb-3">Jane Doe</h3>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
            </p>
        </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-3">
    <div class="card bg-light position-relative">
        <span class="step-indicator">3</span><br>
      <div class="card-body text-center">
            <button class="button" onclick="toggleImage()">Show Image</button>
            <div class="image-container" id="image4">
                <img id="pic" src="images/pic3.jpg" alt="Step 3 Image" style="display: none;"></div>
        <h3 class="card-title mb-3">Steve Smith</h3>
        <p class="card-text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
        </p>
  </div>
</div>
</div>

</html>

<style>
html, body {
    background-color: #47b2d0 !important; /* Set the background color for the entire document */
    background-image: linear-gradient(#74d8f3,#c0ebf7,#0388ad);
    width: 100%; /* Ensure the width covers the viewport */
    height: 100%; /* Ensure the height covers the viewport */
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
    display: flex;
    justify-content: center; /* Center content horizontally */
    align-items: center; /* Center content vertically */
}

.background-container {
    background-color: #ffffff; /* Background color */
    padding: 50px 10px; /* Add some padding */
    border-radius: 10px;
    margin: 40px;
    /* margin-top: 5rem; */
    max-width: 1200px; /* Set a max-width to control the size */
    width: 100%; /* Ensure it takes full width up to max-width */
    border: 2px solid rgba(1, 144, 255, 0.5);
}


.card {
    margin-bottom: 10px; /* Add margin between cards */
    padding: 50px 10px;
   
    border: 2px solid rgba(1, 144, 228, 0.5);
}

.touchpad-text  {
    
    font-family:'Times New Roman', Times, serif;
    font-weight: 700;
    background: linear-gradient(to right, blue, aqua); /* Apply gradient */
    -webkit-background-clip: text;
    -webkit-text-fill-color: black; /* Make the text transparent */
    -webkit-text-stroke: 1px #74d8f3;
    text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2); /* Add shadow for gradient effect */
}
    

.step-indicator {
    position: absolute;
    top: 0;
    left: 0;
    width: 30px;
    height: 30px;
    background-color: #286aba; /* Adjust color as needed */
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-weight: bold;
}


.button {
    padding: 4px 8px;
    background-color: #286aba;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    position: absolute; /* Position the button absolutely */
    bottom: 10px; /* Adjust the distance from the bottom */
    right: 10px; /* Adjust the distance from the right */
    
}
.button:hover {
    background-color: #1f4d85; 
}

.Solution {
    color:black;
    font-size: 20px;
}



</style>
<script>
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

</script>
</body>
</html>



