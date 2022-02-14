<?php
echo '
<nav id="navigation">
  <a href="http://localhost/bkmks/index.php" class="logo">Bookmark Manager<span>+<span></a>
  <ul class="links">
    <li><a href="pages/about_page.php">About</a></li>
    <li class="dropdown"><a href="" class="trigger-drop">Stuff You Can Do<i class="arrow"></i></a>
      <ul class="drop">
        <li><a href="http://localhost/bkmks/pages/search_page.php">Search For a Bookmark</a></li>
        <li><a href="http://localhost/bkmks/pages/add_page.php">Add a Bookmark</a></li>
        <li><a href="http://localhost/bkmks/pages/delete_page.php">Delete a Bookmark</a></li>
      </ul>
    </li>
    <li class="dropdown"><a href="" class="trigger-drop">Contact<i class="arrow"></i></a>
      <ul class="drop">
        <li><a href="mailto:mclds@protonmail.com">Email</a></li>
        <li><a href="https://notabug.org/micaldas">Notabug</a></li>
      </ul>
    </li>
  </ul>
</nav>
</div>
    '
?>
