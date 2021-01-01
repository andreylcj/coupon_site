
<ul class="list-filter">
<?php 

    $cat_letters = get_category_letters();

    echo_letters_list($cat_letters);

    function echo_letters_list($letterList){

        for($i=0; $i<sizeof($letterList); $i++){

            $html = '<li class="list-filter-item"><a href="#' . $letterList[$i]['letter'] . '">';
            $html .= $letterList[$i]['letter'] . '</a></li>';

            echo $html;

        }

    }

    function get_category_letters(){

        $result = [['letter' => 'A'], ['letter' => 'B'], ['letter' => 'C'], ['letter' => 'E'], ['letter' => 'F'], ['letter' => 'G']
        , ['letter' => 'H'], ['letter' => 'I'], ['letter' => 'J'], ['letter' => 'L'], ['letter' => 'M'], ['letter' => 'O'], ['letter' => 'P'], ['letter' => 'S']
        , ['letter' => 'T'], ['letter' => 'V']];

        return $result; 

    }
?>
</ul>

<?php 

    $cat_names = get_category_names();

    echo_categoty_name_list($cat_names, $cat_letters);

    function echo_categoty_name_list($catList, $letterList){
        
        $last_break = 0;

        for($i=0; $i<sizeof($letterList); $i++){

            $html = '<ul class="list-letter">';

            $html .= '<li id="' . $letterList[$i]['letter'] . '" class="list-title">' . $letterList[$i]['letter'] . '</li>';

            $is_equal_letter = false;

            for($j=$last_break; $j<sizeof($catList); $j++){

                if($catList[$j]['name'][0] == $letterList[$i]['letter']){

                    $html .= '<li class="list-letter-item"><a href="categorys_page/' . $catList[$j]['hiffen-url'] . '.php">' . $catList[$j]['name'] . '</a></li>';

                }

                if($is_equal_letter){
                    $last_break = $j;
                    break;
                }

            }

            $html .= '</ul>';

            echo $html;

        }

    }

    function get_category_names(){

        $result = [['name' => 'Alimentos e Bebidas', 'hiffen-url' => 'alimentos-e-bebidas'], 
        ['name' => 'Aluguel Carro', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Animais e Pet', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Automotivo', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Bebê e Criança', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Brinquedos', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Calçados', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Casa e Utilidades Domésticas', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Celulares e Smartphones', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Cervejas', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Compras do Exterior', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Cursos e Aulas', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Delivery', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Eletrodomésticos', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Eletrônicos', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Esportes e Fitness', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Farmácia', 'hiffen-url' => 'alimentos-e-bebidas'],    
        ['name' => 'Frete Grátis', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Games', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Hospedagem de Sites', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Hotel', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Informática', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Instrumentos Musicais', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Joias e Relógios', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Lentes de Contato e Armações', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Lingeries e Camisolas', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Livros e Revistas', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Loja de Departamentos', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Malas e Mochilas', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Moda e Acessórios', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Moda Esportiva', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Móveis e Decoração', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Óculos', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Passagem Aérea', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Perfume, Beleza e Maquiagem', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Presentes', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Saúde e Cuidados Pessoais', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Serviços', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Serviços de Internet', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Sex Shop', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Suplementos e Vitaminas', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Táxi', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'TV', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Viagem e Turismo', 'hiffen-url' => 'alimentos-e-bebidas'],
        ['name' => 'Vinhos', 'hiffen-url' => 'alimentos-e-bebidas']
    ];

    return $result; 

    }
?>