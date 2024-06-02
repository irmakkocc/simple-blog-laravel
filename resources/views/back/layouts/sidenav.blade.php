<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link"  href="{{route('admin.dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Panel
                            </a>
                            <div class="sb-sidenav-menu-heading">İçerik Yönetimi</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                                Makaleler
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.makaleler.index')}}">Makaleler</a>
                                    <a class="nav-link" href="{{route('admin.makaleler.create')}}">Makale Oluştur</a>
                                    <a class="nav-link" href="{{route('admin.trashed.article')}}">Silinen Makaleler</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="{{route('admin.category.index')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                Kategoriler
                                
                            </a>
                            
                            <div class="sb-sidenav-menu-heading">Site Ayarları</div>
                            <a class="nav-link" href="{{route('admin.config.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                                Ayarlar
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        
                    </div>
                </nav>
            </div>