<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 May 2021 04:56:37 GMT -->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="author" content="TechyDevs">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Disilab -  Social Questions and Answers HTML Template</title>

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

        <!-- Favicon -->
        <link rel="icon" sizes="16x16" href="images/favicon.png">

        <!-- inject:css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/line-awesome.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/chosen.min.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- end inject -->
    </head>
    <body>

        <?php include './header.php'; ?>

        <!--======================================
                START HERO AREA
        ======================================-->
        <section class="hero-area pt-80px pb-80px hero-bg-1">
            <div class="overlay"></div>
            <span class="stroke-shape stroke-shape-1"></span>
            <span class="stroke-shape stroke-shape-2"></span>
            <span class="stroke-shape stroke-shape-3"></span>
            <span class="stroke-shape stroke-shape-4"></span>
            <span class="stroke-shape stroke-shape-5"></span>
            <span class="stroke-shape stroke-shape-6"></span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="hero-content">
                            <h2 class="section-title pb-3 text-white">Share & grow knowledge with us!</h2>
                            <p class="section-desc text-white">If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                <br> isn't anything embarrassing hidden in the middle of text.
                            </p>
                            <div class="hero-btn-box py-4">
                                <a href="ask-que.php" class="btn theme-btn theme-btn-white">Ask a Question <i class="la la-arrow-right icon ml-1"></i></a>
                            </div>
                        </div><!-- end hero-content -->
                    </div><!-- end col-lg-9 -->
                    <div class="col-lg-3">
                        <div class="hero-list hero-list-bg">
                            <div class="d-flex align-items-center pb-30px">
                                <img src="images/anonymousHeroQuestions.svg" alt="question icon" class="mr-3">
                                <p class="fs-15 text-white lh-20">Anybody can ask a question</p>
                            </div>
                            <div class="d-flex align-items-center pb-30px">
                                <img src="images/anonymousHeroAnswers.svg" alt="question answer icon" class="mr-3">
                                <p class="fs-15 text-white lh-20">Anybody can answer</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <img src="images/anonymousHeroUpvote.svg" alt="vote icon" class="mr-3">
                                <p class="fs-15 text-white lh-20">The best answers are voted up and rise to the top</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!--======================================
                END HERO AREA
        ======================================-->

        <!-- ================================
                 START QUESTION AREA
        ================================= -->
        <section class="question-area pt-80px pb-40px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="sidebar pt-45px pb-45px">
                            <ul class="generic-list-item generic-list-item-highlight fs-15">


                                <li class="lh-26 active"><a href="home-2.html"><i class="la la-home mr-1 text-black"></i> Home</a></li>

                                <?php
                                include_once './dbconnection.php';

                                $qryD = mysqli_query($con, "SELECT * FROM `data_domain`;");
                                while ($Drow = mysqli_fetch_assoc($qryD)) {
                                    ?>

                                    <li class="lh-26"><a href="category.php?doid=<?php echo $Drow['domain_id']; ?>"> <?php echo $Drow['domain_name']; ?></a></li>


                                <?php } ?>                       
                                <li class="lh-26"><a href="category.html"><i class="la la-file-text mr-1 text-black"></i> All Topics</a></li>
                                <li class="lh-26"><a href="category.html"><i class="la la-puzzle-piece mr-1 text-black"></i> Random</a></li>
                                <li class="lh-26"><a href="category.html"><i class="la la-check mr-1 text-black"></i> Unanswered</a></li>
                            </ul>
                        </div><!-- end sidebar -->
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-7">
                        <div class="question-tabs mb-50px">
                            <ul class="nav nav-tabs generic-tabs justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item"><div class="anim-bar"></div></li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="questions-tab" data-toggle="tab" href="#questions" role="tab" aria-controls="questions" aria-selected="true">Questions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="jobs-tab" data-toggle="tab" href="#jobs" role="tab" aria-controls="jobs" aria-selected="false">Jobs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tags-tab" data-toggle="tab" href="#tags" role="tab" aria-controls="tags" aria-selected="false">Tags</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="users-tab" data-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="false">Users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="badges-tab" data-toggle="tab" href="#badges" role="tab" aria-controls="badges" aria-selected="false">Badges</a>
                                </li>
                            </ul>
                            <div class="tab-content pt-40px" id="myTabContent">
                                <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                                    <div class="question-main-bar">
                                        <div class="filters d-flex align-items-center justify-content-between pb-4">
                                            <h3 class="fs-17 fw-medium">All Questions</h3>
                                            <div class="select-container-wrap select--container-wrap">
                                                <select class="select-container">
                                                    <option value="newest" selected="selected">Newest </option>
                                                    <option value="featured">Bountied (390)</option>
                                                    <option value="frequent">Frequent </option>
                                                    <option value="votes">Votes </option>
                                                    <option value="active">Active </option>
                                                    <option value="unanswered">Unanswered </option>
                                                </select>
                                            </div>
                                        </div><!-- end filters -->
                                        <div class="questions-snippet">

                                            <?php
                                            include_once './Php/timediff.php';

                                            $qryQ = mysqli_query($con, "SELECT * FROM `data_que`;");
                                            while ($Qrow = mysqli_fetch_assoc($qryQ)) {

                                                $qryU = mysqli_query($con, "SELECT * FROM `data_user` WHERE user_id = $Qrow[User_id]");
                                                $Urow = mysqli_fetch_assoc($qryU);
                                                ?>




                                                <div class="media media-card media--card align-items-center">

                                                    <?php
                                                    $qryans = mysqli_query($con, "SELECT status , Ans_id from data_ans WHERE Que_id = $Qrow[Forum_que_id];");

                                                    if (mysqli_num_rows($qryans) > 0) {
                                                        $ansrow = mysqli_fetch_assoc($qryans);

                                                        $qrycount = mysqli_query($con, "SELECT COUNT(*) AS number FROM data_ans_ratings WHERE ans_id= $ansrow[Ans_id] AND ratings = 1;");

                                                        if (mysqli_num_rows($qrycount) > 0) {
                                                            $rowcunt = mysqli_fetch_assoc($qrycount);
                                                            $totalvote = $rowcunt['number'];
                                                        }

                                                        if ($ansrow['status'] == 1) {
                                                            //accepted answer
                                                            ?>

                                                            <div class="votes answered-accepted">
                                                                <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">

                                                                    <?php
                                                                    ?>

                                                                    <span class="vote-counts"><?php echo $totalvote; ?></span>
                                                                    <span class="vote-icon"></span>
                                                                </div>
                                                                <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                                    <span class="vote-counts">1</span>
                                                                    <span class="answer-icon"></span>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        } else if ($ansrow['status'] == 0) {
                                                            //not accepted answer
                                                            ?>

                                                            <div class="votes">
                                                                <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                                    <span class="vote-counts"><?php echo $totalvote; ?></span>
                                                                    <span class="vote-icon"></span>
                                                                </div>
                                                                <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                                    <span class="vote-counts">0</span>
                                                                    <span class="answer-icon"></span>
                                                                </div>
                                                            </div>

                                                            <?php
                                                        }
                                                        // Do something
                                                    } else {

                                                        // no data availabel
                                                        ?>

                                                        <div class="votes">
                                                            <!--                                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                                                                                            <span class="vote-counts">not Answered</span>
                                                                                                                            <span class="vote-icon"></span>
                                                                                                                        </div>-->
                                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                                <span class="vote-counts">0</span>
                                                                <span class="answer-icon"></span>
                                                            </div>
                                                        </div>

                                                        <?php
                                                    }
                                                    ?>


                                                    <div class="media-body">
                                                        <h5><a href="que-detail.php?i=<?php echo $Qrow['Forum_que_id'] ?>"> <?php echo $Qrow['FO_Que_title']; ?></a></h5>
                                                        <small class="meta">
                                                            Asked <span class="pr-1"><?php time_Ago($Qrow['FO_date_time']) ?></span>

                                                            <a href="user-profile.html" class="author">By <?php echo $Urow['User_name']; ?></a>
                                                        </small>
                                                        <div class="tags">

                                                            <?php
                                                            $qrytags = mysqli_query($con, "SELECT data_tag.tag, data_quetags.tag_id FROM data_tag INNER JOIN data_quetags ON data_quetags.tag_id=data_tag.tag_id AND data_quetags.Forum_que_id = $Qrow[Forum_que_id];");

                                                            if (mysqli_num_rows($qrytags) > 0) {
                                                                while ($tagrow = mysqli_fetch_assoc($qrytags)) {
                                                                    ?>
                                                                    <a href="tagsearch.php?tid=<?php echo $tagrow['tag_id']; ?>" class="tag-link"><?php echo $tagrow['tag']; ?></a>

                                                                    <?php
                                                                }
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </div><!-- end media -->

                                            <?php } ?>   
                                        </div><!-- end questions-snippet -->










                                        <div class="pager d-flex flex-wrap align-items-center justify-content-between pt-30px">
                                            <div>
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination generic-pagination pr-1">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="fs-13 pt-3">Showing 1-15 results of 50,577 questions</p>
                                            </div>
                                            <div class="select-container-wrap select--container-wrap">
                                                <select class="select-container">
                                                    <option value="10">10 per page</option>
                                                    <option selected="" value="15">15 per page</option>
                                                    <option value="20">20 per page</option>
                                                    <option value="30">30 per page</option>
                                                    <option value="40">40 per page</option>
                                                    <option value="50">50 per page</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- end question-main-bar -->

                                </div><!-- end tab-pane -->





                                <div class="tab-pane fade" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">
                                    <div class="jobs-main-bar">
                                        <p class="fs-15 pb-2"><span class="fw-medium text-black">Developers first.</span> You’ll never receive recruiter spam or see fake job listings on our site.</p>
                                        <p class="fs-15 pb-4"><span class="fw-medium text-black">Find a job by</span> <a href="companies.html" class="btn-text">companies<i class="la la-arrow-right icon ml-1 fs-14"></i></a></p>
                                        <div class="filters pb-4">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <form method="post" class="flex-grow-1 mr-3">
                                                    <div class="form-group mb-0">
                                                        <input class="form-control form--control form-control-sm h-auto lh-34" type="text" name="search" placeholder="Type here to find jobs...">
                                                        <button class="form-btn" type="button"><i class="la la-search"></i></button>
                                                    </div>
                                                </form>
                                                <div class="filter-option-wrap">
                                                    <a class="btn theme-btn theme-btn-outline theme-btn-outline-gray" data-toggle="collapse" href="#collapseSearchAdvanced" role="button" aria-expanded="false" aria-controls="collapseSearchAdvanced">
                                                        <i class="la la-gear mr-1"></i> Filters
                                                    </a>
                                                </div>
                                            </div><!-- end d-flex -->
                                            <div class="collapse pt-3" id="collapseSearchAdvanced">
                                                <div class="card card-item mb-0">
                                                    <div class="card-body pb-1">
                                                        <form method="post" class="search-advanced">
                                                            <div class="search-advanced-item mb-10px">
                                                                <div class="row align-items-center">
                                                                    <div class="col-lg-6">
                                                                        <h4 class="fs-16">Filters</h4>
                                                                    </div><!-- end col-lg-6 -->
                                                                    <div class="col-lg-6">
                                                                        <div class="text-right search-filter-btn-box">
                                                                            <button type="submit" class="btn theme-btn theme-btn-sm">Search <i class="la la-search ml-1"></i></button>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                </div><!-- end row -->
                                                            </div><!-- end search-advanced-item -->
                                                            <div class="search-advanced-item mb-10px">
                                                                <h4 class="fs-14 pb-2 text-gray text-uppercase">Location</h4>
                                                                <div class="divider"><span></span></div>
                                                                <div class="row pt-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Distance</label>
                                                                            <div class="form-group select-container-wrap select--container-wrap w-auto">
                                                                                <select class="select-container">
                                                                                    <option value="5">within 5 km</option>
                                                                                    <option value="10">within 10 km</option>
                                                                                    <option selected="selected" value="20">within 20 km</option>
                                                                                    <option value="50">within 50 km</option>
                                                                                    <option value="100">within 100 km</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">City</label>
                                                                            <div class="form-group select-container-wrap select--container-wrap w-auto">
                                                                                <select class="select-container">
                                                                                    <option selected="selected" value="1">New york</option>
                                                                                    <option value="2">Austin</option>
                                                                                    <option value="3">Chicago</option>
                                                                                    <option value="4">Boston</option>
                                                                                    <option value="5">Denver</option>
                                                                                    <option value="6">Berlin</option>
                                                                                    <option value="7">Munich</option>
                                                                                    <option value="8">Hamburg</option>
                                                                                    <option value="9">Cologne</option>
                                                                                    <option value="10">Rome</option>
                                                                                    <option value="11">Turin</option>
                                                                                    <option value="12">Milan</option>
                                                                                    <option value="13">Florence</option>
                                                                                    <option value="14">Bologna</option>
                                                                                    <option value="15">Marylebone</option>
                                                                                    <option value="16">Southwark</option>
                                                                                    <option value="16">Westminster</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                </div><!-- end row -->
                                                            </div><!-- end search-advanced-item -->
                                                            <div class="search-advanced-item mb-10px">
                                                                <h4 class="fs-14 pb-2 text-gray text-uppercase">Tech</h4>
                                                                <div class="divider"><span></span></div>
                                                                <div class="row pt-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Tech You Like</label>
                                                                            <div class="form-group">
                                                                                <input class="form-control form--control form-control-sm" type="text" name="text">
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Tech You Dislike</label>
                                                                            <div class="form-group">
                                                                                <input class="form-control form--control form-control-sm" type="text" name="text">
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                </div><!-- end row -->
                                                            </div><!-- end search-advanced-item -->
                                                            <div class="search-advanced-item mb-10px">
                                                                <h4 class="fs-14 pb-2 text-gray text-uppercase">Compensation</h4>
                                                                <div class="divider"><span></span></div>
                                                                <div class="row pt-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Minimum Annual Salary</label>
                                                                            <div class="form-group">
                                                                                <input class="form-control form--control form-control-sm" type="text" name="text">
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Currency</label>
                                                                            <div class="form-group select-container-wrap select--container-wrap w-auto">
                                                                                <select class="select-container">
                                                                                    <option selected="selected" value="BDT">BDT</option>
                                                                                    <option value="USD">USD ($)</option>
                                                                                    <option value="EUR">EUR (€)</option>
                                                                                    <option value="GBP">GBP (£)</option>
                                                                                    <option value="CAD">CAD (C$)</option>
                                                                                    <option value="AUD">AUD (A$)</option>
                                                                                    <option value="INR">INR (₹)</option>
                                                                                    <option value="SEK">SEK (kr)</option>
                                                                                    <option value="PLN">PLN (zł)</option>
                                                                                    <option value="CHF">CHF</option>
                                                                                    <option value="DKK">DKK</option>
                                                                                    <option value="NZD">NZD</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <div class="custom-control custom-checkbox fs-13">
                                                                                <input type="checkbox" class="custom-control-input" id="offersEquity">
                                                                                <label class="custom-control-label custom--control-label" for="offersEquity">Offers Equity</label>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-12 -->
                                                                </div><!-- end row -->
                                                            </div><!-- end search-advanced-item -->
                                                            <div class="search-advanced-item mb-10px">
                                                                <h4 class="fs-14 pb-2 text-gray text-uppercase">Perks</h4>
                                                                <div class="divider"><span></span></div>
                                                                <div class="row pt-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Location options</label>
                                                                            <div class="form-group">
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="allowsRemote">
                                                                                    <label class="custom-control-label custom--control-label" for="allowsRemote">Allows remote</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="offersRelocation">
                                                                                    <label class="custom-control-label custom--control-label" for="offersRelocation">Offers relocation</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="offersVisaSponsorship">
                                                                                    <label class="custom-control-label custom--control-label" for="offersVisaSponsorship">Offers visa sponsorship</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Perks</label>
                                                                            <div class="form-group">
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="educationAndTuitionBenefits">
                                                                                    <label class="custom-control-label custom--control-label" for="educationAndTuitionBenefits">Education and tuition benefits</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="vacationDays10Plus">
                                                                                    <label class="custom-control-label custom--control-label" for="vacationDays10Plus">10+ vacation days</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="gymAndFitnessPerks">
                                                                                    <label class="custom-control-label custom--control-label" for="gymAndFitnessPerks">Gym and fitness perks</label>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                </div><!-- end row -->
                                                            </div><!-- end search-advanced-item -->
                                                            <div class="search-advanced-item mb-10px">
                                                                <h4 class="fs-14 pb-2 text-gray text-uppercase">Background</h4>
                                                                <div class="divider"><span></span></div>
                                                                <div class="row pt-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Experience Level Min</label>
                                                                            <div class="form-group select-container-wrap select--container-wrap w-auto">
                                                                                <select class="select-container">
                                                                                    <option selected="selected" value="">Select min. experience</option>
                                                                                    <option value="Student">Student</option>
                                                                                    <option value="Junior">Junior</option>
                                                                                    <option value="MidLevel">Mid-Level</option>
                                                                                    <option value="Senior">Senior</option>
                                                                                    <option value="Lead">Lead</option>
                                                                                    <option value="Manager">Manager</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Experience Level Max</label>
                                                                            <div class="form-group select-container-wrap select--container-wrap w-auto">
                                                                                <select class="select-container">
                                                                                    <option selected="selected" value="">Select max. experience</option>
                                                                                    <option value="Student">Student</option>
                                                                                    <option value="Junior">Junior</option>
                                                                                    <option value="MidLevel">Mid-Level</option>
                                                                                    <option value="Senior">Senior</option>
                                                                                    <option value="Lead">Lead</option>
                                                                                    <option value="Manager">Manager</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Role</label>
                                                                            <div class="form-group">
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="backendDeveloper">
                                                                                    <label class="custom-control-label custom--control-label" for="backendDeveloper">Backend Developer</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="dataScientist">
                                                                                    <label class="custom-control-label custom--control-label" for="dataScientist">Data Scientist</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="databaseAdministrator">
                                                                                    <label class="custom-control-label custom--control-label" for="databaseAdministrator">Database Administrator</label>
                                                                                </div>
                                                                                <div class="collapse" id="collapseMore">
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Designer">
                                                                                        <label class="custom-control-label custom--control-label" for="Designer">Designer</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="DesktopDeveloper">
                                                                                        <label class="custom-control-label custom--control-label" for="DesktopDeveloper">Desktop Developer</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="DevOps">
                                                                                        <label class="custom-control-label custom--control-label" for="DevOps">DevOps</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="EmbeddedDeveloper">
                                                                                        <label class="custom-control-label custom--control-label" for="EmbeddedDeveloper">Embedded Developer</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="FrontendDeveloper">
                                                                                        <label class="custom-control-label custom--control-label" for="FrontendDeveloper">Frontend Developer</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="FullStackDeveloper">
                                                                                        <label class="custom-control-label custom--control-label" for="FullStackDeveloper">Full Stack Developer</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="GraphicsGameDeveloper">
                                                                                        <label class="custom-control-label custom--control-label" for="GraphicsGameDeveloper">Graphics/Game Developer</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="MobileDeveloper">
                                                                                        <label class="custom-control-label custom--control-label" for="MobileDeveloper">Mobile Developer</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="ProductManager">
                                                                                        <label class="custom-control-label custom--control-label" for="ProductManager">Product Manager</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="QATestDeveloper">
                                                                                        <label class="custom-control-label custom--control-label" for="QATestDeveloper">QA/Test Developer</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="SystemAdministrator">
                                                                                        <label class="custom-control-label custom--control-label" for="SystemAdministrator"> System Administrator</label>
                                                                                    </div>
                                                                                </div><!-- end collapse -->
                                                                                <a class="collapse-btn fs-13" data-toggle="collapse" href="#collapseMore" role="button" aria-expanded="false" aria-controls="collapseMore">
                                                                                    <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>
                                                                                    <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-11"></i></span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Job Type</label>
                                                                            <div class="form-group">
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="FullTime">
                                                                                    <label class="custom-control-label custom--control-label" for="FullTime">Full-time</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="PartTime">
                                                                                    <label class="custom-control-label custom--control-label" for="PartTime">Part-time</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="Contract">
                                                                                    <label class="custom-control-label custom--control-label" for="Contract">Contract</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="Internship">
                                                                                    <label class="custom-control-label custom--control-label" for="Internship">Internship</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                </div><!-- end row -->
                                                            </div><!-- end search-advanced-item -->
                                                            <div class="search-advanced-item mb-10px">
                                                                <h4 class="fs-14 pb-2 text-gray text-uppercase">Companies</h4>
                                                                <div class="divider"><span></span></div>
                                                                <div class="row pt-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Companies to Include</label>
                                                                            <div class="form-group">
                                                                                <input class="form-control form--control form-control-sm fs-13" type="text" name="text" placeholder="Add up to 5 (e.g. Initrode)">
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Companies to Exclude</label>
                                                                            <div class="form-group">
                                                                                <input class="form-control form--control form-control-sm fs-13" type="text" name="text" placeholder="Add up to 5 (e.g. Initech)">
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                    <div class="col-lg-12">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Industries</label>
                                                                            <div class="form-group row">
                                                                                <div class="col-lg-4">
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Accounting">
                                                                                        <label class="custom-control-label custom--control-label" for="Accounting">Accounting</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Advertising">
                                                                                        <label class="custom-control-label custom--control-label" for="Advertising">Advertising</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Aerospace">
                                                                                        <label class="custom-control-label custom--control-label" for="Aerospace">Aerospace</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Agriculture">
                                                                                        <label class="custom-control-label custom--control-label" for="Agriculture">Agriculture</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Architecture">
                                                                                        <label class="custom-control-label custom--control-label" for="Architecture">Architecture</label>
                                                                                    </div>
                                                                                </div><!-- end col-lg-4 -->
                                                                                <div class="col-lg-4">
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Arts">
                                                                                        <label class="custom-control-label custom--control-label" for="Arts">Arts</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Automotive">
                                                                                        <label class="custom-control-label custom--control-label" for="Automotive">Automotive</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="CustomerService">
                                                                                        <label class="custom-control-label custom--control-label" for="CustomerService">Customer Service</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Data&Analytics">
                                                                                        <label class="custom-control-label custom--control-label" for="Data&Analytics">Data & Analytics</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Finance">
                                                                                        <label class="custom-control-label custom--control-label" for="Finance">Finance</label>
                                                                                    </div>
                                                                                </div><!-- end col-lg-4 -->
                                                                                <div class="col-lg-4">
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Food&Beverage">
                                                                                        <label class="custom-control-label custom--control-label" for="Food&Beverage">Food & Beverage</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Gaming">
                                                                                        <label class="custom-control-label custom--control-label" for="Gaming">Gaming</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Government">
                                                                                        <label class="custom-control-label custom--control-label" for="Government">Government</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Hardware">
                                                                                        <label class="custom-control-label custom--control-label" for="Hardware">Hardware</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-checkbox fs-13">
                                                                                        <input type="checkbox" class="custom-control-input" id="Health&Fitness">
                                                                                        <label class="custom-control-label custom--control-label" for="Health&Fitness">Health & Fitness</label>
                                                                                    </div>
                                                                                </div><!-- end col-lg-4 -->
                                                                                <div class="col-lg-12">
                                                                                    <div class="collapse" id="collapseMoreTwo">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="HealthCare">
                                                                                                    <label class="custom-control-label custom--control-label" for="HealthCare">Health Care</label>
                                                                                                </div>
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="HomeAndGarden">
                                                                                                    <label class="custom-control-label custom--control-label" for="HomeAndGarden">Home and Garden</label>
                                                                                                </div>
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="Hospitality">
                                                                                                    <label class="custom-control-label custom--control-label" for="Hospitality">Hospitality</label>
                                                                                                </div>
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="InformationTechnology">
                                                                                                    <label class="custom-control-label custom--control-label" for="InformationTechnology">Information Technology</label>
                                                                                                </div>
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="Insurance">
                                                                                                    <label class="custom-control-label custom--control-label" for="Insurance">Insurance</label>
                                                                                                </div>
                                                                                            </div><!-- end col-lg-4 -->
                                                                                            <div class="col-lg-4">
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="LanguageServices">
                                                                                                    <label class="custom-control-label custom--control-label" for="LanguageServices">Language Services</label>
                                                                                                </div>
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="Legal">
                                                                                                    <label class="custom-control-label custom--control-label" for="Legal">Legal</label>
                                                                                                </div>
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="LifeSciences">
                                                                                                    <label class="custom-control-label custom--control-label" for="LifeSciences">Life Sciences</label>
                                                                                                </div>
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="LocationServices">
                                                                                                    <label class="custom-control-label custom--control-label" for="LocationServices">Location Services</label>
                                                                                                </div>
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="Logistics&Distribution">
                                                                                                    <label class="custom-control-label custom--control-label" for="Logistics&Distribution">Logistics & Distribution</label>
                                                                                                </div>
                                                                                            </div><!-- end col-lg-4 -->
                                                                                            <div class="col-lg-4">
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="Manufacturing">
                                                                                                    <label class="custom-control-label custom--control-label" for="Manufacturing">Manufacturing</label>
                                                                                                </div>
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="Marketing">
                                                                                                    <label class="custom-control-label custom--control-label" for="Marketing">Marketing</label>
                                                                                                </div>
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="Media">
                                                                                                    <label class="custom-control-label custom--control-label" for="Media">Media</label>
                                                                                                </div>
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="Meteorology">
                                                                                                    <label class="custom-control-label custom--control-label" for="Meteorology">Meteorology</label>
                                                                                                </div>
                                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                                    <input type="checkbox" class="custom-control-input" id="Mobile">
                                                                                                    <label class="custom-control-label custom--control-label" for="Mobile">Mobile</label>
                                                                                                </div>
                                                                                            </div><!-- end col-lg-4 -->
                                                                                        </div><!-- end row -->
                                                                                    </div><!-- end collapse -->
                                                                                    <a class="collapse-btn fs-13" data-toggle="collapse" href="#collapseMoreTwo" role="button" aria-expanded="false" aria-controls="collapseMoreTwo">
                                                                                        <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>
                                                                                        <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-11"></i></span>
                                                                                    </a>
                                                                                </div><!-- end col-lg-12 -->
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-12 -->
                                                                </div><!-- end row -->
                                                            </div><!-- end search-advanced-item -->
                                                            <div class="search-advanced-item">
                                                                <h4 class="fs-14 pb-2 text-gray text-uppercase">More</h4>
                                                                <div class="divider"><span></span></div>
                                                                <div class="row pt-3">
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Applications</label>
                                                                            <div class="form-group">
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="BeOneOfTheFirstApplicants">
                                                                                    <label class="custom-control-label custom--control-label" for="BeOneOfTheFirstApplicants">Be one of the first applicants</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                    <div class="col-lg-6">
                                                                        <div class="input-box">
                                                                            <label class="fs-13 text-black lh-20">Responses</label>
                                                                            <div class="form-group">
                                                                                <div class="custom-control custom-checkbox fs-13">
                                                                                    <input type="checkbox" class="custom-control-input" id="HighResponseRate">
                                                                                    <label class="custom-control-label custom--control-label" for="HighResponseRate">High response rate</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- end col-lg-6 -->
                                                                </div><!-- end row -->
                                                            </div><!-- end search-advanced-item -->
                                                        </form>
                                                    </div><!-- end card-body -->
                                                </div><!-- end card -->
                                            </div><!-- end collapse -->
                                            <div class="d-flex align-items-center justify-content-between pt-4">
                                                <h3 class="fs-17 fw-medium">572 results</h3>
                                                <div class="select-container-wrap select--container-wrap">
                                                    <select class="select-container">
                                                        <option value="matches" selected="selected">Matches </option>
                                                        <option value="newest">Newest</option>
                                                        <option value="salary">Salary</option>
                                                    </select>
                                                </div>
                                            </div><!-- end d-flex -->
                                        </div><!-- end filters -->
                                        <div class="jobs-snippet">
                                            <div class="media media-card media--card align-items-center">
                                                <div class="media-body border-left-0">
                                                    <h5 class="pb-1"><a href="career-details.html">React Native Engineer at sustainable mobility Start-up (m/f/x)</a></h5>
                                                    <small class="meta d-block lh-20 pb-1">
                                                        <a href="company-details.html" class="author pr-1">Fintech Firm</a>
                                                        <span class="pr-1">- Amsterdam, Netherlands</span>
                                                        <span>- 20 mins ago</span>
                                                    </small>
                                                    <small class="meta d-block lh-20">
                                                        <span class="pr-1 text-success fw-medium">£30k - 50k</span>
                                                        <span class="pr-1 text-success">| Equity</span>
                                                        <span class="pr-1 text-danger">Visa sponsor</span>
                                                        <span class="text-info">Paid relocation</span>
                                                    </small>
                                                    <div class="tags pt-2">
                                                        <a href="#" class="tag-link">javascript</a>
                                                        <a href="#" class="tag-link">react-native</a>
                                                        <a href="#" class="tag-link">typescript</a>
                                                        <a href="#" class="tag-link">node.js</a>
                                                    </div>
                                                </div>
                                            </div><!-- end media -->
                                            <div class="media media-card media--card align-items-center">
                                                <div class="media-body border-left-0">
                                                    <h5 class="pb-1"><a href="career-details.html">Front-End Engineer (Remote)</a></h5>
                                                    <small class="meta d-block lh-20 pb-1">
                                                        <a href="company-details.html" class="author pr-1">Fintech Firm</a>
                                                        <span class="pr-1">- Amsterdam, Netherlands</span>
                                                        <span>- 1 hour ago</span>
                                                    </small>
                                                    <small class="meta d-block lh-20">
                                                        <span class="pr-1 text-success fw-medium">€60k - 70k</span>
                                                        <span class="pr-1 text-warning">Remote</span>
                                                    </small>
                                                    <div class="tags pt-2">
                                                        <a href="#" class="tag-link">javascript</a>
                                                        <a href="#" class="tag-link">html5</a>
                                                        <a href="#" class="tag-link">css</a>
                                                        <a href="#" class="tag-link">angular</a>
                                                    </div>
                                                </div>
                                            </div><!-- end media -->
                                            <div class="media media-card media--card align-items-center">
                                                <div class="media-body border-left-0">
                                                    <h5 class="pb-1"><a href="career-details.html">Senior Java Web Developer</a></h5>
                                                    <small class="meta d-block lh-20 pb-1">
                                                        <a href="company-details.html" class="author pr-1">Fintech Firm</a>
                                                        <span class="pr-1">- Amsterdam, Netherlands</span>
                                                        <span>- 5d ago</span>
                                                    </small>
                                                    <small class="meta d-block lh-20">
                                                        <span class="pr-1 text-success fw-medium">$25k - 65k</span>
                                                        <span class="pr-1 text-danger">Visa sponsor</span>
                                                        <span class="pl-1 text-info">Paid relocation</span>
                                                    </small>
                                                    <div class="tags pt-2">
                                                        <a href="#" class="tag-link">javascript</a>
                                                        <a href="#" class="tag-link">react-native</a>
                                                        <a href="#" class="tag-link">typescript</a>
                                                        <a href="#" class="tag-link">node.js</a>
                                                    </div>
                                                </div>
                                            </div><!-- end media -->
                                            <div class="media media-card media--card align-items-center">
                                                <div class="media-body border-left-0">
                                                    <h5 class="pb-1"><a href="career-details.html">Software Engineer, Full Stack</a></h5>
                                                    <small class="meta d-block lh-20 pb-1">
                                                        <a href="company-details.html" class="author pr-1">Fintech Firm</a>
                                                        <span class="pr-1">- Amsterdam, Netherlands</span>
                                                        <span>- 3w ago</span>
                                                    </small>
                                                    <small class="meta d-block lh-20">
                                                        <span class="pr-1 text-danger">Visa sponsor</span>
                                                        <span class="text-info">Paid relocation</span>
                                                    </small>
                                                    <div class="tags pt-2">
                                                        <a href="#" class="tag-link">javascript</a>
                                                        <a href="#" class="tag-link">react-native</a>
                                                        <a href="#" class="tag-link">typescript</a>
                                                        <a href="#" class="tag-link">node.js</a>
                                                    </div>
                                                </div>
                                            </div><!-- end media -->
                                            <div class="media media-card media--card align-items-center">
                                                <div class="media-body border-left-0">
                                                    <h5 class="pb-1"><a href="career-details.html">Senior Full-Stack (PHP, Node, React) Engineer (Remote)</a></h5>
                                                    <small class="meta d-block lh-20 pb-1">
                                                        <a href="company-details.html" class="author pr-1">Fintech Firm</a>
                                                        <span class="pr-1">- Amsterdam, Netherlands</span>
                                                        <span>- 1 hour ago</span>
                                                    </small>
                                                    <small class="meta d-block lh-20">
                                                        <span class="pr-1 text-success fw-medium">$25k - 65k</span>
                                                        <span class="pr-1 text-warning">Remote</span>
                                                    </small>
                                                    <div class="tags pt-2">
                                                        <a href="#" class="tag-link">javascript</a>
                                                        <a href="#" class="tag-link">react-native</a>
                                                        <a href="#" class="tag-link">typescript</a>
                                                        <a href="#" class="tag-link">node.js</a>
                                                    </div>
                                                </div>
                                            </div><!-- end media -->
                                            <div class="media media-card media--card align-items-center">
                                                <div class="media-body border-left-0">
                                                    <h5 class="pb-1"><a href="career-details.html">Join G2i as a 100% Remote React Engineer (Native or Web) | Fully Remote Position</a></h5>
                                                    <small class="meta d-block lh-20 pb-1">
                                                        <a href="company-details.html" class="author pr-1">Fintech Firm</a>
                                                        <span class="pr-1">- Amsterdam, Netherlands</span>
                                                        <span>- 1 hour ago</span>
                                                    </small>
                                                    <small class="meta d-block lh-20">
                                                        <span class="pr-1 text-success fw-medium">$25k - 65k</span>
                                                        <span class="pr-1 text-warning">Remote</span>
                                                    </small>
                                                    <div class="tags pt-2">
                                                        <a href="#" class="tag-link">javascript</a>
                                                        <a href="#" class="tag-link">react-native</a>
                                                        <a href="#" class="tag-link">typescript</a>
                                                        <a href="#" class="tag-link">node.js</a>
                                                    </div>
                                                </div>
                                            </div><!-- end media -->
                                            <div class="media media-card media--card align-items-center">
                                                <div class="media-body border-left-0">
                                                    <h5 class="pb-1"><a href="career-details.html">React Native Developer</a></h5>
                                                    <small class="meta d-block lh-20 pb-1">
                                                        <a href="company-details.html" class="author pr-1">Fintech Firm</a>
                                                        <span class="pr-1">- Amsterdam, Netherlands</span>
                                                        <span>- 1 hour ago</span>
                                                    </small>
                                                    <small class="meta d-block lh-20">
                                                        <span class="pr-1 text-success fw-medium">$25k - 65k</span>
                                                        <span class="pr-1 text-danger"> Visa sponsor</span>
                                                        <span class="text-info">Paid relocation</span>
                                                    </small>
                                                    <div class="tags pt-2">
                                                        <a href="#" class="tag-link">javascript</a>
                                                        <a href="#" class="tag-link">react-native</a>
                                                        <a href="#" class="tag-link">typescript</a>
                                                        <a href="#" class="tag-link">node.js</a>
                                                    </div>
                                                </div>
                                            </div><!-- end media -->
                                            <div class="media media-card media--card align-items-center">
                                                <div class="media-body border-left-0">
                                                    <h5 class="pb-1"><a href="career-details.html">Software Engineer - Fullstack</a></h5>
                                                    <small class="meta d-block lh-20 pb-1">
                                                        <a href="company-details.html" class="author pr-1">Fintech Firm</a>
                                                        <span class="pr-1">- Amsterdam, Netherlands</span>
                                                        <span>- 1 hour ago</span>
                                                    </small>
                                                    <small class="meta d-block lh-20">
                                                        <span class="pr-1 text-success fw-medium">$25k - 65k</span>
                                                        <span class="pr-1 text-danger">Visa sponsor</span>
                                                        <span class="text-info">Paid relocation</span>
                                                    </small>
                                                    <div class="tags pt-2">
                                                        <a href="#" class="tag-link">javascript</a>
                                                        <a href="#" class="tag-link">react-native</a>
                                                        <a href="#" class="tag-link">typescript</a>
                                                        <a href="#" class="tag-link">node.js</a>
                                                    </div>
                                                </div>
                                            </div><!-- end media -->
                                            <div class="media media-card media--card align-items-center">
                                                <div class="media-body border-left-0">
                                                    <h5 class="pb-1"><a href="career-details.html">PHP & MySQL & HTML/CSS & JS Developers</a></h5>
                                                    <small class="meta d-block lh-20 pb-1">
                                                        <a href="company-details.html" class="author pr-1">Fintech Firm</a>
                                                        <span class="pr-1">- Amsterdam, Netherlands</span>
                                                        <span>- 1 hour ago</span>
                                                    </small>
                                                    <small class="meta d-block lh-20">
                                                        <span class="pr-1 text-success fw-medium">$25k - 65k</span>
                                                        <span class="pr-1 text-danger">Visa sponsor</span>
                                                        <span class="text-info">Paid relocation</span>
                                                    </small>
                                                    <div class="tags pt-2">
                                                        <a href="#" class="tag-link">javascript</a>
                                                        <a href="#" class="tag-link">react-native</a>
                                                        <a href="#" class="tag-link">typescript</a>
                                                        <a href="#" class="tag-link">node.js</a>
                                                    </div>
                                                </div>
                                            </div><!-- end media -->
                                            <div class="media media-card media--card align-items-center">
                                                <div class="media-body border-left-0">
                                                    <h5 class="pb-1"><a href="career-details.html">Web Developer (m/w/d) Magento/Shopware - REMOTE</a></h5>
                                                    <small class="meta d-block lh-20 pb-1">
                                                        <a href="company-details.html" class="author pr-1">Fintech Firm</a>
                                                        <span class="pr-1">- Amsterdam, Netherlands</span>
                                                        <span>- 1 hour ago</span>
                                                    </small>
                                                    <small class="meta d-block lh-20">
                                                        <span class="pr-1 text-success fw-medium">$25k - 65k</span>
                                                        <span class="pr-1 text-warning">Remote</span>
                                                    </small>
                                                    <div class="tags pt-2">
                                                        <a href="#" class="tag-link">javascript</a>
                                                        <a href="#" class="tag-link">react-native</a>
                                                        <a href="#" class="tag-link">typescript</a>
                                                        <a href="#" class="tag-link">node.js</a>
                                                    </div>
                                                </div>
                                            </div><!-- end media -->
                                        </div><!-- end jobs-snippet -->
                                        <div class="pager d-flex flex-wrap align-items-center justify-content-between pt-30px pb-20px">
                                            <div>
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination generic-pagination pr-1">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="fs-13 pt-3">Showing 1-10 results of 1,577 jobs</p>
                                            </div>
                                            <div class="select-container-wrap select--container-wrap">
                                                <select class="select-container">
                                                    <option selected="" value="10">10 per page</option>
                                                    <option value="20">20 per page</option>
                                                    <option value="30">30 per page</option>
                                                    <option value="40">40 per page</option>
                                                    <option value="50">50 per page</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="related-links pb-4">
                                            <div class="related-links-item fs-13 lh-18 mb-1">
                                                <span class="text-black fw-medium pr-1">Popular Searches:</span>
                                                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-inline">
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">javascript developer jobs</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">postgresql developer jobs</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">node.js developer jobs</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">c# developer jobs</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">reactjs developer jobs</a></li>
                                                </ul>
                                            </div><!-- end related-links-item -->
                                            <div class="related-links-item fs-13 lh-18 mb-1">
                                                <span class="text-black fw-medium pr-1">Experience Level:</span>
                                                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-inline">
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Student developer jobs</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Junior developer jobs</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Senior developer jobs</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Lead developer jobs</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Manager developer jobs</a></li>
                                                </ul>
                                            </div><!-- end related-links-item -->
                                            <div class="related-links-item fs-13 lh-18 mb-1">
                                                <span class="text-black fw-medium pr-1">Top Cities:</span>
                                                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-inline">
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Developer jobs in Munich, Germany</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Developer jobs in Barcelona, Spain</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Developer jobs in New York, NY</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Developer jobs in Hamburg, Germany</a></li>
                                                </ul>
                                            </div><!-- end related-links-item -->
                                            <div class="related-links-item fs-13 lh-18">
                                                <span class="text-black fw-medium pr-1">Top Technologies:</span>
                                                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-inline">
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">sql developer jobs</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">android developer jobs</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">typescript developer jobs</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">react-native developer jobs</a></li>
                                                    <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">rust developer jobs</a></li>
                                                </ul>
                                            </div><!-- end related-links-item -->
                                        </div><!-- end related-links -->
                                    </div><!-- end jobs-main-bar -->
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="tags" role="tabpanel" aria-labelledby="tags-tab">
                                    <div class="tags-main-bar">
                                        <div class="filters pb-4">
                                            <h3 class="fs-17 fw-medium pb-2">Tags</h3>
                                            <p class="fs-15 lh-24 pb-4">A tag is a keyword or label that categorizes your question with other, similar questions.
                                                Using the right tags makes it easier for others to find and answer your question.
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <form method="post" class="flex-grow-1 mr-3">
                                                    <div class="form-group mb-0">
                                                        <input class="form-control form--control form-control-sm h-auto lh-34" type="text" name="search" placeholder="Filter by tag name...">
                                                        <button class="form-btn" type="button"><i class="la la-search"></i></button>
                                                    </div>
                                                </form>
                                                <div class="select-container-wrap select--container-wrap">
                                                    <select class="select-container">
                                                        <option value="popular" selected="selected">Popular</option>
                                                        <option value="name">Name</option>
                                                        <option value="new">New</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!-- end filters -->
                                        <div class="tags-snippet">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body">
                                                            <div class="tags pb-1">
                                                                <a href="#" class="tag-link tag-link-md tag-link-blue">javascript</a>
                                                            </div>
                                                            <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                                For questions regarding programming in ECMAScript (JavaScript/JS) and its various dialects/implementations (excluding ActionScript). Please include all relevant tags on your question; e.g., [node.js],…
                                                            </p>
                                                            <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                                <p class="pr-1 lh-18">2177849 questions</p>
                                                                <p class="lh-18">901 asked today, 5319 this week</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body">
                                                            <div class="tags pb-1">
                                                                <a href="#" class="tag-link tag-link-md tag-link-blue">java</a>
                                                            </div>
                                                            <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                                a high-level programming language. Use this tag when you're having problems using or understanding the language itself. This tag is rarely used alone and is most often used in conjunction with…
                                                            </p>
                                                            <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                                <p class="pr-1 lh-18">2177849 questions</p>
                                                                <p class="lh-18">901 asked today, 5319 this week</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body">
                                                            <div class="tags pb-1">
                                                                <a href="#" class="tag-link tag-link-md tag-link-blue">python</a>
                                                            </div>
                                                            <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                                a multi-paradigm, dynamically typed, multipurpose programming language. It is designed to be quick to learn, understand, and use, and enforce a clean and uniform syntax. Please note that Pyt…
                                                            </p>
                                                            <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                                <p class="pr-1 lh-18">2177849 questions</p>
                                                                <p class="lh-18">901 asked today, 5319 this week</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body">
                                                            <div class="tags pb-1">
                                                                <a href="#" class="tag-link tag-link-md tag-link-blue">c#</a>
                                                            </div>
                                                            <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                                a high level, statically typed, multi-paradigm programming language developed by Microsoft. C# code usually targets Microsoft's .NET family of tools and run-times, which…
                                                            </p>
                                                            <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                                <p class="pr-1 lh-18">2177849 questions</p>
                                                                <p class="lh-18">901 asked today, 5319 this week</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body">
                                                            <div class="tags pb-1">
                                                                <a href="#" class="tag-link tag-link-md tag-link-blue">php</a>
                                                            </div>
                                                            <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                                a widely used, high-level, dynamic, object-oriented, and interpreted scripting language primarily designed for server-side web development. Used for questions about the PHP language.
                                                            </p>
                                                            <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                                <p class="pr-1 lh-18">2177849 questions</p>
                                                                <p class="lh-18">901 asked today, 5319 this week</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body">
                                                            <div class="tags pb-1">
                                                                <a href="#" class="tag-link tag-link-md tag-link-blue">android</a>
                                                            </div>
                                                            <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                                Google's mobile operating system, used for programming or developing digital devices (Smartphones, Tablets, Automobiles, TVs, Wear, Glass, IoT). For topics related to Android, use Android-s…
                                                            </p>
                                                            <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                                <p class="pr-1 lh-18">2177849 questions</p>
                                                                <p class="lh-18">901 asked today, 5319 this week</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body">
                                                            <div class="tags pb-1">
                                                                <a href="#" class="tag-link tag-link-md tag-link-blue">html</a>
                                                            </div>
                                                            <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                                the markup language for creating web pages and other information to be displayed in a web browser. Questions regarding HTML should include a minimal reproducible ex…
                                                            </p>
                                                            <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                                <p class="pr-1 lh-18">2177849 questions</p>
                                                                <p class="lh-18">901 asked today, 5319 this week</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body">
                                                            <div class="tags pb-1">
                                                                <a href="#" class="tag-link tag-link-md tag-link-blue">jquery</a>
                                                            </div>
                                                            <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                                a JavaScript library, consider also adding the JavaScript tag. jQuery is a popular cross-browser JavaScript library that facilitates Document Object Model (DOM) traversal, event handling…
                                                            </p>
                                                            <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                                <p class="pr-1 lh-18">2177849 questions</p>
                                                                <p class="lh-18">901 asked today, 5319 this week</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body">
                                                            <div class="tags pb-1">
                                                                <a href="#" class="tag-link tag-link-md tag-link-blue">c++</a>
                                                            </div>
                                                            <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                                a general-purpose programming language. It was originally designed as an extension to C and has a similar syntax, but it is now a completely different language. Use this tag for questions about…
                                                            </p>
                                                            <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                                <p class="pr-1 lh-18">2177849 questions</p>
                                                                <p class="lh-18">901 asked today, 5319 this week</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body">
                                                            <div class="tags pb-1">
                                                                <a href="#" class="tag-link tag-link-md tag-link-blue">css</a>
                                                            </div>
                                                            <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                                a representation style sheet language used for describing the look and formatting of HTML (HyperText Markup Language), XML (Extensible Markup Language) documents and SV…
                                                            </p>
                                                            <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                                <p class="pr-1 lh-18">2177849 questions</p>
                                                                <p class="lh-18">901 asked today, 5319 this week</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-6 -->
                                            </div><!-- end row -->
                                        </div><!-- end tags-snippet -->
                                        <div class="pager d-flex align-items-center justify-content-between pt-10px pb-30px">
                                            <div>
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination generic-pagination pr-1">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="fs-13 pt-3">Showing 1-10 results of 50,577 tags</p>
                                            </div>
                                            <div class="select-container-wrap select--container-wrap">
                                                <select class="select-container">
                                                    <option selected="" value="10">10 per page</option>
                                                    <option value="20">20 per page</option>
                                                    <option value="30">30 per page</option>
                                                    <option value="40">40 per page</option>
                                                    <option value="50">50 per page</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- end tags-main-bar -->
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="users" role="tabpanel" aria-labelledby="users-tab">
                                    <div class="users-main-bar">
                                        <div class="filters pb-4">
                                            <h3 class="fs-17 fw-medium pb-4">Users</h3>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <form method="post" class="flex-grow-1 mr-3">
                                                    <div class="form-group mb-0">
                                                        <input class="form-control form--control form-control-sm h-auto lh-34" type="text" name="search" placeholder="Filter by user...">
                                                        <button class="form-btn" type="button"><i class="la la-search"></i></button>
                                                    </div>
                                                </form>
                                                <div class="select-container-wrap select--container-wrap">
                                                    <select class="select-container">
                                                        <option value="reputation" selected="selected">Reputation</option>
                                                        <option value="new-users">New users</option>
                                                        <option value="voters">Voters</option>
                                                        <option value="editors">Editors</option>
                                                        <option value="moderators">Moderators</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!-- end filters -->
                                        <div class="tags-snippet">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">Sector labs</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo2.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">Barmar</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">CertainPerformance</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo2.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">mck</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo3.jpg" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">LoicTheAztec</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo4.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">Günter Zöchbauer</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">Suragch</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo2.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">Martijn Pieters</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo3.jpg" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">Frank van Puffelen</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo4.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">Igor Goyda</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">Sector labs</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo2.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">Barmar</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">CertainPerformance</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo2.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">mck</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo3.jpg" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">LoicTheAztec</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo4.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">Günter Zöchbauer</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">Suragch</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo2.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">Martijn Pieters</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo3.jpg" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">Frank van Puffelen</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="media media-card border border-gray p-3">
                                                        <a href="#" class="media-img d-inline-block">
                                                            <img src="images/company-logo4.png" alt="company logo">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="fs-16 fw-medium"><a href="user-profile.html">Igor Goyda</a></h5>
                                                            <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                            <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end col-lg-6 -->
                                            </div><!-- end row -->
                                        </div><!-- end tags-snippet -->
                                        <div class="pager d-flex align-items-center justify-content-between pt-10px pb-30px">
                                            <div>
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination generic-pagination pr-1">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                                <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <p class="fs-13 pt-3">Showing 1-20 results of 50,577 users</p>
                                            </div>
                                            <div class="select-container-wrap select--container-wrap">
                                                <select class="select-container">
                                                    <option value="10">10 per page</option>
                                                    <option selected="" value="20">20 per page</option>
                                                    <option value="30">30 per page</option>
                                                    <option value="40">40 per page</option>
                                                    <option value="50">50 per page</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- end users-main-bar -->
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="badges" role="tabpanel" aria-labelledby="badges-tab">
                                    <div class="users-main-bar">
                                        <div class="filters pb-4">
                                            <h3 class="fs-17 fw-medium pb-2">Badges</h3>
                                            <p class="fs-15 lh-24 pb-4">Besides gaining reputation with your questions and answers, you receive badges for being especially helpful. Badges appears on your profile page, questions & answers.</p>
                                            <div class="select-container-wrap select--container-wrap">
                                                <select class="select-container">
                                                    <option value="all" selected="selected">All</option>
                                                    <option value="bronze">Bronze</option>
                                                    <option value="silver">Silver</option>
                                                    <option value="gold">Gold</option>
                                                </select>
                                            </div>
                                        </div><!-- end filters -->
                                        <div class="tags-snippet">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Altruist</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">First bounty you manually award on another person's question</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Analytical</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>43587</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Visited every section of the FAQ</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Announcer</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>227641</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Share a link to a post later visited by 25 unique IP addresses</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Archaeologist</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>2514</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Edit 100 posts that were inactive for 6 months</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Autobiographer</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>1367031</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Complete "About Me" section of user profile</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Benefactor</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>48793</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">First bounty you manually award on your own question</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Beta</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Voted 10 times, added 3 posts score > 0, and visited the site on 3 separate days during the private beta</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Booster</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Share a link to a post later visited by 300 unique IP addresses</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Census</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Completed the annual Disilab survey; your responses are anonymous</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Citizen Patrol</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">First flagged post</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Civic Duty</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Vote 300 or more times</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Cleanup</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">First rollback</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Commentator</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Leave 10 comments</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-3"></span> Constable</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>0</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Served as a pro-tem moderator for at least 1 year or through site graduation</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-3"></span> Copy Editor</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Edit 500 posts (excluding own or deleted posts and tag edits)</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Critic</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">First down vote</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Curious</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Ask a well-received question on 5 separate days, and maintain a positive question record</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Deputy</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Raise 80 helpful flags</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Disciplined</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Delete own post with score of 3 or higher</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Documentation Beta</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Contributed 3+ substantive pieces of documentation during the private beta</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Documentation Pioneer</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Contributed 3+ substantive pieces of documentation in the first month of documentation</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Editor</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">First edit</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Favorite Question</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Question bookmarked by 25 users</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4">
                                                    <div class="card card-item border border-gray">
                                                        <div class="card-body p-3">
                                                            <div class="badge-item">
                                                                <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Generalist</a>
                                                                <span class="item-multiplier fs-13 fw-medium">
                                                                    <span>×</span>
                                                                    <span>32924</span>
                                                                </span>
                                                                <p class="fs-13 lh-18 pt-2 text-black-50">Provide non-wiki answers of 15 total score in 20 of top 40 tags</p>
                                                            </div>
                                                        </div><!-- end card-body -->
                                                    </div><!-- end card -->
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-12 pb-40px">
                                                    <div class="collapse" id="collapseMoreBadges">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Good Answer</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">Answer score of 25 or more</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Good Question</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">Question score of 25 or more</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Guru</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">Accepted answer and score of 40 or more</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Scholar</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">Ask a question and accept an answer</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Self-Learner</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">Answer your own question with score of 3 or more</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Sportsmanship</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">Up vote 100 answers on questions where an answer of yours has a positive score</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-3"></span> Stellar Question</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">Question bookmarked by 100 users</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Student</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">First question with score of 1 or more</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Supporter</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">First up vote</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Tag Editor</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">First tag wiki edit</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Taxonomist</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">Create a tag used by 50 questions</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Teacher</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">Answer a question with score of 1 or more</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Tenacious</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">Zero score accepted answers: more than 5 and 20% of total</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Tumbleweed</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">Asked a question with zero score, no answers, no comments, and low views for a week</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Vox Populi</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">Use the maximum 40 votes in a day</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="card card-item border border-gray">
                                                                    <div class="card-body p-3">
                                                                        <div class="badge-item">
                                                                            <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Yearling</a>
                                                                            <span class="item-multiplier fs-13 fw-medium">
                                                                                <span>×</span>
                                                                                <span>32924</span>
                                                                            </span>
                                                                            <p class="fs-13 lh-18 pt-2 text-black-50">Active member for a year, earning at least 200 reputation</p>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col-lg-4 -->
                                                        </div>
                                                    </div>
                                                    <a class="collapse-btn btn theme-btn theme-btn-sm text-white w-100" data-toggle="collapse" href="#collapseMoreBadges" role="button" aria-expanded="false" aria-controls="collapseMoreBadges">
                                                        <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>
                                                        <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-11"></i></span>
                                                    </a>
                                                </div><!-- end col-lg-12 -->
                                            </div><!-- end row -->
                                        </div><!-- end tags-snippet -->
                                    </div><!-- end users-main-bar -->
                                </div><!-- end tab-pane -->
                            </div><!-- end tab-content -->
                        </div><!-- end question-tabs -->
                    </div><!-- end col-lg-7 -->
                    <div class="col-lg-3">
                        <div class="sidebar">
                            <div class="card card-item p-4">
                                <h3 class="fs-17 pb-3">Number Achievement</h3>
                                <div class="divider"><span></span></div>
                                <div class="row no-gutters text-center">
                                    <div class="col-lg-6 responsive-column-half">
                                        <div class="icon-box pt-3">
                                            <span class="fs-20 fw-bold text-color">980k</span>
                                            <p class="fs-14">Questions</p>
                                        </div><!-- end icon-box -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column-half">
                                        <div class="icon-box pt-3">
                                            <span class="fs-20 fw-bold text-color-2">610k</span>
                                            <p class="fs-14">Answers</p>
                                        </div><!-- end icon-box -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column-half">
                                        <div class="icon-box pt-3">
                                            <span class="fs-20 fw-bold text-color-3">650k</span>
                                            <p class="fs-14">Answer accepted</p>
                                        </div><!-- end icon-box -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column-half">
                                        <div class="icon-box pt-3">
                                            <span class="fs-20 fw-bold text-color-4">320k</span>
                                            <p class="fs-14">Users</p>
                                        </div><!-- end icon-box -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-12 pt-3">
                                        <p class="fs-14">To get answer of question <a href="#" class="text-color hover-underline" data-toggle="modal" data-target="#signUpModal">Join<i class="la la-arrow-right ml-1"></i></a></p>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end card -->
                            <div class="card card-item p-4">
                                <h3 class="fs-17 pb-3">Trending Questions</h3>
                                <div class="divider"><span></span></div>
                                <div class="sidebar-questions pt-3">
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Using web3 to call precompile contract</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">2 mins ago</span>
                                                <span class="pr-1">. by</span>
                                                <a href="#" class="author">Sudhir Kumbhare</a>
                                            </small>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Is it true while finding Time Complexity of the algorithm [closed]</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">48 mins ago</span>
                                                <span class="pr-1">. by</span>
                                                <a href="#" class="author">wimax</a>
                                            </small>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">image picker and store them into firebase with flutter</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 hour ago</span>
                                                <span class="pr-1">. by</span>
                                                <a href="#" class="author">Antonin gavrel</a>
                                            </small>
                                        </div>
                                    </div><!-- end media -->
                                </div><!-- end sidebar-questions -->
                            </div><!-- end card -->
                            <div class="card card-item p-4">
                                <h3 class="fs-17 pb-3">Previously Viewed</h3>
                                <div class="divider"><span></span></div>
                                <div class="sidebar-questions pt-3">
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">How did chickenpox get its name?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">2 mins ago</span>
                                                <span class="pr-1">. by</span>
                                                <a href="#" class="author">Sudhir Kumbhare</a>
                                            </small>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">How can you cut an onion without crying?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">48 mins ago</span>
                                                <span class="pr-1">. by</span>
                                                <a href="#" class="author">wimax</a>
                                            </small>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card media--card-2">
                                        <div class="media-body">
                                            <h5><a href="question-details.html">Does flu vaccine protect against Coronavirus?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 hour ago</span>
                                                <span class="pr-1">. by</span>
                                                <a href="#" class="author">Antonin gavrel</a>
                                            </small>
                                        </div>
                                    </div><!-- end media -->
                                </div><!-- end sidebar-questions -->
                            </div><!-- end card -->
                            <div class="card card-item p-4">
                                <h3 class="fs-17 pb-3">Trending Tags</h3>
                                <div class="divider"><span></span></div>
                                <div class="tags pt-4">
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">analytics</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">computer</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">python</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">javascript</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">c#</a>
                                        <span class="item-multiplier fs-13">
                                            <span>×</span>
                                            <span>32924</span>
                                        </span>
                                    </div><!-- end tag-item -->
                                    <div class="collapse" id="showMoreTags">
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">java</a>
                                            <span class="item-multiplier fs-13">
                                                <span>×</span>
                                                <span>32924</span>
                                            </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">swift</a>
                                            <span class="item-multiplier fs-13">
                                                <span>×</span>
                                                <span>32924</span>
                                            </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">html</a>
                                            <span class="item-multiplier fs-13">
                                                <span>×</span>
                                                <span>32924</span>
                                            </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">angular</a>
                                            <span class="item-multiplier fs-13">
                                                <span>×</span>
                                                <span>32924</span>
                                            </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">flutter</a>
                                            <span class="item-multiplier fs-13">
                                                <span>×</span>
                                                <span>32924</span>
                                            </span>
                                        </div><!-- end tag-item -->
                                        <div class="tag-item">
                                            <a href="#" class="tag-link tag-link-md">machine-language</a>
                                            <span class="item-multiplier fs-13">
                                                <span>×</span>
                                                <span>32924</span>
                                            </span>
                                        </div><!-- end tag-item -->
                                    </div><!-- end collapse -->
                                    <a class="collapse-btn fs-13" data-toggle="collapse" href="#showMoreTags" role="button" aria-expanded="false" aria-controls="showMoreTags">
                                        <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>
                                        <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-11"></i></span>
                                    </a>
                                </div>
                            </div><!-- end card -->
                            <div class="ad-card">
                                <h4 class="text-gray text-uppercase fs-13 pb-3 text-center">Advertisements</h4>
                                <div class="ad-banner mb-4 mx-auto">
                                    <span class="ad-text">290x500</span>
                                </div>
                            </div><!-- end ad-card -->
                        </div><!-- end sidebar -->
                    </div><!-- end col-lg-3 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end question-area -->
        <!-- ================================
                 END QUESTION AREA
        ================================= -->

        <!-- ================================
                 START CTA AREA
        ================================= -->
        <section class="get-started-area pt-80px pb-50px pattern-bg bg-gray">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title">Disilab Q&A communities are different. <br> Here's how</h2>
                </div>
                <div class="row pt-50px">
                    <div class="col-lg-4 responsive-column-half">
                        <div class="card card-item hover-y text-center">
                            <div class="card-body">
                                <img src="images/bubble.png" alt="bubble">
                                <h5 class="card-title pt-4 pb-2">Expert communities.</h5>
                                <p class="card-text">This is just a simple text made for this unique and awesome template, you can easily edit it as you want.</p>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column-half">
                        <div class="card card-item hover-y text-center">
                            <div class="card-body">
                                <img src="images/vote.png" alt="vote">
                                <h5 class="card-title pt-4 pb-2">The right answer. Right on top.</h5>
                                <p class="card-text">This is just a simple text made for this unique and awesome template, you can easily edit it as you want.</p>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column-half">
                        <div class="card card-item hover-y text-center">
                            <div class="card-body">
                                <img src="images/check.png" alt="check">
                                <h5 class="card-title pt-4 pb-2">Share knowledge. Earn trust.</h5>
                                <p class="card-text">This is just a simple text made for this unique and awesome template, you can easily edit it as you want.</p>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col-lg-4 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- ================================
                 END CTA AREA
        ================================= -->

        <!-- ================================
                 END FOOTER AREA
        ================================= -->
        <section class="footer-area pt-80px bg-dark position-relative">
            <span class="vertical-bar-shape vertical-bar-shape-1"></span>
            <span class="vertical-bar-shape vertical-bar-shape-2"></span>
            <span class="vertical-bar-shape vertical-bar-shape-3"></span>
            <span class="vertical-bar-shape vertical-bar-shape-4"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 responsive-column-half">
                        <div class="footer-item">
                            <h3 class="fs-18 fw-bold pb-2 text-white">Company</h3>
                            <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="careers.html">Careers</a></li>
                                <li><a href="advertising.html">Advertising</a></li>
                            </ul>
                        </div><!-- end footer-item -->
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 responsive-column-half">
                        <div class="footer-item">
                            <h3 class="fs-18 fw-bold pb-2 text-white">Legal Stuff</h3>
                            <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="terms-and-conditions.html">Terms of Service</a></li>
                                <li><a href="privacy-policy.html">Cookie Policy</a></li>
                            </ul>
                        </div><!-- end footer-item -->
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 responsive-column-half">
                        <div class="footer-item">
                            <h3 class="fs-18 fw-bold pb-2 text-white">Help</h3>
                            <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                                <li><a href="faq.html">Knowledge Base</a></li>
                                <li><a href="contact.html">Support</a></li>
                            </ul>
                        </div><!-- end footer-item -->
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 responsive-column-half">
                        <div class="footer-item">
                            <h3 class="fs-18 fw-bold pb-2 text-white">Connect with us</h3>
                            <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                                <li><a href="#"><i class="la la-facebook mr-1"></i> Facebook</a></li>
                                <li><a href="#"><i class="la la-twitter mr-1"></i> Twitter</a></li>
                                <li><a href="#"><i class="la la-linkedin mr-1"></i> LinkedIn</a></li>
                                <li><a href="#"><i class="la la-instagram mr-1"></i> Instagram</a></li>
                            </ul>
                        </div><!-- end footer-item -->
                    </div><!-- end col-lg-3 -->
                </div><!-- end row -->
            </div><!-- end container -->
            <hr class="border-top-gray my-5">
            <div class="container">
                <div class="row align-items-center pb-4 copyright-wrap">
                    <div class="col-lg-6">
                        <a href="index.html" class="d-inline-block">
                            <img src="images/logo-white.png" alt="footer logo" class="footer-logo">
                        </a>
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <p class="copyright-desc text-right fs-14">Copyright &copy; 2021 <a href="https://techydevs.com/">TechyDevs</a> Inc.</p>
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end footer-area -->
        <!-- ================================
                  END FOOTER AREA
        ================================= -->

        <!-- start back to top -->
        <div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Return to top">
            <i class="la la-arrow-up"></i>
        </div>
        <!-- end back to top -->

        <!-- Modal -->
        <div class="modal fade modal-container login-form" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header align-items-center">
                        <h5 class="modal-title" id="loginModalTitle">Good to see you again!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-times"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="form-group">
                                <label class="fs-14 text-black fw-medium lh-18">Email</label>
                                <input class="form-control form--control" type="email" name="email" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <label class="fs-14 text-black fw-medium lh-18">Password</label>
                                <div class="input-group mb-1">
                                    <input class="form-control form--control password-field" type="password" name="password" placeholder="Enter password">
                                    <div class="input-group-append">
                                        <button class="btn theme-btn-outline theme-btn-outline-gray toggle-password" type="button">
                                            <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                            <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z"/></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="custom-control custom-checkbox fs-14">
                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                    <label class="custom-control-label custom--control-label" for="rememberMe">Remember me!</label>
                                </div>
                                <a href="javascript:void(0)" class="lost-pass-btn fs-14 hover-underline">Forgot Password?</a>
                            </div>
                            <div class="btn-box">
                                <button type="submit" class="btn theme-btn w-100">
                                    Login to Account <i class="la la-arrow-right icon ml-1"></i>
                                </button>
                            </div>
                            <p class="create-account-text text-right fs-14 pt-1">
                                New to disilab? <a class="signup-btn text-color hover-underline" href="javascript:void(0)">Create account</a>
                            </p>
                            <div class="icon-element my-4 mx-auto shadow-sm fs-25">Or</div>
                            <div class="text-center">
                                <p class="fs-15 pb-3">Login with your social network</p>
                                <button class="btn theme-btn bg-8 mb-2 mr-2"><i class="la la-facebook mr-1"></i> Facebook</button>
                                <button class="btn theme-btn bg-9 mb-2 mr-2"><i class="la la-twitter mr-1"></i> Twitter</button>
                                <button class="btn theme-btn bg-10 mb-2 mr-2"><i class="la la-google mr-1"></i> Google</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade modal-container signup-form" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header align-items-center">
                        <h5 class="modal-title" id="signUpModalTitle">Welcome! create your account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-times"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="form-group">
                                <label class="fs-14 text-black fw-medium lh-18">Name</label>
                                <input class="form-control form--control" type="text" name="text" placeholder="Your name">
                            </div>
                            <div class="form-group">
                                <label class="fs-14 text-black fw-medium lh-18">Email</label>
                                <input class="form-control form--control" type="email" name="email" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <label class="fs-14 text-black fw-medium lh-18">Password</label>
                                <div class="input-group mb-1">
                                    <input class="form-control form--control password-field" type="password" name="password" placeholder="Enter password">
                                    <div class="input-group-append">
                                        <button class="btn theme-btn-outline theme-btn-outline-gray toggle-password" type="button">
                                            <svg class="eye-on" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
                                            <svg class="eye-off" xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 24 24" width="22px" fill="#7f8897"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5l2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4l1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z"/></svg>
                                        </button>
                                    </div>
                                </div>
                                <p class="fs-14 lh-20">Your password must be at least 6 characters long and must contain letters, numbers and special characters. Cannot contain whitespace.</p>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox fs-14">
                                    <input type="checkbox" class="custom-control-input" id="agreeCheckBox">
                                    <label class="custom-control-label custom--control-label" for="agreeCheckBox">By signing up, you agree to our <a href="privacy-policy.html" class="text-color hover-underline">Privacy Policy.</a></label>
                                </div>
                            </div>
                            <div class="btn-box">
                                <button type="submit" class="btn theme-btn w-100">
                                    Register Account <i class="la la-arrow-right icon ml-1"></i>
                                </button>
                            </div>
                            <p class="create-account-text text-right fs-14">
                                Already on disilab? <a class="login-btn text-color hover-underline" href="javascript:void(0)">Log in</a>
                            </p>
                            <div class="icon-element my-4 mx-auto shadow-sm fs-25">Or</div>
                            <div class="text-center">
                                <p class="fs-15 pb-3">Create account with your social network</p>
                                <button class="btn theme-btn bg-8 mb-2 mr-2"><i class="la la-facebook mr-1"></i> Facebook</button>
                                <button class="btn theme-btn bg-9 mb-2 mr-2"><i class="la la-twitter mr-1"></i> Twitter</button>
                                <button class="btn theme-btn bg-10 mb-2 mr-2"><i class="la la-google mr-1"></i> Google</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade modal-container recover-form" id="recoverModal" tabindex="-1" role="dialog" aria-labelledby="recoverModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header align-items-center">
                        <h5 class="modal-title" id="recoverModalTitle">Reset password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-times"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="fs-15 lh-20 pb-3">
                            Enter your username or email to reset your password.
                            You will receive an email with instructions on how to reset your password. If you are experiencing problems
                            resetting your password <a href="contact.html" class="text-color hover-underline">contact us</a> or <a href="#" class="text-color hover-underline">send us an email</a>
                        </p>
                        <form method="post">
                            <div class="form-group">
                                <label class="fs-14 text-black fw-medium lh-18">Email</label>
                                <input class="form-control form--control" type="text" name="text" placeholder="Email address">
                            </div>
                            <div class="btn-box">
                                <button type="submit" class="btn theme-btn w-100">
                                    Get New Password <i class="la la-arrow-right icon ml-1"></i>
                                </button>
                                <p class="create-account-text text-right fs-14">
                                    Not a member? <a class="text-color signup-btn hover-underline" href="javascript:void(0)">Create account</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- template js files -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/chosen.min.js"></script>
        <script src="js/main.js"></script>
    </body>

    <!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 May 2021 04:56:44 GMT -->
</html>