<?php
    session_start();
    if (!isset($_SESSION["login"])) {
    header( 'Location: index.php' );
    }
    else {}
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
    <style type="text/css">
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
            <li class="active"><a href="research.php">CASP Research</a></li>
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
            <li><a href="links.php">Links</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <h3><em>Why is this research study important?</em></h3>
      <p class="block">Cardiovascular disease (CVD), such as heart disease and stroke, is the leading cause of death in Canada and the second leading cause of death in Newfoundland and Labrador (NL). Having heart disease or a stroke may also result in long hospital stays, costly medications, and special heart procedures. Screening and early intervention for heart disease and stroke can lead to healthier lives for people as they age. In NL, screening for heart disease or stroke is not always consistently done for individuals aged 40-74 years. The Cardiovascular Assessment Screening Program (CASP) was developed for this study following discussions with health professionals and patients. The purpose of CASP is to identify high risk people and recommend management of risk factors according to current guidelines.</p>
      <hr>
      <h3><em>What is the purpose of this research study?</em></h3>
      <p class="block">To evaluate the effectiveness of CASP.</p>
      <hr>
      <h3><em>What will happen during the study and who will be involved?</em></h3>
      <p class="block">This study is a randomized controlled trial (RCT). Nurse practitioners (NPs) across NL who agree to participate will be randomly assigned to one of the two groups: the intervention or the control. The NPs in the intervention group will be asked to recruit, from their practice, about 30 individuals, aged 40-74 who have no established heart disease. The NPs will use the CASP tools to screen the individuals, recommend follow-up actions, as well as document actions and results. The control group will recruit 30 eligible patients and carry on with regular practice. The charts of the control group patients will be reviewed by the researchers. At the end of the study, the CASP tools will be given to NPs in the control group.</p>
      <hr>
      <h3><em>How long will it take for this research study to be completed?</em></h3>
      <p class="block">NPs in the intervention group will be expected to screen individuals over two visits. The initial assessment may take up to 30 minutes. The second visit appointment may take up to 40 minutes. The NPs in the control group will carry on with usual care; identifying patients and completing documentation will take five minutes per patient. For each NP, data collection will take 4-6 weeks and will be completed once 30 patients have been identified for the study. The researcher will review the charts of eligible patients in the control group.</p>
      <hr>
      <h3><em>What are the benefits of doing this research study?</em></h3>
      <p class="block">Evaluating and refining CASP can result in comprehensive and consistent screening by NPs with appropriate follow-up actions in patient-oriented research. Implementation of CASP will strengthen the participation of NPs in CVD prevention and health promotion and a valuable toolkit for CVD screening will be available to other health care providers in NL.</p>
      <hr>
      <h3><em>More information?</em></h3>
      <p class="block">Please contact Jill Bruneau NP PhD(c), Principal Investigator, Memorial University School of Nursing, 709-777-7258, <a href="mailto:jb4276@mun.ca">jb4276@mun.ca</a>.</a></p>
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