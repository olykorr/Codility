function solution($A) {
   sort ($A);
   $missing=0;
   for($i=0; $i<count($A);$i++){
       if ($A[$i]!=$i+1){
           $missing=$i+1;
       }
   }
   if($missing!=0) return 0;
   else return 1;
}
