<?php
function operaciones($v1, $v2, $oper = 3)
{
    switch ($oper) {
        case 1:
            return $v1 + $v2;
            break;
        case 2:
            return $v1 - $v2;
            break;
        case 3:
            return $v1 * $v2;
            break;
        case 4:
            return $v1 / $v2;
            break;
        default:
            return $v1 + $v2;
            break;
    }
}


?>