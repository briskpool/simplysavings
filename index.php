<?php 
	$currentPage = 'home'; // current page name....
	include 'header.php'; ?>


<!-- Navbar -->

<?php include 'navbar.php'; ?>

<!-- /Navbar -->

<!-- Main Content -->

<section class="main-content" data-bs-spy="scroll" data-bs-target="#main-navbar" data-bs-smooth-scroll="true"
    tabindex="0">

    <section class="main-banner banner-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content">
                        <h1>Savings.<br>Nothing More.<br>Nothing Less.</h1>
                        <p>
                            Looking to move your ISA or expand your portfolio?
                            <span style="font-style:italic; color:#7be2b5;">Simply Savings</span> makes investing and
                            account management easy with expert support and online tools.
                        </p>
                        <!-- <a href = "register.php" class = "btn btn-secondary-navy">
							Lets find whats right for you
						</a> -->
                        <div class="col-12 d-flex">
                            <a href="" target="_blank" style="pointer-events: none;" class="text-decoration-none">
                                <img src="images/icons/playstore.svg" style="height:60px; width:100%;">
                            </a>

                            <a href="" target="_blank" style="pointer-events: none;" class="ps-2 text-decoration-none">
                                <img src="images/icons/appstore.svg" style="height:60px; width:100%;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section" id="whyInvest">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-12 text-center">
                    <h2>Ways To Invest</h2>
                    <p>
                        Explore the diverse world of investment opportunities with our cutting-edge software. Harnessing
                        the power of the latest technology, our platform tailors your investment strategy to match your
                        desired returns and risk tolerance. Elevate your financial journey by choosing a solution
                        designed to optimize your investment outcomes at Simply Savings.
                    </p>
                </div>
            </div>
            <div class="row align-items-center wf-row justify-content-between">

                <div class="col-md-7 col-xxl-6">
                    <div class="ways-features">
                        <div class="ways-box">
                            <ul class="nav align-items-center">
                                <li class="nav-item">
                                    <img class="w-auto" src="images/icons/product1.svg" alt="feature-icon" />
                                </li>
                                <li class="nav-item">
                                    <div class="box-details">
                                        <h3>Simple Savings</h3>
                                        <p>If your savings are not meeting your needs, we offer a guaranteed 2% return
                                            per annum.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ways-box">
                            <ul class="nav align-items-center">
                                <li class="nav-item">
                                    <img class="w-auto" src="images/icons/product2.svg" alt="feature-icon" />
                                </li>
                                <li class="nav-item">
                                    <div class="box-details">
                                        <h3>Simple Growth</h3>
                                        <p>This will offer you between 3%-5% per annum depending on your level of
                                            investment.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ways-box">
                            <ul class="nav align-items-center">
                                <li class="nav-item">
                                    <img class="w-auto" src="images/icons/product3.svg" alt="feature-icon" />
                                </li>
                                <li class="nav-item">
                                    <div class="box-details">
                                        <h3>Simple Income</h3>
                                        <p>For those lucky enough to have a large investment portfolio we offer great
                                            returns without limitation.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 text-center">
                    <!-- <img class="w-100" src="images/content-img/red-boy.png" alt="boy" /> -->
                    <?php include 'indices.php'; ?>
                </div>
            </div>
            <div class="row invest-conten justify-content-center">
                <div class="col-12 col-xxl-11 position-relative">
                    <div class="inner-body">
                        <h2>Simple Savings,<br> Zero Hassle</h2>
                        <p class="d-lg-none">
                            <img class="w-100" src="images/content-img/Maskgroup.jpeg" alt="img" />
                        </p>
                        <p>
                            At Simply Savings we want to make investing easy and profitable for our
                            clients. We offer a range of investment options so that you can find the right one for you.
                        </p>
                        <a href="register.php" class="btn btn-primary-red">
                            Get Started
                        </a>
                    </div>
                    <div class="investment-img wow slideInUp">
                        <img class="w-100" src="images/content-img/Maskgroup.jpeg" alt="img" />
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="easy-saving" id="easysaving">
        <div class="container">
            <div class="row saving-guide">
                <div class="col-12 mb-3 mb-lg-5 text-center">
                    <h2>Saving Made Easy</h2>
                    <p>
                        Investing can seem complicated and overwhelming, but at Simply Savings, we believe
                        it should be easy and straightforward. That's why we've created a three step process for our
                        Simple Savings to make it simple for you to get saving.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="saving-step text-center">
                        <div class="step-number mx-auto">
                            <img src="images/icons/step1.svg" alt="Step1" />
                        </div>
                        <h3>Choose A Goal</h3>
                        <p>
                            Take a look at our user-friendly calculators online or on our mobile app and see which
                            savings goal works best for you.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="saving-step text-center">
                        <div class="step-number mx-auto">
                            <img src="images/icons/step2.svg" alt="Step2" />
                        </div>
                        <h3>Open An Account</h3>
                        <p>
                            Once you have set your sights on a specific savings goal, create an account and deposit your
                            funds. You are now earning interest.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="saving-step text-center">
                        <div class="step-number mx-auto">
                            <img src="images/icons/step3.svg" alt="Step3" />
                        </div>
                        <h3>Monitor Your Returns</h3>
                        <p>
                            By using our mobile app or online portal, you can view your interest being deposited daily
                            and watch your savings grow over 18-36 months.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faqs" id="faqs">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xxl-9 text-center">
                    <h2>Frequently Asked Questions</h2>
                    <p>
                        Find answers to some of the most commonly asked questions about Simply Savings. If
                        you can't find what you are looking for, please get in touch with our team. We will be happy to
                        help you.
                    </p>
                    <div class="faq-questions">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <div class="accordion-header mb-0" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Is there risk involved?
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-start">
                                        There is no risk involved in the "Simple Savings" Fund as we
                                        protect the capital for our investors.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header mb-0" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do I fund my account?
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-start">
                                        You can fund your "Simple Savings" account in the following ways:
                                        <ul class="mt-3">
                                            <li>Bank Transfer</li>
                                            <li>Direct Debit</li>
                                        </ul>
                                        The "Simple Growth" and "Simple Income" Funds support all the above methods
                                        and also allow direct deposits from multiple cryptocurrencies.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header mb-0" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        How long until I can withdraw?
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-start">
                                        Our "Simple Savings" accounts are flexible which means you can deposit and
                                        withdraw all, or a portion of your capital at any time.<br><br>
                                        The "Simple Growth" and "Simple Income" accounts have a minimum term of 30 days
                                        on
                                        withdrawal due to the returns on offer at Simply Savings.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header mb-0" id="headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefour" aria-expanded="false"
                                        aria-controls="collapsefour">
                                        Can I have multiple accounts?
                                    </button>
                                </div>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-start">
                                        Our "Simple Savings" Fund will allow you to split your savings into multiple
                                        'pots'. This means you can have an account for yourself, an account for your
                                        child, a general savings account, or whatever label you wish to put on it.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="bottom">Still Looking For An Answer?</p>
                    <a href="contact.php" class="btn btn-primary-red">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="fund-compare" id="cfund">

        <div class="container">
            <h2 class="text-center">How The Funds Compare?</h2>

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <p class="text-center">
                        No matter what your goals are, we have a fund that will help you reach them. Our team of experts
                        will help you choose the fund that's right for you, and our online tools make managing your
                        account easy.
                    </p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-3 g-4 mt-4 mt-lg-5">
                <!-- Simple Savings -->
                <div class="col d-flex">
                    <div class="card border-0 rounded-4 w-100 h-100" style="background: #e8f8ff;">
                        <div class="card-body rounded-4 d-flex flex-column h-100" style="border: 1px solid #cee3ed;">
                            <h5 class="card-title h4"
                                style="border-bottom: 1px solid #cee3ed; padding-bottom: 12px; color:#0968ba">Simple
                                Savings</h5>
                            <ul class="list-group list-group-flush small mt-3">
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>Hands Off</strong>
                                    <i class="bi bi-info-circle-fill ms-1" data-bs-toggle="tooltip"
                                        data-bs-title="No need for you to do anything, just watch your savings grow"></i>
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>24/7 Support</strong>
                                    <i class="bi bi-info-circle-fill ms-1" data-bs-toggle="tooltip"
                                        data-bs-title="We will be there via phone, email or social media whenever you want to talk"></i>
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>Flexible Term</strong>
                                    <i class="bi bi-info-circle-fill ms-1" data-bs-toggle="tooltip"
                                        data-bs-title="No fees for early withdrawal and no fees for topping up"></i>
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>Regulated Brokerage</strong>
                                    <i class="bi bi-info-circle-fill ms-1" data-bs-toggle="tooltip"
                                        data-bs-title="Ensure your money is not at risk from fraud or mistreatment"></i>
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>Annual Interest:</strong> 2% Guaranteed
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>Minimum Investment:</strong> £250.00
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Simple Growth -->
                <div class="col d-flex">
                    <div class="card border-0 rounded-4 w-100 h-100" style="background: #e6f9f0;">
                        <div class="card-body rounded-4 d-flex flex-column h-100" style="border: 1px solid #b1dfc6;">
                            <h5 class="card-title h4"
                                style="border-bottom: 1px solid #b1dfc6; padding-bottom: 12px; color: #167a4e;">Simple
                                Growth</h5>
                            <ul class="list-group list-group-flush small mt-3">
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>Hands Off</strong>
                                    <i class="bi bi-info-circle-fill ms-1" data-bs-toggle="tooltip"
                                        data-bs-title="No need for you to do anything, just watch your savings grow"></i>
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>24/7 Support</strong>
                                    <i class="bi bi-info-circle-fill ms-1" data-bs-toggle="tooltip"
                                        data-bs-title="We will be there via phone, email or social media whenever you want to talk"></i>
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>Flexible Term</strong>
                                    <i class="bi bi-info-circle-fill ms-1" data-bs-toggle="tooltip"
                                        data-bs-title="No fees for early withdrawal and no fees for topping up"></i>
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>Regulated Brokerage</strong>
                                    <i class="bi bi-info-circle-fill ms-1" data-bs-toggle="tooltip"
                                        data-bs-title="Ensure your money is not at risk from fraud or mistreatment"></i>
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>Annual Interest:</strong> 3%-5%
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>Minimum Investment:</strong> £5,000.00
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Simple Income -->
                <div class="col d-flex">
                    <div class="card border-0 rounded-4 w-100 h-100" style="background: #faefff;">
                        <div class="card-body rounded-4 d-flex flex-column h-100" style="border: 1px solid #e9d6f1;">
                            <h5 class="card-title h4"
                                style="border-bottom: 1px solid #e9d6f1; padding-bottom: 12px; color: #8943a9;">Simple
                                Income</h5>
                            <ul class="list-group list-group-flush small mt-3">
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>Hands Off</strong>
                                    <i class="bi bi-info-circle-fill ms-1" data-bs-toggle="tooltip"
                                        data-bs-title="No need for you to do anything, just watch your savings grow"></i>
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>24/7 Support</strong>
                                    <i class="bi bi-info-circle-fill ms-1" data-bs-toggle="tooltip"
                                        data-bs-title="We will be there via phone, email or social media whenever you want to talk"></i>
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>Regulated Brokerage</strong>
                                    <i class="bi bi-info-circle-fill ms-1" data-bs-toggle="tooltip"
                                        data-bs-title="Ensure your money is not at risk from fraud or mistreatment"></i>
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>Annual Interest:</strong> 7.2%
                                </li>
                                <li class="list-group-item bg-transparent border-0">
                                    <img src="images/icons/check.svg" width="18" class="me-1" />
                                    <strong>Minimum Investment:</strong> £50,000.00
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Register CTA -->
            <div class="row mt-4 mt-lg-5">
                <div class="col-12 text-center">
                    <a href="register.php" class="btn btn-secondary-navy">Register Account</a>
                </div>
            </div>

        </div>
    </section>


    <!-- <section>
        <div class="container mt-3 mb-5">
            <div class="row justify-content-center">
                <div class="col-12 mb-3">
                    <h2 class="text-center">Simply Savings is Featured In</h2>
                </div>

                <div class="col-12 col-md-12 col-lg-8 text-center mb-4">
                    <a href="https://finance.yahoo.com/news/market-trading-company-set-launch-124500276.html"
                        target="_blank"><img src="images/content-img/yahoo-finance.jpg" class="featuredin"
                            height="230px" alt="Yahoo Finance"></a>
                    <a href="https://www.marketwatch.com/press-release/market-trading-company-set-to-launch-the-ig-global-app-b8b5b8c5"
                        target="_blank"><img src="images/content-img/market-watch.jpg" class="featuredin" height="230px"
                            alt="Market Watch"></a>
                </div>

            </div>
        </div>
    </section> -->

    <section class="join-us">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <h2>Join Us and Invest</h2>
                    <p>
                        If you’re ready to go ahead and start investing, all you need to do is register and a member of
                        the team will get your account opened so you can deposit your savings.
                    </p>
                    <a href="register.php" class="btn btn-secondary-navy">Get Started</a>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- Cookies Modal -->
<div class="cookies-bg hidden">
    <div class="cookies-eu-banner">
        <div class="cookies-header pb-3">
            PLEASE READ AND ACCEPT
        </div>
        <div class="cookies-body py-3">

            The content of these promotions has not been approved by an authorised person within the meaning of the
            Financial Services and Markets Act 2000. Reliance on this promotion for the purpose of engaging in any
            investment activity may expose an individual to a significant risk of losing all of the property or other
            assets invested” (Article 48(5) and Article 50A(5)). FCA regulatory framework provides strict guidelines we
            must adhere to. Under FCA rules, this investment cannot be promoted to retail investors and must only be
            offered to qualifying high net worth and sophisticated investors, as detailed below. The information on this
            site may contain investments which are difficult to price and don't have a secondary market. This also means
            they're only suitable for certain types of investor:
            <br /><br />
            <b>Self-Certified High Net Worth Investor</b><br />
            An individual who has signed, within twelve months ending with the day on which communication is made, a
            statement to confirm they have an annual income of not less than £100,000, or net assets, excluding their
            primary residence, of not less than £250,000.<br /><br />

            <b>Self-Certified Sophisticated Investor</b><br />
            An individual who has signed, within the period of twelve months ending with the day on which communication
            is made, a statement to confirm that they have sufficient knowledge to understand the risks associated with
            engaging in investment activity in non-mainstream pooled investments.

            Under FCA regulations, it is essential to verify all of our prospective investors’ status prior to
            delivering any financial promotions or details of investment opportunities.

            To proceed, you must first confirm that you are one of the following types of investor. If you do not meet
            any of these criteria, you must not proceed any further.

            By clicking the below button, you can confirm that you fall into one of the investor categories above.
        </div>
        <div class="cookies-footer pt-3">
            <button type="submit" class="btn btn-primary-red">Accept</button>
        </div>

    </div>
</div>
<!-- Cookies modal end -->

<!-- /Main Content -->


<!-- Footer -->

<?php include 'footer.php'; ?>
<script src="js/cookies.js"></script>

<!-- /Footer -->