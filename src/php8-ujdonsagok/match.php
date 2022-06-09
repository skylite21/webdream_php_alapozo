<?php

class Conversation {}

$obj = new Conversation();

// switch (get_class($obj)) {
//   case 'Conversation':
//     $type = 'started_conversation';
//     break;
//   case 'Reply':
//     $type = 'reply_to_conversation';
//     break;
//
//   case 'Comment':
//     $type = 'comment_on_lesson';
//     break;
// }
//
// echo $type;

$type = match(get_class($obj)) {
  'Conversation' => 'started_conversation',
  'Reply' => 'reply_to_conversation',
  'Comment' =>'comment_on_lesson'
};

echo $type;

// php7ben még csak ez működött:
// Conversation::class
// de mostmár a példányra is ez lekérdezhető
$type = match($obj::class) {
  'Conversation' => 'started_conversation',
  'Reply' => 'reply_to_conversation',
  'Comment' =>'comment_on_lesson'
};

echo $type;

