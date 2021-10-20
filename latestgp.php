<?php
include 'conn.php';
include 'header.php';
$username = $_SESSION["username"]
?>
<div class="textbox">
    <?php
  	    if(isset($_SESSION["loggedin"]))
  	       {
  		    echo '<h4>Hello ' . $_SESSION['username'] . '. Not you? <a href="logout.php">Log out</a></h4>';
  	       }
  	       else
  	       {
         ?>
  	    <script>
            if (window.confirm('To use the Forums, please Log-In.')) 
            {
            window.location.href='login.php';
            }
            else
            {
            window.location.href='home.php';
            }
        </script>
  	       <?php
        }
    ?>
</div>

<?php

    $q = "SELECT date, posted_by, content FROM latestgp ORDER BY post_id DESC"; 
    $result = mysqli_query($conn, $q);
    $counter1 = 3;

    $all_property = array();  //declare an array for saving property

    //showing property
    echo '<div class="Article">';
    echo '<table class="data-table">';
    echo '<tr class="data-heading">';  //initialize table tag
    while ($property = mysqli_fetch_field($result)){
        if ($counter1 == 3){
            echo '<td style="width:25%;">' . 'Date Posted' . '</td>';
        }
        if ($counter1 == 2){
            echo '<td style="width:10%;">' . 'Posted By' . '</td>';
        }
        if ($counter1 == 1){
            echo '<td>' . 'Post Content' . '</td>';
        }
        $counter1 = --$counter1;
        array_push($all_property, $property->name);  //save those to 
        
    }
    echo '</tr>'; //end tr tag

    //showing all data
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        foreach ($all_property as $item) {
                echo '<td>' . $row[$item] . '</td>'; //get items using property value
            }
        }
        echo '</tr>';


if(isset($_POST['Reply'])) {	
    $reply = $_POST["message"] ?? "";
    $sql = $conn->query("INSERT INTO latestgp(posted_by, content) VALUES('$username','$reply')");
    header("Location: latest.php.php");
}
?>
</table>
<form method='post' action=''>
    <input name="message" type="text" required="required" class="textfield" id="message" placeholder="Enter Message Here">
    <input name="Reply" type="submit" class="button" id="Reply" value="Reply">
</form>
</div>


<?php
include 'footer.php'; 
?>
