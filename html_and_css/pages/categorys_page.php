<!DOCTYPE html>
<html lang="en">
<head>
	
	<?php $path = $_SERVER['DOCUMENT_ROOT'] . "/sites/coupon_site/elements/"; $path .= "head.html"; include_once($path);?>

	<title>Categorias</title>

</head>
<body class="categorys">

	<?php include '../elements/header.html';?>

    <?php include '../sections/top_20_cat.php';?>

    <section id="page_stores_featured_stores" class="page_stores_featured_stores">

        <?php include '../sections/featured_page_logos.php'; ?>
    
    </section>

	<?php include '../sections/all_categorys.php'; ?>

	<?php include '../elements/footer.html';?>

</body>
</html>