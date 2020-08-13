<?php
include 'select.php';
$query = "SELECT msg FROM chat ORDER BY id DESC";
$run   = $conn->query($query);
while ($row = $run->fetch_array()):
?>
<div id="chat_data">
				<span style="color:green;"><?php 
        // Start the session
        session_start();

        // Check is session exists
        if (isset($_SESSION['uid']))
        {
            $uid = $_SESSION['uid'];
            echo "$uid";
        }
?></span>
				<span style="color:red;"><?php echo $row['msg'];
?></span>
				


			</div>
<?php endwhile;?>