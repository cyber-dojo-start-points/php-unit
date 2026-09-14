<?php

// The learner put an echo inside a loop to see what was happening. It writes
// far more than the 50K the runner keeps of each stream, so the summary line
// PHPUnit prints at the end is dropped. The colour survives it, because the
// rag-lambda reads the exit status rather than the output.
function answer()
{
    for ($i = 0; $i < 5000; $i++) {
        echo "debug: answer was called, i is $i\n";
    }
    return 6 * 7;
}

?>
