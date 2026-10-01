<html lang="es-ES">
<head>
  <title>Pinyator - Esdeveniment</title>
<meta charset="utf-8">
<?php $menu=2; include "$_SERVER[DOCUMENT_ROOT]/pinyator/Head.php";?>
<script src="llibreria/popup_esborra.js"></script>
</head>
<?php include "$_SERVER[DOCUMENT_ROOT]/pinyator/Style.php";?>
<body class="popup">
<?php include "$_SERVER[DOCUMENT_ROOT]/pinyator/Menu.php";?>

<table class='butons'>
	<tr class='butons'>
		<th class='butons'><a href="Event_Fitxa.php" class="boto" <?php EventLv2Not("hidden");?> ><?php echo _("Nou"); ?></a></th>
		<th></th>
		<th class='butons'>
			<a href="Event.php?e=1" class="boto" ><?php echo _("Actius"); ?></a>
			<a href="Event.php?e=-1" class="boto" ><?php echo _("Inactius"); ?></a>
			<a href="Event.php?e=2" class="boto" ><?php echo _("Arxivats"); ?></a>
		</th>
	</tr>
</table>
<br>
 <table class='llistes'>
  <tr class='llistes'>
    <th class='llistes'><?php echo _("Esdeveniment"); ?></th>
    <th class='llistes'><?php echo _("Dia"); ?></th>
	<?php if (EsEventLv2())echo "<th class='llistes'>Castells</th>"; ?>
	<th class='llistes'><?php echo _("Inscrits"); ?></th>
	<th class='llistes'><?php echo _("Comentaris"); ?></th>
	<th class='llistes'><?php echo _("Plantilla"); ?></th>
	<th class='llistes'><?php echo _("Estat"); ?></th>
	<?php if (EsEventLv2()) echo "<th class='llistes'>"._('Acció')."</th>" ?>
  </tr>
<?php

$estat=1;
if (!empty($_GET["e"]))
{
	$estat=intval($_GET["e"]);
}

include "$_SERVER[DOCUMENT_ROOT]/pinyator/Connexio.php";
