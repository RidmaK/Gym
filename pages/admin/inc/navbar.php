<style>
    @media screen and (max-width: 991px) {
  .profile-photo .profile-photo-small {
    margin-left: -2px;
  }

  .button-dropdown {
    display: none;
  }

  #searchModal .modal-dialog {
    margin: 20px;
  }
  #searchModal .modal-dialog .modal-content .input{
    width: 800px;
  }

  #minimizeSidebar {
    display: none;
  }
}

@media screen and (max-width: 768px) {
  .landing-page .section-story-overview .image-container:nth-child(2) {
    margin-left: 0;
    margin-bottom: 30px;
  }
  #searchModal .modal-dialog .modal-content .input{
    width: 600px;
  }
}

@media screen and (max-width: 576px) {
  .page-header .container h6.category-absolute {
    width: 90%;
  }

  .form-horizontal .col-form-label,
  .form-horizontal .label-on-right {
    text-align: inherit;
    padding-top: 0;
  }
  #searchModal .modal-dialog .modal-content .input{
    width: 400px;
  }

  .form-horizontal .col-form-label code,
  .form-horizontal .label-on-right code {
    padding: 0 10px;
  }
}
</style>

<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
           
                <li class="search-bar input-group">
                
                    <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                        <span class="d-lg-none d-md-block">Search</span>
                    </button>
                </li>
                <li class="dropdown nav-item">
                    <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <div class="notification d-none d-lg-block d-xl-block"></div>
                        <i class="tim-icons icon-sound-wave"></i>
                        <p class="d-lg-none">
                            Notifications
                        </p>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                        <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John responded to your email</a></li>
                        <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a></li>
                        <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a></li>
                        <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a></li>
                        <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a></li>
                    </ul>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <div class="photo">
                            <img src="./img/anime3.png" alt="Profile Photo">
                        </div>
                        <b class="caret d-none d-lg-block d-xl-block"></b>
                        <p class="d-lg-none">
                            Log out
                        </p>
                    </a>
                    <ul class="dropdown-menu dropdown-navbar">
                        <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                        <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-link"><a href="../../php/logout.php" class="nav-item dropdown-item">Log out</a></li>
                    </ul>
                </li>
                <li class="separator d-lg-none"></li>
            </ul>
        </div>
    </div>
</nav>