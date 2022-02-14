<?php 
echo '<h1>Add a Bookmark</h1>
<form action="http://localhost/bkmks/actions/add.php" method="get">
  <input type="text" name="title" class="question" id="title" required autocomplete="off" />
  <label for="title"><span>What is the title?</span></label>
  <input type="text" name="comment" class="question" id="comment" required autocomplete="off" />
  <label for="comment"><span>What is your comment?</span></label>
  <input type="text" name="link" class="question" id="link" required autocomplete="off" />
  <label for="link"><span>What is the link?</span></label>
  <input type="text" name="k1" class="question" id="k1" required autocomplete="off" />
  <label for="k1"><span>Choose a tag...</span></label>
 <input type="text" class="question" id="k2" name="k2" required autocomplete="off" />
  <label for="k2"><span>Choose Another...</span></label>
  <input type="text" class="question" id="k3" name="k3" required autocomplete="off" /> 
  <label for="k3"><span>And Another...</span></label>
  <input type="submit" value="Submit!" />

</form>'
?>
