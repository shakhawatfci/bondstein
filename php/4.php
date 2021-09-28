<?php
# Getting php variable into javascript

#we can write in javascript if javascript file script written  in same page we can't get php variable directly on external js
#Here is Example How we can get it
$phpVar = "shakhawat";

?>
<script type="text/javascript">
    var javaScriptVar = "<?php echo $phpVar; ?>";
    console.log(javaScriptVar);
</script>