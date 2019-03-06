<?php

$number = $con_books->real_escape_string($_POST['number']);
$name = $con_books->real_escape_string($_POST['name']);

for($i=2; $i<=$number; $i++){

  $want = $con_books->real_escape_string($_POST['want'.$i]);
  $give = $con_books->real_escape_string($_POST['give'.$i]);

  $query = "INSERT INTO Audi_Books(Name,Want,Give) VALUES('$name','$want','$give')";
  mysqli_query($con_books,$query);

}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Books</title>
  </head>
  <body>
    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
        <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* No. of members" id="members" >
            <option value="" selected disabled hidden >Want</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
        <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* No. of members" id="members" >
            <option value="" selected disabled hidden >Give</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <script type="text/javascript">
      const my = '<div class="temp row g-margin-b-50--xs">'
                    +'<div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">'
                      +'<input type="text" class="form-control s-form-v3__input" placeholder="* Member 1">'
                    +'</div>'
                +'</div>';

      function stringvalue(i){
        return '<div class="temp row g-margin-b-50--xs">'
                  +'<div class="col-sm-4 ">'
                    +'<input type="text" class="form-control s-form-v3__input" name="membername'+i+'" placeholder="* Member '+i+'">'
                  +'</div>'
                +'</div>';
      }
    </script>
  </body>
</html>
