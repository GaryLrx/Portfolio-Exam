<?php
    header("content-type: application/pdf");
    header("content-disposition: attachment; filename=CV.pdf");
    flush();
    readfile("./src/CV_Gary_Leroux.pdf")
?>