<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/question-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 May 2021 04:53:39 GMT -->
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
        <link rel="stylesheet" href="css/jquery-te-1.4.0.css">
        <link rel="stylesheet" href="css/upvotejs.min.css">
        <link rel="stylesheet" href="css/chosen.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <!-- end inject -->
    </head>
    <body>

        <?php include_once 'header.php'; ?>

        <!--======================================
                START HERO AREA
        ======================================-->
        <section class="hero-area pattern-bg-2 bg-white shadow-sm overflow-hidden pt-40px pb-40px">
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
                            <h2 class="section-title pb-2 fs-24 lh-34">Find the best answer to your technical question, <br>
                                help others answer theirs
                            </h2>
                            <p class="lh-26">If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                <br> isn't anything embarrassing hidden in the middle of text.
                            </p>
                            <ul class="generic-list-item pt-3">
                                <li><span class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#6c727c"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/></svg></span> Anybody can ask a question</li>
                                <li><span class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#6c727c"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg></span> Anybody can answer</li>
                                <li><span class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 320 512" width="20px"><path fill="#6c727c" d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"></path></svg></span> The best answers are voted up and rise to the top</li>
                            </ul>
                        </div><!-- end hero-content -->
                    </div><!-- end col-lg-9 -->
                    <div class="col-lg-3">
                        <div class="hero-btn-box text-right py-3">
                            <a href="ask-question.html" class="btn theme-btn">Ask a Question <i class="la la-arrow-right icon ml-1"></i></a>
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
        <section class="question-area pt-40px pb-40px">
            <div class="container">
                <?php
                if (isset($_GET['i'])) {

                    $qid = $_GET['i'];
//                    echo $qid;
                    ?>
                    <div class="row">


                        <div class="col-lg-9">
                            <div class="question-main-bar mb-50px">

                                <?php
                                include_once './Php/timediff.php';

                                $qryQ = mysqli_query($con, "SELECT * FROM `data_que` WHERE Forum_que_id = {$_GET['i']};");
                                while ($Qrow = mysqli_fetch_assoc($qryQ)) {
                                    ?>

                                    <div class="question-highlight">
                                        <div class="media media-card shadow-none rounded-0 mb-0 bg-transparent p-0">
                                            <div class="media-body">
                                                <h5 class="fs-20"><a href="#"><?php echo $Qrow['FO_Que_title']; ?></a></h5>
                                                <div class="meta d-flex flex-wrap align-items-center fs-13 lh-20 py-1">
                                                    <div class="pr-3">
                                                        <span>Asked</span>
                                                        <span class="text-black"><?php time_Ago($Qrow['FO_date_time']) ?></span>
                                                    </div>
                                                    <div class="pr-3">
                                                        <span class="pr-1"><?php echo $Qrow['FO_status']; ?></span>
                                                        <!--<a href="#" class="text-black">19 days ago</a>-->
                                                    </div>
                                                    <div class="pr-3">
                <!--                                        <span class="pr-1">Viewed</span>
                                                        <span class="text-black">89 times</span>-->
                                                    </div>
                                                </div>
                                                <div class="tags">
                                                    <?php
                                                    $qrytags = mysqli_query($con, "SELECT data_tag.tag, data_quetags.tag_id FROM data_tag INNER JOIN data_quetags ON data_quetags.tag_id=data_tag.tag_id AND data_quetags.Forum_que_id = $Qrow[Forum_que_id];");

                                                    if (mysqli_num_rows($qrytags) > 0) {
                                                        while ($tagrow = mysqli_fetch_assoc($qrytags)) {
                                                            ?>
                                                                                                                                                                            <!--<a href="tagsearch.php?tid=<?php // echo $tagrow['tag_id'];           ?>" class="tag-link"><?php // echo $tagrow['tag'];           ?></a>-->
                                                            <a href="#" class="tag-link"><?php echo $tagrow['tag']; ?></a>
                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                                    <a href="#" class="tag-link">jquery</a>
                                                    <!--<a href="#" class="tag-link">attribute</a>-->
                                                </div>
                                            </div>
                                        </div><!-- end media -->
                                    </div><!-- end question-highlight -->


                                    <div class="question d-flex">
                                        <div class="votes votes-styled w-auto">
                                            <div id="vote" class="upvotejs">
                                                <!--                                <a class="upvote upvote-on" data-toggle="tooltip" data-placement="right" title="This question is useful"></a>
                                                                                <span class="count">1</span>
                                                                                <a class="downvote" data-toggle="tooltip" data-placement="right" title="This question is not useful"></a>
                                                                                <a class="star" data-toggle="tooltip" data-placement="right" title="Bookmark this question."></a>-->
                                            </div>
                                        </div><!-- end votes -->


                                        <div class="question-post-body-wrap flex-grow-1">
                                            <div class="question-post-body">


                                                <p><?php echo $Qrow['FO_que']; ?></p>



                                            </div><!-- end question-post-body -->




                                            <div class="question-post-user-action">
                                                <div class="post-menu">
                                                    <button type="button" class="btn popover-trigger" data-container="body" data-toggle="popover" data-placement="top">Share</button>
                                                    <a href="#" class="btn">Edit</a>
                                                    <button class="btn">Follow</button>
                                                    <div class="generic-popover d-none">
                                                        <h4 class="fs-15 pb-2">Share a link to this question</h4>
                                                        <form action="#" class="copy-to-clipboard">
                                                            <span class="text-success-message">Link Copied!</span>
                                                            <input type="text" class="form-control form--control form-control-sm copy-input" value="http://localhost:8080/disilab/que-detail.php?i=<?php echo $_GET['i'] ?>">
                                                            <div class="btn-box pt-2 d-flex align-items-center justify-content-between">
                                                                <button type="button" class="btn-text copy-btn bg-transparent border-0">Copy link</button>
                                                                <ul class="social-icons social-icons-sm">
                                                                    <li><a href="#" class="bg-8 text-white shadow-none" title="Share link to this question on Facebook"><i class="la la-facebook"></i></a></li>
                                                                    <li><a href="#" class="bg-9 text-white shadow-none" title="Share link to this question on Twitter"><i class="la la-twitter"></i></a></li>
                                                                    <li><a href="#" class="bg-dark text-white shadow-none" title="Share link to this question on DEV"><i class="lab la-dev"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </form>
                                                    </div><!-- end generic-popover -->
                                                </div><!-- end post-menu -->




                                            </div><!-- end question-post-user-action -->

                                        </div><!-- end question-post-body-wrap -->
                                    </div><!-- end question -->

                                    <?php
                                }

                                $qryA = mysqli_query($con, "SELECT * FROM `data_ans` WHERE Que_id = $qid;");

                                if (mysqli_num_rows($qryA) > 0) {
                                    $totalans = mysqli_num_rows($qryA);
                                    ?>



                                    <div class="subheader d-flex align-items-center justify-content-between">
                                        <div class="subheader-title">
                                            <h3 class="fs-16"><?php echo $totalans; ?> Answer</h3>
                                        </div> <!--end subheader-title--> 
                                        <div class="subheader-actions select-container-wrap select--container-wrap d-flex align-items-center">
                                            <label class="fs-13 fw-regular mr-1 mb-0">Order by</label>
                                            <select class="select-container">
                                                <option value="active">active</option>
                                                <option value="oldest">oldest</option>
                                                <option value="votes" selected="selected">votes</option>
                                            </select>
                                        </div><!--end subheader-actions--> 
                                    </div><!--end subheader--> 



                                    <?php
                                    while ($Arow = mysqli_fetch_assoc($qryA)) {

                                        $ans = $Arow['FO_answer'];
                                        
                                        $qrycount = mysqli_query($con, "SELECT COUNT(*) AS number FROM data_ans_ratings WHERE ans_id= $Arow[Ans_id] AND ratings = 1;");

                                        if (mysqli_num_rows($qrycount) > 0) {
                                            $rowcunt = mysqli_fetch_assoc($qrycount);
                                            $totalvote = $rowcunt['number'];
                                        }
                                        
                                        ?>
                                        <div class="answer-wrap d-flex">



                                            <?php
                                            if ($Arow['status'] == 1) {
                                                ?>
                                                <div class="votes votes-styled w-auto">
                                                    <div id="vote2" class="upvotejs">
                                                        <a class="upvote" data-toggle="tooltip" data-placement="right" href="Php/votes.php?v=1&qid=<?php echo $qid;?>&aid=<?php echo $Arow['Ans_id']; ?>" title="This question is useful"></a>
                                                        <span class="count"><?php echo $totalvote;?></span>
                                                        <a class="downvote" data-toggle="tooltip"  data-placement="right" href="Php/votes.php?v=0&qid=<?php echo $qid;?>&aid=<?php echo $Arow['Ans_id']; ?>" title="This question is not useful"></a>
                                                        <a class="star check star-on" data-toggle="tooltip" data-placement="right" title="The question owner accepted this answer"></a>
                                                    </div>
                                                </div>
                                                <?php
                                            } elseif($Arow['status'] == 0) {
                                                ?>

                                                <div class="votes votes-styled w-auto">
                                                    <div id="vote" class="upvotejs">
                                                        <a class="upvote" data-toggle="tooltip" data-placement="right" href="Php/votes.php?v=1&qid=<?php echo $qid;?>&aid=<?php echo $Arow['Ans_id']; ?>" title="This question is useful"></a>
                                                        <span class="count"><?php echo $totalvote;?></span>
                                                        <a class="downvote" data-toggle="tooltip"  data-placement="right" href="Php/votes.php?v=0&qid=<?php echo $qid;?>&aid=<?php echo $Arow['Ans_id']; ?>" title="This question is not useful"></a>
                                                        <a class="star" data-toggle="tooltip" data-placement="right" title="Bookmark this question."></a>
                                                    </div>
                                                </div>

                                                <?php
                                            }
                                            ?>

                                        


                                    <div class="answer-body-wrap flex-grow-1">
                                        <div class="answer-body">
                                            <p><?php print $ans; ?>  </p>     
                                        </div> 

                                        <div class="meta d-flex flex-wrap align-items-center fs-13 lh-20 py-1">
                                            <div class="pr-3">
                                                <span>Answered</span>
                                                <span class="text-black"><?php time_Ago($Arow['ans_dt']) ?></span>
                                            </div>
                                            <div class="pr-3">
                                                <span class="pr-1">

                                                    <?php
                                                    if ($Arow['status'] == 0) {
                                                        echo 'Not Accepted';
                                                    } else {

                                                        echo 'Accepted';
                                                    }
                                                    ?></span>

                                            </div>
                                            <div class="pr-3">
            <!--                                                        <span class="pr-1">Viewed</span>
                                                <span class="text-black">89 times</span>-->
                                            </div>
                                        </div>

                                        <div class="question-post-user-action">
                                            <div class="post-menu">
                                                <button type="button" class="btn popover-trigger" data-container="body" data-toggle="popover" data-placement="top">Share</button>
                                                <a href="#" class="btn">Edit</a>
                                                <button class="btn">Follow</button>
                                                <div class="generic-popover d-none">
                                                    <h4 class="fs-15 pb-2">Share a link to this question</h4>
                                                    <form action="#" class="copy-to-clipboard">
                                                        <span class="text-success-message">Link Copied!</span>
                                                        <input type="text" class="form-control form--control form-control-sm copy-input" value="https://disilab.com/q/66552850/15319675">
                                                        <div class="btn-box pt-2 d-flex align-items-center justify-content-between">
                                                            <button type="button" class="btn-text copy-btn bg-transparent border-0">Copy link</button>
                                                            <ul class="social-icons social-icons-sm">
                                                                <li><a href="#" class="bg-8 text-white shadow-none" title="Share link to this question on Facebook"><i class="la la-facebook"></i></a></li>
                                                                <li><a href="#" class="bg-9 text-white shadow-none" title="Share link to this question on Twitter"><i class="la la-twitter"></i></a></li>
                                                                <li><a href="#" class="bg-dark text-white shadow-none" title="Share link to this question on DEV"><i class="lab la-dev"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </form>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>  
                                </div> 

                                <?php
                            }
                        } else {
                            ?>
                            <div class="question d-flex">
                                <div class="votes votes-styled w-auto">
                                    <div id="vote" class="upvotejs">
                                    </div>
                                </div>
                                <div class="question-post-body-wrap flex-grow-1">
                                    <div class="question-post-body">
                                        <p>Sorry ... no answer available</p>
                                    </div> 
                                    <div class="question-post-user-action">
                                        <div class="post-menu">
                                            <img alt="no img " src="images/No data-rafiki.svg" class="avatar-lg rounded-circle">
                                        </div>
                                    </div>
                                </div> 
                            </div> 

                        <?php } ?>

                        <div class="subheader">
                            <div class="subheader-title">
                                <h3 class="fs-16">Your Answer</h3>
                            </div><!-- end subheader-title -->
                        </div><!-- end subheader -->





                        <div class="post-form">
                            <form method="post" class="pt-3" action="Php/add_ans.php">
                                <div class="input-box">
                                    <label class="fs-14 text-black lh-20 fw-medium">Body</label>
                                    <div class="form-group">
                                        <textarea id="quedesc" name="message" rows="6" placeholder="Your answer here..."></textarea>
                                        <script type="text/javascript">
                                            CKEDITOR.replace('quedesc');
                                        </script>
                                    </div>
                                </div>
                                <button class="btn theme-btn theme-btn-sm" name="postque" value="<?php echo $qid; ?>"  type="submit">Post Your Answer</button>
                            </form>
                        </div>



                    </div><!-- end question-main-bar -->
                </div><!-- end col-lg-9 -->


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
                            <h3 class="fs-17 pb-3">Related Questions</h3>
                            <div class="divider"><span></span></div>
                            <div class="sidebar-questions pt-3">
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">How to select the dom element with event.target</a></h5>
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
                                        <h5><a href="question-details.html">How to change the behavior of dropdown buttons in HTML</a></h5>
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
            <?php
        }
        ?>
    </div><!-- end container -->
</section><!-- end question-area -->
<!-- ================================
         END QUESTION AREA
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
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Advertising</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Legal Stuff</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Help</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="#">Knowledge Base</a></li>
                        <li><a href="#">Support</a></li>
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
<script src="js/jquery-te-1.4.0.min.js"></script>
<script src="js/upvote.vanilla.js"></script>
<script src="js/upvote-script.js"></script>
<script src="js/chosen.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/question-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 May 2021 04:55:08 GMT -->
</html>

