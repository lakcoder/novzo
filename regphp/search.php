<?php
    require "../dbconnect/connect_to_Books.php";
    $output = '';
    if(isset($_POST["query"])){                                 //universal search
            $search = $con2->real_escape_string($_POST["query"]);
    	    $query = "SELECT Books, Book_ID FROM Rent_Books WHERE Books LIKE '%".$search."%'";
        	$result = mysqli_query($con2, $query);
            $num = mysqli_num_rows($result);
            if($num != 0){
    	    while($row = mysqli_fetch_array($result)){
    		    $output .= '<div style="background:white;">
    		    <a href="product.php?Book_ID='.$row["Book_ID"].'">'.$row["Books"].'</p>
    		    </div>';
    	    }
    	    echo $output;
    	    }else{
              $query = "SELECT Books, Book_ID FROM Second_Hand_Books WHERE Books LIKE '%".$search."%'";
                $result = mysqli_query($con2, $query);
              $num = mysqli_num_rows($result);
              if($num != 0){
    	            while($row = mysqli_fetch_array($result)){
    		        $output .= '<div style="background:white;">
    		    <a href="product.php?Book_ID='.$row["Book_ID"].'">'.$row["Books"].'</p>
    		    </div>';
    	            }
    	            echo $output;
    	        }else{
    	            $query = "SELECT Books, Book_ID FROM New_Books WHERE Books LIKE '%".$search."%' OR Author LIKE '%".$search."%' OR Publisher LIKE '%".$search."%'";
    	
                	$result = mysqli_query($con2, $query);
                  $num = mysqli_num_rows($result);
                    if($num != 0){
        	            while($row = mysqli_fetch_array($result)){
        		        $output .= '<div style="background:white;">
    		    <a href="product.php?Book_ID='.$row["Book_ID"].'">'.$row["Books"].'</p>
    		    </div>';
        	            }
        	            echo $output;
    	            }else{
    	                echo 'Book not found!';
    	            }
                }
            }
    }elseif(isset($_POST["rquery"])){                              //search for rent books
    	$search = $con2->real_escape_string($_POST["rquery"]);
    	$query = "SELECT Books, Book_ID FROM Rent_Books WHERE Books LIKE '%".$search."%'";
    	$result = mysqli_query($con2, $query);
        $num = mysqli_num_rows($result);
        if($num != 0){
    	    while($row = mysqli_fetch_array($result)){
    		    $output .= '<div style="background:white;">
    		    <a href="product.php?Book_ID='.$row["Book_ID"].'">'.$row["Books"].'</p>
    		    </div>';
    	    }
    	    echo $output;
        }else{
            echo "Book not found...";
        }
    }elseif(isset($_POST["bquery"])){                              //search for buyable books
    	$search = $con2->real_escape_string($_POST["bquery"]);
    	$query = "SELECT Books, Book_ID FROM New_Books WHERE Books LIKE '%".$search."%' OR Author LIKE '%".$search."%' OR Publisher LIKE '%".$search."%'";
    	$result = mysqli_query($con2, $query);
        $num = mysqli_num_rows($result);
        if($num != 0){
    	    while($row = mysqli_fetch_array($result)){
    		    $output .= '<div style="background:white;">
    		    <a href="product.php?Book_ID='.$row["Book_ID"].'">'.$row["Books"].'</p>
    		    </div>';
    	    }
    	    echo $output;
        }else{
            $query = "SELECT Books, Book_ID FROM Second_Hand_Books
    	    WHERE Books LIKE '%".$search."%'";
    	    foreach($keys as $k){
                $query .= " OR Books LIKE '%$k%' ";
            }
    	    $result = mysqli_query($con2, $query);
            $num = mysqli_num_rows($result);
            if($num != 0){
    	        while($row = mysqli_fetch_array($result)){
    		    $output .= '<div style="background:white;">
    		    <a href="product.php?Book_ID='.$row["Book_ID"].'">'.$row["Books"].'</p>
    		    </div>';
    	        }
    	        echo $output;
            }else{
            echo "Book not found...";
            }
        }
    }elseif ($_POST["pquery"]) {
        $search = $con2->real_escape_string($_POST["pquery"]);
    	$query = "SELECT Books, Book_ID FROM Prayaas_Books WHERE Books LIKE '%".$search."%' AND Count != 0";
    	$result = mysqli_query($con2, $query);
        $num = mysqli_num_rows($result);
        if($num != 0){
    	    while($row = mysqli_fetch_array($result)){
    		    $output .= '<div style="background:white;">
    		    <a href="product.php?Book_ID='.$row["Book_ID"].'">'.$row["Books"].'</p>
    		    </div>';
    	    }
    	    echo $output;
        }else{
            echo "Book not found...";
        }
    }elseif ($_POST["shquery"]) {
        $search = $con2->real_escape_string($_POST["shquery"]);
    	$query = "SELECT Books, Book_ID FROM Second_Hand_Books WHERE Books LIKE '%".$search."%'";
    	$result = mysqli_query($con2, $query);
        $num = mysqli_num_rows($result);
        if($num != 0){
    	    while($row = mysqli_fetch_array($result)){
    		    $output .= '<div style="background:white;">
    		    <a href="product.php?Book_ID='.$row["Book_ID"].'">'.$row["Books"].'</p>
    		    </div>';
    	    }
    	    echo $output;
        }else{
            echo "Book not found...";
        }
    }
 ?>
