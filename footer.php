<?php

if ( is_front_page() ){
	include(TEMPLATEPATH.'/footer-main.php');
}
else if ( is_page('taylor-bar-assault-eugene') ){
	include(TEMPLATEPATH.'/footer-fahran.php');
}
else {
	 include(TEMPLATEPATH.'/footer-contact.php');
}
?>


