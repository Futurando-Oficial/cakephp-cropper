<?php
if(isset($standalone) && $standalone === true ){
    echo $this->element('Cropper.css');
    echo $this->element('Cropper.script');
}
?>
e