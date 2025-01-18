To avoid this issue, always check if a key exists before accessing it. You can use `isset()` or the null coalescing operator (`??`) to gracefully handle the case where the key is not found:

```php
$myArray = ['a' => 1, 'b' => 2];

// Using isset():
if (isset($myArray['c'])) {
  $result = $myArray['c'] + 5;
} else {
  $result = 5; // or handle the absence of the key appropriately
}

// Using the null coalescing operator (PHP 7.0+):
$result = ($myArray['c'] ?? 0) + 5; // 0 is used as a default value if 'c' is not set

$concatenation = "Value: " . ($myArray['d'] ?? 'N/A'); // 'N/A' if 'd' is not set
```

The `isset()` function explicitly checks if a key exists, while the null coalescing operator provides a concise way to assign a default value if the key is missing.  Choosing the right approach depends on your coding style and specific needs.