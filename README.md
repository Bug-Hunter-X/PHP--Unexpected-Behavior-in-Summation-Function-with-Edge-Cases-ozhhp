# PHP: Unexpected Behavior in Summation Function with Edge Cases

This repository demonstrates a common error in PHP involving the improper handling of edge cases when calculating the sum of numbers in an array.  The `bug.php` file contains a function that fails to properly handle empty arrays or arrays containing non-numeric values. The solution in `bugSolution.php` addresses these issues.

## Bug Description
The `calculateSum` function doesn't check if the input array is empty or contains non-numeric values. This results in unexpected output: 0 for empty arrays and NaN (Not a Number) for arrays containing non-numeric elements.

## Solution
The solution includes input validation to check for these scenarios, making the function more robust and reliable.