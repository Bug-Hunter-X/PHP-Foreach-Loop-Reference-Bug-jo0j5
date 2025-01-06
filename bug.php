function foo(array &$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}