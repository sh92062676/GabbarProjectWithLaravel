    <!-- Begin page content -->
    <main class="main mainheight">
        <!-- page title bar -->
        <div class="container-fluid">
            <div class="row align-items-center page-title">
                <div class="col-12 col-md mb-2 mb-sm-0">
                    <h5 class="mb-0">My Dashboard</h5>
                    <p class="text-secondary">This is your personal intranet</p>
                </div>
                <div class="col col-sm-auto">
                    <div class="input-group input-group-md">
                        <input type="text" class="form-control bg-none px-0" value="" id="titlecalendar" />
                        <span class="input-group-text text-secondary bg-none" id="titlecalandershow"><i class="bi bi-calendar-event"></i></span>
                    </div>
                </div>
                <div class="col-auto ps-0 position-relative">
                    <div class="dropdown d-inline-block">
                        <a class="btn btn-link btn-square text-secondary dd-arrow-none dropdown-toggle" href="#" role="button" id="filterintitle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <i class="bi bi-filter"></i>
                        </a>
                        <div class="dropdown-menu w-300" aria-labelledby="filterintitle">
                            <div class="dropdown-item">
                                <div class="input-group input-group-md border rounded">
                                    <span class="input-group-text text-theme"><i class="bi bi-box"></i></span>
                                    <select class="form-control" id="titltfilterlist" multiple>
                                        <option value="San Francisco">San Francisco</option>
                                        <option value="New York">New York</option>
                                        <option value="London">London</option>
                                        <option value="Chicago">Chicago</option>
                                        <option value="India" selected>India</option>
                                        <option value="Sydney">Sydney</option>
                                        <option value="Seattle">Seattle</option>
                                        <option value="Los Angeles">Los Angeles</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Los Angeles">Los Angeles</option>
                                        <option value="Chicago">Chicago</option>
                                        <option value="India">India</option>
                                    </select>
                                </div>
                                <div class="invalid-feedback">You have already selected maximum option allowed. (This is Configurable)</div>
                            </div>
                            <div class="dropdown-item">
                                <h6 class="mb-0">Orders:</h6>
                                <p class="text-secondary small">1256 orders last week</p>
                            </div>
                            <ul class="list-group list-group-flush bg-none mb-2">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">Online Orders</div>
                                        <div class="col-auto">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="titleswitch1">
                                                <label class="form-check-label" for="titleswitch1"></label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">Offline Orders</div>
                                        <div class="col-auto">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="titleswitch2" checked="">
                                                <label class="form-check-label" for="titleswitch2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="dropdown-item">
                                <div class="row">
                                    <div class="col"><button class="btn btn-outline-secondary border ddclose">cancel</button></div>
                                    <div class="col-auto">
                                        <button class="btn btn-theme">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="help-center.html" class="btn btn-link btn-square text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Support" id="stylise">
                        <i class="bi bi-life-preserver"></i>
                    </a>
                    <a href="personalization.html" class="btn btn-link btn-square text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Personalize">
                        <i class="bi bi-palette"></i>
                    </a>
                    <a href="app-pricing.html" class="btn btn-link btn-square text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Buy this">
                        <span class="bi bi-basket position-relative">
                            <span class="position-absolute top-0 start-100 p-1 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- welcome bar -->
        <div class="container-fluid bg-gradient-theme-light mb-4">
            <div class="row">
                <div class="col-12 col-xxl-11 mx-auto">
                    <div class="row align-items-center">

                        <!-- welcome message -->
                        <div class="col-12 col-md py-3 py-md-5">
                            <h2 class="fw-light mb-0 text-secondary">Welcome,</h2>
                            <h1 class="display-3 username ">Maxartkiller</h1>

                            <!-- Swiper daily quote -->
                            <div class="swiper dailyquote mt-4">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <i class="bi bi-calendar-event h6 avatar avatar-40 rounded-circle bg-light-theme"></i>
                                            </div>
                                            <div class="col">
                                                <a href="profile.html" class="tag mb-2 me-2">
                                                    <figure class="avatar avatar-30 rounded-circle me-1 coverimg"><img src="assets/img/user-4.jpg" alt=""></figure> James Wang <i class="bi bi-chat-right-dots vm ms-2"></i>
                                                </a>
                                                <a href="profile.html" class="tag mb-2 me-2">
                                                    <figure class="avatar avatar-30 rounded-circle me-1 coverimg"><img src="assets/img/user-2.jpg" alt=""></figure> Millie Tyson <i class="bi bi-chat-right-dots vm ms-2"></i>
                                                </a>
                                                <p class="lead">Your 5 partner and our CEO's <span class="text-gradient">birthday</span> today.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <i class="bi bi-quote h5 avatar avatar-40 rounded-circle bg-light-theme"></i>
                                            </div>
                                            <div class="col">
                                                <h5 class="fw-normal text-gradient">Winners don't do different things, they do things differently</h5>
                                                <p class="fw-light">Shiv Khera <cite title=" Source Title">You Can Win: A Step by Step Tool for Top Achievers</cite>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- rank and progress -->
                        <div class="col-auto ml-auto py-3 py-md-5 align-self-center">
                            <div class="row mb-4">
                                <div class="col col-md col-lg-auto mnw-100 text-center">
                                    <i class="bi bi-trophy h5 avatar avatar-50 bg-light-orange text-orange rounded-circle mb-2"></i>
                                    <h3 class="increamentcount mb-0">2586</h3>
                                    <p class="small text-secondary">Level 3</p>
                                </div>
                                <div class="col col-md col-lg-auto mnw-100 text-center">
                                    <i class="bi bi-award h5 avatar avatar-50 bg-light-green text-green rounded-circle mb-2"></i>
                                    <h3 class="increamentcount mb-0">1583</h3>
                                    <p class="small text-secondary">Your Rank</p>
                                </div>
                                <div class="col col-md col-lg-auto mnw-100 text-center">
                                    <i class="bi bi-clipboard-check h5 avatar avatar-50 bg-light-blue text-blue rounded-circle mb-2"></i>
                                    <h3 class="increamentcount mb-0">1356</h3>
                                    <p class="small text-secondary">Tasks Done</p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <i class="bi bi-star h5 avatar avatar-50 bg-warning text-white rounded-circle"></i>
                                </div>
                                <div class="col ps-0">
                                    <p>Earn 500 points</p>
                                    <div class="progress h-5 mb-1 bg-light-theme">
                                        <div class="progress-bar bg-theme" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-secondary small"><a href="edit-profile.html">Complete your profile</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Tips swiper message -->
                        <div class="col-auto d-none d-xxl-block h-100 py-4">
                            <div class="card border-0 h-100 bg-gradient-yellow-light">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="fw-medium">
                                                <i class="bi bi-lightbulb text-warning me-1"></i>
                                                Tips
                                            </h6>
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-sm btn-outline-warning px-2 py-0" id="starttour" data-bs-toggle="tooltip" data-bs-placement="top" title="Start Tour"><i class="bi bi-play"></i> Tour</button>
                                            <div class="dropdown d-inline-block ms-2">
                                                <a class="text-secondary dd-arrow-none" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" data-bs-display="static" role="button">
                                                    <i class="bi bi-three-dots-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li class="dropstart open-left ">
                                                        <a class="dropdown-item dd-arrow-none dropdown-toggle" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" data-bs-display="static">
                                                            Customize Tips
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-start w-300">
                                                            <div class="dropdown-item">
                                                                <h6 class="mb-0">Tips:</h6>
                                                                <p class="text-secondary">1656 visited this week</p>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="input-group input-group-md border rounded">
                                                                    <span class="input-group-text text-theme"><i class="bi bi-lightbulb"></i></span>
                                                                    <select class="form-control simplechosen" multiple>
                                                                        <option value="San Francisco">San Francisco</option>
                                                                        <option value="New York">New York</option>
                                                                        <option value="London">London</option>
                                                                        <option value="Chicago">Chicago</option>
                                                                        <option value="India" selected>India</option>
                                                                        <option value="Sydney">Sydney</option>
                                                                        <option value="Seattle">Seattle</option>
                                                                        <option value="Los Angeles">Los Angeles</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Los Angeles">Los Angeles</option>
                                                                        <option value="Chicago">Chicago</option>
                                                                        <option value="India">India</option>
                                                                    </select>
                                                                </div>
                                                                <div class="invalid-feedback">You have already selected maximum option allowed. (This is Configurable)</div>
                                                            </div>
                                                            <ul class="list-group list-group-flush bg-none mb-2">
                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col">Includes System</div>
                                                                        <div class="col-auto">
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input" type="checkbox" role="switch" id="tipswitch1">
                                                                                <label class="form-check-label" for="tipswitch1"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col">Apps Shortcuts</div>
                                                                        <div class="col-auto">
                                                                            <div class="form-check form-switch">
                                                                                <input class="form-check-input" type="checkbox" role="switch" id="tipswitch2" checked="">
                                                                                <label class="form-check-label" for="tipswitch2"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="dropdown-item">
                                                                <div class="row">
                                                                    <div class="col"><button class="btn btn-outline-secondary border ddclose">cancel</button></div>
                                                                    <div class="col-auto">
                                                                        <button class="btn btn-theme">Save</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                                    <li><a class="dropdown-item text-danger" href="javascript:void(0)">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <!-- image swiper -->
                                    <div class="swiper image-swiper w-200 h-100 text-center">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <i class="bi bi-chat-right-dots h4 text-success mb-3 d-block"></i>
                                                <h6>Chat Communication</h6>
                                                <p class="small text-secondary">From the top right corner you can have access to chat panel and click on any user chat window interface will be open.</p>
                                            </div>
                                            <div class="swiper-slide">
                                                <i class="bi bi-person h4 text-theme mb-3 d-block"></i>
                                                <h6>Onboarding</h6>
                                                <p class="small text-secondary">User on-boarding comes in the sign up flow. Complete sign up process you will see the on-boarding pages at best UI UX.</p>
                                            </div>
                                            <div class="swiper-slide">
                                                <i class="bi bi-search h4 text-danger mb-3 d-block"></i>
                                                <h6>Search Result</h6>
                                                <p class="small text-secondary">Try to type something in search box at header and big search result box will be appeared right away.</p>
                                            </div>
                                            <div class="swiper-slide">
                                                <i class="bi bi-heart h4 text-danger mb-3 d-block"></i>
                                                <h6 class="text-gradient">Spread love</h6>
                                                <p class="small text-secondary">If you like our template <b class="text-gradient">please share</b> to the beautiful world. World is waiting to get more good things. <i class="text-danger bi bi-heart-fill"></i></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- image swiper ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content -->
        <div class="container">
            <div class="row mb-4 py-2">
                <div class="col text-center">
                    <h4>The sort <span class="text-gradient">summary</span> may help you</h4>
                    <p class="text-secondary">Keep yourself updated, No matter how much workload is.</p>
                </div>
            </div>
            <div class="row">
                <!-- summary blocks -->
                <div class="col-12 col-md-6 col-lg-6 col-xxl-3">
                    <div class="card border-0 mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogressblue"></div>
                                        <div class="avatar h5 bg-light-blue rounded-circle">
                                            <i class="bi bi-calendar2-check"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="text-secondary small mb-1">Task Completed</p>
                                    <h5 class="fw-medium">60<small>%</small></h5>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown d-inline-block">
                                        <a class="text-secondary dd-arrow-none" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static" role="button">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                            <li><a class="dropdown-item text-danger" href="javascript:void(0)">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xxl-3">
                    <div class="card border-0 mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="circle-small">
                                        <div id="circleprogressyellow"></div>
                                        <div class="avatar h5 bg-light-yellow text-yellow rounded-circle">
                                            <i class="bi bi-building"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="text-secondary small mb-1">Construction Invested</p>
                                    <h5 class="fw-medium">12550<small>USD</small></h5>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown d-inline-block">
                                        <a class="text-secondary dd-arrow-none" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static" role="button">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                            <li><a class="dropdown-item text-danger" href="javascript:void(0)">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xxl-3">
                    <div class="card border-0 mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="avatar avatar-50 h5 bg-light-red text-red rounded-circle">
                                        <i class="bi bi-emoji-heart-eyes"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="text-secondary small mb-1">Event Joined</p>
                                    <h5 class="fw-medium">1525<small>k</small></h5>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown d-inline-block">
                                        <a class="text-secondary dd-arrow-none" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static" role="button">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                            <li><a class="dropdown-item text-danger" href="javascript:void(0)">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xxl-3">
                    <div class="card border-0 mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="avatar avatar-50 h5 bg-green text-white rounded-circle">
                                        <i class="bi bi-thermometer-sun"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="text-secondary small mb-1">Temperature</p>
                                    <h5 class="fw-medium">45 <small><sup>0</sup>C, Office R-32</small></h5>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown d-inline-block">
                                        <a class="text-secondary dd-arrow-none" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static" role="button">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="javascript:void(0)">Edit</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0)">Move</a></li>
                                            <li><a class="dropdown-item text-danger" href="javascript:void(0)">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- add column-set class to parent when customize column width dropdown added -->
                <div class="col-12 col-md-6 col-lg-6 col-xxl-3 mb-4 column-set">
                    <!-- finance card -->
                    <div class="card border-0 bg-gradient-theme-light theme-blue">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="fw-medium">
                                        <i class="bi bi-cash h5 me-1 avatar avatar-40 bg-light-theme rounded me-2"></i>
                                        Finance
                                    </h6>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown d-inline-block">
                                        <a class="btn btn-link btn-square text-secondary dd-arrow-none dropdown-toggle" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            <i class="bi bi-columns"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <div class="dropdown-item text-center">
                                                <div class="row gx-3 mb-3">
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-8" data-title="8"><span></span></div>
                                                            <div class="col-4" data-title="4"><span></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-9" data-title="9"><span></span></div>
                                                            <div class="col-3" data-title="3"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gx-3">
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-6" data-title="6"><span></span></div>
                                                            <div class="col-6" data-title="6"><span></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-12" data-title="12"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <div class="swiper-container creditcards">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card border-0 mb-2 theme-blue">
                                            <div class="card-body">
                                                <div class="row align-items-center mb-4">
                                                    <div class="col-auto align-self-center">
                                                        <img src="assets/img/visa.png" alt="">
                                                    </div>
                                                    <div class="col text-end">
                                                        <p class="size-12">
                                                            <span class="text-muted small">City Bank</span><br>
                                                            <span class="">Credit Card</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="fw-medium h6 mb-3">
                                                    000 0000 0001 546598
                                                </p>
                                                <div class="row">
                                                    <div class="col-auto size-12">
                                                        <p class="mb-0 text-muted small">Expiry</p>
                                                        <p>09/023</p>
                                                    </div>
                                                    <div class="col text-end size-12">
                                                        <p class="mb-0 text-muted small">Card Holder</p>
                                                        <p>Maxartkiller</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row amount-data">
                                            <div class="col">
                                                <p class="text-secondary small mb-1">Expense</p>
                                                <p>1500.00 <small class="text-success">18.0% <i class="bi bi-arrow-up"></i></small></p>
                                            </div>
                                            <div class="col-auto text-end">
                                                <p class="text-secondary small mb-1">Limit Remain</p>
                                                <p>13500.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card border-0 theme-pink mb-2">
                                            <div class="card-body">
                                                <div class="row align-items-center mb-4">
                                                    <div class="col-auto align-self-center">
                                                        <img src="assets/img/visa.png" alt="">
                                                    </div>
                                                    <div class="col text-end">
                                                        <p class="size-12">
                                                            <span class="text-muted small">City Bank</span><br>
                                                            <span class="">Credit Card</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="fw-medium h6 mb-3">
                                                    000 0000 0001 546598
                                                </p>
                                                <div class="row">
                                                    <div class="col-auto size-12">
                                                        <p class="mb-0 text-muted small">Expiry</p>
                                                        <p>09/023</p>
                                                    </div>
                                                    <div class="col text-end size-12">
                                                        <p class="mb-0 text-muted small">Card Holder</p>
                                                        <p>Maxartkiller</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row amount-data">
                                            <div class="col">
                                                <p class="text-secondary small mb-1">Expense</p>
                                                <p>3650.00 <small class="text-danger">11.0% <i class="bi bi-arrow-down"></i></small></p>
                                            </div>
                                            <div class="col-auto text-end">
                                                <p class="text-secondary small mb-1">Limit Remain</p>
                                                <p>35500.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card border-0 theme-yellow mb-2">
                                            <div class="card-body">
                                                <div class="row align-items-center mb-4">
                                                    <div class="col-auto align-self-center">
                                                        <img src="assets/img/visa.png" alt="">
                                                    </div>
                                                    <div class="col text-end">
                                                        <p class="size-12">
                                                            <span class="text-muted small">City Bank</span><br>
                                                            <span class="">Credit Card</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="fw-medium h6 mb-3">
                                                    000 0000 0001 546598
                                                </p>
                                                <div class="row">
                                                    <div class="col-auto size-12">
                                                        <p class="mb-0 text-muted small">Expiry</p>
                                                        <p>09/023</p>
                                                    </div>
                                                    <div class="col text-end size-12">
                                                        <p class="mb-0 text-muted small">Card Holder</p>
                                                        <p>Maxartkiller</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row amount-data">
                                            <div class="col">
                                                <p class="text-secondary small mb-1">Expense</p>
                                                <p>1500.00 <small class="text-success">18.0 <i class="bi bi-arrow-up"></i></small></p>
                                            </div>
                                            <div class="col-auto text-end">
                                                <p class="text-secondary small mb-1">Limit Remain</p>
                                                <p>13500.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card border-0 mb-2">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 h5 bg-light-theme text-theme rounded-circle">
                                                <i class="bi bi-receipt"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="text-secondary small mb-1">Billed Amount</p>
                                            <p>1525 <small>USD</small></p>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center text-center">
                            <a href="finance-dashboard.html" class="btn btn-sm btn-link text-theme">Visit Finance Dashboard <i class="bi bi-arrow-right vm"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xxl-3 mb-4 column-set">
                    <!-- Inventory card -->
                    <div class="card border-0 bg-gradient-theme-light theme-yellow h-100">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="fw-medium">
                                        <i class="bi bi-box h5 me-1 avatar avatar-40 bg-light-theme rounded me-2"></i>
                                        Inventory
                                    </h6>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown d-inline-block">
                                        <a class="btn btn-link btn-square text-secondary dd-arrow-none dropdown-toggle" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            <i class="bi bi-columns"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <div class="dropdown-item text-center">
                                                <div class="row gx-3 mb-3">
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-8" data-title="8"><span></span></div>
                                                            <div class="col-4" data-title="4"><span></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-9" data-title="9"><span></span></div>
                                                            <div class="col-3" data-title="3"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gx-3">
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-6" data-title="6"><span></span></div>
                                                            <div class="col-6" data-title="6"><span></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-12" data-title="12"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <div class="rounded bg-theme text-white p-3">
                                        <p class="text-muted small mb-1">
                                            Annual<br />Income
                                        </p>
                                        <p>$124k</p>
                                    </div>
                                </div>
                                <div class="col align-self-center">
                                    <p class="text-secondary small mb-0">United States</p>
                                    <p>45<small>% Sales</small></p>

                                    <div class="mt-3">
                                        <div class="progress h-5 mb-1 bg-light-theme">
                                            <div class="progress-bar bg-theme" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <p class="small text-secondary">Targeted orders <span class="float-end">153k</span></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <div class="rounded bg-light-theme text-dark p-3">
                                        <p class="text-muted small mb-1">
                                            Annual<br />Income
                                        </p>
                                        <p>$124k</p>
                                    </div>
                                </div>
                                <div class="col align-self-center">
                                    <p class="text-secondary small mb-0">United Kingdom</p>
                                    <p>15<small>% Sales</small></p>

                                    <div class="mt-3">
                                        <div class="progress h-5 mb-1 bg-light-yellow">
                                            <div class="progress-bar bg-yellow" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <p class="small text-secondary">Targeted orders <span class="float-end">53k</span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md text-center">
                                    <i class="bi bi-box h5 avatar avatar-30 text-green mb-2"></i>
                                    <h4 class="increamentcount mb-0">1265</h4>
                                    <p class="small text-secondary">In Stock</p>
                                </div>
                                <div class="col col-md text-center">
                                    <i class="bi bi-truck h5 avatar avatar-30 text-theme mb-2"></i>
                                    <h4 class="increamentcount mb-0">365</h4>
                                    <p class="small text-secondary">Delivered</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center text-center">
                            <a href="inventory-dashboard.html" class="btn btn-sm btn-link text-yellow">Visit Inventory Dashboard <i class="bi bi-arrow-right vm"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xxl-3 mb-4 column-set">
                    <!-- Network card -->
                    <div class="card border-0 bg-gradient-theme-light theme-red h-100">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="fw-medium">
                                        <i class="bi bi-hdd-rack h5 me-1 avatar avatar-40 bg-light-theme rounded me-2"></i>
                                        Network
                                    </h6>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown d-inline-block">
                                        <a class="btn btn-link btn-square text-secondary dd-arrow-none dropdown-toggle" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            <i class="bi bi-columns"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <div class="dropdown-item text-center">
                                                <div class="row gx-3 mb-3">
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-8" data-title="8"><span></span></div>
                                                            <div class="col-4" data-title="4"><span></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-9" data-title="9"><span></span></div>
                                                            <div class="col-3" data-title="3"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gx-3">
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-6" data-title="6"><span></span></div>
                                                            <div class="col-6" data-title="6"><span></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-12" data-title="12"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="smallchart mb-2">
                                <canvas id="smallchart2"></canvas>
                            </div>
                            <p class="mb-1">Server CPU <span class="text-secondary">#0514-R3D</span></p>
                            <p class="text-secondary">45% 3.2 MHz</p>
                            <div class="card border-0 mt-3">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="circle-small">
                                                <div id="circleprogressred"></div>
                                                <div class="avatar h5 bg-light-theme text-theme rounded-circle">
                                                    <i class="bi bi-bug"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="text-secondary small mb-1">Ticket Created</p>
                                            <p>651<small> and 250 yesterday</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col">
                                            <p class="text-secondary small mb-1">Resolved</p>
                                            <p class="text-success">432</p>
                                        </div>
                                        <div class="col border-left-dashed">
                                            <p class="text-secondary small mb-1">In Progress</p>
                                            <p class="text-warning">50</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center text-center">
                            <a href="network-dashboard.html" class="btn btn-sm btn-link text-theme">Visit Network Dashboard <i class="bi bi-arrow-right vm"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xxl-3 mb-4 column-set">
                    <!-- Social card -->
                    <div class="card border-0 bg-gradient-theme-light theme-green h-100">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="fw-medium">
                                        <i class="bi bi-people h5 me-1 avatar avatar-40 bg-light-theme rounded me-2"></i>
                                        Social
                                    </h6>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown d-inline-block">
                                        <a class="btn btn-link btn-square text-secondary dd-arrow-none dropdown-toggle" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            <i class="bi bi-columns"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <div class="dropdown-item text-center">
                                                <div class="row gx-3 mb-3">
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-8" data-title="8"><span></span></div>
                                                            <div class="col-4" data-title="4"><span></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-9" data-title="9"><span></span></div>
                                                            <div class="col-3" data-title="3"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gx-3">
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-6" data-title="6"><span></span></div>
                                                            <div class="col-6" data-title="6"><span></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-12" data-title="12"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center mb-3">
                                <div class="col">
                                    <figure class="coverimg rounded w-100 h-80 mb-0">
                                        <img src="assets/img/news-4.jpg" alt="" class="mw-100" />
                                    </figure>
                                </div>
                                <div class="col">
                                    <p class="text-secondary small mb-0">Boosted Post</p>
                                    <h4>2,545,05</h4>
                                    <p class="text-secondary small">People Reached</p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12 mb-2">
                                    <p class="text-secondary small">Buy now or Share now! Do support </p>
                                </div>
                                <div class="col">
                                    <p class="small text-secondary mb-0">Tweet Likes</p>
                                    <p class="mb-0">65.15 k</p>
                                </div>
                                <div class="col">
                                    <p class="small text-secondary mb-0">Retweet</p>
                                    <p class="mb-0">8.2 k</p>
                                </div>
                                <div class="col">
                                    <p class="small text-secondary mb-0">Clicks</p>
                                    <p class="mb-0">52.01 k</p>
                                </div>
                            </div>

                            <div class="card border-0 mt-3 bg-radial-gradiant text-white">
                                <div class="card-body bg-none">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-auto">
                                            <figure class="avatar avatar-50 coverimg rounded">
                                                <img src="assets/img/business-2.jpg" alt="" />
                                            </figure>
                                        </div>
                                        <div class="col">
                                            <p>Learn about software and Framework. All...</p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <p class="mb-0">125</p>
                                            <p class="small">Reached</p>
                                        </div>
                                        <div class="col-auto ps-0">
                                            <p class="mb-0">35</p>
                                            <p class="small">Likes</p>
                                        </div>
                                        <div class="col text-end">
                                            <button class="btn btn-sm btn-light">Boost</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center text-center">
                            <a href="social-dashboard.html" class="btn btn-sm btn-link text-theme">Visit Social Dashboard <i class="bi bi-arrow-right vm"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4 py-2">
                <div class="col text-center">
                    <h4>Important <span class="text-gradient">News</span> around you</h4>
                    <p class="text-secondary">While you are working hard, we let you know important news.</p>
                </div>
            </div>
            <div class="row">
                <!-- news and offers -->
                <div class="col-12 col-lg-12 col-xl-4 col-xxl-4 mb-4 column-set">
                    <div class="card border-0">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <i class="bi bi-newspaper h5 me-1 avatar avatar-40 bg-light-theme rounded me-2"></i>
                                </div>
                                <div class="col ps-0">
                                    <h6 class="fw-medium mb-0">Great news</h6>
                                    <p class="text-secondary small">Change world is a combine effort.</p>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown d-inline-block">
                                        <a class="btn btn-link btn-square text-secondary dd-arrow-none dropdown-toggle" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            <i class="bi bi-columns"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <div class="dropdown-item text-center">
                                                <div class="row gx-3 mb-3">
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-8" data-title="8"><span></span></div>
                                                            <div class="col-4" data-title="4"><span></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-9" data-title="9"><span></span></div>
                                                            <div class="col-3" data-title="3"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gx-3">
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-6" data-title="6"><span></span></div>
                                                            <div class="col-6" data-title="6"><span></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-12" data-title="12"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="coverimg w-100 h-180 position-relative">
                            <div class="position-absolute bottom-0 start-0 w-100 mb-3 px-3 z-index-1">
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-sm btn-outline-light btn-rounded">Share this</button>
                                    </div>
                                    <div class="col-auto">
                                        <div class="dropup d-inline-block">
                                            <a class="btn btn-square btn-sm rounded-circle btn-outline-light dd-arrow-none" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static" role="button">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-hand-thumbs-up me-1 text-green"></i> Recommendation this</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-hand-thumbs-down me-1 text-danger"></i> Don't recommend</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-star text-yellow"></i> Add to favorite</a></li>
                                                <li><a class="dropdown-item text-danger" href="javascript:void(0)">Report this</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/img/bg-20.jpg" class="mw-100" alt="" />
                        </div>
                        <div class="card-body">
                            <h5 class="mb-3">We all are artist in our field. We all are able to find symmetry in our routine</h5>
                            <h6 class="fw-medium mb-2">Make it clutter free and create better world</h6>
                            <p class="text-secondary">We have added useful and wider-range of widgets fully flexible with wrapper container. If you still reading this, you are in love with this design. <a href="blog-4.html">Read more...</a> </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4 mb-4 position-relative theme-blue column-set">
                    <!-- offer block-->
                    <div class="card border-0 position-relative overflow-hidden mb-4">
                        <div class="dropdown d-block position-absolute end-0 top-0 m-2 z-index-5">
                            <a class="btn btn-link btn-square text-white dd-arrow-none dropdown-toggle" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="bi bi-columns"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="dropdown-item text-center">
                                    <div class="row gx-3 mb-3">
                                        <div class="col-6">
                                            <div class="row select-column-size gx-1">
                                                <div class="col-8" data-title="8"><span></span></div>
                                                <div class="col-4" data-title="4"><span></span></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row select-column-size gx-1">
                                                <div class="col-9" data-title="9"><span></span></div>
                                                <div class="col-3" data-title="3"><span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3">
                                        <div class="col-6">
                                            <div class="row select-column-size gx-1">
                                                <div class="col-6" data-title="6"><span></span></div>
                                                <div class="col-6" data-title="6"><span></span></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row select-column-size gx-1">
                                                <div class="col-12" data-title="12"><span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <figure class="coverimg position-absolute w-100 h-100 start-0 top-0 m-0">
                            <img src="assets/img/bg-13.jpg" class="mw-100" alt="" />
                        </figure>
                        <div class="card-body bg-none">
                            <div class="row">
                                <div class="col-7">
                                    <div class="bg-theme text-white text-center p-3 rounded">
                                        <h3>15% OFF</h3>
                                        <p>Holiday Trip</p>
                                        <p class="text-muted small">Price including with our launch offer get 5% Extra</p>
                                        <button class="copy-text btn btn-sm btn-rounded btn-outline-dashed text-white border-white">GOWFAMILY</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 overflow-hidden">
                        <div class="row mx-0">
                            <div class="col-6 pe-0 bg-theme text-white half-circle-vertical text-center py-4 z-index-1">
                                <div class="position-relative">
                                    <h3>15% OFF</h3>
                                    <p>Uberazia Taxi</p>
                                    <p class="text-muted small">Price including with our launch offer get 5% Extra</p>
                                    <button class="copy-text btn btn-sm btn-rounded btn-outline-dashed text-white border-white">GOREELLAUNCH</button>
                                </div>
                            </div>
                            <div class="col-6 position-relative">
                                <figure class="coverimg position-absolute w-100 h-100 start-0 top-0 m-0">
                                    <img src="assets/img/news-3.jpg" class="mw-100" alt="" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6 col-xl-4 col-xxl-4 mb-4 column-set">
                    <!-- photo gallery view -->
                    <div class="card border-0 overflow-hidden theme-purple h-100">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <i class="bi bi-image h5 me-1 avatar avatar-40 bg-light-theme rounded me-2"></i>
                                </div>
                                <div class="col ps-0">
                                    <h6 class="fw-medium mb-0">Photo Gallery</h6>
                                    <p class="text-secondary small">Click image to see preview</p>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown d-inline-block">
                                        <a class="btn btn-link btn-square text-secondary dd-arrow-none dropdown-toggle" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            <i class="bi bi-columns"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <div class="dropdown-item text-center">
                                                <div class="row gx-3 mb-3">
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-8" data-title="8"><span></span></div>
                                                            <div class="col-4" data-title="4"><span></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-9" data-title="9"><span></span></div>
                                                            <div class="col-3" data-title="3"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gx-3">
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-6" data-title="6"><span></span></div>
                                                            <div class="col-6" data-title="6"><span></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row select-column-size gx-1">
                                                            <div class="col-12" data-title="12"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0 gallery mnh-350">
                            <div class="row g-0 h-100">
                                <div class="col-6 h-100 position-relative overflow-hidden">
                                    <a href="assets/img/bg-8.jpg" class="coverimg position-absolute w-100 h-100 start-0 top-0 m-0 zoomout">
                                        <img src="assets/img/bg-8.jpg" class="mw-100" alt="" title="Love unconditional when it comes to your own" />
                                    </a>
                                </div>
                                <div class="col-6 h-100">
                                    <div class="row h-100">
                                        <div class="col-12 h-50 position-relative overflow-hidden">
                                            <a href="assets/img/business-4.jpg" class="coverimg position-absolute w-100 h-100 start-0 top-0 m-0 zoomout">
                                                <img src="assets/img/business-4.jpg" class="mw-100" alt="" title="Your business your strength" />
                                            </a>
                                        </div>
                                        <div class="col-12 h-50 position-relative overflow-hidden">
                                            <a href="assets/img/bg-2.jpg" class="coverimg position-absolute w-100 h-100 start-0 top-0 m-0 zoomout">
                                                <img src="assets/img/bg-2.jpg" class="mw-100" alt="" title="Beautiful background image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="container-fluid footer-page mt-4 py-5">
            <div class="row mb-5">
                <div class="col-12 col-xxl-11 mx-auto">
                    <div class="row">
                        <div class="col-12 col-xxl-4 mb-5 mb-xxl-0">
                            <h2 class="mb-3"><span class="text-gradient">#1 Creative</span> &<br /><span class="text-gradient">Multipurpose</span> HTML Template</h2>
                            <h5 class="mb-4">Clean & Trending UI design with<br />a great user experience</h5>
                            <p class="text-secondary">WinDOORS is creative and multipurpose template. You can use it for CRM, Business application, Intranet Application, Portal service and Many more.
                                It comes with unlimited possibilities and 10+ predefined styles which you can also mix up and create new style. Do support and spread a word for us. </p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xxl-2 ms-xxl-auto mb-5 mb-md-0">
                            <h5 class="mb-3">Main <span class="text-gradient">Dashboards</span></h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link px-0" href="finance-dashboard.html">Finance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0" href="network-dashboard.html">Network</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0" href="inventory-dashboard.html">Inventory</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0" href="social-dashboard.html">Social</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0" href="project-dashboard.html">Project</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0" href="learning-dashboard.html">Learning</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-xxl-2 mb-5 mb-md-0">
                            <h5 class="mb-3">Creative <span class="text-gradient">Pages</span></h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link px-0" href="app-calendar.html">Calendar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0" href="app-email.html">Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0" href="app-explorer.html">Explorer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0" href="app-support.html">We need Support <i class="bi bi-heart-fill text-red"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0" href="app-pricing.html" target="_blank">Buy Now <i class="bi bi-arrow-up-right-square"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-4 col-xxl-3">
                            <a class="navbar-brand d-block mb-3" href="https://getwindoors.com/" target="_blank">
                                <div class="row">
                                    <div class="col-auto"><img src="assets/img/favicon48.png" class="mx-100" alt="" /></div>
                                    <div class="col ps-0 align-self-center d-none d-sm-block">
                                        <h4 class="fw-normal text-dark mb-0">WinDOORS</h4>
                                        <p class="text-secondary">Admin App UI</p>
                                    </div>
                                </div>
                            </a>

                            <p class="mb-2"><b>Main office:</b></p>
                            <p class="mb-1"><a href="https://getwindoors.com/" target="_blank">www.getWinDOORS.com</a></p>
                            <p class="mb-4 text-secondary">Test data 103909 Witamer CR, Niagara Falls, NY 14305, United States</p>

                            <div class="row align-items-center mb-3">
                                <div class="col-auto"><i class="bi bi-clock text-theme"></i></div>
                                <div class="col ps-0">0441-215-518625<br /><span class="text-secondary">Mon - Sat, 9:00 am - 10:00pm</span></div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-auto"><i class="bi bi-telephone text-theme"></i></div>
                                <div class="col ps-0">+1-000 000 100000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xxl-11 mx-auto">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-auto mb-4 mb-md-0">
                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="https://www.facebook.com/maxartkiller/" target="_blank">
                                        <i class="bi bi-facebook h5"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="https://twitter.com/maxartkiller" target="_blank">
                                        <i class="bi bi-twitter h5"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="https://linkedin.com/company/maxartkiller" target="_blank">
                                        <i class="bi bi-linkedin h5"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="https://www.instagram.com/maxartkiller/" target="_blank">
                                        <i class="bi bi-instagram h5"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="https://www.youtube.com/get-windoors/" target="_blank">
                                        <i class="bi bi-youtube h5"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-auto ms-auto">
                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <i class="bi bi-microsoft h4 text-secondary"></i>
                                            </div>
                                            <div class="col ps-0">
                                                <p class="mb-0 small text-secondary">Get this on</p>
                                                <p>Microsoft Store</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <i class="bi bi-play-fill h3 text-secondary"></i>
                                            </div>
                                            <div class="col ps-0">
                                                <p class="mb-0 small text-secondary">Get this on</p>
                                                <p>Google Play</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <i class="bi bi-apple h4 text-secondary"></i>
                                            </div>
                                            <div class="col ps-0">
                                                <p class="mb-0 small text-secondary">Get this on</p>
                                                <p>App Store</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>