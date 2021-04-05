<?php
/* Last Edited: 1.2.0 */

if ('posts' == 'show_on_front') {
  include('no-home.php');
} else {
  include('archive.php');
}
