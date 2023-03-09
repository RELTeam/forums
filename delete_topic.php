<?php
session_start();
if(isset($_SESSION['LOGGED_IN'])) {
  if($_POST['topic'] ?? null) {
    $topics = json_decode(file_get_contents("topics.json"),true);
    if(!array_key_exists($_POST['topic'], $topics)) {
      http_response_code(400);
      echo "404: Topic given is not found.";
    } else if($topics[$_POST['topic']][0]['author'] !== $_SESSION['user']) {
      http_response_code(401);
      echo "You cannot delete the topic given because you are not an admin or the topic poster.";
    } else {
      unset($topics[$_POST['topic']]);
      file_put_contents("topics.json",json_encode($topics));
      echo "The topic was deleted by a moderator.";
    }
  } else {
    echo "You cannot delete the topic given.";
  }
} else {
  echo "Please sign in to delete account-owned topics.";
}
?>
<link rel="stylesheet" href="/proconfig/topic-ui.css">