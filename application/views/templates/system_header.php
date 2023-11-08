<header id="page-topbar">
                <div class="navbar-header">
                    <div class="container-fluid">
                        <div class="float-end">

                            <div class="dropdown d-inline-block d-lg-none ms-2">
                                <button type="button" class="btn header-item noti-icon waves-effect"
                                    id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                    aria-labelledby="page-header-search-dropdown">

                                    <form class="p-3">
                                        <div class="m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..."
                                                    aria-label="Recipient's username">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit"><i
                                                            class="mdi mdi-magnify"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="dropdown d-none d-lg-inline-block ms-1">
                                <button type="button" class="btn header-item noti-icon waves-effect"
                                    data-toggle="fullscreen">
                                    <i class="mdi mdi-fullscreen"></i>
                                </button>
                            </div>

                          

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect"
                                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img class="rounded-circle header-profile-user"
                                        src="<?= base_url('assets/images/users.png') ?>" alt="Header Avatar">
                                    <span class="d-none d-xl-inline-block ms-1 text-capitalize"><?= $user->name ?></span>
                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                  
                                    <a class="dropdown-item text-danger" href="<?= base_url('auth/logout') ?>"><i
                                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                                        Logout</a>
                                </div>
                            </div>

                         
                        </div>
                        <div>
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="<?= base_url('assets/images/logo-sm.png') ?>" alt="" height="20">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="<?= base_url('assets/images/logo-dark.png')?>" alt="" height="17">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light ">
                                    <span class="logo-sm">
                                        <img src="<?= base_url('assets/images/logo-sm.png') ?>" alt="" height="20">
                                    </span>
                                    <span class="logo-lg ">
                                        <img src="<?= base_url('assets/images/logo-light.jpeg') ?>" alt="" height="80">
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
