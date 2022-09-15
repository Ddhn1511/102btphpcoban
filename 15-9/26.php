<?php
 echo php_uname().'<br/>';
echo PHP_OS.'<br/>';
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
echo 'Đang sử dụng Windows!';
} else {
echo 'Không sử dụng Windows!'.'<br/>';
}
?>