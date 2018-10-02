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
    svg { height: vmin; }
      .lab-gren { fill: rgba(249,1b30,232,0.5); transition:.6s fill; stroke:#5C5C5C;}
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
    <nav class="navbar navbar-inverse" style="border-radius: 0">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Cardiovascular Assessment Screening Program</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
            <li><a href="login.php">Home</a></li>
            <li class="active"><a href="resources.php">Research Study</a>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Forms</a>
              <ul class="dropdown-menu">
                <li><a href="HeartHealthAssessment.pdf">Heart Health Assessment</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Guidelines</a>
              <ul class="dropdown-menu">
                <li><a href="#">Page 1-1</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="#">Page 1-3</a></li>
              </ul>
            </li>
            <li><a href="providers.php">Provider Resources</a></li>
            <li><a href="patients.php">Patient Resources</a></li>
            <li><a href="tree.php">Decision Tree</a></li>
            </li>
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
      <p class="block">NPs in the intervention group will be expected to screen individuals over two visits. The initial assessment may take up to 30 minutes. The second visit appointment may take up to 40 minutes.
  The NPs in the control group will carry on with usual care; identifying patients and completing documentation will take five minutes per patient. For each NP, data collection will take 4-6 weeks and will be completed once 30 patients have been identified for the study. The researcher will review the charts of eligible patients in the control group.</p>
      <hr>
      <h3><em>What are the benefits of doing this research study?</em></h3>
      <p class="block">Evaluating and refining CASP can result in comprehensive and consistent screening by NPs with appropriate follow-up actions in patient-oriented research. Implementation of CASP will strengthen the participation of NPs in CVD prevention and health promotion and a valuable toolkit for CVD screening will be available to other health care providers in NL.</p>
      <hr>
      <h3><em>More information?</em></h3>
      <p class="block">Please contact Jill Bruneau NP PhD(c), Principal Investigator, Memorial University School of Nursing, 709-777-7258, <a href="mailto:jb4276@mun.ca">jb4276@mun.ca</a>.</a></p>
    </div>
  </body>
</html>