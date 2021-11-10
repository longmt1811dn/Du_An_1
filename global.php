<?php
function exist_param($fieldname){
    return array_key_exists($fieldname, $_REQUEST);
}
?>