function solution($A) {
    // write your code in PHP7.0
    
    $west = 0;
    $east = 0;
    
    foreach ($A as $car) {
    	if ($car==0) { $east += 1; }
    	if ($car==1) { $west += $east; }
    }

    if ($west > 1000000000) { return -1; }
    return $west;
	
	
	
    //long way
    $results=array();
    $n=count($A);
    //$pos=0;
    for ($i=0; $i<count($A); $i++){
        
        $tmpA=$A;
        
        if ($A[$i]==0){
            do {
                $key=array_search(1,$tmpA);
                if (($key!=false)&&($key>$i)) array_push($results,array($i,$key));
                $tmpA[$key]=0;
            } while($key!=false);
        }
      
    }
    //var_dump ($results);
    return count($results);
}
