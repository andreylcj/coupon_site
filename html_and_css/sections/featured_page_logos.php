<div id="featured" class="container">
    <h2 class="section-title">Lojas mais populares</h2>
    <hr class='subTitle-hr'>
    <ul class="featured-stores">

        <?php

            $query_result = get_TopStores_query_data();

            echo_data_18FeaturedStores($query_result);


            function get_TopStores_query_data(){

                $result = [];
                $result[] = ['href' => 'stores_page/casas_bahia.php', 
                'nicename' => 'Casas Bahia', 
                'img_paths' => '/sites/coupon_site/images/logo_images/logo_casas_bahia_max_wid_480.png width:110 height:88 max-width:480,/sites/coupon_site/images/logo_images/logo_casas_bahia.png width:160 height:125 max-width:',
                ];

                return $result;

            };

            function echo_data_18FeaturedStores($data){

                $data_length = sizeof($data);

                $data_length = 18;

                for ($i = 0; $i < $data_length; $i++) {       

                    $html = '<li class="featuredItem"><a class="featuredItem-block" ';

                    $html .= 'href="'. $data[0]['href'] . '" '; // href
                    $html .= 'title="Cupons de desconto de '. $data[0]['nicename'] . '" '; // title
                    $html .= 'data-event="Featured-Stores" '; // data-event
                    $html .= 'data-action="Go-Store-Page" '; // data-action
                    $html .= 'data-label="'. $data[0]['nicename'] . '">'; // data-label

                    $html .= '<span class="background"></span><picture class="featuredItem-logo">';

                    $img_info = get_img_info($data[0]['img_paths']); // array de (obj) [srcset_url, width, height, max-width]

                    $img_info_length = sizeof($img_info);

                    $img_info_length = 2;

                    for($j = 0; $j< $img_info_length; $j++){

                        // verify existing of width and height
                        if(!$img_info[0]['width']){
                            $img_info[0]['width'] = "";
                        }else{
                            $img_info[0]['width'] = 'width="' . $img_info[0]['width'] . '" ';
                        }
                        if(!$img_info[0]['height']){
                            $img_info[0]['height'] = "";
                        }else{
                            $img_info[0]['height'] = 'height="' . $img_info[0]['height'] . '" ';
                        }

                        $html .= '<source ' . $img_info[0]['width'] . '' . $img_info[0]['height'];

                        if($img_info[0]['max-width']){

                            $html .= 'media="(max-width: ' . $img_info[0]['max-width'] . 'px)" ';

                        }

                        $html .= 'crossorigin="anonymous" ';
                        
                        $html .= 'srcset="' . $img_info[0]['srcset_url'] . '">';                

                    }            

                    $img_info_length = 2;

                    $html .= '<img ' . $img_info[$img_info_length - 1]['width'] . '' . $img_info[$img_info_length - 1]['height'];

                    $html .= 'crossorigin="anonymous" ';            

                    $html .= 'src="' . $img_info[$img_info_length - 1]['srcset_url'] . '" '; 

                    $html .= 'alt="Logo da loja ' . $data[0]['nicename'] . '">';

                    $html .= '</picture></a></li>';

                    echo $html;

                }

            };

            function get_img_info($paths_str){

                $paths_str = explode(",",$paths_str);

                $return = [];

                for($i=0 ; $i<sizeof($paths_str); $i++){

                    $unique_img_info = explode(" ",$paths_str[$i]);

                    $url = $unique_img_info[0];
                    $width = explode(":",$unique_img_info[1])[1];
                    $heigth = explode(":",$unique_img_info[2])[1];
                    $max_width = explode(":",$unique_img_info[3])[1];

                    $return[] = ['srcset_url' => $url, 'width' => $width, 'height' => $heigth, 'max-width' => $max_width];

                }

                return $return;

            }   

        ?>

    </ul>
</div>