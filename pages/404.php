<?php
$title = "WebRunners - 404";
ob_start();
?>
<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>404</h1>
				<h2>Page not found</h2>
			</div>
			<a href="index.php?page=home">Homepage</a>
		</div>
	</div>

<?php
$content = ob_get_clean();
include '../template/layout.php';
?>
