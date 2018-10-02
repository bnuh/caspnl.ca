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
                    <p><span style="font-size: 1.5em">Stroke</span></p><hr>
                <p>Those patients with symptomatic TIA with one-sided motor weakness of face, arm and or leg as well as a speech disturbance (aphasia) and acute vision loss in one eye is a medical emergency and need to go to the ER and have a CT angiogram and arrange for a carotid endarterectomy by a vascular surgeon.</p> 
    <p>For more information see www.strokebestpractices.ca</p>
    <p>Following the acute phase of a stroke, BP lowering treatment is recommended to a target of consistently less than 140/90 mmHg</p>
    <p>Strong consideration should be given to the initiation of antihypertensive therapy after the acute phase of a stroke or transient ischemic attack.</p>
    <p>Antiplatelet therapy: all patients with ischemic stroke or transient ischemic attack should be prescribed antiplatelet therapy for secondary prevention of recurrent stroke unless there is an indication for anticoagulation.</p>
    <p>Persons at risk of stroke and patients who have had a stroke should be assessed for vascular disease risk factors and lifestyle management issues (diet, sodium intake, exercise, weight, and alcohol intake, and use of oral contraceptives and hormone replacement therapy). They should receive information and counseling about possible strategies to modify their lifestyle and risk factors. Referrals to appropriate specialists should be made where required to provide more comprehensive assessments and structured programs to manage risk factors.</p>
    <p>Antiplatelet options and selection should depend on clinical circumstances:</p>
    <ul><li>ASA (81mg), </li>
    <li>Combined ASA (325 mg) and extended-release dipyridamole (200 mg) (Aggrenox), or </li>
    <li>Clopidogrel Plavix (75 mg) </li>
    </ul>

    <p>For the secondary prevention of stroke, patients with atrial fibrillation who have had a stroke/TIA should be treated with oral anticoagulation therapy. [Preferably a NOAC of your choice keeping in mind the patient’s renal function, age, etc. when deciding]. Warfarin usually increases bleeding risk so the newer NOACs are preferred for those with AF except for those patients with mechanical heart valves who need to take warfarin exclusively to reduce stroke risk].</p>
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