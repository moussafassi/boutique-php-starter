<pre>
<?php
$brand = "Nike";
$model = "Air Max";
//avec concatenation
echo "chaussure " . $brand ." ". $model;
//avec interpollation
echo " chaussure $brand $model";
//avec sprintf
echo sprintf (" chaussure %s %s", $brand,$model);
?>
</pre>
