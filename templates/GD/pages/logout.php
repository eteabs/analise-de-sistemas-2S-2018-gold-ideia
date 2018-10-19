<?php

if(isset($_SESSION['Login'])):
    unset($_SESSION['Login']);
endif;
header('LOCATION: ' . HOME);
die;