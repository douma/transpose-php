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

~~~php
/* Output: 
 * ADGI 
 * BEHJ
 *  F K
 */
var_dump($transpose->convert("AB".PHP_EOL."DEF".PHP_EOL."GH".PHP_EOL."IJK"));
~~~
