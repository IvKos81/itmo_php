<?php

$arr = [
  ['id' => 1, 'name' => 'pop'],
  ['id' => 2, 'name' => 'hip-hop'],
  ['id' => 3, 'name' => 'rock'],
  ['id' => 4, 'name' => 'jazz'],
  ['id' => 5, 'name' => 'classic'],
];

$music = [
  ['id' => 1, 'id_styles' => 5, 'href' => 'https://azbyka.ru/audio/audio1/Muzyka-i-pesni/populjarnaja-klassicheskaja-muzyka/65_iogann_sebastjyan_bah_i_sharlj_guno__sotis_ave_mariya_.mp3'],
  ['id' => 2, 'id_styles' => 5, 'href' => 'https://azbyka.ru/audio/audio1/Muzyka-i-pesni/populjarnaja-klassicheskaja-muzyka/107_zuppe_uvertyura_k_opere_legkaya_kavaleriya.mp3'],
  // ['id'=> 3, 'name'=> 'rock'],
// ['id'=> 4, 'name'=> 'jazz'],
// ['id'=> 5, 'name'=> 'classic'],
];

$str = "";

foreach ($arr as $item) {
  $str .= "<li>" . $item['name'] . "</li>";
}

echo ('<ul>' . $str . '</ul>');

$select = "<select id='styles'>
<option value='1'> pop </option>
<option value='2'> hip-hop </option>
<option value='3'> rock </option>
<option value='4'> jazz </option>
<option value='5'> classic </option>
</select>";

$options = "";
foreach ($arr as $item) {
  $options .= "<option value=" . $item['id'] . ">" . $item['name'] . "</option>";
}

$select = '<select id="styles">' . $options . '</select>';

echo ($select);

$box = [];
if (
  $handle =
  opendir('./upload')
) {
  // echo "Directory handle: $handle\n";
  // echo "Entries:\n";

  /* This is the correct way to loop over the directory. */
  while (false !== ($entry = readdir($handle))) {
    $ext = pathinfo($entry, PATHINFO_EXTENSION);
    //  echo   $ext ."\n";
    if ($ext == 'mp3') {
      array_push($box, "./upload/$entry");
    }
  }

  closedir($handle);
}
// var_dump($box);

$playlist = "";
foreach ($box as $item) {
  $playlist .= '<audio controls="controls">
    <source src="' . $item . '" type="audio/mpeg">
    </audio>';
}
;
echo ($playlist);

