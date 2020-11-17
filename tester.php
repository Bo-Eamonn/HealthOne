<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tester</title>
    <style>
    table{
    border-collapse: collapse;
    border: 1px solid black;
}
td{
    border: 1px solid black;
    width: 100px;}
</style>

</head>
<body>
    <?php
try{
    include('backend/connectDB.php');
    $query = $db->prepare("SELECT * FROM med");
            $query->execute();
            $result = $query->fetchALL(PDO::FETCH_ASSOC);
            echo "<table>";
            echo "<td>ADHDmiddelen</td>";
            echo "<td>Alzheimermiddelen</td>";
            echo "<td>Antiepileptica</td>";
            echo "<td>Antidepressiva_en_lithium</td>";
            echo "<td>Antihistaminica</td>";
            echo "<td>Antihypertensiva</td>";
            echo "<td>Antipsychotica</td>";
            echo "<td>Benzodiazepinen</td>";
            echo "<td>Hoestmiddelen</td>";
            echo "<td>Hoofdpijnmiddelen</td>";
            echo "<td>Incontinentiemiddelen</td>";
            echo "<td>Middelen_bij_kanker</td>";
            echo "<td>Ontwenningsmiddelen</td>";
            echo "<td>Opioïden</td>";
            echo "<td>Parkinsonmiddelen</td>";
            echo "<td>Maagdarmmiddelen</td>";
            echo "<td>Overig</td>";
                foreach ($result as &$data) {
                echo "<tr>";    
                    echo "<td>" . $data["ADHDmiddelen"] . " </td>";
                    echo "<td>" . $data["Alzheimermiddelen"] . " </td>";
                    echo "<td>" . $data["Antiepileptica"] . " </td>";
                    echo "<td>" . $data["Antidepressiva_en_lithium"] . " </td>";
                    echo "<td>" . $data["Antihistaminica"] . " </td>";
                    echo "<td>" . $data["Antihypertensiva"] . " </td>";
                    echo "<td>" . $data["Antipsychotica"] . " </td>";
                    echo "<td>" . $data["Benzodiazepinen"] . " </td>";
                    echo "<td>" . $data["Hoestmiddelen"] . " </td>";
                    echo "<td>" . $data["Hoofdpijnmiddelen"] . " </td>";
                    echo "<td>" . $data["Incontinentiemiddelen"] . " </td>";
                    echo "<td>" . $data["Middelen_bij_kanker"] . " </td>";
                    echo "<td>" . $data["Ontwenningsmiddelen"] . " </td>";
                    echo "<td>" . $data["Opioïden"] . " </td>";
                    echo "<td>" . $data["Parkinsonmiddelen"] . " </td>";
                    echo "<td>" . $data["Maagdarmmiddelen"] . " </td>";
                    echo "<td>" . $data["Overig"] . " </td>";
                echo "</tr>";
                    }
            echo "</table>";     
            } catch(PDOException $e){
            die("Error!: " . $e->getMessage());
        }

?>
</body>
</html>
<?php



















