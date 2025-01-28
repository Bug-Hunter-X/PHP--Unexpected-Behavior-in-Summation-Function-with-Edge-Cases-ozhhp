<?php
function calculateSum(array $numbers): int|float
{
  if (empty($numbers)) {
    return 0; // Handle empty array
  }
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      //Handle non-numeric values appropriately - throw exception or return error
      return NAN; // Or throw new InvalidArgumentException('Array contains non-numeric values');
    }
  }
  return $sum;
}

// Test cases
$numbers1 = [1, 2, 3, 4, 5];
echo "Sum of numbers1: " . calculateSum($numbers1) . "\n"; // Output: 15

$numbers2 = [];
echo "Sum of numbers2: " . calculateSum($numbers2) . "\n"; // Output: 0

$numbers3 = [1, 2, 3, 4, 'a'];
echo "Sum of numbers3: " . calculateSum($numbers3) . "\n"; // Output: NaN

?>