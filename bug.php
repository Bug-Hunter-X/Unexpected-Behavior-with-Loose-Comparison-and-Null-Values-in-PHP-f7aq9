function foo(a, b) {
  if (a === null || b === null) {
    return null; // Handle null values
  }
  return a + b;
}

$result = foo(null, 5); // Returns null
$result = foo(10, null); // Returns null
$result = foo(5, 10); // Returns 15

// Unexpected behavior when using loose comparison
$result = foo(0, null); // Returns null - expected
$result = foo(null, 0); // Returns null - expected
$result = foo(0, 0); // Returns 0 - expected
$result = foo('0', 0); // Returns '00' - unexpected
$result = foo(0, '0'); // Returns '00' - unexpected
