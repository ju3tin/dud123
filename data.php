


<?php
$servername = "eu-cdbr-sl-lhr-01.cleardb.net";
$username = "bd9f4dc3ed60de";
$password = "fd0fed83";
$dbname = "ibmx_0740e6a8795c75f";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM smartmatt";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
		
   
  
  
    var options = {
  type: 'bubble',
  data: {
    datasets: [
      {
        label: '<?php echo $row["timestamp"];?>',
        data: [
          {
            x: 1,
            y: 18,
            r: <?php echo $row["18square1"];?>
            }, {
            x: 1,
            y: 17,
            r: <?php echo $row["17square1"];?>
          },
		   {
            x: 1,
            y: 16,
            r: <?php echo $row["16square1"];?>
          }, {
            x: 1,
            y: 15,
            r: <?php echo $row["15square1"];?>
          }, {
            x: 1,
            y: 14,
            r: <?php echo $row["14square1"];?>
          }, {
            x: 1,
            y: 13,
            r: <?php echo $row["13square1"];?>
          },{
            x: 1,
            y: 12,
            r: <?php echo $row["12square1"];?>
          },{
            x: 1,
            y: 11,
            r: <?php echo $row["11square1"];?>
          },{
            x: 1,
            y: 10,
            r: <?php echo $row["10square1"];?>
          },{
            x: 1,
            y: 9,
            r: <?php echo $row["9square1"];?>
          },{
            x: 1,
            y: 8,
            r: <?php echo $row["8square1"];?>
          },{
            x: 1,
            y: 7,
            r: <?php echo $row["7square1"];?>
          },{
            x: 1,
            y: 6,
            r: <?php echo $row["6square1"];?>
          },{
            x: 1,
            y: 5,
            r: <?php echo $row["5square1"];?>
          },{
            x: 1,
            y: 4,
            r: <?php echo $row["4square1"];?>
          },{
            x: 1,
            y: 3,
            r: <?php echo $row["3square1"];?>
          },{
            x: 1,
            y: 2,
            r: <?php echo $row["2square1"];?>
          },{
            x: 1,
            y: 1,
            r: <?php echo $row["1square1"];?>
          },{
            x: 2,
            y: 18,
            r: <?php echo $row["18square2"];?>
          }, {
            x: 2,
            y: 17,
            r: <?php echo $row["17square2"];?>
          },
		   {
            x: 2,
            y: 16,
            r: <?php echo $row["16square2"];?>
          }, {
            x: 2,
            y: 15,
            r: <?php echo $row["15square2"];?>
          }, {
            x: 2,
            y: 14,
            r: <?php echo $row["14square2"];?>
          }, {
            x: 2,
            y: 13,
            r: <?php echo $row["13square2"];?>
          },{
            x: 2,
            y: 12,
            r: <?php echo $row["12square2"];?>
          },{
            x: 2,
            y: 11,
            r: <?php echo $row["11square2"];?>
          },{
            x: 2,
            y: 10,
            r: <?php echo $row["10square2"];?>
          },{
            x: 2,
            y: 9,
            r: <?php echo $row["9square2"];?>
          },{
            x: 2,
            y: 8,
            r: <?php echo $row["8square2"];?>
          },{
            x: 2,
            y: 7,
            r: <?php echo $row["7square2"];?>
          },{
            x: 2,
            y: 6,
            r: <?php echo $row["6square2"];?>
          },{
            x: 2,
            y: 5,
            r: <?php echo $row["5square2"];?>
          },{
            x: 2,
            y: 4,
            r: <?php echo $row["4square2"];?>
          },{
            x: 2,
            y: 3,
            r: <?php echo $row["3square2"];?>
          },{
            x: 2,
            y: 2,
            r: <?php echo $row["2square2"];?>
          },{
            x: 2,
            y: 1,
            r: <?php echo $row["1square2"];?>
          },{
            x: 3,
            y: 18,
            r: <?php echo $row["18square3"];?>
          }, {
            x: 3,
            y: 17,
            r: <?php echo $row["17square3"];?>
          },
		   {
            x: 3,
            y: 16,
            r: <?php echo $row["16square3"];?>
          }, {
            x: 3,
            y: 15,
            r: <?php echo $row["15square3"];?>
          }, {
            x: 3,
            y: 14,
            r: <?php echo $row["14square3"];?>
          }, {
            x: 3,
            y: 13,
            r: <?php echo $row["13square3"];?>
          },{
            x: 3,
            y: 12,
            r: <?php echo $row["12square3"];?>
          },{
            x: 3,
            y: 11,
            r: <?php echo $row["11square3"];?>
          },{
            x: 3,
            y: 10,
            r: <?php echo $row["10square3"];?>
          },{
            x: 3,
            y: 9,
            r: <?php echo $row["9square3"];?>
          },{
            x: 3,
            y: 8,
            r: <?php echo $row["8square3"];?>
          },{
            x: 3,
            y: 7,
            r: <?php echo $row["7square3"];?>
          },{
            x: 3,
            y: 6,
            r: <?php echo $row["6square3"];?>
          },{
            x: 3,
            y: 5,
            r: <?php echo $row["5square3"];?>
          },{
            x: 3,
            y: 4,
            r: <?php echo $row["4square3"];?>
          },{
            x: 3,
            y: 3,
            r: <?php echo $row["3square3"];?>
          },{
            x: 3,
            y: 2,
            r: <?php echo $row["2square3"];?>
          },{
            x: 3,
            y: 1,
            r: <?php echo $row["1square3"];?>
          },{
            x: 4,
            y: 18,
            r: <?php echo $row["18square4"];?>
          },{
            x: 4,
            y: 17,
            r: <?php echo $row["17square4"];?>
          },{
            x: 4,
            y: 16,
            r: <?php echo $row["16square4"];?>
          },{
            x: 4,
            y: 15,
            r: <?php echo $row["15square4"];?>
          },{
            x: 4,
            y: 14,
            r: <?php echo $row["14square4"];?>
          }, {
            x: 4,
            y: 13,
            r: <?php echo $row["13square4"];?>
          },{
            x: 4,
            y: 12,
            r: <?php echo $row["12square4"];?>
          },{
            x: 4,
            y: 11,
            r: <?php echo $row["11square4"];?>
          },{
            x: 4,
            y: 10,
            r: <?php echo $row["10square4"];?>
          },{
            x: 4,
            y: 9,
            r: <?php echo $row["9square4"];?>
          },{
            x: 4,
            y: 8,
            r: <?php echo $row["8square4"];?>
          },{
            x: 4,
            y: 7,
            r: <?php echo $row["7square4"];?>
          },{
            x: 4,
            y: 6,
            r: <?php echo $row["6square4"];?>
          },{
            x: 4,
            y: 5,
            r: <?php echo $row["5square4"];?>
          },{
            x: 4,
            y: 4,
            r: <?php echo $row["4square4"];?>
          },{
            x: 4,
            y: 3,
            r: <?php echo $row["3square4"];?>
          },{
            x: 4,
            y: 2,
            r: <?php echo $row["2square4"];?>
          },{
            x: 4,
            y: 1,
            r: <?php echo $row["1square4"];?>
          },{
            x: 5,
            y: 18,
            r: <?php echo $row["18square5"];?>
          }, {
            x: 5,
            y: 17,
            r: <?php echo $row["17square5"];?>
          },
		   {
            x: 5,
            y: 16,
            r: <?php echo $row["16square5"];?>
          }, {
            x: 5,
            y: 15,
            r: <?php echo $row["15square5"];?>
          }, {
            x: 5,
            y: 14,
            r: <?php echo $row["14square5"];?>
          }, {
            x: 5,
            y: 13,
            r: <?php echo $row["13square5"];?>
          },{
            x: 5,
            y: 12,
            r: <?php echo $row["12square5"];?>
          },{
            x: 5,
            y: 11,
            r: <?php echo $row["11square5"];?>
          },{
            x: 5,
            y: 10,
            r: <?php echo $row["10square5"];?>
          },{
            x: 5,
            y: 9,
            r: <?php echo $row["9square5"];?>
          },{
            x: 5,
            y: 8,
            r: <?php echo $row["8square5"];?>
          },{
            x: 5,
            y: 7,
            r: <?php echo $row["7square5"];?>
          },{
            x: 5,
            y: 6,
            r: <?php echo $row["6square5"];?>
          },{
            x: 5,
            y: 5,
            r: <?php echo $row["5square5"];?>
          },{
            x: 5,
            y: 4,
            r: <?php echo $row["4square5"];?>
          },{
            x: 5,
            y: 3,
            r: <?php echo $row["3square5"];?>
          },{
            x: 5,
            y: 2,
            r: <?php echo $row["2square5"];?>
          },{
            x: 5,
            y: 1,
            r: <?php echo $row["1square5"];?>
          },{
            x: 6,
            y: 18,
            r: <?php echo $row["18square6"];?>
          }, {
            x: 6,
            y: 17,
            r: <?php echo $row["17square6"];?>
          },
		   {
            x: 6,
            y: 16,
            r: <?php echo $row["17square6"];?>
          }, {
            x: 6,
            y: 15,
            r: <?php echo $row["15square6"];?>
          }, {
            x: 6,
            y: 14,
            r: <?php echo $row["14square6"];?>
          }, {
            x: 6,
            y: 13,
            r: <?php echo $row["13square6"];?>
          },{
            x: 6,
            y: 12,
            r: <?php echo $row["12square6"];?>
          },{
            x: 6,
            y: 11,
            r: <?php echo $row["11square6"];?>
          },{
            x: 6,
            y: 10,
            r: <?php echo $row["10square6"];?>
          },{
            x: 6,
            y: 9,
            r: <?php echo $row["9square6"];?>
          },{
            x: 6,
            y: 8,
            r: <?php echo $row["8square6"];?>
          },{
            x: 6,
            y: 7,
            r: <?php echo $row["7square6"];?>
          },{
            x: 6,
            y: 6,
            r:  <?php echo $row["6square6"];?>
          },{
            x: 6,
            y: 5,
            r:  <?php echo $row["5square6"];?>
          },{
            x: 6,
            y: 4,
            r:  <?php echo $row["4square6"];?>
          },{
            x: 6,
            y: 3,
            r:  <?php echo $row["3square6"];?>
          },{
            x: 6,
            y: 2,
            r:  <?php echo $row["2square6"];?>
          },{
            x: 6,
            y: 1,
            r:  <?php echo $row["1square6"];?>
          },{
            x: 7,
            y: 18,
            r: <?php echo $row["18square7"];?>
          }, {
            x: 7,
            y: 17,
            r: <?php echo $row["17square7"];?>
          },
		   {
            x: 7,
            y: 16,
            r:  <?php echo $row["16square7"];?>
          }, {
            x: 7,
            y: 15,
            r:  <?php echo $row["15square7"];?>
          }, {
            x: 7,
            y: 14,
            r:  <?php echo $row["14square7"];?>
          }, {
            x: 7,
            y: 13,
            r:  <?php echo $row["13square7"];?>
          },{
            x: 7,
            y: 12,
            r:  <?php echo $row["12square7"];?>
          },{
            x: 7,
            y: 11,
            r:  <?php echo $row["11square7"];?>
          },{
            x: 7,
            y: 10,
            r:  <?php echo $row["10square7"];?>
          },{
            x: 7,
            y: 9,
            r:  <?php echo $row["9square7"];?>
          },{
            x: 7,
            y: 8,
            r:   <?php echo $row["8square7"];?>
          },{
            x: 7,
            y: 7,
            r:  <?php echo $row["7square7"];?>
          },{
            x: 7,
            y: 6,
            r:   <?php echo $row["6square7"];?>
          },{
            x: 7,
            y: 5,
            r:   <?php echo $row["5square7"];?>
          },{
            x: 7,
            y: 4,
            r:   <?php echo $row["4square7"];?>
          },{
            x: 7,
            y: 3,
            r:   <?php echo $row["3square7"];?>
          },{
            x: 7,
            y: 2,
            r:   <?php echo $row["2square7"];?>
          },{
            x: 7,
            y: 1,
            r:   <?php echo $row["1square7"];?>
          },{
            x: 8,
            y: 18,
            r: <?php echo $row["18square8"];?>
          },{
            x: 8,
            y: 17,
            r: <?php echo $row["17square8"];?>
          },{
            x: 8,
            y: 16,
            r: <?php echo $row["16square8"];?>
          },{
            x: 8,
            y: 15,
            r: <?php echo $row["15square8"];?>
          },{
            x: 8,
            y: 14,
            r: <?php echo $row["14square8"];?>
          }, {
            x: 8,
            y: 13,
            r: <?php echo $row["13square8"];?>
          },{
            x: 8,
            y: 12,
            r: <?php echo $row["12square8"];?>
          },{
            x: 8,
            y: 11,
            r: <?php echo $row["11square8"];?>
          },{
            x: 8,
            y: 10,
            r: <?php echo $row["10square8"];?>
          },{
            x: 8,
            y: 9,
            r: <?php echo $row["9square8"];?>
          },{
            x: 8,
            y: 8,
            r: <?php echo $row["8square8"];?>
          },{
            x: 8,
            y: 7,
            r: <?php echo $row["7square8"];?>
          },{
            x: 8,
            y: 6,
            r: <?php echo $row["6square8"];?>
          },{
            x: 8,
            y: 5,
            r: <?php echo $row["5square8"];?>
          },{
            x: 8,
            y: 4,
            r: <?php echo $row["4square8"];?>
          },{
            x: 8,
            y: 3,
            r: <?php echo $row["3square8"];?>
          },{
            x: 8,
            y: 2,
            r: <?php echo $row["2square8"];?>
          },{
            x: 8,
            y: 1,
            r: <?php echo $row["1square8"];?>
          },{
            x: 9,
            y: 18,
            r: <?php echo $row["18square9"];?>
          },{
            x: 9,
            y: 17,
            r: <?php echo $row["17square9"];?>
          },{
            x: 9,
            y: 16,
            r: <?php echo $row["16square9"];?>
          },{
            x: 9,
            y: 15,
            r: <?php echo $row["15square9"];?>
          },{
            x: 9,
            y: 14,
            r: <?php echo $row["14square9"];?>
          }, {
            x: 9,
            y: 13,
            r: <?php echo $row["13square9"];?>
          },{
            x: 9,
            y: 12,
            r: <?php echo $row["12square9"];?>
          },{
            x: 9,
            y: 11,
            r: <?php echo $row["11square9"];?>
          },{
            x: 9,
            y: 10,
            r: <?php echo $row["10square9"];?>
          },{
            x: 9,
            y: 9,
            r: <?php echo $row["9square9"];?>
          },{
            x: 9,
            y: 8,
            r: <?php echo $row["8square9"];?>
          },{
            x: 9,
            y: 7,
            r: <?php echo $row["7square9"];?>
          },{
            x: 9,
            y: 6,
            r: <?php echo $row["6square9"];?>
          },{
            x: 9,
            y: 5,
            r: <?php echo $row["5square9"];?>
          },{
            x: 9,
            y: 4,
            r: <?php echo $row["4square9"];?>
          },{
            x: 9,
            y: 3,
            r: <?php echo $row["3square9"];?>
          },{
            x: 9,
            y: 2,
            r: <?php echo $row["2square9"];?>
          },{
            x: 9,
            y: 1,
            r: <?php echo $row["1square9"];?>
          },{
            x: 10,
            y: 18,
            r: <?php echo $row["18square10"];?>
          },{
            x: 10,
            y: 17,
            r: <?php echo $row["17square10"];?>
          },{
            x: 10,
            y: 16,
            r: <?php echo $row["16square10"];?>
          },{
            x: 10,
            y: 15,
            r: <?php echo $row["15square10"];?>
          },{
            x: 10,
            y: 14,
            r: <?php echo $row["14square10"];?>
          }, {
            x: 10,
            y: 13,
            r: <?php echo $row["13square10"];?>
          },{
            x: 10,
            y: 12,
            r: <?php echo $row["12square10"];?>
          },{
            x: 10,
            y: 11,
            r: <?php echo $row["11square10"];?>
          },{
            x: 10,
            y: 10,
            r: <?php echo $row["10square10"];?>
          },{
            x: 10,
            y: 9,
            r: <?php echo $row["9square10"];?>
          },{
            x: 10,
            y: 8,
            r: <?php echo $row["8square10"];?>
          },{
            x: 10,
            y: 7,
            r: <?php echo $row["7square10"];?>
          },{
            x: 10,
            y: 6,
            r: <?php echo $row["6square10"];?>
          },{
            x: 10,
            y: 5,
            r: <?php echo $row["5square10"];?>
          },{
            x: 10,
            y: 4,
            r: <?php echo $row["4square10"];?>
          },{
            x: 10,
            y: 3,
            r: <?php echo $row["3square10"];?>
          },{
            x: 10,
            y: 2,
            r: <?php echo $row["2square10"];?>
          },{
            x: 10,
            y: 1,
            r: <?php echo $row["1square10"];?>
          }
        ],
        backgroundColor:"#ff6384",
        hoverBackgroundColor: "#ff6384"
      }
      ]
  }
}

var ctx = document.getElementById('chartJSContainer').getContext('2d');
new Chart(ctx, options)
   
   
   <?php }
} else {
    echo "0 results";
}?>
<?php
$conn->close();
?> 
    
   
