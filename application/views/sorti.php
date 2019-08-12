<?php
require "config/db.php";
require "pages/header.php";
?>
<div class="row">
 <form method="post">
   <div class="col-md-6">
      <div class="form-group">
         <label for="identifiant">identifiant:</label><input type="text" name="identifiant" class="form-control" placeholder="entrer l'identicateur">
      </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">
         <label for="type">ticket:</label><input type="text" name="type" class="form-control" placeholder="entrer le numero du ticket">
      </div>
   </div>
<footer>
  <div align="right">
    <i class="fa fa-adress-book"></i>
  </div>
  <center>
    <ul class="pagination">
      <li><a href="index.php">1</a></li>
      <li><a href="entree.php">2</a></li>
      <li><a href="sorti.php">3</a></li>
      <li><a href="client.php">4</a></li>
      <li><a href="ticket-1.php">5</a></li>
    </ul> 
  </center>
</footer>
