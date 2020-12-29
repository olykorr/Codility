// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    // write your code in PHP7.0
    $arr=array_count_values ($A);
    foreach($arr as $key=>$val){
        if ($val%2!=0) return $key;
      }
}
