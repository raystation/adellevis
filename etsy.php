<? include "header.php"; ?>

	<div class="container">
    <div class="sixteen columns text-center add-bottom">
      <p>
        Come visit my <a href="https://www.etsy.com/shop/AdelleINK">Etsy shop</a>!
      </p>
      <a href="https://www.etsy.com/shop/AdelleINK"><img src='img/etsy-banner.jpg' alt='Adelleink Etsy Shop' class='scale-with-grid'></a>
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