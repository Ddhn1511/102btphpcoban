<?php
function trinary_Test($n){
$r = $n > 30
? "lớn hơn 30"
: ($n > 20
? "lớn hơn 20"
: ($n >10
? "lớn hơn 10"
: "Nhập một số ít nhất lớn hơn 10!")); 
echo $n." : ".$r."\n";
}
trinary_Test(32);
trinary_Test(21);
trinary_Test(12);
trinary_Test(4);
?>