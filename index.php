<?php
	/**
	 * SwinAnime x STARS, Index Page, Used to build all publically accessable pages on club's website.
	 * @version v0.1.1
	 * @author J.P. Galovic
	 * @date MAR18
	 */

	require_once('include.php'); // Include rquired files.

	//Test Time Code! 21/03/2018
	echo(TimeKeeping::now());

	//Test Url Autoversion! 21/03/2018
	echo(Process::auto_version('http://swinanime.net/index.php'));

	//Test Error Reporting! 01/04/2018
	ErrorReport::send_error(0, 'Test Error!');
?>