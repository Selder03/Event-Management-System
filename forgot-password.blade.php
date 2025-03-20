<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html, body {
            height: 100%;
            width: 100%;
            overflow-x: hidden;
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

          .forgot-box {
            position: relative;
            width: 400px;
            height: 750px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .5);
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(15px);
            color: white;
          }


          
          .field {
            position: relative;
            width: 310px;
            margin: 30px 0;
            border-bottom: 2px solid #fff;
          }

          .field input:focus~label,
          .field input:focus~label {
            top: .5s;
        }

          .field label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 1em;
            color: #fff;
            pointer-events: none;
            transition: .5s;
            }

          .field input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: px;
            color: #fff;
            padding:  8px 0 5px;

          }
          .button-group {
              display: flex;
              justify-content: center;
              gap: 50px; /* Adds space between buttons */
              margin-top: 75px; /* Moves buttons down */
              margin-bottom: 75px;
          }
          
          .back-btn, .send-code {
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

          h1 {
            margin-top: 50px;
            color: #fff;
          }

          code {
            width: 100%;
            height: 2px;
            background: white;
            margin-bottom: 15px;
          }
    </style>
</head>
<body>
    <section>
    <div class="container">
        <div class="forgot-box">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h1>Forgot Password</h1>
                <!-- Email Field -->
                <div class="field">Email
                    <label></label>
                    <input type="email" placeholder="Enter your email">
                </div>

                <button class="send-code">Send Code</button>

                <!-- Code Field -->
                <div class="field">Verification Code
                    <label></label>
                    <input type="text" placeholder="Enter code">
                </div>

                <!-- New Password Fields -->
                <div class="field">New Password
                    <label></label>
                    <input type="password" placeholder="Enter new password">
                </div>

                <div class="field">Confirm Password
                    <label></label>
                    <input type="password" placeholder="Confirm password">
                </div>

                <!-- Buttons -->
                <div class="button-group">
                <a href="{{ url('/login') }}" class="back-btn"><button type="button" class="back-btn">Back</button></a>
                <a href="{{ url('/login') }}" class="send-code"><button type="button" class="send-code">Submit</button></a>
                </div>
            </form>
            </div>
        </div>
    </section>
</body>
</html>
