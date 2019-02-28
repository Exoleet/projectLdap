<?php
session_start();

?><!DOCTYPE html>
<html lang="fr-FR">
<head>
    <title>Users list</title>
    <style>
        @import 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css';
        @import 'https://use.fontawesome.com/releases/v5.6.0/css/all.css';
    </style>
    <script src="js/ajax/add.js" defer></script>
</head>
<body>
    <?php require 'nav.php' ?>
    <h2>Liste des utilisateurs</h2>
    <button class="btn btn-danger float-right mx-2 my-2 fas fa-trash"> Supprimer tout</button>
    <button class="btn btn-success float-right my-2 fas fa-plus" data-toggle="modal" data-target="#exampleModal"> Ajouter</button>
     <table class="table">
         <thead class="thead-dark">
             <tr>
                 <th scope="col">#id</th>
                 <th scope="col">Uid</th>
                 <th scope="col">SN</th>
                 <th scope="col">Name</th>
                 <th scope="col">CN</th>
                 <th scope="col">Password</th>
                 <th scope="col">Mail</th>
                 <th scope="col">Actions</th>
             </tr>
         </thead>
         <tbody>
         <script>
             var data = '<?php echo json_encode($_SESSION['userData']); ?>';
            console.log(JSON.parse(data));
        </script>    
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
                        <button data-type="edit" class="btn btn-warning mx-2 fas fa-pen" title="Editer la ligne"></button><button data-type="delete" class="btn btn-danger fas fa-trash"title="Supprimer la ligne"></button>
                      </td>';
                echo "</tr>";
            }
        ?>
        
         </tbody>
     </table>

 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add a user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row justify-content-center">
    <form id="_form_add_user" class="col-md-12 my-3" role="form">
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Uid</label>
                <div class="col-lg-9">
                    <input class="form-control" type="text" value="" placeholder="User ID">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                <div class="col-lg-9">
                    <input class="form-control" type="email" placeholder="User email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Surname</label>
                <div class="col-lg-9">
                    <input class="form-control" type="text" placeholder="User Surname">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Name</label>
                <div class="col-lg-9">
                    <input class="form-control" type="text" placeholder="User Name">
                </div>
            </div>
    
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Password</label>
                <div class="col-lg-9">
                    <input class="form-control" type="password" placeholder="Enter a password">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                <div class="col-lg-9">
                    <input class="form-control" type="password" placeholder="Enter a password again">
                </div>
            </div>
        </form>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add user</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>