<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarUsuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-<?php
            switch(getDat('avatar')){
                case 1: echo "tie\"       style=\"color:orange";  break;
                case 2: echo "astronaut\" style=\"color:orange";  break;
                case 3: echo "ninja\"     style=\"color:orange";  break;
                case 4: echo "graduate\"  style=\"color:orange";  break;
                default: echo "circle";
            }?>">
        </i>
    </a>
    <div class="dropdown-menu px-1" aria-labelledby="navbarUsuario">
        <?php
            if(isset($_GET['av'])) avatear($_GET['av']);
                if(isset($_SESSION['user'])){
                    if(getDat('avatar')>0) include('info.php');
                    else include('avatar.php');
                }else{
                    if(isset($_GET['reg']))
                        include('signup.php');
                    else include('login.php');
                }
        ?>
    </div>
</li>