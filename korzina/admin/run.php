<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $query = "Update relation set status=1 WHERE id_Klient=" . $_GET['id'];
    require_once("param.php");
    $rezult = mysqli_query($abc, $query) or die("Query error");
    $query2 = "Select id_items,kolvo from Korzina.relation WHERE id_Klient=" . $_GET['id'];
    $rezult2 = mysqli_query($abc, $query2) or die("Query2 error");
    while ($next2 = mysqli_fetch_array($rezult2)) {
        $query3 = "Update items set kol=kol-" . $next2["kolvo"] . " WHERE id=" . $next2['id_items'];
        mysqli_query($abc, $query3) or die("Error query3");
    }
}
header("location:zakaz.php");
?>