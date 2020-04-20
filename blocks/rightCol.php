<div id="rightCol">
            <?php
            for($i = 0; $i < count($target); $i++){
            $k = $i + 1;
            echo '<div class="banner">
                <img src="'.$target[$i]['pic'].'" alt="Баннер '.$k.'" name="Баннер '.$k.'">
                <p>'.$target[$i]['title'].'</p>
                </div>';
            }
            ?>
</div>