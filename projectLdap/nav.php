<?php

?><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Bonjour <?php echo $_SESSION['uid']; ?></a>
            <?php if($_SESSION['uid'] == 'admin'){

                echo '<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liste des groupes <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liste des utilisateurs</a>
                    </li>
                </ul>';
            }else{
                echo '<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Mes infos <span class="sr-only">(current)</span></a>
                </li>
            </ul>';
            }
            ?>
            <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0" type="button">Deconnexion</a>
            
        </div>
  </nav>
