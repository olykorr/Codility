// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A, $K) {
    // write your code in PHP7.0
    if (sizeof($A)>0){
    for($j=1;$j<=$K;$j++){
        $A=rotateOne($A);
    }
    }
    return $A;
   
}

function rotateOne($A){
    $n=count($A);
    $rez[0]=$A[$n-1];
    for ($i=0;$i<$n-1;$i++)
    {
        //echo '$rez['.$i.'+1]=$A['.$i.']    ';
        $rez[$i+1]=$A[$i];
    }
    var_dump ($rez);
    return $rez;
}
