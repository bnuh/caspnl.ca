<?php
//    session_start();
//    if (!isset($_SESSION["login"])) 
//   header( 'Location: index.php' );
//    }
//    else {}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Cardiovascular Assessment Screening Program</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link type="text/css" href="login.css" rel="stylesheet" />
  <style>
    svg { height: vmin; }
      .lab-gren { fill: rgba(249,1b30,232,0.5); transition:.6s fill; stroke:#5C5C5C;}
      .lab-gren:hover { fill: rgba(249,130,232,1); }
      .central{fill:rgba(238,233,129,0.5); transition:.6s fill;stroke:#5C5C5C;}
      .central:hover { fill: rgba(238,233,129,1); }
      .western{fill:rgba(61,104,177,0.5); transition:.6s fill;stroke:#5C5C5C;}
      .western:hover { fill: rgba(61,104,177,1); }
      .eastern{fill:rgba(87,179,71,0.5); transition:.6s fill;stroke:#5C5C5C;}
      .eastern:hover { fill: rgba(87,179,71,1); }
      body { padding-bottom: 60px }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default" style="border-radius: 0">
      <div class="container-fluid">
        <div class="navbar-header">
                <a class="navbar-brand" href="login.php">Cardiovascular Assessment Screening Program</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
            <li><a href="research.php">CASP Research</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Research Forms</a>
              <ul class="dropdown-menu">
                <li><a href="HeartHealthAssessment.pdf" target="_blank">Heart Disease and Stroke Risk Profile</a></li>
                <li><a href="CVScreeningChecklist.pdf" target="_blank">Cardiovascular Screening Form</a></li>
                <li><a href="EligibilityHeartHealthScreening.pdf" target="_blank">Eligibility for Hearth Health Screening</a></li>
                <li><a href="NPConsentScript.pdf" target="_blank">NP Script for Getting Patient Consent</a></li>
                <li><a href="HeartHealthyPlan.pdf" target="_blank">My Heart Healthy Plan</a></li>
                <li><a href="PatientResearchConsent.pdf" target="_blank">Patient Consent to Take Part in Research</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools</a>
              <ul class="dropdown-menu">
                <li><a href="https://www.mdcalc.com/framingham-coronary-heart-disease-risk-score" target="_blank">Framingham Risk Score Calculator</a></li>
                <li><a href="https://www.cdc.gov/vitalsigns/cardiovasculardisease/heartage.html" target="_blank">Heart Age Calculator</a></li>
                <li><a href="bmi-chart.gif" target="_blank")>Body Mass Index for Adults</a></li>
                <li><a href="https://www.diabetes.ca/diabetes-and-you/healthy-living-resources/weight-management/body-mass-index-bmi-calculator" target="_blank")>Body Mass Index Calculator</a></li>
                <li><a href="WaistCircumference.png" target="_blank")>Recommendations for Measuring Waist Circumference</a></li>
                <li><a href="AlgorithmForNPDecisionToScreen.pdf" target="_blank")>Algorithm for NP Decision to Screen</a></li>
              </ul>
            </li>
            <li><a href="providers.php">Provider Resources</a></li>
            <li><a href="patients.php">Patient Resources</a></li>
            <li><a href="tree.php">Decision Tree</a></li>
            <li class="active"><a href="links.php">Links</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <p><h4><em><a target="_blank" href="http://www.choosingwiselyNL.ca">Choosing Wisely</a></em></h4></p>
      <p><h4><em><a target="_blank" href="http://www.hypertension.ca">Hypertension Canada Guidelines</a></em></h4></p>
      <p><h4><em><a target="_blank" href="http://www.diabetes.ca">Canadian Diabetes Association Guidelines</a></em></h4></p>
      <p><h4><em><a target="_blank" href="http://www.hypertension.ca">Hypertension Canada Guidelines</a></em></h4></p>
      <p><h4><em><a target="_blank" href="http://www.csep.ca/guidelines">Physical Activity Guidelines</a></em></h4></p>
      <p><h4><em><a target="_blank" href="http://www.preventioninhand.com">C-CHANGE Guidelines</a></em></h4></p>
      <p><h4><em><a target="_blank" href="http://www.smokershelp.net">Smoker’s Help Line</a></em></h4></p>
      <p><h4><em><a target="_blank" href="https://www.carrotrewards.ca/en/">Carrot Reward Program</a></em></h4></p>
      <p><h4><em><a target="_blank" href="http://www.healthyeatingnl.ca/about">NL Health Eating Resource</a></em></h4></p>
      <p><h4><em><a target="_blank" href="http://www.heartandstroke.ca">Heart & Stroke Foundation</a></em></h4></p>
      <p><h4><em><a target="_blank" href="http://www.dietitians.ca">Dietitians of Canada</a></em></h4></p>
      <p><h4><em><a target="_blank" href="http://www.hc-sc.gc.ca">Health Canada</a></em></h4></p>
      <p><h4><em><a target="_blank" href="http://www.cmha.ca">Canadian Mental Health Association</a></em></h4></p>
      <p><h4><em><a target="_blank" href="http://www.obesitynetwork.ca">Canadian Obesity Network</a></em></h4></p>
      <p><h4><em><a target="_blank" href="http://www.strokebestpractices.ca">Canadian Stroke Best Practices</a></em></h4></p>
    </div>
    <footer class="navbar navbar-fixed-bottom container-fluid text-center">
          <p class="text-muted credit" style="color:#fff">
          <div class="row">
            <div class="col-xs-2 col-xs-offset-5">
              <a href="mailto:bryanm@Mun.ca?subject=CASP%20Feedback">Feedback?</a></p>
            </div>
            <div class="col-xs-5 col-sm-3 col-sm-offset-2">
            <span class="pull-right" style="color:#a9a9a9">
              <a href="http://bnuh.github.io">2017 Bryan Melanson</a></span>
            </div>
          </div>
      </footer>
  </body>
</html>