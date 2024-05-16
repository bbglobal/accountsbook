<style>
    nav {
        background-color: #fff !important;
        z-index: 1;
    }

    nav a {
        color: #000 !important;
    }

    .pricing-header p {
        margin: 0.5rem 0px 0px;
        font-size: 1.25rem;
        line-height: 2rem;
        text-align: center;
    }

    .pricing-header h3 {
        color: rgb(18, 19, 22);
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 16px;
    }
</style>
<?php
include 'header.php';
head("Our Prices");
?>
<section class="pricing-header">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 my-5 pt-5">
                <h1>
                    <q>AccountsBook freed me up from bookkeeping. Now I can focus on things that makes my business stronger, and competitive in the market. </q>
                </h1>
                <p class="text-center mb-5">Qasim Aslam, FOUNDER, Ecomm Workforce, Ecommerce Marketing Agency</p>
                <p>Join over hundreds of business owners who have simplified their bookkeeping, and grown their <br /> businesses with AccountsBook.</p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="pricing-header" style="background-color: #efefef;">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 my-5 pt-5">
            </div>
        </div>
    </div>
</section> -->

<section class="container">
    <div class="col-12 text-center mb-5">
        <h2>Our Pricing</h2>
    </div>

    <div class="row px-5">
        <div class="col-12 my-3">
            <ul class="price">
                <li class="header">Basic</li>
                <li class="grey">$199/month</li>
                <p class="build">billed semi-annually or $249 monthly</p>
                <li>
                    <strong>For individuals and business owners looking for accurate financials done by professional bookkeepers.</strong>
                </li>
                <li><i class="fa fa-circle" style="font-size:10px;"></i> Accurate monthly books</li>
                <li><i class="fa fa-circle" style="font-size:10px;"></i> Year-end tax-ready financial documents</li>
                <li><i class="fa fa-circle" style="font-size:10px;"></i> P&L, balance sheet, journal entry, and trial balance statements</li>
                <li><i class="fa fa-circle" style="font-size:10px;"></i> Unlimited, year round support from your bookkeeping team</li>
                <br>
                <li class="grey"><a href="signup.php" class="button">Sign Up</a></li>
            </ul>
        </div>

        <div class="col-12 my-3">
            <ul class="price">
                <li class="header" style="background-color:#ff8024">Catch Up</li>
                <li class="grey">$249/month</li>
                <p class="build">billed semi-annually or $249 monthly</p>
                <li>
                    <strong>For business owners behind on their books looking to catch-up. </strong>
                </li>
                <li><i class="fa fa-circle" style="font-size:10px;"></i> Reconcilation of overdue books</li>
                <li><i class="fa fa-circle" style="font-size:10px;"></i> Tax-ready financials for every year of completed books</li>
                <li><i class="fa fa-circle" style="font-size:10px;"></i> Everything included in the basic plan</li>
                <li class="grey"><a href="signup.php" class="button">Sign Up</a></li>
            </ul>
        </div>
    </div>
</section>

<section id="affordable" class="affordable">
    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                <h3 class="mb-3">Unlock discounts by referring us</h3>
            </div>
            <div class="col-12 ">
                <p class="py-2"><strong></strong>Refer us to a friend or a fellow businessman and get 50% off on two months of bookkeeping for every referral who becomes our client.</p>
                <!-- <p class="py-2"> <strong>Tax deductible</strong> Bench is fully tax deductible when our favorite time of year rolls around.</p>
                <p>Unlock extra savings at Bench with these exclusive offers.</p>
            </div> -->
            </div>
        </div>
</section>
<?php
include 'faq.php';
include 'footer.php';
?>