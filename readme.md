# Transpose

## Example

~~~php
$transpose = new \Transpose\Transpose();

/* Output: 
 * AD 
 * BE
 * CF
 */
var_dump($transpose->convert("ABC".PHP_EOL."DEF"));
~~~
