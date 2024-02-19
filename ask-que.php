<!DOCTYPE html>
<?php
ob_start();
session_start();
?>
<html lang="en">

    <!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/ask-question.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 May 2021 04:56:47 GMT -->
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
        <link rel="stylesheet" href="css/chosen.min.css">
        <link rel="stylesheet" href="css/bootstrap-tagsinput.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- end inject -->

        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

        <?php
        $user_id = $_SESSION['login_user'];
        ?>

    </head>
    <body>

        <?php
        include_once './dbconnection.php';
        include_once 'expert_ontime.php';


        $qryReturn = $con->query("SELECT * FROM data_user WHERE User_id = '$user_id' AND User_type='L'");

        $qrydomain = $con->query("SELECT * FROM `data_user_domain_info` WHERE User_id = $user_id User_type='L'");

        if (mysqli_num_rows($qryReturn) === 1) {
            $row = $qryReturn->fetch_assoc();
            $username = $row['User_name'];
            $emailid = $row['User_email_id'];
        }

//        $user_id = $_SESSION['login_user'];

        if (isset($_POST["btnRequest"])) {

            date_default_timezone_set('Asia/Kolkata');

            $FTitle = $_POST["txttitle"];
            $FQuery = $_POST["txtQuery"];

            $tags = $_POST['tags'];

            $Forumid = $_POST['optdomainid'];

            if ($Forumid == 0) {
                echo "<script type='text/javascript'>alert('Please Select any one domain from the list');</script>";
            } else {

                $qryf = $con->query("SELECT forum_domain_id FROM `data_forum` WHERE Forum_id = $Forumid");
                $frow = mysqli_fetch_row($qryf);
                $doid = $frow[0];

                $expertid = getmax_Exid($doid);

                $add_rec = "INSERT INTO data_forum_que(`Forum_id`, `User_id`, `FO_Que_title`, `FO_que`, `FO_date_time`, `FO_requested_ex`)
                VALUES('$Forumid','$user_id','$FTitle', '$FQuery',NOW(),'$expertid')";

                $qryReturn = $con->query($add_rec);
                if ($qryReturn == true) {

                    $queid = $con->insert_id;

                    $tag_ar = explode(",", $tags);
//            print_r($tag_arr);

                    include_once '../algo/tags.php';
                    add_Tags($queid, $tag_ar);

                    echo "<script type='text/javascript'>alert('Request successfully send . . . ');</script>";
                } else {
                    echo 'error ............';
                    echo"$con->error";
                }
            }
        }
        ?>

        <!-- start cssload-loader -->
        <!--        <div id="preloader">
                    <div class="loader">
                        <svg class="spinner" viewBox="0 0 50 50">
                        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                        </svg>
                    </div>
                </div>-->
        <!-- end cssload-loader -->

        <?php include_once './user_header.php'; ?>



        <!--======================================
                START HERO AREA
        ======================================-->
        <section class="hero-area pattern-bg-2 bg-white shadow-sm overflow-hidden">
            <span class="stroke-shape stroke-shape-1"></span>
            <span class="stroke-shape stroke-shape-2"></span>
            <span class="stroke-shape stroke-shape-3"></span>
            <div class="container">
                <div class="hero-content pt-80px pb-80px">
                    <h2 class="section-title">Ask a public question</h2>
                    <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550 125"><defs><style>.cls-3,.cls-6,.cls-7{fill:none;stroke-miterlimit:10}.cls-3{stroke:#3cb1c6}.cls-4{fill:#fff}.cls-5{fill:#f9b851}.cls-6{stroke:#f48024}.cls-7{stroke:#bbc0c4;stroke-dasharray:5}</style></defs><g opacity=".5"><path fill="#cceaff" d="M232.73 73L217.5 92.89V73h-16V26h64v47H232.73z"/><path class="cls-3" d="M205 47V20.5h14.5M255.5 66.5h-18.51L221 86.06V66.5h-16V58M231.5 20.5H270v46h-6.5"/><path class="cls-4" d="M222.5 40.79v7.3l8.16 7.29 15.84-14.21V33.3l-15.84 14.31-8.16-6.82z"/><path class="cls-5" d="M374.36 76l-9.29 11.42-.26-11.42h-5.31V49h45v27h-30.14z"/><path class="cls-6" d="M379.5 46.5H402V55M402 62v11.5H372.02L363 84.92V73.5h-6v-27h11.5"/><path class="cls-4" d="M377.5 59h5v5h-5zM367.5 59h5v5h-5zM387.5 59h5v5h-5z"/><path class="cls-5" d="M180.25 67l5.16 6.77.14-6.77h2.95V51h-25v16h16.75z"/><path class="cls-6" d="M170.5 65.5h10.73l5.77 6.72V65.5h4V59M170.5 49.5H165V65M191 53v-3.5h-15.5"/><path class="cls-4" transform="rotate(-180 177 58.5)" d="M175.5 57h3v3h-3z"/><path class="cls-4" transform="rotate(-180 183 58.5)" d="M181.5 57h3v3h-3z"/><path class="cls-4" transform="rotate(-180 171 58.5)" d="M169.5 57h3v3h-3z"/><path class="cls-5" d="M486.95 77l15.55 19.89V77h16V30h-65v47H486.95z"/><path class="cls-6" d="M515 51V24.5h-14.5M464.5 70.5h18.51L499 90.06V70.5h16V62M488.5 24.5H450v46h6.5"/><path class="cls-4" d="M470.5 44.71V52l8.16 7.3 15.84-14.21v-7.87l-15.84 14.3-8.16-6.81z"/><path class="cls-3" d="M533.5 34.5h-2.14L527 40.34V34.5h-3v-12h4.5M545 30v5.5h-7.5M533.5 22.5H545V26M534 28.5h2v2h-2z"/><path class="cls-3" d="M529 28.5h2v2h-2zM539 28.5h2v2h-2zM280 30V16.5h7.5M305.5 39.5H296l-8 10v-10h-8V35M293.5 15.5H313v24h-3.5"/><path class="cls-3" d="M289 26.52v3.65l4.08 3.65 7.92-7.11v-3.93l-7.92 7.15-4.08-3.41z"/><path class="cls-6" d="M124.5 27.5h1.41l3.09 4.23V27.5h2v-10h-2.5M115 23v4.5h6.5M124.5 17.5H115V21"/><path class="cls-6" transform="rotate(-180 123 22.5)" d="M122 21.5h2v2h-2z"/><path class="cls-6" transform="rotate(-180 127 22.5)" d="M126 21.5h2v2h-2z"/><path class="cls-6" transform="rotate(-180 119 22.5)" d="M118 21.5h2v2h-2z"/><path class="cls-7" d="M188.5 78.19s4.69 18.91 27.5 16.28M131 32.67s21.64-2 33 15M271.12 69.19c23.92 31.24 55.21 35.18 90.64 19.3M402 43.5c.68-6.28 19.53-30.13 45.26-21M503.45 98.26c5.25.1 37.8-10.84 23.09-54.76M272.34 66.5s10.51 0 15.16-13.88"/><path class="cls-7" d="M97.22 79.67c14.33-2.39 42.51-3.18 55.87 12.65s58.91 20.93 64.49 3"/></g><path class="cls-3" d="M59.15 84.6v-1.04M71.6 84.81v3.73M53.39 82.51l-3.96-.54 2.96-21.6 27.37 3.75-2.96 21.6-20.05-2.75"/><path class="cls-3" d="M50.22 76.21l-2.31-.32a2 2 0 01-1.73-2.28l.63-4.61a2 2 0 012.3-1.74l2.3.31zM79.88 80.27L77.59 80l1.18-8.64 2.32.32a2 2 0 011.73 2.27l-.64 4.62a2 2 0 01-2.3 1.7zM66.6 79.11l-.2 1.44M69.48 79.5l-.2 1.44M63.72 78.71l-.2 1.44M60.84 78.32l-.2 1.44M57.96 77.93l-.2 1.44"/><ellipse class="cls-3" cx="66.45" cy="70.5" rx="2.87" ry="2.94" transform="rotate(-82.2 66.45 70.504)"/><ellipse class="cls-3" cx="56.76" cy="69.18" rx="2.87" ry="2.94" transform="rotate(-82.2 56.758 69.175)"/><path class="cls-3" d="M55.42 105.96v7.46M72.84 105.96v7.46M76.57 96.01v1.24M66.62 96.01v1.24M54.18 95.38h7.47v4.98h-7.47z"/><path class="cls-3" d="M81.55 100.98v4.36H46.71V87.92h5.28M57.43 79.39l-1.98 3"/><path class="cls-3" d="M54.31 90.61c-2.34-1.55-3.17-4.43-1.85-6.43l1.8-2.73 8.49 5.61L61 89.78c-1.37 2.01-4.34 2.38-6.69.83zM62.27 87.92h19.28v9.33"/><path class="cls-3" d="M88.32 96.44l1.28-4.17a4.4 4.4 0 00-4.45-4.35h-5.47M79.29 104.84l2.68-3.44M82.72 107.53l2.69-3.44M88.32 96.83c2.22 1.73 2.81 4.67 1.33 6.56l-2 2.57-8-6.27 2-2.57c1.47-1.89 4.46-2.02 6.67-.29zM55.3 91.15a6.72 6.72 0 01-1.74.35H46.5"/><path class="cls-5" d="M40.82 46.24l7.96 10 .23-10h4.55V22.6H14.98v23.64h25.84z"/><path class="cls-6" d="M28.67 43.13h14.69l8.33 10.53V43.13h6.22V33.8M26.18 19.49H18.1v24.26M56.67 25.09v-5.6H33.65"/><path class="cls-4" d="M34.17 33.8a5.9 5.9 0 01.34-2.23 4.5 4.5 0 011.24-1.64A6.41 6.41 0 0037 28.62a2.06 2.06 0 00.3-1.07c0-1.12-.52-1.69-1.56-1.69a1.56 1.56 0 00-1.18.46 1.74 1.74 0 00-.46 1.25h-2.9a3.84 3.84 0 011.23-3 4.82 4.82 0 013.31-1.08 4.84 4.84 0 013.29 1 3.64 3.64 0 011.17 2.89 3.57 3.57 0 01-.43 1.62 6.57 6.57 0 01-1.33 1.68l-.81.77a2.78 2.78 0 00-.87 1.71v.61zM34 36.85a1.34 1.34 0 01.43-1 1.64 1.64 0 012.17 0 1.34 1.34 0 01.43 1 1.32 1.32 0 01-.42 1 1.7 1.7 0 01-2.19 0 1.32 1.32 0 01-.42-1z"/><path class="cls-3" d="M79.06 124H66.62v-4.21a6.45 6.45 0 015-6.42 6.29 6.29 0 017.47 6.33zM75.33 122.13v1.25M70.35 122.13v1.25M61.64 124H49.2v-4.21a6.47 6.47 0 015-6.42 6.29 6.29 0 017.47 6.33zM57.91 122.13v1.25M52.93 122.13v1.25"/></svg>
                </div><!-- end hero-content -->
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

                    <!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->


                    <div class="col-lg-8">
                        <div class="card card-item p-4">
                            <form method="POST">

                                <div class="input-box">

                                    <label class="fs-14 text-black fw-medium mb-0">Question Title</label>
                                    <p class="fs-13 pb-3 lh-20">Be specific and imagine you’re asking a question to another person</p>

                                    <div class="form-group">
                                        <input class="form-control form--control fs-13" type="text" name="txttitle" placeholder="e.g. Is there an R function for finding the index of an element in a vector?">
                                    </div>

                                </div><!-- end input-box -->

                                <div class="input-box">
                                    <div class="d-flex align-items-center justify-content-between">

                                        <div>
                                            <label class="fs-14 text-black fw-medium mb-0">Tags</label>
                                            <p class="fs-13 pb-3 lh-20">Add up to 5 tags to describe what your question is about:</p>
                                        </div>

                                        <button type="button" class="popover-trigger btn border border-gray py-1 lh-18 px-2" data-container="body" data-toggle="popover" data-placement="top">
                                            <svg aria-hidden="true" class="svg-icon-color-gray" width="14" height="14"><path d="M7 1a6 6 0 100 12A6 6 0 007 1zm1.06 9.06c-.02.63-.48 1.02-1.1 1-.57-.02-1.03-.43-1.01-1.06.02-.63.5-1.04 1.08-1.02.6.02 1.05.45 1.03 1.08zm.73-3.07l-.47.3c-.2.15-.36.36-.44.6a3.6 3.6 0 00-.08.65c0 .04-.03.14-.16.14h-1.4c-.14 0-.16-.09-.16-.13-.01-.5.11-.99.36-1.42A4.6 4.6 0 017.7 6.07c.15-.1.21-.21.3-.33a1.14 1.14 0 00.02-1.48c-.22-.26-.46-.4-.92-.4-.45 0-.83.23-1.02.52-.19.3-.16.63-.16.94H4.2c0-1.17.31-1.92.98-2.36a3.5 3.5 0 011.83-.44c.88 0 1.58.16 2.2.62.58.42.88 1.02.88 1.82 0 .5-.17.9-.43 1.24-.15.2-.44.47-.86.79h-.01z"></path></svg>
                                        </button>

                                        <div class="generic-popover d-none">
                                            <h4 class="fs-16 pb-1">How to tag</h4>
                                            <p class="pb-2 fs-14">Tags help the right people find and answer your question.</p>
                                            <ul class="generic-list-item generic-list-item-bullet">
                                                <li class="lh-18 text-black-50">Identify your tags by completing the sentence, "My question is about…"</li>
                                                <li class="lh-18 text-black-50">Include tags that are crucial to your question only, like <div class="tag-link">c#</div></li>
                                                <li class="lh-18 text-black-50">Only include version numbers, like <div class="tag-link">c#-4.0</div>, when absolutely necessary</li>
                                                <li class="lh-18 text-black-50">Use existing <a href="#" class="d-inline-block text-color hover-underline" target="_blank">popular tags</a></li>
                                            </ul>
                                            <p class="pb-1 fs-14">If you can’t find a tag:</p>
                                            <p class="fs-14 text-black-50"><a href="#" class="text-color hover-underline" target="_blank">Create new tags</a> or post without it and <a href="#" class="text-color hover-underline" target="_blank">ask the community</a>
                                                to create one for you.
                                            </p>
                                        </div><!-- end generic-popover -->

                                    </div>

                                    <div class="form-group">
                                        <input class="form-control form--control fs-14 tags-input" type="text"  name="tags" placeholder="e.g. javascript">
                                    </div>

                                </div><!-- end input-box -->


                                <div class="input-box">
                                    <label class="fs-14 text-black fw-medium mb-0">Category</label>
                                    <p class="fs-13 pb-3 lh-20">Please choose the appropriate section so the question can be searched easily.</p>
                                    <div class="form-group select-container-wrap">
                                        <select name="optdomainid" class="select-container">
                                            <option value="0">Select a Category</option>
                                            <option value="2">Machine Learning</option>
                                            <option value="3">Artificial Intelligence</option>
                                            <option value="4">Programming Language</option>
                                            <option value="5">Cybersecurity</option>
                                            <option value="7">Virtual Reality</option>

                                            <?php
//                                            while($row = $qrydomain->fetch_array(MYSQLI_ASSOC)) {
//
//                                                $domainid = $row['domain_id'];
//
//                                                $qryforum = $con->query("SELECT * FROM `data_forum` WHERE Forum_domain_id = $domainid");
//                                                $forumrow = $qryforum->fetch_array(MYSQLI_ASSOC);
//                                                $fid = $forumrow['Forum_id'];
                                            ?>       
    <!--<option value="<?php // echo $domainid; ?>"><?php // echo $forumrow['FO_name']; ?></option>-->

                                            <?php
//                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div><!-- end input-box -->

                                <div class="input-box">
                                    <label class="fs-14 text-black fw-medium mb-0">Details</label>
                                    <p class="fs-13 pb-3 lh-20">Include all the information someone would need to answer your question</p>
                                    <div class="form-group">
                                        <textarea id="quedesc" name="txtQuery" rows="10" cols="40"></textarea>
                                        <script type="text/javascript">
                                            CKEDITOR.replace('quedesc');
                                        </script>

                                        <div class="d-flex align-items-center pt-2">
                                            <div class="mr-3">
                                                ``` <code class="badge bg-gray border border-gray text-gray">code</code> ```
                                            </div>
                                            <div class="mr-3 fw-bold">**bold**</div>
                                            <div class="mr-3 font-italic">*italic*</div>
                                            <div>&gt;quote</div>
                                        </div>
                                    </div>
                                </div>



                                <!-- end input-box -->

                                <div class="input-box pt-2">

                                    <div class="form-group">

                                        <div class="custom-control custom-checkbox fs-13 mb-1">
                                            <input type="checkbox" class="custom-control-input" id="notifiedMe">
                                            <label class="custom-control-label custom--control-label" for="notifiedMe">Get notified by email when someone answers this question.</label>
                                        </div>

                                        <div class="custom-control custom-checkbox fs-13">
                                            <input type="checkbox" class="custom-control-input" id="youAgreeCheckBox">
                                            <label class="custom-control-label custom--control-label" for="youAgreeCheckBox">By asking your question, you agree to the <a href="privacy-policy.html" class="text-color hover-underline">Privacy Policy.</a></label>
                                        </div>

                                    </div>

                                    <div class="btn-box">

                                        <button type="submit" name="btnRequest" class="btn theme-btn">Publish your question</button>

                                    </div>
                                </div>

                            </form>
                        </div><!-- end card -->
                    </div><!-- end col-lg-8 -->








                    <!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="card card-item p-4">
                                <h3 class="fs-17 pb-3">Step 1: Draft your question</h3>
                                <div class="divider"><span></span></div>
                                <p class="fs-14 lh-22 pb-2 pt-3">The community is here to help you with specific coding, algorithm, or language problems.</p>
                                <p class="fs-14 lh-22">Avoid asking opinion-based questions.</p>
                                <div id="accordion" class="generic-accordion pt-4">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <button class="btn btn-link fs-15" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span><span class="text-color pr-2 fs-16">1.</span> Summarize the problem</span>
                                                <i class="la la-angle-down collapse-icon"></i>
                                            </button>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet-2 fs-14">
                                                    <li class="lh-18 text-black-50">Include details about your goal</li>
                                                    <li class="lh-18 text-black-50">Describe expected and actual results</li>
                                                    <li class="lh-18 text-black-50 mb-0">Include any error messages</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <button class="btn btn-link collapsed fs-15" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span><span class="text-color pr-2 fs-16">2.</span> Describe what you’ve tried</span>
                                                <i class="la la-angle-down collapse-icon"></i>
                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <p class="fs-14 lh-22 text-black-50">
                                                    Show what you’ve tried and tell us what you found (on this site or elsewhere) and why it didn’t meet your needs. You can get better answers when you provide research.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <button class="btn btn-link collapsed fs-15" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <span><span class="text-color pr-2 fs-16">3.</span> Show some code</span>
                                                <i class="la la-angle-down collapse-icon"></i>
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p class="fs-14 lh-22 text-black-50">
                                                    When appropriate, share the minimum amount of code others need to reproduce your problem (also called a
                                                    <a href="#" class="text-color hover-underline">minimum</a>, <a href="#" class="text-color hover-underline">reproducible example</a>)
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                </div><!-- end accordion -->
                            </div><!-- end card -->
                            <div id="accordion-two" class="generic-accordion">
                                <div class="card mb-3">
                                    <div class="card-header" id="headingFour">
                                        <button class="btn btn-link collapsed fs-15" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <span>Have a non-programming question?</span>
                                            <i class="la la-angle-down collapse-icon"></i>
                                        </button>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion-two">
                                        <div class="card-body">
                                            <p class="fs-14 lh-22 text-black-50 pb-2">
                                                <a class="text-color hover-underline d-block" href="#" target="_blank">Super user</a>
                                                Troubleshooting hardware and software issues
                                            </p>
                                            <p class="fs-14 lh-22 text-black-50 pb-2">
                                                <a class="text-color hover-underline d-block" href="#" target="_blank">Software engineering</a>
                                                For software development methods and process questions
                                            </p>
                                            <p class="fs-14 lh-22 text-black-50 pb-2">
                                                <a class="text-color hover-underline d-block" href="#" target="_blank">Hardware recommendations</a>
                                            </p>
                                            <p class="fs-14 lh-22 text-black-50 pb-2">
                                                <a class="text-color hover-underline d-block" href="#" target="_blank">Software recommendations</a>
                                            </p>
                                            <p class="fs-14 lh-22 text-black-50">Ask questions about the site on <a class="text-color hover-underline" href="#" target="_blank">meta</a></p>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <button class="btn btn-link collapsed fs-15" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <span>More helpful links</span>
                                            <i class="la la-angle-down collapse-icon"></i>
                                        </button>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion-two">
                                        <div class="card-body">
                                            <p class="fs-14 lh-22 text-black-50 pb-2">
                                                Find more information about <a class="text-color hover-underline" href="#" target="_blank">how to ask a good question here</a>
                                            </p>
                                            <p class="fs-14 lh-22 text-black-50">
                                                Visit the <a class="text-color hover-underline" href="#" target="_blank">help center</a>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- end card -->

                            </div><!-- end accordion -->
                        </div><!-- end sidebar -->
                    </div><!-- end col-lg-4 -->
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
        <script src="js/chosen.min.js"></script>
        <script src="js/bootstrap-tagsinput.min.js"></script>
        <script src="js/main.js"></script>
    </body>

    <!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/ask-question.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 May 2021 04:56:48 GMT -->
</html>