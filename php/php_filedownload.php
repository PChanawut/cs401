<?php
    // https://stackoverflow.com/questions/40374485/readfile-return-open-stream-http-request-failed-http-1-1-403-forbidden-in-php
    
    $file_name = 'บัตรประชาชน.pdf';

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.$file_name);
    ob_clean();
    flush();
    readfile('../file/'.$file_name);
?>