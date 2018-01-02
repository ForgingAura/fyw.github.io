<?php
//On donne un valeurs par defauts a renvoyer
$ReturnVersion = "null";
$ModID = "null";
$MCVersion = "0";
$ModURL = "null";
$FYW112Version = "1.8";

//Version 1.X de Forge Your World
$FYW112 = "
        \"1.12.2-recommended\": \"" . $FYW112Version . "\",
        \"1.12.1-latest\": \"" . $FYW112Version . "\",
        \"1.12.1-recommended\": \"" . $FYW112Version . "\",
        \"1.12-latest\": \"" . $FYW112Version . "\",
        \"1.12-recommended\": \"" . $FYW112Version . "\"
";


//On fait un petit manipe pour renvoyer les bonne valeur
//Test Pour Forge Your World
if (isset($_GET['ModID']) AND $_GET['ModID'] == "FYW") {
	$ModURL = "forge-your-world";

	if (isset($_GET['MCVersion']) AND $_GET['MCVersion'] == 1.12) {
		$ReturnVersion = $FYW112;

	} else if (isset($_GET['MCVersion'])) {
		$ReturnVersion;

	} 	

}


//On donne la Bonne version au mod en ficher
echo "
{
    \"homepage\": \"https://minecraft.curseforge.com/projects/" . $ModURL . "\",
    \"promos\": {
        " . $ReturnVersion . "
    }
}
    ";
?>