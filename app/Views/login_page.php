<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
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
    opacity: 1;
    
    transition: opacity 0.3 ease, transform 0.3 ease;
    border: blue;
}
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
.form-wrapper h2 {
    color: black;
    font-size: 2rem;
    text-align: center;
    margin-bottom: 29px;
    
}
        .form-control {
            margin-bottom: 20px;
        }
        
        .form-control label {
            display: block;
            font-size: 1rem;
            margin-bottom: 5px;
            color: #00bcd4;
        }
        
        .form-control input {
            width: 100%;
            height: 40px;
            padding: 0 10px;
            font-size: 1rem;
            border-radius: 4px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease;
        }
        
        .form-control input:focus {
            border-color: #00bcd4;
            outline: none;
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
    </style>
</head>
<body>
    <div class="form-wrapper">
        <h2>Log In</h2>
        <form action="<?= base_url("login") ?>" method="post">
            <div class="form-control">
                <label for="name">Name:</label>
                <input required type="text" id="name" name="name" value=""> 
            </div>
            <div class="form-control">
                <label for="department">Department:</label>
                <input required type="text" id="department" name="department" value="">
            </div>
            <button type="submit" name="send">Log in</button>
        </form>
    </div>
</body>
</html>
