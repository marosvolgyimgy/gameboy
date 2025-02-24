<?php
$menupont =1;

if(isset($_GET['m']))
{
    $menupont=$_GET['m'];
}

$menu=array(
    array("id" => 1,"nev" => "elso","title" =>"Első"),
    array("id" => 2,"nev" => "masodik","title" =>"Második"),
    array("id" => 3,"nev" => "harmadik","title" =>"Harmadik")
);

$tartalom = array(
    array("menu_id" => 1, "cim" => "Első első", "tartalom" => "tartalom első"),
    array("menu_id" => 1, "cim" => "Első második", "tartalom" => "tartalom második"),
    array("menu_id" => 2, "cim" => "Második első", "tartalom" => "tartalom első"),
    array("menu_id" => 2, "cim" => "Második második", "tartalom" => "tartalom második"),
    array("menu_id" => 3, "cim" => "Harmadik első", "tartalom" => "tartalom első"),
    array("menu_id" => 1, "cim" => "Első harmadik", "tartalom" => "tartalom harmadik"),

);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $menu[$menupont-1]["title"];?></title>
</head>
<body>
    <?php
    for($i = 0; $i < count($menu); i++)
    {
        $active="";
        if($menu[$i]["id"]==$menupont)
        {
            $active="active";
        }
        print"<a class=\"".$active."\" href=\"?m=".$menu[$i]["id"]."\">"
        . $menu[$i]["nev"] ."</a>";
    }
    ?>
    <br><br><br><br>
    <?php
    for($i = 0; $i < count($tartalom); $i++)
    {
        if($tartalom[$i]["menu_id"]==$menupont)
        {
            print"<h2>". $tartalom[$i]["cim"] . "</h2>";
            print"<p>". $tartalom[$i]["tartalom"] . "</p>";

        }
    }
    ?>
</body>
</html>