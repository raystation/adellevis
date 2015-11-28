<?
function pick_random_from_list( $array ){
	$random_array = array_rand( $array, count($array) );
	return $random_array;
}
function get_image_size($img){
	$imageSize = getimagesize($img);
	return $imageSize;
}
function list_color(){
	$list=array(
		"Orange",
		"Red",
		"Black",
		"Brown",
		"Brown",
		"CadetBlue",
		"BlueViolet",
		"CadetBlue",
		"CornflowerBlue",
		"DarkGoldenRod",
		"DarkCyan",
		"DarkKhaki",
		"DarkMagenta",
		"DeepPink",
		"DeepSkyBlue",
		"DodgerBlue",
		"Fuchsia",
		"Maroon",
		"MediumVioletRed",
		"OrangeRed",
		"PaleVioletRed",
		"RoyalBlue",
		"Peru",
		"SteelBlue",
		"Tomato",
		"YellowGreen",
	);
	return $list;
}
function get_date() {
	date_default_timezone_set("America/Los_Angeles");
	$date["year"]=date('Y');
	$date["day"]=date('D');
	return $date;
}
function get_emoji(){
	$emoji_path = "img/emoji";
	$emojis = get_images( $emoji_path );

	$rand = array();

	for ($i=1; $i < 4; $i++) {
		$random_number = array_rand($emojis);
		while ( in_array( $random_number, $rand ) ) {
			$random_number = array_rand($emojis);
		}
		$rand[] = $random_number;
	}

	foreach ($rand as $key => $value) {
		echo "<img src='" . $emoji_path . "/" . $emojis[$value] . "'>";
	}
}
function get_images($dir){
	$files = array_diff( scandir( $dir ), Array( ".", "..", ".DS_Store" ) );
	return $files;
}
function list_etsy(){
	$array=array(
		array(
			"img" => "https://img0.etsystatic.com/018/0/6902739/il_170x135.519948914_a749.jpg",
			"link" => "https://www.etsy.com/listing/167661072/hand-painted-personalised-holiday?ref=shop_home_feat_1"
		),
		array(
			"img" => "https://img1.etsystatic.com/031/0/6902739/il_170x135.545507229_qogl.jpg",
			"link" => "https://www.etsy.com/listing/174299146/hand-painted-house-building-property?ref=shop_home_feat_3"
		),
		array(
			"img" => "https://img0.etsystatic.com/010/0/6902739/il_170x135.415924418_k65t.jpg",
			"link" => "https://www.etsy.com/listing/120471128/hand-painted-pet-portrait-ornament-dog?ref=shop_home_feat_4"
		),
		array(
			"img" => "https://img0.etsystatic.com/011/0/6902739/il_170x135.415962052_bzjm.jpg",
			"link" => "https://www.etsy.com/listing/120481462/hand-painted-personalised-holiday-or?ref=shop_home_active_1"
		),
		array(
			"img" => "https://img1.etsystatic.com/018/0/6902739/il_170x135.512549411_qt6c.jpg",
			"link" => "https://www.etsy.com/listing/165662529/hand-painted-schoolcollege-logo-ornament?ref=shop_home_active_2"
		),
		array(
			"img" => "https://img1.etsystatic.com/016/0/6902739/il_170x135.459856607_n4zz.jpg",
			"link" => "https://www.etsy.com/listing/151395475/hand-painted-pet-portrait-ornament-dog?ref=shop_home_active_3"
		),
		array(
			"img" => "https://img0.etsystatic.com/016/0/6902739/il_170x135.415922718_865h.jpg",
			"link" => "https://www.etsy.com/listing/120470624/hand-painted-pet-portrait-ornament-dog?ref=shop_home_active_4"
		),
		array(
			"img" => "https://img1.etsystatic.com/012/0/6902739/il_170x135.415924535_rno2.jpg",
			"link" => "https://www.etsy.com/listing/120470512/hand-painted-personalised-holiday-or?ref=shop_home_active_5"
		),
		array(
			"img" => "https://img1.etsystatic.com/040/0/6902739/il_170x135.538622999_hp1q.jpg",
			"link" => "https://www.etsy.com/listing/172502808/hand-painted-businessschoolcollegeor-any?ref=shop_home_active_6"
		),
		array(
			"img" => "https://img1.etsystatic.com/010/0/6902739/il_170x135.421511299_p3c5.jpg",
			"link" => "https://www.etsy.com/listing/121993811/hand-painted-pet-portrait-ornament?ref=shop_home_active_7"
		),
		array(
			"img" => "https://img0.etsystatic.com/040/0/6902739/il_170x135.520932094_dt4q.jpg",
			"link" => "https://www.etsy.com/listing/167917676/hand-painted-personalised-holiday?ref=shop_home_active_8"
		),
		array(
			"img" => "https://img1.etsystatic.com/011/0/6902739/il_170x135.416091269_bwyd.jpg",
			"link" => "https://www.etsy.com/listing/120515593/hand-painted-personalised-holiday?ref=shop_home_active_9"
		),
		array(
			"img" => "https://img0.etsystatic.com/009/0/6902739/il_170x135.459848416_jopf.jpg",
			"link" => "https://www.etsy.com/listing/151395395/hand-painted-pet-portrait-ornament-dog?ref=shop_home_active_11"
		),
		array(
			"img" => "https://img1.etsystatic.com/041/0/6902739/il_170x135.621296153_7e5d.jpg",
			"link" => "https://www.etsy.com/listing/194795731/lion-dream-landscape-art-original?ref=shop_home_active_12"
		),
		array(
			"img" => "https://img0.etsystatic.com/018/0/6902739/il_170x135.519948914_a749.jpg",
			"link" => "https://www.etsy.com/listing/167661072/hand-painted-personalised-holiday?ref=shop_home_active_13"
		),
		array(
			"img" => "https://img1.etsystatic.com/009/0/6902739/il_170x135.416076337_68w6.jpg",
			"link" => "https://www.etsy.com/listing/120511973/hand-painted-personalised-holiday?ref=shop_home_active_14"
		),
		array(
			"img" => "https://img0.etsystatic.com/029/0/6902739/il_170x135.545356696_jula.jpg",
			"link" => "https://www.etsy.com/listing/174297303/hand-painted-pet-portrait-ornament-dog?ref=shop_home_active_15"
		),
		array(
			"img" => "https://img1.etsystatic.com/034/0/6902739/il_170x135.545445747_otz1.jpg",
			"link" => "https://www.etsy.com/listing/174283580/hand-painted-pet-portrait-ornament-dog?ref=shop_home_active_16"
		),
		array(
			"img" => "https://img0.etsystatic.com/040/0/6902739/il_170x135.545415070_kxw2.jpg",
			"link" => "https://www.etsy.com/listing/174311889/hand-painted-pet-portrait-ornament-dog?ref=shop_home_active_17"
		),
		array(
			"img" => "https://img1.etsystatic.com/031/0/6902739/il_170x135.545507229_qogl.jpg",
			"link" => "https://www.etsy.com/listing/174299146/hand-painted-house-building-property?ref=shop_home_active_18"
		),
		array(
			"img" => "https://img0.etsystatic.com/015/0/6902739/il_170x135.415924012_j5ub.jpg",
			"link" => "https://www.etsy.com/listing/120471027/hand-painted-pet-portrait-ornament-dog?ref=shop_home_active_19"
		),
		array(
			"img" => "https://img1.etsystatic.com/013/0/6902739/il_170x135.415883129_nhbx.jpg",
			"link" => "https://www.etsy.com/listing/120470245/hand-painted-pet-portrait-ornament-dog?ref=shop_home_active_20"
		),
		array(
			"img" => "https://img1.etsystatic.com/027/0/6902739/il_170x135.616855205_q6ad.jpg",
			"link" => "https://www.etsy.com/listing/193561750/peace-paintinglettering-set-original?ref=shop_home_active_21"
		),
		array(
			"img" => "https://img0.etsystatic.com/040/0/6902739/il_170x135.614791430_ji90.jpg",
			"link" => "https://www.etsy.com/listing/193023860/portrait-of-bob-marley-original-painting?ref=shop_home_active_22"
		),
	);
	return $array;
}