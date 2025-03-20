<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login - Event Management System</title>
    <!-- link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
     <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            background: url('/bg/eventbg.jpg') no-repeat;
            background-size: cover;
            background-position: center;
        }

        .login-box {
            position: relative;
            width: 400px;
            height: 450px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .5);
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(15px);
        }

        h1 {
            font-size: 2em;
            color: #ffff;
            text-align: center;
        }

        .input-box {
            position: relative;
            width: 310px;
            margin: 30px 0;
            border-bottom: 2px solid #fff;
        }

        .input-box input:focus~label,
        .input-box input:focus~label {
            top: .5s;
        }

        .input-box label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 1em;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .input-box input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: px;
            color: #fff;
            padding:  8px 0 5px;
        }

        .input-box .icon {
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2em;
            line-height: 57px;
        }      

        .links {
            margin: -15px 0 15px;
            font-size: .9em;
            color: #fff;
            display: flex;
            justify-content: space-between;
        }

        .links a {
            color: #fff;
        }

        button {
            width: 100%;
            height: 40px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 40px;
            cursor: pointer;
            font-size: 1em;
            color: #000;
            font-weight: 500;
        }
     </style>
</head>
<body>
    <section>
    <div class="login-container">
        <div class="login-box">
            <form action="{{ url('/feed') }}" method="GET">

                <h1 class="title">Login</h1>
                    <!-- Email Input -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email"  name="email" placeholder="Enter your Email" required>
                    <label for="email"></label>
                </div>

                <div class="input-box">
                    <!-- Password Input -->
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <label for="password"></label>
                </div>

                <!-- Links for Sign Up and Forgot Password -->
                <div class="links">
                    <a href="{{ url('/signup') }}">Sign Up</a>
                    <a href="{{ url('/forgot-password') }}">Forgot Password?</a>
                </div>

                <!-- Login Button -->
                <div class="login">
                <button type="submit">LOG IN</button>
                </div>
                

                @if(Session::has('success'))
                    <div class="alert alert-success">
                {{ Session::get('success') }}
                    </div>
                    {{ Session::forget('success') }}  <!-- This clears the message -->
                @endif

                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            </form>
        </div>
    </section>
    </div>
</body>
</html>
