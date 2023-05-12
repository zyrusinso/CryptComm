<header class="main-nav close_icon">
    <nav>
        <?php if(auth()->user()): ?>
            <?php if(auth()->user()->is_adminn == '1'): ?>
            
                <div class="main-navbar">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="mainnav">
                        <ul class="nav-menu custom-scrollbar">
                            <li class="back-btn">
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                            </li>

                            <li class="sidebar-main-title">
                                <div>
                                    <h6><?php echo e(__('app.sidebar.general')); ?></h6>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav <?php echo e(routeActive('index')); ?>" href="<?php echo e(route('index')); ?>"><i data-feather="home"></i><span><?php echo app('translator')->get('app._dashboard'); ?></span></a>
                            </li>
                            <li class="dropdown">
                                <a class="nav-link menu-title <?php echo e(prefixActive('ecommerce')); ?>" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span><?php echo app('translator')->get('app._ecommerce'); ?></span></a>                  
                                <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('ecommerce')); ?>;">
                                    <li><a href="<?php echo e(route('cart.index')); ?>" class="<?php echo e(routeActive('cart.index')); ?>"><?php echo app('translator')->get('app.cart'); ?></a></li>
                                    <li><a href="<?php echo e(route('dashboard.index')); ?>" class="<?php echo e(routeActive('dashboard.index')); ?>">Default</a></li>
                                    <li><a href="<?php echo e(route('dashboard.index')); ?>" class="<?php echo e(routeActive('dashboard.index')); ?>">Ecommerce</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="nav-link menu-title <?php echo e(prefixActive('dashboard.index')); ?>" href="javascript:void(0)"><i data-feather="edit"></i><span>Blogs</span></a>                  
                                <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('dashboard.index')); ?>;">
                                    <li><a href="<?php echo e(route('dashboard.index')); ?>" class="<?php echo e(routeActive('dashboard.index')); ?>">Default</a></li>
                                    <li><a href="<?php echo e(route('dashboard.index')); ?>" class="<?php echo e(routeActive('dashboard.index')); ?>">Ecommerce</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav <?php echo e(routeActive('dashboard.index')); ?>" href="<?php echo e(route('dashboard.index')); ?>"><i data-feather="message-circle"></i><span>Chat</span></a>
                            </li>

                            <li class="dropdown">
                                <a class="nav-link menu-title <?php echo e(prefixActive('dashboard.index')); ?>" href="javascript:void(0)"><i data-feather="clock"></i><span>History</span></a>                  
                                <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('dashboard.index')); ?>;">
                                    <li><a href="<?php echo e(route('dashboard.index')); ?>" class="<?php echo e(routeActive('dashboard.index')); ?>">Order History</a></li>
                                    <li><a href="<?php echo e(route('dashboard.index')); ?>" class="<?php echo e(routeActive('dashboard.index')); ?>">Tickets History</a></li>
                                </ul>
                            </li>

                            <li class="sidebar-main-title">
                                <div>
                                    <h6>Others</h6>
                                </div>
                            </li>

                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav <?php echo e(routeActive('dashboard.index')); ?>" href="<?php echo e(route('dashboard.index')); ?>"><i data-feather="link"></i><span>Privacy Policy</span></a>
                            </li>
                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav <?php echo e(routeActive('my-profile.index')); ?>" href="<?php echo e(route('my-profile.index')); ?>"><i data-feather="user"></i><span>Profile</span></a>
                            </li>

                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav" type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" id="logoutBtn"><i data-feather="log-out"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </div>
            <?php else: ?>
            
                <div class="main-navbar">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="mainnav">
                        <ul class="nav-menu custom-scrollbar">
                            <li class="back-btn">
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                            </li>

                            <li class="sidebar-main-title">
                                <div>
                                    <h6><?php echo e(__('app.sidebar.general')); ?></h6>
                                </div>
                            </li>
                            
                            <li class="dropdown">
                                <a class="nav-link menu-title <?php echo e(prefixActive('ecommerce')); ?>" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span><?php echo app('translator')->get('app._ecommerce'); ?></span></a>                  
                                <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('ecommerce')); ?>;">
                                    <li><a href="<?php echo e(route('product.index')); ?>" class="<?php echo e(routeActive('product.index')); ?>"><?php echo app('translator')->get('app.products'); ?></a></li>
                                    <li><a href="<?php echo e(route('cart.index')); ?>" class="<?php echo e(routeActive('cart.index')); ?>"><?php echo app('translator')->get('app.cart'); ?></a></li>
                                    
                                </ul>
                            </li>
                            

                            

                            

                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav <?php echo e(routeActive('order-history.index')); ?>" href="<?php echo e(route('order-history.index')); ?>"><i data-feather="clock"></i><span><?php echo app('translator')->get('app.sidebar.history'); ?></span></a>
                            </li>

                            <li class="sidebar-main-title">
                                <div>
                                    <h6><?php echo app('translator')->get('app.sidebar.others'); ?></h6>
                                </div>
                            </li>

                            
                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav <?php echo e(routeActive('my-profile.index')); ?>" href="<?php echo e(route('my-profile.index')); ?>"><i data-feather="user"></i><span><?php echo app('translator')->get('app._profile'); ?></span></a>
                            </li>

                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav" type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" id="logoutBtn"><i data-feather="log-out"></i><?php echo app('translator')->get('app.logout'); ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </div>
            <?php endif; ?>
        <?php else: ?>
            
        <?php endif; ?>
    </nav>
</header>
<?php /**PATH G:\xampp\htdocs\Laravel\Cryptcomm\resources\views/layouts/partials/sidebar.blade.php ENDPATH**/ ?>