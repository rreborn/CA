<?php session_start();?>

<!doctype html>
<html>
  <head>
    <title>Download</title>
  </head>
  <style>
    body {
      font-family: 'sans serif';
      padding: 0;
      margin: 0;
    }
    .mid {
      text-align: center;
    }

    .navbar a {
      color: black;
    }

    .navbar {
      height: 50px;
      background: black;
    }

    .navbar ul {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    .navbar li {
      color: white;
      font-weight: bold;
      line-height: 50px;
      list-style: none;
      display: inline-block;
      padding-left: 10px;
      padding-right: 20px;
      box-sizing: border-box;
      border-right: solid black 1px;
      background: #888888;
    }

  </style>
  <body>
    <div class="navbar">
      <ul class="navbar-item">
        <a href="#"><li>Home</li></a><a href="#"><li>Something</li></a>
      </ul>
    </div>
  
  </body>
</html>
