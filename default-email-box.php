<?php
@session_start();
require('global.php');

connected_only();

include('templates/meta.php');
?>
<body class="color-theme-blue mont-font">

    <div class="preloader"></div>

    
    <div class="main-wrapper">

       <!-- navigation top-->
       <?php include('templates/header.php'); ?>
        <!-- navigation top -->

        <!-- navigation left -->

         <?php include('templates/menu.php'); ?>
        <!-- main content -->
        <div class="main-content right-chat-active">
            
            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left pe-0 ps-lg-3 ms-0 me-0" style="max-width: 100%;">
                    <div class="row">
                           
                       
                        <div class="col-lg-12">
                            <div class="chat-wrapper p-3 w-100 position-relative scroll-bar bg-white theme-dark-bg">
                                <ul class="email-message">
                                    <li>
                                        <a href="default-email-open.php" class="rounded-3 bg-lightblue theme-light-bg">
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox" id="blankCheckbox1" value="option1" aria-label="">
                                                <label class="text-grey-500 font-xssss" for="blankCheckbox1"></label>
                                            </div>
                                            <div class="email-user">
                                                <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                                <img src="https://via.placeholder.com/50x50.png" alt="user" class="w35 me-2">  
                                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Hurin Seary</h6>
                                            </div>
                                            <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                                <i class="feather-star font-xss text-warning me-2"></i>
                                                Mobile Apps Redesign
                                            </div>
                                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                                Hey Cak, Could you free now? Can you look and read the brief first before...
                                            </div>
                                            <span class="email-file">
                                                <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                            </span>
                                            <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="default-email-open.php" class="rounded-3 bg-transparent">
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox" id="blankCheckbox2" value="option1" aria-label="">
                                                <label class="text-grey-500 font-xssss" for="blankCheckbox2"></label>
                                            </div>
                                            <div class="email-user">
                                                <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                                <img src="https://via.placeholder.com/50x50.png" alt="user" class="w35 me-2">  
                                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Victor Exrixon</h6>
                                            </div>
                                            <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                                <i class="feather-star font-xss text-warning me-2"></i>
                                                Mobile Apps Redesign
                                            </div>
                                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                                Hey Cak, Could you free now? Can you look and read the brief first before...
                                            </div>
                                            <span class="email-file">
                                                <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                            </span>
                                            <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="default-email-open.php" class="rounded-3 bg-transparent">
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox" id="blankCheckbox3" value="option1" aria-label="">
                                                <label class="text-grey-500 font-xssss" for="blankCheckbox3"></label>
                                            </div>
                                            <div class="email-user">
                                                <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                                <img src="https://via.placeholder.com/50x50.png" alt="user" class="w35 me-2">  
                                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Surfiya Zakir</h6>
                                            </div>
                                            <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                                <i class="feather-star font-xss text-warning me-2"></i>
                                                Mobile Apps Redesign
                                            </div>
                                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                                Hey Cak, Could you free now? Can you look and read the brief first before...
                                            </div>
                                            <span class="email-file">
                                                <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                            </span>
                                            <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="default-email-open.php" class="rounded-3 bg-transparent">
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox" id="blankCheckbox4" value="option1" aria-label="">
                                                <label class="text-grey-500 font-xssss" for="blankCheckbox4"></label>
                                            </div>
                                            <div class="email-user">
                                                <span class="btn-round-xss ms-0 bg-dark me-2"></span>
                                                <img src="https://via.placeholder.com/50x50.png" alt="user" class="w35 me-2">  
                                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Goria Coast</h6>
                                            </div>
                                            <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                                <i class="feather-star font-xss text-warning me-2"></i>
                                                Mobile Apps Redesign
                                            </div>
                                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                                Hey Cak, Could you free now? Can you look and read the brief first before...
                                            </div>
                                            <span class="email-file">
                                                
                                            </span>
                                            <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="default-email-open.php" class="rounded-3 bg-lightblue theme-light-bg">
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox" id="blankCheckbox5" value="option1" aria-label="">
                                                <label class="text-grey-500 font-xssss" for="blankCheckbox5"></label>
                                            </div>
                                            <div class="email-user">
                                                <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                                <img src="https://via.placeholder.com/50x50.png" alt="user" class="w35 me-2">  
                                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Hurin Seary</h6>
                                            </div>
                                            <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                                <i class="feather-star font-xss text-warning me-2"></i>
                                                Mobile Apps Redesign
                                            </div>
                                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                                Hey Cak, Could you free now? Can you look and read the brief first before...
                                            </div>
                                            <span class="email-file">
                                                <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                            </span>
                                            <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="default-email-open.php" class="rounded-3 bg-lightblue theme-light-bg">
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox" id="blankCheckbox6" value="option1" aria-label="">
                                                <label class="text-grey-500 font-xssss" for="blankCheckbox6"></label>
                                            </div>
                                            <div class="email-user">
                                                <span class="btn-round-xss ms-0 bg-warning me-2"></span>
                                                <span class="btn-round-sm bg-gold-gradiant me-2 ls-3 text-white font-xssss fw-700">V</span>  
                                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">David Goria</h6>
                                            </div>
                                            <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                                <i class="feather-star font-xss text-warning me-2"></i>
                                                Mobile Apps Redesign
                                            </div>
                                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                                Hey Cak, Could you free now? Can you look and read the brief first before...
                                            </div>
                                            <span class="email-file">
                                                
                                            </span>
                                            <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="default-email-open.php" class="rounded-3 bg-transparent">
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox" id="blankCheckbox7" value="option1" aria-label="">
                                                <label class="text-grey-500 font-xssss" for="blankCheckbox7"></label>
                                            </div>
                                            <div class="email-user">
                                                <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                                <img src="https://via.placeholder.com/50x50.png" alt="user" class="w35 me-2">  
                                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Seary Victor</h6>
                                            </div>
                                            <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                                <i class="feather-star font-xss text-warning me-2"></i>
                                                Mobile Apps Redesign
                                            </div>
                                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                                Hey Cak, Could you free now? Can you look and read the brief first before...
                                            </div>
                                            <span class="email-file">
                                                <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                            </span>
                                            <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="default-email-open.php" class="rounded-3 bg-transparent">
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox" id="blankCheckbox8" value="option1" aria-label="">
                                                <label class="text-grey-500 font-xssss" for="blankCheckbox8"></label>
                                            </div>
                                            <div class="email-user">
                                                <span class="btn-round-xss ms-0 bg-warning me-2"></span>
                                                <img src="https://via.placeholder.com/50x50.png" alt="user" class="w35 me-2">  
                                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Ana Seary</h6>
                                            </div>
                                            <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                                <i class="feather-star font-xss text-warning me-2"></i>
                                                Mobile Apps Redesign
                                            </div>
                                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                                Hey Cak, Could you free now? Can you look and read the brief first before...
                                            </div>
                                            <span class="email-file">
                                                
                                            </span>
                                            <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="default-email-open.php" class="rounded-3 bg-transparent">
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox" id="blankCheckbox9" value="option1" aria-label="">
                                                <label class="text-grey-500 font-xssss" for="blankCheckbox9"></label>
                                            </div>
                                            <div class="email-user">
                                                <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                                <span class="btn-round-sm bg-primary-gradiant me-2 ls-3 text-white font-xssss fw-700">UD</span>
                                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Studio Express</h6>
                                            </div>
                                            <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                                <i class="feather-star font-xss text-warning me-2"></i>
                                                Mobile Apps Redesign
                                            </div>
                                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                                Hey Cak, Could you free now? Can you look and read the brief first before...
                                            </div>
                                            <span class="email-file">
                                                <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                            </span>
                                            <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="default-email-open.php" class="rounded-3 bg-lightblue theme-light-bg">
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox" id="blankCheckbox10" value="option1" aria-label="">
                                                <label class="text-grey-500 font-xssss" for="blankCheckbox10"></label>
                                            </div>
                                            <div class="email-user">
                                                <span class="btn-round-xss ms-0 bg-warning me-2"></span>
                                                <span class="btn-round-sm bg-gold-gradiant me-2 ls-3 text-white font-xssss fw-700">V</span>  
                                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">David Goria</h6>
                                            </div>
                                            <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                                <i class="feather-star font-xss text-warning me-2"></i>
                                                Mobile Apps Redesign
                                            </div>
                                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                                Hey Cak, Could you free now? Can you look and read the brief first before...
                                            </div>
                                            <span class="email-file">
                                                
                                            </span>
                                            <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="default-email-open.php" class="rounded-3 bg-transparent">
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox" id="blankCheckbox11" value="option1" aria-label="">
                                                <label class="text-grey-500 font-xssss" for="blankCheckbox11"></label>
                                            </div>
                                            <div class="email-user">
                                                <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                                <img src="https://via.placeholder.com/50x50.png" alt="user" class="w35 me-2">  
                                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Seary Victor</h6>
                                            </div>
                                            <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                                <i class="feather-star font-xss text-warning me-2"></i>
                                                Mobile Apps Redesign
                                            </div>
                                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                                Hey Cak, Could you free now? Can you look and read the brief first before...
                                            </div>
                                            <span class="email-file">
                                                <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                            </span>
                                            <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="default-email-open.php" class="rounded-3 bg-transparent">
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox" id="blankCheckbox12" value="option1" aria-label="">
                                                <label class="text-grey-500 font-xssss" for="blankCheckbox12"></label>
                                            </div>
                                            <div class="email-user">
                                                <span class="btn-round-xss ms-0 bg-warning me-2"></span>
                                                <img src="https://via.placeholder.com/50x50.png" alt="user" class="w35 me-2">  
                                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Ana Seary</h6>
                                            </div>
                                            <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                                <i class="feather-star font-xss text-warning me-2"></i>
                                                Mobile Apps Redesign
                                            </div>
                                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                                Hey Cak, Could you free now? Can you look and read the brief first before...
                                            </div>
                                            <span class="email-file">
                                                
                                            </span>
                                            <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="default-email-open.php" class="rounded-3 bg-transparent">
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox" id="blankCheckbox13" value="option1" aria-label="">
                                                <label class="text-grey-500 font-xssss" for="blankCheckbox13"></label>
                                            </div>
                                            <div class="email-user">
                                                <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                                <span class="btn-round-sm bg-primary-gradiant me-2 ls-3 text-white font-xssss fw-700">UD</span>
                                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700">Studio Express</h6>
                                            </div>
                                            <div class="email-subject text-grey-900 text-dark fw-600 font-xssss">
                                                <i class="feather-star font-xss text-warning me-2"></i>
                                                Mobile Apps Redesign
                                            </div>
                                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                                Hey Cak, Could you free now? Can you look and read the brief first before...
                                            </div>
                                            <span class="email-file">
                                                <i class="feather-paperclip font-xss btn-round-sm text-grey-500 me-2 p-0"></i>
                                            </span>
                                            <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                        </a>
                                    </li>








                                </ul>                                 
                            </div>
                        </div>

                    </div>
                </div>
                 
            </div>            
        </div>
        <!-- main content -->

        <!-- right chat -->
        <div class="right-chat nav-wrap mt-2 right-scroll-bar">
            <div class="middle-sidebar-right-content bg-white shadow-xss rounded-xxl">

                <!-- loader wrapper -->
                <div class="preloader-wrap p-3">
                    <div class="box shimmer">
                        <div class="lines">
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                        </div>
                    </div>
                    <div class="box shimmer mb-3">
                        <div class="lines">
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                        </div>
                    </div>
                    <div class="box shimmer">
                        <div class="lines">
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                        </div>
                    </div>
                </div>
                <!-- loader wrapper -->

                <div class="section full pe-3 ps-4 pt-4 position-relative feed-body">
                    <h4 class="font-xsssss text-grey-500 text-uppercase fw-700 ls-3">CONTACTS</h4>
                    <ul class="list-group list-group-flush">
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="https://via.placeholder.com/50x50.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Hurin Seary</a>
                            </h3>
                            <span class="badge badge-primary text-white badge-pill fw-500 mt-0">2</span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="https://via.placeholder.com/50x50.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Victor Exrixon</a>
                            </h3>
                            <span class="bg-success ms-auto btn-round-xss"></span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="https://via.placeholder.com/50x50.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Surfiya Zakir</a>
                            </h3>
                            <span class="bg-warning ms-auto btn-round-xss"></span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="https://via.placeholder.com/50x50.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Goria Coast</a>
                            </h3>
                            <span class="bg-success ms-auto btn-round-xss"></span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="https://via.placeholder.com/50x50.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Hurin Seary</a>
                            </h3>
                            <span class="badge mt-0 text-grey-500 badge-pill pe-0 font-xsssss">4:09 pm</span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="https://via.placeholder.com/50x50.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">David Goria</a>
                            </h3>
                            <span class="badge mt-0 text-grey-500 badge-pill pe-0 font-xsssss">2 days</span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="https://via.placeholder.com/50x50.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Seary Victor</a>
                            </h3>
                            <span class="bg-success ms-auto btn-round-xss"></span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            <figure class="avatar float-left mb-0 me-2">
                                <img src="https://via.placeholder.com/50x50.png" alt="image" class="w35">
                            </figure>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Ana Seary</a>
                            </h3>
                            <span class="bg-success ms-auto btn-round-xss"></span>
                        </li>
                        
                    </ul>
                </div>
                <div class="section full pe-3 ps-4 pt-4 pb-4 position-relative feed-body">
                    <h4 class="font-xsssss text-grey-500 text-uppercase fw-700 ls-3">GROUPS</h4>
                    <ul class="list-group list-group-flush">
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            
                            <span class="btn-round-sm bg-primary-gradiant me-3 ls-3 text-white font-xssss fw-700">UD</span>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Studio Express</a>
                            </h3>
                            <span class="badge mt-0 text-grey-500 badge-pill pe-0 font-xsssss">2 min</span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            
                            <span class="btn-round-sm bg-gold-gradiant me-3 ls-3 text-white font-xssss fw-700">UD</span>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Armany Design</a>
                            </h3>
                            <span class="bg-warning ms-auto btn-round-xss"></span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            
                            <span class="btn-round-sm bg-mini-gradiant me-3 ls-3 text-white font-xssss fw-700">UD</span>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">De fabous</a>
                            </h3>
                            <span class="bg-success ms-auto btn-round-xss"></span>
                        </li>
                    </ul>
                </div>
                <div class="section full pe-3 ps-4 pt-0 pb-4 position-relative feed-body">
                    <h4 class="font-xsssss text-grey-500 text-uppercase fw-700 ls-3">Pages</h4>
                    <ul class="list-group list-group-flush">
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            
                            <span class="btn-round-sm bg-primary-gradiant me-3 ls-3 text-white font-xssss fw-700">UD</span>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Armany Seary</a>
                            </h3>
                            <span class="bg-success ms-auto btn-round-xss"></span>
                        </li>
                        <li class="bg-transparent list-group-item no-icon pe-0 ps-0 pt-2 pb-2 border-0 d-flex align-items-center">
                            
                            <span class="btn-round-sm bg-gold-gradiant me-3 ls-3 text-white font-xssss fw-700">UD</span>
                            <h3 class="fw-700 mb-0 mt-0">
                                <a class="font-xssss text-grey-600 d-block text-dark model-popup-chat" href="#">Entropio Inc</a>
                            </h3>
                            <span class="bg-success ms-auto btn-round-xss"></span>
                        </li>
                        
                    </ul>
                </div>

            </div>
        </div>

        
        <!-- right chat -->
        
        <div class="app-footer border-0 shadow-lg bg-primary-gradiant">
            <a href="default.php" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="default-video.php" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="default-live-stream.php" class="nav-content-bttn" data-tab="chats"><i class="feather-layout"></i></a>            
            <a href="shop-2.php" class="nav-content-bttn"><i class="feather-layers"></i></a>
            <a href="default-settings.php" class="nav-content-bttn"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 shadow-xss"></a>
        </div>

        <div class="app-header-search">
            <form class="search-form">
                <div class="form-group searchbox mb-0 border-0 p-1">
                    <input type="text" class="form-control border-0" placeholder="Search...">
                    <i class="input-icon">
                        <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon>
                    </i>
                    <a href="#" class="ms-1 mt-1 d-inline-block close searchbox-close">
                        <i class="ti-close font-xs"></i>
                    </a>
                </div>
            </form>
        </div>

    </div> 

    

    <div class="modal-popup-chat">
        <div class="modal-popup-wrap bg-white p-0 shadow-lg rounded-3">
            <div class="modal-popup-header w-100 border-bottom">
                <div class="card p-3 d-block border-0 d-block">
                    <figure class="avatar mb-0 float-left me-2">
                        <img src="https://via.placeholder.com/50x50.png" alt="image" class="w35 me-1">
                    </figure>
                    <h5 class="fw-700 text-primary font-xssss mt-1 mb-1">Hendrix Stamp</h5>
                    <h4 class="text-grey-500 font-xsssss mt-0 mb-0"><span class="d-inline-block bg-success btn-round-xss m-0"></span> Available</h4>
                    <a href="#" class="font-xssss position-absolute right-0 top-0 mt-3 me-4"><i class="ti-close text-grey-900 mt-2 d-inline-block"></i></a>
                </div>
            </div>
            <div class="modal-popup-body w-100 p-3 h-auto">
                <div class="message"><div class="message-content font-xssss lh-24 fw-500">Hi, how can I help you?</div></div>
                <div class="date-break font-xsssss lh-24 fw-500 text-grey-500 mt-2 mb-2">Mon 10:20am</div>
                <div class="message self text-right mt-2"><div class="message-content font-xssss lh-24 fw-500">I want those files for you. I want you to send 1 PDF and 1 image file.</div></div>
                <div class="snippet pt-3 ps-4 pb-2 pe-3 mt-2 bg-grey rounded-xl float-right" data-title=".dot-typing"><div class="stage"><div class="dot-typing"></div></div></div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-popup-footer w-100 border-top">
                <div class="card p-3 d-block border-0 d-block">
                    <div class="form-group icon-right-input style1-input mb-0"><input type="text" placeholder="Start typing.." class="form-control rounded-xl bg-greylight border-0 font-xssss fw-500 ps-3"><i class="feather-send text-grey-500 font-md"></i></div>
                </div>
            </div>
        </div> 
    </div> 


    <script src="js/plugin.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

</html>