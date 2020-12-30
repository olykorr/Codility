function solution($A, $B, $K) {
		if($A%$K==0) {
			$result = floor(($B-$A)/$K)+1;
		} else {
			$result = floor($B/$K-(floor($A/$K)+1))+1;
			               //(11/2-(7/2+1))+1=(5.5-(3.5+1))+1=2
		}

		return (int)$result;

	}

	function solutionSlow($A, $B, $K) {

		$counter = 0;

		for ($i = $A; $i < $B; $i++) {
			if ($i%$K== 0) {
				$counter++;
			}
		}
		return $counter;

	}
