<?php

if (in_category('9') || in_category('10') || in_category('12') || in_category('11')) {include (TEMPLATEPATH . '/single-project.php');
}
else { include (TEMPLATEPATH . '/single-blog.php');
}
?>