<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Redirecting...</title>
  <script>
    window.onload = function () {
      const authToken = localStorage.getItem("EarnixAuth");

      if (authToken) {
        window.location.href = "dashboard.html";
      } else {
        window.location.href = "signup.html";
      }
    };
  </script>
</head>
<body>
  <p>Checking authentication status...</p>
</body>
</html>
