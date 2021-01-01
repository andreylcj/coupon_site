

<span class="expired-header expired-title scroll-item">
    Cupons expirados de Alimentos e Bebidas 
    <span class="header-subtitle">Talvez ainda funcionem</span>
</span>
<div class="content-block coupons-content expired-content">
    <ul class="coupon-list expired-coupons">

        <?php 
        
            $query_result = get_CategoryExpiredCoupons_query_data();

            echo_data_CategoryExpiredCoupons($query_result);


            function get_CategoryExpiredCoupons_query_data(){

                $result = [];
                $result[] = ['coupon_title' => 'Compre chocolate com desconto de R$50',
                'nicename' => 'Americanas', 
                'img_path' => '/sites/coupon_site/images/logo_images/logo_netshoes.png', 
                'storeID' => '1',
                'destination_url' => '/',
                'coupon_code' => 'CUPOM50'];

                $result[] = ['coupon_title' => 'Compras com 15% OFF utilizando vale Submarino',
                'nicename' => 'Submarino', 
                'img_path' => '/sites/coupon_site/images/logo_images/logo_netshoes.png', 
                'storeID' => '1',
                'destination_url' => '/',
                'coupon_code' => 'PRARELAXAR'];

                $result[] = ['coupon_title' => 'Primeira compra no app com frete grátis',
                'nicename' => 'Rappi', 
                'img_path' => '/sites/coupon_site/images/logo_images/logo_netshoes.png', 
                'storeID' => '1',
                'destination_url' => '/',
                'coupon_code' => 'RAPPID31'];

                $result[] = ['coupon_title' => 'Desconto de R$50 em compras de mercado',
                'nicename' => 'Americanas', 
                'img_path' => '/sites/coupon_site/images/logo_images/logo_netshoes.png', 
                'storeID' => '1',
                'destination_url' => '/',
                'coupon_code' => 'GANHEI50'];

                $result[] = ['coupon_title' => 'Lista de produtos com código Reserva 51 de 10% OFF',
                'nicename' => 'Reserva 51', 
                'img_path' => '/sites/coupon_site/images/logo_images/logo_netshoes.png', 
                'storeID' => '1',
                'destination_url' => '/',
                'coupon_code' => 'CONSUMIDOR10'];

                return $result;

            }

            function echo_data_CategoryExpiredCoupons($data){

                $data_length = sizeof($data);

                for ($i = 0; $i < $data_length; $i++) { 

                    $html = '<li class="item scroll-item js-scroll-item item-code expired-item"> <a class="store-img" ';
                    $html .= 'href="store_page?store='. $data[$i]['storeID'] . '" '; // href
                    $html .= 'title="Cupons de desconto de '. $data[$i]['nicename'] . '" '; // title
                    $html .= 'data-event="Category-Coupon" '; // data-event
                    $html .= 'data-action="Go-Store-Page" '; // data-action
                    $html .= 'data-label="'. $data[$i]['nicename'] . '">'; // data-label
                    
                    $html .= '<img src="' . $data[$i]['img_path'] . '" '; // img src
                    $html .= 'alt="Ver todos cupons de desconto de ' . $data[$i]['nicename'] . '" crossorigin="anonymous">';
                    $html .= '</a>';
                    $html .= '<div class="coupon-info js-coupon-info isSwitchable"><div class="item-title"><h3 class="js-itemTitle" ';
                    $html .= 'data-event="Category-Coupon" '; // data-event
                    $html .= 'data-action="Go-to-Oficial-Store-From-Title" '; // data-action
                    $html .= 'data-label="'. $data[$i]['nicename'] . '">'; // data-label

                    $html .= $data[$i]['coupon_title'] . '</h3>';
                    $html .= '<span class="coupon-code"><span class="code">';
                    $html .= $data[$i]['coupon_code'] . '</span></span></span></div><div class="coupon-info-complement"></div></div>';
                    $html .= '</li>';

                    echo $html;
                }
            }
        ?>
    </ul>
</div>