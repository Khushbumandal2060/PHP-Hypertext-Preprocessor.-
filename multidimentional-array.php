<?php 

$users = [ 
    [1, "Khushi", "Kathmandu", "khushi@123.com"],
    [2, "Nikhil", "Rautahat", "singh@123.com"],
    [3, "Gola", "Kathmandu", "Gola@123.com"]
];

for ($i = 0; $i < count($users); $i++) {
    print_r($users[$i]);
    echo "<br/>";
}

?>
