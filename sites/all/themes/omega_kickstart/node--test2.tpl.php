<style type="text/css">
  p.toggler:hover {
    color:#0071B3;
  }
.pippo {
    background: red;
} 
 
</style>


<script type="text/javascript">
    (function($) {
        $(document).ready(function(){
          $(".toggler").hover(function(){
            $(this).next().slideToggle("slow");
            return false;
          }).next().hide();
        });
    })(jQuery);
</script>

<?php 
global $base_path;
echo $base_path ; ?>

OK ANCHEa IL SCRITTTOSTO SADASD 
<div class='pippo'>
<?php 

$content['field_imagetest']['#label_display'] = 'hidden';
print render($content['field_imagetest']); 

print render($content['field_htmlfield']); 
print render($base_url);


?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
</div>
