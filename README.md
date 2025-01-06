# PHP Foreach Loop with Reference Bug
This repository demonstrates a common but subtle error in PHP related to using references in `foreach` loops.  Incrementing values directly within the loop using references modifies the original array, which might not always be intended.
The `bug.php` file contains the erroneous code, and `bugSolution.php` shows the corrected version.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.  The array elements will have been incremented multiple times.
4. Run `bugSolution.php` to see the corrected behavior, where only the original intended increment occurs.

## Explanation
In PHP, when using `&$value` in a `foreach` loop, the `$value` variable becomes a reference to the original array element. Modifying `$value` directly changes the element in the original array. This is different from most other languages where foreach copies the value before iteration.