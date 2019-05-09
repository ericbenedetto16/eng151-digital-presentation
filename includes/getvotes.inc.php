<?php
    require 'dbh.inc.php';
    $good = 0;
    $bad = 0;
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $vote = $row['vote'];
        if($vote == 'good') {
            $good++;
        }elseif($vote == 'bad') {
            $bad++;
        }else{

        }
    }

    $total = $good + $bad;

    $goodR = number_format(($good/$total)*100, 2, '.', '');
    $badR = number_format(($bad/$total)*100,2,'.','');

    echo("<div class='progress rounded-0'>
    <div class='progress-bar bg-success rounded-0' role='progressbar' style='width: $goodR%' aria-valuenow='$goodR' aria-valuemin='0' aria-valuemax='100'>$goodR%</div>
    <div class='progress-bar bg-danger rounded-0' role='progressbar' style='width: $badR%' aria-valuenow='$badR' aria-valuemin='0' aria-valuemax='100'>$badR%</div>
  </div>");
?>