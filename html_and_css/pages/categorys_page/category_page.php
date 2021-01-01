<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php $path = $_SERVER['DOCUMENT_ROOT'] . "/sites/coupon_site/elements/"; $path .= "head.html"; include_once($path);?>
    
    <?php  
        
        $storeID = $_REQUEST['category'];
        
        $category_data = getCatData();

        function getCatData(){

            $result = ['name' => 'Alimentos e Bebidas',
            'coupons' => '18',
            'offers' => '22'
            ];

            return $result;

        }
        
    ?>

	<title><?php echo $category_data['name']; ?></title>

</head>
<body class="category-page">

    <?php include '../../elements/header.html';?>    

    <section id="middle" class="middle">
        
        <?php include '../../elements/category_header.php';?> 

        <div class="container middle-container">
            <div class="main-content ">
                
            <?php include '../../sections/category_valid_coupons.php';?> 

            <?php include '../../sections/category_expired_coupons.php';?> 
        
                <div class="breadcrumb"> <span> <a href="/" title="Ver todos os cupons de desconto em destaque">
                            <span>Início</span> </a> </span> <span class="breadcrumb-list-element"> <a
                            href="https://www.cuponomia.com.br/cupom/alimentos-e-bebidas"> <span>Alimentos e Bebidas</span>
                        </a> </span></div>
            </div>
            <div class="sidebar js-sidebar">
                <div class="sidebar-container">
                    <div class="sidebox how-to"> <a class="sidebox-title" href="/como-utilizar-cupons-desconto"
                            data-event="Sidebar-Links" data-action="How-To-Page">Como usar cupons de descontos</a></div>
                    <div id="exclusive" class="sidebox"> <a class="sidebox-title" href="/cupom-desconto-exclusivo"
                            data-event="Sidebar-Links" data-action="Exclusive-Page">Veja nossos Cupons exclusivos</a></div>
                    <div class="sidebox side-stores">
                        <h6 class="sidebox-title">Lojas relacionadas</h6>
                        <ul class="side-list">
                            <li><a data-event="Sidebar-Links" data-action="Related Stores" data-label="McDonald's"
                                    href="/desconto/mc-donalds"> <span class="side-stores-name">McDonald's</span> <span
                                        class="side-stores-coupons">4 cupons</span> </a></li>
                            <li><a data-event="Sidebar-Links" data-action="Related Stores" data-label="Wine"
                                    href="/desconto/wine"> <span class="side-stores-name">Wine</span> <span
                                        class="side-stores-coupons">22 cupons</span> </a></li>
                            <li><a data-event="Sidebar-Links" data-action="Related Stores" data-label="Divvino"
                                    href="/desconto/divvino"> <span class="side-stores-name">Divvino</span> <span
                                        class="side-stores-coupons">5 cupons</span> </a></li>
                            <li><a data-event="Sidebar-Links" data-action="Related Stores" data-label="Natue"
                                    href="/desconto/natue"> <span class="side-stores-name">Natue</span> <span
                                        class="side-stores-coupons">12 cupons</span> </a></li>
                            <li><a data-event="Sidebar-Links" data-action="Related Stores" data-label="Evino"
                                    href="/desconto/evino"> <span class="side-stores-name">Evino</span> <span
                                        class="side-stores-coupons">12 cupons</span> </a></li>
                            <li><a data-event="Sidebar-Links" data-action="Related Stores" data-label="ifood"
                                    href="/desconto/ifood"> <span class="side-stores-name">ifood</span> <span
                                        class="side-stores-coupons">13 cupons</span> </a></li>
                            <li><a data-event="Sidebar-Links" data-action="Related Stores" data-label="Carrefour"
                                    href="/desconto/carrefour"> <span class="side-stores-name">Carrefour</span> <span
                                        class="side-stores-coupons">19 cupons</span> </a></li>
                            <li><a data-event="Sidebar-Links" data-action="Related Stores" data-label="Nescafé Dolce Gusto"
                                    href="/desconto/nescafe-dolce-gusto"> <span class="side-stores-name">Nescafé Dolce
                                        Gusto</span> <span class="side-stores-coupons">6 cupons</span> </a></li>
                            <li><a data-event="Sidebar-Links" data-action="Related Stores" data-label="Empório da Cerveja"
                                    href="/desconto/emporio-da-cerveja"> <span class="side-stores-name">Empório da
                                        Cerveja</span> <span class="side-stores-coupons">6 cupons</span> </a></li>
                            <li><a data-event="Sidebar-Links" data-action="Related Stores" data-label="Rappi"
                                    href="/desconto/rappi"> <span class="side-stores-name">Rappi</span> <span
                                        class="side-stores-coupons">14 cupons</span> </a></li>
                        </ul>
                    </div>
                    <div class="sidebox side-categories">
                        <h6 class="sidebox-title">Cupons de Descontos relacionados</h6>
                        <ul class="side-list">
                            <li><a data-event="Sidebar-Links" data-action="Related Categories" data-label="Delivery"
                                    href="/cupom/delivery">Delivery</a></li>
                            <li><a data-event="Sidebar-Links" data-action="Related Categories" data-label="Vinhos"
                                    href="/cupom/vinhos">Vinhos</a></li>
                            <li><a data-event="Sidebar-Links" data-action="Related Categories"
                                    data-label="Suplementos e Vitaminas" href="/cupom/suplementos-e-vitaminas">Suplementos e
                                    Vitaminas</a></li>
                            <li><a data-event="Sidebar-Links" data-action="Related Categories" data-label="Cervejas"
                                    href="/cupom/cervejas">Cervejas</a></li>
                            <li><a data-event="Sidebar-Links" data-action="Related Categories"
                                    data-label="Saúde e Cuidados Pessoais" href="/cupom/saude-e-cuidados-pessoais">Saúde e
                                    Cuidados Pessoais</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../../elements/footer.html';?>
    
</body>
</html>