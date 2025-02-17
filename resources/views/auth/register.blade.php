<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glassmorphism Register Form</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Open Sans", sans-serif;
    }

    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      width: 100%;
      padding: 0 10px;
      background: url("../../../login-register-form/d.jpg"), #000;
      background-position: center;
      background-size: cover;
    }

    .wrapper {
      width: 400px;
      border-radius: 8px;
      padding: 30px;
      text-align: center;
      border: 1px solid rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(9px);
      -webkit-backdrop-filter: blur(9px);
    }

    form {
      display: flex;
      flex-direction: column;
    }

    h2 {
      font-size: 2rem;
      margin-bottom: 20px;
      color: #fff;
    }

    .input-field {
      position: relative;
      border-bottom: 2px solid #ccc;
      margin: 15px 0;
    }

    .input-field label {
      position: absolute;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      color: #fff;
      font-size: 16px;
      pointer-events: none;
      transition: 0.15s ease;
    }

    .input-field input {
      width: 100%;
      height: 40px;
      background: transparent;
      border: none;
      outline: none;
      font-size: 16px;
      color: #fff;
    }

    .input-field input:focus~label,
    .input-field input:valid~label {
      font-size: 0.8rem;
      top: 10px;
      transform: translateY(-120%);
    }

    .error-message {
      color: red;
      font-size: 0.9rem;
      margin-top: 5px;
    }

    button {
      background: #fff;
      color: #000;
      font-weight: 600;
      border: none;
      padding: 12px 20px;
      cursor: pointer;
      border-radius: 3px;
      font-size: 16px;
      border: 2px solid transparent;
      transition: 0.3s ease;
    }

    button:hover {
      color: #fff;
      border-color: #fff;
      background: rgba(255, 255, 255, 0.15);
    }

    .register {
      text-align: center;
      margin-top: 30px;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    @if(session('success'))
      <p style="color: green;">{{ session('success') }}</p>
    @endif
    <form action="{{ route('register') }}" method="POST">
      @csrf
      <h2>Register</h2>
      <div class="input-field">
        <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus autocomplete="name"/>
        <label for="name">Enter your name</label>
        @error('name')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
      <div class="input-field">
        <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="username"/>
        <label for="email">Enter your email</label>
        @error('email')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
      <div class="input-field">
        <input type="password" name="password" required autocomplete="new-password"/>
        <label>Enter your password</label>
        @error('password')
          <p class="error-message">{{ $message }}</p>
        @enderror
      </div>
      <div class="input-field">
        <input type="password" name="password_confirmation" required autocomplete="new-password"/>
        <label>Confirm your password</label>
      </div>
      <button type="submit">Register</button>
      <div class="register">
        <p>Already have an account? <a href="{{ route('login') }}">Log In</a></p>
      </div>
    </form>
  </div>
</body>
</html>
