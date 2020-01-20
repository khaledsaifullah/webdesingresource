<ol>
<?php
    $mog=1;
    $balti=0;
    for($mog=0;$mog<10;$mog++){
        $balti = $mog + $balti;
        //$mog++;
        echo '<li>'.$balti.'</li>';
    }

?>

</ol>
