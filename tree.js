function AssessNo(){
                        document.getElementById("ASSESS-OUTCOME").style.opacity = "1";
                        document.getElementById("ASSESS-YES_1_").style.opacity = "0";
                        document.getElementById('ASSESS-NO_1_').setAttribute('onclick','');
                        document.getElementById('ASSESS-YES_1_').setAttribute('onclick','');
                        document.getElementById("INFO").style.opacity = "0";
                    }

function AssessYes(){
                        document.getElementById("DETERMINE").style.opacity = "1";
                        document.getElementById("ASSESSED-ARROW").style.opacity = "1";
                        document.getElementById("ASSESS-NO_1_").style.opacity = "0";
                        document.getElementById("DETERMINE-YES_1_").style.opacity = "1";
                        document.getElementById("DETERMINE-NO").style.opacity = "1";
                        document.getElementById('ASSESS-NO_1_').setAttribute('onclick','');
                        document.getElementById('ASSESS-YES_1_').setAttribute('onclick','');
                        document.getElementById('DETERMINE-YES_1_').setAttribute('onclick','DetermineYes()');
                        document.getElementById('DETERMINE-NO').setAttribute('onclick','DetermineNo()');
                        document.getElementById("INFO").style.opacity = "1";
                     }

function DetermineYes(){
                        document.getElementById("LOWRISK-ARROW1").style.opacity = "1";
                        document.getElementById("LOW-BOX").style.opacity = "1";
                        document.getElementById("INTERRISK-ARROW1").style.opacity = "1";
                        document.getElementById("INTERMEDIATE-BOX").style.opacity = "1";
                        document.getElementById("HIGHRISK-ARROW1").style.opacity = "1";
                        document.getElementById("HIGH-BOX_2_").style.opacity = "1";
                        document.getElementById("HIGHRISK-NOTE").style.opacity = "1";
                        document.getElementById("DETERMINE-NO").style.opacity = "0";
                        document.getElementById('DETERMINE-NO').setAttribute('onclick','');
                        document.getElementById('DETERMINE-YES_1_').setAttribute('onclick','');
                        document.getElementById('LOW-BOX').setAttribute('onclick','LowRisk()');
                        document.getElementById('INTERMEDIATE-BOX').setAttribute('onclick','IntermediateRisk()');
                        document.getElementById('HIGH-BOX_2_').setAttribute('onclick','HighRisk()');
                        }

function DetermineNo(){
                        document.getElementById("DETERMINE-OUTCOME").style.opacity = "1";
                        document.getElementById("DETERMINE-YES_1_").style.opacity = "0";
                        document.getElementById('DETERMINE-NO').setAttribute('onclick','');
                        document.getElementById('DETERMINE-YES_1_').setAttribute('onclick','');
                        document.getElementById("INFO").style.opacity = "0";
                       }

function LowRisk(){
                        document.getElementById("LOWRISK-ARROW2").style.opacity = "1";
                        document.getElementById("INTERRISK-ARROW1").style.opacity = "0";
                        document.getElementById("INTERMEDIATE-BOX").style.opacity = "0";
                        document.getElementById("HIGHRISK-ARROW1").style.opacity = "0";
                        document.getElementById("HIGH-BOX_2_").style.opacity = "0";
                        document.getElementById("HIGHRISK-NOTE").style.opacity = "0";
                        document.getElementById("FINAL-OUTCOME").style.opacity = "1";
                        document.getElementById('HIGH-BOX_2_').setAttribute('onclick','');
                        document.getElementById('INTERMEDIATE-BOX').setAttribute('onclick','');
                        document.getElementById('FinalLink').setAttribute('xlink:href','tree-2.php');
                   }

function IntermediateRisk(){
                        document.getElementById("INTERRISK-ARROW2").style.opacity = "1";
                        document.getElementById("LOWRISK-ARROW1").style.opacity = "0";
                        document.getElementById("LOW-BOX").style.opacity = "0";
                        document.getElementById("HIGHRISK-ARROW1").style.opacity = "0";
                        document.getElementById("HIGH-BOX_2_").style.opacity = "0";
                        document.getElementById("HIGHRISK-NOTE").style.opacity = "0";
                        document.getElementById("FINAL-OUTCOME").style.opacity = "1";
                        document.getElementById('HIGH-BOX_2_').setAttribute('onclick','');
                        document.getElementById('LOW-BOX').setAttribute('onclick','');
                        document.getElementById('FinalLink').setAttribute('xlink:href','tree-2.php');
                            }

function HighRisk(){
                        document.getElementById("HIGHRISK-ARROW2").style.opacity = "1";
                        document.getElementById("LOWRISK-ARROW1").style.opacity = "0";
                        document.getElementById("LOW-BOX").style.opacity = "0";
                        document.getElementById("INTERRISK-ARROW1").style.opacity = "0";
                        document.getElementById("INTERMEDIATE-BOX").style.opacity = "0";
                        document.getElementById("FINAL-OUTCOME").style.opacity = "1";
                        document.getElementById('LOW-BOX').setAttribute('onclick','');
                        document.getElementById('INTERMEDIATE-BOX').setAttribute('onclick','');
                        document.getElementById('FinalLink').setAttribute('xlink:href','tree-2.php');
                    }