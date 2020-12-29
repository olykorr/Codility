// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0
    
    $length=count($A);
    
    $size = count($A) + 1;
   
    $total = ($size * ($size + 1)) / 2;// sum of consecutive integers from 1 to n is equal to n(n+1)/2

    return  $total - array_sum($A);

    
}
