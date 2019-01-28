<?php
session_start();
?><!DOCTYPE html>
<html lang="fr-FR">
<head>
    <title>User</title>
    <style>
        @import 'https://use.fontawesome.com/releases/v5.6.0/css/all.css';
        @import "css/table.css";
    </style>
</head>
<body>
    <h1>Bonjour <?php echo $_SESSION['uid']; ?></h1>
    <h2>Liste des utilisateurs</h2>
     <table>
         <thead>
             <tr>
                 <th>#id</th>
                 <th>Uid</th>
                 <th>SN</th>
                 <th>Name</th>
                 <th>CN</th>
                 <th>Password</th>
                 <th>Mail</th>
                 <th>Actions</th>
             </tr>
         </thead>
         <tbody>
         <?php          
            $data = $_SESSION['userData'];
            for ($i=0; $i<$data["count"]; $i++) {
                echo "<tr>";
                echo "<td>". $data[$i]["uidnumber"][0] ."</td>";
                echo "<td>". $data[$i]["uid"][0] ."</td>";
                echo "<td>". $data[$i]["sn"][0] ."</td>";
                echo "<td>". $data[$i]["givenname"][0] ."</td>";
                echo "<td>". $data[$i]["cn"][0] ."</td>";
                echo "<td>". $data[$i]["userpassword"][0] ."</td>";
                
                
                if(isset($data[$i]["mail"][0])) {
                    echo "<td>". $data[$i]["mail"][0] ."</td>";
                } else {
                    echo "<td> None</td>";
                }
                echo '<td>
                        <button data-type="edit" class="fas fa-pen" title="Editer la ligne"></button><button data-type="delete" class="fas fa-trash"title="Supprimer la ligne"></button>
                      </td>';
                echo "</tr>";
            }
        ?>
        
         </tbody>
     </table>

</body>
</html>