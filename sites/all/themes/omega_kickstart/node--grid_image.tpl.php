<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> - <?php print $name; ?></footer>
  <?php endif; ?>  
  
<style type="text/css">
    .container {
        position: relative;
        margin-bottom: 10px;
    }
    .container img {
        top: 0;
        left: 0;
        width: 300px;
    }
    .container .caption {
        position: absolute;
        bottom: 0px;
        height: 40px;
        width: 300px;
        background: black;      
        color: yellow;
        padding-top:10px;
        text-indent: 4px;
    }
</style>

<script type="text/javascript">
(function($){
  $(document).ready(function(){

        $('.caption').each(function(){console.log(this); $(this).hide()});
        $('.container').each(function(){
        
          $(this).hover(function () {
          $('.caption', this).slideDown(200);
        },
          function () {
                $('.caption',this).slideUp(200);
			});
            });


        })
            
            
        


    })(jQuery);
</script>       



  <div class="container"  >
    <?php
//        var_dump($content['grid_image_field']);

    $img_uri = $node->grid_image_field['und'][0]['uri'];
 //   var_dump(file_create_url($img_uri));

      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      
      $content['grid_image_field']['#label_display'] = 'hidden';      
      $content['field_popup_text']['#label_display'] = 'hidden';      
    ?>

    <a  href=<?php print $content['field_grid_image_link']['#items'][0]['url']?>>
        <img src=<?php echo file_create_url($img_uri)?>> 
     </a>
  
                    <div class='caption'> 
           <?php print render($content['field_popup_text']); ?>
        </div> 






<?php
  //    print_r($content['field_grid_image_link']);
      //print $content['field_grid_image_link'][0]->url;
    //  echo 'ASD';
//      echo field_view_value('node',$node,'field_grid_image_link','url');
  //    echo field_get_items('node',$node,'field_grid_image_link');

      //
      // wporking
      // var_dump($content['field_grid_image_link']['#items'][0]['url']);
      
    ?>
  </div>
  
</article>
