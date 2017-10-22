<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>localEST</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="css/home.css">

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      * {
  margin: 0;
  padding: 0;
  border: 0;
}

html, body {
  height: 100vh;
}

body {
  background-color: #333;
}

.wrapper {
  max-width: 75%;
  width: 100%;
  height: auto;
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate3d(-50%, -50%, 0);
}

.map {
  position: relative;
  width: 100%;
  margin: -700px -700px 0 0;
  padding-bottom: 50%;
  background-image: url(http://i.imgur.com/cegCId0.png);
  box-shadow: 0 0 100px #000;
  border-radius: 10px;
}

.line {
  position: absolute;
  width: 100%;
  height: 0;
  padding-bottom: 52.168447517%;
  top: 0;
}
.line svg {
  position: absolute;
  width: 100%;
  height: 100%;
}
.line svg path {
  fill-opacity: 0;
  stroke: #f00;
  stroke-width: 5;
  stroke-dasharray: 870;
  stroke-dashoffset: 870;
  animation-name: draw;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

@keyframes draw {
  to {
    stroke-dashoffset: 0;
  }
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>




  <div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">

        <a class="active item">Home</a>
        <a class="item">Work</a>
        <a class="item">Company</a>
        <a class="item">Careers</a>
        <div class="right item">
          <a href="../loginroute.html" class="ui inverted button">Log in</a>
          <a href="../register.html" class="ui inverted button">Sign Up</a>
        </div>
      </div>
    </div>



  </div>





  <div class='wrapper'>
  <div class='map'></div>
  <div class='line'>
    <svg height='830' viewBox='0 0 1591 830' width='1591'>
      <path d='m370.92,632.3,339.85-137.45,139.33-80.962,20.711,5.6485c37.93-69.02,86.29-135.73,166.59-207.11l25.418-44.247'></path>
      <path d='m111.42,632.3,111.85-137.45,131.33-10.12,20.711,4.6485c37.14-69.02,86.29-135.73,11.59-207.11l25.11-44.247'></path>
    </svg>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
