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
    <style type="text/css">
      #ASSESSED-ARROW{opacity:0; transition:.6s opacity;}
      #ASSESS-OUTCOME{opacity:0; transition:.6s opacity;}
      #ASSESS-NO_1_{opacity:1; transition:.6s opacity;}
      #DETERMINE{opacity:0; transition:.6s opacity;}
      #ASSESS-YES_1_{opacity:1; transition:.6s opacity;}
      #DETERMINE-YES_1_{opacity:0; transition:.6s opacity;}
      #DETERMINE-NO{opacity:0; transition:.6s opacity;}
      #INTERMEDIATE-BOX{opacity:0; transition:.6s opacity;}
      #HIGH-BOX_2_{opacity:0; transition:.6s opacity;}
      #FINAL-OUTCOME{opacity:0; transition:.6s opacity;}
      #HIGHRISK-NOTE{opacity:0; transition:.6s opacity;}
      #DETERMINE-OUTCOME{opacity:0; transition:.6s opacity;}
      #INTERRISK-ARROW2{opacity:0; transition:.6s opacity;}
      #LOWRISK-ARROW2{opacity:0; transition:.6s opacity;}
      #LOWRISK-ARROW1{opacity:0; transition:.6s opacity;}
      #HIGHRISK-ARROW1{opacity:0; transition:.6s opacity;}
      #HIGHRISK-ARROW2{opacity:0; transition:.6s opacity;}
      #INTERRISK-ARROW1{opacity:0; transition:.6s opacity;}
      #INTERRISK-ARROW2{opacity:0; transition:.6s opacity;}
      #INFO{opacity:0; transition:.3s opacity;}
      #LOW-BOX{opacity:0; transition:.6s opacity;}
      .st0{fill:#3CA373;}
      .st1{font-family:'Source Sans Pro';}
      .st2{font-size:1em;}
      .st3{fill:#3CA3A1;}
      .st4{font-size:1em;}
      .st5{fill:#3CA36F;}
      .st6{fill:#7AA33C;}
      .st7{fill:#3C79A3;}
      .st8{fill:#A33C61;}
      .st9{font-family:'Source Sans Pro'; font-size: 12px}
      .invisible{opacity:0; transition:.6s opacity;}
      .outline{opacity:1; transition:.6s opacity;stroke:#5C5C5C;}
      .navbar { margin-bottom: 0}
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
            <li class="active"><a href="tree.php">Decision Tree</a></li>
            <li><a href="links.php">Links</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <center>
    <div class="container-fluid">
      <svg version="1.1" id="decision-tree" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
        y="0px" viewBox="0 20 1000 588.2" width="0%" opacity="0%" style="enable-background:new 0 0 1000 588.2;" xml:space="preserve">
        <path id="ASSESSED-ARROW" d="M355.9,139.1l13.2,29l13.2-29H374v-30.7h-9.7v30.7H355.9z"/>
        <path id="INTERRISK-ARROW2" d="M355.9,464.8l13.2,29l13.2-29H374v-30.7h-9.7v30.7H355.9z"/>
        <path id="LOWRISK-ARROW2" d="M110.5,464.8l13.2,29l13.2-29h-8.4v-30.7h-9.7v30.7H110.5z"/>
        <path id="HIGHRISK-ARROW2" d="M601.4,464.8l13.2,29l13.2-29h-8.4v-30.7h-9.7v30.7H601.4z"/>
        <g id="INFO" opacity="0">
          <path d="M815.53 26.2C823.73 26.2 830.38 32.85 830.38 41.06C830.38 82.85 830.38 193.35 830.38 235.14C830.38 243.35 823.73 250 815.53 250C770.62 250 650.76 250 605.86 250C597.65 250 591 243.35 591 235.14C591 193.35 591 82.85 591 41.06C591 32.85 597.65 26.2 605.86 26.2C650.76 26.2 770.62 26.2 815.53 26.2Z" id="boBI7vMw" transform="translate(100, 10)"></path>
          <text id="bHzHE2fV0" x="721.17" y="31.43" class="st9" transform="matrix(1 0 0 1 90.461082249843948 14.654685674003488)" xml:space="preserve" dominant-baseline="text-before-edge"><tspan x="721.17" dy="0em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">Clinical Tip: The primary goals of CVD</tspan><tspan x="721.17" dy="1.2em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">risk assessment should be: (1) to</tspan><tspan x="721.17" dy="1.2em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">reassure individuals without any</tspan><tspan x="721.17" dy="1.2em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">treatable risk factors that they are</tspan><tspan x="721.17" dy="1.2em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">doing well; (2) to advise individuals with</tspan><tspan x="721.17" dy="1.2em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">treatable risk factors or unhealthy</tspan><tspan x="721.17" dy="1.2em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">behaviours; and (3) to identify subjects</tspan><tspan x="721.17" dy="1.2em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">most likely to benefit from</tspan><tspan x="721.17" dy="1.2em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">pharmacotherapy. Several studies have</tspan><tspan x="721.17" dy="1.2em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">also shown that the potential benefits</tspan><tspan x="721.17" dy="1.2em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">of risk assessment are maximized</tspan><tspan x="721.17" dy="1.2em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">when results are directly</tspan><tspan x="721.17" dy="1.2em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">communicated to the patient</tspan><tspan x="721.17" dy="1.2em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">(Anderson et al.)</tspan></text><text id="c9fJ88YJ9C" x="772.63" y="-64.29" font-size="1" font-family="Libre Franklin" font-weight="normal" font-style="normal" letter-spacing="0" alignment-baseline="before-edge" transform="matrix(1 0 0 1 0 0)" style="line-height:100%" xml:space="preserve" dominant-baseline="text-before-edge"><tspan x="772.63" dy="0em" alignment-baseline="before-edge" dominant-baseline="text-before-edge" text-anchor="middle">Text</tspan></text></defs><g><g><g id="a18HbJQ5Ql"><use xlink:href="#h2fP9QhyGG" opacity="1" fill="#a0ac4d" fill-opacity="1"></use></g><g><g><filter id="shadow3375175" x="582" y="17.2" width="258.38" height="242.8" filterUnits="userSpaceOnUse" primitiveUnits="userSpaceOnUse"><feFlood></feFlood><feComposite in2="SourceAlpha" operator="in"></feComposite><feGaussianBlur stdDeviation="1"></feGaussianBlur><feOffset dx="1" dy="1" result="afterOffset"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="afterOffset" operator="in"></feComposite><feMorphology operator="dilate" radius="1"></feMorphology><feComposite in2="SourceAlpha" operator="out"></feComposite></filter>
          <path d="M815.53 26.2C823.73 26.2 830.38 32.85 830.38 41.06C830.38 82.85 830.38 193.35 830.38 235.14C830.38 243.35 823.73 250 815.53 250C770.62 250 650.76 250 605.86 250C597.65 250 591 243.35 591 235.14C591 193.35 591 82.85 591 41.06C591 32.85 597.65 26.2 605.86 26.2C650.76 26.2 770.62 26.2 815.53 26.2Z" transform="translate(100,10)" id="b8wpSq8mGO" fill="white" fill-opacity="1" filter="url(#shadow3375175)"></path></g><use xlink:href="#boBI7vMw" opacity="1" fill="#7af3e4" fill-opacity="1"></use><g><use xlink:href="#boBI7vMw" opacity="1" fill-opacity="0" stroke="#105c1f" stroke-width="1" stroke-opacity="1"></use></g></g><g id="a1xPSKMJ2X"><use xlink:href="#bHzHE2fV0" opacity="1" fill="#000000" fill-opacity="1"></use></g><g id="f3jP0xiG9n"><use xlink:href="#c9fJ88YJ9C" opacity="1" fill="#9eb78c" fill-opacity="1"></use></g></g></g>
        </g>
        <g id="DETERMINE">
          <path id="DETERMINE-BOX" class="st0 outline" d="M80.3,177.9h577.6v59.7H80.3V177.9z"/>
          <text transform="matrix(1 0 0 1 225.7033 201.1791)" class="st1 st2">Determined level of Cardiovascular Disease risk</text>
          <text transform="matrix(1 0 0 1 245.9088 222.3554)" class="st1 st2">using the Framingham Risk Score (FRS)?</text>
        </g>
        <g id="ASSESS-OUTCOME">
          <path id="ASSESS-OUTCOME-BOX" class="st3 outline" d="M709.4,42.4h175.7v59.7H709.4V42.4z"/>
          <path id="ASSESS-ARROW" d="M686.5,85.5L703,72.3l-16.5-13.2v8.4h-17.5v9.7h17.5V85.5z"/>
          <text transform="matrix(1 0 0 1 756.541 66.8306)" class="st1 st2">Assess before</text>
          <text transform="matrix(1 0 0 1 761.7178 88.0068)" class="st1 st2">continuing</text>
        </g>
        <g id="ASSESS">
          <path id="OUTCOME-BOX" class="st3 outline" d="M80.3,51.9h577.6v40.8H80.3V51.9z"/>
          <text id="ASSESS-TEXT" transform="matrix(1 0 0 1 285.0713 76.6445)" class="st1 st2">Assessed patient blood work?</text>
        </g>
        <g id="ASSESS-NO_1_" onclick="AssessNo()">
          <path id="ASSESS-OUTCOME-NO-BOX" class="st3 outline" d="M255.6,114.6h44.8v44.2h-44.8V114.6z"/>
          <text id="ASSESS-NO" transform="matrix(1 0 0 1 269.1108 141.5645)" class="st1 st4">NO</text>
        </g>
        <g id="ASSESS-YES_1_" onclick="AssessYes()" >
          <path id="ASSESS-OUTCOME-YES-BOX" class="st3 outline" d="M188.9,114.6h44.8v44.2h-44.8V114.6z"/>
          <text id="ASSESS-YES" transform="matrix(1 0 0 1 200.1211 141.3149)" class="st1 st4">YES</text>
        </g>
        <g id="DETERMINE-YES_1_" onclick="">
          <path id="DETERMINE-OUTCOME-YES-BOX" class="st5 outline" d="M188.9,255.9h44.8v44.2h-44.8V255.9z"/>
          <text id="DETERMINE-YES" transform="matrix(1 0 0 1 199.1211 282.6514)" class="st1 st4">YES</text>
        </g>
        <g id="DETERMINE-NO" onclick="">
          <path id="DETERMINE-OUTCOME-NO-BOX" class="st5 outline" d="M255.6,255.9h44.8v44.2h-44.8V255.9z"/>
          <text id="DETERMINE-OUTCOME-TEXT_1_" transform="matrix(1 0 0 1 268.1108 282.6514)" class="st1 st4">NO</text>
        </g>
        <g id="LOW-BOX" onclick="">
          <path id="LOWRISK-ARROW1" d="M110.5,281.8l13.2,29l13.2-29h-8.4V251h-9.7v30.7H110.5z"/>
          <path id="LOWRISK-BOX" class="st6 outline" d="M28.8,321.1h189.8v100.6H28.8V321.1z"/>
          <g id="LOWRISK-TEXT">
            <text transform="matrix(1 0 0 1 95.1885 361.5792)" class="st1 st2">Low Risk</text>
            <text transform="matrix(1 0 0 1 93.5 384.3303)" class="st1 st2">FRS &lt; 10%</text>
          </g>
        </g>
        <g id="INTERMEDIATE-BOX" onclick="">
          <path id="INTERRISK-ARROW1" d="M355.9,281.8l13.2,29l13.2-29H374V251h-9.7v30.7H355.9z"/>
          <path id="INTERM-BOX" class="st7 outline" d="M274.3,321.1h189.8v100.6H274.3V321.1z"/>
          <text transform="matrix(1 0 0 1 320.582 384.3301)" class="st1 st2">10% &lt; FRS &lt; 20%</text>
          <text transform="matrix(1 0 0 1 318.5821 359.852)" class="st1 st2">Intermediate Risk</text>
        </g>
        <g id="HIGH-BOX_2_" onclick="">
          <path id="HIGHRISK-ARROW1" d="M601.4,282.8l13.2,29l13.2-29h-8.4v-30.7h-9.7v30.7H601.4z"/>
          <path id="HIGH-BOX" class="st8 outline" d="M519.6,321.1h189.8v100.6H519.6V321.1z"/>
          <text transform="matrix(1 0 0 1 584.6074 359.8521)" class="st1 st2">High Risk*</text>
          <text transform="matrix(1 -6.003964e-03 8.003964e-03 1 583.8381 384.3302)" class="st1 st2">FRS &gt; 20%</text>
        </g>
        <a id="FinalLink" xlink:href="javascript: void(0)" style="text-decoration: none">
          <g id="FINAL-OUTCOME">
            <path id="FINAL-BOX" class="st3 outline" d="M80.3,498.9h577.6v69.6H80.3V498.9z"/>
            <text transform="matrix(1 0 0 1 201.3633 529.416)" class="st1 st2">Click to go to Decision Tree C-Change Guidelines 2017</text>
            <text transform="matrix(1 0 0 1 170.0928 550.5928)" class="st1 st2">for diagnoses and recommended targets for health conditions</text>
          </g>
        </a>
        <g id="HIGHRISK-NOTE">
          <text transform="matrix(1 0 0 1 735.4385 332.1746)" class="st1 st2">*Evidence of the following?</text>
          <text transform="matrix(1 0 0 1 750.6768 353.3508)" class="st1 st2">Atherosclerosis, AAA,</text>
          <text transform="matrix(1 0 0 1 740.1592 374.5276)" class="st1 st2">Diabetes &gt; 15 years, Age</text>
          <text transform="matrix(1 0 0 1 740.3008 395.7039)" class="st1 st2">&gt; 40 years with diabetes,</text>
          <text transform="matrix(1 0 0 1 758.0713 416.8801)" class="st1 st2">kidney disease, or</text>
          <text transform="matrix(1 0 0 1 775.9971 438.0569)" class="st1 st2">hypertension</text>
        </g>
        <g id="DETERMINE-OUTCOME">
          <path id="DETERMINE-OUTCOME-BOX" class="st0 outline" d="M709.4,177.9h175.7v59.7H709.4V177.9z"/>
          <path id="DETERMINE-OUTCOME-ARROW" d="M686.5,221l16.5-13.2l-16.5-13.2v8.4h-17.5v9.7h17.5V221z"/>
          <text transform="matrix(1 0 0 1 740.5029 201.8379)" class="st1 st2">Determine before</text>
          <text transform="matrix(1 0 0 1 759.7178 223.0146)" class="st1 st2">continuing</text>
        </g>
      </svg>
    </center>
    <br><br><br>
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
    <script type="text/javascript" src="resize.js"></script>    
    <script type="text/javascript" src="tree.js"></script>
  </body>
</html>