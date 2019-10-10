<?php
/** 
 * Task 1
 */

function checkBrackets($string) {
  $correct_message = 'correct';
  $incorrect_message = 'incorrect';
  $stack  = array();
  
  for ($i = 0; $i < strlen($string); $i++) {
    switch ($string[$i]) {
      case '[':
        array_push($stack, '[');
        break;
      case ']':
        if (array_pop($stack) !== '[') {
          return $incorrect_message;
        }
        break;
      case '(':
        array_push($stack, '(');
        break;
      case ')':
        if (array_pop($stack) !== '(') {
          return $incorrect_message;
        }
        break;
      case '{':
        array_push($stack, '{');
        break;
      case '}':
        if (array_pop($stack) !== '{') {
          return $incorrect_message;
        }
        break;
      default: 
        break;
    }
  }
  
  return (empty($stack) ? $correct_message : $incorrect_message);
}

$string_one = '[[{}]()]';
echo checkBrackets($string_one); // correct

echo '<br>';

$string_two = '[[]({)}]';
echo checkBrackets($string_two); // incorrect
