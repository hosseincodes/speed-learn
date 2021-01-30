<?php
/* Last Edited: 1.0.0 */

if ('posts' == get_option( 'show_on_front' )) {
  include('no-home.php');
} else {
  include('archive.php');
}
