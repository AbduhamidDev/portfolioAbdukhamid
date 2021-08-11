<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./css/stylee.css">
  <script>
const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "brodev" && password === "12345") {
        window.open("dashboard.php");
    } else {
        loginErrorMsg.style.opacity = 1;
    }

})
  </script>
</head>

<body>
    <?
$name = $_GET["name"];
$email = $_GET["email"];
$project = $_GET["project"];
$number = $_GET["number"];
$text = $_GET["text"];

$conn = mysqli_connect("localhost", "root", "root", "portfolioo") or die("bazaga ulanmadi");
$send = "insert into info(name, email, project, number, text) values ('{$name}', '{$email}','{$project}', '{$number}', '{$text}')";
mysqli_query($conn, $send) or die(mysqli_error($conn));

?>

  <main id="main-holder">
    <h1 id="login-header">Login</h1>
    
    <div id="login-error-msg-holder">
      <p id="login-error-msg">Invalid username <span id="error-msg-second-line">and/or password</span></p>
    </div>
    
    <form id="login-form">
      <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username">
      <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
      <input type="submit" value="Login" id="login-form-submit">
    </form>
  
  </main>
</body>

</html>