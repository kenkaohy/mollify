<?php

/**
 * page_success.php
 *
 * Copyright 2008- Samuli Järvelä
 * Released under GPL License.
 *
 * License: http://www.mollify.org/license.php
 */

include "install/installation_page.php";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
	<?php pageHeader("Mollify Installation");?>

	<?php pageBody("Installation Complete");?>

	<h4>Mollify is successfully installed</h4>
	<p>
		You can now log into Mollify using the admin account created.
	</p>
	<p>
		For additional configuration options or instructions, see <a href="https://code.google.com/p/mollify/wiki/Installation" target="_blank">Installation instructions</a>.
	</p>

	<?php pageFooter();?>
</html>