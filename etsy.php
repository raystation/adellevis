<? include "header.php"; ?>

	<div class="container">
        <div class="sixteen columns text-center add-bottom">
            <h1><a href="https://www.etsy.com/shop/AdelleINK">My Etsy shop!</a></h1>
        </div>

        <?
            $etsy = list_etsy();
            $count=5;
            foreach ( $etsy as $etsy_item ) {
                if ($count==5) {
                    $size = get_image_size($etsy_item["img"]);
                    echo "<div class='eight columns add-bottom'><a href='$etsy_item[link]'><img src='$etsy_item[img]' class='scale-with-grid'></a></div>";
                    $count=1;
                } else {
                    echo "<div class='four columns add-bottom'><a href='$etsy_item[link]'><img src='$etsy_item[img]' class='scale-with-grid'></a></div>";
                    $count++;
                }

            }
		?>
	</div>


<? include "footer.php"; ?>