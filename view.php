<?php



$tabs = carbon_get_post_meta( $post->ID, 'views' );
$tbb_act='tbb_act';
echo '
<div class="tbs">
<ul class="tb_button">';

foreach ( $tabs as $item ): 
        
 echo ' 
  <li class="tb_but '.$tbb_act.'"> '.$item['view_title'].' </li>';

    if($tbb_act){$tbb_act='';}

endforeach;
echo ' </ul>';

$tbc_act='tbc_act';
echo ' <ul class="tb_content">';
foreach ( $tabs as  $item ): 

echo ' 
  <li class="tb_cnt '.$tbc_act.'" ">
  <div class="tb_cnt_image">'
  . wp_get_attachment_image($item['view_icon'], 'post-thumbnail', '', array( 'alt' => $item['view_alt'],))
  . '</div>
  <div class="tb_cnt_text">'.$item['view_description'].'</div>
  </li>';
  if($tbc_act){$tbc_act='';}
endforeach;
echo '</ul>
</div>';
