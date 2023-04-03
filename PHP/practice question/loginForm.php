<!DOCTYPE html>
<html>

<head>
    <title>Login and Signup Form</title>
    <style>
        /* Form styles */
        .form-container {
            width: 400px;
            margin: 50px auto;
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            width: 100px;
            height: 40px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2E8B57;
        }
        .button{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .form-divider {
            text-align: center;
            margin: 20px 0;
        }

        .form-divider a {
            color: #4CAF50;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .form-divider a:hover {
            color: #2E8B57;
        }

        /* Login form styles */
        #login-form {
            display: block;
        }

        /* Signup form styles */
        #signup-form {
            display: none;
        }

    </style>
</head>

<body>
    <div class="form-container">
        <form id="login-form" action="#" method="post">
            <h2>Login</h2>
            <label for="email">Email</label>
            <input type="email" id="login-email" name="email" placeholder="Enter your email" required>
            <label for="password">Password</label>
            <input type="password" id="login-password" name="password" placeholder="Enter your password" required>
           <div class="button">
           <input type="submit" value="Login">
            <div class="form-divider">Don't have an account? <a href="#" onclick="showSignupForm()">Register</a></div>
           </div>
        </form>

        <form id="signup-form" action="#" method="post">
            <h2>Signup</h2>
            <label for="name">Name</label>
            <input type="text" id="signup-name" name="name" placeholder="Enter your name" required>
            <label for="email">Email</label>
            <input type="email" id="signup-email" name="email" placeholder="Enter your email" required>
            <label for="password">Password</label>
            <input type="password" id="signup-password" name="password" placeholder="Enter your password" required>
           <div class="button">
           <input type="submit" value="Register">
            <div class="form-divider">Already have an account? <a href="#" onclick="showLoginForm()">Login</a></div>
           </div>
        </form>
    </div>
    <script>
        // Get the login and signup forms
        const loginForm = document.getElementById('login-form');
        const signupForm = document.getElementById('signup-form');

        // Function to show the signup form and hide the login form
        function showSignupForm() {
            loginForm.classList.add('signin');
            signupForm.classList.add('signup');
            setTimeout(function () {
                loginForm.style.display = 'none';
                signupForm.style.display = 'block';
            }, 500);
        }

        // Function to show the login form and hide the signup form
        function showLoginForm() {
            signupForm.classList.remove('signup');
            loginForm.classList.remove('signin');
            setTimeout(function () {
                signupForm.style.display = 'none';
                loginForm.style.display = 'block';
            }, 500);
        }
    </script>
</body>

</html>