<?php
if(isset($_POST['delete']))
    Database::massDelete();
?>