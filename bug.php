function increment_by_one(int $x): int {
  return ++$x;
}

$x = 5;
echo increment_by_one($x); //Outputs 6
echo $x; //Outputs 5