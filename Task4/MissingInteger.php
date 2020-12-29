function solution($A) {
   	$arr = array_unique($A);
	sort($arr);
	$n=1;
	$neg = 1;
	for($i=0; $i<count($arr);$i++){
		if($arr[$i]<=0) continue;
		else{
			if($neg==1){
				$neg=0;
			}
			if($arr[$i]!=$n){
				return $n;
			}
			$n++;
		}
	}
	if($neg==1){
		return 1;
	}
	else{
		return max($arr)+1;
	}
}
