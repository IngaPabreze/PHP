
<?php $metai= 1982;?>
<?=($metai >= 2001)? 'Nauji laikai':'Seni laikai'?>
<?php if ($metai >= 2001) : ?>
<p>Nauji laikai</p>
<?php elseif ($metai >=1984): ?>
<p>Seni laikai</p>
<?php else : ?>
<p>Labai seni laikai</p>
<?php endif; ?>
