<td><?php echo $dbrr[$sc."p"]; ?></td>
<td><?php echo $dbrr["reName".$n]; ?></td>
<td><?php echo $dbrr["adName".$n]; ?></td>
<td><?php if($dbrr[$sc]>=4) {$date = $dbrr["reDate".$n]; echo thai_date_short(strtotime($date));} ?></td>
<td><?php echo $dbrr["reBook".$n]; ?></td>
<td><?php echo $dbrr["reNo".$n]; ?></td>
<td><?php if($dbrr[$sc]>=5) {$date2 = $dbrr["reSent".$n]; echo thai_date_short(strtotime($date2));}?></td>
<td class="text-center"><a href="https://track.thailandpost.co.th/?trackNumber=<?php echo $dbrr["reTrack".$n]; ?>" target="_blank">
    <?php 
        $track = $dbrr["reTrack".$n];
        if(substr($track, 0, 1) == "E")
        { ?>
                <img src="../../tools/images/post/EMS.webp" alt="EMS" width="120px">
    <?php
        }
        else
        { 
            if(substr($track, 0, 1) == "R")
            {
    ?>
                <img src="../../tools/images/post/registered.webp" alt="Registered" width="120px">
    <?php
            }
        } 
    ?>

    <br><?php echo $dbrr["reTrack".$n]; ?></a></td>
<td><?php 
            $mail = $dbrr["staff"];
            $sql3 = "SELECT * FROM payment_admin WHERE email = '$mail'";
            $result3 = mysqli_query($link, $sql3);
            $dbrr3 = mysqli_fetch_array($result3);
             if($dbrr[$sc]>=5)
            {
                echo $dbrr3["nameTH"]."<br>";
                    $date2 = $dbrr["reSent".$n]; 
                    echo "(".thai_date_short(strtotime($date2)).")";
             } 
    ?>
</td>