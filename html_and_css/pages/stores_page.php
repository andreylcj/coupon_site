<!DOCTYPE html>
<html lang="en">
<head>
	
	<?php $path = $_SERVER['DOCUMENT_ROOT'] . "/sites/coupon_site/elements/"; $path .= "head.html"; include_once($path);?>

	<title>Lojas</title>

</head>
<body class="stores">

	<?php include '../elements/header.html';?>

	<section id="page_stores_featured_stores" class="page_stores_featured_stores">
		<div class="header-container">
			<!-- <div class="container">
				<h1 class="page-title">Encontre cupons de desconto em nossas principais lojas</h1>
			</div> -->
		</div>

		<?php include '../sections/featured_page_logos.php'; ?>
		
	</section>

	<?php include '../sections/all_stores.php'; ?>

	<?php include '../elements/footer.html';?>

</body>
</html>