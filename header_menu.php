

<!--Navigation bar start-->
<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:rgba(0,0,0,0.5)">
            <div class="container">
                    <a href="index.php" class="navbar-brand" style="font-family: 'Delius Swash Caps'">Geek Shop</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav">
                       <li class="nav-item dropdown">
                           <a href="" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">
                               Produtos
                            </a>
                               <div class="dropdown-menu">
                                   <a href="products.php#colecionaveis" class="dropdown-item">Colecionáveis</a>
                                   <a href="products.php#roupas" class="dropdown-item">Roupas</a>
                                   <a href="products.php#livrosmangas" class="dropdown-item">Livros e Mangás</a>
                                   <a href="products.php#acessorios" class="dropdown-item">Acessórios</a>
                               </div>
                           
                       </li>
                       <li class="nav-item"><a href="products.php" class="nav-link">Ofertas</a></li>
                       <li class="nav-item"><a href="about.php" class="nav-link">Sobre Nós</a></li>
                       <?php
                       if (isset($_SESSION['email'])) {
                        ?>
                       <li class="nav-item"><a href="cart.php" class="nav-link">Carrinho</a></li>
                       <?php
                          } 
                    ?>
                    </ul>
                    
                    <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <ul class="nav navbar-nav ml-auto">
                       <li class="nav-item"><a href="logout_script.php" class="nav-link"><i class="fa fa-sign-out"></i>Logout</a></li>
                       <li class="nav-item"><a  class="nav-link " data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>"><i class="fa fa-user-circle "></i></a></li>
                    </ul>
                    <?php
                } else {
                    ?>
                    <ul class="nav navbar-nav ml-auto">
                       <li class="nav-item "><a href="#signup" class="nav-link"data-toggle="modal" ><i class="fa fa-user"></i> Registre-se</a></li>
                       <li class="nav-item "><a href="#login" class="nav-link" data-toggle="modal"><i class="fa fa-sign-in"></i> Login</a></li>
                    </ul>
                    <?php 
                }
                    ?>
                    </div>
                </div>
            </div>
        </nav>
    <!--navigation bar end-->
    <!--Login trigger Modal-->
    <div class="modal fade" id="login" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content"style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
              <h5 class="modal-title">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="login_script.php" method="post">
                 <div class="form-group">
                     <label for="email">Email:</label>
                     <input type="email" class="form-control"  name="lemail" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Senha:</label>
                    <input type="password" class="form-control" id="pwd"  name="lpassword" placeholder="Password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input">
                    <label for="checkbox" class="form-check-label">Check me out</label>
                </div>
                <button type="submit" class="btn btn-secondary btn-block" name="Submit">Login</button>
              </form>
              <a href="http://">Esqueceu a senha?</a>
            </div>
            <div class="modal-footer">
              <p class="mr-auto">Novo Usuário? <a href="#signup" data-toggle="modal" data-dismiss="modal" >Registre-se</a></p>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" >Fechar</button>
            </div>
          </div>
        </div>
      </div>
    <!--Login trigger Model ends-->
    <!--Signup model start-->
    <div class="modal fade" id="signup">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
              <h5 class="modal-title">Registre-se</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="signup_script.php" method="post">
                <div class="form-group">
                     <label for="email">Email:</label>
                     <input type="email" class="form-control"  name="eMail" placeholder="Enter email" required>
                     <?php if(isset($_GET['error'])){ echo "<span class='text-danger'>".$_GET['error']."</span>" ;}  ?>
                </div>
                <div class="form-group">
                    <label for="pwd">Senha:</label>
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validation1">Nome</label>
                        <input type="text" class="form-control" id="validation1" name="firstName" placeholder="First Name" required>
                    </div>
                    <div class="form-group col-md -6">
                        <label for="validation2">Sobrenome</label>
                        <input type="text" class="form-control" id="validation2" name="lastName" placeholder="Last Name">
                    </div>
                </div>
                
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" required>
                    <label for="checkbox" class="form-check-label">Aceita os termos e condições</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="Submit">Registrar</button>
              </form>
            </div>
            <div class="modal-footer">
              <p class="mr-auto">Já está cadastrado?<a href="#login"  data-toggle="modal" data-dismiss="modal">Login</a></p>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" >Fechar</button>
            </div>
          </div>
        </div>
      </div>
      <!--Signup trigger model ends-->