<?php
    for ($i = 1; $i <= 12; $i++) {       

        echo '<li class="featuredItem">';

        $store_hifen_name = "casas-bahia";
        $store_name = "Casas Bahia";

        echo '<a href="/desconto/'. $store_hifen_name . '" title="Cupons de desconto de ' . $store_name . '" class="featuredItem-block"
        data-event="Featured-Stores" data-action="Go-Store-Page" data-label="' . $store_name . '">';

        $under_store_name = "casas_bahia";

        echo '<span class="background"></span>
        <picture class="featuredItem-logo">
            <source width="110" height="88" media="(max-width: 479px)" crossorigin="anonymous" srcset="images/logo_images/logo_' . $under_store_name . '_max_wid_480.png">
            <source width="160" height="125" crossorigin="anonymous" srcset="images/logo_images/logo_' . $under_store_name . '.png">
            <img width="160" height="125" crossorigin="anonymous" src="images/logo_images/logo_' . $under_store_name . '.png" alt="Logo da loja ' . $store_name . '">
        </picture>';

        $coupons_quantity = "23";
        $cashback = "1,5";

        echo '<div class="featuredItem-info">
            <span class="featuredItem-coupons"> ' . $coupons_quantity . 'cupons + </span>
            <span class="featuredItem-cashback">' . $cashback . '% de cashback</span>
        </div>';

        echo "</a></li>";
    }

?>