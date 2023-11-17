<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login and Register</title>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <style>
      body {
        font-family: "Poppins", sans-serif; 
        color: #343a40;
      }

      .container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        padding: 20px;
      }

      .form-section {
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .login-section {
        background-color: #f9f9f9;
      }

      .register-section {
        background-color: blueviolet;
        color: #fff;
      }

      .register-section input[type="text"],
      .register-section input[type="email"],
      .register-section input[type="date"],
      .register-section button {
        background-color: rgba(255, 255, 255, 0.5);
        border: none;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
      }

      .register-section button {
        color: #fff;
        background-color: #8bc34a;
        cursor: pointer;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease;
      }

      .register-section button:hover {
        background-color: #7cb342; 
      }
    </style>
  </head>
  <body class="form-v10">
    <div class="container">
      <div class="form-section login-section">
        <form class="form-detail" action="login.php" method="post" id="loginForm">
          <h2>Login</h2>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              class="form-control"
              required
            />
          </div>
          <button
            type="submit"
            class="btn btn-primary"
            style="background-color: blueviolet"
          >
            Login
          </button>
        </form>
      </div>

      <div class="form-section register-section">
        <form
          class="form-detail"
          action="register.php"
          method="post"
          id="registerForm"
        >
          <h2>Register</h2>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input
              type="text"
              name="phone_number"
              class="form-control"
              required
            />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              class="form-control"
              required
            />
          </div>

          <button
            type="submit"
            class="btn btn-primary"
            style="background-color: white; color: black"
          >
            Register
          </button>
        </form>
      </div>
    </div>
  </body>
</html>
