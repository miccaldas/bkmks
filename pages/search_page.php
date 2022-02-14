<!DOCTYPE html>
<html>
<head>
  <title>Query</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Mclds">
  <meta name="description" content="Query for bookmarks database">
  <link rel="stylesheet" type="text/css" href="http://localhost/bkmks/css/index.css" media="screen">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@600&family=Noto+Sans+KR&display=swap" rel="stylesheet">
</head>
<body>

  <header>
    <?php require 'http://localhost/bkmks/forms/header.php'; ?>
  </header>
   
  <div class="flex-container">
    <div class="col" id="col1" style="flex-grow:1"></div>
    <div class="col" id="col2" style="flex-grow:9">
      <div class="search_form">      
        <?php require 'http://localhost/bkmks/forms/search_form.php'; ?>
       </div>
    </div>
    <div class="col" id="col3" style="flex-grow:1"></div>
  </div>
  <div class="footer">
    mclds 2021 ❰❱ mclds@protonmail.com
  </div><!-- flex-container must close after the footer, or it won't stay in the bottom of the page -->
</div>
</body>
</html>
