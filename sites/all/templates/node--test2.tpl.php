

<script type="text/javascript">
    (function($) {
        $(document).ready(function(){
          $(".toggler").click(function(){
            $(this).next().slideToggle("slow");
            return false;
          }).next().hide();
        });
    })(jQuery);
</script>


<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

