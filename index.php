<h1>Ordre du daily Eco+</h1>
<?php
$members = [ 'Jérôme', 'Christopher', 'Pierre', 'Brayan', 'Olivier', 'Corentin', 'Nathalie' ];
shuffle($members);
$order = 1;
foreach ($members as $member) {
    echo '<p>' . $order . ' - ' . $member . '</p>';
    $order++;
}
?>