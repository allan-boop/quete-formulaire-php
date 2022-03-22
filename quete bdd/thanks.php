<?php
echo 'Merci '.$_POST['user_last_name'].$_POST['user_first_name']. ' de nous avoir contacté à propos de '.$_POST['subject'];
echo PHP_EOL;
echo 'Un de nos conseiller vous contactera soit à l’adresse '.$_POST['user_email'].' ou par téléphone au '.$_POST['user_phone'].' dans les plus brefs délais pour traiter votre demande :';
echo PHP_EOL;
echo $_POST['user_message'];