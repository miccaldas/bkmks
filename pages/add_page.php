<!DOCTYPE html>
<html>
<head>
  <title>Query</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Mclds">
  <meta name="description" content="Query for adding bookmarks">
  <link rel="stylesheet" type="text/css" href="http://localhost/bkmks/css/add.css" media="screen">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@600&amp;family=Noto+Sans+KR&amp;display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>

  <header>
    <?php require 'http://localhost/bkmks/forms/header.php'; ?>
  </header>

  <div class="flex-container">
    <div class="col" id="col1" style="flex-grow:1"></div>
    <div class="col" id="col2" style="flex-grow:9">
      <div class="add-form">
      <?php require 'http://localhost/bkmks/forms/add_form.php'; ?>
      </div>     
    </div>
    <div class="col" id="col3" style="flex-grow:1"></div>
  </div>
  <div class="footer">
    mclds 2021 ❰❱ mclds@protonmail.com
  </div><!-- flex-container must close after the footer, or it won't stay in the bottom of the page -->
</body>
</html>
