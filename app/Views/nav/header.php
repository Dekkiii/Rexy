<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- <link href="css/login.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
</head>
<body>
    <!--header design-->
    <tml="show">
        <header class="header">
            <a href="main/" class="logo">
                <img src="img/logo.png" alt="">
        

            <nav class="navbar">
                <a href="main/" class="active">Home</a>
                <a href="laptop_main">Laptop/PC</a>
                <a href="printer_main">Printer</a>
                <a href="internet_main">Internet</a>
                <a href="email_main">Email</a>
                 <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 btn btn-primary btn-sm" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary btn-sm" type="submit">Search</button> -->
                <button class="Login-btn"> login </button> 
        </nav>
</header>
<!-- <div class="blur-bg-overlay"></div>
<div class="form-popup">
    <span class="close-btn material-symbols-rounded">close</span>
    <div class="form-box">
        <div class="form-details">
            <h2>Welcome</h2>
        </div>
<div class="form-content">
    <h2>LOGIN</h2>
    <form action ="#">
        <div class="input-field">
            <input type="text" required>
           <label>Name</label>
        </div>
        <div class="input-field">
            <input type="text" required>
           <label> Department</label>
           <button type="submit">Log In</button>
        </div>
    </form>
 </div>
   </div>
   </div>

 <style>

.blur-bg-overlay {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 10;
    height: 100%;
    width: 100%;
    opacity: 0;
    pointer-events: none;
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    transition: 0.1s ease;
}



.form-popup {
    position: fixed;
    top: 50%;
    left: 50%;
    width: 50%;
    z-index: 20;
    opacity: 0;
    pointer-events: none;
    max-width: 720px;
    background: aqua;
    transform: translate(-50%, -50%);
    transition: transform 0.3s ease, opacity 0.3s;
}

.show-popup .form-popup {
    opacity: 1;
    pointer-events: auto;
    transform: translate(-50%, -50%);
    transition: transform 0.3s ease, opacity 0.1s;
}

.show-popup .blur-bg-overlay {
    opacity: 1;
    pointer-events: auto;
}

.form-popup .form-box{
    display: flex;
}

.form-box .form-content {
    width: 50%;
    padding: 100px;
}

.form-box .form-details{
    width: 100%;
    color: #fff;
    max-width: 330px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: url("img/logo.png"); 
    background-size: cover;
    background-position: center center;
}   

form .input-field{
    height: 50px;
    width: 100%;
    margin-top: 20px;
    position: relative;
}

.input-field input {
    height: 100%;
    width: 100%;
    background: #fff;
    outline: none;
    font-size: 0.95rem;
    padding: 0 15px;
    border: 1px solid #717171;
    border-radius: 3px;
}

.input-field input:focus {
    border: 1px solid #00bcd4;
}

.input-field label {
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    color: #4a4646;
    pointer-events: none;
    transition: 0.2s ease;

}

.input-field input:focus + label,
        .input-field input:valid + label {
            transform: translateY(-150%);
            color: #00bcd4;
            font-size: 0.75rem;
        }

button {
    width: 100%;
    color: #fff;
    border: none;
    outline: none;
    padding: 14px 0;
    font-size: 1rem;
    font-weight: 500;
    border-radius: 3px;
    cursor: pointer;
    margin: 25px 0;
    background: #00bcd4;
    transition: 0.2s ease;
    
}

button:hover {
    background-color: #0199a3;
}
.close-btn {
    position: absolute;
    top: 12px;
    right: 12px;
    color: #878484;
    cursor: pointer;
}

 </style>        
    

<script> 
const showPopupBtn = document.querySelector(".Login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = formPopup.querySelector(".close-btn");

showPopupBtn.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});

hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

</script>
</body>
</html> -->



 





<body>
<div class="blur-bg-overlay"></div>
    <div class="form-wrapper">
    <span class="close-btn material-symbols-rounded">close</span>
        <h2>Log In</h2>
        <form action="#">
            <div class="form-control">
                <input type="text" required>
                <label>Name</label>
            </div>
            <div class="form-control">
                <input type="text" required>
                <label>Department</label>
            </div>
            <button type="submit">Log In</button>
           
        </form>
        
    </div>
<style>




.blur-bg-overlay {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 10;
    height: 100%;
    width: 100%;
    opacity: 0;
    pointer-events: none;
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    transition: 0.1s ease;
}


.form-wrapper {
    position: fixed;
    left: 50%;
    top: 50%;
    z-index: 20;
    border-radius: 4px;
    padding: 70px;
    width: 400px;
    transform: translate(-50%, -50%);
    background: aqua;
    background-image: linear-gradient(#74d8f3,#c0ebf7,#0388ad);
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3 ease, transform 0.3 ease;
    border: blue;
}

.show-popup .form-wrapper {
    opacity: 1;
    pointer-events: auto;
    transition: opacity 0.3 ease, transform 0.3 ease;

}

.show-popup .blur-bg-overlay {
    opacity: 1;
    pointer-events: auto;
}

.form-wrapper h2 {
    color: black;
    font-size: 2rem;
    text-align: center;
    margin-bottom: 29px;
    
}

/* .form-wrapper form {
    margin: 25px 0 65px;
} */

form .form-control {
    height: 50px;
    position: relative;
    margin-bottom: 16px;
}

.form-control input {
    height: 100%;
    width: 100%;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 4px;
    color: black;
    font-size: 1rem;
    padding: 0 20px;
}

.form-control input:is(:focus, :valid) {
    background: #d6d5d5;
    padding: 16px 20px 0;
}

.form-control label {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1rem;
    pointer-events: none;
    color: #00bcd4;
    transition: all 0.1s ease;
}

.form-control input:is(:focus, :valid)~label {
    font-size: 0.75rem;
    transform: translateY(-130%);
}

form button {
    width: 100%;
    padding: 16px 0;
    font-size: 1rem;
    background: #00bcd4;
    color: black;
    font-weight: 500;
    border-radius: 4px;
    border: none;
    outline: none;
    margin: 25px 0 10px;
    cursor: pointer;
    transition: 0.1s ease;
}

form button:hover {
    background: #0097a7;
}

.form-wrapper a {
    text-decoration: none;
}

.form-wrapper a:hover {
    text-decoration: underline;
}



@media (max-width: 740px) {
   
    .form-wrapper {
        width: 100%;
        top: 43%;
    }

    .form-wrapper form {
        margin: 25px 0 40px;
    }
}

button {
    width: 100%;
    color: #fff;
    border: none;
    outline: none;
    padding: 14px 0;
    font-size: 1rem;
    font-weight: 500;
    border-radius: 3px;
    cursor: pointer;
    margin: 25px 0;
    background: #00bcd4;
    transition: 0.5s ease;
    
}

button:hover {
    background-color: #0199a3;
}

.close-btn {
            position: absolute;
            top: 12px;
            right: 12px;
            color: #878484;
            cursor: pointer;
        }

</style>


<script>

const showPopupBtn = document.querySelector(".Login-btn");
const formPopup = document.querySelector(".form-wrapper");
const hidePopupBtn = formPopup.querySelector(".close-btn");

        document.querySelector('.Login-btn').addEventListener('click', function() {
            document.body.classList.add('show-popup');
        });

        document.querySelector('.blur-bg-overlay').addEventListener('click', function() {
            document.body.classList.remove('show-popup');
        });
      
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

    </script>
 


</body>
</html>