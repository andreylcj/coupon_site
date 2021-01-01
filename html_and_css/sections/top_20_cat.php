<section class="top_20_cat">
        <div class="suggestion-container container">
                <h2 class="section-title">Top 20 Categorias</h2>
                <hr class='subTitle-hr'>
                <ul class="category-list">

                        <?php 

                                $query_result = get_TopCategories_query_data();

                                echo_data_TopCategories($query_result);


                                function get_TopCategories_query_data(){

                                $result = [];
                                $result[] = ['class' => 'alimentos-e-bebidas', 
                                'storeID' => '1',
                                'icon' => 'fas fa-wine-glass-alt' , 
                                'nicename' => 'Alimentos e Bebidas'];

                                return $result;

                                };

                                function echo_data_TopCategories($data){

                                        $data_length = sizeof($data);

                                        $data_length = 19;
                                        
                                        for($i=0 ; $i<$data_length ; $i++ ){

                                                $html = '<li><a class="' . $data[0]['class'] . '" '; // class
                                                $html .= 'href="categorys_page/category_page.php?category=' . $data[0]['storeID'] . '" '; //href
                                                $html .= 'data-event="AllCategories" '; // data-event
                                                $html .= 'data-action="Top Categories" '; //data-action
                                                $html .= 'data-label="' . $data[0]['nicename'] . '">'; // data-label
                                                $html .= '<i class="' . $data[0]['icon'] . '"></i>'; // icon
                                                $html .= $data[0]['nicename']; // html_text
                                                $html .= '</a></li>';

                                                echo $html; 

                                        }  

                                };      

                        ?>


                        <!--
                        <li><a class="animais-e-pet" href="cupom/animais-e-pet" data-event="AllCategories" data-action="Top Categories"
                                data-label="Animais e Pet">Animais e Pet</a></li>
                        <li><a class="bebe-e-crianca" href="cupom/bebe-e-crianca" data-event="AllCategories"
                                data-action="Top Categories" data-label="Bebê e Criança">Bebê e Criança</a></li>
                        <li><a class="eletrodomesticos" href="cupom/eletrodomesticos" data-event="AllCategories"
                                data-action="Top Categories" data-label="Eletrodomésticos">Eletrodomésticos</a></li>
                        <li><a class="eletronicos" href="cupom/eletronicos" data-event="AllCategories" data-action="Top Categories"
                                data-label="Eletrônicos">Eletrônicos</a></li>
                        <li><a class="esportes-e-fitness" href="cupom/esportes-e-fitness" data-event="AllCategories"
                                data-action="Top Categories" data-label="Esportes e Fitness">Esportes e Fitness</a></li>
                        <li><a class="games" href="cupom/games" data-event="AllCategories" data-action="Top Categories"
                                data-label="Games">Games</a></li>
                        <li><a class="informatica" href="cupom/informatica" data-event="AllCategories" data-action="Top Categories"
                                data-label="Informática">Informática</a></li>
                        <li><a class="passagem-aerea" href="cupom/passagem-aerea" data-event="AllCategories"
                                data-action="Top Categories" data-label="Passagem Aérea">Passagem Aérea</a></li>
                        <li><a class="tv" href="cupom/tv" data-event="AllCategories" data-action="Top Categories" data-label="TV">TV</a>
                        </li>
                        <li><a class="moda-e-acessorios" href="cupom/moda-e-acessorios" data-event="AllCategories"
                                data-action="Top Categories" data-label="Moda e Acessórios">Moda e Acessórios</a></li>
                        <li><a class="moveis-e-decoracao" href="cupom/moveis-e-decoracao" data-event="AllCategories"
                                data-action="Top Categories" data-label="Móveis e Decoração">Móveis e Decoração</a></li>
                        <li><a class="moda-esportiva" href="cupom/moda-esportiva" data-event="AllCategories"
                                data-action="Top Categories" data-label="Moda Esportiva">Moda Esportiva</a></li>
                        <li><a class="perfume-beleza-e-maquiagem" href="cupom/perfume-beleza-e-maquiagem" data-event="AllCategories"
                                data-action="Top Categories" data-label="Perfume, Beleza e Maquiagem">Perfumes e Beleza</a></li>
                        <li><a class="viagem-e-turismo" href="cupom/viagem-e-turismo" data-event="AllCategories"
                                data-action="Top Categories" data-label="Viagem e Turismo">Viagem e Turismo</a></li>
                        <li><a class="calcados" href="cupom/calcados" data-event="AllCategories" data-action="Top Categories"
                                data-label="Calçados">Calçados</a></li>
                        <li><a class="saude-e-cuidados-pessoais" href="cupom/saude-e-cuidados-pessoais" data-event="AllCategories"
                                data-action="Top Categories" data-label="Saúde e Cuidados Pessoais">Saúde</a></li>
                        <li><a class="celulares-e-smartphones" href="cupom/celulares-e-smartphones" data-event="AllCategories"
                                data-action="Top Categories" data-label="Celulares e Smartphones">Smartphones</a></li>
                        <li><a class="taxi" href="cupom/taxi" data-event="AllCategories" data-action="Top Categories"
                                data-label="Táxi">Táxi</a></li> -->
                </ul>
        </div>          
</section>