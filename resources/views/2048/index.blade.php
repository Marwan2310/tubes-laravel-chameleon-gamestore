<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,800" rel="stylesheet">
  <link rel="stylesheet" href="/css/2048.css"">

</head>

<body>
  <div class=" game">
  <div class="head">
    <div class="a">2048 <button class="info" onClick='info()'>i</button> <button id="repeat" class="info repeat" onClick='reset()'>↻</button></div>
    <div class="score">Score<br /><span id="value"></span></div>
  </div>
  <div class="description" id="description">
    How to play:<br /><br />
    Use your arrow-keys to slide the tiles. <br />
    Two tiles with the same value in line can be merged. The goal is to merge the tiles and get the 2048 tile.<br /><br />
    The score is a sum of the merged tiles.<br><br />
    <span>_______________________________</span><br /><br />
    Made by Fabian Richter 01/2017
  </div>
  <div class="field">

    <div class="row">
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
    </div>
    <div class="row">
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
    </div>
    <div class="row">
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
    </div>
    <div class="row">
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
      <div class="cell"></div>
    </div>
  </div>

  </div>
  <div class='' id='status'>
  </div>
  </body>
  <script src="/js/2048.js"></script>



</html>