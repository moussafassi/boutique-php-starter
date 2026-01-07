<pre>
<?php
$clothes = ["T-shirt", "Jean", "Pull"];
$accessories = ["Ceinture", "Montre", "Lunettes"];
$catalog= array_merge($clothes,$accessories);
array_unshift($catalog,"Bonnet");
print_r($catalog);
echo count($catalog);

?>
</pre>
