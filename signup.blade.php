<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

        
        .choice-box {
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
            gap: 50px; /* Adds space between buttons */
            margin-top: 75px; /* Moves buttons down */
            margin-bottom: 75px;
        }

        h1 {
            font-size: 2em;
            color: #fff;
            text-align: center;
        }

        .organizer, .student {
            color: #FFFFFF;
        }

        .student {
            border-radius: 50%;
        }

        .role-container {
            display: flex;
            gap: 40px;
        }
        .role {
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }
        .role:hover {
            transform: scale(1.1);
        }
        svg {
            width: 100px;
            height: 100px;
            fill: #38B2A3;
            transition: fill 0.3s ease-in-out;
        }
        .role:hover svg {
            fill: #4CC8A3;
        }
        .role-label {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #1C3D5A;
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
    <div class="signup-container">

        <h1>Sign Up</h1>
        <div class="choice-box">
        <div class="role" onclick="selectRole('Student')">
            <a href="{{ route('signup.student') }}" class="student"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 2L1 8l11 6 11-6-11-6zM12 14c-3.3 0-6-2.7-6-6H3c0 4.4 3.6 8 8 8s8-3.6 8-8h-3c0 3.3-2.7 6-6 6zm-6 2v3h12v-3h2v3c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2v-3h2z"/>
            </svg></a>
            <div class="role-label"><a href="{{ route('signup.student') }}" class="student">Student</a></div>
        </div>
        
        <div class="role" onclick="selectRole('organizer')">
        <a href="{{ route('signup.organizer') }}" class="organizer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M3 4h18v16H3z" stroke="#38B2A3" stroke-width="2" fill="none"/>
                <path d="M7 8h10M7 12h10M7 16h4" stroke="#4CC8A3" stroke-width="2"/>
            </svg>
        </a>
            <div class="role-label"><a href="{{ route('signup.organizer') }}" class="organizer">Organizer</a></div>
        </div>
        </div>
        <div>
            <a href="{{ url('/login') }}" class="btn back">
            <button>back</button>
            </a>
        </div>
    </section>
</body>
</html>
