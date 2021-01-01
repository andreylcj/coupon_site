<div class="content-block coupons-content js-toll">
    <ul class="coupon-list valid-coupons">

        <?php 

            $query_result = get_CategoryCoupons_query_data();

            echo_data_CategoryCoupons($query_result);


            function get_CategoryCoupons_query_data(){

                $result = [];
                $result[] = ['coupon_title' => 'Aproveite acessórios Nespresso com até 50% de desconto', 
                'cashback' => '1,25',
                'info' => 'Confira os itens com desconto e aproveite!',
                'nicename' => 'Nespresso', 
                'img_path' => '/sites/coupon_site/images/logo_images/logo_nespresso.jpg', 
                'storeID' => '1',
                'destination_url' => '/',
                'type' => 'offer',
                'coupon_code' => ''];

                $result[] = ['coupon_title' => 'Cupom ChefsClub garante 50% OFF + 2 meses Grátis na assinatura anual', 
                'cashback' => '3,5',
                'info' => 'Benefício de 50% de desconto na assinatura anual do ChefsClub disponível para novos clientes e clientes com assinaturas expiradas. Esta oferta dá direito a 1 assinatura de 14 meses e uso ilimitado do app ChefsClub durante este período. Não cumulativo com outras promoções e ofertas. Permitido apenas um resgate de cupom por CPF.',
                'nicename' => 'ChefsClub', 
                'img_path' => '/sites/coupon_site/images/logo_images/logo_nespresso.jpg', 
                'storeID' => '2',
                'destination_url' => '/',
                'type' => 'coupon',
                'coupon_code' => 'MORANTCHEFS50'];

                $result[] = ['coupon_title' => 'Frete grátis em compras com código Meu Mercado em Casa', 
                'cashback' => '3,5',
                'info' => 'Aplique o código no carrinho e aproveite!',
                'nicename' => 'Meu Mercado Em Casa', 
                'img_path' => '/sites/coupon_site/images/logo_images/logo_nespresso.jpg', 
                'storeID' => '3',
                'destination_url' => '/',
                'type' => 'coupon',
                'coupon_code' => 'FRETEGRATISBLACKFRIDAY'];

                return $result;

            }

            function echo_data_CategoryCoupons($data){

                $data_length = sizeof($data);

                for ($i = 0; $i < $data_length; $i++) {  
                
                    $html = '<li class="item scroll-item item-sale"><a class="store-img" ';

                    $html .= 'href="store_page?store='. $data[$i]['storeID'] . '" '; // href
                    $html .= 'title="Cupons de desconto de '. $data[$i]['nicename'] . '" '; // title
                    $html .= 'data-event="Category-Coupon" '; // data-event
                    $html .= 'data-action="Go-Store-Page" '; // data-action
                    $html .= 'data-label="'. $data[$i]['nicename'] . '">'; // data-label

                    $html .= '<img src="' . $data[$i]['img_path'] . '" '; // img src
                    $html .=  'alt="Ver todos cupons de desconto de ' . $data[$i]['nicename'] . '" crossorigin="anonymous">';
                    $html .= '<div class="store-logo-text"><div class="store-logo-intro">Ver cupons de</div>';
                    $html .= '<div class="store-logo-name">' . $data[$i]['nicename'] . '</div></div></a>';
                    $html .= '<div class="coupon-info js-coupon-info isSwitchable"><div class="item-title"><h3 class="js-itemTitle" ';
                    
                    $html .= 'data-event="Category-Coupon" '; // data-event
                    $html .= 'data-action="Go-to-Oficial-Store-From-Title" '; // data-action
                    $html .= 'data-label="'. $data[$i]['nicename'] . '">'; // data-label

                    $html .= $data[$i]['coupon_title'] . '</h3>';
                    $html .= '<span class="flag-coupon-cashback"> + ' . $data[$i]['cashback'] . '% de cashback <del></del> </span></div>';
                    $html .= '<div class="coupon-info-complement"><div class="item-desc-wrapper toggle-text"><div class="item-desc">' . $data[$i]['info'] . '</div></div></div>';
                    $html .= '</div>';

                    if( $data[$i]['type'] == 'offer' ){

                        $html .= '<div class="item-promo item-sale"> <span class="item-promo-block item-promo-link item-sale-link" data-event="Category-Coupon" data-action="Deal-Button" ';
                        $html .= 'data-label="' . $data[$i]['nicename'] . '" title="Clique para abrir ver o desconto no site">Ver Desconto</span></div>';

                    }else if( $data[$i]['type'] == 'coupon' ){

                        $html .= '<div class="item-promo item-code"> <span class="item-promo-block" data-event="Category-Coupon" data-action="Code-Button" ';
                        $html .= 'data-label="' . $data[$i]['nicename'] . '"><span class="item-promo-link item-cover"><span class="item_promo_link_inside">Ver Cupom</span></span>';
                        $html .= '<span class="item-code-link">' . $data[$i]['coupon_code'] . '</span> </span></div>';

                    }

                    $html .= '</li>';

                    echo $html;

                    if( $i == 1){

                        include '../../elements/chrome-extension.php';

                    }
                
                }

            }

        ?>            
    </ul>
</div>