<?php
require APPROOT. '/views/inc/header.php';
       foreach($data['posts'] as $post) {
           echo '<div class="well">';
           echo '<h3>'.$post->title.'</h3>';
           echo '<small>Posted on '.$post->created_at.' by '.$post->author.'</small>';
           echo '<p>'.$post->content.'</p>';
           echo '</div>';
       }


require APPROOT. '/views/inc/footer.php';
