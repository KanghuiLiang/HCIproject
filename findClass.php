<?php

include ('header.php')

?>

<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../HCI/CSS/floatingButton.css">
  <!-- <link rel="stylesheet" href="../HCI/CSS/reset.css"> --> <!-- CSS reset -->
  <link rel="stylesheet" href="../HCI/CSS/filterContent.css"> <!-- Resource style -->
  <script src="../HCI/js/modernizr.js"></script> <!-- Modernizr -->
    
  <title>Content Filters | CodyHouse</title>
</head>
<body>
  <h1>FIND A CLASS</h1>
<?php 
  include 'search.php'
  ?>

  <main class="cd-main-content">
    <div class="cd-tab-filter-wrapper">
      <div class="cd-tab-filter">
        <ul class="cd-filters">
          <li class="placeholder"> 
            <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
          </li> 
          <li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
          <li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Class 1</a></li>
          <li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Class 2</a></li>
        </ul> <!-- cd-filters -->
      </div> <!-- cd-tab-filter -->
    </div> <!-- cd-tab-filter-wrapper -->

    <section class="cd-gallery">
      <ul>
        <li class="mix color-1 check1 radio2 option3">
          <img class="card-img-top" src="img/img-1.jpg" alt="Image 1">
          <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div>
  </div>
        </li>
        <li class="mix color-2 check2 radio2 option2">
          <img class="card-img-top" src="img/img-2.jpg" alt="Image 2">
          <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div>
        </li>
        <li class="mix color-1 check3 radio3 option1">
          <img class="card-img-top" src="img/img-3.jpg" alt="Image 3">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div>
</li>
        <li class="mix color-1 check3 radio2 option4">
          <img class="card-img-top" src="img/img-4.jpg" alt="Image 4">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div></li>
        <li class="mix color-1 check1 radio3 option2">
          <img class="card-img-top" src="img/img-5.jpg" alt="Image 5">
<div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div>
        </li>
        <li class="mix color-2 check2 radio3 option3">
          <img class="card-img-top" src="img/img-6.jpg" alt="Image 6">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div></li>
        <li class="mix color-2 check2 radio2 option1">
          <img class="card-img-top" src="img/img-7.jpg" alt="Image 7">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div></li>
        <li class="mix color-1 check1 radio3 option4">
          <img class="card-img-top" src="img/img-8.jpg" alt="Image 8">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div></li>
        <li class="mix color-2 check1 radio2 option3">
          <img class="card-img-top" src="img/img-9.jpg" alt="Image 9">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div></li>
        <li class="mix color-1 check3 radio2 option4">
          <img class="card-img-top" src="img/img-10.jpg" alt="Image 10">
        <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
</div></li>
        <button>SHOW TEN MORE</button>
        <li class="gap"></li>
        <li class="gap"></li>
        <li class="gap"></li>
      </ul>

<!-- ****************** -->

      <div class="cd-fail-message">No results found</div>
    </section> <!-- cd-gallery -->

    <div class="cd-filter">
      <form>
        <div class="cd-filter-block">
          <h4>Search</h4>
          
          <div class="cd-filter-content">
            <input type="search" placeholder="Try color-1...">
          </div> <!-- cd-filter-content -->
        </div> <!-- cd-filter-block -->

        <div class="cd-filter-block">
          <h4>Check boxes</h4>

          <ul class="cd-filter-content cd-filters list">
            <li>
              <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                <label class="checkbox-label" for="checkbox1">Option 1</label>
            </li>

            <li>
              <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
              <label class="checkbox-label" for="checkbox2">Option 2</label>
            </li>

            <li>
              <input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
              <label class="checkbox-label" for="checkbox3">Option 3</label>
            </li>
          </ul> <!-- cd-filter-content -->
        </div> <!-- cd-filter-block -->

        <div class="cd-filter-block">
          <h4>Select</h4>
          
          <div class="cd-filter-content">
            <div class="cd-select cd-filters">
              <select class="filter" name="selectThis" id="selectThis">
                <option value="">Choose an option</option>
                <option value=".option1">Option 1</option>
                <option value=".option2">Option 2</option>
                <option value=".option3">Option 3</option>
                <option value=".option4">Option 4</option>
              </select>
            </div> <!-- cd-select -->
          </div> <!-- cd-filter-content -->
        </div> <!-- cd-filter-block -->

        <div class="cd-filter-block">
          <h4>Radio buttons</h4>

          <ul class="cd-filter-content cd-filters list">
            <li>
              <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
              <label class="radio-label" for="radio1">All</label>
            </li>

            <li>
              <input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
              <label class="radio-label" for="radio2">Choice 2</label>
            </li>

            <li>
              <input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
              <label class="radio-label" for="radio3">Choice 3</label>
            </li>
          </ul> <!-- cd-filter-content -->
        </div> <!-- cd-filter-block -->
      </form>

      <a href="#0" class="cd-close">Close</a>
    </div> <!-- cd-filter -->

    <a href="#0" class="cd-filter-trigger">Filters</a>

    <div class="floatButton">
  <button class="try-a-class">Try A Free Class</button>
</div>

  </main> <!-- cd-main-content -->
<script src="../HCI/js/jquery-2.1.1.js"></script>
<script src="../HCI/js/jquery.mixitup.min.js"></script>
<script src="../HCI/js/main.js"></script> <!-- Resource jQuery -->
<?php
  include ('Footer.php');
  ?>
</body>

</html>