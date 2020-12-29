// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($X, $A) {
    for ($i = 0; $i < count($A); $i++){
        if (!isset($position_achieved[$A[$i]])){
            $X--;   // reduce X by one position is achieved
            $position_achieved[$A[$i]] = true;
        }
        if (!$X){
            return $i;
        }
    }
    return -1;
}
