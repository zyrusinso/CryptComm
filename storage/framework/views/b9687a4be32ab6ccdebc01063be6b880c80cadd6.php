<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="<?php echo e(asset('assets/images/dashboard/1.png')); ?>" alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
        <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6></a>
        <p class="mb-0 font-roboto">Human Resources Department</p>
        <ul>
            <li>
                <span><span class="counter">19.8</span>k</span>
                <p>Follow</p>
            </li>
            <li>
                <span>2 year</span>
                <p>Experince</p>
            </li>
            <li>
                <span><span class="counter">95.2</span>k</span>
                <p>Follower</p>
            </li>
        </ul>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>General</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/dashboard')); ?>" href="javascript:void(0)"><i data-feather="home"></i><span>Dashboard</span></a>                  
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/dashboard')); ?>;">
                            <li><a href="<?php echo e(route('index')); ?>" class="<?php echo e(routeActive('index')); ?>">Default</a></li>
                            <li><a href="<?php echo e(route('dashboard-02')); ?>" class="<?php echo e(routeActive('dashboard-02')); ?>">Ecommerce</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/widgets')); ?>" href="javascript:void(0)"><i data-feather="airplay"></i><span>Widgets</span></a>
                        <ul class="nav-submenu menu-content"  style="display: <?php echo e(prefixBlock('/widgets')); ?>;">
                            <li><a href="<?php echo e(route('general-widget')); ?>" class="<?php echo e(routeActive('general-widget')); ?>">General</a></li>
                            <li><a href="<?php echo e(route('chart-widget')); ?>" class="<?php echo e(routeActive('chart-widget')); ?>">Chart</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Components</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/ui-kits')); ?>" href="javascript:void(0)"><i data-feather="box"></i><span>Ui Kits</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/ui-kits')); ?>;">
                            <li><a href="<?php echo e(route('state-color')); ?>" class="<?php echo e(routeActive('state-color')); ?>">State color</a></li>
                            <li><a href="<?php echo e(route('typography')); ?>" class="<?php echo e(routeActive('typography')); ?>">Typography</a></li>
                            <li><a href="<?php echo e(route('avatars')); ?>" class="<?php echo e(routeActive('avatars')); ?>">Avatars</a></li>
                            <li><a href="<?php echo e(route('helper-classes')); ?>" class="<?php echo e(routeActive('helper-classes')); ?>">helper classes</a></li>
                            <li><a href="<?php echo e(route('grid')); ?>" class="<?php echo e(routeActive('grid')); ?>">Grid</a></li>
                            <li><a href="<?php echo e(route('tag-pills')); ?>" class="<?php echo e(routeActive('tag-pills')); ?>">Tag & pills</a></li>
                            <li><a href="<?php echo e(route('progress-bar')); ?>" class="<?php echo e(routeActive('progress-bar')); ?>">Progress</a></li>
                            <li><a href="<?php echo e(route('modal')); ?>" class="<?php echo e(routeActive('modal')); ?>">Modal</a></li>
                            <li><a href="<?php echo e(route('alert')); ?>" class="<?php echo e(routeActive('alert')); ?>">Alert</a></li>
                            <li><a href="<?php echo e(route('popover')); ?>" class="<?php echo e(routeActive('popover')); ?>">Popover</a></li>
                            <li><a href="<?php echo e(route('tooltip')); ?>" class="<?php echo e(routeActive('tooltip')); ?>">Tooltip</a></li>
                            <li><a href="<?php echo e(route('loader')); ?>" class="<?php echo e(routeActive('loader')); ?>">Spinners</a></li>
                            <li><a href="<?php echo e(route('dropdown')); ?>" class="<?php echo e(routeActive('dropdown')); ?>">Dropdown</a></li>
                            <li><a href="<?php echo e(route('according')); ?>" class="<?php echo e(routeActive('according')); ?>">Accordion</a></li>
                            <li>
                                <a class="submenu-title  <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Tabs<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['tab-bootstrap','tab-material']) ? 'block' : 'none'); ?>;">
                                    <li><a href="<?php echo e(route('tab-bootstrap')); ?>" class="<?php echo e(routeActive('tab-bootstrap')); ?>">Bootstrap Tabs</a></li>
                                    <li><a href="<?php echo e(route('tab-material')); ?>" class="<?php echo e(routeActive('tab-material')); ?>">Line Tabs</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo e(route('navs')); ?>" class="<?php echo e(routeActive('navs')); ?>">Navs</a></li>
                            <li><a href="<?php echo e(route('box-shadow')); ?>" class="<?php echo e(routeActive('box-shadow')); ?>">Shadow</a></li>
                            <li><a href="<?php echo e(route('list')); ?>" class="<?php echo e(routeActive('list')); ?>">Lists</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/bonus-ui')); ?>" href="javascript:void(0)"><i data-feather="folder-plus"></i><span>Bonus Ui</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/bonus-ui')); ?>;">
                            <li><a href="<?php echo e(route('scrollable')); ?>" class="<?php echo e(routeActive('scrollable')); ?>">Scrollable</a></li>
                            <li><a href="<?php echo e(route('tree')); ?>" class="<?php echo e(routeActive('tree')); ?>">Tree view</a></li>
                            <li><a href="<?php echo e(route('bootstrap-notify')); ?>" class="<?php echo e(routeActive('bootstrap-notify')); ?>">Bootstrap Notify</a></li>
                            <li><a href="<?php echo e(route('rating')); ?>" class="<?php echo e(routeActive('rating')); ?>">Rating</a></li>
                            <li><a href="<?php echo e(route('dropzone')); ?>" class="<?php echo e(routeActive('dropzone')); ?>">dropzone</a></li>
                            <li><a href="<?php echo e(route('tour')); ?>" class="<?php echo e(routeActive('tour')); ?>">Tour</a></li>
                            <li><a href="<?php echo e(route('sweet-alert2')); ?>" class="<?php echo e(routeActive('sweet-alert2')); ?>">SweetAlert2</a></li>
                            <li><a href="<?php echo e(route('modal-animated')); ?>" class="<?php echo e(routeActive('modal-animated')); ?>">Animated Modal</a></li>
                            <li><a href="<?php echo e(route('owl-carousel')); ?>" class="<?php echo e(routeActive('owl-carousel')); ?>">Owl Carousel</a></li>
                            <li><a href="<?php echo e(route('ribbons')); ?>" class="<?php echo e(routeActive('ribbons')); ?>">Ribbons</a></li>
                            <li><a href="<?php echo e(route('pagination')); ?>" class="<?php echo e(routeActive('pagination')); ?>">Pagination</a></li>
                            <li><a href="<?php echo e(route('steps')); ?>" class="<?php echo e(routeActive('steps')); ?>">Steps</a></li>
                            <li><a href="<?php echo e(route('breadcrumb')); ?>" class="<?php echo e(routeActive('breadcrumb')); ?>">Breadcrumb</a></li>
                            <li><a href="<?php echo e(route('range-slider')); ?>" class="<?php echo e(routeActive('range-slider')); ?>">Range Slider</a></li>
                            <li><a href="<?php echo e(route('image-cropper')); ?>" class="<?php echo e(routeActive('image-cropper')); ?>">Image cropper</a></li>
                            <li><a href="<?php echo e(route('sticky')); ?>" class="<?php echo e(routeActive('sticky')); ?>">Sticky </a></li>
                            <li><a href="<?php echo e(route('basic-card')); ?>" class="<?php echo e(routeActive('basic-card')); ?>">Basic Card</a></li>
                            <li><a href="<?php echo e(route('creative-card')); ?>" class="<?php echo e(routeActive('creative-card')); ?>">Creative Card</a></li>
                            <li><a href="<?php echo e(route('tabbed-card')); ?>" class="<?php echo e(routeActive('tabbed-card')); ?>">Tabbed Card</a></li>
                            <li><a href="<?php echo e(route('dragable-card')); ?>" class="<?php echo e(routeActive('dragable-card')); ?>">Draggable Card</a></li>
                            <li>
                                <a class="submenu-title <?php echo e(in_array(Route::currentRouteName(), ['timeline-v-1','timeline-v-2']) ? 'active' : ''); ?>" href="javascript:void(0)">
                                    Timeline<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: <?php echo e(in_array(Route::currentRouteName(), ['timeline-v-1','timeline-v-2']) ? 'block' : 'none'); ?>;">
                                    <li><a href="<?php echo e(route('timeline-v-1')); ?>" class="<?php echo e(routeActive('timeline-v-1')); ?>">Timeline 1</a></li>
                                    <li><a href="<?php echo e(route('timeline-v-2')); ?>" class="<?php echo e(routeActive('timeline-v-2')); ?>">Timeline 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/builders')); ?>" href="javascript:void(0)"><i data-feather="edit-3"></i><span>Builders</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/builders')); ?>;">
                            <li><a href="<?php echo e(route('form-builder-1')); ?>" class="<?php echo e(routeActive('form-builder-1')); ?>">Form Builder 1</a></li>
                            <li><a href="<?php echo e(route('form-builder-2')); ?>" class="<?php echo e(routeActive('form-builder-2')); ?>">Form Builder 2</a></li>
                            <li><a href="<?php echo e(route('pagebuild')); ?>" class="<?php echo e(routeActive('pagebuild')); ?>">Page Builder</a></li>
                            <li><a href="<?php echo e(route('button-builder')); ?>" class="<?php echo e(routeActive('button-builder')); ?>">Button Builder</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/animation')); ?>" href="javascript:void(0)"><i data-feather="cloud-drizzle"></i><span>Animation</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/animation')); ?>;">
                            <li><a href="<?php echo e(route('animate')); ?>" class="<?php echo e(routeActive('animate')); ?>">Animate</a></li>
                            <li><a href="<?php echo e(route('scroll-reval')); ?>" class="<?php echo e(routeActive('scroll-reval')); ?>">Scroll Reveal</a></li>
                            <li><a href="<?php echo e(route('aos')); ?>" class="<?php echo e(routeActive('aos')); ?>">AOS animation</a></li>
                            <li><a href="<?php echo e(route('tilt')); ?>" class="<?php echo e(routeActive('tilt')); ?>">Tilt Animation</a></li>
                            <li><a href="<?php echo e(route('wow')); ?>" class="<?php echo e(routeActive('wow')); ?>">Wow Animation</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/icons')); ?>" href="javascript:void(0)"><i data-feather="command"></i><span>Icons</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/icons')); ?>;">
                            <li><a href="<?php echo e(route('flag-icon')); ?>" class="<?php echo e(routeActive('flag-icon')); ?>">Flag icon</a></li>
                            <li><a href="<?php echo e(route('font-awesome')); ?>" class="<?php echo e(routeActive('font-awesome')); ?>">Fontawesome Icon</a></li>
                            <li><a href="<?php echo e(route('ico-icon')); ?>" class="<?php echo e(routeActive('ico-icon')); ?>">Ico Icon</a></li>
                            <li><a href="<?php echo e(route('themify-icon')); ?>" class="<?php echo e(routeActive('themify-icon')); ?>">Thimify Icon</a></li>
                            <li><a href="<?php echo e(route('feather-icon')); ?>" class="<?php echo e(routeActive('feather-icon')); ?>">Feather icon</a></li>
                            <li><a href="<?php echo e(route('whether-icon')); ?>" class="<?php echo e(routeActive('whether-icon')); ?>">Whether Icon </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/buttons')); ?>" href="javascript:void(0)"><i data-feather="cloud"></i><span>Buttons</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/buttons')); ?>;">
                            <li><a href="<?php echo e(route('buttons')); ?>" class="<?php echo e(routeActive('buttons')); ?>">Default Style</a></li>
                            <li><a href="<?php echo e(route('buttons-flat')); ?>" class="<?php echo e(routeActive('buttons-flat')); ?>">Flat Style</a></li>
                            <li><a href="<?php echo e(route('buttons-edge')); ?>" class="<?php echo e(routeActive('buttons-edge')); ?>">Edge Style</a></li>
                            <li><a href="<?php echo e(route('raised-button')); ?>" class="<?php echo e(routeActive('raised-button')); ?>">Raised Style</a></li>
                            <li><a href="<?php echo e(route('button-group')); ?>" class="<?php echo e(routeActive('button-group')); ?>">Button Group</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/charts')); ?>" href="javascript:void(0)"><i data-feather="bar-chart"></i><span>Charts</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/charts')); ?>;">
                            <li><a href="<?php echo e(route('chart-apex')); ?>" class="<?php echo e(routeActive('chart-apex')); ?>">Apex Chart</a></li>
                            <li><a href="<?php echo e(route('chart-google')); ?>" class="<?php echo e(routeActive('chart-google')); ?>">Google Chart</a></li>
                            <li><a href="<?php echo e(route('chart-sparkline')); ?>" class="<?php echo e(routeActive('chart-sparkline')); ?>">Sparkline chart</a></li>
                            <li><a href="<?php echo e(route('chart-flot')); ?>" class="<?php echo e(routeActive('chart-flot')); ?>">Flot Chart</a></li>
                            <li><a href="<?php echo e(route('chart-knob')); ?>" class="<?php echo e(routeActive('chart-knob')); ?>">Knob Chart</a></li>
                            <li><a href="<?php echo e(route('chart-morris')); ?>" class="<?php echo e(routeActive('chart-morris')); ?>">Morris Chart</a></li>
                            <li><a href="<?php echo e(route('chartjs')); ?>" class="<?php echo e(routeActive('chartjs')); ?>">Chatjs Chart</a></li>
                            <li><a href="<?php echo e(route('chartist')); ?>" class="<?php echo e(routeActive('chartist')); ?>">Chartist Chart</a></li>
                            <li><a href="<?php echo e(route('chart-peity')); ?>" class="<?php echo e(routeActive('chart-peity')); ?>">Peity Chart</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Forms</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/form-controls')); ?>" href="javascript:void(0)"><i data-feather="sliders"></i><span>Form Controls </span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/form-controls')); ?>;">
                            <li><a href="<?php echo e(route('form-validation')); ?>" class="<?php echo e(routeActive('form-validation')); ?>">Form Validation</a></li>
                            <li><a href="<?php echo e(route('base-input')); ?>" class="<?php echo e(routeActive('base-input')); ?>">Base Inputs</a></li>
                            <li><a href="<?php echo e(route('radio-checkbox-control')); ?>" class="<?php echo e(routeActive('radio-checkbox-control')); ?>">Checkbox & Radio</a></li>
                            <li><a href="<?php echo e(route('input-group')); ?>" class="<?php echo e(routeActive('input-group')); ?>">Input Groups</a></li>
                            <li><a href="<?php echo e(route('megaoptions')); ?>" class="<?php echo e(routeActive('megaoptions')); ?>">Mega Options </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/form-widgets')); ?>" href="javascript:void(0)"><i data-feather="package"></i><span>Form Widgets</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/form-widgets')); ?>;">
                            <li><a href="<?php echo e(route('datepicker')); ?>" class="<?php echo e(routeActive('datepicker')); ?>">Datepicker</a></li>
                            <li><a href="<?php echo e(route('time-picker')); ?>" class="<?php echo e(routeActive('time-picker')); ?>">Timepicker</a></li>
                            <li><a href="<?php echo e(route('datetimepicker')); ?>" class="<?php echo e(routeActive('datetimepicker')); ?>">Datetimepicker</a></li>
                            <li><a href="<?php echo e(route('daterangepicker')); ?>" class="<?php echo e(routeActive('daterangepicker')); ?>">Daterangepicker</a></li>
                            <li><a href="<?php echo e(route('touchspin')); ?>" class="<?php echo e(routeActive('touchspin')); ?>">Touchspin</a></li>
                            <li><a href="<?php echo e(route('select2')); ?>" class="<?php echo e(routeActive('select2')); ?>">Select2</a></li>
                            <li><a href="<?php echo e(route('switch')); ?>" class="<?php echo e(routeActive('switch')); ?>">Switch</a></li>
                            <li><a href="<?php echo e(route('typeahead')); ?>" class="<?php echo e(routeActive('typeahead')); ?>">Typeahead</a></li>
                            <li><a href="<?php echo e(route('clipboard')); ?>" class="<?php echo e(routeActive('clipboard')); ?>">Clipboard </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/form-layout')); ?>" href="javascript:void(0)"><i data-feather="layout"></i><span>Form layout</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/form-layout')); ?>;">
                            <li><a href="<?php echo e(route('default-form')); ?>" class="<?php echo e(routeActive('default-form')); ?>">Default Forms</a></li>
                            <li><a href="<?php echo e(route('form-wizard')); ?>" class="<?php echo e(routeActive('form-wizard')); ?>">Form Wizard 1</a></li>
                            <li><a href="<?php echo e(route('form-wizard-two')); ?>" class="<?php echo e(routeActive('form-wizard-two')); ?>">Form Wizard 2</a></li>
                            <li><a href="<?php echo e(route('form-wizard-three')); ?>" class="<?php echo e(routeActive('form-wizard-three')); ?>">Form Wizard 3</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Table</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/bootstrap-tables')); ?>" href="javascript:void(0)"><i data-feather="server"></i><span>Bootstrap Tables </span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/bootstrap-tables')); ?>;">
                            <li><a href="<?php echo e(route('bootstrap-basic-table')); ?>" class="<?php echo e(routeActive('bootstrap-basic-table')); ?>">Basic Tables</a></li>
                            <li><a href="<?php echo e(route('bootstrap-sizing-table')); ?>" class="<?php echo e(routeActive('bootstrap-sizing-table')); ?>">Sizing Tables</a></li>
                            <li><a href="<?php echo e(route('bootstrap-border-table')); ?>" class="<?php echo e(routeActive('bootstrap-border-table')); ?>">Border Tables</a></li>
                            <li><a href="<?php echo e(route('bootstrap-styling-table')); ?>" class="<?php echo e(routeActive('bootstrap-styling-table')); ?>">Styling Tables</a></li>
                            <li><a href="<?php echo e(route('table-components')); ?>" class="<?php echo e(routeActive('table-components')); ?>">Table components</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/data-tables')); ?>" href="javascript:void(0)"><i data-feather="database"></i><span>Data Tables </span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/data-tables')); ?>;">
                            <li><a href="<?php echo e(route('datatable-basic-init')); ?>" class="<?php echo e(routeActive('datatable-basic-init')); ?>">Basic Init</a></li>
                            <li><a href="<?php echo e(route('datatable-advance')); ?>" class="<?php echo e(routeActive('datatable-advance')); ?>">Advance Init</a></li>
                            <li><a href="<?php echo e(route('datatable-styling')); ?>" class="<?php echo e(routeActive('datatable-styling')); ?>">Styling</a></li>
                            <li><a href="<?php echo e(route('datatable-AJAX')); ?>" class="<?php echo e(routeActive('datatable-AJAX')); ?>">AJAX</a></li>
                            <li><a href="<?php echo e(route('datatable-server-side')); ?>" class="<?php echo e(routeActive('datatable-server-side')); ?>">Server Side</a></li>
                            <li><a href="<?php echo e(route('datatable-plugin')); ?>" class="<?php echo e(routeActive('datatable-plugin')); ?>">Plug-in</a></li>
                            <li><a href="<?php echo e(route('datatable-API')); ?>" class="<?php echo e(routeActive('datatable-API')); ?>">API</a></li>
                            <li><a href="<?php echo e(route('datatable-data-source')); ?>" class="<?php echo e(routeActive('datatable-data-source')); ?>">Data Sources</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/ex-data-tables')); ?>" href="javascript:void(0)"><i data-feather="hard-drive"></i><span>Ex. Data Tables </span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/ex-data-tables')); ?>;">
                            <li><a href="<?php echo e(route('datatable-ext-autofill')); ?>" class="<?php echo e(routeActive('datatable-ext-autofill')); ?>">Auto Fill</a></li>
                            <li><a href="<?php echo e(route('datatable-ext-basic-button')); ?>" class="<?php echo e(routeActive('datatable-ext-basic-button')); ?>">Basic Button</a></li>
                            <li><a href="<?php echo e(route('datatable-ext-col-reorder')); ?>" class="<?php echo e(routeActive('datatable-ext-col-reorder')); ?>">Column Reorder</a></li>
                            <li><a href="<?php echo e(route('datatable-ext-fixed-header')); ?>" class="<?php echo e(routeActive('datatable-ext-fixed-header')); ?>">Fixed Header</a></li>
                            <li><a href="<?php echo e(route('datatable-ext-key-table')); ?>" class="<?php echo e(routeActive('datatable-ext-key-table')); ?>">Key Table</a></li>
                            <li><a href="<?php echo e(route('datatable-ext-responsive')); ?>" class="<?php echo e(routeActive('datatable-ext-responsive')); ?>">Responsive</a></li>
                            <li><a href="<?php echo e(route('datatable-ext-row-reorder')); ?>" class="<?php echo e(routeActive('datatable-ext-row-reorder')); ?>">Row Reorder</a></li>
                            <li><a href="<?php echo e(route('datatable-ext-scroller')); ?>" class="<?php echo e(routeActive('datatable-ext-scroller')); ?>">Scroller </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('jsgrid-table')); ?>" href="<?php echo e(route('jsgrid-table')); ?>"><i data-feather="file-text"></i><span>Js Grid Table</span></a>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Applications</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/project')); ?>" href="javascript:void(0)"><i data-feather="box"></i><span>Project </span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/project')); ?>;">
                            <li><a href="<?php echo e(route('projects')); ?>" class="<?php echo e(routeActive('projects')); ?>">Project List</a></li>
                            <li><a href="<?php echo e(route('projectcreate')); ?>" class="<?php echo e(routeActive('projectcreate')); ?>">Create new </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('file-manager')); ?>" href="<?php echo e(route('file-manager')); ?>"><i data-feather="git-pull-request"></i><span>File manager</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('kanban')); ?>" href="<?php echo e(route('kanban')); ?>"><i data-feather="monitor"></i><span>Kanban Board</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/ecommerce')); ?>" href="javascript:void(0)"><i data-feather="shopping-bag"></i><span>Ecommerce</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/ecommerce')); ?>;">
                            <li><a href="<?php echo e(route('product')); ?>" class="<?php echo e(routeActive('product')); ?>">Product</a></li>
                            <li><a href="<?php echo e(route('product-page')); ?>" class="<?php echo e(routeActive('product-page')); ?>">Product page</a></li>
                            <li><a href="<?php echo e(route('list-products')); ?>" class="<?php echo e(routeActive('list-products')); ?>">Product list</a></li>
                            <li><a href="<?php echo e(route('payment-details')); ?>" class="<?php echo e(routeActive('payment-details')); ?>">Payment Details</a></li>
                            <li><a href="<?php echo e(route('order-history')); ?>" class="<?php echo e(routeActive('order-history')); ?>">Order History</a></li>
                            <li><a href="<?php echo e(route('invoice-template')); ?>" class="<?php echo e(routeActive('invoice-template')); ?>">Invoice</a></li>
                            <li><a href="<?php echo e(route('cart')); ?>" class="<?php echo e(routeActive('cart')); ?>">Cart</a></li>
                            <li><a href="<?php echo e(route('list-wish')); ?>" class="<?php echo e(routeActive('list-wish')); ?>">Wishlist</a></li>
                            <li><a href="<?php echo e(route('checkout')); ?>" class="<?php echo e(routeActive('checkout')); ?>">Checkout</a></li>
                            <li><a href="<?php echo e(route('pricing')); ?>" class="<?php echo e(routeActive('pricing')); ?>">Pricing</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/email')); ?>" href="javascript:void(0)"><i data-feather="mail"></i><span>Email</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/email')); ?>;">
                            <li><a href="<?php echo e(route('email_inbox')); ?>" class="<?php echo e(routeActive('email_inbox')); ?>">Mail Inbox</a></li>
                            <li><a href="<?php echo e(route('email_read')); ?>" class="<?php echo e(routeActive('email_read')); ?>">Read mail</a></li>
                            <li><a href="<?php echo e(route('email_compose')); ?>" class="<?php echo e(routeActive('email_compose')); ?>">Compose</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/chat')); ?>" href="javascript:void(0)"><i data-feather="message-circle"></i><span>Chat</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/chat')); ?>;">
                            <li><a href="<?php echo e(route('chat')); ?>" class="<?php echo e(routeActive('chat')); ?>">Chat App</a></li>
                            <li><a href="<?php echo e(route('chat-video')); ?>" class="<?php echo e(routeActive('chat-video')); ?>">Video chat</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/users')); ?>" href="javascript:void(0)"><i data-feather="users"></i><span>Users</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/users')); ?>;">
                            <li><a href="<?php echo e(route('user-profile')); ?>" class="<?php echo e(routeActive('user-profile')); ?>">Users Profile</a></li>
                            <li><a href="<?php echo e(route('edit-profile')); ?>" class="<?php echo e(routeActive('edit-profile')); ?>">Users Edit</a></li>
                            <li><a href="<?php echo e(route('user-cards')); ?>" class="<?php echo e(routeActive('user-cards')); ?>">Users Cards</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('bookmark')); ?>" href="<?php echo e(route('bookmark')); ?>"><i data-feather="heart"></i><span>Bookmarks</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('contacts')); ?>" href="<?php echo e(route('contacts')); ?>"><i data-feather="list"></i><span>Contacts</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('task')); ?>" href="<?php echo e(route('task')); ?>"><i data-feather="check-square"></i><span>Tasks</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('calendar-basic')); ?>" href="<?php echo e(route('calendar-basic')); ?>"><i data-feather="calendar"></i><span>Calender </span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('social-app')); ?>" href="<?php echo e(route('social-app')); ?>"><i data-feather="zap"></i><span>Social App</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('to-do')); ?>" href="<?php echo e(route('to-do')); ?>"><i data-feather="clock"></i><span>To-Do</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('search')); ?>" href="<?php echo e(route('search')); ?>"><i data-feather="search"></i><span>Search Result</span></a>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Pages</h6>
                        </div>
                    </li>
                    <li>
                        
                    </li>
                    <li>
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('sample-page')); ?>" href="<?php echo e(route('sample-page')); ?>"><i data-feather="file"></i><span>Sample page</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('internationalization')); ?>" href="<?php echo e(route('internationalization')); ?>"><i data-feather="aperture"></i><span>Internationalization</span></a>
                    </li>
                    <li class="mega-menu">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/')); ?>" href="javascript:void(0)"><i data-feather="layers"></i><span>Others</span></a>
                        <div class="mega-menu-container menu-content" style="display: <?php echo e(prefixBlock('/')); ?>;">
                            <div class="container">
                                <div class="row">
                                    <div class="col mega-box">
                                        <div class="link-section">
                                            <div class="submenu-title">
                                                <h5>Error Page</h5>
                                            </div>
                                            <div class="submenu-content opensubmegamenu">
                                                <ul>
                                                    <li><a href="<?php echo e(route('error-page1')); ?>" class="<?php echo e(routeActive('error-page1')); ?>" target="_blank">Error page 1</a></li>
                                                    <li><a href="<?php echo e(route('error-page2')); ?>" class="<?php echo e(routeActive('error-page2')); ?>" target="_blank">Error page 2</a></li>
                                                    <li><a href="<?php echo e(route('error-page3')); ?>" class="<?php echo e(routeActive('error-page3')); ?>" target="_blank">Error page 3</a></li>
                                                    <li><a href="<?php echo e(route('error-page4')); ?>" class="<?php echo e(routeActive('error-page4')); ?>" target="_blank">Error page 4 </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mega-box">
                                        <div class="link-section">
                                            <div class="submenu-title">
                                                <h5>Authentication</h5>
                                            </div>
                                            <div class="submenu-content opensubmegamenu">
                                                <ul>
                                                    <li><a href="<?php echo e(route('login')); ?>" class="<?php echo e(routeActive('login')); ?>" target="_blank">Login Simple</a></li>
                                                    <li><a href="<?php echo e(route('login_one')); ?>" class="<?php echo e(routeActive('login_one')); ?>" target="_blank">Login with bg image</a></li>
                                                    <li><a href="<?php echo e(route('login_two')); ?>" class="<?php echo e(routeActive('login_two')); ?>" target="_blank">Login with image two </a></li>
                                                    <li><a href="<?php echo e(route('login-bs-validation')); ?>" class="<?php echo e(routeActive('login-bs-validation')); ?>" target="_blank">Login With validation</a></li>
                                                    <li><a href="<?php echo e(route('login-bs-tt-validation')); ?>" class="<?php echo e(routeActive('login-bs-tt-validation')); ?>" target="_blank">Login with tooltip</a></li>
                                                    <li><a href="<?php echo e(route('login-sa-validation')); ?>" class="<?php echo e(routeActive('login-sa-validation')); ?>" target="_blank">Login with sweetalert</a></li>
                                                    <li><a href="<?php echo e(route('sign-up')); ?>" class="<?php echo e(routeActive('sign-up')); ?>" target="_blank">Register Simple</a></li>
                                                    <li><a href="<?php echo e(route('sign-up-one')); ?>" class="<?php echo e(routeActive('sign-up-one')); ?>" target="_blank">Register with Bg Image </a></li>
                                                    <li><a href="<?php echo e(route('sign-up-two')); ?>" class="<?php echo e(routeActive('sign-up-two')); ?>" target="_blank">Register with Bg video </a></li>
                                                    <li><a href="<?php echo e(route('unlock')); ?>" class="<?php echo e(routeActive('unlock')); ?>">Unlock User</a></li>
                                                    <li><a href="<?php echo e(route('forget-password')); ?>" class="<?php echo e(routeActive('forget-password')); ?>">Forget Password</a></li>
                                                    <li><a href="<?php echo e(route('creat-password')); ?>" class="<?php echo e(routeActive('creat-password')); ?>">Creat Password</a></li>
                                                    <li><a href="<?php echo e(route('maintenance')); ?>" class="<?php echo e(routeActive('maintenance')); ?>">Maintenance</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mega-box">
                                        <div class="link-section">
                                            <div class="submenu-title">
                                                <h5>Coming Soon</h5>
                                            </div>
                                            <div class="submenu-content opensubmegamenu">
                                                <ul>
                                                    <li><a href="<?php echo e(route('comingsoon')); ?>" class="<?php echo e(routeActive('')); ?>">Coming Simple</a></li>
                                                    <li><a href="<?php echo e(route('comingsoon-bg-video')); ?>" class="<?php echo e(routeActive('')); ?>">Coming with Bg video</a></li>
                                                    <li><a href="<?php echo e(route('comingsoon-bg-img')); ?>" class="<?php echo e(routeActive('')); ?>">Coming with Bg Image</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mega-box">
                                        <div class="link-section">
                                            <div class="submenu-title">
                                                <h5>Email templates</h5>
                                            </div>
                                            <div class="submenu-content opensubmegamenu">
                                                <ul>
                                                    <li><a href="<?php echo e(route('basic-template')); ?>" class="<?php echo e(routeActive('basic-template')); ?>">Basic Email</a></li>
                                                    <li><a href="<?php echo e(route('email-header')); ?>" class="<?php echo e(routeActive('email-header')); ?>">Basic With Header</a></li>
                                                    <li><a href="<?php echo e(route('template-email')); ?>" class="<?php echo e(routeActive('template-email')); ?>">Ecomerce Template</a></li>
                                                    <li><a href="<?php echo e(route('template-email-2')); ?>" class="<?php echo e(routeActive('template-email-2')); ?>">Email Template 2</a></li>
                                                    <li><a href="<?php echo e(route('ecommerce-templates')); ?>" class="<?php echo e(routeActive('ecommerce-templates')); ?>">Ecommerce Email</a></li>
                                                    <li><a href="<?php echo e(route('email-order-success')); ?>" class="<?php echo e(routeActive('email-order-success')); ?>">Order Success </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Miscellaneous</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/gallery')); ?>" href="javascript:void(0)"><i data-feather="image"></i><span>Gallery</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/gallery')); ?>;">
                            <li><a href="<?php echo e(route('gallery')); ?>" class="<?php echo e(routeActive('gallery')); ?>">Gallery Grid</a></li>
                            <li><a href="<?php echo e(route('gallery-with-description')); ?>" class="<?php echo e(routeActive('gallery-with-description')); ?>">Gallery Grid Desc</a></li>
                            <li><a href="<?php echo e(route('gallery-masonry')); ?>" class="<?php echo e(routeActive('gallery-masonry')); ?>">Masonry Gallery</a></li>
                            <li><a href="<?php echo e(route('masonry-gallery-with-disc')); ?>" class="<?php echo e(routeActive('masonry-gallery-with-disc')); ?>">Masonry with Desc</a></li>
                            <li><a href="<?php echo e(route('gallery-hover')); ?>" class="<?php echo e(routeActive('gallery-hover')); ?>">Hover Effects</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/blog')); ?>" href="javascript:void(0)"><i data-feather="edit"></i><span>Blog</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/blog')); ?>;">
                            <li><a href="<?php echo e(route('blog')); ?>" class="<?php echo e(routeActive('blog')); ?>">Blog Details</a></li>
                            <li><a href="<?php echo e(route('blog-single')); ?>" class="<?php echo e(routeActive('blog-single')); ?>">Blog Single</a></li>
                            <li><a href="<?php echo e(route('add-post')); ?>" class="<?php echo e(routeActive('add-post')); ?>">Add Post</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('faq')); ?>" href="<?php echo e(route('faq')); ?>"><i data-feather="help-circle"></i><span>FAQ</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/job-search')); ?>" href="javascript:void(0)"><i data-feather="user-check"></i><span>Job Search</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/job-search')); ?>;">
                            <li><a href="<?php echo e(route('job-cards-view')); ?>" class="<?php echo e(routeActive('job-cards-view')); ?>">Cards view</a></li>
                            <li><a href="<?php echo e(route('job-list-view')); ?>" class="<?php echo e(routeActive('job-list-view')); ?>">List View</a></li>
                            <li><a href="<?php echo e(route('job-details')); ?>" class="<?php echo e(routeActive('job-details')); ?>">Job Details</a></li>
                            <li><a href="<?php echo e(route('job-apply')); ?>" class="<?php echo e(routeActive('job-apply')); ?>">Apply</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/learning')); ?>" href="javascript:void(0)"><i data-feather="layers"></i><span>Learning</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/learning')); ?>;">
                            <li><a href="<?php echo e(route('learning-list-view')); ?>" class="<?php echo e(routeActive('learning-list-view')); ?>">Learning List</a></li>
                            <li><a href="<?php echo e(route('learning-detailed')); ?>" class="<?php echo e(routeActive('learning-detailed')); ?>">Detailed Course</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/maps')); ?>" href="javascript:void(0)"><i data-feather="map"></i><span>Maps</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/maps')); ?>;">
                            <li><a href="<?php echo e(route('map-js')); ?>" class="<?php echo e(routeActive('map-js')); ?>">Maps JS</a></li>
                            <li><a href="<?php echo e(route('vector-map')); ?>" class="<?php echo e(routeActive('vector-map')); ?>">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('/editors')); ?>" href="javascript:void(0)"><i data-feather="git-pull-request"></i><span>Editors</span></a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('/editors')); ?>;">
                            <li><a href="<?php echo e(route('summernote')); ?>" class="<?php echo e(routeActive('summernote')); ?>">Summer Note</a></li>
                            <li><a href="<?php echo e(route('ckeditor')); ?>" class="<?php echo e(routeActive('ckeditor')); ?>">CK editor</a></li>
                            <li><a href="<?php echo e(route('simple-MDE')); ?>" class="<?php echo e(routeActive('simple-MDE')); ?>">MDE editor</a></li>
                            <li><a href="<?php echo e(route('ace-code-editor')); ?>" class="<?php echo e(routeActive('ace-code-editor')); ?>">ACE code editor</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link menu-title link-nav <?php echo e(routeActive('knowledgebase')); ?>" href="<?php echo e(route('knowledgebase')); ?>"><i data-feather="database"></i><span>Knowledgebase</span></a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/layouts/admin/partials/sidebar.blade.php ENDPATH**/ ?>