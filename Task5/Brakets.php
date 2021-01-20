function solution($S) {
  $T = [];
  $n = strlen($S);
  for ($i = 0; $i < $n; $i++) {
    $s = $S[$i];
    if ($s == '(' || $s == '[' || $s == '{') {
      array_push($T, $s);
    } else {
        if (($s == ')' && $T[count($T) - 1] != '(')
        || ($s == ']' && $T[count($T) - 1] != '[')
        || ($s == '}' && $T[count($T) - 1] != '{')
      ) {
        return 0;
      }
      array_pop($T);
    }
  }
  return count($T) == 0 ? 1 : 0;
}
