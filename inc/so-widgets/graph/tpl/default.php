<?php 

  $type=esc_attr($instance['type']);

  if ( $type=='line' ) { $chart_type='chart-area'; }

  else { $chart_type='chart-bar'; }

  $count=count($instance['graph_repeater']);

  $x_axis=wp_kses_post($instance['x_axis_value']);

  $x_axis = explode(",", $x_axis);

  if( !empty($instance['title']) ) echo '<h5 class="border-left">'.esc_attr($instance['title']).'</h5>';?>

  <canvas id="<?php echo $chart_type;?>"></canvas>

  


  <?php
  foreach($x_axis as $k=>$value):

    $x_value .=  ($k==0) ? '["'.$value.'"' : ', "'.$value.'"';

  endforeach;

  $x_value=$x_value."]";

  foreach($instance['graph_repeater'] as $key=>$graph):

    ++$key;

    $label[$key]=esc_attr($graph['graph_label']);

    $y_value[$key]='['.$graph['y_axis_value'].']';

    $color[$key]=$graph['color'];

  endforeach;

  $datasets='[';

  for($i=1;$i<=$count;$i++){

    $datasets .=  ($i==1) ? '{label:"'.$label[$i].'",backgroundColor:chartColors.'.$color[$i].',data:'.$y_value[$i].'}' : ', {label:"'.$label[$i].'",backgroundColor:chartColors.'.$color[$i].',data:'.$y_value[$i].'}';

  }

  $datasets.=']';

?>

<script type="text/javascript">

jQuery(document).ready(function () {


    if (typeof Chart != "undefined") {

      var count=<?php echo esc_attr( $count );?>;

      var areaChartData = {

        labels: <?php echo esc_attr( $x_value );?>,

        datasets:<?php echo esc_attr( $datasets );?>

      };

      if (jQuery('#<?php echo $chart_type;?>').length) {

        new Chart(jQuery('#<?php echo $chart_type;?>'), {

          type: '<?php echo $type;?>',

          data: areaChartData,

          options: chartOptions

        });

      }


    }

});

</script>