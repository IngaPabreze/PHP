<?php function copywrite($createDate){
    if($createDate < date('Y')) {
        echo '&copy'.$createDate.'-'.date('Y');
    }else{ echo '&copy'.date('Y');
         }
    }
echo copywrite(2022);
?>
