<?php

function answer()
{
    fwrite(STDERR, "answer was called\n");
    return 6 * 7;
}

?>
