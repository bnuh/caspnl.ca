

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
      .lab-gren { fill: rgba(249,130,232,0.5); transition:.6s fill; stroke:#5C5C5C;}
      .lab-gren:hover { fill: rgba(249,130,232,1); }
      .central{fill:rgba(238,233,129,0.5); transition:.6s fill;stroke:#5C5C5C;}
      .central:hover { fill: rgba(238,233,129,1); }
      .western{fill:rgba(61,104,177,0.5); transition:.6s fill;stroke:#5C5C5C;}
      .western:hover { fill: rgba(61,104,177,1); }
      .eastern{fill:rgba(87,179,71,0.5); transition:.6s fill;stroke:#5C5C5C;}
      .eastern:hover { fill: rgba(87,179,71,1); }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default" style="border-radius: 0">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Cardiovascular Assessment Screening Program</a>
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
        <li class="active"><a href="providers.php">Provider Resources</a></li>
        <li><a href="patients.php">Patient Resources</a></li>
        <li><a href="tree.php">Decision Tree</a></li>
        <li><a href="links.php">Links</a></li>
      </ul>
    </div>
  </div>
  </nav>
    <div class="container-fluid" padding=20px>
      <center>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-250 50 2250 2500" width=0% id="canada-map">
            <g id="labgren-box" data-toggle="modal" data-target="#myModal" >
              <title>Labrador-Grenfell Health</title>
              <desc>
                  <p>
                    <b>Healthy Activity</b><br>
                    <a target="_blank" href="http://www.hc-sc.gc.ca/fn-an/alt_formats/pdf/food-guide-aliment/educ-comm/toolkit-trousse/poster-affiche-eng.pdf">Healthy Living Poster</a><br>
                    <a target="_blank" href="http://www.csep.ca/CMFiles/publications/GAQ_CSEPPATHReadinessForm_2pages.pdf">Getting Active Questionaire</a><br><br>
                    <b>Smoking Cessation</b><br>
                    <a target="_blank" href="http://www.hc-sc.gc.ca/hc-ps/tobac-tabac/quit-cesser/fact-fait/stages-etapes-eng.php/">Five Stages of Quitting<br>
                    <a target="_blank" href="https://www.canada.ca/content/dam/canada/health-canada/migration/healthy-canadians/publications/healthy-living-vie-saine/fni-tobacco-strat-2012-2017-pni-strat-tabagisme/alt/fni-tobacco-strat-2012-2017-pni-strat-tabagisme-eng.pdf">First Nations Federal Tobacco Control Strategy</a><br><br>
                    <b>Healthy Eating</b><br>
                    <a target="_blank" href="https://www.canada.ca/en/health-canada/services/canada-food-guides.html">Canada's Food Guides</a><br>
                    <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-lets-eat-healthy-canada/infographic-lets-eat-healthy-canada.pdf">Let’s Eat Healthy Facts Poster</a><br>
                    <a target="_blank" href="http://www.statcan.gc.ca/pub/82-625-x/2017001/article/14764-eng.htm">Fruit and Vegetable consumption 2015</a><br>
                    <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-marketing-to-kids/infographic-marketing-to-kids.pdf">Marketing Unhealthy Foods - Health Canada</a><br><br>
                    <b>Diabetes Management</b><br>
                    <a target="_blank" href="http://guidelines.diabetes.ca/CDACPG_resources/Vascular_Protection_Risk_Assessment_FINAL.pdf">Recommendations for Vascular Protection</a><br><br>
                    <b>Nutrition</b><br>
                    <a target="_blank" href="SeabirdIslandMobileDiabetesTeamHealthyPlate.pdf">Seabird Island Mobile Diabetes Team Healthy Plate</a><br>
                    <a target="_blank" href="TraditionalFoodsFactSheetsupdated.pdf">Traditional Foods Fact Sheets</a><br>
                    <a target="_blank" href="TreefOfLifeFoodGuideCycleOfLife.pdf">Tree of Life Food Guide Cycle of Life</a><br>
                  </p>
                </desc>
                <rect class="lab-gren" x="900" y="210" width="50" height="50" stroke="#5C5C5C" fill="rgba(249,130,232,0.5)" />
                <text x="1000" y="250" font-family="sans-serif" font-size="3em" fill="#5C5C5C">Labrador-Grenfell</text></rect>
              </g>
            <g id="central-box" data-toggle="modal" data-target="#myModal" >
              <title>Central Health</title>
              <desc>
                <p>
                <b>Healthy Activity</b><br>
                <a target="_blank" href="http://www.hc-sc.gc.ca/fn-an/alt_formats/pdf/food-guide-aliment/educ-comm/toolkit-trousse/poster-affiche-eng.pdf">Healthy Living Poster</a><br>
                <a target="_blank" href="http://www.csep.ca/CMFiles/publications/GAQ_CSEPPATHReadinessForm_2pages.pdf">Getting Active Questionaire</a><br><br>
                <b>Smoking Cessation</b><br>
                <a target="_blank" href="http://www.hc-sc.gc.ca/hc-ps/tobac-tabac/quit-cesser/fact-fait/stages-etapes-eng.php/">Five Stages of Quitting<br>
                <a target="_blank" href="https://www.canada.ca/content/dam/canada/health-canada/migration/healthy-canadians/publications/healthy-living-vie-saine/fni-tobacco-strat-2012-2017-pni-strat-tabagisme/alt/fni-tobacco-strat-2012-2017-pni-strat-tabagisme-eng.pdf">First Nations Federal Tobacco Control Strategy</a><br><br>
                <b>Healthy Eating</b><br>
                <a target="_blank" href="https://www.canada.ca/en/health-canada/services/canada-food-guides.html">Canada's Food Guides</a><br>
                <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-lets-eat-healthy-canada/infographic-lets-eat-healthy-canada.pdf">Let’s Eat Healthy Facts Poster</a><br>
                <a target="_blank" href="http://www.statcan.gc.ca/pub/82-625-x/2017001/article/14764-eng.htm">Fruit and Vegetable Consumption 2015</a><br>
                <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-marketing-to-kids/infographic-marketing-to-kids.pdf">Marketing Unhealthy Foods - Health Canada</a><br><br>
                <b>Diabetes Management</b><br>
                <a target="_blank" href="http://guidelines.diabetes.ca/CDACPG_resources/Vascular_Protection_Risk_Assessment_FINAL.pdf">Recommendations for Vascular Protection</a><br><br>
                <b>Nutrition</b><br>
                <a target="_blank" href="SeabirdIslandMobileDiabetesTeamHealthyPlate.pdf">Seabird Island Mobile Diabetes Team Healthy Plate</a><br>
                <a target="_blank" href="TraditionalFoodsFactSheetsupdated.pdf">Traditional Foods Fact Sheets</a><br>
                <a target="_blank" href="TreefOfLifeFoodGuideCycleOfLife.pdf">Tree of Life Food Guide Cycle of Life</a><br>
              </p>
              </desc>
              <rect x="900" y="310" width="50" height="50" stroke="#5C5C5C" fill="rgba(238,233,129,0.5)" />
              <text x="1000" y="350" font-family="sans-serif" font-size="3em" fill="#5C5C5C">Central Newfoundland</text>
              </g>
            <g id="western-box" data-toggle="modal" data-target="#myModal" >
              <title>Western Health</title>
              <desc>
                <p>
                <b>Healthy Activity</b><br>
                <a target="_blank" href="http://www.hc-sc.gc.ca/fn-an/alt_formats/pdf/food-guide-aliment/educ-comm/toolkit-trousse/poster-affiche-eng.pdf">Healthy Living Poster</a><br>
                <a target="_blank" href="http://www.csep.ca/CMFiles/publications/GAQ_CSEPPATHReadinessForm_2pages.pdf">Getting Active Questionaire</a><br><br>
                <b>Smoking Cessation</b><br>
                <a target="_blank" href="http://www.hc-sc.gc.ca/hc-ps/tobac-tabac/quit-cesser/fact-fait/stages-etapes-eng.php/">Five Stages of Quitting<br>
                <a target="_blank" href="https://www.canada.ca/content/dam/canada/health-canada/migration/healthy-canadians/publications/healthy-living-vie-saine/fni-tobacco-strat-2012-2017-pni-strat-tabagisme/alt/fni-tobacco-strat-2012-2017-pni-strat-tabagisme-eng.pdf">First Nations Federal Tobacco Control Strategy</a><br><br>
                <b>Healthy Eating</b><br>
                <a target="_blank" href="https://www.canada.ca/en/health-canada/services/canada-food-guides.html">Canada's Food Guides</a><br>
                <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-lets-eat-healthy-canada/infographic-lets-eat-healthy-canada.pdf">Let’s Eat Healthy Facts Poster</a><br>
                <a target="_blank" href="http://www.statcan.gc.ca/pub/82-625-x/2017001/article/14764-eng.htm">Fruit and Vegetable consumption 2015</a><br>
                <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-marketing-to-kids/infographic-marketing-to-kids.pdf">Marketing Unhealthy Foods - Health Canada</a><br><br>
                <b>Diabetes Management</b><br>
                <a target="_blank" href="http://guidelines.diabetes.ca/CDACPG_resources/Vascular_Protection_Risk_Assessment_FINAL.pdf">Recommendations for Vascular Protection</a><br><br>
                <b>Nutrition</b><br>
                <a target="_blank" href="SeabirdIslandMobileDiabetesTeamHealthyPlate.pdf">Seabird Island Mobile Diabetes Team Healthy Plate</a><br>
                <a target="_blank" href="TraditionalFoodsFactSheetsupdated.pdf">Traditional Foods Fact Sheets</a><br>
                <a target="_blank" href="TreefOfLifeFoodGuideCycleOfLife.pdf">Tree of Life Food Guide Cycle of Life</a><br>
              </p>
              </desc>
              <rect x="900" y="410" width="50" height="50" stroke="#5C5C5C" fill="rgba(61,104,177,0.5)" /></rect>
              <text x="1000" y="450" font-family="sans-serif" font-size="3em" fill="#5C5C5C">Western Newfoundland</text>
            </g>
            <g id="eastern-box" data-toggle="modal" data-target="#myModal" >
              <title>Eastern Health</title>
              <desc>
              <p>
                <b>Healthy Activity</b><br>
                <a target="_blank" href="http://www.hc-sc.gc.ca/fn-an/alt_formats/pdf/food-guide-aliment/educ-comm/toolkit-trousse/poster-affiche-eng.pdf">Healthy Living Poster</a><br>
                <a target="_blank" href="http://www.csep.ca/CMFiles/publications/GAQ_CSEPPATHReadinessForm_2pages.pdf">Getting Active Questionaire</a><br><br>
                <b>Smoking Cessation</b><br>
                <a target="_blank" href="http://www.hc-sc.gc.ca/hc-ps/tobac-tabac/quit-cesser/fact-fait/stages-etapes-eng.php/">Five Stages of Quitting<br>
                <a target="_blank" href="https://www.canada.ca/content/dam/canada/health-canada/migration/healthy-canadians/publications/healthy-living-vie-saine/fni-tobacco-strat-2012-2017-pni-strat-tabagisme/alt/fni-tobacco-strat-2012-2017-pni-strat-tabagisme-eng.pdf">First Nations Federal Tobacco Control Strategy</a><br><br>
                <b>Healthy Eating</b><br>
                <a target="_blank" href="https://www.canada.ca/en/health-canada/services/canada-food-guides.html">Canada's Food Guides</a><br>
                <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-lets-eat-healthy-canada/infographic-lets-eat-healthy-canada.pdf">Let’s Eat Healthy Facts Poster</a><br>
                <a target="_blank" href="http://www.statcan.gc.ca/pub/82-625-x/2017001/article/14764-eng.htm">Fruit and Vegetable consumption 2015</a><br>
                <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-marketing-to-kids/infographic-marketing-to-kids.pdf">Marketing Unhealthy Foods - Health Canada</a><br><br>
                <b>Diabetes Management</b><br>
                <a target="_blank" href="http://guidelines.diabetes.ca/CDACPG_resources/Vascular_Protection_Risk_Assessment_FINAL.pdf">Recommendations for Vascular Protection</a><br><br>
                <b>Nutrition</b><br>
                <a target="_blank" href="SeabirdIslandMobileDiabetesTeamHealthyPlate.pdf">Seabird Island Mobile Diabetes Team Healthy Plate</a><br>
                <a target="_blank" href="TraditionalFoodsFactSheetsupdated.pdf">Traditional Foods Fact Sheets</a><br>
                <a target="_blank" href="TreefOfLifeFoodGuideCycleOfLife.pdf">Tree of Life Food Guide Cycle of Life</a><br>
              </p>
              </desc>
              <rect x="900" y="510" width="50" height="50" stroke="#5C5C5C" fill="rgba(87,179,71,0.5)" /></rect>
              <text x="1000" y="550" font-family="sans-serif" font-size="3em" fill="#5C5C5C">Eastern Newfoundland</text>
            </g>

              <g id="labgren" data-toggle="modal" data-target="#myModal" >
                <title>Labrador-Grenfell Health</title>
                <desc>
                  <p>
                    <b>Healthy Activity</b><br>
                    <a target="_blank" href="http://www.hc-sc.gc.ca/fn-an/alt_formats/pdf/food-guide-aliment/educ-comm/toolkit-trousse/poster-affiche-eng.pdf">Healthy Living Poster</a><br>
                    <a target="_blank" href="http://www.csep.ca/CMFiles/publications/GAQ_CSEPPATHReadinessForm_2pages.pdf">Getting Active Questionaire</a><br><br>
                    <b>Smoking Cessation</b><br>
                    <a target="_blank" href="http://www.hc-sc.gc.ca/hc-ps/tobac-tabac/quit-cesser/fact-fait/stages-etapes-eng.php/">Five Stages of Quitting<br>
                    <a target="_blank" href="https://www.canada.ca/content/dam/canada/health-canada/migration/healthy-canadians/publications/healthy-living-vie-saine/fni-tobacco-strat-2012-2017-pni-strat-tabagisme/alt/fni-tobacco-strat-2012-2017-pni-strat-tabagisme-eng.pdf">First Nations Federal Tobacco Control Strategy</a><br><br>
                    <b>Healthy Eating</b><br>
                    <a target="_blank" href="https://www.canada.ca/en/health-canada/services/canada-food-guides.html">Canada's Food Guides</a><br>
                    <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-lets-eat-healthy-canada/infographic-lets-eat-healthy-canada.pdf">Let’s Eat Healthy Facts Poster</a><br>
                    <a target="_blank" href="http://www.statcan.gc.ca/pub/82-625-x/2017001/article/14764-eng.htm">Fruit and Vegetable consumption 2015</a><br>
                    <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-marketing-to-kids/infographic-marketing-to-kids.pdf">Marketing Unhealthy Foods - Health Canada</a><br><br>
                    <b>Diabetes Management</b><br>
                    <a target="_blank" href="http://guidelines.diabetes.ca/CDACPG_resources/Vascular_Protection_Risk_Assessment_FINAL.pdf">Recommendations for Vascular Protection</a><br><br>
                    <b>Nutrition</b><br>
                    <a target="_blank" href="SeabirdIslandMobileDiabetesTeamHealthyPlate.pdf">Seabird Island Mobile Diabetes Team Healthy Plate</a><br>
                    <a target="_blank" href="TraditionalFoodsFactSheetsupdated.pdf">Traditional Foods Fact Sheets</a><br>
                    <a target="_blank" href="TreefOfLifeFoodGuideCycleOfLife.pdf">Tree of Life Food Guide Cycle of Life</a><br>
                  </p>
                </desc>
                <path class="lab-gren" d=" M1065.9,1639.6l-0.6,6.2l-1.9,3.2l0.5,3l-4.3,1.5l2.6,3.1l-0.9,2.5l-5.4,6l-3.5,1
                  c0,0-2.9-2.5-3.9-3.5s-8.5-7-8.5-7c-0.3-3.5-16-5-16-5c-5.5-2.8-2.8-8-3.3-8.5s7-9.5,9.8-15.3s6-21.5,6-21.5
                  c-3.3-14.5-23.8-16.8-23.8-16.8l-22.6-8.8l-0.8-1.3c0.1-1.2,1.1-1.6,1.4-2.5c0.6-2.2,1.2-4.8,2.3-6.8c0.6-1.3,1.9-2.5,2.4-3.8
                  c0.9-2.3,0.6-4.7,2-6.9c1.5-2.4,3.9-3.9,5.3-6.6c1.6-3.2-0.4-7.2,2.6-9.6c1.3-1.1,3.6-2.5,5.3-2.5c1,0,3.9,2.4,5.6,2.8
                  c2.8,0.7,8.8-0.3,9.2-3.9l-0.6-0.6c-2.7-0.1-8.7,2.8-10.1,1.9c-0.4-0.3-0.7-0.9-0.9-1.2c-0.3-0.4-0.6-0.8-0.5-1.3
                  c1.3-0.1,2.7,0.8,3.5-0.9l-0.1-0.8c-1-1.3-3.2-0.6-4.3,0.1h-0.8l-0.5-0.6c-0.6-3.3-0.7-2.7-2.6-5.3c-0.5-0.6-0.5-1.4-1.2-1.9
                  c-1.6-0.4-2.1,1.8-5.5-0.1l-0.2-0.7c1.4-1.7,3.2-3.7,5.5-4.3l0.7,0.4c0.3,0.4,0.3,1.1,0.1,1.6l0.9,0c3.2-1.9,6.8-1.3,10.2-3.5
                  c0.4-0.9,0.6-1.8,1.2-2.6c0.9-0.2,2,0.7,3.2,0.4c0.4-0.1,0.8-0.3,1.2-0.5c1.3-0.7,2-1.9,3.2-2.6c1-0.6,2.4-0.9,3.3-1.6
                  c0.1-0.1,1.5-1.9,1.6-2c0.7-1.4,0.8-3.1,1.7-4.4c1.9-2.6,8.2-6.9,7.9-10.2c-0.2-0.4-0.6-0.9-0.9-1.2c0-0.7,0.5-1.8,1.2-2
                  c1.5,0,2.4,0.3,3.7-0.6l0.1-0.8c-1.4-2.1-4-1.5-6-1.2l0.3-0.9c-0.2-1.1-0.9-1.6-0.5-2.9c0.6-0.6,1.7-0.5,2.4-0.2l0.5-0.6
                  c0.2-1.3-1.5-2.5-2.7-2l-0.5,0.8l-0.6,0.4c-0.8-0.5-1.7-0.7-2.5-1.2c-0.4-0.7-0.1-1.5-0.4-2.2c-1.2-3.4-3.1-3.3-5.4-4.9
                  c0.9-0.2,2-0.5,2.9-0.5c0.8,0,5.2,1,5.6,1.7c-0.4,0.4-0.7,0.9-1,1.5c0.4,1.2,2.6,2.7,3.9,2.6c0.7-0.5,1.1-1.3,1.8-1.7
                  c0.4-0.2,0.9-0.1,1.4-0.2c1.4-0.3,3.1-1.8,3.5-3.2c0.1-1.5-2.2-3.2-3.6-3c-0.4,0.1-0.9,0.3-1.4,0.4c-0.7-0.6-1.4-1.2-2.3-1.5
                  l-0.4-0.7c1.1-0.1,2.2,0.1,3.2,0.1c1.9,0,4.7-1.2,6.1-2.4c0.7-0.6,1.1-1.9,1.3-2.8c0.3-1.1,0.6-2.6,0-3.7c0.6-1.8,5.5-2.2,7.2-3.8
                  c2-1.8,0-2.8-0.3-4.2c-0.1-0.5,0-1.1-0.1-1.6c-0.2-0.8-1.1-1.1-1.4-1.8l0.3-0.9c0.9-0.4,1.7-1.2,2.5-1.7c0.5,0.4,1,0.7,1.6,1
                  c0.4,0,1.1-0.3,1.3-0.6l0.3-0.9c-0.6-0.4-1.2-1.2-1.2-2c-0.7-0.9-1.8-1.6-2.9-2l-0.5-0.7c-0.3-2.2,3.1-3.2,4.1-4.6
                  c-0.1-5.9,2.7-5.2,3.1-7.8c1.8-0.7,1.6-2.1,2.8-3.1c0.8-0.7,2.3-1.1,3.2-1.8c1.2-0.9,2.2-2.4,3.6-3.1c1.7-0.8,3.7-1.3,5.4-2.2
                  c1.4-0.7,2.5-1.7,3.8-2.5c1.1-0.6,2.3-0.8,3.4-1.4c0.7-0.3,1.3-0.7,2-0.9c1.4-0.4,2.6,0.8,4,0.3c2.8-1.1,4.4-3.6,6.7-5.3
                  c2.9-2,6.3-2.7,9.4-4.3c2.7-1.4,4.7-4.2,7.5-5.6c1.5-0.8,3.5-0.4,5-1.2c0,0,11.1-7.6,11.3-7.7c0.8-0.7,1-1.4,1.5-2.3
                  c0.4-0.2,1-0.3,1.4-0.5c1.9-1.1,5.5-7.3,8.2-5.6l0.2,0.7c-0.2,0.5-0.4,1.2-0.4,1.7l0.9,0.4c1.5-0.2,2.5-2,4-2l0.7,0.5
                  c-0.5,1.4-2.6,2.5-3.3,3.8c-0.5,0.8-0.4,1.8-0.9,2.7c-1.1,1.7-2.7,2.6-1.5,5.1c1.1,0.1,1.9-1.3,3.6-1.1l0.3,0.6
                  c-0.3,0.7-0.7,0.8-1.1,1.3c-0.6,0.8-0.6,1.9-1.1,2.7c-0.6,1-1.6,1.7-2.1,2.7l0.1,0.8c0.8,0.8,4.4,0.7,5.3,0
                  c0.4-0.4,0.6-0.9,1.1-1.2l0.8,0.2c0.5,0.7,1.4,1.2,2.2,1.4c5.3-2,4.9,0.2,8.6,1.8c1,0.4,2.3-0.1,3.3,0.5c0.8,0.4,1.3,1.2,2.3,1.2
                  c1-0.5,1.8-0.5,2.6-1.4c-0.7-0.7-2.2-0.6-3.1-0.4c-0.8-0.3-1.4-1-1.7-1.8c-0.8-0.4-1.7-0.3-2.4-0.9c-0.8-1.7,0.1-3.6-0.3-5.3
                  l-0.9-0.4c-3.5,1.8-5.7-4.9-2-7.4l0.8,0.5l0.3,0.8c-0.4,1.2-1.3,2.4-1.4,3.7l0.3,0.6l0.6-0.4c0.5-1.4,1.6-1.9,2.1-3
                  c0.2-0.5,0.2-1.2,0.5-1.7c0.6-0.9,5.2-3.6,6.4-4l0.4,0.7l-0.4-0.9l-0.5,0.7c-1.2,0.4-2.7,1.2-2.9,2.6c0.4,0.6,2.3,3.4,2.7,3.8
                  c0.7,0.2,3.6,0.9,4.1,0.8l0.6-0.4l-0.2-0.7l-1.3-1.1c0.9-0.4,1.9-0.4,2.8-0.8c1.7-0.8,2.8-2.3,4.3-3.4c0.5,0.3,1.1,0.6,1.5,1.1
                  c0.5-0.1,1-0.2,1.5-0.2l0.6,0.6c-0.3,0.8,0,1.5-0.1,2.4l0.4,0.6l0.8,0c0.3-0.8-0.1-1.6,0.2-2.4l0.6-0.5c1.1,0.6,1.8,1.6,3,2
                  c0.5,0,1-0.1,1.4-0.3l0.5,0.6c0.3,1.1,0.1,4.1-1.3,4.3c-0.9,0-1.8-0.2-2.6-0.5c-0.5-0.5-0.9-1.2-1.3-1.9l-0.7,0.1l-0.3,0.9
                  c0.6,2.4,2.4,1.9,3.6,3.1c-0.2,1.9-0.2,4.2-1.7,5.7l-0.7,0.3c-0.7-0.5-1.1-1.2-1.7-1.8l-0.9-0.3l-0.1,0.8l-0.5,0.6
                  c-1.3,0-2.7-0.9-3.9,0.1c0.9,1.3,2.6,1.6,3.9,2.4c0.3,0.6,0.6,2.2,1.1,2.4l0.7-0.2c0.6-0.7,0.5-1.6,1.2-2.2l0.6,0.6
                  c0.9,2.4-0.2,6-2.5,7.1l0,0.8c0.3,0.2,0.7,0.9,0.6,1.3c-0.1,1.1-1,1.5-1.4,2.4c-0.4,0.9-0.2,3-0.3,4.1c-0.8,0.8-1.2,2.1-2.1,2.7
                  c-1.5-1.2-2.4-2.8-3.7-4.2l-0.9-0.1c-0.6,0.4-0.8,1.5-0.7,2.2l-0.6,0.6l0.1,0.8c0.7,0.6,1.9,1.6,1.9,2.5c-0.3,0.7-1.1,1.2-1.8,1.4
                  c-1.1-0.2-2.3-0.8-3.4-0.8l-0.3,0.9c0.5,1,1.5,1.5,1,2.7l-0.6,0.5l0.2,0.7l0.7,0.6l0.1,0.7l-0.5,0.2c-2.6,1-4.4-3.1-6.4-3.9
                  c-1.7-0.7-3.1,0.5-4.8-0.1c-1.5-0.5-2.3-2-3.7-2.6c-3.3-1.3-8.5-0.9-11.1,1.6c-3,0.4-2.9-4.6-6.4-4.7l-0.6,0.4
                  c0.2,0.7,0.8,1.3,1.3,1.9l0.1,0.8c-0.4,0.4-2.2,0.8-2.8,0.8c-2.8-1.4-3.8-4.7-6.1-5.6l-0.6,0.6c0,1.1,0.9,2-0.2,3l-0.8-0.5
                  c-0.1-0.5-0.4-0.9-0.6-1.3c-0.9-0.7-2-0.5-3-0.2c-0.2,0.8,0.3,1.4,0.3,2.2c-0.2,0.5-0.7,1-1.1,1.4c-0.1,0.6,0.1,0.9,0.2,1.5
                  c0.1,0.8-0.4,1.7-0.5,2.5c1.8,0.3,3.4,0.2,4.5,1.8c0.8,0.1,1.4-0.3,2.2-0.3l0.6,0.6c0,0.2,0.1,0.5,0.1,0.7c0,0.5-0.1,1.1-0.1,1.6
                  c0.1,1,0.7,1.9,0.8,2.9l-0.5,0.7c-0.8-0.1-1.5-0.1-2.3,0l-0.6,0.5l0.1,0.7c0.8,0.6,1.7,0.8,2.6,1.2l0.4,0.6l-1.2,1
                  c-1.1,0.1-3.5,0.1-4.4,0.8l-0.3,0.9c1,1,4.6,0.9,5.9,2.1l0.1,0.7l-0.4,0.9l0.1,0.8c0.5,0.2,1.1,0.5,1.6,0.8
                  c0.3,0.6,0.3,1.5,0.6,2.1c0.2,0.4,0.8,0.8,1.1,1.2c0.4,0.5,0.5,1.2,0.9,1.8c0.2,0.3,0.1,0.1,0.3,0.4l0.4,0.4
                  c0.7,0.3,1.6,0.2,2.2-0.3l0-0.8c-0.5-0.6-1.3-1-1.6-1.8c0.3-0.5,0.6-1.2,0.6-1.8c-0.5-0.5-0.9-1.3-0.7-2l0.7-0.3l0.2,0.3
                  c1.2,0,2.1,1.2,3.4,0.7c1.2-2.1,5-4.9,7.3-5.7c1.4,0.9,1.1,1.7,2,2.4c1.2,0,2.4-0.8,3.7-0.6c1.9,0.2,1.7,1.6,2.6,2.7
                  c1.1,1.3,3.1,1.5,3.8,4.1c-0.9,0.9-2.6,0-3.3,1.5c-0.7,1.6,1.6,3.5,2.2,4.7c0.9,1.8-0.7,4.1-1.4,5.7c0.7,1.8,0.6,2.2-0.4,3.8
                  c-0.5,0.8-0.7,1.6-1.4,2.3c-0.8,0-1.4,0.5-2.2,0.3c-0.6-0.4-1.2-1.2-1.1-1.9l-0.9-0.3c-0.4,0.3-0.8,1-0.9,1.6
                  c0.2,0.6,1.5,2.9,2.1,3.1l0.9,0.1l0.4,0.7c-0.9,1-3.4,3.7-3.7,4.8c-0.1,0.5,0,1.1-0.1,1.6c-0.2,1.1-1.2,2-1.9,2.9l0.1,0.8
                  c0.4,0.4,0.9,0.7,1.5,1c0.1,0.3,0.2,4.4,0,4.7l-0.6,0.4h-0.8l-0.6-0.5c-0.4-1-0.4-2.1-0.2-3.1l-0.5-0.6l-0.7,0.3
                  c-0.6,1.1-2,4.8-1.8,6.1l0.5,0.6c0.7-0.3,1.4-0.4,2.1-0.8l0.2,0.8c-0.7,0.9-1.4,1.9-2.1,2.8c-0.7,1.2-0.5,2.2-0.9,3.5l-0.5-0.6
                  c-0.3-1.5,0.4-3.2-0.8-4.5l-0.8-0.3l-0.7,0.3c-0.7,1.1-1.2,2.3-1.9,3.3c-0.8,1.2-2,2.3-2.7,3.5c-0.7,1.3-0.8,3.1-1.4,4.5
                  c-0.2,0.4-2.7,5-2.8,5.1c-0.6,0.6-1.5,0.3-2,1c0.2,2-2.1,3.7-2.9,5.3c-0.8,1.5-1.9,5.2-4.4,4.6l-0.6-0.6c1.1-3.4,1-2.5,1.2-5.9
                  c-0.3,0.8-0.9,1.6-1.5,2.1l-0.8,0c-2.6-2.2-1.1-5.5-0.9-8.2c0.2-2.9-0.4-5.6,0.1-8.6c0.4-1.9,1.6-3.6,1.9-5.5
                  c0.1-0.5,0-1.1-0.4-1.4c-1.8,0.7-3.1,1.3-4.5,2.6c-0.4,1.5-0.9,3.1-1.6,4.5l0.4,0.6c0.5,0,1-0.1,1.4-0.4l0.7,0.5
                  c0.5,0.8-0.2,9.5-0.9,10.3l-0.7,0.3l-0.5,0.7c0,0.8,0.8,1.9,0.9,2.8c0.1,1-0.5,2.2-0.5,3.3c0,1.6,0.7,1.7,0.9,2.7
                  c0.2,1.4-0.1,2.7-0.2,4c1.1,0.6,2.3,1.2,3.5,1.6l1.4-0.5c0.3,0.3,0.7,0.9,0.7,1.3c-0.3,1.5-1.5,5.8-3.5,5.8l0.1,0.3
                  c-0.6,1.4-1.5,1.2-2.4,2c-0.9,0.9-1.1,2.3-1.9,3c-0.5,0.1-1,0.2-1.5,0.1c-0.5,0.2-0.9,0.6-1.2,0.9c-0.8,3.4-1.3,2-2.1,3.3
                  c-1.2,1.9-1,5.3-1.2,7.5l-0.6,0.4c-2.3-0.1-4.8-0.8-7-0.4l-0.2,0.8c0.9,1.2,4.1,0.7,5.7,1.6l0.5,0.7c-0.1,0.2-2.7,4-3,4.3
                  c-1.1,1.3-2.9,0.9-2.6,3.5c-1.6,2.5-4.5,4-6.2,6.4c-1.1,1.7-1.2,3.6-2.1,5.3c-1.2,1.1-3.4,0.3-4-1.2c-0.2-0.4-0.1-1-0.3-1.4
                  c-1.4,0.3-3.1,0.1-4.4,0.7l-0.5,0.7l0,0.8c2.2,1.7,5.9-0.8,7.4,3.7c0.2,0.5,0.1,1.8,0,2.4c-0.3,1.3-1.2,2.4-1.6,3.6
                  c-0.8,1.9-1.1,4.4-2.1,6.2c-0.2,0.5-0.8,0.9-1.1,1.3c-0.7,1.2-0.9,3.1-2.6,3.5l-0.3,0.9c0.3,0.7,0.2,1.4,0.5,2.1
                  c-0.6,2.9-3.6,4.6-5,7c-0.4,0.7-0.7,1.9-1.4,2.4c-0.6,0.5-1.3,0.5-1.9,1.2c-0.8,0.9-1,2.4-2.1,2.9c-0.6,0.3-4.2-0.3-5.3-0.3
                  l-0.6,0.5l0.1,0.8c1.1,0.6,3.2,3.6,3.2,3.6L1065.9,1639.6z"/>
                <path id="lab-gren-2" class="lab-gren" d="M331,77.1c1.1,0.3,6,1.5,5.9,3.1c1,0.8,1.6,2,2.7,2.7c0.7,0.5,1.6,0.7,2.2,1.3l-0.2,0.6
                    c-1.8,1.4-5.6-1.7-7.1-2.5c-1.6-0.9-3.2-1.2-4.9-1.7c-3.6-1.2-7.5-4.8-12.4-3.2c-0.4,0.1-2.8,2.1-3.5,2.5
                    c-1.2,0.6-3.5,0.9-4.3,1.9c-0.3,0.3-0.4,0.8-0.7,1.1c-0.7,0.8-1.7,1.4-2.4,2.3c-0.2,0.2,0,0.5-0.1,0.7c0.3,0.3,0.9,0.5,1.3,0.4
                    c1.8-0.4,9.5-6.2,10.5-6c1.2,0.2,5.2-0.2,5.7,0.5c3.9-0.1,4.4,2.6,7.2,3.9c0.6,0.3,2.9,0.8,3.2,1.2c0,0.2,0,0.4,0,0.7l-0.3,0.4
                    c-0.3,0.1-1.1,0.8-1.5,1c-3.1,1.8-5.9,3.5-7.6,6.7l0.3-0.1c1.2-0.4,3.1,0.5,4.4,0.3c0.5-0.1,1.1-0.3,1.7-0.4
                    c0.8-1.1,6.5-6.3,7.7-6.6c0,0.2,0.3-0.2,0.1-0.1c0.5-0.2,0.9-0.3,1.4-0.2c0.2,0.2,0.4,0.6,0.4,0.8c-0.2,0.1-0.3,0.4-0.4,0.6
                    c-0.9,0.8-2.3,1.4-2.7,2.7c0.7,0.1,1.7-0.4,2.1-0.3c0.3,0.2,0.4,0.6,0.5,0.9c0.8,2.4,0.6,2.1,2.1,4.2l-0.2,0
                    c-0.7,2.3-11.7,5.3-10.8,9c1,0.3,2.1,0.5,2.8,1.3c0,0.3,0,0.7-0.1,1.1l-0.3,0l-0.1,0.4c-0.7,0.4-1.6,0.7-2.1,1.2
                    c-0.7,0-1.5,0.4-2.2,0.4c-3.4,0-6.4-1-9.9-0.1c-2.6,0.7-2.2,2.1-3.7,3.1c-3,2-7,3.7-10.3,5.3c-1.4,0.7-3,1-4.3,1.9
                    c-0.5,0.4-1,0.9-1.3,1.4l-0.1,1.3l0.7,1c0.4,0.2,1.2,0.3,1.6,0c0.9,0,3-1.7,3.8-2.1c0.8-0.5,1.8-0.7,2.6-1.1c3.6-2,7.6-5.1,11-7
                    c0.8-0.5,1.7-0.6,2.6-0.8c0.5-0.3,1.2,0.3,1.8,0.1c2.7-0.8,4.8-1,7.7-1.2l0.2,0c0.6-0.2,2.4,1.1,4.2-0.9c1.7-1.9,2.3-4.7,3.2-7
                    c0.6-1.6,2.7-3,4-1.3c0.3,0.3,0.2,1,0.3,1.5l-0.2,0.3c0,0.5-0.2,0.9-0.4,1.3c-0.3,1.3,0.2,2.7-0.1,4c-0.1,0.1-0.3,0.3-0.3,0.5
                    c-0.3,0-0.6,0-0.8-0.1c-0.3-0.5-0.4-1.1-0.8-1.4l-0.5-0.1c-1,0.2-1.9,1.5-1.8,2.6c0.7,1.4,2.6,1.8,4,2.4c0.7,0.9,0.1,1.8,0.2,2.7
                    c-0.2,0.5-0.6,1.1-1,1.5c-0.1-0.1,0.1,0.3-0.2,0l0.2-0.1l-0.1,0.2c-1.9,3-6.2,3-9.3,2.5l-0.2-0.2c-0.7,0.1-1.5-0.2-2.2-0.2
                    c-2.5-0.1-5.3-0.2-7.7,0.6l0.3,0.1c2.3,0.5,8.4-1.5,9.9,0c3.2,2.7,5.5,1.1,7.8,4.4c-0.2,1.4,0.9,2.4,0.1,5.1c-1.8,1.5-3.6,1-5.3,2
                    l0.2-0.1c-0.3,0.4-0.7,0.2-1.1,0.4c-1.9,0.8-3.3,1.9-5,3.1c0,1,0,0.8,0.8,1.6c0.6,0.1,1.8-0.1,2.3-0.4c1.6-1.1,3.7-3.5,5.6-3.6
                    c1.4-0.1,5.1,0.9,5.9-0.9c0.4-1.1-0.4-3.5-0.3-5c0.6-0.5,0.6-1.4,1.1-2c1.3-1.6,3-2.7,5-3.2c0.4-0.1,3,0.3,3.4,0.4l0.6,0.1
                    c1-0.2,2.3-0.2,3.1-1c0-0.2,0-0.4,0.1-0.6l-0.6-0.6c-3.4-0.9-10.5,0.8-9.5-5c0.2-0.9-0.1-1.9,0.4-2.8c0.1-0.1,0.3-0.2,0.5-0.2
                    c0.2,0.2,0.4,0.4,0.6,0.7c0.2,0.2,0.7,0.6,0.7,0.9c1.3,1,2.6-0.3,3.9-0.4c1,0.3,2.3,1.1,3.2,1.2c0.4,0,0.9-0.1,1.3,0.1l0.4,0.4
                    l-0.2,0.6c0.1,0.6,0.2,1.2,0.6,1.6c1,0.2,2.4,0,3-0.9c0.2,0,0.7,0.4,0.9,0.5c0,0.4,0.3,1,0.6,1.3c-0.1,1.5,1.1,4.5,1,5.2
                    c-0.5,0.6-0.7,1.2-1.5,1.6c-1,0.2-2.1-0.7-3.6-0.4c-1.2,0.2-2.1,1.4-3.2,1.9c-2,0.9-4.9-0.2-5.7,2.7l0.4,0.9
                    c1.7,0.5,4.7-0.5,6.5-0.8c2.4,1,3.2,2.4,3.7,4.7c-0.3,0.6-0.3,1.4-0.7,2.1c-0.8,1.7-4.5,3-6.3,3.4c-0.1,0.1-0.1,0.3-0.2,0.4
                    l0.3,0.1l0.6-0.2c0.1,0,1.6,0.1,2,0.2c1.2,0.1,5.7-1.1,6.5-2.2c0.1-0.6,0.4-1.5,0-2c0.3-0.6,0.1-1.6,0.9-2
                    c0.5-0.2,1.2-0.2,1.7,0.1c0.5,0.6,0.5,1.6,0.6,2.3c-1.6,4.3-4.4,6.4-4.7,11.4c-0.3,0.4-0.1,4.5-0.2,5.4c-0.4,0.4-0.6,0.9-1.2,1.3
                    c-2.9,2.2-5.2-2-6.7-1.9c-0.2,0-0.3,0.2-0.4,0.4c-0.2,3.5,1.2,5.5,3.4,8.1c1,1.3,1.9,3,2.9,4.3c0.4,0.5,2.1,2,2.2,2.5
                    c0.8,0.5,1.4,0.8,2.2,1.2c2.6,1,9.7,0.8,12.3,0.2c1.5-0.4,4.3-1.6,5.7-1.6c0.7,0,1.1,0.3,1.3,1c0,1.3-1.7,2.5-2,3.7
                    c0.7,0.9,2.7-0.2,3.8,0.3l0.2,0.5L385,174c-0.3,0.2-0.8,0.6-0.9,1c-0.6,0.3-1.4,0.9-2,0.9c-2.2,0.1-4.1-2.5-7.2-0.8
                    c-4.5,2.4-2.3,7.3-4.1,11c-1.1,2.2-2.8,4-4,5.9c-0.2,0.2-0.4,1.2-0.4,1.5c0.1,0.1,0.4,0.3,0.5,0.4c0.4-0.2,0.8-0.3,1.1-0.4
                    c2-3.3,5.7-4.5,6.1-5c1.1-1.5,0.3-6.8,2-9.8c0.2-0.3,0.6-0.6,0.8-0.9c0.3-0.2,0.8-0.3,1.2-0.3c1.2,0.4,2.6,1,3.5,1.7l0.2,0.3
                    l1,0.5c0,0.3,1.2,0.8,1.5,0.9c0.4,0,1-0.3,1.4-0.5c0.1-0.5,1.2-1.8,1.7-1.9c4,0.3,4,2.7,2.7,5.8l-0.1,0.2c-0.4,0-0.7,0.3-1.1,0.3
                    c-0.7,0.1-1.5-0.1-2.1,0c-2.1,0.4-3.2,2.7-4.1,4.3c-0.9,1.6-2.2,3-2.9,4.7c-0.2,0.5-0.1,1.1-0.4,1.6l0.4,0.4
                    c2.5,1.2,3.8-3.9,4.9-5.1c1.6-1.7,3.5-3.1,5.5-4.1c0.1,0,0.5-0.1,0.7-0.1c0.6,0,1.4,0.2,2,0.4c1,0.3,9.9,5.2,10.4,5.7
                    c0.6,0.7,1.1,2,0.7,2.9c-1,2.4-3.6,4.3-4.5,6.8c-0.9,2.4-0.5,6.1-3.3,7.2c-1.9-0.1-3.7-0.8-5.6-1c-4-0.3-17.4,0.3-18.8,5
                    c0.1,0.3,0.2,0.6,0.4,0.8c0.6,0.6,1.8,0.7,2.5,0.4c1.1-0.4,2-1,3-1.2c2.5-0.5,7.4,0.3,10.1,0.6c1.5,0.4,2.7,1,4.2,0.8
                    c0.6-0.1,1.1-0.3,1.7-0.3c0.8,0.8,1.5,1.8,2.7,1.9c2-0.4,1.9-1.9,3.3-2.9c3-1,1.6,2.7,0.9,3.9l0.5,0.6c1.3,0.2,2.4-1.3,3.8-1.5
                    l0.4,0.4c0.1,0.8-1.5,2.8-1.8,3.9c-0.4,1.6-0.3,3.5-0.8,5.1c-0.4,1.1-1.1,2.1-1.5,3.1c-0.3,0.6-0.2,1.4-0.4,2
                    c0,0.1-0.3,0.8-0.4,0.9c-0.1,0.2-0.3,0.4-0.5,0.5c-1.9,1.9-3.8,1.1-5.4,2.4c0,0.1-0.1,0.3-0.1,0.4c3.5,1.5,5.2-0.5,8-2
                    c0.1-0.4,1.1-1.3,1.4-1.8c1.1-1.8,2.2-3.7,2.4-5.8c0-0.5-0.2-1-0.1-1.5c0-0.5,0.3-1,0.3-1.6l0.5-0.6c0.3-0.1,0.7-0.2,1-0.2
                    c1.4-0.8,1.6-3.3,3.1-4.7l0.7,0.2l0.2,0c0.6,0,1.5,2,2.6,2.2c2.2,0.5,5.4-1.7,7.4,0.3l0.2,0.6c-0.2,0.3-0.3,0.6-0.4,0.9
                    c1,1.2,1.5,2.4,1.7,3.9c-1.2,2.2-1.7,1.9-0.9,4.8c-0.5,0.7-0.2,1.8-0.9,2.6c-1.3,1.6-2.5,0.9-4.5,4.7c-1.4,0.3-3.6,0.9-4.9,1.6
                    l-0.1,0.2c0.3,0.4,1.5,0.6,2,0.8c3.1,0.9,2.8,0.6,5.4-0.6c1.2-0.5,2.7-0.8,3.6-1.8c4.1-4,3.2-8.3,10.7-8.8c0.7,0,2.2-0.2,2.7,0.3
                    l0,0.6c-1.4,1.5-1.9,4.1-3.6,5.5c-1,0.2-2.2,0.2-3.1,0.4c0,0.3,1.4,1.3,1.7,1.7c0.5,1.5-0.9,2.2-1.7,3.1c-0.3,0.3-0.3,0.7-0.7,0.9
                    c-0.2,1.2-0.2,1.5,0,2.7l0.3,0.2c0.8-0.9,3-4,4.3-3.9c0.9-0.8,3.3-0.7,4.6-0.2c2.2,1.8-2.9,5.9-3.7,7.4c-0.7,1.2-0.4,2.8-1.1,3.9
                    c-0.7,1-5.5,4.7-6.7,5c-3,0.3-4.6-0.1-6.4,2.7l-0.1,0.3l-0.2,0.2l-0.2,0.3l-0.4,0.6c-0.3,0.4-0.6,0.5-1,0.7
                    c-0.6,0.3-1,0.6-1.6,0.8c-1.1,0.2-2.1-0.1-3.2-0.1c-2-0.1-3.9,0.4-5.8,0.9c-2.3,0.7-6.8,2.1-9,1.4c-1.3-0.4-1.7-1.7-3-2.2
                    c-2.2-0.9-5.1-0.1-7.4-0.6c-1.4-0.3-2.7-1.7-4.1-1.7c-1.3,0-3.8,1.4-5.1,1.9c-0.6,1-0.8,2.3-1.4,3.3c-0.9,1.4-3.8,2.6-4.1,3.9
                    l-0.1,0.2l0.3,0.6c1.2,1.2,6.5-2,7.3-3.1c0.7-1,1-2.1,1.8-3.4c0.7-0.3,4.9,0.1,5,0.7c-1,1.7-1.9,2.9-2.1,5c-0.1,2,2,9.4,3.9,10.2
                    c3,0.5-0.6-9.2-0.4-10.9c0.3-0.3,0.5-0.7,0.8-1c0.9-0.8,7.2-1.5,8.3-0.7c-0.1,0.4,0.1,1,0.3,1.2c-0.3,0.8,0.3,2.1,1.1,2.3h0.7
                    c3.5-0.2,7-2.5,10.2-3.5c0.8-0.3,1.7-0.2,2.5-0.4c2.9-0.5,10,2.6,10.5-0.1c-0.3-0.7,0.1-1.5,0.5-2.1l0.8-0.3
                    c-0.2-0.1-0.1-0.1-0.1-0.1c0.2-0.1,0,0,0,0c1.3-0.5,3-1.5,4.3-1.7c0.9,0.8,2.4,1.3,3.5,1.1c1.8-0.8,1.1-1.9,1.6-3.1
                    c0.3-0.6,2-2.9,2.6-3.1h0.7c2.7,1.2,4.1,1,6.8,1.5l0.6,0.6c0.2,0.8-0.1,1.6-0.1,2.4c0.1,0.3,0.7,0.4,0.9,0.4
                    c0.9-0.2,1.6-1.4,2.8-1c1.6,0.7,2,2.7,4.8,2.9c2.3,0.2,4.8-1.6,7,0.1l0.3,0.6c0.1,1.2-0.7,1.8-1.6,2.3c-2.6,1.4-4.4,1.7-7.3,1.3
                    c-0.7-0.1-1.4-0.4-2.1-0.4c-2.3-0.1-4.5,0.5-6.9,0.4c-0.4,0-0.8,0-1.1,0c-0.4,0.1-0.9,0.2-1.2,0.4l0.1,0.4
                    c1.5,1.6,7.6,1.4,10.1,2.6l0.4,0.5l0,0.6c-0.9,1.2-2.7,0.9-3.8,1.8c-1,0.9-2.9,4.7-3.9,6.3l0.2,0.3l0.6,0.3l0.6-0.1l0.2-0.3
                    c2-0.5,2.2-2.2,3.1-2.5c0.5-0.5,1.1-1.3,1.9-1.7c1.7-1,4.1-1.6,6.1-1.3c0.5,1.1,0.8,2.7,0.2,3.8c-1.3,0.9-4.9,0.3-5.3,1.8l0.1,0.5
                    c1.5,0.8,5.4,0.6,6.2,2l-0.2,0.9c-1.2,0.9-3.3,0.9-4.1,2.1c-0.9,1.4-1.2,3.5-2.8,4.4c-2.1,1.3-6.7,1.3-8.4,3.2
                    c0.4,0.2,0.8,0.3,1.1,0.4c3.8,0.9,7.4-1.2,9-0.8c0.2,0.4,0.4,0.7,0.7,1.1l0.6,0.2l0.9-0.2l0.2-0.3c0.2-0.7,2-2.9,2.7-3.3
                    c0.3,0,0.8,0.2,0.9,0.4c-0.1,2.3-3.4,3.6-2.3,6.9c1.7,1.6,3.1-0.7,4.1-1.7c0.5-0.5,1.1-0.8,1.6-1.4c0.1-0.6,0.3-1.1,0.4-1.6
                    c0.3-1.6-0.7-2.4,0.7-3.9c0.5-0.7,1.5-0.9,2.1-1.5c0.4-0.4,0.8-1.7,1.6-1.7c0.3,1,5.7,2.3,7,2.7c0.2,0.2,0.3,0.5,0.5,0.7
                    c0,0.2,0,0.4,0,0.6c-0.1,0-0.2,0-0.3,0.1c-2.5,0.9-3.7-0.5-5.7,1.7l0.1,0.5c-0.1,0.1-0.1,0.3-0.1,0.4c0.8,1,2.7,0.6,3.8,0.9
                    c1.7,0.5,2.1,2.3,3.6,3.1c1.4,0.8,3.7,0.9,4.8,1.6c0.6,0.4,1.3,1.9,1.6,2.5c1,1.9-1.6,4.6-0.9,8.6c-0.3,1.4-2.3,1-3.3,1.6
                    c-0.7,3.3-6.5,0.5-8.5,4.4l0.2,0.3l1,0.4l0.2,0.3c0-0.2-0.2-0.1-0.2-0.2c1.8,1.1,3.8,1.3,5.7,1.4c0.1,0,0.2-0.1,0.2,0
                    c2.5-0.3,4.4-2.7,6.8-2.8l-0.1-0.2c1.1,0,1.7,0,2.6,0.3c2.1,1.6,3.4,7.6,1.4,9.6c-1.5,1.4-3.7,1.4-5.5,2c-0.4,0.4-0.7,0.9-0.9,1.3
                    c0.6,1,1,2.8,0.6,3.9c-1.1,0.7-3,1.1-3.8,1.9c-1.3,1.2-2.4,2.2-4,3c-2.8,1.3-6.4,1.2-9,3c-1.2,0.8-1.6,2.2-2.7,3.1
                    c-0.4,0.3-1.8,0.3-2.3,0.7c-1,0.8-1.1,2.4-2.1,3.1c-0.4,0.1-0.8,0.2-1.2,0.3c-1.4,0.1-3-0.1-4.4,0.2c-1.1,0.2-2.2,0.7-3.4,0.7
                    c-0.7,0-2.1-0.8-2.7-1.3c-0.2-0.1-1.1-0.2-1.3,0c-0.2,0.7-0.4,1.5-1.2,1.8c-3.1-0.6-10.1-0.2-10.9-3.8l-0.5-0.2
                    c0,0.4-0.3,1.8-0.2,2.3c-1.2,1.5-7.8,4.8-7.9,5c0.1-0.2,0.7-0.3,0.9-0.3c0.7,0.2,8.1-2.2,9.6-2.5c1.1-0.3,4,0.5,5,1
                    c5.8,2.9-1.3,5.8-2.3,7.2c-0.6,0.9-1,3.3-1.8,4.7c-1.8,2.8-9.6,5.6-12.6,7.6c-0.3,0.8-0.4,2.1-0.8,2.8c-1.1,1.7-3.9,3-4.1,5.2
                    l0.4,0.3c0.2,0,0.4,0.1,0.6,0c5.3-1.5,5.1-4.7,7.8-6.7c0.7-0.5,5.4-2.3,7.2-3.5c2.8-1.9,5.9-6.4,8.1-9.2c1.2-1.5,2.7-2.8,4.1-4.2
                    c0.4-0.5,2.3-1.6,2.8-1.4c1.2-0.3,11.6-2.2,12.1-2.1c0.6,0.1,4.2,2.9,4.4,3.4l-0.2,0.8c-2.4,1.3-1.6,2.8-2.7,4.5
                    c-1.5,2.4-4.5,4-5,7.1l0.2,0.7l0.3,0.2c0.4-0.3,0.8-0.7,1.1-1.2c1.2-2.3,3.8-3.5,5.2-5.6c1.9-3,0.7-2.9,3.8-5.4
                    c0.5-0.4,1.4-1.1,2.1-0.8l0.4,0.6c0.2,1,0,2.1,0.1,3.1c0.4,0.2,0.8,0.3,1.3,0.4c0.9-0.3,2.1-0.7,2.8-1.4c1.3-0.7,2.5-4.6,5.4-5.1
                    c0.3-0.1,0.6,0.1,0.9,0l0.2,0c1.4,0.8,2.4,0,3.8,0c1.1,0.4,2.2-0.2,3.1-0.6c0.3,0.1,1,0.5,1.1,0.8c0.2,0.1,0.5,0.1,0.7,0.1
                    c0.3-0.2,1.2-3.2,1.8-3.9l0.6-0.1c-0.1,0-0.2-0.1-0.2,0c0.4-0.1,0.7-0.2,1.1-0.3l0.7,0.4c0.5,1.3-2.4,2.8-0.7,5.8
                    c0.3,0.2,0.9,0.4,1.3,0.4c0.5-0.3,0.7-1.1,0.6-1.7c0.7-0.9,0-6,3.8-4.4c0.8,0.3,1.7,0.7,2.6,0.9c0.2,0.1,0.2,0,0.3,0
                    c3.8-0.2,5.7-3.3,8.3-2.7c1.3,0.3,1.8,0.9,2.8,1.3c1.1,0.4,2.2,1.3,2.2,2.6c-0.9,1.8-3.3,2.3-4.5,3.7c-0.2,0.7-0.1,1.6,0.2,2.2
                    c-0.9,0.5-2,1.4-2.9,1.7c-2.4,3.6-2.3,2.7,0.4,5.5c0.4,0.4,0.5,1.6,0.8,2.2c-0.1,0.6-0.1,1-0.1,1.5l-0.8,1.3l-0.1,0.7
                    c0.2,0.4,0.8,0.6,1.1,1.2c-0.4,2.2-1,3.1-0.1,5.5c-0.1,0.6-1.2,2-1.9,2.1c-1.6-0.1-2.1-0.3-2.6-0.2c-0.5,0.1-0.9,0.5-2,1.6
                    c-0.5,0-1.3-0.1-1.8-0.4c-0.6,0.5-0.1,0.9-0.4,1.3l0.2,0.7l-0.2,0.9c-2.5,1.4-12.7-1.4-15.2,2.2c-0.7,1-1,2.7-1.6,3.8
                    c-0.4,0.8-1.8,2.5-1.4,3.5l-0.1,0.2c0.2,0.3,0.3,0.6,0.5,0.9c0.6,0.2,0.7,0.3,1.2,0c1.8-2.5,2.1-6.6,5.1-7.8c0,0.3,0.4,0,0.4-0.1
                    c0.8,0.1,0.8,0.3,1.6,0.4c1.4,0.1,2.7-0.7,4-0.5c2.6,0.3,5.2,2,7.8,0.4c1.2-0.8,1.5-2.3,2.3-2.8c0.2-0.1,0.5-0.1,0.7,0
                    c1.5,0.7,0.7,2.2,4.2,2c0.4,0.3,1.4,0.8,1.6,1.2c0.8,1.2,1.6,3.8,0.8,5.2l-0.7,0.2c-0.5-0.1-1-0.3-1.4-0.3
                    c-1.5,0.5-0.6,4.9-5.1,6.3c-4.5,1.5-7.1-0.3-10.6-0.6c-0.9-0.1-1.8,0.3-2.7,0.3c-5.2,0.3-8.6,3-13.7,3c-1.8,0.4-3.2-0.3-4.9-0.3
                    c-1,0-6.8,0.4-7.4,1l0.4,0.8c1.6,0.2,4.7,0.2,5.7,1.5c-0.4,0.8-0.4,1.9-1.1,2.5c-2.5,2.3-6,2.9-8.9,4.4c-1.9,1-3.1,2.5-5.2,3.2
                    c-1,0.3-3,0.2-3.6,0.9c0,0.2,0.1,0.6,0.3,0.7c3.2,1.8,3.8,0.2,6.6-0.4c0.2,0,0.5,0.2,0.6,0.4c-1,1-0.8,2.2-1.3,3.4
                    c-1.6,3.5-7.4,3.8-10.8,4.3c-1.8,0.2-4.1,1.4-5.5,2.6c-0.4,0.3-1.3,1-1.7,1.2c-0.1,0.1-0.8,0.3-0.5,0.4c0.2,0.1,0.9,0,1.1,0
                    c1.7-0.4,4-0.4,5.7-1.1c1.4-0.5,3-1.4,4.5-1.5c2-0.1,6.1,0.8,7.2,0.5c3.8-1.1,4.4-3.6,4.7-3.8c0-0.1-0.2-0.2-0.1,0l-0.2-0.1
                    c0.7-1.6-1.2-4.1,1-6.3c2.5-2.4,10.4-3.6,11.2-4.5l0.2-0.8c0-1.2,0.5-2.6,1.3-3.5c0.8-0.9,10.2-3.7,11.6-3.7l0.2,0.3
                    c-0.6,1.2-2,2-2.3,3.2l0.7,0.5c1.1,0.2,3.2-0.5,4-1.3c0.9-0.6,1.8-0.8,2.9-0.3c0.4,0.5,1,1,1.5,1.4c0.4,0,1.1-0.1,1.4-0.4
                    c0.4-1.1,0.6-1.8,1.3-2.7c1.1-0.5,2.1-0.5,3.2,0.1c1,0.3,2.1,2.9,3.9,3.1c1.2,0.1,1.7-1.4,2.4-2.1c0.8-0.8,1.9-1,2.6-2
                    c0.8-1.1,0.9-2.5,2.4-2.9l0.7,0.2c0.8,0.9,0.4,4.7-0.1,5.5l0.1,0.6c0.2,0.8,2,0,2.3-0.4c0.9-1,0.6-3.8,1.2-5.7
                    c2-1.9,4.5-1.7,7.1-1.8c2.9,2.1-6.7,8.2-7.4,12.1c0.4,1.2,2,1.3,2.3,3.2c0.2,1.3-0.8,2-0.7,2.5l0.7,0.3c3.4-0.7,1.4-4.3,1.7-6.3
                    l0.5-0.5c0.5-0.2,0.9-0.2,1.5-0.2c-0.1-0.1,0.5-0.1,0.6-0.1c0.5-0.2,1.1-0.6,1.7-0.8c1.6-0.3,6.5-1.4,7.5-0.1
                    c0.1,0.3,0.1,2.2-0.1,2.5c-1,0.4-5.6,0.9-5.8,1.6l0.4,0.6c1,0.3,2.7,0.1,3.4,0.8c-0.6,0.9-1.6,3.9-0.2,4.5c2.5,0.3,2.2-4.5,5-3.8
                    c1.5,1.1,1.5,2.9,2.6,4.3c0.1,0.4,0.1,0.8,0.1,1.2c-0.1,0.2-3.1,2.4-3.5,2.7c-1.3,0.9-2.5,2.4-4,2.9c-3.1,1-6.4-2.8-12.5-2
                    c-4,0.6-5.1,4.5-6.8,5.5c-1.9,1.1-3.9,0.6-5.4,1.9c-0.5,0.4-2.3,3.6-2.3,4.3c0.5-0.1,0.7,0.4,1.7,0c1.7-0.7,2.7-2.5,4.1-3.3
                    c2.4-1.5,6.6-3.2,9.4-3.1c0.7,0,1.4,0.2,2.1,0.3c0.7,0,1.5-0.1,2.2,0.1c0.7,0.2,1.1,0.6,1.8,0.9c0.7,0.4,1.9,0.3,2.4,0.9
                    c0,0.9-1.1,1.7-1.2,2.5c0.5,1.1,1.4,2.1,1.5,3.3c0.3,1.9-2.2,7.7,1.1,8.2c2.2-1.1,1.7-3.9,2.2-5.9c0.2-0.8,0.6-1.8,0.7-2.7
                    c0.1-1.2-0.9-1.8-0.6-3c0.3-1.4,3.2-5.1,4.6-5.3l0.6,0.4c0.3,1.6,0.3,2.8,0.1,4.3c-0.2,1.1,0.4,1.9,0.2,3.1
                    c-0.2,1-1.3,1.6-1.4,2.6l0.1,0.2c3.9,1.8,4.9-5.9,6.1-6.5l0.8,0.3c1.4,2.2,2.6,1.3,3.6,2.6c0.9,1.1,0,2.1,1.2,3.4l1.1,0.2l0.6-0.6
                    c-0.1-1.8-1-0.8-0.1-3.6c0.6-0.6,1.5-0.8,2.2-1.2c1.3-0.9,1.3-2.1,1.9-3.4c0.2-0.5,0.6-0.8,0.8-1.3l0.3,0.1l0.2,0.1l0.4,0.2
                    l0.3,0.1l0.8,0.5c0.4,0.2,0.8,0.5,1.1,0.8c0.6,0.7,0.4,1.5,1.3,2.3c0.6,0.2,1.2,0.2,1.8,0.4c1.2,0.7,1.2,4.8,1.8,5.4
                    c0.3,0.8,0.6,2.7,0.2,3.4c-1.5,2.3-7,5.7-7.2,8.3c0,0.1,1.7,1.8,1.8,2c-0.1,0.6-0.2,1.3-0.5,1.8c0.6,0.7,1,1.6,1.7,2.6
                    c0.4,0.1,1.1,0.8,1.3,0.8c0.1,0.2,0.5,0.7,0.7,0.8c1.4,0.2,3.3-0.9,4.7-1.2c1.2-0.2,3.6,1.9,4.2,2.9c-0.2,2.6,3.7,5.8,4.4,9
                    l-0.5,1.3c-0.5,0.5-1.2,0.6-1.7,1c0.1,0.9,2,2.8,2.7,3.5l0.6,0.1l0.4-0.2c0.7,0.2,1.5-0.1,2.2-0.1c0-0.3,0.9,0.2,1.1,0.2l0.3,0.5
                    c-0.2,0.5-0.4,1-0.5,1.5c0.2,0.4,0.6,1.4,1.1,1.6c0.1,1.8-0.1,4.8-2.7,4.7c-0.8,0-1.5-0.7-2.4-0.6c-0.3,0.6-1,1.1-1,1.8
                    c-0.3,0.2-1,0.7-1.4,0.8c-0.9,0.1-1.6-0.5-2.6-0.6c-2.2-0.1-6.9,2.9-8.3,4.6c-0.5,1.2,0.8,1.7,0.8,2.8c-0.6,1.4-7.1,5-8.7,4.6
                    c-2,0-2.7-1.9-4.7-2c-0.8-0.1-5.3,0.4-5.8,0.9c-0.8,0.8-4.1,7.6-4.3,8.5c-0.2,0.7-0.3,1.3-0.6,1.9c-0.2,0.3-0.5,0.4-0.6,0.8
                    c-0.3,0.3-0.7,0.4-1.1,0.5c-0.5,0.1-1,0.2-1.5,0c-2.4-1-3.9-2.9-6-4c-1.4-0.7-3.2-0.6-4.7-0.9c-1.3-0.2-2.3-0.9-3.5-1.4
                    c-0.6-0.2-1.6-0.8-2-1.3l-1.1-0.2c-0.2,0.2-0.4,0.7-0.4,1l0.5,0.6c0,0.1,0.3,0.1,0.2,0.2c0.2,0.5,0.6,0.7,1,1
                    c1.2,1.1,2.8,1.9,3.9,2.9c1,0.9,1.5,2.2,2.7,2.8c2,1.2,6.3,0.3,6.8,4l0.7,0.4l0.3,0c3,1.4,5.6-0.3,8.2-1.6c0.7-0.4,1.3-1.1,2-1.4
                    c2.1-1,3.4,1.1,7.4-2c0.5-0.4,1.1-0.7,1.4-1.2c0.4-0.1,1-0.1,1.4,0l0.2,0c0.3,0.4,1,0.3,1.4,0.4c1.2,0.2,2.2,0.6,3.4,0.7
                    c1.7,0.1,3.4-0.2,5,0.2c2.5,0.5,5.1,2.5,7.5,3.5c2.4,1.1,5.5,1.6,7.7,3.1c1.4,0.9,1.4,2.2,2.4,3c1.2,1,2.5,1.1,3.9,1.8
                    c0.8,0.4,1.4,1.1,2.1,1.6c0.1,0.5,0.3,1,0,1.6c-1.9,2-9.6-1.8-11-1l-0.4,0.5c0,0.2,0,0.5-0.1,0.8c1.3,1.5,4,1.3,5.3,2.8
                    c0.2,1.4-1.3,2.6-0.6,4.3c0.1,0.4,0.5,0.7,0.7,1.1c0.1,0.3,0,0.6,0.3,0.9c-0.1,0.6,0.3,1.1,0.1,1.7c-1.3,1.3-2.8,2.4-4.4,3.3
                    c-0.9,0.5-1.7,1.3-2.6,1.8c-2.5,1.2-5.6-1.5-8.4-0.5c1.5,4.6,4.5,3,6.3,3.9c0.3,0.5-0.3,1.1,0,1.6l0.6,0.4
                    c2.1,0.1,2.6-0.7,4.6,0.4c3.9,2.1,3.1,6.7,4.9,7.4c0.5,0,0.9-0.1,1.4-0.2c2.2-2.3,1.7-1.3,3.5-2.7c0.8-0.6,0.6-1.2,1.8-1.6
                    l0.8,0.4c0.8,2-1.2,4.6-1,6.4c0.1,0.1,0.2,0.3,0.4,0.3c1.1-0.3,2-2,2.7-2.9c1.3-1.5,2.7-2.6,4-3.9c0.9-0.9,1.7-2.1,2.7-3
                    c1-0.9,2.1-1.7,3-2.7c0.4,0,0.7-0.1,1.1-0.1c0.5,0.1,1.1,0.8,1.4,1.2l0.1,0.7l-0.3,0.8c-0.8,0.9-2.6,0.6-3.5,1.4
                    c-0.4,0.4-0.8,2.9-1.3,3.7c-0.6,1-2.6,2.1-2.7,3.1l0.2,0.4c-0.2,0.6,1.3,1.3,1.8,1.6c0-0.1,0.2-0.1,0.2,0.1c4.5,1.2,2.1-0.2,6-0.7
                    c2.1-0.3,4.3,0.5,6.5,0.2c1.1-0.1,2-0.6,3-0.8c5-1.4,6.7,1,10.3,3.9c2.5,2,3.7,3.1,4.6,6.4c-0.3,2.7-2.9,3.1-1.7,6.6
                    c0.7,0.5,2.3,2.1,2.6,2.9c0,0.4-0.2,0.8-0.3,1.1l-0.4,0.2c-0.9,1-1.2,2-1.6,3.1c0.2,0.2,0.4,0.3,0.6,0.5c0.5,0,1.2,0.3,1.6,0.6
                    l0.2,0.7c-0.7,2.2,1,3.2,0.3,4.8c-0.1,0-0.2,0.1-0.3,0.1l-0.5-0.3c-0.5-1.4-1.4-1.6-1.8-3.9c-0.2-0.2-0.4-0.4-0.7-0.6
                    c-2.6-0.3-3.9,1.7-5.7,1.6c-1.5-0.1-2.4-1.8-3.9-1.7c-1,0.1-2,1.1-2.8,1.6c-1.2,0.8-2.6,1.7-3.5,2.7c-0.9,1.1-1.3,5.4-2.2,6.5
                    c-0.7,0.8-2.9,1.1-4.1,2c-2.8,2.3-4.2,4.1-3.7,8c0.1,1.2,0.8,2.5,0.6,3.7c-0.7,1.4-2,1.7-2.9,2.7c-1,0.3-2.2-0.5-3.3-0.5
                    c-1.4,0-2.9,1.3-4.2,1.8c-2.5,0.9-6.3,1.3-8.9,0.6c-2.1-0.5-3.3-1.7-5.4-0.8l0,0.4c-0.2-0.2-0.1,0.2,0,0.1l-0.2,0.4
                    c0.3,0.8,0.7,1.8,0.8,2.7c0.1,0.7-0.1,1.9,0.1,2.4c0.4,0.3,0.8,0.7,1.1,1.2c0.3,2-3.1,4.7-0.1,7.5h0.4c0-0.2,0-0.4,0.1-0.6
                    c-0.1-0.4-0.1-0.9,0-1.2c0.3-0.3,1-0.6,1.5-0.5c0.1-0.4-0.2-0.9-0.2-1.5c0-0.4,1.3-4.4,1.4-4.6c0.5-0.2,0.7-0.5,1.2-0.3
                    c2-0.2,5.6-0.3,7.5,0.4l0.3,0.1l0.4,0.1l0.4,0.2c0.3,0.1,0.7,0.2,1,0.4c0.5,0.2,1,0.6,1.4,0.8c0.8,0.5,1.6,1,2.3,1.7
                    c0,0.3,0.3,0.7,0.5,0.9c-0.2,0.5-0.2,1.2-0.4,1.7c-1,2.5-4.7,2.9-6.8,1.9c-0.8-0.4-1.6-1.2-2.4-1.5c-0.7-0.3-1.6-0.1-2.2,0.2
                    l-0.3,0.5c0,0.3,0.2,0.5,0.3,0.8c0.7,0.5,2.2,1.2,1.9,2.3l0.3,0.5l0.6,0.3c0.7,0,1.3-0.3,2-0.5c1.5-0.1,1.7,1.2,2.4,2
                    c1.3,1.4,2.7,1.5,4.4,2.1c0.7,0.2,1.6,0.7,2.3,0.6c0.4,0.4,1,0.5,1.5,0.8c0.3,0.2,0.5,0.7,0.9,0.9l0,1c-0.9,1.3-2,2.7-3.7,2.7
                    c-2.6,0.1-3.2-1.7-4.9-2.3c-1.7-0.6-3.5,0.3-5.3,0.3c-0.5,0-3.3-0.1-3.7-0.2c-1.5-0.4-2.8-1-4.3-1.3c-0.9-0.2-2-0.1-2.9-0.4
                    c-0.5-0.1-1.2-0.4-1.6-0.7c0.1-0.5,2.4-1.8,2.9-2l0.5-0.6l-0.2-0.6c0.3-0.7,0.2-1.2-0.1-1.9c-2.8-1.2-5.4,2.7-7.9,3.1
                    c-1.3,0.2-2-0.5-2.9-0.5l-0.2-0.1l-0.3-0.2l-0.5-0.3c-0.2-0.1-0.5-0.2-0.7-0.3c-0.4-0.2-0.9-0.4-1.3-0.6c-0.7-0.3-1.6-0.4-2.3-0.8
                    c-1.3-0.6-2.5-1.4-3.7-2.1c-2.4-1.4-4.6-1.7-7.2-2.5c-1.7-0.5-3.5,0-5.2-0.5c-1.8-0.6-5.2-2.6-7-3.5c-2.8-1.4-5.8-2.3-8.6-3.5
                    c-2.1-0.9-8.5-2-9.6-3.8c0-0.3,0-0.5-0.1-0.8c0.2-1,3.9-1.6,4.9-1.7c3.5-0.3,10.6-1.2,13.8-2.4c1.2-0.4,2.1-1.7,3.4-1.7
                    c0.5,0.4,1.1,0.6,1.7,0.8c1.4,0.8,9.1,1.8,10.8,1.7c1.3-0.1,2.6-0.8,3.9-1.1c1.9-0.4,3.7,0.9,5.2-1.4l-0.1-0.5l-0.2-0.1
                    c-1.4-0.9-3.2-0.4-4.7-0.4c-1.9,0-3.8-0.4-5.6-0.4c-1.8,0-3.8,0.3-5.5,0.1c-3-0.3-5.8-1.2-8.9-1.2c-3.2,0-5.8,2.2-8.8,2.2
                    c-3.9,0-7.7-3.7-10.1-3.2c-2.8,0.6-3.4,1.9-4.3,4.2c-0.2,0.6-0.6,1.1-0.7,1.8c-0.3,1.3-1.1,2.2-2.4,2.6c0.3-0.1,0.8-0.1,1.1,0
                    c1.3-0.2,2.6,1.8,3.4,2.6c0.9,0.3,1.8-0.1,2.7,0c0.2,0.7,0.3,1.3,0.6,2c1.5,0.8,2.9,0.7,4.5,1.1c3,0.8,6.6,2.8,9.2,4.5
                    c0.6,3,5.8,3,8.1,3.5c2.7,0.6,4.6,2.1,7.1,3.2c2.6,1.2,5.3,1.7,7.9,3.1c2.5,1.4,4.7,3.9,7.5,4.7c2.4,0.8,8.2-1.5,10.7,0.8
                    c0.4,0.3,0.8,0.6,0.9,1.1l-0.2,0.4c-0.9,0.5-1.8,0.3-2.7,0c-2-0.6-3.9-0.3-5.8-0.6c-5.9-0.7-11.9-0.9-17.9-1.1
                    c-0.8,0-2.1,0.3-2.8,0c-0.3,0.1-0.8,0.1-1.1,0c-0.1,0.1-0.4,0-0.5,0c-0.1,0.1,0.2,0.5,0.2,0.6l-0.1,0.3c0.6,0.2,0.9,1,1.4,1.2
                    c2.8,1.3,5.5,0.9,8.4,1.3c1.3,0.2,2.6,0.7,3.9,0.9c1.4,0.2,4.3-0.4,5.5-0.1c0.6,0.2,3,2.1,4.1,2.7c0.6-0.1,1.3-0.3,1.9-0.5
                    c0.3-0.1,0.9,0.1,1.2,0.2l0.5,0.1c0.3,0.1,0.2,0.1,0.4,0.1l0.3,0l0.2-0.1c2.4-0.2,4.1-1.7,6.7-1.3l0.2,0.2c2,0.5,3.8,1.3,5.5,2.1
                    c1,0.5,1.9,1.5,3,1.7c2.8,0.6,3.9-3,6.2-1.6c1.3,0.8,1.1,2.1,1.8,3.2c0.8,1.3,2.4,1.3,3.5,2c2.3,3.7-3.1,8.4-4.7,5.7
                    c-0.5-0.1-2.8,2.7-6.1,2.3c-5.1-0.6-10.1-2.5-15.1-3.2c-1.5-0.2-2.8,0.6-4.2,0.7c-4,0.4-5.3-2.1-8.8,1c-0.5,0.5-1.3,1-1.4,1.7
                    c0.2,0.2,0.5,0.4,0.8,0.4c1.7-0.6,9.1-0.9,10.5-0.3c0.8,0.3,1.8,1.5,1.9,2.4c-0.5,1.5-4.8,2.6-6.2,2.5c-1.6-0.2-3.1-1.1-4.7-1.3
                    c-1.3-0.2-7.5-0.1-7.9,1.4l0.4,0.7c2.1,0.9,3.9,3,6.2,3.6c1.5,0.4,3.7-1,6-0.2c0.5,0.2,1,0.5,1.6,0.7c2.4,1,3.9-1.9,5.2-3.1
                    l0.5-0.1c1,0.3,1.8,2.8,2.1,3.7c2.6,1.5,10,2,11.3,3.2c-1.3,1.3-2.4,0.8-4,1.2c-0.3,0.1-0.5,0.3-0.8,0.3l-0.1,0.3l0.3,0.6
                    c0.8,0.4,1.4,1.1,2.3,1.5c1.1,0.5,2.7,0.3,3.4,1.6c0.5,0.9,0.1,2.1,0.7,3.1c0.8-0.1,5-0.8,5.4-0.3c-0.6,1.1-1.8,0.9-2.4,1.7
                    l0.2,0.4c2.6,2.3,6.7-0.4,10,1.3c0.7,0.3,1.5,1.4,2.1,2c0.6,0.6,1.6,1.1,2.1,1.8c0,0.3-0.1,0.7-0.2,0.9c-0.3,0.3-0.7,0.3-1,0.4
                    c-2.2,0.4-3.8-1.4-5.7-2.1c-0.3-0.1-9.3-1.5-9.6-1.5c-1.2,0-2.4,0.1-3.6,0c-0.3,0-1,0-1.2,0.2l-0.1,0.3l0.2,0.3
                    c2,1.5,10.6,2.3,14.5,4.6l0.2,0.4l-0.1,0.3c-2.4,0.6-14.8,3-15.8,0.1l0.2-0.3c3.1-0.5,3.4,1.8,6.8-1l0.1-0.7
                    c-2.4-1.9-4.7-1.4-7.4-2c-1.7-0.4-3.7-1.2-5.4-1.2c-0.8,0-1.5,0.3-2.3,0.3c-0.6,0.5-1.1,1.1-1.7,1.6c-3.9,2.9-5.6-2-8.3-2.7
                    c-1-0.3-3.7,1.1-5.2,1.2c-0.2,0.1-0.6,0.4-0.6,0.6l0.4,1.1l0.8,0.5c0.5,0.8,5,3.7,5.9,4.1c-0.1,0.7-1.7,1.4-1.1,2.4
                    c0.7,1.1,2.9,1.1,4,1.7c1.6,0.8,4.1,2.8,6,2.3c1.2-0.3,1.6-2.2,3.8-2.7c1.1-0.3,1.9,2,3.5,2.1c2.4,0.1,5-1.4,6.5-1.2l0.2,0.3
                    l-0.1,0.5c-0.4,0.4-1,1.2-1.3,1.7l0.1,0.5c0.5,0.2,1,0.2,1.5,0.2c5.2,0.3,6.5-3,9.9-3.3l0.9,0.4c0.6,0,1.3,0.4,1.9,0.6
                    c1.4,0.4,3.3-0.1,4.8,0.1c0.1,0.8-0.4,1.8-0.4,2.7l0.4,0.4c3.2,0.7,5.9-1.1,9-1.4c1.2-0.1,2.5,0.2,3.7,0c2.9-0.4,4.9-3.9,8.5-2.6
                    l0.5,0.6c0.1,0.9-0.8,1-0.5,2.3c0.3,1.4,2.2,2.7,2,4c-0.6,1.2-2.7,1.1-3.8,0.8c-2.9,1.7-3.7,4.1-3.8,7.1l0.3,0.4
                    c2.6,0.7,1.9-4.9,6.1-2.9c0.2,0.3,0.4,0.9,0.4,1.3c-0.1,0.6-0.8,1.2-1.3,1.6l0,0.8c0.2,0.2,0.6,0.6,0.6,0.8l0.3,0.1
                    c0.3,0.4,0.4,1.1,0.4,1.6l-0.4,0.7c-1.2,0.9-2.8,0.5-4.1,0.7c-1.5,0.2-5.8,2.9-6.3,4.3c-0.2,1.1,0.4,1.6,1.2,2.1
                    c0.8,0.5,1.6,1.2,2.4,1.7c0.2,0.1,0.5,0,0.7-0.1c2.9-0.9,4-3.9,8.6-4.1c0,0,0.2,0.1,0.2,0.1c0.8,0.5,1.3,1.4,2.1,1.7
                    c1.2,0.6,4.6,0,5.1,1.6l-0.3,0.4c-2,0.6-5.6-1.4-7.4,0.4l-0.3,0.8c1,0.9,3.7,0.5,5.2,0.9l0.1,0.6c-1.5,0.9-8.7,0.7-10.6,0.4
                    c-2.1-0.4-4.3-1.6-6.4-0.9c-0.2,0.6-6.3,0.2-5.5,3c0.4,0.1,1.7,0.4,1.9,0.6c1-0.1,8.1,0.3,8.8,0.7c0.4,0.3,0.9,0.9,1.1,1.3
                    c0.2,0.6,0.4,1.9-0.3,2.3c-0.9,0.2-1.8,0.4-2.7,0c-0.5-0.8-0.5-1.4-0.1-2c-1.2-2.4-2.4-2.7-4.7-1.4c-0.5,1.3,0.5,1.7,1.2,2.5
                    c0.8,0.8,1.5,1.2,2.3,2.2c0.2,0.3,0.1,0.2,0.4,0.4l0.4,0.4c2.2,1,3.6-0.7,5.5-0.8c1.9-0.1,3.9,0.6,5.8,0.6c2,0,3.6-1.1,5.7-0.9
                    c0.6,0.4,1,1.1,1.3,1.7c0.4,0.6,1.2,1.2,1.9,1.3c1.3-1,0.9-2.9,2.9-3.5c0.8-0.3,1.9-0.1,2.7,0c4.9,0.7,1.8,2.4,3.7,4
                    c0.9,0.8,2.5,0.9,2.9,2.4c0.4,1.5-0.7,3.8-0.4,5.3c-2.1-1.5-5.6,0.5-8.1,0.1c-0.3-0.2-1.3-1-1.6-1.1c-0.8,0.9-1.4,1.1-1.9,2.3
                    c0.1,0.9,0.5,1.5,0.8,2.3c4,0.5,3.6-0.2,6.9,2.7c3.2,2.3,4.8,1.3,7.5-1c2.3,0.3,4.8,1.2,7,0c0.9-0.5,1.7-1.2,2.7-1.4
                    c1.8,0.5,3.7,1.4,5.6,1.6c4.4,0.5,14.5-1.5,14.1,5.6c-0.1,1.5-0.2,3.2-1.2,4.4c-0.8,1-5,4.5-6.2,5.3l-0.6-0.1l-0.2-0.4l0.4-0.6
                    l0-0.5c-0.2,0-0.5,0-0.7,0c-2,0.4-4,2.3-5.7,2.5c-2.9,0.3-4.6-1.5-7.6,0l-0.6,0.4c0.3,0.6,1.4,0.5,1.9,1.1c0.2,0.4,0.2,1.1,0,1.5
                    c1.6,0.8,2.4-0.3,3.9-0.5c0.9-0.1,1.6,0.3,2.5,0c0.7-0.2,1.3-0.7,1.9-1.2l1,0.1c0.2,0.2,1.1,0.4,1.4,0.4c1.7,0.2,3.7-0.5,5.2-0.1
                    c0.1,0.5,0.3,0.9,0.6,1.3c0.6,0.3,1.3,0.1,1.9-0.2c3.1-1.2,3.7-3.6,5.3-6.1c0.8-1.3,1.9-2.4,2.6-3.8c0.7-1.2,1.1-3.1,2.1-4.1
                    c0.3-0.3,1.1-0.6,1.5-0.6c1.2,0.3,3.5,1.9,3.2,3.4c-0.7,0.9-1.5,1.6-2.3,2.4c0,0.2,0,0.6-0.2,0.7c0.3,1,1.4,1.7,1.5,2.6
                    c-0.4,1.3-0.5,2.4,0.1,3.6c-0.2,0.5,0.1,0.8,0.1,1.3c0,0.8-0.3,1.9-0.5,2.7c0.2,0.4,1.2,0.7,1.6,1.1l0.2,0.7
                    c-1.2,2.2-3.8,4.1-6.2,4.9l-0.3,0.8c0.1,0.3,0.3,0.6,0.5,0.9c0.5,1.2,2.3,2.6,2.5,3.3c0.1,0.2,0.1,1.2,0.1,1.4
                    c-0.2,0.8-4.4,7.3-5,7.7c-0.2,0.6-0.5,1.4-0.2,2l0.4,0.2l0.8-0.2c1.1-0.9,0.9-1.8,1.4-2.9c1.2-2.3,3.9-4.1,5-6.4
                    c1.2-2.5,1.7-5.1,2.5-7.6c0.5-1.6,1.6-2.7,2.2-4.1c0.4-1.1,0.1-2.2,0.8-3.4c0.4-0.8,1.3-1.3,1.7-2c0.6-1.2-0.7-4.1,0.6-7.2
                    c0.5-1.1,2-3.1,3.4-3.2l0.3,0.1c0,0.3,0,0.6-0.1,0.8c0,0.1,0.2,0.2,0.1,0.3l0.1,0.4l0.7,0.1c0.3-0.2,0.8-0.3,1.1-0.3
                    c0,0.1,0.2,0.2,0.2,0.1c0,0.1,1.8,4.1,2.3,4.2c0.2-0.1,3.4-2.4,3.9-2.8c1.9,1,1.4,3,2.9,4.2l0.5-0.3c0.6-0.7,0.4-2,0.9-2.9
                    l0.7-0.5c0.4,0.2,0.7,0.4,1.1,0.7c-0.1,0.5,0.1,0.9,0.2,1.3c0.1,1.3-0.5,2.5-1,3.7c-0.4,0.1-0.9,0.2-1.3,0.2
                    c-0.4,0.4-0.8,0.8-1.1,1.3c0.1,1.8-1.7,2.3-1.9,2.9c0.3,0.2,0.8,0.7,0.9,1.1c-0.3,0.9-1,2.2-0.6,3.1c0.4,0.2,0.7,0.5,1,0.8
                    l0.1,0.6l-0.3,0.7c-1,0.4-2.2,0-3.3,0.5c-0.4,0.2-0.8,0.6-1.3,0.8c-2.3,0.8-5.8-0.4-7.5,2.4c-0.5,0.8-0.7,2.3-1,3.3
                    c-0.5,1.5-1.2,2.7-1.5,4.3c-0.1,1-0.7,1.5-0.5,2.7c0.2-1.5,0.9-1.3,1.6-2c0.3-0.3,0.5-1.1,0.7-1.5c0.8-1.9,2.2-2.5,3.9-3.3
                    c3.4,0.7,3.7,1.4,6.2,3.5c0.2,0.5,0.9,1.1,1,1.8c0,0.1,0.1,1.5,0.1,1.6c0,0.2-3.8,9.1-4,9.4c-0.6,0.9-1.5,1.6-2.2,2.5l0.2,0.8
                    l0.5,0.3c0.5,0,1.1-0.3,1.5-0.7c0.3-0.2,4.5-5.9,4.7-6.4c0.3-0.7,0.5-1.5,0.9-2.1c0.8-1.4,4.1-4.4,5.3-2c0.2,1.9-2.3,4-2.2,6.1
                    c0.5,0.6,2.4,0.1,3.2,1.5c0.1,0.5-0.1,1.2-0.1,1.7l-0.5,0.7c-1.2,0-1.7-1.1-2.6-1.8c-0.4,1.1-1.6,2.2-1.1,3.5
                    c-0.6,2.2-3.1,3-4.8,4.2c-0.3,0.6-0.3,1.2-0.4,1.9c-1.8,2-3.1,0.8-4.5,1.8l0.1,0.8l0.9,1.2l0.1,0.7c-0.3,0.6-1.1,1.1-1.2,1.8
                    c0.4,0.8,1.5,1.5,1.6,2.4c-0.2,0.3-0.4,0.7-0.6,1c-0.5,1.4-1.3,2.9-2,4.2c-0.3,0.6-1,1.2-1.2,1.8c-0.1,0.2-0.1,0.6-0.1,0.8
                    c1.7,0.4,5.9-5.4,6-7.1c0-1.6-1.4-2.1-0.8-4c0.7-2,2.4-1.9,3.7-3.3c1-1,1.4-2.5,2.2-3.5c0.9-1.2,3.5-4.3,5.2-3.8l0.1,0.8
                    c-0.5,0.8-1.9,0.8-2.1,1.9l0.5,1.1l-0.1,0.8c-1.7,1-2.8,2.4-3.7,4l0,0.8l0.5,0.2l0.7-0.1c1-0.8,1.2-2.3,2.3-3.1
                    c0.6,0.5,0.6,1.3,0.8,2c0.9,1.7,3,0.1,3.5-1.1c-0.2-1.1-0.8-2.4-0.8-3.5c0-1.7,0.7-5.2,2.7-5.6l0.6,0.2l0.5,0.6l0,0.2
                    c1.1,0.5,1.2,1.2,2.8,0.9c0.6,0.2,1,0.7,1.4,1.2l0.2,0.8c-0.3,0.6-0.7,1.2-0.9,1.8c0.2,0.9,0.9,1.7,0.8,2.7
                    c-0.2,0.5-0.5,1-0.8,1.5c0.3,0.4,1,1.1,1.5,1.2l0.2,0.6c-0.1,0.5-0.3,0.9-0.8,1.1c-0.8-0.3-1.5-1-2.3-1.2
                    c-1.9,0.1-2.1,2.3-3.7,2.8c-1.6,0.5-2.9-0.7-4.5-0.3l-0.4,0.3l-0.2,0.8l0.3,0.5l0,0.7l-0.6,0.4c-0.7-0.4-1.6-0.8-2.5-0.5
                    c-1,0.4-2.9,5.3-3,6.4c-0.1,0.8,0.2,1.7,0,2.4l-2.7,4.4c0.2,0.7,1.3,0.8,1.5,1.7c0,1.2-2,3-3.2,3.1c-1.8-0.3-1.3-1.5-2.4-2.5
                    l-0.6-0.2l-0.8,0.2c-0.4,0.7,0,1.4-0.4,2c-0.4,0.9-1.8,1.4-2.6,2c-0.3,1,0.2,2.1-0.1,3c-0.4,1.2-2.1,2.1-2.9,3.2
                    c0,1.1,0.3,2.3-0.3,3.4c-0.8,1.4-3.8,2.6-5.1,3.6c-0.8,0.6-1.6,1.4-2.4,2l-0.1,0.3c2.9,0.2,8.1-4.3,9.8-6.5c1.1-1.5,2.1-3.8,4-4.5
                    c2.2,0.6,1.9,2.4,2.8,3l0.8,0.1c0.3-0.1,0.8-0.6,1-0.9c0.2-4.2,5.1-7.4,6.8-5l0.1,0.8c-1.5,3.9-9.1,6.4-11.2,9.2
                    c-2.7,3.6-2.2,9.5-6.1,12.5c-2.6,2-8,3.5-9.9,6.1c-0.3,0.4-0.3,1.5-0.3,1.9l-0.4,0.4c-1,0-1.7,0.7-2.6,1v0.3
                    c0.4,0.2,1.1,0.6,1.2,1.2c0.2,1.8-2.5,3.6-2.4,6.1c0.3-0.1,2.1-2.5,2.7-3.1c1.5-1.3,3.5-1.5,4.7-3.3c1.4-2.2,0.2-3.6,3.4-5.5
                    c2.2-2.3,6.1-2.7,8.1-4.9c1.2-1.3,0.5-1.5,0.7-2.9c0.1-0.7,0.4-1.2,0.8-1.8c1.7-2.9,2.7-4,5.9-5.3l0.6,0.4
                    c0.2,0.4-0.1,1.1-0.2,1.5c0,0.4,0.4,1.1,0.7,1.3l0.8,0c1-0.5,1.8-3,2.2-4c0.3-0.6,0.6-0.9,1.1-1.4c1.9-2.2,4.6-4.1,6.6-6.3
                    c0.6-0.6,0.7-1.4,1.4-2c2.8-2.4,5.3-0.8,6-1.5c0.3-0.4,0.5-1.1,0.6-1.6c0.6-0.6,2.1-1.6,2.4-2.3c0.3-0.6,0.3-1.2,1-1.5
                    c0.4-0.1,1.7,0.4,2.1,0.6v0.6c-0.3,0.4-0.4,0.9-0.6,1.2c-1.4,1.9-2.1,2.7-2.4,5.1l0.3,0.7c0.1,0.9-2.6,4.9-2.6,6
                    c2.6,0.8,3.9-4.7,5.4-6.1c0.9-0.8,2-0.6,2.9-1.1c2.6-1.2,3.9-4.6,7-5.1c0.3,0.1,0.7,0.2,0.9,0.4l0.1,0.7c-1.2,2.4-3.8,3-4.7,5.7
                    c0.3,0.7-0.8,5.1-1.2,5.9c-0.3,0.5-6.1,8.4-6.8,9.2c-0.8,1-2,1.6-2.6,2.6c-0.4,0.6-0.1,1.5-0.4,2.2c-0.6-0.4-0.8-1.1-1.4-1.6
                    l-0.8-0.2c-1.5,0.3-1.7,2.7-2.5,3.8c-2.4,3.2-5.4,3.3-5.3,8.1c0,0.6-0.1,1,0.2,1.6c0.2-0.3,0.7-0.5,0.9-0.8
                    c0.1-0.1,0.3-0.5,0.4-0.7c0.7-1.3,1.8-2.2,2.6-3.4c3-2.9,6.4-5.2,9.5-7.8c1.6-1.4,2.8-3.1,4.3-4.6c0.6-0.6,1.3-1.2,1.7-2
                    c1.7-2.9,2.3-8.2,4.2-10.4c0.7,0,1.3-0.1,1.9-0.3c0.2-0.2,0.3-0.4,0.6-0.5c0.4-1.1,0.2-1.4-0.3-2.3c0.3-0.3,0.7-0.5,1.1-0.8
                    l0.9,0.1c-0.1-0.3-0.1,0.1-0.1,0.1s-0.3-0.3-0.1,0l0.2-0.1c1.2,0.6,6.6,1.3,7.8,0.8l0.4-0.8c-0.3-0.6-0.3-1.3-0.8-1.8
                    c-0.2-1.1,0.3-1.9,1.2-2.5l0.7-0.1l0.4,0.6c1.6-0.1,2.2-3.7,3.1-4.8c0.9-1.2,2.1-1.3,3.2-2.1c1.1-0.8,2.2-3.2,4-2.6l0.8-0.4
                    l0.4,0.4l0.1,0.4c-0.2,0.5-0.2,1.5-0.5,2l0.2,0.5c0.7,0.1,1.9,0.7,2.2,1.3c-0.1,0.5-0.2,1.6-0.6,2c0.1,0.4,0.2,0.8,0.1,1.2
                    l0.3,0.4c0.2,0.1,0.6-0.1,0.8-0.2c0.1-0.3,0.2-1.1,0.3-1.3c1,0.1,1.5,1.3,2.7,1.5c0.4,0.7,0.2,2.3,0.1,3c-0.1,0.3-0.2,0.7-0.3,1
                    l-0.5,0.3c-0.3,0.1-1-0.1-1.2-0.4l-0.4,0.2c0,1.6-1.2,2.8-1.3,4.2c0.5,0.5,1.1,0.2,1.7,1.1c1.1,1.4,0.1,3.4-1.6,3.5
                    c-0.4-0.1-1-0.5-1.2-0.9l-0.8-0.2c-1.3,0.6-1.7,2.7-3,3.6c-2.1,1.7-7.1,3.9-9.8,3.1c-1.5-0.4-2.5-1.5-4.1-1.8
                    c-1.8,1.1-1.6,0.4-2.2,2.6l0.9,5.6c0.4,0.2,1.3-0.3,1.6-0.6c0-0.3,1.4-2.7,1.5-3.4l0.2-0.1c0.2-0.1,0.5-0.4,0.7-0.4
                    c0.6-0.2,1.8,0.3,2.5,0.2c0.9-0.1,2.2-0.5,3.1-0.3l0.6,0.6c-0.1,0.9-0.8,1.5-0.9,2.4c0.1,0.5,0.5,0.7,1,0.8l1.6-0.4
                    c0.6,0.3,1.3,0.6,1.7,1.2c0.5,0.1,1.1,0.2,1.6,0.2l0.2,0c1.6,0.3,2.2-2.9,2.6-4c0.5-0.1,1-0.2,1.4-0.4l0.1-0.2
                    c1.8-0.6,5.9-1.9,7.5-0.9c0.9,0.6,1.2,2,1.8,2.3c0.5,0,1.4,0,1.8-0.2c2.9-0.8,4.1-2.9,6.6-4.3c1-0.6,2.4-0.6,3.3-1.2
                    c0.3-0.2,0.6-1.1,0.7-1.4c-1.7-2.6-0.4-4.4,2.1-5.5l0.3,0.1l0.1,0.3c-1.1,2.5,1.2,2.4,1.2,4.4c0.1,1.8-2,4.3-1.3,6
                    c0.1,0.2,0.7,0.3,0.9,0.4c0.6-0.2,0.9-0.8,1.4-1.1c0-0.1,0.1-0.2,0.2-0.1l0.2-0.4c0.8-0.6,3.1-0.7,4-0.4c0.9,0.7,0,3.3-0.5,4
                    c-1.3,1.8-3.5,1.7-4.6,3.6c-1.9,3-0.1,5.1-4.3,8l-0.7,0c-0.3-0.3-0.7-0.6-0.9-1l-0.4-0.2c-1.1,0.9-1.2,2.2-1.9,3.3
                    c-0.3,0.5-6.5,6.4-6.8,6.5l-0.8-0.2c-0.3-0.2-0.5-0.6-0.7-0.9l-0.6-0.2l-0.6,0.2c-0.3,0.5-0.5,1.3-0.3,1.9
                    c-0.3,0.5-0.4,1.1-0.5,1.6c-1.2,0.4-4.6,0.2-5.1,1.8c0.2,0.5,1.4,0.7,1.9,1.3c0.1,0.5,0.2,1,0.1,1.5c-0.8,0.9-4,3-4,4.1
                    c-1.8,1.2-7.7,5.5-8.5,7.2c-0.6,1.3-0.8,2.5-1.1,3.9c0.8,1.1,2.8-0.4,3.7-0.2l0.4,0.7c-0.7,2.3-3.8,8.3-5.7,9.8
                    c-1.1,0.8-6.3,2.6-6.5,3.8l0.1,0.5c0.4,0.5,1.1,0.8,1.7,1c3.6,1.2,5.6-1.6,8.1-3.7c1.2-1,4.6-1.7,5-3.4c-0.1-1.1-1.6-2.7-1.9-4.1
                    c-0.9-3.7,2.5-9.3,4.9-12c0.6-1.7,5.6-2.1,7.1-3.1c1.6-1.2,2.7-3,4.2-4.3c0.7-0.6,2.2-0.7,3.2-1.5c0.7-0.6,2.7-3.5,3.7-4.6
                    c1-1.1,2.4-1.6,3.4-2.6c1.7-1.6,3.5-3.2,5-5c1.4-1.6,2.2-4.3,4.2-5.2l0.2,0c0.3,0.8,1.2,1.2,1.6,1.9c0.1,1.2,0.1,2.8-0.1,3.9
                    l0.2,0.3l0.7,0c0.4-0.3,0.5-0.7,0.6-1.1c0.8-2.6,1-5.3,2.4-7.8c1.2-2,5.4-8.2,5.7-9.5c-0.6-1.7,0.8-2,1.4-3
                    c0.5-0.7,0.3-1.4,0.4-2.2c0.2-1.6,2.9-3.6,4.4-4.2c0.9-0.5,2.4-1.5,3.1-0.2c0,0.3,0.1,0.5,0.1,0.8c-0.3,0.2-0.4,0.7-0.6,1
                    c-0.9,1.7-1.4,3.8-0.1,5.5l0-0.2c3.7-3.7,1.7-2.1,3.3-5.8c0.3-0.8,1.2-1.4,1.5-2.1c0.2-0.4,0-1.9,0.1-2.4l0.4-0.3l0.6,0.2
                    c0.8,0.8,1.7,2,2.2,3.1c1.8,3.9,0,10.8-3.9,12.8c-2,1-4.7,1.3-6.4,3c-2.6,2.6-2.5,6.2-4.6,9.1c-1.2,1.7-2.5,1.4-4,2.3
                    c-0.8,0.5-1.4,1.5-2,2.2c-1.5,1.6-3.7,3.7-3.6,6.2c0.1,0.4,0.4,0.8,0.7,1l0.9,0.1c1.3-0.6,1.3-2.9,1.5-4.1c0.8-0.5,1.3-1.3,2-1.9
                    c1.2-0.3,2.2,0.5,3.4,0.2c1.7-0.4,5.1-4,6-5.6c-0.2-1.3-1.1-2.9,0-4l0-0.4c1.5-1.2,4.8-0.9,5.2-3c0.6,1.1,0.8,4.3,2.6,4.6
                    c0.2,0,0.6-0.2,0.7-0.4c0.3-2.3-1-7.6,2.2-8.3c1.6-0.4,2,0.6,2.8,1.7c-0.1,1-0.8,3.9-1.5,4.5c0,0.3,0.3,0.7,0.5,0.9
                    c4.8-3.8,3-5.3,3.8-10.5c1.2-0.9,1.4-1.1,2.9-1.5c0,0.1-0.2,0.1-0.1,0c1.1-0.1,1.6,0.1,2.4,0.9c0.5,1.6-0.1,3.7,1.3,4.8l0.8-0.2
                    c0.2-0.8,1.6-2.5,2.6-2.3c0.8,0.9,0.3,1.9,0.2,2.9c-0.1,1.3,0.3,2.3,0,3.7c-0.7,3.4-4.9,9.8-7.2,12.4c-0.6,0.7-1.1,1.3-0.9,2.3
                    l0.4,0.4c0.2-0.1,0.8-0.2,1-0.4c0.5-1.2,2.6-4.4,4.1-3.9l0.5,0.4c0.4,1-0.1,2.7,0.7,3.4c0.2,0,1.8,0.8,2,1
                    c0.4,0.3,0.5,0.8,0.8,1.2c1.3,1.7,3.8,2.1,4.6,4.2l-0.1,0.8c-2.2,3.3-4.7,1.7-6.2,2.6l-0.3,0.7l0.2,0.7c-0.1,1.4-4.8,3.1-5,4.4
                    l0.2,0.4c0.2,0.1,1,0.2,1.2,0.4c1.5-0.8,3,0,4.6-0.3c-0.1-0.2-0.1,0.2,0,0.1c0.3-0.2,0.7-0.3,1.1-0.5c0.5-1.1,0.7-2.2,1.1-3.4
                    l0.5-0.3h0.6c-0.1-0.2,0,0.1,0,0.1c1.3-0.1,2.9-0.7,4,0.4c-0.5,0.9-0.2,2.3-1.2,3.1c-0.4,0.3-0.9,0.5-1.3,0.9
                    c-0.1,0.3-0.1,0.6,0,0.9l0.4,0.4c0.6,1.8-1.9,2.6-1.7,4.3c0.3,0.3,0.8,0.7,1.2,0.9c0.6,0.3,1.3,0.2,1.9,0.2c0.3,0,2.9,1,3.4,1.2
                    c0.5,0.2,0.9,0.6,1.4,0.5c0.3,0,0.6-0.2,0.8-0.4c0.6-1.1,0.6-2.4,1.4-3.4l0.5,0c0.4,0.2,0.7,0.4,1,0.7l0.6,0.1
                    c0.7,0.3,1.3,0.7,2,1c1.9,2.6-1,6.2,1,7.2l0.5,0c1.9-1,0.3-5.9,2.3-7.3c0.7-0.3,2.5-0.1,3.3,0l0.2,0.2c-0.3,1-0.4,2.1-0.7,3.1
                    c0.2,0.6,0.7,1,1.1,1.4c2.8,0.1,6.4,2.4,8.5,2.3c1.2,0,2.7-1.4,3.8-0.7l0.3,0.7l0.9,0.2c0.4-0.1,2.1-0.6,2.5-0.6l0.3,0.4l-0.2,0.4
                    c-1.9,1-3.6,2.1-4.7,4.1v0.8l0.5,0.2c1.5,0,2.3-1.2,3.5-1.7c0.6-0.2,1.1-0.4,1.7-0.6c0.1,0,0.2,0,0.1,0.1c1.9,1.5,5.6,0.4,6.2,1.1
                    l0.1,0.3c-0.3,0.6-0.9,1.8-0.7,2.4c0.6,1.8,4.3,3.4,5.7,1.6c0.3-0.4-1.5-4.8-1.4-6.2c1.4-1.1,5-1.1,6.7-1.2c0.8,0,1.7,0.4,2.4,0.5
                    c1.6,0.1,2.8-0.8,4.3-1.2c1.2,0.3,2.6,1.4,3.8,1.2c0.7-0.1,1.2-0.8,1.9-1c0.3,0,0.6,0.2,0.8,0.4c0.9,2-2.8,3,0.5,6.2l-0.1-0.2
                    l0.1,0.2l-0.1-0.2c3.8,4,14,1.2,17.2,2.9c0.1,0.2,0.1,0.6,0.1,0.8c-0.3,0.4-0.7,1-0.9,1.5l0.2,0.4l0.7,0.3c0,0,0.2,0,0.1,0
                    c1.1,0.2,1.7-0.2,2.2-1.2l-0.1-0.3c0.4-1,1.8-2.1,2.9-2.4c0.5-0.2,2.6-0.4,3.3-0.3c1.3,0.1,2.4,0.8,3.7,0.8c0.8,0,1.5-0.4,2.2,0.2
                    c1,0.8,1.2,2.9,2.3,3.8c0.5,0.4,1.7,0.2,2.6,0.8c0.6,1.3,0.7,2.1,0.6,3.5c0.2,0.3,0.7,0.7,1.1,0.8c1.4-0.2,3.8-2,5-1.4
                    c0.2,0.3,0.3,0.8,0.4,1.2l-0.7,1.6c0.7,2.8,2.4,5.6,5.7,5.8c0.1-0.2,0.1,0.2,0.2,0c2.6,1.3,5.1-1.5,6-1.5c0.7,0,2.2,0.4,2.8-0.1
                    c1-1.4,1-2.2,2.7-3.2l0.2,0.1l0.4-0.2c0.4,0.2,0.9,0.6,1.2,0.7c0.8,0.3,1.7-0.1,2.6,0.1c0.9,0.2,1.8,0.5,2.7,0.8
                    c1.1,0.4,3-0.3,3,1.9c0,0.7-0.4,1.3-0.5,2c0.2,1,2.2,0.9,3,1.5l0.1,0.7l-0.1,0.2l-0.5,0.3l-0.1,0.2c0,0.7,0.2,1.4,0.1,2
                    c0.1,0.2,0.3,0.4,0.4,0.6c0.4,0.1,0.7,0.6,1.2,0.6c1.6-0.1,2.1-1.7,3.7-1.5c0.9,0.6,1.4,1.7,1.5,2.7c0.3,4.1-6.7,2.3-8,3.9
                    c0.2,0,0.5,0.4,0.6,0.6c1.2-0.1,3.7-0.3,4.5,0.7c0.2,0.9,0,1.5,0,2.4c0.7,11.3-24.4,3.7-30.7,8.1c-0.4,0.8-0.3,1.3,0.2,2.1
                    c0.4,0.1,0.9,0.1,1.3,0c4.5-1.5,9.6-0.8,14.3-1.2c2-0.2,3.9-0.9,6-1c0.8,0.4,4.5,2,4.8,2.7l-0.1,0.4c-0.8,0.5-1.3,1.1-2.2,1.5
                    c-1-0.8-1.6-2.4-2.8-2.8c-0.8-0.2-5.8,2.1-6.1,2.8c0,1.1,1.6,1.4,1.9,2.4c0.1,0.5-0.1,1.3-0.4,1.6c-1.7,0.6-3.5,1-5.1,1.7
                    c-1,0.4-2.7,2.7-4.2,3.4c-0.7,0.3-1.5,0.4-2.2,0.6c-5.6,1.4-7.7,0.1-12.9-1.2c-0.6-0.2-1.8-0.2-2.3,0c-0.9,0.3-1.1,1.6-1.9,2
                    c-1.1,0.5-3.2-0.1-3.4-1.5c-2.6-1.3-7.1,1.1-9.5,1.3c-1.1,0.1-2.8-0.6-3.7,0c-0.1,0.4-2.8,1.3-3.3,1.2c-0.4-0.5-0.4-0.7-0.4-1.3
                    l-0.8-0.2c-1.5,0.5-2.9,1.4-4.3,1.8c-0.9,0.3-1.6,0-2.5-0.1c-2.7-0.1-3.9,0.8-6,2.2l0.1,0.4c0.3,0.2,0.6,0.5,0.9,0.8l-0.1,0.4
                    c-1,1.4-3,0.9-4.4,1.6c-1.5,0.7-2.6,1.9-3.7,3l0.2,0.2c1.6,0.5,6.3-1.3,8.1-1.5c0.8-0.1,1.8,0,2.6-0.2c1.3-0.3,3.2-1.4,4.5-1
                    l0.2,0.2c-0.8,0.8-6.3,3.9-7.4,4.3c-0.9,0.3-1.4,0-2.3-0.1c-0.9,0-4.1,1.5-4.8,2.2c0,0.3,0.2,0.8,0.2,1.1c1,0.8,2.6,2,1.2,3.4
                    c-1.1,0-5,0.2-6,0.4c-1.5,0.2-2.9,0.9-4.4,1.1c-2.4,0.4-4.5,0.3-6.9,0.3c-0.5,0-0.9,0.1-1.4,0l-0.7,0.4c-0.5,0-0.8,0.2-1.1,0.3
                    c-0.9,0.4-1.6,1.3-2.4,1.9c-0.8,0.5-1.9,0.9-2.7,1.3c-2.1,1-5,1.1-6.9,2.5c-2.6,1.9-2.4,3.1-6,5.1l-0.2,0.2
                    c-1.3,0.3-2.6,1.1-3.8,1.7c-2.3,1.1-5.6,1.8-8.1,2c-3.1,0.3-5.9-1.6-8.8-0.6c-1.1,0.4-6.7,0.8-6.8,1.8c0-0.1-0.2,0.1,0,0
                    c-0.5,0.1-1.6,1.1-2.3,1.4c-0.6,0.2-8,1.8-8.2,1.7c-3.3,0-10.4,2.1-13.6,3.6c-0.9,0.4-1.8,1-2.7,1.4c-3,1.2-6.3,2.1-9.3,3.4
                    c-1.8-0.6-2.5,0.4-3.6,0.3c-2.1,1.7-6.6,0.9-9.1,0.5c-1.8-0.3-3.7-1.3-5.4-1.4c-1-0.1-2.1,0.2-3,0.4c-0.6,0.2-1.3,0.2-1.9,0.4
                    c-0.4,0.2-0.7,0.4-1.1,0.5c-0.2,0.1-0.4,0.2-0.6,0.4c-0.1,0.1-0.2,0.1-0.2,0.1l-0.2,0.3l-0.2,0.2l-0.1,0.4c1.2,3.3,4.9,1.9,7,2.8
                    v0.5c-0.7,0.9-1.2,2.3-0.2,3.2c0.3,0.1,0.7,0.2,1,0.2c2.7,0,3.1-2.2,6.5-2.8c0.9-0.2,3.2,0.5,4.2,0.5c2,0.1,4.5-0.2,6.4-0.6
                    c4.2-0.3,6.6-2.2,9.9-3c1.5-0.4,3.4-0.1,4.8-1.2c0,0.1,0.5-0.1,0.8-0.3c0.8-0.3,1.6-0.5,2.4-0.8c1.9-0.7,4-1,6-1.2
                    c1.5-0.1,3,0,4.6-0.3c2.9-0.7,8.1-3.7,11.8-4.8c2.3-0.7,4.9-0.7,7.2-1.6c2.1-0.8,4.5-2.7,6.5-4l0.6-0.4c0.3,0.1,0.7,0.2,1,0.1
                    c1.7,1.1,4,1.4,5.7,0.4c0.1-3.1,1.8-2,3.5-2.7c0.9-0.4,1.8-1.2,2.6-1.7l0.3-0.1l0.3-0.1c0,0-0.3,0-0.1,0.1c1-0.8,1.9-1.6,2.9-2.4
                    c0.8-0.5,1.6-1.4,2.6-1.7c1.2-0.4,2.5-0.1,3.7-0.6l-0.3,0.1l0.2,0.1h0.6c0.3-0.3,1.1-0.1,1.5-0.3c2.2-0.8,3.6-1.8,5.3-3.5l0.1-0.6
                    c0.2-0.1,0.6-0.9,0.8-1.2c0.9-0.9,3.8-1.2,4.8-0.5c-0.3,1.2-3.2,2.7-4.2,4.1c-1.8,2.7-2.5,7.5-5.2,9.4c-2,1.4-3.7,0.6-6,2.6
                    l-0.1,0.6c1.8,2.4-3.9,5.6-4.6,7.8c-0.7,1-0.7,2.2-1.9,3.3c-1.4,1.3-3.7,1.6-5.5,1.9c-5.3,1-7.8,0.4-12.8-1.4
                    c-1.1-0.4-2.3-1-3.5-1c-1.1-0.1-2.3,0.2-3.4,0.3c-1.3,0.1-2.5,0-3.8,0c-0.3,0-0.7,0-1.1,0c-1.4,0.3-2.8,1-4.2,1.4
                    c-1.1,0.3-6.4,1.1-7,1.5l-0.1,0.5l0.3,0.2c-0.1,0.2-0.2-0.3,0-0.1c0.2,0.1,0.5,0.2,0.7,0.2c2.9,0.7,5.9,0.5,8.9,0.9
                    c0.4,0.1,1.2-0.1,1.4,0.1l0.3,0.4c-0.2,0.6-2,2.1-2.5,2.8c-1.5,2.2-3.4,4.4-5.9,5.6c-0.7,0.3-1.5,0.3-2.3,0.6
                    c-1.1,0.4-2.6,0.7-3.8,0.6c-1.9-0.3-2.1-0.8-4.1,0.2c-0.4,0-0.8,0.4-1.3,0.5c-5.9,1.5-9.1,4-14.3,6.4c-2,1-4.3,1.3-6.2,2.7
                    c-0.9,0.6-1.5,1.6-2.2,2.4c-1.4,1.5-4.6,3.4-6.3,4.5c-0.1-0.1-0.3,0-0.4,0.1c-3.1,1.7-11.1,2.9-14.7,2.7c-0.5,0-3.4-0.4-3.7-0.3
                    c-1.4-0.9-7.1-1-8.7-2.2l-0.2-0.5l-0.9-0.4l-0.9,0c-1.8,1.6-3.7-0.4-5.6-0.4c-1.9,0-6.3,0.8-6.9,2.8l0.4,0.6
                    c0.1,0.5,0.6,0.6,0.8,1c1.5,0.2,5.1,0.2,6.1,1.3l0.3,0.8c-1.1,2.2-2.6,1.5-4.5,1.8c-4.3-1-7.2-0.1-11.2,1.1
                    c-1.4,0.4-2.9,0.5-4.3,1.1l-0.4,0.2l-0.2,0.1l-0.2,0.1c-1.1,0.8-2,1.1-3,1.8c0.2,0,0.1,0,0,0l-0.5,0h-0.4l-0.6,0
                    c-0.4,0-0.7-0.1-1.1-0.2c-0.5-0.1-1-0.5-1.5-0.7c-1-0.5-1.9-1.1-2.8-1.7c-0.2,0-0.5,0-0.6,0.1l-0.1,0.4c0.1,0.3,0.3,0.7,0.6,0.9
                    c0.3,1,2.2,1.7,3,2.4c0.5,0.4,0.8,1.3,1.2,1.8c0.7,1,5.1,4.7,6.2,5v0.6c-1.3-0.2-2.3-0.7-3.4-1.1c-2.1,0.3-4.4,4.1-4.7,6
                    c-0.6,3,2.1,1.4-1,6c-0.2,0.3-0.3,0.7-0.6,0.9c0.4,1.8-0.2,2.2,1.1,4c1.1,1.6,5.1,3.8,4.3,5.8c-0.5,1.3-5.5,3.1-6.6,4.8l-0.4,0
                    l-0.4-0.7c0.1-5.8-3.7-2-5.5-4.3c-0.2-0.4-0.3-1-0.2-1.5c-0.8-0.7-1.4-0.5-2.2-0.7c-1.4-0.3-2.5-1.2-3.6-1.9
                    c0-0.2-0.6-0.5-0.8-0.8c-1.3-1.2-2.6-2.4-4.1-3.3c-0.9-0.6-2.1-1-2.9-1.7c-1.8-1.5-1.2-3.4-3.3-5.4c-0.2-0.2,0.1,0.1-0.1,0
                    c-1.7-1.2-3.9-1.3-5.7-2.2c-2.3-1.1-3.5-3-5.5-4.3c-0.9-0.5-1.7-0.4-2.6-0.7c-0.9-0.3-1.8-1.1-2.8-1.2c-2.2-0.3-4.2-1-6.3-1.4
                    c-3.9-0.9-4.8,0.8-8.1-2.5c-0.3-0.3-0.6-0.4-0.7-0.8c-0.2-0.1-1.2-0.9-1.4-0.8c0,0.1,0.2,0,0.2,0l-0.1,0.2c-1-0.1-2.4-0.8-3.4-1.1
                    c-1.6-0.5-4-1.2-5-2.6c-1.6-2.2-1.1-6.9-4.1-8.1l-0.2,0l-0.2-0.1l-0.4,0.2c-0.3,1.6,2.8,3.6,1.4,6.6c-0.3,0.6-2.4,5.2-2.5,5.4
                    c-1.2,1-4.5,2.1-4.5,4c0.1,0.6,0.5,1.1,0.9,1.5l0,0.2c0.2,0,0.5,0.4,0.6,0.6l0.5,0.2c1.6,0.4,7.2-2.8,10.9-2.2
                    c1.7,0.3,2.6,1.3,4,2c1.1,0.6,2.6,1.1,3.8,1.6c2.1,0.8,5.6-0.4,8.4,0.3c0.9,0.2,1.7,0.7,2.6,1.1c1.7,0.7,3.7,1.2,5.5,1.7
                    c0.4,0.1,0.8,0.3,1.2,0.5c1.3,0.7,2.3,1.7,3.6,2.5c1.3,0.8,2.8,1.3,4.2,2.1c0.7,0.4,1.4,1.3,2,1.6c0.3,0.3,1,2.1,1.7,2.6
                    c1.4,0.8,3,0.7,4.4,1.6c1.4,0.9,2.3,2.6,3.5,3.8c1.2,1.2,2.8,2.5,4.2,3.5c3.7,2.6,8.7,1.7,9.7,2.6c0.5,0.4,0.8,1.2,1.2,1.6
                    c0.7,0.7,1.2,1.6,2,2.2c0.6,0.4,1.4,0.5,2.1,0.9c0.9,0.6,1.4,1.8,2.7,1.7c0.3,0,1.4-0.2,1.7-0.6c0.2,0,0.9,0,1-0.1
                    c0.4,0.1,1.2,0.9,1.4,1.2c0.2,0.3,1.4,7.8,1.3,8.1c-0.1,0.1-0.2,0.2-0.3,0.3l-0.7-0.2c-0.7-0.8-1.6-1.4-2.2-2.2
                    c-4.1-1.7-10.1,2.2-13.7,4c-0.8,0.8-7.5,6.1-8,6.2c-0.8,0-1.3-0.5-2.1-0.5c-2.3,0.5-3.1,3.6-3.5,5.5c-0.2,0.2-0.4,0.5-0.5,0.7
                    l-0.4,0.1c-1.4-1.2-2.7-3.8-4.3-1.1c0.2,1.1,0.8,2.5,0.8,3.5c0.3,0.2,0.9,0.5,1.3,0.4c1.5-0.1,3-0.8,4.5-0.9
                    c1.3-0.1,2.8,0.3,4,0.1c0.7-0.1,1.9-0.6,2.6-0.9c2,0.7,4.8-0.3,6.6-1.1c0.5-0.2,1,0,1.4-0.1c0.5,0.1,0.7,0.4,1.1,0.6
                    c0.8,1.6-1.8,4.7-3,5.5c-3-0.2-5.5,2.6-8.2,3.6c-3.7,1.3-8.2,0.6-11.6,2.6c0.1,0.2,1.5,0.3,1.9,0.6l5,0.1c1.5,0.1,3.9,0.5,5.3,0.2
                    c2.8-0.7,7.3-2,9.3-4.3c0.8-0.9,1.2-1.7,2.2-2.4l0.2,0.1l-0.2-0.1l0.4-0.2c0.2-0.1,0.5,0,0.7,0.2c0.1,0.3,0,0.7-0.1,1
                    c0.2,0.6,1.5,1.2,1.8,1.7c0.5,0.8,0.5,1.7,0.8,2.5c0.4,0.4,1,0.7,1.5,0.5c1.2-1.3,2.2-2.7,2.2-4.5l-0.2-0.5
                    c-1.6-0.6-5.8-0.4-5.6-3c1-1.7,8.5-1.2,12.1-4.8c1.2-1.2,1.7-3.7,3.1-5.1c0.4-0.4,0.9-0.5,1.3-0.8c1.4-0.8,3.5-3.3,4.3-4.7
                    c0.9-1.5,1.4-4.7,3.3-5.3c1.3,0.8,0.7,2.1,1.6,3.1c2.7-0.6-1-4.6,0-6.3l0.6-0.4c0.2-0.2,1.5,0.1,1.9,0.2c0.4,1.6,7.7,3.2,6.6-0.3
                    c-2.6-2.2-5-0.4-7-1.6c-1.3-0.8-2.3-2.3-3.8-3.1l-0.2-0.4c0.3-1,1.5-1.9,2.4-2.3l0.2,0.1c5.2-1,6.6,1.9,10.4,2.9
                    c2.4,0.6,3.6-1.4,5.6-1.7c2.5-0.4,5.3,0.1,7.8-0.1c0.5,0,5.6-2,6.4-2.3c2.7-1.1,5.7-3.1,7.9-5.1c1.3-1.1,1.9-3.2,3.1-4.5
                    c1.3-1.4,3.1-1.4,4.5-2.4c1.6-1.1,1-3.7,1.9-4.1c1.1-0.2,2.8-0.2,3.7-0.8c1.2-1.5,0.7-5.1,3.3-4.9l0.5,0.3
                    c0.5,0.5,0.8,1.1,0.9,1.8c-0.2,0.3-0.3,0.9-0.2,1.2l0.2,0.2l1-0.1c0.7-0.6,3.8-2.8,4-3.5c0.5-0.2,0.9-0.4,1.3-0.8l0.7,0.1l0.6,0.5
                    c0.1,0.5,0.2,0.9,0.4,1.4c0.3,0.2,0.5,0.4,0.8,0.5c1.4,0.5,3.1,0.6,4.5-0.1c0.3-0.1,0.5-0.5,0.8-0.6c0.6-0.2,1.3-0.3,1.9-0.6
                    c1.1,0.1,2.7,0.9,3.5,0c0-0.2,0.2-0.3,0.2-0.5c0.1-0.5,0.3-1.1,0.4-1.6c0.1-0.7-0.4-2.7-0.1-3.2c1.2-0.1,2.7,1.2,3.8,0.9l0.4-0.3
                    l0.4-0.8c0-0.7-0.4-1.5-0.1-2.2c0.2-0.7,0.8-1,0.9-1.6l0-0.3l-0.7-0.3c-0.6-0.1-1.1,0-1.6,0.2l-0.6-0.2c-1-1.1-0.2-2.6-0.1-3.9
                    c-0.5-0.7-2.2-2.3-2.2-3.1c3-4.6,5.4-4.5,9.3-7.6c1.6-1.2,2.7-3.4,4.4-4.6c1.3-0.9,2.8-0.9,4.1-1.8c0.3-1,1.7-6,2.1-6.7
                    c0.1-0.2-0.1,0-0.1,0c0.6-1.2,1.2-1.7,2.4-2.1c1.8-0.5,4.8-0.1,6.5-0.5c2.2-0.6,7.3-1.8,9-2.9c0.7-0.4,1.3-1.5,2.2-1.7
                    c1.3-0.4,3.2-0.4,4.6-0.5c0.3-0.1,0.5-0.3,0.7-0.5c0.8-0.8,1.4-1.9,2.3-2.6c0.4-0.3,0.9-0.4,1.2-0.8l1.4-0.2
                    c1.7-0.4,5.7-1.8,7.2-2c1.7-0.3,2.8,0.5,4.7-0.2c2.2-0.8,4-2.7,6.3-3.6c3-1.2,5.9-1.4,9.1-1.9c0.8-0.1,1.7,0.2,2.4-0.1
                    c1.7-0.8,2.9-2.7,4.4-3.9c1.3-1,3-0.8,3.8-1.2c-0.2-0.1-0.1,0.2-0.1,0.1l0.5-0.3c3.6,0.1,6.3,1.7,9.6,2.6c1.1,0.3,2.2-0.2,3.2,0
                    c1.4,0.3,2.4,1.2,4,1.3c0.4,0,0.8-0.1,1.2,0.1c3.8-1.9,12.1,1.9,14.1,0.2c1.5-1.5-2.2-3.1-3.1-3.5c-0.9-0.4-1.8-1-2.7-1.3
                    c-4-1.5-8.8,0.6-10.7,0c-0.6-0.2-2.4-2.5-3.7-3.1c-2.7-1.3-5-1.2-7.9-1.4c-2.2-0.2-4.6-0.8-6.8-0.8c-2.7,0-7.1,2.2-9.2,3.8
                    c-0.9,0.8-1.2,1.8-1.9,2.5c-1.7,1.6-2.8,1.3-4.9,0.7c-0.6-0.5-0.8-1.3-0.8-2.1c-1.6-2.6-7.1-3-7.7-5.5c0-0.3,2-4.6,2.3-5.3
                    c0.5-1.2,1-2.6,1.9-3.6c1.8-1.9,6.5-2.3,9-1.7c1.1,0.3,2.2,0.9,3.4,0.7c1.7-1.4-1.7-3.1,3.7-4.4c0.9-0.2,2.2-0.5,3.1-0.4l0.3,0.1
                    h0.2c0.2,0,0.2,0,0.4,0.1l0.5,0.1l1.2,0.5c0.6,0.2,1.3,0.3,1.9,0.4c1,0.1,2.2,0.2,3.1,0l0.1-0.2c0.9-0.1,1.7,0.1,2.5,0
                    c1-0.2,1.8-0.7,2.9-0.8c3.4-0.3,5.9,3.1,10.3,3.9c1,0.2,2,0.7,3.1,0.4c0.4-0.2,0.7-0.7,1.2-0.7c0,4.7,3.8,1.2,5,0.7
                    c0.6-0.3,4.7-0.9,5.1-0.7l0.1,0.3c-0.4,0.5-1.2,0.5-1.5,1.2c0,0.7,0.2,1.1,0.8,1.4c0.8,0.2,1.5-0.1,2.3-0.4
                    c2.9-0.8,6.1,0.3,8.8-0.8c0.5,0.1,1.1,0.3,1.6,0.5c1.1,0.7,2.4,1.1,3.5,1.8l0.1,0.3c-0.5,0.4-0.8,1.2-1.2,1.7l-0.1,0.7
                    c0.1,0.3,0.4,0.4,0.6,0.5c1.6,0.9,3.5-2.1,4.2-3.2l0.9-0.1c0.8,1,1.8,1.3,2.9,1.8l1.1-0.3c0.3-0.5,3.7-2.9,4.4-2.9
                    c0.4,0.4,0.5,1.2,1,1.5c0.6,0,2.4,0,2.8,0.2c1.6,1.9,1.7,2.9,4.2,4.8c0,1.2-1.2,1.8-1.3,2.6l0.2,0.7c0.9,0.4,2.2-0.7,3-1l0.4,0.2
                    l0.1,0.6c-1.4,2.2-1.6,2.6-0.4,4.9c0.2,0.4,1.6,3.6,1.6,3.6c1.5,2.5,3.5,9.4,5.6,11.1l0.1,0.4c1.1,1.3,2.2,3.3,3.6,4.3
                    c0.1,0.6,0.8,0.8,1,1.4c2.2,0.9,4.2-0.2,4.6,1.5c1.5,0.2,2.8-0.2,3.8,1.3c0.1,0.1,0.9,1,0.6,1.2l-0.4,0.3c-0.7-0.1-1.3,0-2-0.1
                    c-4.8-0.7-5.1-0.2-5.1,4.6c0,1-0.1,3.1,0.6,3.8c1.4,1.7,4.8,2,5,4.3c1.1,1.5,3.1,0.9,4.5,1.6c0.9,0.5,3.3,1.4,3.7,2.4l-0.1,0.6
                    c-2.1,1-3.6-0.9-5.3-0.7l0.1,0.4l-0.1,0.3c1,1,2.1,1.3,3.1,2.3c1.1,2.3-3.9,3-4.8,3.7c-0.5,0.9-0.2,1.7-0.6,2.4l-0.1,0.8
                    c0.1,0.8,3.1,1.5,3.8,2v0.7l-0.6,0.4c-3-0.2-13.5,7-16.6,9c-1,0.6-7.6,3.4-8.4,3.1c-0.6,0.2-1.1,0.3-1.6,0.5
                    c-1.2,0.5-2.3,1.3-3.4,2c-1,0.6-2.4,1-3.4,1.4c-0.4,0.1-0.8,0.3-1.1,0.6c-1.2,0.9-5.9,4.7-5.6,6.3l0.5,0.4
                    c1.7-0.2,3.7-4.3,9.5-5.1l0.4,0.4c0.2,0.7-0.6,2.7-0.8,3.5c0.5,0.3,6.7-2.2,6.8-2.2c1.2,0.3,1.6,2.7,2.1,2.9
                    c0.5,0.2,1,0.2,1.5,0.4h0.4l0.1,0.2c0.1,0,0.3,0.1,0.5,0c0.4,0.1,0.8,0.4,1.1,0.7c0.1,0.3,0.2,0.6,0.3,0.9c-0.2,0.5-0.6,1-0.7,1.5
                    c-0.2,0.1-1.9,2.4-2.2,2.7l0,0.4l0.1,0.2l0.4,0.6c1.1,0.1,2.2-0.3,3.2,0.5c0.3,0.5,0.4,1.7,0.2,2.3l0.1,0.3
                    c-0.1,0.3-0.2,0.9-0.1,1.2l-0.2,0.4c0.3,1.1-1.8,6.4-2.6,7.3c-1.1,1.2-2.6,1.8-3.7,3c0,0.3-0.2,0.7-0.3,1l0.3,0.2
                    c1.4,0.2,2.3-0.7,3.3-1.5c1.4-0.4,2.2,1.6,4.5,1l0.6-0.7c-0.1-1.5-0.7-2.9-1-4.4c0.1-0.6,0.6-0.9,0.8-1.5c0.5-0.4,3.9-2.9,4.5-3.2
                    c0.9-0.5,1.8-0.5,2.8-1.2c1.2-0.8,5.7-4.6,6.2-5.8c0.5-0.4,0.9-1.3,1-2c-0.1-0.1-0.1-0.4,0-0.5c-0.1-0.3-0.4-0.6-0.6-0.8
                    c-0.5-0.3-2,0-2.2,0.6c0.7-0.5,1.4-1.6,2.2-2.3l0-0.3c2-1.5,0-2.5-0.1-3.8c0.6-3.5,3.5-1.9,5.4-3.3c0.8-0.6,0.5-1,0.8-1.7
                    c0.3-0.7,1-0.8,1.4-1.3l0.1-0.6l-0.6-0.6l-0.2-1.4c0.2-0.3,0.3-0.7,0.4-1.1c1.1-0.3,3.6-2.5,4-3.6c-0.3-1-0.3-1.6,0.4-2.4
                    c0.3-0.1,0.6-0.2,0.9-0.3c0.2,0-0.1,0.2,0,0.1l1-0.1c1-1.1,3.8-3,5.3-2.4c0.7,0.1,1.2-0.3,2,0c1.1,1.2,1.8,2.6,3.7,2.3
                    c1.9-1,2.7-3.8,5.5-2.7c0.7,0.3,0.6,1.2,2.1,1.8c0.2-0.5,0.5-1.2,0.8-1.7l0.2-0.1c0.4,0.2,0.4,1.2,1.6,1.4c1-0.4,3-0.4,3.1-2
                    l-0.2-0.4c-0.5-0.2-0.7-0.6-1.1-1c0-0.1,0.1-0.2,0.2-0.2c0-0.1,0.1-0.3,0.2-0.4c0.3-0.1,1.7,0.4,2.3,0.4c0.5-0.4,1.5-0.9,2.1-0.5
                    c0,0.3,0.2,0.7,0.4,1l0.1,0.2c0.5,0.7,0.7,1.6,1.3,2.2c0.8,1,3.2,1.3,4.4,1.8c0.3,0.2,3,0.8,3.2,0.7l0.2-0.2l-0.1-0.6
                    c-0.6-0.5-3.1-3.4-2.8-4.2c0.2-0.4,1.1-0.6,1.5-0.6l0.3-0.4l-0.1-0.6c-0.3-0.3-0.6-0.7-0.6-1.1l0.4-0.1c0.3,0.9,4.9,2.5,4.9-0.4
                    c0.5-0.7,2.2-0.6,3-0.8c1.5-0.3,2.8-1.4,4.3-1.7c0.6-0.1,1.3,0,1.8,0.2c2.1,0.6,3.9,2.8,3.7,5.1c0,0.3-0.9,1-1,1.4l0.1,0.3
                    l1.6,0.6l0.4,0.6c-0.2,1,0,1.7-1.4,1.9c-1.2,0.2-5.2-0.8-7.3-0.3c-1.4,0.4-3,0.7-4.3,1.4c-0.7,0.3-1.2,1-1.9,1.2
                    c-0.8,0.8-0.7,1.9-1.3,2.7c0,0-0.6,0.7-0.4,0.8c-1.1,1.1-4.6-0.2-6-0.4c-0.6-0.1-1.1,0.1-1.7,0.1c-1.7,0-3.5-2.5-5.3-0.2
                    c0,0.3,0,0.6,0.1,0.9c0.7,0.6,2.9-0.3,4.3,0.2c2.9,1.2,4.8,3.8,8,4.4c0.5,0.1,1-0.1,1.4,0c1.7,0.2,2.8,1.7,4.4,2.3l0.2,0.1
                    c3.1,0.5,7.2,1.7,10.1,1.8c2.5,0.1,6.4-2.5,8.6-2c0.8,0.2,2.1,0.9,2.8,1.2c1.6,0.7,2.9,1.5,3.9,3v0.4l-0.2,0.2
                    c-2,0.7-6.2-2.8-7.5,0c-0.1,0.3-0.3,0.6-0.2,0.9c0.6,0.6,1.6,0.7,2.4,0.9c1.3,0.3,3.1-0.7,4.7-0.3c1.3,0.3,3.9,1.8,5.2,1.5
                    c1.8-0.4,2.3-5.3,5.7-2.2c0.3,0.4,0.7,1.4,1,1.6c1.4,0.9,4.6-0.5,6.4-0.4c1.4,0.1,1.7,0.9,2.8,1.3c0.4,0,1.3-0.3,1.6-0.2
                    c0.4,0.1,4.6,4.5,5,5.2l-0.3,0.5c-0.2,0.2-0.6,0.6-0.6,1c0.1,2.2,0.1,3.6-1.9,4.8c-0.6-0.1-0.8-0.1-1.4-0.6l-0.2-0.6l0.4-0.8
                    l-0.1-0.5c-1.5-0.8-2,0.4-3.6-1.2l0.4-0.4h0.5l0.7-0.4l-0.3-0.6c-0.5-0.2-1.1-0.6-1.5-1.1c-0.5-0.1-1.4,0.1-1.8,0.5
                    c-1-0.2-4.6,0.7-5.3-2c-1.1-0.9-9.6-1.6-11.4-1.3l-0.6,0.5c-0.2,0.7-0.1,1.6,0.1,2.3c0.4,0.8,3.6,1.2,4.5,1.6
                    c2.5,1.1,4.2,3.5,6.7,4.6c3.4,1.4,9.5,3,11.2,6.7c0.7,1.6-0.5,2.3-0.5,3.5c1.8,1.4,4.2,2.3,6.3,3.5c0.4,2.5-5.7,3-6.9,6.3
                    c1.4,0.8,3.4,0.4,4.7-0.3c1.4-0.8,1.7-2.1,2.7-3.1c1.7-1.7,6.4-0.5,7.5,1.3c0.5,0.8,2.3,1.8,2.1,2.9c-0.8,1-2.5,1.3-3,2.3l0.4,0.5
                    c0.4,0.1,1,0,1.4-0.2c0.7-0.4,2.7-0.4,3.5-0.4c1,0.2,1.6,0.5,2.4,1.1c0.3,0.5,0.1,1,0,1.4c-1.3,3.6-8.5,1.3-9.7,4.1
                    c0.5,0.7,3.5,1,4.4,1c2.5-0.2,4-1,5.3,1.7c0.6,1.2,0.3,2.2-0.5,3.3c-1.3,1.8-4.2,1.1-4.4,2.5c2.1,1.5,3.4,2,5.8,2.6
                    c1.3-0.9,1.9-2.3,1.7-4c0.2-0.3,0.7-0.8,1.1-0.9c0.6,0,1.1,0.5,1.4,0.9c1.7,2.3-1,4.2-2.1,6c-0.5,0.7-0.9,2.3-1.5,2.7
                    c-0.4,0.1-0.8,0.2-1.1,0.2c-0.5-0.5-2.1-2-2.7-2.1l-0.7,0.2l-0.3,0.7c0.3,1.1,3,3.8,4.1,4.1c1,0.2,1.9-0.5,3.3,0l0.4,0.6
                    c-0.3,0.8-0.9,1.5-1.3,2.2c0.6,1.2,2.3,1.4,2.4,2.5c-0.2,1.5-2.6,2.7-3.8,3.5c-1.4,1-2.4,2.9-4,3.5c-1.7,0.7-7.7-3.1-10-3
                    c-0.3,0.2-0.6,0.4-0.8,0.7c0.1,0.1,0.2,0.2,0.2,0.4c0.9,0.6,2.2,0.8,3.2,1.3c1.8,1,3.4,3.4,2.5,5.5c-1.1,1.6-1.8,3.8-2.8,5.5
                    c-0.8,0.2-1.3,0.8-2.1,1c-5,1-8.3-2.4-11.5-2.5c-2-0.1-4.4,0.8-6.5,0.9c-0.9,0.1-3.1-0.3-3.9-0.1c-0.1,0.3-0.1,0.9,0.1,1.2
                    c2.3,0.6,5.7,0,7.7,1.5c-0.4,1.1-2,3.5-2.9,4.2c-0.3,0.2-1.1,0.2-1.6,0.3l-0.2,0.4c0.3,1.4,1,1.7,2,2.5c0.7,0.1,1.6,0.1,1.9-0.6
                    c0,0.2,0.2-0.2,0.2-0.2c0.2-0.3,0.2-0.7,0.2-1c1-1.2,1.5-2.6,2.7-3.5c0.6-0.4,1.4-0.4,1.6-0.6c0.7,0.4,1.5,0.5,2.3,0.8
                    c0.9,0.3,1.8,0.9,2.8,1c1.2,0.1,2.4-0.6,3.6-0.1c0.3,0.2,0.7,0.8,0.7,1.2c1.2,0.1,6.1,2.6,5.4,4.5l-0.7,0.3
                    c-0.4-0.2-0.9-0.3-1.4-0.3l-0.4,0.6l0,0.5c0.4,0.5,0.9,1.4,1.4,1.7c2,1.1,6.6-0.1,6,4.1c-0.2,1-0.9,1.9-0.7,2.9
                    c0.4,1.1,2.1,0.9,2.8,1.6c0.6,0.6,0.7,7.4,0.1,8.3c-0.9-0.1-1.7-0.5-2.5-0.7l-0.6,0.5c-0.1,0.4-0.3,1.1-0.6,1.4l-0.9-0.1
                    c-0.5-0.6-1.2-0.9-2.1-0.8c-0.6,0.2-1.1,1.1-1.2,1.7c-0.3,0.2-0.6,0.4-1,0.6c-1.6,0-2.4-0.8-3.8-1c-0.7-0.1-3.7,1-4.3,1.4
                    c-0.5,0.4-0.6,1-0.9,1.5l0,0.5c1.8,1.4,4.4-0.6,6.6-0.2l0.4,0.6c-2.1,1.9-1.7,0.9-4.1,1.3c-1,0.2-1.8,1.1-2.8,1.2
                    c-1.5,0.1-4.1-2.5-5-3.5l-0.8-0.2l-0.4,0.2l-0.9-0.1c-0.9,0-1.7-0.4-2.6-0.5c-1.8-0.2-5.3-3-6.3-2.8c-0.2,0.8,0.2,3.1,0.6,3.9
                    c0.4,0.2,0.6,0.6,1,0.9c0.8,0.6,2,0.7,2.8,1.3c0.5,0.3,0.9,0.9,1.3,1.2c1.1,0.8,2.5,0.2,3.7,0.6c1,0.3,1.2,0.8,1.7,1.5
                    c0.4,0.6,1.2,1,1.6,1.5c0.9,1.1,0.8,3.6,0.6,4.9c0.8-0.1,1.5-0.1,2.4,0c1.7,1.5,2.1,4.1,3.7,5.5c0.8,0.3,1.6,0.4,2.5,0.5
                    c0.1,0,0.2,0,0.2,0c0.4-0.1,1-0.1,1.3-0.2c0.9-0.4,1.7-1,2.8-1c1.3,0,2.4,0.8,3.5,0.9c2.3,0.2,4.3-1.3,6.8-0.7
                    c1.9,1.3,0.9,2.8,1.6,4.3c0.6,0.6,1.3,0.8,2,1.2l0.2,0.5l-0.1,0.5c-0.6,0.3-2.2,0.7-2.9,0.8l-0.6,0.6l0.1,0.2
                    c0.6,0.3,1.1,0.5,1.7,0.8l0.3,0.7l-0.2,0.7c-1,0.9-3.1,1.7-3.3,2c-0.1,0.2-0.4,1.1-0.2,1.3c-6.1-6.7-7-1-9.8-2.5
                    c-1.2-1.9-2.3-1.6-3.2-4.2c-0.6-0.5-1.4-0.1-2.1,0c-0.8,0.1-2.8-0.6-4-0.6c-1.9-0.1-2.2-1.4-3.4-2c-0.5-0.2-6.3-0.2-7.2-0.1
                    c-0.3,0-1.1,0.5-1.3,0.6l-0.1,0.6l0.4,0.6c1.4,1,3-0.1,4.5-0.2c0.5,0,1.2,0,1.7,0.2c0.3,0.1,0.7,0.4,1,0.5
                    c1.5,0.7,5.4,2.4,6.5,3.1l0.4,0.7c-0.1,2.8-7.3,3.7-7.3,5.9c1.3,1.2,3.9,0.5,5.5,1.4c0.4,0.5,0.7,1.3,0.6,1.9
                    c-0.2,0-0.5,0.2-0.6,0.4c-0.1,0-0.3,0-0.3,0l-0.1,0.3c-2.6,1.3-5.8-3.8-9-3.5c-2.5,0.2-8.1,4-11.6,4.7c-0.4,0.1-1.1,0-1.5,0
                    c-4,0-6.3-4.3-9.9-5.3c-3.1-0.9-4.6,0.3-7.5,0.2c-2.2-0.1-2.7-2.2-4.2-2.6c-0.7-0.2-3.8-0.1-4-0.3c2.3,0.8,3.3,4.1,5.7,4.5
                    c2.5,0.4,5.2-0.6,7.7,0c4.5,1.1,4.6,3.1,7.2,4.5c1,0.5,2.3,0.5,3.3,0.9c1.8,0.1,3-0.6,4.5-0.6c1.3,0,2.2,0.6,3.5,0.1
                    c2-0.8,1.9-2.4,5-2.2c0.6,0.4,1,1,1.6,1.5c0.3,0.1,0.7,0.1,0.9,0c4-1.5,4.1-0.5,5.6,3c1.6,0.9,3.7,2.4,5.5,2.4
                    c0.7,0,1.4-0.1,1.9-0.4c1.3-0.7,3-0.1,4.4,0.3c0.9-0.4,3.9-1.5,4.5-2.1c0.3,0,0.7,0,1-0.2c0.3,0,0.6,0.2,0.8,0.4l0.1,0.5
                    c-0.3,0.3-1.4,2.4-1.5,2.8l0.2,0.4c0.5,0.1,1,0,1.4-0.1l0.1,0.2c0,0,0.2-0.3,0-0.1c2.4-1.8,7.5-2.1,8.5,1.4c0.2,0.8,0.5,1.1,0.2,2
                    c-1.5-0.5-2.9,2.6-3,2.7l0.1,0.5c1.9,0.7,5.1,1.2,7.1,1.1c0.6,0,2.7-0.4,3.2-0.3c0.1,0,0.6,0.3,0.7,0.4c0.7,0.5,0.6,1.7,0.4,2.4
                    c-0.3,0.8-0.8,1.7-1.5,2.1c0,0.2,0,0.8-0.1,1c1.2,1.8,1.9,3.1,2,5.2c0.1,2.2-1.3,3.3-3.4,2.2c-0.8-0.4-1.6-1.5-2.4-1.9
                    c-0.4-0.2-1-0.3-1.4-0.4c-0.1-0.2-0.6-1.1-0.7-1.2c-0.9-0.7-8.1-2.3-8,0.4c1,1.2,2.3,1.8,3.5,2.7c0.1,0.4,0.3,0.8,0.5,1.2
                    c-0.1,1,0.1,1.1-0.6,2l-0.8,0.2c-1.3-0.5-2.7-0.8-4-1.3c-2.4-0.9-4.7-2.2-7.1-3.1c-0.9-0.3-1.9-0.5-2.7-0.9
                    c-2.8-1.3-5.5-2.8-8.3-4.1c-2.1-0.9-4.5-1.4-6.7-2.3c-2.2-0.8-4.2-1.9-6.3-2.8c-0.9-0.4-1.5-1.3-2.5-1.6c-0.4-0.1-0.9-0.1-1.3-0.2
                    l-0.2,0.3c0.6,3.8,8,6.6,11.2,7.6c1.4,0.4,3,0.4,4.4,0.7c1.2,0.3,2.4,1.2,3.6,1.6c0.7,0.2,1.6,0.1,2.2,0.7
                    c0.3,0.3,0.6,0.8,0.9,1.2c-0.1,0.8,0.1,1.9,0.7,2.4c1.2,0.8,7.2,2.8,8.9,3.2c1.1,0.3,2.2,0.1,3.2,0.3l0.1,0.3l-0.4,0.5
                    c-0.4,0.1-2.2,1.1-2.4,1.4c-0.1,0.4-0.2,0.8-0.2,1.2l0.4,0.3c1.3-0.1,2.1-1.4,3.1-1.2l0.4,0.3l0.2,0.6c-0.2,0.3-0.7,0.9-0.6,1.3
                    l0.4,0.4c1.2,0.2,2.1-0.5,3.2-0.5c0.6,0,0.6,2,0.6,2.4l0.4,0.3c1.5,0,4.2-3.7,5.5-2.7l0.3,0.5c0.2,1-1,3.4-2.1,3.2
                    c-0.3,0.4-0.9,0.8-1.3,0.9c-1.8-0.5-2.8,0.9-4.2,1.6c-0.2,0.4-0.6,1.3-0.9,1.5l0.3,0.7c1.7,1.8,4.9-2.2,6.7-2.1
                    c0.6,0,1.3,0.5,1.7,0.8c1.7,1.1,4.9,2.1,5.9,2.7c0.6,0.4,1.2,1.1,1.9,1.6l0.2,0.4c-1.5,0.9-4.9,1.5-6.5,0.8
                    c-0.8-0.4-1.4-1.2-2.3-1.2c-0.9,0.2-1.3,1.2-2.3,1.3l-0.8-0.4c-0.2-0.4-0.4-0.8-0.5-1.2l-0.4-0.2c-0.7,0.1-2.2,1.6-2.4,2.3
                    c0.6,0.5,1.4,0.4,2,0.8l0.3,0.4c-0.6,2.4,5.7,1.7,6.3,2.6c0.4,0.7-0.7,1.4-1,1.9c-1.3,1.9-0.8,2.4-1.3,4.3c0.4,1,2.5,4.2,2.6,4.6
                    c-0.5,1.3-0.7,2.9-1.4,4.1c-2.4,1.3-3.6-0.1-6-0.3c-0.9-0.1-1.8,0.1-2.7,0c-0.3,0.2-0.5,0.5-0.6,0.8c0.2,0.2,0.3,0.5,0.3,0.7
                    c0.7,0.6,3,2.3,3.2,3.1c0.3,1.1-2.9,4.8-4,5.2c-0.4,0.1-1.1-0.1-1.5-0.2c-0.1,0.1-0.4,0.4-0.6,0.4c-0.1,0.4-1.1,2.1-1.4,2.3
                    c-0.6,0.1-1.2,0.1-1.7-0.2c-0.3-0.5-0.9-0.8-1.4-0.8c-0.7,0.3-0.7,0.9-1.1,1.2c-1.4,1.6-3.1-3.5-6.8-2.6l-0.3,0.6
                    c1.4,3,7.2,5.2,6.3,9.4c-0.5,2.5-4.7,5.9-7.1,6.8c-0.9,0.3-2.1,0.3-3.1,0.5c-2.6,0.4-3,1-4.5,2.9c-0.7,0.8-1.3,1.5-2.2,2.2
                    c-0.7,0.6-0.8,0.6-1.7,0.8c-0.4,0.1-0.7,0.3-1.1,0.4c-0.2,0-0.4,0-0.6,0.1l-0.5,0.2c-0.1,0-0.1,0.1-0.2,0.1
                    c-0.1,0-0.1,0.1-0.2,0.2c-0.3,0.1-0.6,0.7-0.7,1l0,0.3c-1.8,4-5.3,3.6-7,5.8c-0.5,0.6,0.2,1.7,0,2.4c-1.5,2.5-10.1,3.5-12.7,2.3
                    c-0.6,0-0.9,0.4-1.3,0.4c-0.3,0.9,0.1,1.7,0.1,2.6c-0.1,1.9-1.8,1.4-3,2.1c-0.7,0.4-1.1,1.1-1.7,1.5c-0.1,0.5-0.6,0.8-1.1,0.9
                    c-1.5-0.7-1.1-0.4-1.6-2l-0.4-0.3l-0.4,0c-1.4,1.1-3.8,5.4-4.1,7.1c-0.5,0.4-1.2,1.5-1.6,1.6c-0.7,0.4-5.1,2.5-5.1,2.5
                    c-1.7,1.4-2.9,3.5-5.2,4.1c-2,0.5-4.2-0.7-6.2-0.3c-0.5,0.1-1,0.7-1.3,0.8c-0.2,0.4-0.6,0.6-0.8,1c-0.4,0.7,0,5.4,0,6.6
                    c-0.1,0.3-0.3,0.5-0.5,0.8l0,0.4c-1.5,0.8-2.9,1.9-4.5,2.7c-0.2,0.1-0.7,0.2-0.9,0.4c-0.3,0.2-0.5,0.5-0.7,0.8
                    c0,0.6-0.5,1.2-0.4,1.6c0.4,2.7-1.7,2.7-3.5,2.7l-0.7,0.4c-0.1,1,0.3,2.1,0.3,3.1c0,0.7-0.4,1.9-0.9,2.4c-0.5,0.6-3.6,3.4-4.2,3.4
                    c-0.3-0.2-0.7-0.8-0.8-1.2l-0.9-0.3c-2.7,1.2-3.3-1.7-4.8-2.3l-0.6,0.4c0,0.7-0.6,1.7-1.3,2l-0.3,0.9c0.6,1.6,1.7,5.3,0.7,6.8
                    c-2.4,1.7-7.8,0.5-9.7,1.4c-0.3-0.4-0.5-0.9-0.6-1.3l-0.7,0.1c-1.5,2.7-2.9,1.8-4.5,1c0.2-16.3,0.5-35.8,0.6-46.1
                    c0-10-0.4-36.9-0.7-40.4c-1.2,0-85.4-0.1-90.1-0.1c-9.2,0.1-44.6-0.3-53.1-0.2c-11.7,0-36.2,0.6-36.8,0.6
                    c-57.7-0.9-215.4-0.9-227.1-1c-18.2-0.1-158.2,0.3-163.3,0.3c-21.1,0.1-42.2,0.1-63.3,0.3c0.8-1.3,1.7-5-0.1-5.9l-1.5-0.1
                    c-0.7-1.4-1.2-6.4-0.1-7.6c0.6-0.3,1.5-0.5,2.2-0.5c1.5,1.8,2.9,2,4.1,3.3c1.6,0.7,3.2,1.5,4.6,2.5c0.9,0,2.1-0.2,3-0.7l1.3,1.5
                    l2,0.1l0.1-0.5c-1.4-1.9-2.1-5.4-3.4-6.5l-0.6-0.1l-1.1,0.5c-0.3-1.9,0-5.1,1-6.8c-0.4-1.8-0.7-3.7-1.2-5.4
                    c-0.2-0.7-0.8-1.4-1-2.1c-0.3-1.1-0.3-2.6-0.7-3.7c-0.1-0.3-2.6-4.8-3.1-5.1l-0.1-1.3l0.7-1l-0.1-0.9c-0.5-0.8-1.7-2.1-2.7-2.3
                    l0.8-0.7l0-0.8c-0.3-0.8-1.5-1.7-2.2-2.2c-0.9,0.1-2.3-0.5-2.9-1l-0.1-0.5l0.7-0.3c1.1,0.8,2.2,0.2,3.3,0.3c1.1,0.1,2.3,1,3.5,0.6
                    l0.6-0.7l-0.1-0.9c-0.9-0.2-2.6-1.7-3.2-2.3c-1.5,0-3.6-0.2-5-0.9l-0.1,0.7l0.6,0.8l-0.6,0.7l-1.1-0.3c-0.5,0.3-1.4,0.5-1.9,0.4
                    c-0.3-0.2-0.6-0.4-0.9-0.6c-1.1-0.8-2.4-2-3.6-2.7c-1.7-0.9-4.1-1-5.3-2.7c-1.2,0.4-2.5-0.5-3.7-0.8c-0.3-0.6-2.3-3.7-2.1-4.2
                    l0.7-1.2c-1-6.1-9.2-4.8-5.9-14.6l0.8-0.6c0.1-1.9,1.7-3.4,2.4-5.1c0.6-1.5,0.1-3.4,1.3-4.6c2.8-0.7,9-6.1,11.1-5.4
                    c0.7-0.6,4.8-3.7,5.8-3.5c1,0.1,1.9,0.4,3,0.2c0.2,0,0.6-0.5,0.9-0.5c1.7-0.3,3.5-0.9,5.2-1.1c1.6-0.2,3.3,0.1,4.9-0.1
                    c2.2-0.2,7.5-1.3,9.5-1.9c2.2-0.3,14.1-0.7,16.7-0.2l1.7-1.9l1.5,0.5l0.8-0.7l0.3-0.9l-0.8-2.5c-0.4-0.6-2-1.2-2.7-1.3
                    c-0.9-1.4-2.9-4.1-4.5-4.9c-1.3-0.1-3.8-0.8-5-0.6c-1.8-1.1-3.4-2.5-4-4.5c-0.9-0.5-3.6-2-4.8-1.9c-0.6-0.6-0.6-2.1-0.5-2.8
                    l2.2-1.5c-0.4-1.4-0.2-5.2,0.9-6.2l0-1.1c-0.4-0.8-1.4-1.8-2.2-2.1l-0.3-3.1c-0.2-0.2-0.8-0.1-1,0c-1.2,1.5,0.2,3.8-0.6,5.2
                    c-0.7-0.6-2.5-1.8-3.5-1.6l-0.3,0.6c0.7,1,1.6,3.2,1.3,4.5c-1.1,1-4,1-5.5,1.6c-1.1,1.1-1.7,2.9-2.8,3.8l-0.1,1.7l-2.3,0.2
                    c-4.4,3.3-7.6-0.7-9.5,0c-0.8,0.3-1.9,1.4-2,2.2c-5.5,0.8-2.6,6.9-11.1,4.2l-0.7-0.9l-1.4-0.5l-1.1,0.2l-1,1.2
                    c-1.4,0.1-2.2-1.1-4.1-0.6l-0.8,0.5c-0.7-0.2-1.5-0.4-2.2-0.8l-1,0.3l-0.9,1c-0.1,0.1,0.9,4.9,1,5.6c-0.2,0.4-0.9,0.9-1.3,1.1
                    l-0.9,0l-1.1,1.2c-0.3,1.7,0.8,3.5,0.6,5.2c-0.4,2.1-0.5,2.1-0.4,4.5c0,0.6-0.3,1.2-0.1,2l-0.2,0.4l-1.8-1.1l-0.9,0.1l-0.8,0.6
                    l-0.1,1.4c-0.5,0.1-1.5,0.1-2-0.2l-0.5,0.1l0,0.8c11.9,9.2,6.6,22.1,10.7,26c0.9,3.2-3.5,7-4,10.7l-1.7,0.3
                    c-0.5,0.4,0.3,3.1,0.5,3.7l-0.3,0.7c-1.2,0.9-3.9,1.2-3.9,2.9l-0.9,0.1l-1.3,1.3c-0.8,1.6,0.7,3.1,1.2,4.5
                    c0.4,0.9-0.3,2.6,0.4,4.4c0.6,1.4,1.3,2.8,1.9,4.3c0.4,1,0.5,2.1,0.9,3.1c0.8,2.3,2.6,4.6,1.9,7.1l-0.3,0.4
                    c-2-2.5-3.3-1.8-4.7-3.3l-1.1,0.1c-0.1,0.2-0.9,1.6-1,1.7c-0.1,0.2-0.7,6.4-0.6,6.8l-0.3,0.5c-0.8,0-2.4,0.5-3,1.1l-0.3,0.7
                    c0,2,1.2,3.2,1.8,5c0.3,0.8,0.2,1.9,0.5,2.7c0.8,2.1,2.8,4.1,3,6.9c-1.8,1.3-7.3-5.6-9.3-6.3c-0.5,0-1.3,0.2-1.7,0.4l-0.6,0.9
                    c-0.2,0.7,0.2,1.5,0.4,2.1c0.7,2,0.8,5.1,1,7.3c0.1,0.8-0.4,1.4-0.4,2.1c-0.1,1.8,1,3.6,0.7,5.4c-0.2,1.8-1.4,3.2-1.1,5.1
                    c0.6,3.5,2.5,6.8,4.4,9.8c-0.5,1.8-0.6,6.1,1.9,6.5l0.4,0.9c-0.4,2.1-2.2,5.3-3.3,7.1c-2.2,3.7-4.7,7.5-9.3,4.1l-1.6,0.7
                    c-1.8,1.3-0.5,4.6-1.8,6.3c-0.9,0.7-2.7,1.5-3.2,2.4c-1.9,0-3.4,3.3-6.2,2.8c-1.7-1.1-1.1-3.9-2.8-5.1l-1.1-0.3l-1.1,0.6
                    c-0.3-0.3-0.4-1-0.5-1.3c-1-5.2,0.7-8.5-5.7-10.4l-1.6-4.9c-1.1-3.6-0.7-3.1-4.4-4.5c-0.8-0.3-2.5-1-3.5-0.9l-1.2,0.8l-0.8-0.3
                    l-0.9-1.3c-0.7-0.4-12-0.3-12.6,0.3l-0.7,1.2l0.4,0.6l1.5,0.6c0.4,1.4,0.2,3.4-0.1,4.9l-0.7,0.8c-2.5,0-3.7-2.3-5.8-4
                    c-0.2-0.2-0.6-0.1-0.7-0.2c-0.7-0.6-3.5-2.9-4.5-2.8c-3.6,0.3-3.9,3.3-8.5,1.6c-0.5-0.2-0.9-0.6-1.4-0.7c-0.6-0.2-1.6,0.1-2-0.5
                    c-0.9-1.5,2.4-4.5-0.6-8.4c-1.6-0.2-5.5,0.3-6.2-1.6c-0.2-1.2,0.5-3.7,0.2-4.4c-0.3-0.6-1-1.2-1.2-1.9c-1.7,0-3.8-0.2-5.4,0.3
                    c-0.6,1-0.9,3.6-0.8,4.8c-0.2,0.5-0.9,1.6-1.5,1.8c-1-1-0.7-2.4-1.3-3.5c-0.8-1.6-2.6-2.9-2.9-4.7c0.1-2.1,2-3.1,2.9-4.8
                    c0.6-1.3,0.7-5.1,0.3-6.5c-0.1-0.4-0.5-0.9-0.6-1.3c-0.4-1.4-0.1-3.1-1.7-3.9l-0.8,0.2c-0.2,0.4-1,2-1.4,2.2l-3.8-4
                    c-0.3-0.3-0.7-0.4-0.9-0.7c-5.3-5.9-1.4-11.5-3.1-14.6l-1.1-0.6c-1.4,0.3-5.3,8.4-5.7,9.2c-0.7,0.4-2.2,1.1-3,1.1l-1.7-0.9l-1,0.5
                    c-1.4,1.6-2.7,5.5-3,7.6l-0.9,1l-0.5-0.1c-0.4-1.9-0.5-6.6,0.1-8.4c0.1-0.3,1.2-1.4,1.3-1.8c1-2.3-0.7-6.7-1.4-9
                    c0-0.1-0.6-0.6-0.8-0.7c-0.9-0.1-4.3,3.1-5,4l-0.4-0.1l-1.3-2l-1.3,0.2c-0.6-0.5-1.9-0.7-2.6-0.5c-0.6-0.7-2.5-2.4-3.5-2.5
                    l-1.4,0.6l-1.7-0.3c-3.1,1-2.5,3.5-4.5,5.5c-0.6,0.1-1.7-0.4-2.1-0.6l-2.3-2l-0.7,0.3c-2,1.6-0.7,4.8-1.7,6l-0.5-0.1l-0.4-0.4
                    c-1.6,0.4-2.9-2-3.8-2.8c-0.9-0.9-2-1.4-3.1-1.8c-0.9-0.4-2.6,0-3.2-0.6c0-0.1-0.2-0.8-0.1-0.9c0.5-2,2-8,1-9.9
                    c-0.5-1-1.2-1.9-1.7-2.9c-1.4-2.6-1.5-4.1-4-5.9c-1.1-0.1-2.7,2-3.1,2.8l-0.8,0c-0.7-1.4-1.6-2.9-2.2-4.3
                    c-0.6-1.4-0.5-3.2-1.5-4.3l-0.6-0.1l-1-0.8l-1.3-5.2l-1.5-1.5l-0.7,0.2l-1.3,1.8l-0.1,2.5l-1.3-1l-0.5,0.5
                    c-0.1,0.6-0.3,1.6-0.2,2.2c0.1,1.1,0.6,2.3,0.7,3.4c0.1,1.2-0.1,2.3,0.1,3.5c0.1,0.4,0,0.6,0.1,0.9c0.4,1.3,1.4,2.7,1.7,4l0.3,3.6
                    c0.2,2.2,0.2,3.7-1.5,5.3c-0.4,0.1-1.1,0.1-1.5-0.1c-0.4-0.8-1.5-1.9-2.4-2.1l-1.4,0.2l-1.1-0.8c-0.7-1.3,0.6-2.8-0.1-4.2
                    c-0.5-1.1-1.4-2.1-2-3.1c-0.8-1.4-1.1-2.8-2.1-4.2l-1.4,1.6l-0.7,0.2c-1.8-1.4-3.5-4-2.5-6.4l1.6,0.6l0.6-0.3
                    c0.5-1.3-1.1-2.6-1.6-3.5c-0.5-0.8-0.9-2.9-2.1-3.2c-1.9-2.8-0.3-5.7,2.6-7c0.9-1.2,0.9-2.8,1.9-4.1l0.8-0.2
                    c1,0.2,3.7,2.5,4.2,3.4l2,0.3l1.1-0.7c0.1-1.7,0.1-3.8-0.4-5.4l-1.6-1.5c-1.4-2.4,3.1-7.1-2.5-8.8c-0.3-0.8-0.6-1.1-0.2-1.9
                    c0.4,0,1.3,0.7,1.5,0.9l0.6-0.1l0.6-0.7c0.3-5.4-2.7-5.2-2.8-6.6c0.7-0.5,1.4-1.7,1.6-2.5c0.1-2.9-3.5-8.3-4.9-10.7
                    c-1.6-2.7-0.8-3.5,0.4-6.3c0.4-0.9,0.9-2,1.6-2.8l1.1,0c0.8,0.3,6.3,9.2,8,11l0.7,0c1.4-1.2,2.2-3.2,1.8-5c-1.9-2-5.3-9-4.9-12
                    c0.2-1.3,1.2-2.6,1.2-4.1c0-1.6-0.5-3.1-0.3-4.8c-1-1.1-1.3-2.3-2.1-3.5c-0.8-1.2-2-2.1-2.8-3.3c-1.4-1.9-3-5.6-2.8-7.9
                    c4.5-0.9,9.3,3,9.7,3l0.9-0.5c0.8-1.1,1.3-2.3,1.7-3.6c1.3-4.4-1.6-5.5-3.3-9.2c-0.7-1.6-0.7-3.8-1.4-5.4
                    c-0.9-1.8-1.7-4.2-2.8-5.8c-0.9-1.4-6.4-5.8-8-5.8c-1.4,0-1.1,2.7-2.6,2.8c-0.3,0,0.6,3.5,0.3,3.6c-0.9,1.3-2.5,4.6-2.4,6.2
                    l-0.7,0.8l-0.7,0.1c-0.4-0.3-1.4-1-1.9-1.2c-0.2,0.7-0.8,1.2-1.3,1.8c-2.5,2.5-5.4,0.3-7.5-1.5c-1.3,0.7-2.4,3.8-2.5,5
                    c-0.1,1.3,0.4,3.2,0.5,4.6l-1.3,0.8c-0.5,1.3-0.1,2.6-0.2,4c-0.4,5.5-1.6,6.8,0.4,12l-0.3,0.5l-1.5-1.2c-1.2,0.1-2.8,3.6-3.1,4.5
                    l-0.7,0.1c-1.8-2.3-4.3-3.4-6.3-5.4l-0.5,0.2c1.1,3.3,2.8,9.2,2.2,12.8c-0.5,2.6-1.7,2.7-0.7,5.7l-0.3,0.3l-0.9,0
                    c-2.1-1.6-3.9-9.3-5.7-11.9l-1.1-0.2c-0.9,0.7-0.9,3.5-0.6,4.5l-0.3,0.4c-0.3,0.1-1,0-1.3-0.2c-0.5,0.9,1.5,3.4,0.8,5.6l-0.8,0.5
                    c-4.1-0.1-5.2-11-9-13c-0.7-0.1-4.7,1.4-5.5,1.7c-1.4-0.5-3.1-4.8-3.6-6c0.7-1.8,0.9-10.9-0.5-12.8c-0.1-0.1-1.8-1.5-2-1.7
                    l-0.8-0.1c-0.2,0.6,0.1,1.6,0.3,2.1l-0.4,0.6c-2-0.7-6.2,6.3-7.1,6.6l-1.3,0.1c-1.2-0.9-2.2-2.2-3.4-3.1c-0.5-0.4-1.3-0.4-1.8-0.8
                    c-1.2-0.8-2.3-2.4-3.7-2.9c-0.1-0.7-0.8-1.9-1.5-2.3l-2.4,0.4c-2.2-0.6-2.6-7.4-2.3-9.1c0.4-0.7,1.1-1.4,1.7-1.9
                    c3.3-0.5,4.4,0.5,7.1-2.2c0.4-0.4,1-1.1,1.1-1.7l-0.4-0.6c-0.9,0.3-2.7-0.1-3.5-0.6c-1.6,0.1-2.7,1.3-4.3,1.4
                    c-1.1-0.3-2.2-1.4-2.7-2.4c-0.5-1-0.1-1.9-0.3-2.9c-0.4-2.6-2.3-5.2-2.4-7.9c-0.1-1.6,0.3-3.2,0.1-5.3c0.8-1,0.9-2.6,0.6-3.8
                    l1.3,0.2c0.6,0.3,1.5,2.6,1.7,3.2l0.5,0.1c3.3-2.8,5.6-4.4,5.5-8.9l1-1c2.1,0.9,3.1,4.2,4.6,4.6c1.8-0.4,5,0.1,6.7,0.5l0.1,0.4
                    l-0.6,0.9c0.3,0.7,1.6,1.5,2.3,1.7l0.8,1.3l0.8,0.3c0.7-0.6,4.1-3.7,5.2-3.3c1,1.2-1.7,5.9-0.9,7.2c1,1.3,3.1,2.2,4.7,2.1
                    c1.1-0.9,2.4-3.6,3-4.9l-0.1-1c2.7-4.3-2.4-6.2-1-8.3l0.8-0.7l1.5-0.2l0.9-0.9c0.7-1.2,0.2-3.2,0-4.5c-0.2-2-0.8-4.6-0.7-6.6
                    c0.1-2.3,2.9-7.6,1.6-9.5l-0.5-0.7c-1-0.5-5-1.1-5.3-2.1c0.4-0.6,1-1.3,1.6-1.6c0.4-1.3,0.8-2.8,0.8-4.2l0.5-0.3l1.5,1.6l0.8,0.1
                    l2.8-4.2c3.1-0.1,4.3-2.7,5-5.3l-0.2-0.5c-0.7,0.2-2.1,0.4-2.8,0.2c-1.3-1.4-1.8-5-1.7-6.7l-0.5-0.3c-1.8-0.2-3.4,1.2-5,0.8
                    l-0.4-0.5l-0.2-3.5c-1.9-2.1-3.5-5.6-6.6-6.1c-2.4,0.8-6.2,1.2-8.5,0.1c-0.9-0.5-1.2-2-2.2-2.3l-1.4,0.1c-0.7,0.4-1.4,1.3-1.9,1.9
                    l-0.9,0.3c-0.7-0.1-3.2-2.5-3.9-3c-1,0.1-2.4,0.4-3.3,0.9c-3-1.3-2.7-6.3-3.8-6.9c-5-1.1-3.7-3.7-5.6-7.4
                    c-0.8-1.5-1.7-2.8-2.1-4.5l1.6,0l0.3-0.7c-0.2-0.6-0.1-1.7-0.7-1.9c-1.1-2.2,0.1-3.1-1.1-5.1l-1.1-0.2l-1,1.2
                    c-0.5,0.7-3.1,1.1-3.9,1c-2.5-1.5-2.9-3.8-2.8-6.4c0,0-2.5-0.5-5.7-0.5c-3.2,0-3.4-0.3-0.6-1.5c2.9-1.2,3.3-1.6,1-2.3
                    c-2.4-0.7-3.6-2.4-0.1-2.4s3.6-0.6,5.3-2s3.8-4.3,2-3.8c-1.8,0.4-4.8-0.2-4.8-0.2l-0.7,0.1c-0.2-0.4-0.1-1.1,0.1-1.5l-1.2-2.1
                    c-2.2-0.3-4.1-2.7-4.1-4.9c0.9-1-0.2-4.6-1.2-5.3c-0.6-0.4-1.7-0.7-2.4-1c-0.1,0-0.3,0-0.4,0c-2-1.6-1.6-4.7-3.8-6.6
                    c-0.5-0.5-1.2-0.4-1.8-0.7c-1.3-0.6-2.9-1.3-4.1-2.1c-1.7-1.1-2.6-3.1-5.1-2.9l-0.5-1c0.8-2.8,3.7-5.5,3.5-8.4l1.5-1.3l-0.1-1.2
                    c-0.8-0.8-1.9-1.5-3-1.9l-0.8-1.5c0.1-8.5,13.3-3.9,15.2-6.6l0.2-0.5c-0.2-0.5-0.3-1.6-0.1-2.1c1-0.7,2.8-2.4,2.6-3.8
                    c-0.1-0.2-0.6-0.7-0.7-0.8c-2.9-2.2-5.5-3.1-5.4-7c0-0.7,0.4-1.4,0.1-2.1l1.5-3.1c-0.1-1.2-2.4-3.6-3.3-4.4
                    c-1.6,0-3.9-3.1-3.8-4.4c0.1-1.4,0.8-3.1,0.8-4.5l-0.8-2.4c-0.9-2-2.6-2.3-3.5-5l0.4-1.4c0.5-0.5,1.4-1,2.1-1.3
                    c1.3-0.1,2.9,0.2,4.2,0.5l1.7-0.7c1.9-1.9,1.6-6.8,3.6-8.1c0.5,1.2,1,2.4,1.3,3.7l1,0.8c0.3,0.1,2.1-0.2,2.5-0.3l0.4-1.7l1.3-1
                    c1.6-0.2,3.3,0.8,4.8,1.1c0,0,3.7,1.2,3.1-1.8c-0.5-3,0.3-3.1,1.3-3.5c0.9-0.4,0.5-3.4-1.3-4.3c-1.8-0.9-2.3-1.8-2.4-2.9
                    c-0.1-1,1-2.3,2.2-2.7c1.2-0.4,2.4-0.5,4.8,0.5c2.4,1,2.6,1.6,2.7,2.4c0.1,0.8,1.4,1.2,2.6,2.5c1.2,1.4,2.8,2.8,3.2,3.3
                    c0.3,0.5,1.4,1,1.4,1c0.9,0.3,1.5,0.9,2.5,1.1c0.7,0.7,2.5,2.7,2.5,3.7l1,0.7c1.9-1.6,3.8-4.1,5-6.3l-0.3-0.7
                    c-1.4-0.5-2.4-1.6-3.5-2.6c-2.9-2.7-0.3-4-1.2-7.1l2.3,1.1l0.8-0.4c0.8-0.9,1.5-2.5,1.6-3.7c2.2,0.5,6.6,0.2,7.9-1.9
                    c0.8-1.3,1-3.4,2.1-4.6c2.4-2.6,5-2.4,5-6.7c0-4.2-3.9-6.8-6.3-9.8c-1.3-1.6-3.9-4.7-6.3-4.3c-0.1-0.1-0.7-0.6-0.7-0.7
                    c-0.4-1.2-0.7-2.7-1.2-3.8c-1.3-2.7-4.4-4.9-6.1-7.5c-0.7-1.1-1.2-2.5-2-3.6c-2-2.9-3.2-2.4-3.4-6.2c-1.3-1.8-5-2.9-5.6-5.2
                    c-0.5-1.6,0.3-3.6-0.5-5c-1.5-2.4-3-4.6-3.4-7.4c1.4-2.6,0.9-4.8,4.5-6c1-0.3,2.2,0.8,3.1,1.1c0.8,0.2,2.3-1.2,3.2-1.1
                    c0,0,3.2,0.6,5.1,1.6s4.7,3,4.5,4.1s-1.2,0.8-2.2,0.8c-1,0-1,0.7-1.5,1.7s1.6,2.2,1.6,2.2c0.6,0.4,1.3,0.9,1.8,1.7
                    c0.8,1.1,1,2.8,2,3.8c1.1,1.1,2.8,1.7,4.2,2.5c1.5,0.9,3,2.5,4.2,3.7c1.9,1.9,2.9,4.3,4.5,6.3c0.3,0.3,1.5,1.1,1.8,1.4l1.1,2.1
                    c2.1,4.1,0.8,2.8,5.4,5.7l0.6,0.4c0.1,1.4,4.7,3,5.4,3.3c1.4,0.6,2.8,1.8,3.9,2.2c1.8,0.8,2.2,0.5,4.3,1.8c2.2,1.4,6.2,3,7.1,5.7
                    c0.1,0.2,0.4,0.5,0.5,0.6c0.2,0,0.8-0.7,1-0.9l0.7,0.2c1.9,2.1,4,4.2,6.2,6.1l1.4-0.6c0.1-3.5-3.1-4.7-5-7c0,0-2.1-1.1-1.7-2.7
                    c0.4-1.6,0-2-0.5-3.4s-0.6-2.6,2.8,0.6c3.4,3.2,4.4,5,5.9,2.8l1.2-0.9c1.1-1,2-2.4,2.4-4.1l-0.2-1.4c-1.4-2-3-4.1-4.2-6.2
                    c-1.1-1.9-0.9-3.5-2.9-6.1c1.6-2.8-8.6-12-9.6-15.7l0.4-0.5l0.4,0l1.5,1.3l0.4,0c0.5-0.5,1.4-0.9,2-1.1c2.7,0.9,7.7,4.8,8.5,4.8
                    l0.6-0.3c-0.9-2-2.5-5.4-4-7c-2.2-2.4-6.4-3.3-6.6-7.3l0.4-0.7c1.2,0.3,2.4,0.8,3.4,1.4c-1.5-1.8-3.7-3.9-5-5.9
                    c-0.9-1.4-2.4-5.4-1.7-7l1.8,0l0.3-0.5c-0.3-1.4,0.2-2.7,0.1-4.1c-0.2-1.8-1-3.4-1-5.4c1.8-0.5,6.2,4.3,7.7,4.2
                    c1-2.2-3.5-7.3-5.1-8.8c-0.5-0.4-1.2-0.8-1.7-1.3c-0.2-0.2-0.5-1.1-0.7-1.3c-1.1-1.1-2.5-1.7-3.5-3c-1.1-1.5-3.2-3.6-3.2-5.6
                    l0.2-0.5c0.7,0.6,1.6,1,2.5,1.3l0.3-0.6c-0.3-1-1.2-4.7-0.7-5.7l1,0.2c1.6,1.2,2.6,2.8,4,4.1c2.4,2.2,4.7,2.7,5.1,6.5
                    c1.2,0.7,2.4,1.7,3.3,2.7c2-3.5,6.8,0.2,8.3,2.2c0.5,0.7,0.7,2,1.2,2.7c1.2,1.7,3.6,3.3,4.4,5.2c1.1,2.7,1.2,5.3,3,7.9l0.8-1.4
                    l0.6,0c1.4,0.8,3.1,3.9,4.2,5.2c0.6,0.7,1.5,1.3,2.2,1.9c2.5,2.3,4.8,4.9,6.8,7.6c0.9,1.3,1.6,2.8,2.5,4.1
                    c0.8,1.1,1.8,2.1,2.6,3.3c1.3,2,2.3,4.3,3.7,6.4l0.5,0.2l1-1.3l0.9-0.1c4.5,1.9,2.6,0.9,6.6,1.5c1.5,0.2,7.5,7,9.1,8.3l0.7-0.3
                    l-0.2-1.8l0.9-0.8c0.4,0.2,1.2,0.1,1.5,0c1,0.7,3.3,1.8,4.6,1.8l0-0.2c1.4-0.9,6.7-1,8.1-0.6c1.1,0.3,2.3,1,3.4,1.4l0.4,0.8
                    c-1.1,3.1,1.3,5.6,2.6,8.4l-0.3,0.9c-0.5,0.3-1.2,1-1.5,1.5l0.1,0.6c1.6,0.9,3.1,2.1,4.5,3.4c5.5,4.8,5.5,6.8,7.6,14
                    c0.1,0.4,0.6,1.7,1,1.8c0.7,0.2,2.2,0,2.9-0.1c1.3-0.7,2.6-3.8,3.1-5.1l0.8-0.1c3.2,2.2,11.7,2.3,15.4,1.9
                    c1.2-0.2,3.3-1.5,3.9-2.5c1.1-3.2-1.6-6.2-3.1-8.5c-0.5-0.8-0.7-1.7-1.3-2.5c-0.1-0.7,0.5-1.9,0.8-2.4c0.6-0.5,1.8-0.9,2.6-0.8
                    c2.5,0.8,0.9,3.7,8.1,4.1l0.6-0.9c-0.1-0.8,0.3-2,0.6-2.7l0.5-0.4c0.4,0,4,4,4.8,4.6c-0.4-0.8-0.4-2.4,0.1-3.2
                    c3.1-3,4.7-1.2,7.6-2.3l1-1.2c-0.3-1.2-0.3-2.7-0.1-3.9l1-1.1c0.2-2.2,1-4,2.8-5.4c0.9,0,2.5-0.5,3.1-1.2c0-1.4,0.9-3.5,2.1-4.3
                    l1.9-0.3l0.5,0.7l0.1,1.7c0.5,0.1,1.6-0.5,2-0.8l0.7,0.1c2.3,2.1,1.3,3.8,4.9,4.4c0.6-0.5,2-1.2,2.8-1.1c2.2,0.9,4,2.8,5.7,4.3
                    c0.8,0.7,2.8,2.4,3.4,3.4c1,1.8,0.2,5.2,1.4,6.5l0.9,0.2l0.7-0.6l0.7-0.1l2.8,2l1.7-0.3c5.9,3.3-2.4,10.5-1.1,14.4
                    c0.6,0.8,4.1,1,4.6,0.2c0.8-0.2,2.4,0.7,3,1.2l0.8-0.1l0.4,0.4l0.7,0l1.6-1.3c1.4-0.6,9.5,3.8,12.6,0.7c-0.7-1.3-1.7-3.3-0.5-4.6
                    c2,0.1,3.9,1.7,6,1.9l0.6-0.6c-0.7-1.7-1.4-3.2-0.6-5.1l1-0.5c1.4,0.3,2.2-0.1,3.4-0.1c1,0,2.1,0.3,3.1,0.4c1,0.1,2.1,0.2,3,0.7
                    c0.9,0.4,2.3,0.9,3.1,1.5c1,0.7,0.9,1.8,3,2.2c-0.4,0.6-0.5,1.8-0.4,2.5c0.8,0.4,1.6,1.1,2.1,1.8c1.8,0.9,3.4-0.8,5.6,1.4l1.3,0
                    c0.4-0.4,1.3-0.7,1.8-0.9c0.8,1.6,0,3.4,1.1,5.3c2.3,1.2,4.6,3.7,6.6,5.4c-0.2,0.9-0.7,3.7-0.3,4.5c1.3,1.3,7.9,3.5,9.6,3.4
                    c0.3-0.3,0.8-0.4,1.2-0.5c0.8-0.3,3.3-1.3,4-1.2c1.5,0.1,3.3,1.3,4.9,0.9l3.6-2.7c2.6,0.4,4.5-3.6,6-3.6c2.7-0.4,4.1,3.8,7.2,3.3
                    c0.3-0.2,0.6-0.6,0.7-0.9c-0.3-1.5-1.1-3.1-1.9-4.4c-2.4-0.9-2.3-4-3.6-6c-1.3-2-4.3-5.9-6.4-7.4c-1.2-0.9-3.1-1.6-4.5-2.3
                    c-0.3-0.1-1.9-1.2-2-1.6l1.2-1.9c-0.3-0.6-0.5-1.8-0.3-2.5c2.5,0.5,6.2-1,7.7-2.8l0.3-1.1c-0.2-2.2-2.2-3.9-3-5.9
                    c1.9-2.4,1.2-6.8,4.1-9.4l0-0.7l-1.3-1.1c0.1-0.4,0.5-1,0.8-1.3c5.2-1.2,6.7,2.7,10.2,5.1c2.3,1.6,3.3,1,5.6,1.3
                    c0.7,0.1,1.4,0.7,2.3,0.7c1-0.3,2.3-2.1,3.1-2.8c0.3-0.7-3-6.2-2-8.1c1.5,0.1,3.1-0.7,3.8-2.1c-0.8-1.1-1.2-1.7-1.8-3l0.3-1.2
                    l1.5-1.5c0.9-1.9-1.6-4-3-4.8c-1.9-5.1,1.1-4.7,1.5-7.6c-0.3-0.6-0.4-1.3-0.5-1.9c2.5-2,2.9-4.3,2.9-7.4l0.4-0.2l1,0.7l0.7,0
                    l0.3-0.3c-0.7-0.4-1.5-1.5-1.6-2.3c0.1-0.1,0.2-0.2,0.3-0.3c0.7-0.4,1.5-1.1,2.3-1.4c1-0.5,2.1-0.4,3.2-0.6
                    c1.6-0.3,3.4-1.2,4.9-1.8c0.9-1.5,3.4-5.3,3.2-7l-0.5-0.4c-3.6-0.6-6.9,6.1-15.2,4c-1.8-0.5-2.4-2.1-3.9-3
                    c-0.4,0.3-0.4,2.3-0.4,2.8l-0.6,0.3c-0.4-0.1-1.4-2.6-1.6-3.1l-1-0.6l-1.4-0.9l-0.2-0.5c1.9-4.8,10.5-4.2,12.5-7.3l-0.2-0.5
                    c-1.4,0.2-3.2-0.2-4.3-1l-0.2-0.7l0.6-1.1c1.5-1,5.6-1.5,7.2-1.6c1.2-0.1,2.4,0.6,3.7,0.4c4.1-0.6,6.5-1.9,10.1-3.7
                    c0.8-0.4,2.7-1.2,3.1-2.3c0.2-1.1-1.5-3.2-2.3-3.6c-2.5-0.2-4.8,1.4-7.4,0.9c-4.2-0.8-1.6-2.6-8.4-3c-1.8-0.1-2.9,0.3-4.6,0.5
                    c-0.2,0-1.4,0.1-1.6,0c-1-0.1-2-0.5-2.9-0.6c-2.7-0.2-5.4,0.3-8.3-0.2c-2.3-0.5-3.8-2.8-5.5-4.1c-0.8-0.6-3.9-1.6-2.9-3.4
                    c1.9-0.9,3.5-2.2,5.2-3.4c0.4-0.3,3.3-2.2,3.4-2.4l1.3-2.3c2.6-4.8,0.3-8.8,0.4-14l1.5-1.4l0.3-1l-1-1.6c-1-0.7-3.9-0.4-5,0
                    l-0.4-0.6l1.1-3.5l-0.4-1.2l-1.7-0.9l-0.3-0.6l2.3-0.2c0-2.6,0.9-5.6,2.1-7.9c0.5-0.9,1.6-1.7,2.2-2.6l0.1-1.6l-0.7-1
                    c-2.5-0.9-5.6,0.5-7.6-1c-0.6-0.7-1-1.6-1.5-2.4c1.1-2.2,1.4-5,0.4-7.3c-1.4-1.5-4-2.9-5.8-2.4l-0.4-0.2l0-0.4
                    c2.9-2.3,0.4-2.7-1.2-5.5l0.3-0.8c0.1-0.1,0.3-0.3,0.4-0.3c3.1-1.3,6.3-1.8,9.4-3c1.7-0.6,2.8-1.7,4.3-2.6
                    c1.7-1.1,3.6-2.1,5.5-2.9l7.8-3.4c1.8-0.8,6.3-0.4,8.1,0.5l-1.4-2.7l2.2-0.9l0-1.5l-0.9-0.9c-3.9-0.7-6,0.7-9.6,1.3
                    c-1.7,0.3-7.3-0.2-9.1-0.6c-1.3-0.8-2.7-3.3-3.1-4.6l-3.9-1.1c-2,0.5-6.9,3.5-8.9,1.9l1.9-3.1c0.1-0.7,0.1-2.1-0.2-2.7
                    c-1.6-0.6-3.6-1.3-5.3-1.3l-0.2-1c1.4-0.7,2-1.5,2.6-2.9l-1.1-1.1c-2.1-0.8-4.8,0.7-6.1,2.2c-1,1.1-1.6,2.8-2.6,3.9
                    c-1.3,1.5-3.1,2.2-4.9,2.8c-0.2,0.1-1.8,0.2-2.1,0.2l-0.9-2.1c0.1-0.4,1.5-4.2,1.5-4.4c0.1-1.9-0.6-4.7-0.8-6.7
                    c0.9-0.8,1.9-2.1,2.9-2.6c2.3-1.2,7.5-3.3,10-2.8l1-1c1.3-4.9-8-8.9-11.5-9.5c-3.8-0.7-4.1-1-7.5,1.1l-1.4-0.6
                    c-1.8-3.2,0.7-4.7-5-6.3l-0.7-1.3l0.5-1.2l3.5-0.8l0.1-5l-1.2-1.3l-0.2-1l1.2-1.9l-0.2-1.3c-1-1.2-4.4-4.9-6-5.3l0-0.8
                    c0.1,0,0.4-0.2,0.5-0.2c4-0.4,3.5-0.4,7.3,1c0.6,0.2,9.6,2,10.3,1.7l2.6-1l0.3-1c1.6-0.8,4.3-1.5,6.1-1.6c0.7-1.1,1-1.9,0.8-3.3
                    c-1.5-2.2-6.1-2.4-7-4.9c1.9-3,1.2-6.2,0.4-9.4c-3-2.7-5.8-5-9.1-7.4c-0.1-0.1-0.6-0.9-0.7-1.1l0-1.5c1.5-1.2,1.3-2.4,0.8-3.9
                    c-1.3-1.4-6.2-0.7-8.2-5.9c-0.6-2.5,1.9-5.9,3.3-7.8c1.2-1.6,1.6-3.8,2.9-5.4l4.3,0.7c1.5-0.6,2.1-2.1,2.9-3.4
                    c0.1-0.3,0.1-1.5,0-1.9c-0.7-2.6-2-4.6-1.7-7.4l3.1-2c2.8,0.6,6.3-1.5,9.5-1.3l0.7-1l-0.2-1.3c-0.9-1.2-2.4-2.4-3.7-3.2
                    c-0.7-2.1-0.3-7.4,0-9.6l1.5-1.2c1.2-0.1,2.3,0,3.4-0.6l0.3-0.8c-1.1-1.4-2.2-3.2-2.8-4.8c0.7-2.4,0.7-5.7,0.4-8.1
                    c1.8-0.2,4.8,1,6.6,0.6c2.5-2.3,3.3-5.3,4.6-9.4l-0.9-4.1l0.8-3.9c2.7-2.3,3.2-1,3.4-4.9c-0.7-3.2-1.4-4.2-1.4-4.2l-2.7-0.9
                    l-2.8-0.4c-0.2,0.3-2,1.9-2,2c-0.3,3.4-0.6,5.1-2.8,7.9l-0.7-0.6c-1.1-3.5-1.2-7.8-1.7-11.5c0.2-0.4,2.5-4.2,2.5-4.3
                    c0-0.1,0.1-4,0.1-4.4c1.8,0,3.5-0.2,5.3-0.5c1.1-3.1,3.9-3.6,6.8-3.8c1.2-2.4,1.8-8.9,0.8-11.2c-1-0.2-3,0.6-3.6,0.1l-0.9-1.5
                    c0.1-1.4,0.5-3.4,0.4-4.8c-0.1-1.4-1.4-2.4-0.9-4.2c0.4-1.3,1.1-2.8,1.7-4l0.1-0.3c-0.4-1.4-1.5-6.7-0.5-7.9
                    c4.8-4.6,4.4-3,9.4-6.1l0.2-0.3c2.4-4.4,2.9-2.4,5.3-5c0.7-2.2,1.8-8.6,1.3-10.6c-0.1-0.5-0.7-1.2-0.9-1.7l-1.2,0.2
                    c-1.1,1.8-3.6,1.8-5.4,1.6l-0.3,0.8c1.6,1.3,1.5,4.2,0.6,5.8c-0.6,1-1.8,1.3-2,2.7l-1.5,0.4l-1.4-0.9c-1.8-2.4-0.2-6.5-3.1-7.6
                    c0,0-4.2,4.7-4.9,5.1l-1.7-1.3l-0.4-2.3c-0.4-0.5-1.3-1.5-1.9-1.7c-0.9,0.4-3.4,1-4.4,0.6l-1.7-2.3c-0.1-1.4,0.6-8.4-2-9.2
                    c-2.7-0.8-6.1-2.5-9-2.2c-0.7,0.7-0.8,4.2-0.8,5.2c-1.2,0.9-2.5,0.3-3.7-0.3c-0.2-0.6-0.4-1.4-0.7-1.9c-3-5.2-6-9.5-6.7-15.5
                    c-0.2-1.8-3.8-7.2-5.3-8.7l0.1-5.4c-0.7-1-1.9-1.9-2.9-2.5l-0.5-2.1l1-2.9l-0.2-1L351,415l-1.5,0.8c-2.3-0.5-1.5-2.5-7.3-3
                    c-1.7-0.1-3.4,0.5-5-0.3l-1.2-1.5c1.2-3.7,0.8-9.4,0.9-13.3c2.6-4.3,4.9-5.7,9.7-6.6c1.4-0.2,2.9-0.1,4.2-0.4
                    c1.4-0.3,2.9-1,4.3-1.5l0.4-0.1c4.5-5.2,3.8-9.9,4.5-16.6c0.6-5.4,9.4-5.3,13.2-5.1l0.8-0.8c0.1-5.7,1.2-6.8,5.7-9.7
                    c1,0.2,4.3,0.5,5.2-0.1l0.7,0.8l1.7,0.4c1.3-0.3,3.2-0.8,4.3-1.6l4.5-7.2c-0.9-1.6-4.4-1.5-5-3.2c-0.3-0.9-0.1-3.2-0.4-4.2
                    c-0.3-0.9,0.6-3.3-0.3-4.2l-3.1-0.7l-2-0.4c-0.1,0.1-1.2,0.8-1.3,0.8c-2.5,3.6-2.8,5.1-6.4,7.4c-2,0.2-4-0.3-5.7-1.3
                    c-0.8-3.2-2.7-4.6-4.9-7.2c0.6-2.1,0.1-5.3-0.4-7.3c1.3-2.1,2.6-4.5,4.1-6.4c1-1.2,2-3.6,2.7-5l2.4,0.5c1.9,0.6,4,1.5,6,1.5
                    c1.3-0.3,3.7-2.7,4.8-3.7c3.5,0.6,12.5,0,16.1-0.6c3-0.5,1.8-0.9,5.3-0.3l0.2,0c1.7-0.1,4.4,0.1,6-0.3c1.6-0.4,3.3-1.8,4.8-2.4
                    c2.7-1,6.6-1.1,8.6-3.4l0.3-1.2l-0.9-1.9l-1.7-0.5c-1.9-2-2.3-3.8-3.6-5.7c-1-1.4-3.8-3.7-5.2-4.7c-2.9-2.2-6.3-0.3-8.7-2.9
                    l-0.5-1.9l-1-0.6c-1.2,0.7-2,0.1-3,0.2c-0.2,0-1.5,0.5-1.8,0.6c-0.1,0-2.1-0.2-2.3-0.2c-3,1.3-3,4.6-4.7,5.6
                    c-1.3,0.7-2.6,0.8-3.8,1.8c-0.9-0.6-2.4-0.7-3.4-0.7c-5.2-0.1-5.4,0.9-10.2,1.5c-0.8,1-2.5,2.2-3.8,2.5l-0.8,1l0.7,1.7
                    c-3.7,4.6-3.5,5.6-8.7,7.2l-3-2.1l-0.7-3.1l-4,0.2l-2-1.3c0-0.5,0.3-3.3,0.3-3.6c-0.6-4.3-1.1-8-4.8-10.9l-2.3-1.8
                    c-1.4-0.6-3.2,0.2-4.5,0.6c-2.2,0.7-7.6-2.1-11.1-2.2c-1.5,1-5.4,3-7.3,2.7c-0.8-0.3-1.7-1.3-2-2.1l-5-0.9
                    c-0.9-1.4-2.4-2.4-3.6-3.4c-3.3-2.8-5.6-3.4-9.5-1.4c-0.9,1.8-2.1,3.6-4.3,3.9c-3.1-1-6.2-2.6-9.1-4.2l0.3-1.3l1.8-0.8l5.3,0.8
                    l0.8-0.6c-1.4-1.3-4.9-6.3-4.3-8.4c1.3-1,2.4-3.9,2.6-5.4c3-2.9,7-3.6,10.9-5.2l2.3,0.4c1.3,0.9,1.9,4.2,2,5.6l1.3,0.4l1.5-0.6
                    c0.9,0.2,2.1,0.3,2.8,0.6c0.6,0.2,4,2.3,4.3,2.3l4.8,2l2.6-1.9c0.9,0.6,2.2,3.9,2.2,5c0.1,0,1.7,0,1.8,0c1.4-0.6,8.1-3.6,9.4-3.7
                    c1.2-0.1,2.6,0.5,3.8,0.5c1.8,0,4-1.9,4.1-3.7c-2-1.7-6.7-4.9-8.8-5.5l-2-2.7c-1.1-0.7-5.4-0.6-7.3-1.3c-0.1-0.1-1.9-1.4-2.3-1.7
                    c-0.3-3.3-0.1-8.3,1.1-11.5l-0.2-0.4c-0.6-0.2-3.5-0.7-3.8-1.3c-0.1-0.9-0.2-1.9-0.2-2.9c0-0.3,0-3,0-3.2c0.4-1.7,1.9-3,2.1-5
                    l-1.8-0.8c-1.1-1.4-2.8-4-2-5.9c1.7-1.7,1.6-1.8,3.6-2.9c0.5-0.6,0.7-1.8,0.5-2.5c-1.3-0.6-3.9-2.5-4.6-3.8l0-1.3l1.3-1.9l4.6-1
                    l0.3-1.5c-1-0.8-3.1-1.4-3.6-2.3l0.5-1l7-3.9l0.8-2.3c3.3-0.2,5.1-2.1,7.2-4.3l0-1.5c-0.3-0.4-6.7-3.4-7.1-3.6
                    c-0.1,0-1.6-0.2-1.8-0.2l-1.8,2.5c-1-0.1-2.4,0.1-3.3,0.4l-1.1,3.1c-1.2-0.1-3.8,0.1-4.9,0.8c-0.4,1.1-1.4,2.4-2.3,3.1
                    c-1.2,0-5.2,0.2-6.2,1l-0.3,1.9c-1.8,1.6-1.3,1.3-3.3,2.3c-1.5,0-6-5.3-7.1-6.5l-0.5-2.7c-1.4-1.7-2.9-3.5-4.8-4.4
                    c-1.4-0.7-2.3-2.1-4.1-2.1l-2.3-2.9l-3.9-0.8l0-4l1.8-0.6c2.6,0.7,2.9,0.8,4.2,0.8c0,0-0.5-2.2-1.6-4.7s-2.3-6,0.5-6.6
                    s7.1-2.8,7.1-2.8l1-1c1.5-0.6,3.6-1.6,4.6-2.8l0.5-1.7c-1.1-1.2-4.5-1.4-5.9-1.3c-0.4-1.5-0.2-4.1,0-5.6l-1.3-1.7l1.6-5.4
                    l-1.8-1.3l-0.5-1.5c1.6-1.3,3.5-1.6,4.9-3.1l2.9-0.2l0-0.4c-1.2-1.1-1.9-2.4-2.8-3.8l0.5-1c5-0.6,5.6,1.9,8.5,1.9
                    c0.3-0.3,0.7-2.2,1-4c0.1-0.7,3.2-3.5,3.3-4.1c0.1-0.8-2.7,0.6-2.6,0.3c-0.2-1-0.7-2.2-0.2-3.2l-0.5-1c-1.5-0.6-5.1-0.8-6.8-0.4
                    c-0.5-1.3-2.2-3.4-3.6-3.8c-2.6,0.6-4.7,1.2-7.3,1.2l-1.3-1.3l0-2.8c-1-1.6-5.5-7.5-6-9.1l0.5-0.8c0.2,0,2,0,2.1,0
                    c2.7,1.4,5.4,2.7,8.3,3.6l2.9-2.7c2,0.1,4.2-0.1,6.3-0.4l0.5-1c-0.2-1-0.4-1.6-0.8-2.5c-0.8-0.2-1.9-1.1-2.3-1.9l0.3-1.3
                    c0.1-0.1,0.9-0.4,1-0.4c1.2-0.1,2.5,0.1,3.7,0c2.8-0.2,5.4-0.9,8.4-1c0.4-2.3-1.4-5-1.5-7.5l-0.8-0.8l-2.6,0.6
                    c-1-0.3-2.2-1.4-2.6-2.3l-2.6,0.2l-1.3,1.2l-1.3-0.2c-2.7-2.9-3.4-4.1-7.3-5.5c-1.4-0.5-2.9-0.9-4.3-1.7c-0.9-1.2-1.3-3.9-1.2-5.4
                    l4.2-2.9l0.6,0c0.2,0,2.5,0,2.6,0c3-1.1,5.9-3.7,9.2-3.9l4.5,1.7c2.2-0.4,4.1-1.4,6.1-2.3c1.3-0.1,3.3,0.6,4.5,1.3"/>
              </g>
              <g id="central" data-toggle="modal" data-target="#myModal" >
                <title>Central Health</title>
                <desc>
                <p>
                <b>Healthy Activity</b><br>
                <a target="_blank" href="http://www.hc-sc.gc.ca/fn-an/alt_formats/pdf/food-guide-aliment/educ-comm/toolkit-trousse/poster-affiche-eng.pdf">Healthy Living Poster</a><br>
                <a target="_blank" href="http://www.csep.ca/CMFiles/publications/GAQ_CSEPPATHReadinessForm_2pages.pdf">Getting Active Questionaire</a><br><br>
                <b>Smoking Cessation</b><br>
                <a target="_blank" href="http://www.hc-sc.gc.ca/hc-ps/tobac-tabac/quit-cesser/fact-fait/stages-etapes-eng.php/">Five Stages of Quitting<br>
                <a target="_blank" href="https://www.canada.ca/content/dam/canada/health-canada/migration/healthy-canadians/publications/healthy-living-vie-saine/fni-tobacco-strat-2012-2017-pni-strat-tabagisme/alt/fni-tobacco-strat-2012-2017-pni-strat-tabagisme-eng.pdf">First Nations Federal Tobacco Control Strategy</a><br><br>
                <b>Healthy Eating</b><br>
                <a target="_blank" href="https://www.canada.ca/en/health-canada/services/canada-food-guides.html">Canada's Food Guides</a><br>
                <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-lets-eat-healthy-canada/infographic-lets-eat-healthy-canada.pdf">Let’s Eat Healthy Facts Poster</a><br>
                <a target="_blank" href="http://www.statcan.gc.ca/pub/82-625-x/2017001/article/14764-eng.htm">Fruit and Vegetable Consumption 2015</a><br>
                <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-marketing-to-kids/infographic-marketing-to-kids.pdf">Marketing Unhealthy Foods - Health Canada</a><br><br>
                <b>Diabetes Management</b><br>
                <a target="_blank" href="http://guidelines.diabetes.ca/CDACPG_resources/Vascular_Protection_Risk_Assessment_FINAL.pdf">Recommendations for Vascular Protection</a><br><br>
                <b>Nutrition</b><br>
                <a target="_blank" href="SeabirdIslandMobileDiabetesTeamHealthyPlate.pdf">Seabird Island Mobile Diabetes Team Healthy Plate</a><br>
                <a target="_blank" href="TraditionalFoodsFactSheetsupdated.pdf">Traditional Foods Fact Sheets</a><br>
                <a target="_blank" href="TreefOfLifeFoodGuideCycleOfLife.pdf">Tree of Life Food Guide Cycle of Life</a><br>
              </p>
              </desc>
                <path class="central" d="M1223.2,1997.7l0.5,0.3l1,0.5l2.2-1.3l-0.1-1.8l0.1-2.4l1.1-2.5l1.6-1.8l2.5-1.7l2.4-1.2
                  l2.7-1.4l2.2-0.6l2.6-1.2l2.6-1.1l2.3-3l0.9-3l0.1-2.5l-0.5-2.8l-1.1-2.9l-1.1-0.9l-1.8-1.9l-2-2.2l0.7-2.1l0.8-1.8l1.7-1.7l2.6-0.7
                  l1.9-0.7l2.9-1.2l2.8-1.3l2.1-1.1l1.2-2l1.5-3l1.2-2.7l1.2-3.4l1.5-5l0.9-3.7l0.6-2.9l-2-3.2l-2.4-2l-2-1.3l-3.1-1.7l-2.4-1.4
                  l-3.3-1.9l-2.4-1.4l-2.5-2.4l-1.7-2.7l-1-2.5l-0.8-3.1l-0.6-4.5l-0.1-3.5l0.1-3l0.4-2.7l1.5-2.4l2.2-0.5l2.1,0.8l2.5,0.9l2.3,0.6
                  l3.9,0.7h4l2.2,0l2.6-0.2l3.5-0.4l1.9,0.3l3-0.5l3.1-1.2l0,0l3.3-2l1.6-1.2l2.1-1.5l2.5-2.6l2.8-3.4l2.4-3.2l1.2-1.5l1.6-1.4
                  l2.7-1.2l2.8-2l2.4-1.7l5,3.7l1.4,4.5l-0.3,0.9l2.3,1.3l1.1,3.1l0,0c0,0,1.4-2.5,3-5.4s1.9-2,1.9-2l3.6,0.1l1.1-2.6
                  c0.3,0,2.4-0.8,2.6-1c0.8-0.7,1.1-1.9,2.1-2.6c1.4-1,3-1.6,4.2-2.8c0.9-0.9,1.6-2.1,2.7-2.7c1.9-1.2,4.4-1.7,6.5-2.7l0.7,0.7
                  c1.6-0.3,6.3-0.7,7.1-2.3c0.5-1.1,0.2-2.7,0.1-3.9l-0.7-0.5c-0.7,0.1-1.3,0.8-1.8,1.2l-0.7,0c-0.6-0.5-0.9-1.4-0.5-2.1
                  c1.9-1.5,4.8-0.4,6.9-1.2l0.5-0.8l-0.4-0.6c-1.2-0.3-2.5,0.3-3.7,0.1c-1.6-0.3-3-1.2-4.7-1.4c-2.2-0.2-4.2,1.1-6.2,1.2
                  c-0.9,0-2.2-0.6-3-0.3c-0.4,0.2-3.5,2.9-4,3.4h-0.8l-0.3-0.7c0.2-0.6,0.6-1,1-1.6c0.5-0.8,0.7-1.9,1.2-2.7c1.7-2.8,7.8-1.7,10.8-3
                  c2.3-1,1.4-3.2,3-4.7c1.6-0.5,3.2,0.1,5-0.7c1.1-0.5,1.5-1.9,2.9-2c1.8-0.1,2.2,1,4.3-0.3c1.9-1.1,2.4-3.1,4.6-4l0.6-0.8
                  c0-0.5,0.1-1.2,0.4-1.6l-0.2-0.7c-2.7-2.3-3.6,0.9-4.6,1.5c-0.6,0.4-1.3,0.5-1.9,1c-1.5,1.1-2.9,2.8-4.9,2.8l-0.9-0.5l-0.2-0.7
                  c0.4-1.6,1.5-1.9,2.7-2.7l0.2-0.8c-1.1-1.5-2.6-0.5-3.7-1.2l-0.2-0.7c0.1-0.5,0.5-1.2,0.9-1.6c-0.3-0.5-0.9-0.6-1.4-0.8
                  c-3.3-0.7-7.2,3.8-9.6,1.6c-0.6-2.2,2.1-4.5,2.6-6.6l-0.7-0.6c-1.2,0.3-2.7,4.4-3.4,5.5c-1.4,2.2-3.9,1.2-5.2,5
                  c-0.2,0.6-0.3,1.4,0.2,2c0.8,0.8,2,0.8,3,0.7c2.2-0.3,5.5-0.8,7.4-2c0.3-0.4,0.8-0.7,1.2-0.9l0.8,0.3c-0.4,0.8-2.2,1.7-3,2.3
                  c-0.6,0.4-1.1,1.1-1.6,1.6c-2,1.8-6.1,4.9-8.9,4.5c0.9-1.5,2.7-1.1,3.6-2.5l0-0.8c-1.7-1.6-4.2,0.4-5.2-3.2
                  c-0.4-1.5,1.3-3.4,1.9-4.7c-1.1-2.1-1.4-0.8-0.9-3.6l-0.3-0.7l-0.8-0.3c-0.5,0.1-0.9,0.2-1.4,0.3c-2.1-0.5-1.4-1.4-4.5-0.9l-0.9-0.5
                  l-0.1-0.7c0.5-0.4,1.1-0.5,1.7-0.8c5.6-2.2,6.5,2.3,10.1,2.2l0.6-0.3c0.8-1.4,3.1-3.8,4.3-5.1l0.1-0.8l-0.3-0.6
                  c-1.6-0.1-2.3,1.9-3.5,2.7c-0.4,0.2-1.2,0-1.5-0.2c-0.2-0.8,0.1-1.8,0.5-2.5c-0.2-2.2-0.9-1.7-1.7-3.2c0.9,0.1,1.5,0.7,2.4,0.9
                  c2,0.7,6.5-1.2,8.1-2.4l0.1-0.8c-0.6-0.9-1.2-1.7-1.9-2.5c-0.5-0.2-1.1-0.4-1.6-0.4c-0.4,0.2-0.9,0.4-1.3,0.5
                  c-0.8,0-1.6-0.8-2.3-1.2c-8.4-0.5-6.2,3.6-9.9,7.8l0.2,0.7c0.5-0.1,1-0.1,1.4,0c0.3,0.3,0.5,1,0.4,1.4c-0.7,1.1-2.6,1.4-3.8,1.6
                  l-0.9-0.4c-0.8-1.8,2.7-4.3,2.2-6.5l-0.6-0.6c-0.7-0.2-4.1,0.6-5,0.9c-1.7,2.5-4.2,1.4-6.3,2.3c-2.4,1-3.8,5.7-8.2,3.9l-0.3-0.7
                  c0.7-0.7,1.6-1.2,2.4-1.9l0.1-0.8c-0.3-0.4-0.5-0.9-0.8-1.4l0.3-1c3.3,0.1,2.7-2,4.7-3.4l0.7-0.1l0.6,0.5l0.2,0.7l0.7,0.5l0.7,0
                  c1.3-0.9,3-1.9,4.1-3.1c3.5-0.6,7.1,2.1,8.5-1.2c-0.4-0.3-0.9-0.8-1.1-1.2l-0.1-0.7c0.5-0.8,1.5-1.6,2.2-2.2l0.8,0.2
                  c1-0.4,1.3-1.6,2.3-2.2c1-0.6,2.3-0.5,3.3-1l-0.1-0.7c-3-0.2-4.2,0-6.8,1.7c-0.5,0-1-0.1-1.5-0.3l-0.5-0.6l0.3-0.9l0.6-0.5
                  c2.2,0.3,3-2.3,4.4-2.4c4.2-0.4,4.4,2.2,8.8-1c0.9-0.6,1.6-0.9,2.2-1.8l-0.1-0.8c-0.4-0.7-1.6-1.2-2.3-1.6c-1.3-3-3.6-1.4-5.5-2.6
                  l-0.3-0.7c0-1.2,0.3-3,1.6-3.4c0.7,0.3,1.2,1.1,1.3,1.8l0.8,0.5c0.6,0.2,1.1-0.1,1.6-0.2c1-0.1,2.3-0.1,3.2-0.5
                  c1.9-0.6,6.3-3.2,7.4-4.8l-0.6-0.5c-0.6,0.1-7.5,0.6-7.9,0.5c-1.3-0.3-2.8-1.4-2.4-2.9l0.6-0.5c1.4,0.1,1.8,1,2.9,1.6
                  c0.6,0.3,3.7,0.2,4.4-0.1c0.7-0.3,1.2-0.9,1.8-1.2c0.8-0.1,1.5,0.3,2.3,0.3c0.9,0,1.9-0.4,2.8-0.5c0.5,0,1,0.1,1.5,0.1
                  c0.5,0,0.9-0.2,1.4-0.4c1.5-0.4,4.3-0.5,5.8-0.3c0.7-0.8,1.2-3.7,1.1-4.8c-0.1-0.7-0.4-1.4-0.4-2.2c0.3-0.4,0.6-1.2,0.5-1.6
                  c-0.9-1.7-2-1.6-3.4-2.3l-0.3-0.6l0.2-0.8c0.6-0.5,1.3-1.2,1.3-2c0.8-0.2,1.8,0.5,2.2,1.1l0.8,0.2c0.3-0.3,0.9-0.5,1.3-0.4
                  c0.1-0.5,0.1-1.1,0-1.6c0.5-0.8,1.3-0.8,1.8-1.3c1.1-1.1,0.5-3.9,0.2-5.3c0.6-1.6,2.6-2.8,4.3-2.8c0-0.7-0.3-1.4-0.5-2.1l0.4-0.9
                  c1.8-1.3,3.5-0.2,4.3-3.3c0.2-0.8,0.1-1.3-0.5-1.8c-1.6-0.1-2.4-2.5-2.6-3.8l-0.6-0.6l-0.6,0.5c-1.4,0.1-3.2-0.1-4.6-0.5
                  c-0.1-0.7,0-1.6-0.5-2.1c-0.7-0.5-1.6-0.3-2.4-0.6c-1.2-1.1-0.1-3.2-1-4.3c-1.5,0.3-1.7,1.8-4,1.5c-1.5-1.4-1.8-1.3-3.7-1.9
                  l-0.6-0.6c0.1-0.5,0-1-0.1-1.5c0.6-0.4,1.3-1.3,1.1-2c-0.6-2.6-4.2-1.3-5.8-2.4c-0.4-0.6-0.4-1.4-0.9-1.9c-1.9-2-8.6-1.8-11.2-3.4
                  c-1-0.6-1.4-2.2-2.3-3.1c-0.7-0.6-1.6-0.9-2.4-1.3c-0.9-0.6-1.6-1.8-2.6-2.2c-0.4-0.1-1-0.1-1.5-0.2c-2.4,0.7-6,3.9-7.7,4.1
                  l-0.8-0.4l-0.4-0.7l0.5-0.8c0.4-0.2,0.9-0.4,1.4-0.4c0.9-1.9,2-1.6,2.8-2.8l-0.6-0.6c-0.5,0-1,0.1-1.4,0.4c-0.6-0.1-1.1-0.3-1.7-0.5
                  c-0.8-0.7-0.6-1.9-1.4-2.6l-0.7,0.2c-0.9,1.3-0.8,2.9-1.8,4.2l-0.8-0.2c-0.2-0.4-0.4-0.9-0.7-1.3c-1-0.1-1.2,0.6-1.9,1
                  c-0.4,0.2-2.2,0.4-2.8,0.5c-2.4,1.4-1.6,9.2-3,11.2c-0.2,0.3-0.9,0.8-1.2,1.1l-0.7,0c0-1,0.6-3.2,0.3-3.9c-0.3-0.4-1-0.9-1.4-1.1
                  l-0.7,0.2c-0.5,0.7-0.9,1.6-1,2.5c0,1.2,0.1,3.1-1.2,3.8l-0.8-0.3l-0.4-0.7c0-2.5,2.4-6.1,2.1-7.5c-1,0.1-1.9,2.2-2.7,3l-0.8-0.2
                  c-0.9-1.2,0-1.9-0.4-3l-0.7,0c-0.8,0.6-1.5,1.8-2.3,2.2l-0.8-0.4l-0.3-0.7c0.1-0.9,0.7-1.7,0.8-2.6l-0.7-0.5
                  c-1.2,0.5-1.8,1.5-3.4,1.2c-0.5-0.1-1-0.5-1.6-0.5c-2.3,1.9-5.1,8.2-5.3,11.2c-0.1,1,0.9,2.6,1.4,3.4c0.1,2-4.4,2.9-5.6,4.3
                  c-1.3,1.6-0.6,5.6-2.8,6.4l-0.5-0.6c-0.5-1.7,3.3-8.1,3.8-10.3c0.6-2.7-3.5-3.8-3.3-6c0.4-5.5,2.6-3.9,3.9-7.1
                  c-0.1-1.4-1.4-3.1-1.2-4.2l0.4-0.8c1-0.8,1.9-0.6,2.4-2.1c0-0.4-0.2-1.1-0.5-1.4c-0.7-0.1-6.4,2.4-7.3,2.9c-0.7,0.4-1.1,1.2-1.7,1.7
                  c0.3-0.6,0.4-1.3,0.7-1.8c0.6-1.1,1.4-1.8,1.8-3.1c0.7-2.4-0.5-2.8,1.4-5.5c1.1-1.6,4.5-1.6,4.5-3.8l-0.6-0.6
                  c-1.4,0.6-3.1,1.7-4.6,2c-0.9,0.1-1.8-0.7-3.1-0.5c-0.2,0.2-4.5,5.4-4.8,5.9c-1,1.7-1.6,3.4-2.8,5.1c-1.1,1.5-3,2.5-3.9,4.1
                  c-0.1,0.8,0.8,1.2,0.9,2c-0.6,1.7-3.4,7.1-5.4,7.2l-1.1,1.4l-0.7,0.2c-1.5,1-0.3,5.5-2.7,6.8l-0.8-0.3c-0.2-1.6,0-3-0.1-4.6
                  l-0.5-0.7l-0.6,0.2c-0.4,1.2-1.1,2.4-1.4,3.5c-0.3,1.4,0.6,1.8,0.7,2.9c0.2,2.1-3,5.2-4.8,6.2l-0.6-0.5c-0.1-1.2-0.6-3.4-0.3-4.5
                  c0.1-0.6,0.6-1.2,0.7-1.8c0.1-0.5-1.3-4.7-1.1-6.6c0.2-1.6,1.4-4.7,1.3-5.9c-0.1-1.1-1-2-2.1-2c-1.2,0.6-4.6,8.8-3.8,10
                  c0.7,0.7,1.7,0.6,2.4,1.2l0.4,0.6c-0.1,1.2-1,2.3-1.2,3.5c-0.1,0.7,0.2,1.7,0,2.4c-0.3,1.1-2.4,2.8-3.6,2.6l-0.6-0.5
                  c-0.2-0.7-0.2-1.5-0.1-2.3c-0.2-0.4-0.7-1-1.1-1.2c-1.3-0.1-2.4,0-3.4,0.8c-1.9,3.2,0.8,5.9-5.5,9.7c-0.2,0.6-0.4,1.1-0.4,1.7
                  l-0.7,0.3c-0.3-0.3-0.7-0.9-0.7-1.3c0.8-2.5,4.1-4.1,4.9-7.2c0.7-2.9-0.9-2.7-1.4-5c-0.4-1.7,0-3-0.1-4.7l-0.7-0.5
                  c-0.8,0.9-0.4,2.4-1.4,3.1l-0.7,0.1l-0.6-0.5c-0.2-1.6-1.2-4.7-3.2-4.7c-1.2,2.4,1.4,4.9,1.9,7.1c0.2,1-0.2,1.9,0.2,3l-0.3,0.9
                  l-0.6,0.4c-0.4-0.2-1.1-0.3-1.5-0.3c-1.9,1.3-4.2,2.7-6.3,3.6c-0.7,0.3-1.3,0.4-1.9,0.8c-1.1,0.8-1.7,2-2.7,2.9
                  c-1.1,1-2.6,1.4-3.7,2.4c-0.6,0.5-1,1.3-1.6,1.7c-0.6,0.5-1.4,0.4-2.1,0.6c-0.5,0.8-1.4,2.3-1.2,3.3l0.6,0.7
                  c0.7-0.6,1.4-1.5,2.4-1.5l0.2,0.7c-0.6,1.2-2.2,2.4-2.5,3.5c-0.2,0.7,0.2,1.5,0.2,2.3c0,2.2-1.5,4.9,0.6,6.9l0.7,0
                  c1.9-1.3,5.2-5,7.5-3.9l0.2,0.8c-1.2,1.3-3.3,2.5-4.7,3.5c-1.1,0.8-1.8,1.9-2.8,2.7c-1.6,1.3-2.6,0.1-4,0.7c-1.6,0.6-6.6,5-7.4,5
                  c-0.1-2.7,6.2-5.6,7.1-8.8c0.2-0.6-0.3-2.2-0.3-3l-0.8-0.2c-0.4,0.2-0.9,0.3-1.4,0.4l-0.5-0.6c0.3-1,1.9-3.5,1.9-4.1
                  c-0.3-0.7-1.2-1.3-1.9-1.4c-0.8,0.1-1.2,0.7-1.9,1.1l-0.9-0.4c-0.3-2.2,2-3,3.1-4.4c1.2-1.5,0.8-3.7,2-5.1c2.3-2.6,7.6-3.5,8.9-6.8
                  c0.5-1.2-0.3-3.1-0.2-4.5c0.1-1.2,0.3-2.9,0.2-4.1c-0.1-0.9-0.8-1.8-0.9-2.7c-0.1-0.4,0-1.3-0.2-1.7c1.8-3.8,1.3-4.3,2.4-7.9
                  l0.8,0.3c0.2,0.4,0.4,1,0.4,1.5l0.5,0.6c0.7-0.8,3.1-4.3,3.3-5.2c-0.1-0.5-0.7-1-1.1-1.2l-0.1-0.6c0.9-0.7,1.3-2,2.1-2.8
                  c0.4-0.5,1.4-1.1,1.7-1.6c0.4-0.7,0.3-1.7,0.2-2.4c0-1,0.2-2.1,0.1-3.1c-0.1-1-1.7-4.7-2.5-5.3l-0.1-0.8c0.4-0.3,0.9-0.5,1.3-0.6
                  l-0.4-0.7c-1.3-0.6-5.1-0.1-5.2,1.8c-0.3,0.3-0.8,0.7-1.2,0.8c-0.3,1.5,0.8,2.2,1.4,3.4l-0.2,0.8h-0.7c-0.8-0.5-1.4-1.2-2.3-1.5
                  l-0.4-0.7c0.2-0.5,0.5-1.2,1-1.6c0.4-1-0.6-2.3-1.6-2.4c-0.7,0.2-1.6,0.1-2.3-0.1c-0.4,0.1-0.9,0.7-1.1,1.1c-1,0.5-2,0.2-3,0
                  l-0.5,0.7c0.4,2.9,2.9,5,3.8,7.8c0.2,0.8,0.2,0.9,0,1.6c-0.5,2.7,0.2,3,0.6,5.2c0.1,0.8-0.2,1.8-0.1,2.5c0.1,0.4,0.2,0.9,0.5,1.2
                  c1.2,0.3,2.1,0.9,2.6,2c0.1,1.6-1.5,5.4-2.8,6.4c-1.1,0.3-1.8,0-2.9,0l-0.7,0.4c-1,1.5-0.1,3.9-0.4,5.6l-0.7,0.2
                  c-0.2-0.3-0.3-0.6-0.4-0.9c-0.3-1.1-0.5-2.3-1-3.3c-0.4-0.9-0.9-1.7-1.2-2.7l0.5-0.6c0.8-0.2,1.6,0.2,2.4,0.2
                  c0.9-0.3,2.6-5.3,2.3-6.1l-0.8-0.4c-0.9,1.3-0.8,2.7-2.6,3.1l-0.6-0.5c0.3-0.9,1-1.8,1-2.7l-0.4-0.6l-0.7,0.1
                  c-2.1,3.6-2.3,7.8-4.2,11.4l-0.7,0.1c0.9-5.6-0.2-2.7-0.4-6.1l-0.6-0.5c-1.7,0.5-2.6,2.4-4.2,3.1l-0.8-0.2l0.3-0.8
                  c1.8-1.2,3.7-2.8,5.1-4.4c0.8-0.9,6.4-8.6,6.6-9.3l-0.6-0.5c-0.5,0-1.1-0.1-1.6-0.2c-1.9,0.5-5.4,6.1-8.7,5.1l-0.1-0.7
                  c0.8-0.5,1.7-1,2.3-1.7c1.1-1.2,1-2.9,2.1-4.1c0.9-1,3.6-2.5,3.6-4.1l-0.8-0.2l-0.5,0.8l-0.7,0.1l-0.4-0.6c-0.1-0.5,0.1-1.2,0.3-1.7
                  c-1.3-0.3-2.1,1-3.4,1c-0.8,0-1.5-0.6-2.4-0.4c-0.5,0.7-1.2,1.1-1.5,1.9c-0.6,1.5,0.1,3.7-1.7,4.4c-0.4-0.3-0.8-0.7-1.1-1.2
                  l-0.1-0.7l-0.5-0.6l-0.6,0.4c-1.1,1.6-0.2,2.6-0.6,4c-0.8,0.5-2.5,1.6-2.9,2.3c-0.5,0.9-0.1,2.9-0.2,3.9c-0.1,1.1-2.6,5.6-3.6,6
                  c-1.6-2.2,0.4-4.2,0.2-6.3c-0.1-0.7-0.5-1.5-0.4-2.2c0.1-0.5,1.3-2.9,1.6-3.5c0.3-1.7,2.1-3.3,1.6-5.1l0.6-0.2l0.5-0.7l-0.1-0.7
                  c-0.7-0.3-2.2-0.1-2.9,0.2c-0.8,0.4-0.7,0.8-1.1,1.4c-0.5,0.8-1.7,1.3-2.3,2c-0.2,0.3-4.4,6.5-4.4,6.6c-0.5,1.3,0.4,2.7-0.3,4
                  c-0.7,1.3-1.8,2-3.2,1.5l-0.5-0.6c0.3-1.5,0.1-2.4-0.1-3.9l0.6-0.5l0-0.8c-0.8-0.3-1.5,0.1-2.3-0.2l-0.1-0.8l0.5-0.6l0-0.8
                  c-0.3-0.3-0.5-1-0.5-1.4c0.5-0.9,1.6-1.3,2.2-2.2l0-0.8c-0.3,0-0.6,0.1-0.9,0.2c-1.5,0.6-2.7,1.5-4.3,1.8c-0.5,0.1-1.1,0-1.5,0.1
                  c-1.1,0.3-2.2,1.7-3.3,1.5l-0.6-0.5l-0.1-0.8c0.9-0.7,1.7-0.5,2.4-1.7c-0.2-0.4-0.3-0.9-0.3-1.4c1-1,2.6,0,3.8,0.1l0.4-0.8
                  c-0.5-1.3-3.2-1.9-4.5-1.9l-0.5,0.3l-0.9-0.2c0-0.9,0.7-1.7,1.1-2.4l-0.2-0.7c-1.2-1.1-3.5-1.2-5-2.4c-1.2,0.1-1.9,1.7-2.9,2.3
                  l-0.8,0c-0.3-0.3-0.7-0.9-0.7-1.3c-0.4,0.1-2.5,0.7-2.7,0.8c-0.6,0.4-1,1-1.8,1.3c-2.4,1-5.2,0.8-7.3,2.7c-1.1,1-1.4,2.7-2.4,3.7
                  c-0.5,0.5-1.3,0.7-1.9,1.1c-1.2,0.8-1.7,2.9-3.4,3.1c-0.5-0.2-1.1-0.4-1.7-0.4c-0.7,0.4-1.3,1.1-1.6,1.9l-0.7,0.3l-0.6-0.6
                  c0-1.4,3.6-4.6,4.4-6.1c0.5-1,0.1-2.1,0.2-3.2c0.6-0.4,1.4-0.1,2.1-0.4c0.8-0.8,1.1-2,2.1-2.7c0.4-0.3,3.3-1.9,3.8-2
                  c1.5-0.5,4.3-0.4,5.5-1.4c1-0.9,5.6-8.2,5.5-9.2l-0.4-0.6c-1.7,0-3.8,1.3-5.2-0.6l-0.1-0.8c0.9-2.1,4.4-3.3,5.7-5.2
                  c0.7-1,0.4-2.4,1.1-3.5c0.9-1.5,2.6-1.9,3.2-3.9l-0.8-0.5c-1.1,0.5-3.6,0.6-4.1,1.1l-0.8,0c0-0.4-0.2-1-0.4-1.3
                  c-1.2,0.2-3.6,3-5.7,2.9l0.1-0.8c1.8-1.6,5.7-3,6.6-4.9l-0.7-0.5c-0.6,0.3-4.1,2-4.5,2c-0.5,0.1-1-0.1-1.5,0l-0.2,0.1
                  c-1.1,0.5-1.6,1.6-2.7,2.3c-1.7,1-4.7,1.3-5.9,2.8c-1.8,2.3-3.4,5.3-5.8,7.1c-0.6,0.4-1.4,0.8-1.7,1.6c-0.6,1.4-0.6,3-1.6,4.3
                  c-0.5,0.6-1.2,1-2,0.8l-0.4-0.6c0.4-2,0.5-3.7,0.6-5.8c0.6-1.5,2.5-1.6,3.7-2.4c2.2-1.5,3-3.8,4.7-5.6c0.7-0.7,1.6-1.3,2.4-2
                  l-0.1-0.8c-0.5-0.1-1.2-0.5-1.4-1c1.4-1.8,5-1.6,6.2-3.8l0-0.8c-0.5-1-1.2-1.6-0.7-2.8c0.3-0.3,0.9-0.7,1.3-0.8
                  c0.8,0.2,1.6,0.9,2.1,1.6c0.5,0.1,1,0.2,1.5,0.2c0.6-0.5,0.9-1.3,1.7-1.7c1.2-0.7,2.2-0.6,3.4-1c1.7-0.5,5.9-4,6-5.8l0.2-0.2
                  c1.1-0.9,2.6-0.5,3.9-1c0.9-0.4,1.6-1.3,2.4-1.7c0.9-0.4,2,0,2.9-0.3c0.6-0.2,5.5-2.9,5.7-3.2c-0.3-0.3-0.7-0.8-0.8-1.2
                  c1.3-1,2.7-0.3,4.2-0.8c0.6-0.7,0.5-1.6,1.2-2.3c0.4-0.4,3.3-2,4.3-2.8c1.4-1.1,2.1-2.4,3.3-3.7l0.7-0.3c0.6,0.1,1.8,0.5,2.4,0.4
                  c2.7-0.4,6.1-5.7,5.5-8.3c-0.3-1.2-1.4-1.4-1.9-2.4c-0.7-1.4-0.3-3-0.9-4.4c-1.1,0.5-2.3,0.6-3.4,1.1c-0.8,1-1.7,2.3-2.7,3
                  c-0.6,0.4-1.3,0.7-1.8,1.2c-0.6,0.5-1,1.4-1.8,1.6c-3,0.5-7-4.6-8.8,0.5c0.9,2.1-1.7,2.1-2.9,4.3c-0.5,0.1-1.1,0.1-1.6,0
                  c-0.4,0.3-0.8,0.8-1.1,1.2l-0.8-0.2c-1.2-1.4-1-2.6-1.7-4.1c-0.7-0.2-1.6-0.3-2.3-0.1c-0.8-0.4-1.1-1.1-1.8-1.6
                  c-0.9-0.7-1.8-1.2-2.4-2.2c-0.7-1.3-0.2-2-0.5-3c-0.3-1-3.8-4.8-4.7-5.3c-0.9-0.4-1.7-0.2-2.7-0.4c-0.9-0.2-2.8-0.6-3.6-0.1
                  c-0.3,0.4-0.7,1.2-0.7,1.7c-0.1,0.7,0.2,1.5,0.1,2.4c-0.3,2.2-2.4,5.8-4.8,6.3l-0.7-0.5l-0.2-0.7c1.4-2.5,4.8-4.4,3.2-8.1l-0.8-0.4
                  c-1.9,0.6-2,2.4-5,2.7c-2.6,2-1.5,2.5-3,4.2c-0.8,0.8-1.7,1.2-2.3,2.3c-1.9,3.2-0.9,5.6-6.1,7.5l-0.9-0.3c0.8-0.6,1.4-1.9,2.1-2.7
                  c0.8-1,2-2,2.7-3.1c0.7-1.2,0.4-2.1,0.5-3.3c0.1-1.1,0.7-1.5,1.1-2.4c0.5-1.1,0.3-2.3,0.7-3.4c0.4-0.9,1.9-2.6,2.6-3.6
                  c-0.1-0.7-0.5-1.5-0.3-2.2c0.6-0.9,1.9-0.7,2.5-1.6c0-1.1-0.8-1.8-0.2-3c-0.2-2.1-2.9-2-3.9-3.1l-0.1-0.7c0.4-0.8,1.3-0.9,1.7-1.7
                  c-0.5-0.7-1.5-0.7-2.3-0.7l-0.6-0.5c-0.3-0.7,0.2-1.7,0.3-2.5l-0.8-0.5c-3.2,0-3.6,2.3-4.9,3.4c-0.7,0.6-1.7,0.9-2.5,1.6
                  c-1.6,1.2-3.2,3.4-4.3,5c-1.1,1.6-0.9,3.6-2,5.1c-1.2,1.7-3.7,2.3-5.2,4l-0.2,0.3c-1.1,1.4-1.1,4.1-1.8,5.8
                  c-0.9,2.1-3.8,5.6-4.1,7.1c-0.2,1.4,1.8,4.8,2.5,6.1l-0.3,0.9c-1-0.5-1.8-1.6-2.9-2c-0.9-0.4-1.4-0.1-2.1,0.5
                  c-3.4,3.2,0.9,7.8,0,9.8c-0.3,0.2-1,0.2-1.4,0.1c-1.8-2.5-0.7-6.8-3-8.3c-0.3,0-0.6,0.2-0.8,0.3c-1.5,1-2.3,3.1-3.5,4.5
                  c-1,1-4.4,2.9-4.8,3.4c-0.5,0.7-0.4,1.7-0.5,2.5l-0.4,0.7c-0.6,0.4-1.4,0.4-2,0.8c-0.3,0.2-3.6,5.5-3.9,6.1
                  c-0.6,1.1-0.7,2.5-1.3,3.6c-0.5,1-2.1,1.7-2.8,2.7c-0.7,1-1.2,2.3-1.8,3.4c-2.8,4.7-11.3,22.7-14.4,25.2l-3.2,1l-2,1.5
                  c0,0,0.3,3.7,0.3,4.2s0,2.2-0.3,2.7s-1,1.3-1.8,2.2c-0.8,0.8-1.7,1.2-2.7,2s-3,4-3.7,5.3c-0.7,1.3,0.7,2.2,0.7,2.2s1,1,2,1.3
                  c1,0.3,1.8-0.3,3-1.3s0.2-2,0.5-2.5s0.8-1.2,0.8-1.2s3.3-0.5,4.3-1.3s1.5-0.5,2-0.7c0.5-0.2,0.5,1.8,0,2.3s0.8,2.8,0.8,3.5
                  c0,0.7,1.3,1.3,1.5,1.8s0.3,1.7,0.2,2.7c-0.2,1-0.2,0.8-0.8,1.5c-0.7,0.7-1.5,2.3-1.7,3.2c-0.2,0.8-2.3,1.5-2.8,2.3
                  c-0.5,0.8-0.8,2-1.2,3c-0.3,1-1,3-1.3,3.5c-0.3,0.5-1.3,1.3-1.3,1.3s-1.2,0.5-2.3,1c-1.2,0.5-2.8,1.7-2.8,1.7l-0.8,4.2
                  c0,0-2,1.8-2.8,3.1c-0.8,1.2-1.5-0.2-2.8,0.1c-1.3,0.3-2.5-0.3-3.8,0s-1.8,1.5-2.2,2.7c-0.3,1.2,0.3,1.8,0.5,2.5
                  c0.2,0.7,1.2,1.7,1.8,2.5c0.7,0.8-0.2,1.8-0.2,1.8l-1.7,2.7l0.7,3.2l0.5,4.7l1,0.7c0,0,1.3,1.8,1.8,2c0.5,0.2,1.5,0.5,2,0.7
                  c0.5,0.2,2.8,0,2.8,0s1.8,0,3.5-0.2c1.7-0.2,1.8,0,3.3,0s2.2,0,3.7,0s1.3,0,2.5,0c1.2,0,1.5,0,2.7,0c1.2,0,2.3-0.2,3.7-0.7
                  s1-0.3,1.8-1c0.8-0.7,1.8-0.8,2.3-0.8s0.8,2.3,0.8,2.8s-0.8,2.7-0.8,2.7s-0.5,1.3-0.5,1.8s0.3,1.2,0.8,2s0.2,2.7,0.2,3.2
                  s-1,2.7-1.2,3.5c-0.2,0.8-0.8,1.7-1.2,2.2c-0.3,0.5-2.3,4.8-2.7,5.7c-0.3,0.8-1.8,3.3-2.5,4.5c-0.7,1.2-1.5,2-1.5,2.8
                  c0,0.8-3.7,2.4-3.7,2.4s-5.5,7.3-5.8,7.8c-0.3,0.5-1.8,4-1.8,4s-5.5,1.2-6,0.7s-4.3,2.4-4.3,2.4l-1.8,1.7h-7.3l-3.5-1.3
                  c0,0-2.8-0.8-3.7-1.2c-0.8-0.3-4.3-2-5-1.5c-0.7,0.5-4.2,0-4.8,0c-0.7,0-2,0-2,0s-2.5,2.7-2.8,3.2s-1.2,1.8-1.2,1.8
                  s-4.8,1.2-5.3,1.2s-2.3,0.5-2.8,0.8c-0.5,0.3-3.2,2.8-3.7,3.8s1.8,3.3,2,3.8s0.2,2.8,0.2,2.8l-1.2,2.2l-4.8,8c0,0,2.7,6.2,3,6.7
                  c0.3,0.5,1.8,2.3,1.8,2.3s2.2,2.7,3.5,3.5s1.8,3.3,2.2,4c0.3,0.7,0.5,4.7,0.2,5.2c-0.3,0.5-0.5,1.7-0.7,2.2
                  c-0.2,0.5-2.3,3.5-2.3,3.5s-4-0.3-5,0c-1,0.3-3,1.8-3.5,2c-0.5,0.2-5.5,1-5.5,1l-3.7,0.8c0,0-2,2.8-2,3.3s2.2,2,2.8,2.2
                  c0.7,0.2,3.2,2.8,4.3,3.7c1.2,0.8-0.7,3.3-1,3.8c-0.3,0.5-1.8,3.2-2.3,3.5c-0.5,0.3-3.8,2.5-3.8,2.5s-2.2,3.5-2.3,4
                  c-0.2,0.5-4.2,0.8-4.2,0.8l-3.3,2.8c0,0-3.2,0.2-3.7,0.2s-5-1.8-5-1.8H949c0,0-2.8,3.2-3,3.7s-1.7,2.8-2.2,3.7s-1.5,3.3-1.7,3.8
                  c-0.2,0.5-2.8,2.7-3.3,3c-0.5,0.3,2,1.2,3.2,1.8c1.2,0.7-1.2,2.5-1.2,2.5l-3.7,1.7l-3.8,1c0,0-3,0-4,0s-3.2,1-3.2,1
                  s-1.2,1.8-1.3,2.5c-0.2,0.7-1.7,2.2-1.8,2.7s0.7,1.5,1.3,2.5c0.7,1,0,2.5,0,2.5v3.3c0,0,2,1.7,2.3,2.2c0.3,0.5,1.8,1.5,2.8,1.7
                  c1,0.2,4.2,2.3,4.2,2.3l4,2.5c0,0,1.7-1.5,2.5-1.7c0.8-0.2,2.3,0.5,2.3,0.5v3l1.7,2.2c0,0,2.2,0.8,3,1.2c0.8,0.3,3,1,3.8,1.7
                  c0.8,0.7,3.8,2.5,4.3,3s1.7,1.5,2.8,1.8c1.2,0.3,2.2-1.2,3-1.7c0.8-0.5,2.2-1.3,2.7-1.7c0.5-0.3,2-1.7,2.7-2.3s3.2-0.2,3.8-0.2
                  c0.7,0,3.3-0.5,3.3-0.5h2.5c0,0,2.5,1.5,3,1.5s2.7,1.7,3.7,2c1,0.3,4.2,0.2,4.2,0.2l3.2-1.5l3.3-2.2v-2.7c0,0,0-3.5,0-4
                  s0.7-3.3,0.8-3.8c0.2-0.5,1.7-2.5,1.7-2.5l2-4l3.2-4.5v-2.3l2.2-4.7c0,0,0.5,3.5,1.2,4.3c0.7,0.8,0,2.2,0,2.2s1,4,1.2,4.7
                  c0.2,0.7,0.8,2.5,0.8,2.5l3.7,2.3l1.8,1l4.3,1.8l3.3,1c0,0,0.5-0.5,1.2-0.7c0.7-0.2,3-0.3,4-0.2c1,0.2,2.8-0.3,3.3-0.5
                  c0.5-0.2,1.7-1.5,2-2c0.3-0.5,1.8-2.5,2.3-3s1.2-1.7,2-2.2s0-2.3,0-2.3v-3v-2.7l1.8-1.7l2.8,0.3c0,0,1.8,1.3,2.3,1.8
                  s2.2,0.8,2.2,0.8s2.8,0,3.3,0s2.5-0.7,2.5-0.7s1.5-2.5,1.5-3.2c0-0.7,2.7-0.8,2.7-0.8l1.8,3v3.7c0,0,0.8,2.2,0.8,2.7
                  s1.3,2.7,1.5,3.2c0.2,0.5,0.8,2,0.8,2l3.2,1.3l3,1.3l3.8,2.2c0,0,1.3,1.7,2,1.8c0.7,0.2,2.7-0.3,2.7-0.3l1.7-2.3l1.5-2.8l1-2.7
                  l2.3-4l3.8-0.8l4-1l4.7-1.5h2.5l1.7-1.8h3.3c0,0-1,3.2-1.5,3.7c-0.5,0.5,0,2.5,0,2.5l0.1,4.3c0,0-0.3,3.8,0,4.3s0,3.5,0,4.3
                  c0,0.8,0.8,4.3,0.8,4.3l1,5.7c0,0,1.2,4.5,1.3,5c0.2,0.5,0,3.2,0,3.7s2.3,3,2.3,3l3.2,3.3l2,2l2.7,2l1.5,2.3l0.8,2.5l3.5,3l2.3-0.4
                  c1-0.8,0.7-3.4,0.2-4.4c-0.3-0.3-1.1-0.6-1.6-0.5l-0.6-0.4l0.3-1c0.5-0.5,1.1-1,1.8-1.2c0.4-1.7,1.5-1.6,2-2.7
                  c0.2-3.9-3.1-10.7-3-12.8l0.5-0.5c2.8,1.8,2.5,12,5.5,13.4l0.6-0.3c1.1-1.2,1.1-3,2.1-4.2l0.6-0.3l0.4,0.7c-1,1.7-1.9,3.4-2.6,5.2
                  c-0.9,0.8-3.5,1-2.8,3.1l0.4,0.7l0.8,0.2l0.1,0.7c-0.5,0.5-1,1.7-0.9,2.4c1.5,1,3.4,0.2,4.9-0.4c0.6-0.5,0.9-1.6,0.8-2.3
                  c0.7-0.8,1.6-1.1,2.2-2c1-1.5,1.7-4,3.4-5.1c1.9-1.2,4.1-0.7,6.1-1.2c5-1.2,6.7-4,7.6-8.8c0.4-2.1,0.7-3.5,0.5-5.6
                  c0.3-0.8,1-1.2,1.6-1.6c0.3-0.5,0.5-1.2,0.6-1.8c-0.1-0.4-0.6-1-1-1.2l-0.1-0.7c0.7-0.4,1-1.2,1.7-1.6c4.7-3,4.3-2.2,2.6-7.5
                  l0.6-0.3c1.1,0.8,2.6,3.7,3,5.1c-0.2,2.7-7.1,4.3-4.5,7.4c0.5,0.6,1,1.1,1.8,1.2c-0.7,0.7-1.7,0.9-2.4,1.4c-1.8,1.1-3.3,4.5-2.2,6.5
                  c0.4,0.7,1.4,1.1,2,1.6v0.7c-0.4,0.3-0.8,0.6-1.2,0.8c-0.6,1,0.1,2.2-0.2,3.2c-0.4,1.4-2.3,1.7-2.2,3.2c0.5,1,0.6,1.7,0.8,2.8
                  c-0.2,0.2-0.3,0.5-0.5,0.7c-0.6,0.7-1.6,1.1-2.3,1.7c-0.7,0.5-1,1.3-1.6,1.9c-0.7,0.7-1.6,1-2.3,1.8c-3.7,4.3-1.1,6.3,2.2,9.1
                  c1.1,0.9,2.2,2.3,3.7,2.3c2.8,0.1,6.2-3.5,8.4-4.9c1.9-1.2,8.7-4.7,10.9-4.3l0.6,0.5c-0.8,1.3-3.6,2-4.9,2.7c-1.4,0.7-3,1.3-4.3,2.1
                  c-1.9,1.1-3.3,3-5.1,4.2c-1.3,0.8-2.8,2-4.3,2.4c-0.9,0.3-1.8,0.3-2.6,0.7c-2.4,1.3-4.2,3.5-6.2,5.3c-0.7-0.2-1.5-0.4-2.2-0.2
                  c-1.1,0.3-8.2,2.8-8.5,3.5c-1.8,0.8-3.7,1.7-5.7,2.4c-1.5,0.5-3.2,0.6-4.7,1.1c-0.5,0.1-1.6,0.4-1.9,0.6c-3.5,2.7,4.6,7.4,4.9,7.4
                  c0.7,0,1.8-1.2,2.3-1.7c1-0.8,2.1-0.7,3.1-1.3c1-0.7,1.7-1.9,2.8-2.4c1.6-0.8,3.8,0.1,5.5-0.8c2.9-1.4,3.7-4.3,7.4-5.1
                  c0.3-0.1,0.8,0.1,1.1,0.2l0.2,0.7l1-1.3c1.4-1.3,2.1-2.9,3.7-4l0.8,0.2c-0.2,0.6-0.4,1.1-0.4,1.7l0.7,0.3c0.9-0.8,1.4-1.9,2.1-2.7
                  c1.3-1.7,2.7-1.4,4.3-2.3c-0.6,0.5-8,9.9-8.1,10.3c-0.2,0.5-0.1,1.1-0.3,1.7c-0.6,0.5-1,1.2-1.6,1.7c-0.9,0.8-1.9,1.4-2.8,2.2
                  c-1.1,0.9-4,4.8-4.1,6.3l0.5,0.6c2.2-1.2,4.7-5.7,6.6-5.9l0.8,0.4c0.6,2.3,1.5,2.9,3.8,2c0.5-0.6,1.1-1.4,1.2-2.2
                  c-1.8-2.8,0.6-5.4,1.6-8c0.3-0.6,0.3-1.2,0.7-1.8l0.7-0.1c1.1,2.1-2.4,5.5-1.3,7.4l0.6-0.3l0.6,0.6c0.2,1.8-2,3.6-1.4,4.8l0.7,0.3
                  c1.9-0.7,2.9-2.2,5.5-3.1l0.4-0.7c0-1-0.8-1.8-0.9-2.8l0.5-0.6c0.4-0.2,1.1-0.2,1.5,0c0.5,0.6,0.8,1.4,1.4,1.8
                  c1.4,0.3,4.7-3.6,4.7-4.6l-0.2-0.7l-0.7-0.2c-0.4,0.2-0.8,0.4-1.2,0.6c-0.1-1.6,0.4-1.8,1.2-2.9c1.9,0.2,4.6,3.3,4.5,4.8
                  c-0.7,1-2.2,2-2.7,2.8c-0.9,1.8-0.1,4.3-1.6,5.9c-0.9,1-2.4,0.6-2.9,2.3l0.4,0.6c2,0.6,4.2-3.8,6-3.5l0.8,0.5l-0.2,0.8
                  c-0.4,0.2-0.9,0.6-1.1,0.9l0.1,0.7c0.4,0.1,1,0.7,1.1,1.1c0.4,1.6-2.5,2.8-1.4,4.5c0.5,0.1,1,0.2,1.5,0.2c2.2-2,1.5-7.3,5.1-6.7
                  c0.5-0.8,0.6-1.7,1.2-2.5l0.6-0.3l0.7,0.5l0.1,0.7c2.3,0,3.4-2.2,4.2-2.4c1.1-0.2,1.8,1.1,3,0.3c1.8-2.4,3.3-5.6,2.4-8.7
                  c-0.6-0.4-1.1-1.1-1.1-1.9c0.4-1.2,1.5-2,1.8-3.2c-0.1-1-0.5-1.9-0.4-2.9c0.4-0.3,0.8-0.9,1-1.4l-0.3-0.7l-0.7-0.2
                  c-0.7,0.5-1.7,1.3-2.2,2l-0.8-0.4c0.2-1.9,3-2.8,3.2-4.3c-0.1-1.3-1.3-2.2-1.6-3.4l-0.7-0.5c-1.6,0.3-2.5,2.3-3,3.7l-0.6,0.1
                  l-0.5-0.6c-0.1-0.4,0.3-4.5,0.4-4.8c2-0.7,2.7-2.3,3.7-4c-0.2-1.5-2-4.3-0.5-5.9c0.3-0.2,1-0.3,1.4-0.1c0.7,0.7,0.8,1.8,1.2,2.7
                  l0.7,0.5c0.7-0.2,1.3-1.1,1.4-1.8c-0.1-0.8-0.6-1.4-0.9-2.1l0.1-0.8c0.5-0.4,2.1-0.7,2.7-0.5c0,0.5,0,1.1-0.2,1.6l0.3,0.6l0.8,0.2
                  l-0.1,0.9c-0.7,1-2.8,2.5-2.8,3.8c0.2,0.8,1.2,1.1,1.6,1.7l0.1,0.8c-0.4,0.4-0.7,1-0.8,1.6l0.5,0.5c0.5,0,1,0,1.6,0
                  c1.5-0.1,2-1.6,1.9-2.9l0.7,0c0.8,1.3,1.6,1,2.8,1.4c0.8,0.3,1.6,1.1,2.5,1.2c0.6,0.1,2-0.6,2.7-0.8l0.7,0.2c2.3,2.4,2.6,3,6,2.6
                  c1.4-1.2,2.3-2.1,3-3.8c-0.4,2.1-0.4,4.5-1.1,6.5c-0.7,0.3-1.2,1.5-1.1,2.2c0.8,1.5,1.6,3.4,3.3,4.2c0.8-0.1,1.7-0.8,1.9-1.6
                  c0.7-2.2-0.2-3.1-0.1-4.4c0-0.1,0.3-0.8,0.3-0.9c0.1-0.3,0.3-0.6,0.4-0.8c0.6-0.9,1.5-1.7,2-2.7c0.3-0.6,0.5-1.4,0.8-1.9
                  c0.7-1.1,2-1.8,2.6-3.1c0.7-1.6,0.4-3.5,1.1-5.1c0.7-1.6,2.5-3.1,3.5-4.6c1.3-1.9,2.4-4.2,3.9-5.9l0.6-0.1c-0.5,2.5-1.1,5.5-2.8,7.6
                  c-0.7,0.8-1.6,1.4-2.2,2.3c-1.9,1.7-0.9,2-1.5,3.7c0,0.1-3.8,7.3-4,7.5c-1.1,1.6-2.7,3.3-3.4,5c-0.4,1-0.4,2.1,0.4,2.9
                  L1223.2,1997.7z"/>
                </path>
              </g>
              <g id="western" data-toggle="modal" data-target="#myModal" >
                <title>Western Health</title>
                <desc>
                <p>
                <b>Healthy Activity</b><br>
                <a target="_blank" href="http://www.hc-sc.gc.ca/fn-an/alt_formats/pdf/food-guide-aliment/educ-comm/toolkit-trousse/poster-affiche-eng.pdf">Healthy Living Poster</a><br>
                <a target="_blank" href="http://www.csep.ca/CMFiles/publications/GAQ_CSEPPATHReadinessForm_2pages.pdf">Getting Active Questionaire</a><br><br>
                <b>Smoking Cessation</b><br>
                <a target="_blank" href="http://www.hc-sc.gc.ca/hc-ps/tobac-tabac/quit-cesser/fact-fait/stages-etapes-eng.php/">Five Stages of Quitting<br>
                <a target="_blank" href="https://www.canada.ca/content/dam/canada/health-canada/migration/healthy-canadians/publications/healthy-living-vie-saine/fni-tobacco-strat-2012-2017-pni-strat-tabagisme/alt/fni-tobacco-strat-2012-2017-pni-strat-tabagisme-eng.pdf">First Nations Federal Tobacco Control Strategy</a><br><br>
                <b>Healthy Eating</b><br>
                <a target="_blank" href="https://www.canada.ca/en/health-canada/services/canada-food-guides.html">Canada's Food Guides</a><br>
                <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-lets-eat-healthy-canada/infographic-lets-eat-healthy-canada.pdf">Let’s Eat Healthy Facts Poster</a><br>
                <a target="_blank" href="http://www.statcan.gc.ca/pub/82-625-x/2017001/article/14764-eng.htm">Fruit and Vegetable consumption 2015</a><br>
                <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-marketing-to-kids/infographic-marketing-to-kids.pdf">Marketing Unhealthy Foods - Health Canada</a><br><br>
                <b>Diabetes Management</b><br>
                <a target="_blank" href="http://guidelines.diabetes.ca/CDACPG_resources/Vascular_Protection_Risk_Assessment_FINAL.pdf">Recommendations for Vascular Protection</a><br><br>
                <b>Nutrition</b><br>
                <a target="_blank" href="SeabirdIslandMobileDiabetesTeamHealthyPlate.pdf">Seabird Island Mobile Diabetes Team Healthy Plate</a><br>
                <a target="_blank" href="TraditionalFoodsFactSheetsupdated.pdf">Traditional Foods Fact Sheets</a><br>
                <a target="_blank" href="TreefOfLifeFoodGuideCycleOfLife.pdf">Tree of Life Food Guide Cycle of Life</a><br>
              </p>
              </desc>
                <path class="western" d="M1120,1983.3l-2.3,0.4l-0.7-0.6l-1.9-1.7c0,0-1-1.2-1.1-1.6s-0.5-1.6-0.5-1.6s-0.9-1.4-1.2-1.8
                  c-0.3-0.5-1.9-1.7-1.9-1.7l-2-1.7l-2.5-2.6c0,0-3-3.2-3.2-3.5c-0.2-0.3-0.8-1.3-0.8-1.3s0-1.4,0-1.8c0-0.4,0-1.9,0-1.9l-0.3-0.9
                  l-0.5-1.9c0,0-0.3-1.3-0.4-1.6c-0.1-0.4-0.3-1.6-0.3-1.6l-0.3-1.7c0,0-0.3-2-0.5-2.8c-0.2-0.9-0.3-1.3-0.4-1.6s-0.3-1.4-0.4-2
                  c-0.1-0.6,0-1.7,0-2.1c0-0.4,0.1-1.4,0.1-2c0-0.6-0.1-0.9-0.3-2c-0.1-1.1,0.1-2.1,0.1-3.2s0-1.1,0-1.1s-0.6-1.2-0.6-1.6
                  s0.5-1.7,0.4-2.3s0.1-1.9,0.1-1.9l1.5-2.2v-1.5c0,0-0.7,0-1.1,0s-1.5,0-1.5,0h-0.8l-1.2,1.3l-0.5,0.5h-1.7c0,0-1.8,0.3-2.1,0.4
                  c-0.3,0.1-1.1,0.3-1.1,0.3l-2.3,0.7l-1.4,0.3l-2.6,0.7l-1.9,0.4l-2,0.4l-0.6,1l-0.9,1.5l-0.9,1.5l-0.7,1.8c0,0-0.3,0.8-0.8,1.8
                  c-0.5,1-1,1.8-1,1.8l-0.4,2l-1.3,0.3l-2.7,0.3l-0.9-0.6l-1.1-1.2c0,0-1.5-0.8-1.8-1s-1.5-0.8-2-1.1s-1.1-0.5-1.9-0.9
                  c-0.8-0.4-1.1-0.5-1.1-0.5s-1.8-0.7-2.2-0.9c-0.4-0.2-1-0.4-1-0.4s-0.8-2-1.3-2.9c-0.4-0.9-0.9-1.7-1.1-2.3
                  c-0.2-0.6-1.2-1.7-1.2-1.7s0.4-1,0.4-1.8s0-0.8,0-1.6s0-1.3-0.5-2s-0.2-1.7-1-1.7c-0.9,0-0.4-0.6-1-0.5c-0.6,0.1-1.5,0.3-1.5,0.3
                  l-0.6,0.5l-0.5,1.3l-1,1.8l-1.8,0.5l-2.4,0.1h-1.6l-2.2-0.8c0,0-1.3-1-1.7-1.3s-1.4-0.6-1.4-0.6s-1.1-0.7-2.1-0.2
                  c-1,0.5-0.6,0.5-0.6,0.5l-1.2,1.1c0,0,0,1.8,0,2.7c0,0.8,0,1.4,0,1.8s0.3,1.9,0.3,1.9s0.1,0.6,0.1,0.9c0,0.3-1.3,1.5-1.5,1.8
                  s-0.9,1.1-0.9,1.1s-1.7,2.2-1.9,2.4c-0.2,0.3-1,1.3-1,1.3l-2,1.5l-4.9,0.3l-3.1,0.9c0,0-2.2,0.3-2.5,0.2s-2.4-1.9-2.9-2.1
                  c-0.5-0.2-2.2-0.9-2.2-0.9l-2.9-1.7l-2.6-1.7c0,0-0.4-1.2-1.3-1.5s0-2.7-0.1-3.2s-0.4-1.5-0.4-1.7c0-0.2-0.2-0.8-0.2-0.8
                  s0.3-1.5,0-2.2s-0.6-1.6-0.7-2s-0.4-2.3-0.4-2.3l-0.4,0.9c0,0-0.7,1.4-0.8,1.8c-0.2,0.4-0.5,1.1-0.9,1.9s0,1.5,0,2.3
                  c0,0.8-0.4,0.5-0.6,0.9c-0.2,0.3-1.3,1.8-1.6,2.2c-0.3,0.4-1.4,2.1-1.4,2.1s-0.8,1.6-1,2c-0.2,0.4-0.7,1.3-1.3,2.2
                  c-0.7,0.9-1,1.6-1,1.6s-0.1,3.8-0.8,4.7s0.9,2.6,0.9,2.6l-0.9,3.2l-1.3,0.8l-2,1.3l-3.2,1.5l-1,1.1l-3.2-1.3l-2.4-1.3l-1.3-0.7
                  l-2-0.9l-1-0.6h-1.8c0,0-1.5,0.2-2,0.2c-0.5,0.1-2,0.3-2,0.3s-2.2-0.2-2.7-0.2s-2,1.2-2,1.2l-1,0.9l-2.1,2.6l-3,1l-0.5,1.9l-2.3-2.3
                  l-2.7-2.1l-1.7-1.1l-3.2-1.1l-1.8-1.5l-2-0.8l-1.6-1.3l-1-1.3v-1.8v-1.2l-2.3-0.5l-0.8,0.4l-1.7,1.3l-1.4-0.9l-1.4-0.9l-1.7-1.1
                  c0,0-1.2-0.7-1.5-1c-0.3-0.2-1.4-0.8-1.4-0.8l-1.4-0.5c0,0-1.6-0.9-2.1-1.4s-1.1-1.1-1.1-1.1s-1.2-1.7-1.2-2s0-1.8,0-2.4
                  s0.3-1.5,0.3-1.5s-0.3-1-0.9-1.8c-0.6-0.8-0.8-1.7-0.8-2.3c0-0.6,0.6-0.2,0.9-0.6c0.3-0.3,1-1.5,1-1.5s0.5-1.1,0.7-1.4
                  c0.2-0.3,0.7-1.1,0.7-1.1s1.1-0.4,1.4-0.6s1.8-0.4,1.8-0.4h1.7c0,0,1.4,0,1.8,0s2.3-0.5,2.3-0.5s3.1-1,3.4-1.1
                  c0.3-0.1,2.4-1.1,2.4-1.1l1.3-1.4l-0.7-1.4l-2.1-1v-1c0,0,1.3-1.1,1.6-1.4s1.2-1.2,1.2-1.2s0.4-1.1,0.6-1.4c0.1-0.3,0.5-1.2,0.7-1.6
                  c0.2-0.4,0.9-1.5,1.1-1.9c0.2-0.4,1-1.6,1-1.6l1.1-1.8c0,0,0.7-2,1-2.4s2.3-0.5,2.3-0.5h3.1l3.1,0.2c0,0,1.2,1.2,1.5,1.5
                  c0.3,0.3,2,0.1,2.4,0s1.5,0,1.9,0c0.4,0,2.2-1.4,2.2-1.4l1.7-1.4l1.1-0.4h1.8l1.2-0.4l1.1-2l1.2-2l1.1-0.7l1.7-1.8h1l1.1-1.4
                  l1.3-2.1l1.2-2.1c0,0,0.2-1.2-0.2-1.8s-1.2-1-1.6-1.3c-0.3-0.3-1.6-1.5-1.6-1.5h-1.4c0,0-1.8-2.1-2.1-2.3c-0.3-0.3,0-1.7,0-1.7
                  s0.8-1.2,1.1-1.7s1.4-0.8,1.7-1.4s2.3,0,2.3,0s2.9-1.3,3.3-1c0.4,0.3,2.2,0,2.2,0l0.5-0.8l1.9-0.6l1.1-0.6l1.8-0.1l3.2,0.1l0.9-1.3
                  c0,0,1.1-1.7,1.4-2.2c0.3-0.5,0.4-1.5,0.7-2.2c0.3-0.7,0.2-1.2,0.2-1.5c0-0.4-0.1-2-0.1-2.5c0-0.5-0.5-1.9-0.6-2.2
                  c-0.1-0.3-0.8-1.9-0.8-1.9l-1.7-1.6c0,0-1.2-1.2-1.5-1.5c-0.3-0.3-1.2-1.3-1.2-1.3s-1.4-1.8-1.8-2.3s-0.5-1.1-0.7-1.4
                  c-0.2-0.4-0.6-1.3-0.9-2c-0.3-0.7-0.6-1.4-1.4-1.9c-0.8-0.5,0-1.3,0-1.3l1.3-2.2l0.8-1.4c0,0,0.8-1.3,1-1.6s1.7-2.9,1.7-2.9l1.2-2.2
                  c0,0,0-1,0-1.3s-0.9-1.3-0.9-1.3s-0.2-1.6-0.4-1.9c-0.2-0.2-0.8-1.3-0.8-2.2c-0.1-0.9,0.7-1,0.7-1s1.1-1.1,1.4-1.5
                  c0.4-0.4,1.5-1.3,1.5-1.3s1.5-0.6,1.9-0.7c0.4-0.1,1.8-0.3,1.8-0.3s2.1-0.5,2.4-0.5c0.4-0.1,2-0.5,2-0.5l0.5-0.9
                  c0,0,1.9-1.2,1.6-2.2c-0.2-0.9,1.1-1.2,1.1-1.2l0.7-0.8l2.8-0.6c0,0,0.8,0.7,1.2,0.7c0.4,0,1.6,0.1,1.6,0.1l1.7-0.3l0.7,0.1l2.2,0.8
                  l1.5,0.7l2,0.7l1.6,0.5c0,0,2.6,1,3.5,1.3c0.9,0.3,0.9,0,0.9,0h2.3h1.8h2.4l1.8-1.7l0.8-0.6l2-1.3l1.6-0.6l1.4-0.5h1h2.4l1.2-0.2
                  l0.8-1.9c0,0,0.7-1.6,1-2.1c0.3-0.5,1-1.4,1-1.4l0.7-0.9c0,0,0.8-1.1,1.1-1.5c0.3-0.4,1.5-0.8,1.5-0.8l0.4-1.8l1.1-1.4
                  c0,0,1.4-0.7,2-1s1.1-0.7,1.1-0.7l0.8-1.4c0,0,0.9-1.5,1.3-2c0.4-0.6,1-1.7,1-1.7s1.2-2.2,1.5-2.8c0.3-0.6,0.7-1.7,1-2.3
                  s0.6-2.8,0.6-2.8l1.3-2.1l1.4-1.7l0.8-2.3c0,0,0.1-1.4,0.2-1.8c0.1-0.4-0.4-1.4-0.4-1.4l-0.8-2l0.5-1.8l0.7-2.1c0,0,0.1-1.3,0-1.7
                  c-0.1-0.4-0.7-1.8-0.7-1.8l-1,0.2c0,0-1.3,0.7-1.9,1.1c-0.6,0.5-1.3,0.5-1.3,0.5s-2.8,0.6-3.1,0.7c-0.4,0-1.9,0-1.9,0h-3
                  c0,0-2.5,0-3,0s-2.6,0-2.6,0l-2.3,0l-2.7-0.1h-3h-1.5c0,0-1.8-0.9-2.1-1.3s-0.9-1.1-1.9-1.8s-0.2-1.5-0.2-1.8c0-0.4-0.2-1.7-0.2-2.1
                  s-0.1-0.7-0.2-1.5c-0.2-0.8-0.5-2.3-0.5-2.3l0.9-1.5l1.6-0.8l-0.5-1.6c0,0-1-1.5-1.3-1.8s-1.9-1.2-1.9-1.6s0.6-2.2,0.6-2.2
                  s0.9-1.9,0.8-2.5c-0.1-0.6,1.4-0.2,1.4-0.2l2.1,0l1.7,0l1.3,0.2l1.5-0.3l1-1.2l1-1c0,0,0.2-0.2,0.8-0.8c0.6-0.6-0.8-1-0.8-1l0.6-1.9
                  l1.1-1.3l1.3-0.9l1.5-0.8l2.3-1l1.3-1.3l0.3-0.5l0.7-1.8l0.4-1.2l0.5-1.4l0.7-1.6l1-0.8l1.4-0.9l0.5-0.6l0.7-1.7l1-1.5l0.8-1.5
                  c0,0,0.7-0.8,0.6-1.3s-0.8-1.4-0.8-1.4s-1-1.1-1.5-1.8c-0.5-0.8-0.2-0.6-0.3-1s-0.6-1.7-0.5-2.5c0.1-0.8,0.4-1.1,0.4-1.1l-0.4-1.3
                  c0,0-1,0.1-1.4,0.3c-0.3,0.1-0.6,0.4-0.6,0.4s-2.6,1-2.9,1.1c-0.4,0.1-1.4,0.3-1.4,0.3l-0.8,1.2l0.6,0.4v1.8l-2,1.1l-1.4,1.4
                  c0,0-2.3-0.5-2.5-0.9s-1.1-2.8-1.1-2.8l0.7-1.5l1.1-1.7l1.1-1.6l1-1.1l2.7-2l1.8-2.2l0.3-1.1l0-2.5l-0.3-3.3l2-1.5l1.3-0.4l1.9-0.6
                  l2.8-3.9l0-2.9c0.7-1.5,0.3-2.7,0.5-4.1c0.1-0.9,1.3-4.4,1.7-5.2c0.6-1.8,2.2-10.8,1-12.2c-0.4-0.1-1.1,0-1.4,0.2l-0.9-0.3
                  c-0.1-0.4-0.4-0.9-0.6-1.3l-0.9-0.4c-1.6,0.3-3.4,0.3-5.1,0.5c-0.8-0.3,0.7-5.6,1.6-6l0.5-2.5l-2-2.6l-3.8-2.5l-2.4-1.5l-6.4-3.2
                  l-14.3-3.2c0,0,5.7,1.7,0,0c-5.7-1.7-3.3-8.5-3.3-8.5l3-4.7l8.9-16.3c0,0,3.9-15.7,2.8-19c-1.2-3.3-7.5-8.1-7.5-8.1l-15.1-5.3
                  l-17.2-6.7l-6.2-3.4c0,0-1.4,13.3-4,22.6c-2.7,9.3-6,12.7-6,12.7l-9.3,20l-7.6,16.6c-0.6,1.7,0.1,3.5-0.8,5.1c-1,1.7-4.2,2.3-2.7,5
                  c-0.7,1.6-0.9,3.4-1.4,4.4c-0.7,1.5-2.4,2.4-3.1,3.8c-3.3,5.8-5.6,14.2-4.4,20.9c0.2,0.9,0,2.6,0.4,3.2c0.7,0.6,1.7,0.4,2.2,1.1
                  c0,0.6-0.2,1.3-0.5,1.8c0.8,1.4,2.2,2.1,3,3.5c0.7,1.3,1,4.6,2,5.5l0.8,0.1c0.5-0.6,1.4-0.7,1.9-1.2c1.2-1.1,0.7-2.7,1.1-4.1
                  l0.6-0.2c0.3,1.1-0.1,2.6,0.2,3.8c0.9,3.5,4.2,6.1,7.2,7.9c1.4,0.8,3.3,1,4.5,2.1l0.2,0.7c-0.7,2.2-2.1,0.8-3.4,1.1
                  c-0.5,0.1-0.8,0.4-1.4,0.4c-1-1.9-1.4-1.6-3.2-2.4c-1.5-0.7-5.5-5-6.2-5.4c-0.4-0.2-1.2-0.4-1.6-0.3c-1.2,1.6-3.9,1.5-4.1,4.5
                  c0.4,2,2,1.7,2.7,2.9c-0.2,1.3-0.7,2.8,0.5,3.7v0.8h-0.8c-0.5-0.3-1-0.6-1.4-1c-0.4-0.9-0.3-2-0.7-2.9c-0.5-0.9-1.5-1.3-1.5-2.6
                  c0-1.7,1-3.3,0.8-5.1c-0.3-4.2-3.4-8.5-8.1-7.8c-1.1,0.6-2.4,0.3-3.4,1.1c-1.4,1.2-2.4,3-3.7,4.3c-1.6,1.8-4.3,4.7-5.9,6.3
                  c-0.5,0.5-1.2,0.8-1.7,1.3c-0.9,1-1.1,2.2-1.8,3.3c-1.6,2.5-3.7,4.8-4.7,7.7c-0.9,2.7-0.1,6.1-0.6,8.9c-0.4,2.7-2.3,5.2-1.1,8.1
                  c0.2,0.5,0.2,1.1,0.5,1.7c0.4,0.6,0.9,1.1,1.3,1.8c0.7,1.5,1.3,4,3.5,3.9l0.6-0.3c2.7,0,2.9,1.1,5,1.8c0.8,0.3,1.6-0.1,2.3,0.1
                  c2.1,0.6,3.4,1.8,5.7,1.8c4,0,8.3-4.3,10.5-4.2c-0.4,1.3-1.7,2.5-2.4,3.7c-3.3,5.2-3,6.6-9.8,5.9c-1.4-0.2-2.8-0.1-4-1l-0.7,0.1
                  c-1.3,2.4,1.7,6.6,6.2,5.5c3.8-1,7.8-6.8,11.1-6.3c0.2,1.9-3.1,2.6-4.3,3.6c-0.3,0.8-0.1,1.3,0.3,1.9c1.6,2.2,4.7,0.1,6.3-1
                  c1.4-1,2.8-3.6,4.1-4.1l0.6,0.5l-0.1,0.3c-0.3,0.8-0.4,0.8-1,1.4c-1.4,1.4-3,2.9-4.1,4.5c-0.5,0.8-0.7,1.8-1.4,2.4
                  c-1.4,1-4.7-1.7-6.5-1.9c-4.6-0.4-1.7,5.4-12.5,0.2l-0.7,0.2c-0.6,0.6-1.2,1.1-1.5,1.9c0.2,1.9,0.6,3.7,0.8,5.6c0,0.3,0.1,0.7,0.3,1
                  c0.5,0.8,1.4,1.2,1.7,2.2c0.4,1.2,0.1,2.7,0.6,4c0.5,1.4,2.2,2.4,3.2,3.4c0.8,0.8,1.3,2.1,2.2,3c2.9,2.9,7.7,3.5,11.4,2.5
                  c0.9-0.2,1.8-0.6,2.7-0.8c1,0.3,1.4,1.5,1.8,2.4c-1.1,0.9-2.3,0.8-3.6,1.1c-1.3,0.2-2.6,0.8-3.9,0.8c-1.7,0-3.5-0.8-5-1.4
                  c-3.9-1.6-6.8-2-9.5-5.7c-2-2.7-2.1-7.1-5.4-8.8c-1.2-0.6-10.6-1.9-11.9-1.6c-2,0.6-3.6,2.7-5.9,2.3l-0.6-0.5
                  c-0.9-1.7,0.9-4.9,2.2-6l0-0.7c-0.8,0.1-1.6,0.1-2.4,0l0.6-0.6c0.6-0.5,1.2-1.1,1.6-1.8c0-0.7-0.2-4.1-0.6-4.6
                  c-1.2,1.1-3,1.7-4.2,2.9c-0.9,0.9-0.6,2.6-1.8,3.1l-0.4,0.2l-0.5,0.8c-0.1,0.8,0.3,1.6,0.2,2.4c-0.3,1.5-1.6,2.8-2.1,4.3
                  c-0.4,1.4-0.3,3.3-1,4.5c-0.8,1.6-3.6,2.4-4.4,4c-0.9,1.9-0.4,8.2-0.4,10.6c-0.7,1.4-1.8,2.6-2.2,4.1c-0.6,2.3-0.6,4.7-1.4,7
                  c-0.4,1-3,4.7-3.9,5.5c-0.5,0.5-1.4,0.8-1.8,1.5c-1.3,2.1-0.9,5-2.1,7.1c-0.9,1.7-2.9,2.7-3.3,4.6c-0.3,1.4-0.4,2.9-0.7,4.3
                  c-0.3,1.2-1,2.4-1.2,3.6c-0.2,1.5,0.6,3.7,0.9,5.1c0.6,2.9-1.7,8.9-3.1,11.4c-2,3.6-10.7,2.4-12.3-0.8c-0.8-1.5-0.5-3-0.5-4.5
                  c0-1-0.4-2.1-0.1-3.1l-0.6-0.6c-1.2,1.3,0.5,4.2,0.2,6c-0.1,1-0.7,1.8-1.1,2.7c-0.7,1.5-1.5,3-2.9,3.9l-0.8-0.1
                  c-1-1.2,0.3-3.6,0.4-4.9l-0.3-0.7c-1.4-0.5-3.9-0.8-4.9-1.9c-5-5.5,9-16.8,12.5-20.4c1.1-1.1,1.8-2.8,2.9-4c0.6-0.7,1.2-1.1,1.6-2
                  l-0.7-0.5c-1.8,1.4-3.6,2.5-5.1,4.3c-0.8,0.9-1.6,2-2.5,2.9c-0.7,0.7-1.6,1.1-2.3,1.8c-0.7,0.7-1.4,1.8-2.1,2.4
                  c-0.7,0.6-1.7,0.4-2.5,1.1c-3,2.5-5.9,5.9-9.2,8c-1.5,1-4.5,1.6-5.5,2.6c-0.8,0.7-1.3,1.9-2,2.6c-0.8,0.8-2.2,0.8-3,1.6
                  c-2,1.8-3.5,5.7-4.2,6.4c-0.5,0.4-1.9,0.3-2.6,1c-0.2,0.2-2.1,3.8-2.1,4c-0.1,0.5,0.3,1.7,0.5,2.2c-0.4,2.4-2.4,3-3.2,4.8l0.1,0.8
                  l0.5,0.7c1.8,0.7,4.5-1.8,5.9-1.6c2.6-1.6,8-4.3,10.9-5.1c1-0.3,1.9-0.2,2.8-0.4c1.1-0.2,2.1-1.1,3.3-1.3c1.5,0.5,2.4,1.4,4,1.6
                  c2.3,0.3,4.2-0.3,6.4-0.6c4.1-0.6,8-0.6,11.8-2.4c2.8-1.3,5.9-3.1,9-3.5c0.4-0.1,1,0.1,1.4,0.1c1.5,0.3,3,1,4.5,1.5
                  c1.6,0.5,3.2,0.4,4.8,0.9c1.6,1.7,2.1,5.3,4.7,5.8c2.2,0.4,3.4-2.1,6-1.9c1.1,0.6,1.5,1.5,2.5,2.1c0.7-0.5,0.8-1.5,1.6-1.8
                  c0.4-0.1,1.1,0.1,1.5,0.3c3.7-2.2,4.6-2,8.7-2.8c0.8-0.1,3.5,0.8,3.9,1.5l-0.2,0.8c-0.2,0.1-0.5,0.3-0.7,0.4
                  c-1.8,0.6-4.4-0.1-6.5,0.5c-2.7,0.7-3.8,3-6.8,3h-0.2c-1.2,0.5-2.9,6.5-5,8.2c-1.2,1-5,1.6-6.6,2.2c-1.7,0.6-3.3,1.9-4.8,2.9
                  l-0.9-0.3l0.1-0.8c0.7-0.8,1.5-1.3,2.3-2c3.6-3.1,3.1-2.5,7.4-4l0.5-0.7v-0.8c-1.8-0.4-8.8,3.3-10,4.9c-1.1,1.4-1.6,3.8-2.5,4.7
                  c-1.2,1.2-3,1.3-4.2,2.6c-0.6,2.2-0.7,5-2,7c-1.4,2.3-4.1,5.1-6.2,6.9c-1,0.8-2,1.4-2.9,2.4c-1.8,1.9-2.8,4-4.4,5.9
                  c-1.5,1.7-3.9,3.2-5.7,4.5c-2,1.5-3.5,4-5.2,5.9c-1.5,1.8-1.3,4.4-3.4,5.9c-1.8,0.3-3.7,0.6-5.3,1.6c-3.6,2.1-6.7,4.6-9.8,7.3
                  c-2.9,2.6-9.6,5.9-11.2,9.4c-0.5,1,0.1,2.3-0.9,3.3c-0.9,0.8-1.7-0.2-2.7,2.3c-0.6,1.4-0.4,3.1-1.4,4.3c-1.8,2.3-6.7-0.6-8.4,5.1
                  c-1.1,3.8,4.1,5.4,3.6,9.4c0.5,1.4,3.2,2.1,3.7,3.9c0.7,2.5-0.6,4.9,0.5,7.7c0.3,0.4,1,0.7,1.5,0.8c0.6-0.4,1.5-0.4,2.2,0l0.2,0.7
                  c-0.5,1.6-1.7,1.4-2.1,2.4c-0.1,0.3-0.1,0.8-0.2,1.1c-0.3,1.7,0.1,3.6,0,5.3c-0.1,1.1-0.4,2.3-0.5,3.4c-0.1,0.8,0.3,8.5,0.5,9.3
                  c1.2,1.3,3.2,0.3,4.6,1.2c1.4,0.9,1.9,3,2.7,4.4l0.7,0.1c0.2-0.4,0.8-0.8,1.2-0.9c1.6,0,3,1.9,4.3,2.5c1.3,0.6,2.7,0.8,4.1,1
                  l0.5-0.5c-0.2-0.7-0.8-1.2-0.9-2c1,0,2.8-0.3,3.5-0.3c1.6,0.1,2.8,0.6,4.5,0.3c1.6-0.3,2.7-1.3,4.6-1.6l0.8,0.3
                  c0.1,0.4,0.4,1,0.8,1.2c2.8-1.9,1.4-3.2,5.7-2.5c0.7-0.2,1.1-0.7,1.8-0.8c1.7,0.1,1.5,1.3,3.6,0.5c0.3-0.5,0.7-1,0.9-1.6
                  c1.3,0.2,1.6,1.5,2.7,1.6c1.3,0.1,3-0.1,4.4-0.1c2,0,4.1-1.1,6.2-1.2c0.7,0,1.5,0.2,2.1-0.1c0.3-0.4,0.5-1.3,0.4-1.8
                  c0.2-0.4,0.6-0.9,1-1.2c1.1,0.1,2-0.2,2.5-1.2h0.7v1.6l0.4,0.6c3.1,1.2,4.9-1,4.8-3.9h0.7c0.9,0.7,1.7,1.5,2.9,1.6l0.6-0.4
                  c0.8-1.4,0.2-3.2-0.5-4.5l0.5-0.7c0.5,0.2,1,0.6,1.3,1c0,0.8,0.4,1.4,0.5,2.2l0.7,0.4c0.7-0.2,1.1-0.8,1.8-1c2.5-1,3.7,1.5,5.6,2.4
                  c2.5-0.3,3.7-4.6,4.4-6.5c0.3-0.7,0.7-1.1,0.9-1.9c0.3-1.3-0.4-2.9,0.1-4c2-1.1,2.5-2.8,3.4-4.7c0.3-0.2,6.6-0.9,7-0.8
                  c-1.6,1.1-2.4,2.2-3.8,3.4c-2.7,2.3-2.4,4.5-3.5,7.7c-0.4,1-1.7,3.7-1.7,4.5l0.5,0.5c0.5,0.1,1,0.2,1.5,0.2c1-0.4,3.3-3.1,4.2-4.1
                  l0.7-0.2c1.5,0.4,2.6,1.5,4.2,1.7c0.3,0.4,1,0.7,1.5,0.8c0.8-0.6,1.1-1.8,2.1-2.3c1.9-0.6,4.3-1.3,6.2-0.9c0.6-0.5,1-1.5,1.4-2.2
                  c0.8-0.8,1.9-0.1,2.9-0.3c0.7-0.1,1.2-0.7,2-0.5v0.8c-0.4,0.4-0.7,1-0.9,1.5c0.2,0.7,0.3,1.4,0.7,2c1.1-0.3,3.2-3.4,3.6-4.4
                  c2.2,0.5,2.1,2.8,3.7,3.8c0.6-0.3,1.4-0.5,2.1-0.4c0.7,0.4,1,1.2,1.5,1.7l0.7,0.1c1.4-1.4,2.1-2.6,2.4-4.6l0.6-0.5
                  c0.8-0.4,2.4,0.5,3.5-0.3c-2.1,1.9-1.3,1.8-1.6,4.1c-0.5,1-1.5,1.9-1.5,3.1l0.6,0.5c1.9-0.7,3.3-1.1,5.3-1.3c2,1.1,2.4,3.5,3.4,4
                  c0.9,0.2,2-0.3,2.8-0.4l0.7,0.4c0.3,0.7,0.2,1.5,0.8,2l0.7-0.3c1.1-1.5,0.1-3.5,1.1-5c0.3-0.3,0.8-0.5,1.2-0.7
                  c3.3,1.6,1.9,1.8,6.1,2.8c1.4,0.9,0.8,4.4,2.1,5.4c1.1,0.6,2.9-0.4,4-0.9c0.3-0.4,0.6-1.1,0.6-1.6c2.3-0.3,2.9-2.2,4.5-3.6
                  c0.5-0.4,1.2-0.8,1.7-1.2l0.8,0.1l-0.5,1.8l0.4,0.6c1.4,0.4,2.6,0.4,4,1.1l0.5-0.8l0.6-0.2c1.7,0.7,3.3-0.4,5-0.2
                  c1.6,0.2,1.6,1.2,2.8,1.6c1.8-0.3,4.3-3.5,6.3-2.6c0.9,2.1-2.4,2.1-1.1,6.4c0.2,0.6,0.4,1.3,0.9,1.7c2.7,2.2,4.8-1.4,7.2-1.9
                  c2.3-0.4,1.9,1.9,5.8,0.2c0.1-0.1,0.6-0.3,0.7-0.4c1.2-1,0.4-3.3,0.7-4.7l0.6-0.5l0.9,0.4c0.4,1.3,2.2,4.5,1.8,5.5
                  c-0.4,0.5-1.3,0.5-1.9,0.8l-0.5,0.7c0.3,0.5,1.6,1.6,2.2,1.9c0.5,0.3,1.2,0.9,1.8,1c2.4,0.6,9.3-3.4,11.9-3.1
                  c2.3,0.2,8.2,3.8,9.8,5.4c0.7,0.7,1.2,1.6,2.1,2.3l0.6-0.2c0.3-0.5,0.6-1.1,0.9-1.7l0.6-0.2c0.4,1.2-0.8,2.6,0.3,3.9
                  c0.4,0.2,1.1,0.2,1.5,0c0.7-0.9,1.2-2,1.9-2.8l0.7-0.1l0.6,0.5c0.2,0.7,0.6,1.5,1.2,1.9l0.7-0.1c0.6-0.8,0.7-1.8,1.1-2.6l0.6-0.4
                  c1.3,0.2,3.5-0.3,3.3-2.1l1.4-0.2l0.5-0.6l0-0.8c-1.6-0.3-4.6-2.3-4.8-4.1c-0.1-0.8,0.3-1.6,0.1-2.4c-0.3-0.3-0.6-0.7-0.9-1.1
                  l0.2-0.9l0.6-0.3c3.2,0.3,1.8,6.4,6.2,7.9c0.6,0.2,1.2,0.5,1.8,0.4c0.4-0.6,1.3-0.8,1.9-0.6l0.6-0.4l0.4-0.9c0-0.4-0.1-1-0.4-1.3
                  c-1.3-0.9-4.8-1.4-5.2-2.8l0.3-0.9l1.3-0.4c1.1,0.2,2.1,0.7,3.2,1c2.6,0.7,6.8,0.6,9.6,0.4c1.3-0.1,2.9-0.7,4.2-0.6
                  c1.9,0.1,3.9,1.3,5.7,1.8c2.3,0.7,3.7,0.6,5.9,0.4c0.6,0,1.5,0.1,2.1,0c1.9-0.5,3.9-3.5,4.5-5.2c0.6-1.8-0.1-2.4-0.3-3.9
                  c-0.1-1,0.4-2.2,0-3.2c-0.3-0.8-1.2-1.2-1.9-1.6l0-0.8c0.4-0.2,0.8-0.4,1.3-0.5l0.5-0.8c0-1.8-0.4-3.7,0-5.5l0.6-0.5
                  c0.4,2-0.4,5.1,0.8,6.7l0.9,0.4l0.4,0.7c-0.3,0.4-0.8,0.8-1.1,1.2c-1,1.6,0.5,3.6,0.6,5.2c0.1,1-0.5,1.7-0.6,2.6
                  c-0.1,0.9,0.5,1.4-0.1,2.4c1.5-0.5,3.2,0.1,4.9-0.5c0.4-0.2,1.1-0.1,1.4,0l0.5-0.7c-0.1-0.9,0.2-3.3,1-3.9l0.8,0.3
                  c0.8,1,0.6,2.4,1.2,3.5l0.7,0.5c1.2-0.1,2.3-0.8,3.1-1.7c-0.3-0.7-1.4-1-2.1-1.2l-0.5-0.6l0.2-0.8c0.4-0.4,0.8-0.8,1.1-1.2
                  c-0.4-0.7-1.4-1-2.1-1.2l0-0.8"/>
                </path>
              </g>
              <g id="eastern" data-toggle="modal" data-target="#myModal" >
                <title>Eastern Health</title>
                <desc>
              <p>
                <b>Healthy Activity</b><br>
                <a target="_blank" href="http://www.hc-sc.gc.ca/fn-an/alt_formats/pdf/food-guide-aliment/educ-comm/toolkit-trousse/poster-affiche-eng.pdf">Healthy Living Poster</a><br>
                <a target="_blank" href="http://www.csep.ca/CMFiles/publications/GAQ_CSEPPATHReadinessForm_2pages.pdf">Getting Active Questionaire</a><br><br>
                <b>Smoking Cessation</b><br>
                <a target="_blank" href="http://www.hc-sc.gc.ca/hc-ps/tobac-tabac/quit-cesser/fact-fait/stages-etapes-eng.php/">Five Stages of Quitting<br>
                <a target="_blank" href="https://www.canada.ca/content/dam/canada/health-canada/migration/healthy-canadians/publications/healthy-living-vie-saine/fni-tobacco-strat-2012-2017-pni-strat-tabagisme/alt/fni-tobacco-strat-2012-2017-pni-strat-tabagisme-eng.pdf">First Nations Federal Tobacco Control Strategy</a><br><br>
                <b>Healthy Eating</b><br>
                <a target="_blank" href="https://www.canada.ca/en/health-canada/services/canada-food-guides.html">Canada's Food Guides</a><br>
                <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-lets-eat-healthy-canada/infographic-lets-eat-healthy-canada.pdf">Let’s Eat Healthy Facts Poster</a><br>
                <a target="_blank" href="http://www.statcan.gc.ca/pub/82-625-x/2017001/article/14764-eng.htm">Fruit and Vegetable consumption 2015</a><br>
                <a target="_blank" href="https://www.canada.ca/content/dam/hc-sc/documents/services/publications/food-nutrition/infographic-marketing-to-kids/infographic-marketing-to-kids.pdf">Marketing Unhealthy Foods - Health Canada</a><br><br>
                <b>Diabetes Management</b><br>
                <a target="_blank" href="http://guidelines.diabetes.ca/CDACPG_resources/Vascular_Protection_Risk_Assessment_FINAL.pdf">Recommendations for Vascular Protection</a><br><br>
                <b>Nutrition</b><br>
                <a target="_blank" href="SeabirdIslandMobileDiabetesTeamHealthyPlate.pdf">Seabird Island Mobile Diabetes Team Healthy Plate</a><br>
                <a target="_blank" href="TraditionalFoodsFactSheetsupdated.pdf">Traditional Foods Fact Sheets</a><br>
                <a target="_blank" href="TreefOfLifeFoodGuideCycleOfLife.pdf">Tree of Life Food Guide Cycle of Life</a><br>
              </p>
              </desc>
                <path class="eastern" d="M1307.7,1876.2l-0.3,0.9c0.5,0.7,1.6,0.9,2.3,1.3c0.5,0.9-0.2,2.1,0.4,3
                  l0.7,0.2c1.4-1.7,2.4-5.9,4.9-7.4c1.5-0.9,4.6,0.9,7.2,0.2c0.9-0.2,5.9-4.5,7-5.4c3.1-2.5,3.7-5,8.3-5.3c0.9-0.1,1.8,0.1,2.3,0.9
                  c-0.9,3.5-6.5,9.4-6.9,11.6c-0.4,2.7,3.1,4.1,4.7,2.5l-0.4-0.6l-0.8-0.3l-0.5-0.6c-0.1-0.5,0-1.2,0.2-1.6c0.8-0.6,1.8-0.7,2.5-1.4
                  c1.5-1.6,0.8-4,2.4-5.5c0.7,0.2,1.6-0.2,1.9-0.8c0-1.3-0.3-2.8,0.2-3.9c0.5-1.1,1.9-2.1,2.7-2.9c1.2-1.2,2-2.7,3.2-3.9
                  c1.7-1.8,5.8-5,8.3-3.6l0.2,0.8c-1.1,1.1-2.6,1-3.6,2.4l-0.1,0.8c0.7,0.8,2,0.6,3,0.8l0.7,0.7l0.2,0.7c-0.5,1.8-4,3-5.2,4.3
                  c-0.8,0.9-0.9,2.4-1.9,3.2c-0.4-0.1-1.1,0-1.4,0.2c-0.7,0.9-1,2.3-1.7,3.3l0.8,0.3c1.3-0.8,4-3.1,5.5-3.2c0.4,0.3,0.8,0.7,1.1,1.1
                  l0.6-0.2c0.6-0.7,0.9-1.5,1-2.4c0.7-2.3,3.9-9.2,4-10.6c1.2,2.9,1.9,3.8-0.3,6.7l0.2,0.7c1.3-0.3,2-1.4,3-2.2l0.7-0.1l0.1,0.7
                  c-0.6,1.2-1.4,1.9-2.1,3c-0.4,0.7-1,3.9-1.3,5c-0.5,1.6-2.1,2.8-3.1,4.1l0.7-0.1c0.4-0.9,1-1.1,1.6-1.7c1-1,2-1.9,2.8-3.1
                  c0.7-1,1-2.3,1.9-3.2c0.4,0.2,0.8,0.8,0.8,1.3l0.7,0c0.6-0.5,2.5-7.1,2.8-8.3l0.7-0.1l0.8,0.4l0.6-0.4c0.9-1.9-0.3-2.3,1.4-4.9
                  c0-1.8-1.1-4.2-0.6-5.9c0.5-1.7,2.6-2.2,2.9-4c0.1-0.4,0-0.9,0-1.4l-0.3,0l0.1-0.8l0.5-0.6l0.7-0.2c1.9,0.6,3.1,2.1,6.2,2
                  c0.4-0.2,0.8-0.5,1.3-0.6l0.7,0.5c0,0.5,0.1,1.1,0.2,1.6c0.5,0.2,1,0.4,1.5,0.5c3.5,2.4-0.1,5.6,0.1,7.5l0.5,0.7
                  c0.4,0.1,1,0,1.4-0.2c0.4-0.7,1.1-1,1.8-1.4c1.1,1.3-0.9,3.1,2.2,4.6c0.4,0.2,1,0.4,1.5,0.2c0.6-0.6,1-4.7,2.2-6.6
                  c0.5-0.2,0.9-0.4,1.3-0.7c0.2-0.6,0.6-1.1,0.9-1.6l1.4-0.2c0.6-0.5,1.3-1.2,1.4-2c0.1-0.4-0.3-1-0.3-1.4c-0.1-1.5,0.9-3.7,2.4-4
                  c1.6,0.8,4-0.5,4.1-2.3c0-0.7-0.3-1.5-0.4-2.2c0.5-1.8,1.4-2.8,1.4-4.9l0.5-0.6l0.7-0.2l0.5,0.6c-1.1,4.6,2,3.4,4.2,5.4
                  c1.2,1.1,0,3.2,0.5,4.5c0.9,2.1,4.5,2.5,3.9,5.6c-0.3,1.4-1.8,2.2-2.4,3.5l0.1,0.8c0.6,0.9,1.5,1.5,1.3,2.7
                  c-0.4,0.9-2.2,1.7-3.2,1.6c-1.2,0.7-1,1.7-1.2,2.8c-0.3,1.2-1,2.3-1.2,3.5c-0.6,3,0.8,4.9-0.7,7.9c-0.9,1.7-3.7,5.5-5.2,6.7
                  c-1.3,1-3.9,1-4.1,2.7c-0.6,0.4-1.3,0.6-1.9,0.8c-0.8,0.6-0.7,2.1-0.8,3c-2.4,4.5-8.2-3.8-9-4.1c-0.7,0.2-1.7-0.1-2.3-0.5
                  c-0.4,0-1,0.2-1.3,0.5c-0.3,0.5-0.5,1.1-0.5,1.7l-0.7,0.2c-0.8-0.5-0.9-1.8-1.6-2.5c-0.4,0.1-0.9,0.3-1.2,0.6
                  c0.3,0.4,0.5,0.9,0.6,1.3l-0.2,0.8l0.7,0.5l0.2,0.7c-1.1,1.4-2.3,2.9-3,4.6c-0.3,0.8,0,1.6-0.4,2.4c-0.3,0.6-0.7,0.8-0.8,1.6
                  l0.3,0.7c0.4,0.2,1.1,0.6,1.3,1c0.2,0.7,0,1.8-0.6,2.3l-0.7,0.2c-0.6-0.2-1.1-0.4-1.6-0.7c-1.2,0.3-2.6-0.5-3.7-0.1
                  c-1.2,0.4-2.2,3.2-3,4.3c-1.8,2.2-4.4,2.1-6.2,3.2c-0.9,0.6-1.9,3.4-3.5,4c-2.6,1.8-1.9,4-6.7,5.9c-2,0.8-2.7,0.9-4.7-0.5
                  c-1.6-1.1-3.5-3.5-5.3-4.1c-2.5-0.8-6.6,2.7-9.1,1c-2.7-1.9-0.4-5.9-8-6.5l-0.6,0.4c-0.1,1,0.3,2,0.2,3c-0.1,2.1-1.2,5.8-0.4,7.8
                  c1,2.4,2.6,4,2.9,6.7c0.1,1.4-0.7,2.6-0.6,4c0.8,1.5,3.6,1,4.9,1.1c1.3,0.1,2.7,0.8,4,1c0.9,0.1,4.8,0.2,5.7,0.1
                  c2-0.2,10.4-2.4,9.3,2.2c-1.5,2.1-3.1,2.7-5.5,3c-3.6,3.2-9.3,2.8-13.7,2c-1.1-0.2-2.3-0.4-3.1-1.2c-0.7-0.1-1.4,0-2.1,0.3l-0.1,0.8
                  c0.8,1.7,4.4,2.2,6.1,2.4c2.1,0.3,5.8,2.3,6.9,2.2c1.5,0,2.4-1.5,3.7-2.1c1.5-0.7,4.4-0.3,5.4-1c2.5-1.6,5-4.3,7.8-5.3l0.2,0.7
                  c-0.3,0.9-1.1,1.7-1.2,2.6c-0.1,0.5,0.1,1.3,0.1,1.8c0,4-0.7,4.1-3,7.1c-0.1,0.8,0.2,1.6-0.1,2.4c-0.6,0.5-1.2,1-1.7,1.7
                  c-0.1,0.7,0,1.7-0.1,2.4c-0.1,0.7-2.2,4.6-2.7,4.9c-1.2,0.2-2-0.9-2.9-1.5c-1.9,0-1.9,1.2-5.6,0.8l0,0.7c1.9,0.6,3.5,1,5.4,1.3
                  l0.6,0.6c0.2,0.8-0.5,1.8-1,2.5l0.2,0.7c0.6,0.4,1.1,1.2,1,2c-0.1,0.9-6,11.4-6.8,12.2c-2.9-0.1-6.3-15.9-12.7-13.1l-0.2,0.9
                  c0.1,0.4,0.4,0.9,0.7,1.2c3.1,0.9,5,1.6,4.8,5.2c3,2,1.2,3.6,1.8,6.3c0.3,1.3,1.6,1.9,2,3.1c0.3,1.2,0.1,2.6,0.3,3.8
                  c-0.9,0.7-1.9,0.1-2.7,0.6v0.7c0.9,1.2,2.2,1.7,3,2.8c0.6,0.8,0.5,1.9,1.2,2.7c0.8,1,2.3,1.8,3,2.8c0.5,0.7,0.5,2,0.7,2.7
                  c0.5,1.5,1.5,2.4,1.2,4.2l0.9,0.3c2.2-0.7,2.2-4.4,3.1-5.9c0.5-0.9,1-1.4,1.2-2.4c0.4-1.3,0.3-2.2,1-3.4l0.6-0.4l0.8,0.3
                  c0.4,0.6,0.9,1.2,1.4,1.8c0.5,3.8-6.2,9.6-4.1,12.9l0.9,0.4c0.7-0.3,1.3-1,1.7-1.6l0.7-0.2l0.4,0.6c-0.1,1.1,0,2,0.1,3.1l0.9,0.4
                  l0.5-0.7l0.7-0.2l0.7,0.5c0.2,1-1.1,2.7-1.5,3.6c-0.6,1.2-0.8,2.8-1.1,4.2l0.7,0c1.5-1.1,2.6-3.4,3.3-5.1l0.6-0.2
                  c0.6,0.8,0.6,1.8,1.1,2.7l0.8,0.3c0.4-0.5,1.2-0.9,1.8-0.8c1.1,0.5,1.3,1.8,2.6,2l0.5-0.8c0-0.8,0.3-1.6,0.3-2.4
                  c-0.1-1.3-1.2-2.1-1.7-3.2c-0.1-0.5,0.2-1.2,0.5-1.6c0.7-0.2,1.5-0.4,1.8-1.1c-0.5-1.9-3.4-3.3-2.2-5.4c0.4-0.3,0.8-0.6,1.2-0.9
                  l0.7-0.1c1.2,0.5,1,1.6,1.6,2.5l0.7,0c0.2-0.7-0.1-1.5-0.5-2.1c0-0.8,0.6-1.5,1.3-2c0.3-1.1-0.7-2.5-1-3.6c0.6-0.4,1.2-0.2,1.9-0.8
                  c3.3-3,1.5-3.3,0.4-5.3c-0.4-0.8-0.6-4.4-0.2-5.3c0.7-2,2.6-2.5,3.8-4.1c0.4-1.7-0.8-1.6-1-2.7c-0.1-1,0.3-2.2,0.5-3.2l0.6-0.6
                  l0.7,0.1l0.6-0.2c0.5-1.1-0.2-2.1,0.1-3.1c0.1-0.5,3.5-5.8,3.9-6.2c0.3-0.3,0.9-0.5,1.3-0.4c0.8,0.3,1.4,1,2.1,1.6l0.7-0.1
                  c-0.1-1.4-0.8-2.9-1.1-4.3c0.5-0.7,1.2-1,1.7-1.6c0.4-0.4,2.4-6.1,2.5-6.8c1.8-4.1,1.2-5.5,4.7-9.6c1.3-0.4,1.4-0.5,2.8-0.3
                  c1.6-0.6,1.5-2.4,4-3.2c0.5,0.1,1.1,0.3,1.6,0.6c1.6-1,1.1-5.5,3.7-5.1c1.7,0.9,2.1,2.9,3.4,4.1l0.8,0.2c0.5-0.1,2.4-1.4,3-1.8
                  c0.5,0.1,1,0.1,1.5,0c1.7-1.4,1.3-1.9,2.4-3.5c0.5-0.8,2.1-0.6,3-2c0.2-0.3,3-5.9,3.1-6.2c0.4-1,0.2-2.2,0.7-3.2
                  c0.7-1.2,1.9-2.1,2.8-3.2c0.2-0.1,0.5,0,0.7,0.1c3.8,1.2,3.4,5,5.4,7.3c0.9,1,2.4,1.7,2.9,2.9l-0.1,0.7c-0.9,1-1.6,0.6-2.6,1.1
                  c-0.2,0.4-0.7,0.9-1.1,1.1c-0.8,0-1.7-0.9-2.5-1.2c-1.2,0.2-1.4,0.4-2.2,1.3c-1.6,1.9-0.5,2.1-1,3.5c-0.4,1.3-2.2,1.7-2.2,3.2
                  c-0.1,1.9,1.5,2.2,0.2,4.6c-2.3,4.3-5.9,7.6-8.8,11.5c-0.3,0.4-0.9,0.8-1.1,1.3c-0.1,0.2-0.2,0.9-0.2,1.1c0,1.1-0.2,5.7-0.2,5.9
                  l0.6,0.6l0.2,0.7c-0.4,1.2-2,2.1-2.6,3.4c-0.7,1.3-0.5,3-1.3,4.3c-1,1.5-3.1,1.7-4,3.5c-1.2,2.5-0.8,5.2-3.1,7.2
                  c-1,0.9-3.2,0.9-3.2,2.7l0.3,0.7c1,0.4,2.1,0.4,3.1,0.8l0.5,0.6c-0.3,1.2-2.1,3-2.1,3.8c0.6-0.3,1.4-0.4,2-0.4l0.6,0.5
                  c-0.1,1.2-1.2,2.1-1.7,3.2c-0.3,0.8-0.1,1.7-0.4,2.4c-0.6,1.4-6.2,5-7.7,5.4c-0.4,0.3-0.7,1-0.7,1.5c4.2,1.9,3.6-1.2,5.3-1.2
                  l0.4,0.6c-0.2,1.8-3.2,2.8-4.4,3.8l-0.2,0.8l0.6,0.6c2.2,0.6,5.7-4.2,7.3-4.1l0.1,0.8c-1,2.8-9.3,4.8-8.7,7.8
                  c1.8,2.4,5.9-1.3,7.2-1.2c0.8,0.9,0.4,7.2-0.1,8.5c-0.5,1.5-1.7,2.6-1.9,4.3l0.8,0.2c2.3-1.6,2.2-3.9,3.5-4.9l0.7,0.5
                  c0.1,0.7,0,1.4,0,2.1c0.2,5.6-3.5,3.7-4.5,6.9l0.2,0.7l0.7,0.5c2.2,0.5,2.8-2.5,4.2-2.7c0.6,0.9,1.3,1.7,2.1,2.4
                  c0.1,0.8-0.4,1.8-0.7,2.6l0.2,0.7c1.3-0.4,3.6-6.6,5-8c1.4-1.4,2.9-2.5,4.3-3.8c0.7-0.6,1-1.3,1.6-1.9c1.1-1.2,2.7-2.3,4-3.2
                  c1.8-1.3,4.6-2.2,6-3.9c0.3-0.4,0.5-0.9,0.8-1.3c1.2-1.9,1.8-4.5,2.8-6.6c0.7-1.4,1.7-2.6,2.2-4c1.3-3.6,0.1-5.4,0.5-8.6
                  c0.5-3.3,2.1-6.3,3-9.4c0.6-2.1,0.4-4.5,1.2-6.6c0.4-0.9,0.8-1.5,1.6-2l0.8,0.5c2.2,8.2,4.1,4.5,6.3,6.9c0.7,0.8,0.8,8.7,0.5,9.8
                  c-0.4,1.2-1.2,2.3-1.5,3.5l0.5,0.6c0.8,0.2,1.7,0.3,2.2,0.9l0.7,0c0.4-0.2,0.8-0.5,1.2-0.8l0.6,0.5c0.1,0.3,1,7.4,1,7.7
                  c0,0.2,0.1,1.1,0.1,1.2c-0.1,0.4-0.4,1.3-0.5,1.7c-0.8,1.8-3.7,3.4-3.5,5.6l0.7,0.2l0.6-0.6c0,0.5,0,1,0,1.6
                  c1.5,1.3,2.7,2.8,4.9,2.9l0.6,0.5c0.5,0.8-0.6,4.9-1.4,5.5c-1.6-0.5-2,1.4-2.9,2.2c-0.5,0.5-1.3,0.6-1.9,0.8l-0.5,0.6
                  c0.3,1.2,3.3,3,3.6,4.2c0.3,1.3-3.4,4.1-4.4,5.2c-1.7,2-3,10.8-4.4,13.5c-1.6,0.2-3.3-0.4-4.7,0.5l-0.4,0.9l0.6,0.6c1,0,2,0.3,3,0.5
                  l-0.2,0.8c-1.3,1-4.4,1.4-4.6,3.1c0.2,1.1,1.3,2.4,1.2,3.4l-0.5,0.6c-0.5-0.1-1.1-0.3-1.6-0.5c-0.1,1,0.2,2,0,3
                  c-0.3,1.2-1,2.3-1.2,3.5c-0.4,2,0.7,3.6-1.5,5.1c-0.4,0.7-0.1,1.5,0.4,2.2c-0.3,2.5-0.8,2.2-1.4,4.1c-0.4,1.3-0.3,2.8-0.7,4.1
                  c-0.6,0.8-5.1,1.6-5.9,1.4l-0.6,0.4c0.5,0.3,0.8,0.7,1.3,1.1c2.1,1.6,4.4,1.4,6.8,1.8l0.4,0.6c0.1,0.5-0.2,1.3-0.5,1.7l-0.6,0.1
                  l-0.8-0.4l-0.7,0.1l-0.2,0.8c0.1,0.3,1.7,3.5,2,3.9c-0.8,0.5-1.5,1.3-2.3,1.8c-0.3,0.2-1,0.3-1.2,0.6c-0.4,0.3-0.7,1.1-0.6,1.6
                  c0.3,1,1.4,1.4,1.6,2.5l-0.5,0.8c-0.4,0.2-0.9,0.3-1.4,0.4l-0.5,0.5c1.4,1.4,2.2,1.7,1.9,4c-0.3,2.3-1.8,2.7-2.4,4.5
                  c-0.4,1.2-0.2,2.8-0.4,4c-0.4,2.3-1.5,4.5-1.9,6.8c-0.1,0.8,0.1,1.5,0.1,2.3c0,1.8-0.3,3.7-0.5,5.5c-0.6,0.7-1.7,1-2.4,1.7
                  c-0.5,2-0.2,3.7-3,3.3c-0.6,0.2-1,0.8-1.4,1.3c-0.4,0.5-0.9,0.8-1.2,1.3c-1.1,1.8-1.1,4.2-1.9,6.1c-0.8,2-3.1,6.8-4.4,8.4
                  c-1.2,1.4-1.7,1-3,1.6c-1.1,0.5-2.5,1.6-3.6,1.9c-3.2,0.8-6.5-3.6-7.5-6.1c-0.8-2.1-1-2.7-1.2-4.9c0-0.4-0.1-0.9-0.3-1.2
                  c-0.4-0.7-1.2-1-1.6-1.7c-0.4-1,1-2.1,0.6-3.3l-0.7,0.1l-1.6,1.8c-1,1.2-2.1,4.5-3.4,5c-1.4-0.9-0.8-2.8-1.6-4l-0.8-0.2
                  c-0.8,1.5-2.2,3.9-3.4,5.2c0-0.2,0.3-2.3,0.4-2.4c0.5-1.1,1.4-2.2,1.9-3.4c0.2-0.6,0.2-1.2,0.4-1.7c0.1-0.3,0.3-0.5,0.5-0.8
                  l-0.7-0.1c-1.4,1.3-2.2,3.1-3.6,4.4c-1.9,1.4-3.3,5.2-4.9,7.1c-1.1,1.3-2.7,2-4,3.1c-1.3,1.2-2.3,2.8-3.7,4c-1,0.1-1.7-0.3-2.7,0.2
                  c-0.5-0.1-1.2-0.4-1.5-0.7c-0.5-0.5-0.9-1.3-1.4-1.8c-0.8-0.8-2-1-2.5-2.2c-0.3-0.7-0.1-1.5-0.2-2.2c-0.2-1.2-1.1-2.2-1.4-3.3
                  c-0.2-0.8-0.1-1.7-0.3-2.4c-0.2-0.5-0.6-1.4-0.6-1.8c0.2-1.7,3-3.5,3.7-5.7c1-2.9-0.7-4.8-0.4-6.7c0-0.2,0.6-1.5,0.7-1.7
                  c0.5-1,1.3-2,1.9-3c1.1-2,1.7-4.3,2.6-6.3c0.3-0.6,0.9-1.5,1.6-1.7c0.4-0.1,1,0.1,1.4,0c1.4-0.2,3.7-1.6,3.7-3.2l-0.6,0
                  c-1,1.2-3.5,0.5-5.1,1.9c-2.5,2.2-3.4,6.2-4.9,9c-1,1.8-2.4,3.2-3.5,4.9c-0.3,0.2-1,0.2-1.4,0c-1.4-3,3.5-10.9,4.4-14.1
                  c0.3-1.1-0.2-2.2,0.2-3.1c0.2-0.4,0.6-1.1,1-1.3c0.7,0.1,1.4,0.2,2.2,0.2c0.5-0.2,3.4-3.3,3.9-3.9c0.4-0.5,0.9-1.8,1-2.4l-0.8-0.4
                  c-1.3,0.9-1.2,2.5-3.3,3.3l-0.7-0.2l-0.4-0.6c-0.2-1.2,1-1.6,0.1-4.7l-0.1-0.8c-1,0.5-1.7,4.5-3.2,5.4l-0.9-0.4
                  c-0.2-2.6,0.1-4.6,0.7-7.1l-0.5-0.7l-0.7,0.1c-0.7,0.7-1.2,1.9-2.1,2.3l-0.5-0.6c0.6-1.4,0.8-3,1.4-4.3c0.9-2.1,5.3-6.6,5.6-8.3
                  l-0.1-0.7c-0.4-0.2-0.9-0.7-1-1.2c0-0.8,3-4.7,3.8-5.2c0.2-0.1,0.5-0.2,0.7-0.2c1.2-0.3,2-0.8,3.2-1.2l0.2-0.9
                  c-0.9-0.4-2.1,0-2.6-1.1c0-0.8,0.4-4.1,0.1-4.6l-0.7-0.2c-0.3,0.5-0.6,1.2-0.7,1.8c-0.7,0.5-1.6,1.4-2.5,1l-0.7-0.6
                  c-0.8-2,2.3-4.6,1.3-7.3c-0.7,2.5-2.1,4.7-3,7.1c-0.5,1.3-0.3,3.1-0.9,4.2c-0.2,0.4-3.6,4-3.7,4.1l-0.6-0.6c0.1-1.1,1.1-6.6,1.5-7.4
                  c-0.5,0.5-1.9,1.6-2.2,2.1c-0.2,0.5-1.6,6.9-2.1,8.4l-0.6,0.2c-0.4-0.2-1.1-0.2-1.5,0c-0.8,1.3,0.6,2.2,0.1,3.7
                  c-0.5,1.2-3.9,3.4-5.1,4.1l-0.4-0.6l-0.7,0.1c-2.2,3.4-3.5,9.7-6,12.4c-0.9,1-2.5,1.1-3.6,2c-0.1,0.8,0.2,1.6-0.1,2.4
                  c-1.4,4-6.1,5.4-7,7.2c-0.5,1,0.1,2.2-0.9,3.2c-1.4,1.5-4.7,1.7-6.2,3.2l-0.3,0.4c-0.4,0.5-0.5,1.2-0.9,1.8
                  c-0.3,0.4-0.8,0.7-1.1,1.1c-0.6,0.7-0.7,1.7-1.2,2.4c-0.5-0.2-1.2-0.6-1.4-1.1c-0.9-0.3-1.9-0.3-2.7,0.4l-0.7,0
                  c-2-1.7-4.2-3.8-7-2.5l-0.8-0.4c-0.6-1.4,0.1-1.9,0-3c0-0.7-0.5-1.4-0.6-2.1c-0.2-1.2-0.2-2.6-0.2-3.8c0-2.2,1.2-3.9,1.7-5.9
                  c0.2-1.1-0.3-2-0.1-3.1c0.2-1.2,1-2.2,1.4-3.4c0.3-1.1,0.1-2.2,0.5-3.3c0.8-2.4,2.7-4,3.7-6.2c0.7-1.4,0.8-2.9,1.6-4.5l0.3-0.6
                  c0.5-1.7,0.3-3.4,2-4.7c0.5-1.4,0.4-2.7,0.7-4.1c0.4-1.6,0.8-3.4,1.3-5c0.7-2.6,4.4-9.1,4.5-10.7c0-0.5-0.1-1-0.1-1.5l0.5-0.8
                  c3.6-0.9,5,1.8,6.5,2.1l0.6-0.5c0.1-0.3,0.1-0.7,0-1c-0.1-0.2-0.1-0.5-0.2-0.7c-1.4-2.3-4.1-2.5-5.3-4.1c-0.6-0.8-1-6.4-0.7-7.4
                  c0.2-0.8,0.9-1.3,1.7-1.4l0.9,0.5l0.1,0.8c-0.3,0.5-0.5,1.1-0.6,1.6l0.4,0.6c1.3-1.5,3.1-0.4,4.6-1.2l0.4-0.9l-0.2-0.8l-0.6-0.5
                  c0.5-1.3,4.1-3.3,4.8-5.4l-0.1-0.8c-0.6,0.3-3.5,1.1-4,1c0.2-0.8,0.2-2.7,0.4-3.2c0.3-0.6,1.2-1.2,1.6-1.7c1.2-1.3,2.5-2.6,4-3.5
                  c1.5-0.9,3.8-1.4,4.8-2.8c-1.2,0.1-2.4,0.4-3.6,0.3l-0.6-0.5c-0.2-0.4-0.2-1.1-0.1-1.5l-0.5-0.6c-1.1,0-3,3.1-4.9,2.6l-0.4-0.6
                  c0.2-0.5,0.3-1.1,0.2-1.6c-0.4-0.7-1.4-0.9-1.6-1.7l0-0.3c0.1-1.1,1-1.8,1.6-2.6c1.3-1.8,0.2-3.1,0.9-4.8c0.4-0.9,1-1.6,1.4-2.5
                  l-0.1-0.7l-0.7-0.2c-2.3-1.3,0.7-6,0.6-7.9c-0.1-1.2-0.9-2.3-0.9-3.5c0-0.5,0.1-1-0.1-1.5l-0.6-0.5c-0.7,0.2-1.1,0.8-1.8,1.2
                  l-0.8-0.2c-0.1-0.8,0-1.5,0-2.3c-0.5-0.9-0.4-1.2-0.5-2.1c-0.1-1.2-1.3-2-0.9-3.5c0.2-0.9,0.8-1.5,0.6-2.5c-0.4-1-1.8-0.8-2.3-2.3
                  c-0.3-0.9,0.2-1.6,0.3-2.4c0.1-0.7-0.9-3.1-0.9-4.3c0-1.3,0.8-2.6-0.1-3.8l-0.7,0c-0.2,0.3-0.8,0.7-1.2,0.7
                  c-0.7-0.5-0.7-1.3-1.3-1.9c-0.1-0.6,0.1-1,0.1-1.6c0.1-1.3-0.6-2.4-0.6-3.6c0-0.3,0.2-0.8,0.2-1.1c0.1-0.4,0.2-0.9,0-1.3
                  c-0.6,0.1-2,2.7-2.6,3.4c-0.4,0.2-0.9,0.3-1.3,0.4c-3.7-0.9-2.4-2.7-1.3-5.2l-0.2-1.5c-1.3-1.3-1.5-3.1-1.7-4.8
                  c-2.5,2-0.5,4.7-1.7,6.8l-0.6,0.2c-3.6-0.5-5.3-4.3-6.2-7.4c-1.1-1.3-5.7-0.8-7.9-4.3l-0.8-0.2c-1.1,2.6,4.1,4.5,5.8,5.2
                  c1.7,1.4,0.1,6.1-0.2,7.9c-0.5,2.5-0.4,5-1.4,7.4c-0.7,1.7-2,3.3-2.8,5c-0.4,0.9-0.5,1.9-1,2.7c-0.7,1.3-1.7,2.3-2.5,3.5
                  c-1.2,0.6-2.7-0.8-3.6-1.5l-0.8,0l-0.5,0.5c0.1,2.4,2.1,4.4,1.7,7.1c-0.3,2.1-8.8,19.1-10.4,21.5c-0.8,1.2-1.8,1.5-2.9,2.3l0,0.8
                  c0.2,0.4,0.9,0.8,1.3,0.9c0.1-0.5,0.4-1.2,0.8-1.6l0.6,0.5c0.7,1.7,0.5,5.3,2.7,5.9c-1.4,1.3-2.1,3.3-3.6,4.6l-0.7,0
                  c-0.3-0.3-0.4-1.1-0.3-1.5c0.8-1,1.5-2.8,0.6-3.9l-0.7,0c-0.6,0.6-4.8,8.1-4.9,8.8l0.3,0.7l0.7-0.1c0.4-0.5,1-1.4,1.6-1.6l0.5,0.6
                  c-0.8,1.6-2.3,2-3.2,3.5c-0.3,0.5-0.5,1-1.1,1.3l-0.8-0.5c-0.3-0.3-0.4-1-0.3-1.4l-0.7,0c-0.4,0.4-0.7,0.9-1,1.3
                  c-1.2,1.4-2.9,2-3.8,3.8c-0.4,0.2-0.9,0.4-1.3,0.4c-1.7-1.8-1.2-4.1,0.4-5.8c0.4,0.1,1.1,0,1.4-0.2c0.9-1.3,1.3-2.9,2.1-4.3
                  c0.7-1.3,1.7-2.4,2.5-3.6c1.5-2.2,2.9-5,4.1-7.4c1.4-2.7,1.7-4.8,2.7-7.1c1.5-3.2,3.5-6,4.8-9.3c-0.1-0.4-0.4-1-0.7-1.3
                  c-0.3,0.2-0.9,0.5-1.1,0.8c-1.7,2.1-2.6,5.1-4,7.4c-1.2,1.9-3.9,5.9-4.7,7.7c-0.5,1.2-0.6,2.4-1.1,3.6c-1.1,2.7-5.9,10.9-8.1,12.7
                  c-1.4,1.1-2.4,0-3.5,0.2c-0.4,0.8-0.3,1.6-0.5,2.4l-0.7,0c-0.6-1.2-0.5-2.4-0.7-3.7l-0.7,0.1c-0.7,0.5-2.3,2.5-2.2,3.3
                  c0.2,0.4,0.7,1,1.2,1.2l0.2,0.7c-0.4,0.8-2.2,1.6-3.1,1.6l-0.6-0.7c-0.2-0.7,0.1-1.7,0.2-2.4l-0.8-0.2c-0.3,0.7-0.4,1.7-1.1,2.2
                  c-0.8,0.1-1.7-0.4-2.1-1c0.1-0.5,0.1-1,0.2-1.6l-0.7,0c-1.1,0.6-1.9,1.5-3,2l-0.7-0.1l-0.1-0.8c0.4-0.7,1.1-1.2,1.6-1.8
                  c0.7-1.1,1.8-4.6,1.5-5.8l-0.8-0.3c-2.6,2.1-1.3,5.1-3.2,7.1l-0.7,0.2l-0.6-0.5c0-2.7,1.5-4.4,1.9-6.8l-0.7,0.1
                  c-0.7,0.6-0.5,1.6-0.9,2.4c-0.2,0.4-0.8,0.8-1,1.3c-0.6,1.1-0.8,2.5-1.4,3.6c-0.1,0.2-0.4,0.5-0.6,0.8c-1.3,3.2-4.5,5-4.7,5.5
                  c0,1.1-0.2,4.1-1.1,4.7c-0.4,0-0.9,0.1-1.3,0.3c-0.8,0.7-0.9,2.4-2,2.7l-0.4-0.6l-0.7-0.2c-1.5,2.5-2.4,5.5-4.3,7.8
                  c-0.7,0.9-1.9,1.5-1.9,2.8c0.1,1.4,3.7,2.8,3.6,5.7c-0.1,0.4-0.6,1-1,1.1c-0.5,0-0.9,0-1.4,0.1c-0.6,1.1-1.8,3.4-3.2,3.4l-0.5-0.5
                  c-0.1-2,0.6-5.6,0.3-7.1c-0.3-0.4-0.9-0.7-1.4-0.7c-2.8,0.9-3.3,3-4.7,5.3l0.6,0.5c1.2,0.1,2-0.6,3.5-0.2l0.3,0.4
                  c1,1.1-0.3,5.5,0.2,7.1c0.3,1.1,1.6,1.6,1.9,2.5c0,0.8-0.2,1.7-0.4,2.5l-0.6,0.5c-0.7-0.1-1.5-0.3-2.2-0.2l-0.6,0.4
                  c-0.1,1,1,1.7,0.9,2.8c-0.6,1.9-3.2,1.2-4.2,2.2c-0.7,1.4-0.4,4.8-1.4,5.6l-0.8-0.3c-0.2-0.8-1.2-0.9-1.4-1.7
                  c0.3-2.2,0.5-4.4,0.8-6.6c-0.4-0.7-1.5-1-2.2-1.2l-0.6,0.4c-0.4,2.3-0.2,2.4,0.4,4.6c0.2,0.9,0.2,2,0.2,2.9c0.4,4.6,0.2,7-3.6,10.2
                  c-0.2,1.1,0.7,2,0.4,3c-0.3,1-0.9,1.3-1.5,2c-2.4,2.5-5,4.9-8.4,2.1l-0.7,0l0.4,1.4l-0.6,0.3c-0.8-0.5-1.6-0.9-2.4-1.2l-0.6,0.4
                  c-0.2,1.1,1.4,2.2,1.6,3.4l-0.4,0.8c-0.8,0.4-1.7,0.8-2.4,1.3c-1.4,0.3-2.5-0.5-3.9-0.8c-0.9-0.2-2.1-0.2-3-0.6
                  c-2.9-1.2-1.2-5.9-1.1-8.1c-0.4-0.1-0.9,0-1.3,0.2c-0.7,0.9-1.6,2.3-2.9,2.2c-0.7-0.2-1.4-0.9-1.3-1.7c0.3-0.5,0.5-1.2,0.6-1.8
                  l-0.4-0.6c-2.6,1.7-0.7,5.7-2.2,6.9l-0.6,0.1c-0.6-0.8-0.7-1.8-1-2.7l-0.7,0.1c-2.5,2-3.6,5.2-5,6.3c-0.4,0.3-0.7,0.4-1.1,0.4
                  c-1.8,0-3.2,0.6-4.8,1.2c-1.1-0.2-1.7-1.2-2.4-2l-0.6,0.2c-0.7,0.9-1.3,2.1-1.8,3.1v-0.8c-0.4-0.7-1-1.3-1.8-1.3
                  c-1.3,0-2.7,0.9-4.1,0.5c-2.6-0.6-5-2-7.4-3.1c-2.8-1.3-4.1-1.1-6.8-3.4c-0.3-0.2-1.1-0.8-1.2-1.1c-0.4-0.6-0.4-1.5-0.6-2.2
                  c-0.2-0.4-0.6-0.8-0.7-1.2c-1-2.2,0.3-3.6,0.9-5.6c1.5-4.9,3.2-5.2,5.8-9.1c1.2-1.8,2.5-5.4,4.2-6.6c1.6-1.1,4.1,0.5,5.4-0.8
                  c1.1-1.1,2-3.5,3.7-3.8c0.5-0.1,1,0.1,1.5,0c5-0.6,6.1,2,7.4,1.9c3.6-2.8,7.3-2.1,9.5-3.5c1.5-1,2.8-3,4.7-3.3c1-0.2,2,0.7,2.9,0.3
                  c2-1.8,2.1-4.2,3-6.4c0.4-1,1.6-1,2.4-1.6c1.1-0.7,2-3.6,3-3.9c0.7,0,1.5,0.2,2.1-0.2c0.7-0.5,1.7-2.3,2.5-3
                  c0.7-0.6,1.6-0.6,2.2-1.2c0.1-0.1,0.1-0.1,0.2-0.2c0.5-0.8,0.5-1.8,1.2-2.5c3.8-1.3,2.5-7.2,2.9-10.1c0.3-2.1,1.4-4,1.6-6
                  c0.2-1.5-0.3-3.4,0.2-4.7c0.4-0.9,8-9.7,8.9-10.2c1-0.6,2.3,0,3.4-0.5c1.1-0.5,1.6-2,2.8-2.4c0.9-0.3,2,0.4,3,0.4
                  c1.5,0,3.2-0.7,4.6-1.1c1.8-2.3,2.3-1.3,4.5-1.9c0.9-0.2,1.7-0.5,2.6-0.7l0.4-0.8c-0.2-0.7-0.3-1.5-0.2-2.2c1.9-2.2,3.3-0.4,4.7-0.8
                  c1.2-0.4,1.9-1.8,2.9-2c0.3-0.5,0.6-1.1,0.8-1.7c0.4,0,0.9-0.1,1.3-0.3l0.4-1c-0.3-0.7-0.2-2.3,0-3.1l-0.7,0
                  c-0.8,0.7-0.8,2.2-1.9,2.6l-0.7-0.5c0-0.9,0.8-1.5,1.1-2.3c0.4-0.8,0.4-1.8,0.9-2.6c0.2-0.4,6.2-4.9,6.9-5.3c1.2-0.7,2.6-1,3.9-1.7
                  c1.1-0.7,1.7-1.7,2.7-2.4c0.5-0.1,1-0.1,1.5,0.1c-2.9-1.4-3.5-1.4-6.4,0.2l-0.5-0.6l0.1-1.6c-0.2,0.1-2.4,3.6-3.6,4.6
                  c-0.5,0.4-14,7.5-14.1,7.5c-1.5,0.3-4,0.8-5.5,0.7c-2.3-7.3,7.4-10.7,7.4-10.7c2.4-1.8,3.9-1.5,3.9-1.5l6.3-2.8
                  c6.3-5.8,1.8-14.3,1.8-14.3c-8.5-6.5-1.8-10.8-1.8-10.8c5.5-1.3,12.3-5,12.3-5c6-10,8-22.8,8-22.8c-0.5-3.5-7.5-7-7.5-7l-9-5
                  c-9.3-5.3-7.8-21-7.8-21c-0.3-9.5,5.5-6.8,5.5-6.8c7.8,4.3,21.8,2,21.8,2c5.3,1.8,13-4.5,13-4.5c3.3-1.5,9.8-10.8,9.8-10.8
                  c2.3-3.5,5.5-4.1,5.5-4.1l5.3-3.7l5,3.7L1307.7,1876.2z"/>
                </path>
              </g>
            </svg>
          </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title" id="myModalLabel"></h3>
        </div>
        <div class="modal-body">
          <div id="info"></div>
        </div>
      </div>
      </div>
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
    <script type="text/javascript" src="map.js"></script>
    <script type="text/javascript" src="resize.js"></script>
    </body>
</html>