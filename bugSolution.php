function increment_by_one(int $x): int {
  $y = $x;
  return ++$y;
}

$x = 5;
echo increment_by_one($x); //Outputs 6
echo $x; //Outputs 5

//Alternative solution:
function increment_by_one_alt(int $x): int {
  return $x + 1;
}
$x = 5;
$x = increment_by_one_alt($x);
echo $x; // Outputs 6