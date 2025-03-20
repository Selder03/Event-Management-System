<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sign Up - Organizer</title>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <!--<link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
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

          .form-box {
            position: relative;
            width: 400px;
            height: 650px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .5);
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(15px);
            color: white;
          }


          
          .form {
            position: relative;
            width: 310px;
            margin: 30px 0;
            border-bottom: 2px solid #fff;
          }

          .form input:focus~label,
          .form input:focus~label {
            top: .5s;
        }

          .form label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 1em;
            color: #fff;
            pointer-events: none;
            transition: .5s;
            }

          .form input {
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
          
          .back, .register {
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
            margin-bottom: 50px;
            color: #fff;
          }

          

          
      </style>
  </head>
  <body>
    <section>
    <div class="container">
          <div class="form-box">
              <form action="{{ route('register.user') }}" method="POST">
                @csrf
                    <h1>Sign Up - Student</h1>
                    
                <div class="form">Full name
                <input type="text" placeholder="Full Name">
                </div>

                <div class="form">Birthday
                <input type="date" placeholder="your Birthday">
                <label for="birthday"></label>
                </div>

                <div class="form">Email
                <input type="email" placeholder="Enter your email">
                <label for="email"></label>
                </div>

                <div class="form">Password
                <input type="password" placeholder="Enter password">
                <label for="password"></label>
                </div>

                  <div class="form">Confirm Password
                  <input type="password" placeholder="Confirm password">
                  <label for="confirm-password"></label>
                  </div>

                  <div class="button-group">
                      <a href="{{ url('/signup') }}" class="back"><button type="submit" class="btn register">Back</button></a>
                      <button type="submit" class="register">REGISTER</button>
                  </div>
              </form>
          </div>
      </div>
    </section>
  </body>
  </html>
