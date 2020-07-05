 
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-dollar-sign"></i>
  </div>
  <div class="sidebar-brand-text mx-2">TrackMoney</div>
</a>
<hr class="sidebar-divider my-0">
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Painel Administrativo</span></a>
</li>

<!--
<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item active">
  <a class="nav-link" href="lista.php">
  <i class="fas fa-list"></i>
    <span>Lista de Pedidos</span></a>
</li>
<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item active">
  <a class="nav-link" href="clientlist.php">
  <i class="fas fa-users"></i>
    <span>Lista de Clientes</span></a>
</li>
<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item active">
  <a class="nav-link" href="devedor.php">
  <i class="fas fa-file-import"></i>
    <span>Clientes Inadimplentes</span></a>
</li>
<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item active">
  <a class="nav-link" href="index.php">
  <i class="fas fa-dollar-sign"></i>
    <span>Recebiveis</span></a>
</li>
-->
<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item active">
  <a class="nav-link" href="crowdfunding.php">
  <i class="fas fa-dollar-sign"></i>
    <span>Investimentos</span></a>
</li>
<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item text-center active">
<button class="rounded-circle border-0" id="sidebarToggle"></button>
</li>
<!--
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
-->
</ul>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!--
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Procurar por..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
          -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Procurar por..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>       
            </li>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Centro de notificações
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">  
               TERRON
                </span>
                <img class="img-profile rounded-circle" src="https://media-exp1.licdn.com/dms/image/C4D03AQGQp9FuqORNIw/profile-displayphoto-shrink_200_200/0?e=1594252800&v=beta&t=2k1y5tcc0UoBpvU3-xhyVN_H7rLeVXK6SFwshKlnXN0">
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configurações
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>
          </ul>
        </nav>
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" para deslogar e retornar a area de login</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary" type="button" data-dismiss="modal">Sair</button>
          <!--<form action="logout.php" method="POST"> 
            <button type="submit" name="logout_btn" class="btn btn-primary">Sair</button>
          </form>
          -->
        </div>
      </div>
    </div>
  </div>