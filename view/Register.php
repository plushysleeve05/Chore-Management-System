<html lang="en">
<head>
    <link rel="stylesheet" href="../css/styles3.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up!</title>
</head>
<body>
    <div class="form-container">
        <div class="wrapper">
            <h2>Registration</h2>
            <form action="../actions/register_user.php" method="post" name="sign-up" id="sign-up">
              <div class="input-box">
                  <input type="text" placeholder="Enter your First name" name="firstName" id="firstName" required minlength="2" maxlength="50">
              </div>
              <div class="input-box">
                  <input type="text" placeholder="Enter your Last name" name="lastName" id="lastName" required minlength="2" maxlength="50">
              </div>
              <div class="input-box">
                  <input type="email" placeholder="Enter your email" name="email" id="email" required>
              </div>
              <div class="input-box">
                  <input type="password" placeholder="Create password" name="password" id="password" required minlength="8">
              </div>
              <div class="input-box">
                  <input type="password" placeholder="Confirm password" name="confirmPassword" id="confirmPassword" required minlength="8">
              </div>
              <div class="input-box">
                  <input type="date" name="dob" id="dob" required>
              </div>
              <div class="input-box">
                  <input type="tel" placeholder="Enter your phone number" name="phoneNumber" id="phoneNumber" required pattern="(?:\+|0)[0-9]{9,10}">
                  <!-- The pattern attribute enforces a 10-digit numeric value -->
              </div>
          
              <div class="input-box-radio">
                  <label>Gender:</label>
                  <input type="radio" id="male" name="gender" value="0" required>
                  <label for="male">Male</label>
                  <input type="radio" id="female" name="gender" value="1" required>
                  <label for="female">Female</label>
              </div>
          
              <!-- Family Role Dropdown -->
              <div class="input-box">
                  <select id="familyRole" name="familyRole" required>
                      <option value="0">Select Family Role</option>
                      <option value="1">Father</option>
                      <option value="2">Mother</option>
                      <option value="3">Son</option>
                      <option value="4">Daughter</option>
                  </select>
              </div>
              <div class="policy">
                  <input type="checkbox" id="acceptTerms" name="acceptTerms" required>
                  <label for="acceptTerms"> I accept all terms & conditions</label>
              </div>
              <div class="input-box button">
                  <input type="submit" value="Register Now">
              </div>
              <div class="text">
                  <h3>Already have an account? <a href="../Homepage.html">Login now</a></h3>
              </div>
            </form>
          </div>
    </div>
    <div class="images-container"></div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
          setTimeout(function () {
            document.querySelector(".form-container").classList.add("show");
          }, 900);
        });
      </script>
</body>
</html>
