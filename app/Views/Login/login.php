<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\assets\css\login.css">
    <script src="https://kit.fontawesome.com/a25933befb.js" crossorigin="anonymous"></script>   
</head>
<body>
    <div class="containerLogin">
        <div class="form-content">
            <h1 id="title">
                Registro  
            </h1>
            <form action="">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input id="nameInput" type="text" placeholder="nombre">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" placeholder="correo">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="text" placeholder="contraseña">
                    </div>
                    <p>Olvidaste tu contraseña<a href="">Click aqui</a></p>
                </div>
                <div class="btn-field">
                    <button id="signUp" type="button"> Registrate </button>
                    <button id="signIn" type="button" class="disable"> Ingresar </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Get references to the DOM elements
        let signUp = document.getElementById("signUp");
        let signIn = document.getElementById("signIn");
        let nameInput = document.getElementById("nameInput");
        let title = document.getElementById("title");

        // Add event listeners to the sign up and sign in buttons
        signUp.addEventListener("click", function() {
            // Hide the name input field
            nameInput.parentElement.style.maxHeight = "0";

            // Change the title to "Registro"
            title.innerHTML = "Registro";

            // Add the "disable" class to the sign in button
            signIn.classList.add("disable");

            // Remove the "disable" class from the sign up button
            signUp.classList.remove("disable");
        });

        signIn.addEventListener("click", function() {
            // Show the name input field
            nameInput.parentElement.style.maxHeight = "60px";

            // Change the title to "Login"
            title.innerHTML = "Login";

            // Add the "disable" class to the sign up button
            signUp.classList.add("disable");

            // Remove the "disable" class from the sign in button
            signIn.classList.remove("disable");
        });
    </script>
</body>
</html>
