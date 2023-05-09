<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="Main Page">
    <?php 
            echo link_tag('css/bootstrap-reboot.min.css');
            echo link_tag('css/bootstrap.min.css');
            echo link_tag('css/bootstrap-grid.min.css');
            echo link_tag('css/bootstrap-icons.css');
            echo link_tag('css/sidebarjs.min.css');
            echo link_tag('css/styles.css');     
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E2XBB2166Q"></script>
    <!-- <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-E2XBB2166Q');

    </script> -->
</head>

<body>
    <!-- <?php
            $monthyear = "";
            switch ((int)$household[0]['month']) {
                case 1:
                    $monthyear = "Jan " . $household[0]['year'];
                    break;
                case 2:
                    $monthyear = "Feb " . $household[0]['year'];
                    break;
                case 3:
                    $monthyear = "Mar " . $household[0]['year'];
                    break;
                case 4:
                    $monthyear = "Apr " . $household[0]['year'];
                    break;
                case 5:
                    $monthyear = "May " . $household[0]['year'];
                    break;
                case 6:
                    $monthyear = "Jun " . $household[0]['year'];
                    break;
                case 7:
                    $monthyear = "Jul " . $household[0]['year'];
                    break;
                case 8:
                    $monthyear = "Aug " . $household[0]['year'];
                    break;
                case 9:
                    $monthyear = "Sep " . $household[0]['year'];
                    break;
                case 10:
                    $monthyear = "Oct " . $household[0]['year'];
                    break;
                case 11:
                    $monthyear = "Nov " . $household[0]['year'];
                    break;
                case 12:
                    $monthyear = "Dec " . $household[0]['year'];
                    break;
            }
    ?> -->
    <!-- Navigation --->
    <div class="container-fluid">
        <div class="row">
            <div id="sidebarView" sidebarjs>
              <div class="content">
                <div id="sidebarToggle" class="text-white" sidebarjs-toggle><i class="bi bi-chevron-left"></i></div>
                <nav class="navbar flex-column mt-3">
                  <h4 class="text-white text-left">Menu</h4>
                  <a class=" active mr-2 text-white text-left" href="#" role="button">Personal DTR</a>
                  <a class="mr-2 text-white text-left" href="#" role="button">Personal DTR Analytics</a>
                  <a class="mr-2 text-white text-left" href="#" role="button">Employee DTR</a>
                  <a class="mr-2 text-white text-left" href="#" role="button">Employee DTR Analytics</a>
                </nav>
                <nav class="navbar flex-column">
                  <a class="mr-2 text-white text-left" href="#" role="button">Active User Accounts</a>
                  <a class="mr-2 text-white text-left" href="#" role="button">Archived User Accounts</a>
                </nav>
                <nav class="navbar flex-column">
                  <a class="mr-2 text-white text-left" href="#" role="button">Change Password</a>
                  <a class="mr-2 text-white text-left" href="#" role="button">Logout</a>
                </nav>
              </div>
            </div>
            <nav id="sidebarMenu" class="col d-md-block sidebar collapse">
                <div class="sidebar-sticky pt-1">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <div id="sidebarToggle" class="text-white" sidebarjs-toggle><i class="bi bi-list"></i></div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col">
                <nav class="navbar navbar-expand-lg navbar-light text-white" style="background-color: #4C4E52 !important;">
                    <!-- <a class="btn btn-warning text-white" href="<?php echo base_url(); ?>" role="button"><i class="bi bi-house-door-fill"></i> National</a> -->
                    <h2>Daily Time Record</h2>
                    <?php if (isset($employee_id)) { ?>
                      <div class="text-right" style="margin-left: 1450px !important;">
                        <h5>Hello, <b><?php echo $first_name; ?></b></h5>
                      </div>
                    <?php } ?>
                </nav>

                <!-- <div id="main" class="jumbotron text-center">
                    <div class="jumbotron-content">
                        <h2>State of the Rice Sector in the</h2>
                        <h1>Philippines</h1>
                        <p class="lead"><i>What is the status of the rice industry?</i> Explore and get insights about the trend of the <br />key performance indicators of rice production, consumption, and market.</p>
                        <div class="card-note mx-auto rounded-pill bg-light">
                            <h6 class="text-dark p-1">Population: <strong>110.2 MILLION</strong> (PSA, 2021)</h6>
                        </div>
                    </div>
                </div> -->

                <!-- Body -->
                <!-- <div class="dashboard">
                    <div class="row">
                        <div class="col-4">
                            <div class="card primary mb-2 bg-primary text-center text-white">
                                <div class="card-body">
                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>productions" class="text-white stretched-link text-decoration-none card-main">Palay Production (2021)</a></h5>
                                    <h1 class="card-text font-weight-bold"><?php echo $production_all['value']; ?><i class="<?php echo $prod_caret; ?>"></i></h1>
                                    <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                        <p class="text-white">million metric tons</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card primary mb-2 bg-primary text-center text-white">
                                <div class="card-body">
                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>harvestareas" class="text-white stretched-link text-decoration-none card-main">Area Harvested (2021)</a></h5>
                                    <h1 class="card-text font-weight-bold"><?php echo $harvestarea_all['value']; ?> <i class="<?php echo $area_caret; ?>"></i></h1>
                                    <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                        <p class="text-white">million hectares</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card primary mb-2 bg-primary text-center text-white">
                                <div class="card-body">
                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>estyields" class="text-white stretched-link text-decoration-none card-main">Yield per Hectare (2021)</a></h5>
                                    <h1 class="card-text font-weight-bold"><?php echo $estyield_all['value']; ?> <i class="<?php echo $yield_caret; ?>"></i></h1>
                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning">
                                        <p class="text-white">metric tons per hectare</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="card secondary text-center">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>supplies" class="text-black stretched-link text-decoration-none card-sec">Supply (2020)</a></h6>
                                            <h1 class="card-text"><?php echo number_format($supply['value'] / 1000, 2); ?><i class="<?php echo $supply_caret; ?>"></i></h1>
                                            <div class="card-note w-100 mx-auto rounded-pill">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>supplies" class="text-black stretched-link text-decoration-none card-sec">Utilization (2020)</a></h6>
                                            <h1 class="card-text"><?php echo number_format($util['value'] / 1000, 2); ?><i class="<?php echo $util_caret; ?>"></i></h1>
                                            <div class="card-note w-100 mx-auto rounded-pill">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                            <div class="card secondary text-center mt-2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>consumption" class="text-black stretched-link text-decoration-none card-sec">Annual Per Capita Consumption (2016)</a></h6>
                                            <h1 class="card-text"><?php echo $actual_per_capita_values['KgPerYear']; ?><i class="<?php echo $kg_caret; ?>"></i></h1>
                                            <div class="card-note w-75 mx-auto rounded-pill">
                                                <p class="text-white">kilograms</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>consumption" class="text-black stretched-link text-decoration-none card-sec">Daily Per Capita Consumption (2016)</a></h6>
                                            <h1 class="card-text"><?php echo $actual_per_capita_values['GmPerDay']; ?><i class="<?php echo $gram_caret; ?>"></i></h1>
                                            <div class="card-note w-75 mx-auto rounded-pill">
                                                <p class="text-white">grams</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card secondary text-center">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left mb-5"><a href="<?php echo base_url(); ?>valuations" class="text-black stretched-link text-decoration-none card-sec">Value of Rice Production (2021)</a></h6>
                                            <h1 class="card-text"><?php echo number_format($latest_palay_valuation['value'] / 1000, 2); ?><i class="<?php echo $valuation_caret; ?>"></i></h1>
                                            <div class="card-note w-100 mx-auto rounded-pill">
                                                <p class="text-white">Billion Pesos</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="card-title text-center"><a href="<?php echo base_url(); ?>valuations" class="text-black stretched-link text-decoration-none card-sec text-uppercase">Percent Share to Value of Agricultural Production (2021)</a></p>
                                            <div><canvas id="ctxAgriShare"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card secondary text-center">
                                <div class="card-body">
                                    <h6 class="card-title text-left">Profitability Indicator (2020)</h6>
                                    <div class="row mt-3">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left ml-1"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Net Returns </a></h6>
                                            <h2 class="card-text mt-5">P <?php echo $net_returns['value']; ?><i class="<?php echo $net_caret; ?>"></i></h2>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Gross Returns</a></h6>
                                            <h2 class="card-text mb-2">P <?php echo $gross_returns['value']; ?><i class="<?php echo $gross_caret; ?>"></i></h2>
                                            <h6 class="card-title text-left mt-5"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Total Cost</a></h6>
                                            <h2 class="card-text mb-2">P <?php echo $total_costs; ?><i class="<?php echo $cost_caret; ?>"></i></h2>
                                        </div>
                                    </div>
                                    <div class="card-note w-100 mx-auto rounded-pill" style="margin: 23px 0;">
                                        <p class="text-white">per hectare per cropping season</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4">
                            <div class="card secondary text-center">
                                <div class="card-body">
                                    <div class="row"  style="margin-bottom: 16px;">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>impexports" class="text-black stretched-link text-decoration-none card-sec">Imports (2020)</a></h6>
                                            <h1 class="card-text" style="margin-top: 16px;"><?php echo number_format($supply_sources_values['SUImports'] / 1000, 2); ?><i class="<?php echo $imports_caret; ?>"></i></h1>
                                            <div class="card-note w-100 mx-auto rounded-pill">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>impexports" class="text-black stretched-link text-decoration-none card-sec">Exports (2020)</a></h6>
                                            <h1 class="card-text" style="margin-top: 16px;">&lt; 1<i class="bi bi-dash"></i></h1>
                                            <div class="card-note w-100 mx-auto rounded-pill">
                                                <p class="text-white">thousand m. tons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                            <div class="card secondary text-center mt-2">
                                <div class="card-body">
                                    <h6 class="card-title text-left">Rice Stock (<?php echo $monthyear; ?>)</h6>
                                    <div class="row">
                                        <div class="col border-right text-center">
                                            <h6 class="card-title"><a href="<?php echo base_url(); ?>stocks" class="text-black stretched-link text-decoration-none card-sec">Household</a></h6>
                                            <h1 class="card-text smaller"><?php echo $household[0]['value']; ?><i class="<?php echo $h_caret; ?>"></i></h1>
                                        </div>
                                        <div class="col border-right">
                                            <h6 class="card-title" style="font-size: 13.5px;"><a href="<?php echo base_url(); ?>stocks" class="text-black stretched-link text-decoration-none card-sec">Commercial </a></h6>
                                             <h1 class="card-text smaller"><?php echo $commercial[0]['value']; ?><i class="<?php echo $c_caret; ?>"></i></h1>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title"><a href="<?php echo base_url(); ?>stocks" class="text-black stretched-link text-decoration-none card-sec">NFA</a></h6>
                                            <h1 class="card-text smaller"><?php echo $nfa[0]['value']; ?><i class="<?php echo $n_caret; ?>"></i></h1>
                                        </div>
                                    </div>
                                    <div class="card-note w-50 mx-auto rounded-pill mt-1">
                                        <p class="text-white">million metric tons</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                            <div class="card primary bg-primary text-center mt-2">
                                <div class="card-body text-white">
                                    <h6 class="card-title text-center align-middle"><a href="<?php echo base_url(); ?>yieldcost/" class="text-white stretched-link text-decoration-none card-main-alt">Productivity Indicators</a></h6>
                                    <a href="<?php echo base_url(); ?>yieldcost/" class="text-white stretched-link text-decoration-none card-main-alt"><img class="d-block img-fluid mx-auto" style="height: 96px" src="<?php echo base_url(); ?>assets/ani_at_kita_logo.png"></a>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card primary bg-primary text-center text-white">
                                <div class="card-body">
                                    <h5 style="margin-top:10px;" class="card-title text-center"><a target="_blank" href="ttps://prism.philrice.gov.ph/dataproducts/" class="text-white stretched-link text-decoration-none card-main">Rice Area Map</a></h5>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                            </div>
                            <a target="_blank" href="https://prism.philrice.gov.ph/dataproducts/">
                                <div class="card mb-0">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/prism_smaller.jpg" alt="Card image cap">
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <div class="card secondary text-center">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Dry Palay Price (2021)</a></h6>
                                            <h1 class="card-text">P <?php echo $farmgate['value']; ?><i class="<?php echo $fg_caret; ?>"></i></h1>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Production Cost (2020)</a></h6>
                                            <h1 class="card-text mb-2">P <?php echo $total_costs_int; ?><i class="<?php echo $unit_caret; ?>"></i></h1>
                                        </div>
                                    </div>
                                    <div class="card-note w-50 mx-auto rounded-pill">
                                        <p class="text-white">per kilogram</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                            <div class="card secondary text-center mt-2">
                                <div class="card-body">
                                    <h6 class="card-title text-left">Rice Wholesale Prices (2021)</h6>
                                    <div class="row">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left ml-1"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Well-Milled</a></h6>
                                            <h1 class="card-text">P <?php echo $wholesale_sp['value']; ?><i class="<?php echo $ws_caret; ?>"></i></h1>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Regular-Milled</a></h6>
                                            <h1 class="card-text">P <?php echo $wholesale['value']; ?><i class="<?php echo $wg_caret; ?>"></i></h1>
                                        </div>
                                    </div>
                                    <div class="card-note w-50 mx-auto rounded-pill">
                                        <p class="text-white">per kilogram</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                            <div class="card secondary text-center mt-2">
                                <div class="card-body">
                                    <h6 class="card-title text-left">Rice Retail Prices (2021)</h6>
                                    <div class="row">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left ml-1"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Well-Milled</a></h6>
                                            <h1 class="card-text">P <?php echo $retail_sp['value']; ?><i class="<?php echo $rs_caret; ?>"></i></h1>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Regular-Milled</a></h6>
                                            <h1 class="card-text">P <?php echo $retail['value']; ?><i class="<?php echo $rg_caret; ?>"></i></h1>
                                        </div>
                                    </div>
                                    <div class="card-note w-50 mx-auto rounded-pill">
                                        <p class="text-white">per kilogram</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                    </div>
                    <?php echo $footer; ?>
                </div> -->
            </main>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sidebarjs.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chart.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>
    <script>
        var sidebarjs = new SidebarJS.SidebarElement();
    </script>
</body>

</html>
