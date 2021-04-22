<?php
function work(){
    $servername = "127.0.0.1";
    $username = "aditya";
    $password = "password123";
    $dbname = "test";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT val FROM c";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        return $row["val"];
      }
    } else {
      echo "0 results";
    }
    $conn->close();
}
// function add($a,$b){
//     $c=$a+$b;
//     return $c;
//   }
    
?>
<script>
    
    var val=0;
    function sc(){
        var simple = <?php echo work();?>;
        
        if (simple!=val){
            val=simple;
            alert(simple)
            // alert("Database Changed");
        }
        else{
            alert("No Changes")
        }
    }
    setInterval(sc, 2000);
</script>