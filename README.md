# PHP Unexpected Pass-by-Reference Behavior

This example demonstrates unexpected behavior in PHP when using increment/decrement operators within functions.  Even though pass-by-value is used, the original variable is modified.

## Bug

The `increment_by_one` function intends to increment the input value by one and return the result, leaving the original variable unchanged. However, due to PHP's handling of increment/decrement operators, this does not occur. The original variable is modified.

## Solution

To avoid this issue, make a copy of the variable within the function before using the increment operator, or return the incremented value directly and assign it back to the original variable in the caller function. 