function foo(a, b) {
  if (a === null || b === null) {
    return null; // Handle null values
  }
  // Strict comparison to ensure data type consistency
  if (is_numeric($a) && is_numeric($b)) {
    return $a + $b;
  } else {
    return null; //Handle non numeric values
  }
}

$result = foo(null, 5); // Returns null
$result = foo(10, null); // Returns null
$result = foo(5, 10); // Returns 15

// Corrected behavior using strict comparison
$result = foo(0, null); // Returns null
$result = foo(null, 0); // Returns null
$result = foo(0, 0); // Returns 0
$result = foo('0', 0); // Returns null
$result = foo(0, '0'); // Returns null