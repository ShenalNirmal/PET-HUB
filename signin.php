<?php
// session_start();

include "./inc/header.php";
include "./config/con.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  if (empty($first_name) || empty($last_name) || empty($email) || empty($_POST["password"]) || empty($_POST["confirm_password"])) {
    echo "All fields are required.";
  } elseif ($_POST["password"] !== $_POST["confirm_password"]) {
    echo "Passwords do not match.";
  } else {
    // Insert user data into the database
    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
      // Display SweetAlert success message
      echo '<script>
    Swal.fire({
      title: "Successfull!",
      text: "Registration successful!",
      icon: "success"
    });
  </script>';
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  if (empty($email) || empty($password)) {
    echo "Both email and password are required.";
  } else {
    // Retrieve user from the database based on the provided email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      // Verify the password
      if (password_verify($password, $row["password"])) {

        $_SESSION["user_id"] = $row["id"];
        $_SESSION["first_name"] = $row["first_name"];
        $_SESSION["last_name"] = $row["last_name"];
        $_SESSION["email"] = $row["email"];

        echo "Login successful!";
        // header("Location: index.php");
      } else {
        echo "Incorrect password.";
      }
    } else {
      echo "User with email '$email' not found.";
    }
  }
}

?>
    <!-- SignUp Form main page-->

    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked />
          <input type="radio" name="slide" id="signup" />
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="signin.php" method="POST" class="login">
            <div class="field">
              <input
                type="text"
                name="email"
                placeholder="Email Address"
                required
              />
            </div>
            <div class="field">
              <input
                type="password"
                name="password"
                placeholder="Password"
                required
              />
            </div>
            <div class="pass-link">
              <a href="#">Forgot password?</a>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input name="login" type="submit" value="Login" />
            </div>
            <div class="signup-link">
              Not a member? <a href="signup.php">Signup now</a>
            </div>
          </form>

          <form action="signin.php" method="post" class="signup">
            <div class="field">
              <input
                type="text"
                id="first_name"
                name="first_name"
                placeholder="first name"
                required
              />
            </div>
            <div class="field">
              <input
                type="text"
                id="last_name"
                name="last_name"
                placeholder="last name"
                required
              />
            </div>
            <div class="field">
              <input
                type="email"
                id="email"
                name="email"
                placeholder="Email Address"
                required
              />
            </div>
            <div class="field">
            <input
            type="password"
            id="password"
            name="password"
            placeholder="password"
            required
            oninput="checkPasswordStrength()"
        />
        <div id="password-strength" class="password-strength" style="margin-bottom:1rem;"></div>
            </div>
            <div class="field">
              <input
                type="password"
                id="confirm_password"
                name="confirm_password"
                placeholder="confirm password"
                required
              />
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input name="register" type="submit" value="Signup" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = () => {
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      };
      loginBtn.onclick = () => {
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      };
      signupLink.onclick = () => {
        signupBtn.click();
        return false;
      };


      function checkPasswordStrength() {
        var password = document.getElementById("password").value;
        var strength = document.getElementById("password-strength");

        // Check if the password contains at least one uppercase letter and one lowercase letter
        var hasUppercase = /[A-Z]/.test(password);
        var hasLowercase = /[a-z]/.test(password);

        // Update the password strength indicator
        if (hasUppercase && hasLowercase) {
            strength.innerHTML = "Password strength: Strong";
            strength.style.color = "green";
        } else {
            strength.innerHTML = "Password strength: Weak (Include both uppercase and lowercase letters)";
            strength.style.color = "red";
        }
    }
    </script>

   
<?php
include "./inc/footer.php"
  ?>
