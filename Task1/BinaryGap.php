// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($N) {
    // write your code in PHP7.0
    $N=decbin($N);
    echo $N."\n";
    $strN=(string)$N;
    $pos1=array();
    $n=strlen($strN)."\n";
    //echo $n;
    for($i=0;$i<=$n;$i++)
    {
      // echo $strN[$i]."\n";
       if($strN[$i]==='1')
       {
         array_push($pos1,$i);
       }
    }
    $max=0;
    if (count($pos1)>1){
        for($j=0;$j<=count($pos1);$j++)
        {
            $dif=$pos1[$j+1]-$pos1[$j];
            if($dif>$max){
                $max=$dif;
            }
        }
    }
    if($max>0){
        $nubber=$max-1;
    }else{$nubber=0;}
    return $nubber;
 
}
