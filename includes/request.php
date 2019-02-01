<?php
  $pageTitle = 'Request';
  if(isset($_POST['request']) && isset($_SESSION['username'])){
    require "../dbconnect/connect_to_Books.php";

    $book = $con2->real_escape_string($_POST['book']);
    $type = $con2->real_escape_string($_POST['type']);

    if($book == ""){
      echo "Please enter a book.";
    }else{
      $query = "INSERT INTO Request_Books(Email,Books,Type) VALUES('{$_SESSION['email']}','$book','$type')";
      echo "Your request has reached us. We'll contact you soon.";
    }
  }elseif(isset($_POST['request'])){
    header('location:register.php');
  }else{
?>

<html>
<section class="content-page-area wrapperAll">
  <section class="wrapper banner-content">
    <p>Request Books<br><br></p>
    <h3>Can't Find The Book You Need? We are here to search it for you.</h3>
  </section>
  <section class="wrapper">
    <div class="row d-flex align-items-center justify-content-center">
      <form action="request.php" class="form-box d-flex justify-content-between">
        <input type="text" placeholder="Enter a Book" class="form-control" name="book">
        <button name="request" class="btn" style="float: right;">Submit</button>
        <select class="full-width has-padding has-border" id="type" name="type">
          <option value="" selected disabled hidden>You want this book on?</option>
          <option value="Rent">Rent</option>
          <option value="New">New Book</option>
          <option value="Second_Hand">Second Hand</option>
        </select>
      </form>
    </div>
  </section>
</section>
</html>
<?php } ?>
