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
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <link type="text/css" href="login.css" rel="stylesheet" />
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
            <li class="active"><a href="tree.php">Decision Tree</a></li>
            <li><a href="links.php">Links</a></li>
          </ul>
        </div>
      </div>
    </nav>
            <div class="container-fluid">
                <div class="card">
                <p><span style="font-size: 1.5em">Hypertension</span></p><hr>
            <p>Initial therapy should consist of monotherapy with a thiazide diuretic; a β-blocker (in patients younger than 60 years); an ACE inhibitor (in nonblack patients); a long-acting CCB; or an ARB. If there are adverse effects, another drug from this group should be substituted. Hypokalemia should be avoided in patients treated with thiazide diuretic monotherapy.</p>

<p>Additional antihypertensive drugs should be used if target blood pressure levels are not achieved with standard dose monotherapy. Add-on drugs should be chosen from first line choices. Useful choices include a thiazide diuretic or CCB with an ACE inhibitor, ARB or a β-blocker. Caution should be exercised in combining a non-dihydropyridine CCB (amlodipine) and a β-blocker. The combination of an ACE inhibitor and ARB is not recommended.</p>
<p>α-Blockers are not recommended as first-line agents for uncomplicated hypertension.</p>

<p>Thiazide diuretics are recommended as additive antihypertensive therapy. For patients with chronic kidney disease and volume overload, loop diuretics are an alternative.</p>

<p>Routine laboratory tests that should be performed for the investigation of all patients with hypertension include: urinalysis; blood chemistry (potassium, sodium and creatinine); fasting blood glucose and/or glycated hemoglobin (A1C); fasting serum total cholesterol and high-density lipoprotein cholesterol, low density lipoprotein cholesterol and triglycerides; and standard 12-lead electrocardiography.</p>

<p>Antihypertensive therapy should be strongly considered if systolic blood pressure readings average 140 mm Hg or higher in the presence of macrovascular target organ damage. Antihypertensive therapy should be strongly considered if diastolic blood pressure readings average 90 mm Hg or higher in the presence of macrovascular target organ damage or other independent cardiovascular risk factors.</p>

<p>Persons with diabetes mellitus should be treated to attain systolic blood pressures of less than 130 mm Hg and diastolic blood pressures of less than 80 mm Hg. (These target blood pressure levels are the same as the blood pressure treatment thresholds.)</p>

<p>The use of home blood pressure monitoring on a regular basis should be considered for patients with hypertension, particularly those with: diabetes mellitus; chronic kidney disease; suspected nonadherence; demonstrated white coat effect; and blood pressure controlled in the office but not at home (masked hypertension).</p>

<p>For persons with diabetes and hypertension not included in the above recommendation, appropriate choices include (in alphabetical order): ACE inhibitors, angiotensin receptor blockers, dihydropyridine CCBs and thiazide/thiazide-like diuretics. If target blood pressures are not achieved with standard-dose monotherapy, additional antihypertensive therapy should be used. For people in whom combination therapy with an ACE inhibitor is being considered, a dihydropyridine CCB is preferable to hydrochlorothiazide.</p>

<p>In patients with systolic dysfunction, an ARB is recommended if ACE inhibitors are not tolerated.</p>

<p>For hypertensive patients with heart failure whose blood pressure is not controlled, an ARB may be added to an ACE inhibitor and other antihypertensive drug treatment. Careful monitoring should be used if combining an ACE inhibitor and an ARB due to potential adverse effects such as hypotension, hyperkalemia and worsening renal function. Additional therapies may also include dihydropyridine CCBs.</p>
<a href="https://www.hypertension.ca/en">Click here</a> to access Hypertension Canada.
                </div><br><br><br>
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