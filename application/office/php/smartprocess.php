<?php 
	







	if (!isset($_SESSION)) session_start(); 
	if(!$_POST) exit;
	
	include dirname(__FILE__).'/settings/settings.php';
	include dirname(__FILE__).'/functions/emailValidation.php';
	
	
	/* Current Date Year
	------------------------------- */		
	$currYear = date("Y");	
	

			



$idName = strip_tags(trim($_POST['idName']));
$idDob = strip_tags(trim($_POST['idDob']));
$idSs = strip_tags(trim($_POST['idSs']));
$idAddress = strip_tags(trim($_POST['idAddress']));
$idCity = strip_tags(trim($_POST['idCity']));
$idState = strip_tags(trim($_POST['idState']));
$idZip = strip_tags(trim($_POST['idZip']));
$idPhone = strip_tags(trim($_POST['idPhone']));
$idEmail = strip_tags(trim($_POST['idEmail']));



//Education
$eduSchool0 = strip_tags(trim($_POST["eduSchool"][0]));
$eduSchool1 = strip_tags(trim($_POST["eduSchool"][1]));
$eduSchool2 = strip_tags(trim($_POST["eduSchool"][2]));
$eduSchool3 = strip_tags(trim($_POST["eduSchool"][3]));
$eduSchool4 = strip_tags(trim($_POST["eduSchool"][4]));
$eduSchool5 = strip_tags(trim($_POST["eduSchool"][5]));
$eduSchool6 = strip_tags(trim($_POST["eduSchool"][6]));
$eduSchool7 = strip_tags(trim($_POST["eduSchool"][7]));
$eduSchool8 = strip_tags(trim($_POST["eduSchool"][8]));
$eduSchool9 = strip_tags(trim($_POST["eduSchool"][9]));

$eduDegree0 = strip_tags(trim($_POST["eduDegree"][0]));
$eduDegree1 = strip_tags(trim($_POST["eduDegree"][1]));
$eduDegree2 = strip_tags(trim($_POST["eduDegree"][2]));
$eduDegree3 = strip_tags(trim($_POST["eduDegree"][3]));
$eduDegree4 = strip_tags(trim($_POST["eduDegree"][4]));
$eduDegree5 = strip_tags(trim($_POST["eduDegree"][5]));
$eduDegree6 = strip_tags(trim($_POST["eduDegree"][6]));
$eduDegree7 = strip_tags(trim($_POST["eduDegree"][7]));
$eduDegree8 = strip_tags(trim($_POST["eduDegree"][8]));
$eduDegree9 = strip_tags(trim($_POST["eduDegree"][9]));

$eduGraduation0 = strip_tags(trim($_POST["eduGraduation"][0]));
$eduGraduation1 = strip_tags(trim($_POST["eduGraduation"][1]));
$eduGraduation2 = strip_tags(trim($_POST["eduGraduation"][2]));
$eduGraduation3 = strip_tags(trim($_POST["eduGraduation"][3]));
$eduGraduation4 = strip_tags(trim($_POST["eduGraduation"][4]));
$eduGraduation5 = strip_tags(trim($_POST["eduGraduation"][5]));
$eduGraduation6 = strip_tags(trim($_POST["eduGraduation"][6]));
$eduGraduation7 = strip_tags(trim($_POST["eduGraduation"][7]));
$eduGraduation8 = strip_tags(trim($_POST["eduGraduation"][8]));
$eduGraduation9 = strip_tags(trim($_POST["eduGraduation"][9]));

$eduCertifications = strip_tags(trim($_POST['eduCertifications']));
$eduSkills = strip_tags(trim($_POST['eduSkills']));


// Drivers License 
$employmentCompany0 = strip_tags(trim($_POST["employmentCompany"][0]));
$employmentCompany1 = strip_tags(trim($_POST["employmentCompany"][1]));
$employmentCompany2 = strip_tags(trim($_POST["employmentCompany"][2]));
$employmentCompany3 = strip_tags(trim($_POST["employmentCompany"][3]));
$employmentCompany4 = strip_tags(trim($_POST["employmentCompany"][4]));
$employmentCompany5 = strip_tags(trim($_POST["employmentCompany"][5]));
$employmentCompany6 = strip_tags(trim($_POST["employmentCompany"][6]));
$employmentCompany7 = strip_tags(trim($_POST["employmentCompany"][7]));
$employmentCompany8 = strip_tags(trim($_POST["employmentCompany"][8]));
$employmentCompany9 = strip_tags(trim($_POST["employmentCompany"][9]));

$employmentAddress0 = strip_tags(trim($_POST["employmentAddress"][1]));
$employmentAddress1 = strip_tags(trim($_POST["employmentAddress"][2]));
$employmentAddress2 = strip_tags(trim($_POST["employmentAddress"][3]));
$employmentAddress3 = strip_tags(trim($_POST["employmentAddress"][2]));
$employmentAddress4 = strip_tags(trim($_POST["employmentAddress"][4]));
$employmentAddress5 = strip_tags(trim($_POST["employmentAddress"][5]));
$employmentAddress6 = strip_tags(trim($_POST["employmentAddress"][6]));
$employmentAddress7 = strip_tags(trim($_POST["employmentAddress"][7]));
$employmentAddress8 = strip_tags(trim($_POST["employmentAddress"][8]));
$employmentAddress9 = strip_tags(trim($_POST["employmentAddress"][9]));

$employmentPhone0 = strip_tags(trim($_POST["employmentPhone"][0]));
$employmentPhone1 = strip_tags(trim($_POST["employmentPhone"][1]));
$employmentPhone2 = strip_tags(trim($_POST["employmentPhone"][2]));
$employmentPhone3 = strip_tags(trim($_POST["employmentPhone"][3]));
$employmentPhone4 = strip_tags(trim($_POST["employmentPhone"][4]));
$employmentPhone5 = strip_tags(trim($_POST["employmentPhone"][5]));
$employmentPhone6 = strip_tags(trim($_POST["employmentPhone"][6]));
$employmentPhone7 = strip_tags(trim($_POST["employmentPhone"][7]));
$employmentPhone8 = strip_tags(trim($_POST["employmentPhone"][8]));
$employmentPhone9 = strip_tags(trim($_POST["employmentPhone"][9]));

$employmentEmail0 = strip_tags(trim($_POST["employmentEmail"][0]));
$employmentEmail1 = strip_tags(trim($_POST["employmentEmail"][1]));
$employmentEmail2 = strip_tags(trim($_POST["employmentEmail"][2]));
$employmentEmail3 = strip_tags(trim($_POST["employmentEmail"][3]));
$employmentEmail4 = strip_tags(trim($_POST["employmentEmail"][4]));
$employmentEmail5 = strip_tags(trim($_POST["employmentEmail"][5]));
$employmentEmail6 = strip_tags(trim($_POST["employmentEmail"][6]));
$employmentEmail7 = strip_tags(trim($_POST["employmentEmail"][7]));
$employmentEmail8 = strip_tags(trim($_POST["employmentEmail"][8]));
$employmentEmail9 = strip_tags(trim($_POST["employmentEmail"][9]));

$employmentTitle0 = strip_tags(trim($_POST["employmentTitle"][0]));
$employmentTitle1 = strip_tags(trim($_POST["employmentTitle"][1]));
$employmentTitle2 = strip_tags(trim($_POST["employmentTitle"][2]));
$employmentTitle3 = strip_tags(trim($_POST["employmentTitle"][3]));
$employmentTitle4 = strip_tags(trim($_POST["employmentTitle"][4]));
$employmentTitle5 = strip_tags(trim($_POST["employmentTitle"][5]));
$employmentTitle6 = strip_tags(trim($_POST["employmentTitle"][6]));
$employmentTitle7 = strip_tags(trim($_POST["employmentTitle"][7]));
$employmentTitle8 = strip_tags(trim($_POST["employmentTitle"][8]));
$employmentTitle9 = strip_tags(trim($_POST["employmentTitle"][9]));

$employmentSupervisor0 = strip_tags(trim($_POST["employmentSupervisor"][0]));
$employmentSupervisor1 = strip_tags(trim($_POST["employmentSupervisor"][1]));
$employmentSupervisor2 = strip_tags(trim($_POST["employmentSupervisor"][2]));
$employmentSupervisor3 = strip_tags(trim($_POST["employmentSupervisor"][3]));
$employmentSupervisor4 = strip_tags(trim($_POST["employmentSupervisor"][4]));
$employmentSupervisor5 = strip_tags(trim($_POST["employmentSupervisor"][5]));
$employmentSupervisor6 = strip_tags(trim($_POST["employmentSupervisor"][6]));
$employmentSupervisor7 = strip_tags(trim($_POST["employmentSupervisor"][7]));
$employmentSupervisor8 = strip_tags(trim($_POST["employmentSupervisor"][8]));
$employmentSupervisor9 = strip_tags(trim($_POST["employmentSupervisor"][9]));


$employmentRespons0 = strip_tags(trim($_POST["employmentRespons"][0]));
$employmentRespons1 = strip_tags(trim($_POST["employmentRespons"][1]));
$employmentRespons2 = strip_tags(trim($_POST["employmentRespons"][2]));
$employmentRespons3 = strip_tags(trim($_POST["employmentRespons"][3]));
$employmentRespons4 = strip_tags(trim($_POST["employmentRespons"][4]));
$employmentRespons5 = strip_tags(trim($_POST["employmentRespons"][5]));
$employmentRespons6 = strip_tags(trim($_POST["employmentRespons"][6]));
$employmentRespons7 = strip_tags(trim($_POST["employmentRespons"][7]));
$employmentRespons8 = strip_tags(trim($_POST["employmentRespons"][8]));
$employmentRespons9 = strip_tags(trim($_POST["employmentRespons"][9]));

$employmentDateFrom0 = strip_tags(trim($_POST["employmentDateFrom"][0]));
$employmentDateFrom1 = strip_tags(trim($_POST["employmentDateFrom"][1]));
$employmentDateFrom2 = strip_tags(trim($_POST["employmentDateFrom"][2]));
$employmentDateFrom3 = strip_tags(trim($_POST["employmentDateFrom"][3]));
$employmentDateFrom4 = strip_tags(trim($_POST["employmentDateFrom"][4]));
$employmentDateFrom5 = strip_tags(trim($_POST["employmentDateFrom"][5]));
$employmentDateFrom6 = strip_tags(trim($_POST["employmentDateFrom"][6]));
$employmentDateFrom7 = strip_tags(trim($_POST["employmentDateFrom"][7]));
$employmentDateFrom8 = strip_tags(trim($_POST["employmentDateFrom"][8]));
$employmentDateFrom9 = strip_tags(trim($_POST["employmentDateFrom"][9]));

$employmentDateTo0 = strip_tags(trim($_POST["employmentDateTo"][0]));
$employmentDateTo1 = strip_tags(trim($_POST["employmentDateTo"][1]));
$employmentDateTo2 = strip_tags(trim($_POST["employmentDateTo"][2]));
$employmentDateTo3 = strip_tags(trim($_POST["employmentDateTo"][3]));
$employmentDateTo4 = strip_tags(trim($_POST["employmentDateTo"][4]));
$employmentDateTo5 = strip_tags(trim($_POST["employmentDateTo"][5]));
$employmentDateTo6 = strip_tags(trim($_POST["employmentDateTo"][6]));
$employmentDateTo7 = strip_tags(trim($_POST["employmentDateTo"][7]));
$employmentDateTo8 = strip_tags(trim($_POST["employmentDateTo"][8]));
$employmentDateTo9 = strip_tags(trim($_POST["employmentDateTo"][9]));

$employmentReason0 = strip_tags(trim($_POST["employmentReason"][0]));
$employmentReason1 = strip_tags(trim($_POST["employmentReason"][1]));
$employmentReason2 = strip_tags(trim($_POST["employmentReason"][2]));
$employmentReason3 = strip_tags(trim($_POST["employmentReason"][3]));
$employmentReason4 = strip_tags(trim($_POST["employmentReason"][4]));
$employmentReason5 = strip_tags(trim($_POST["employmentReason"][5]));
$employmentReason6 = strip_tags(trim($_POST["employmentReason"][6]));
$employmentReason7 = strip_tags(trim($_POST["employmentReason"][7]));
$employmentReason8 = strip_tags(trim($_POST["employmentReason"][8]));
$employmentReason9 = strip_tags(trim($_POST["employmentReason"][9]));


//References
$referencesName1 = strip_tags(trim($_POST["referencesName1"]));
$referencesName2 = strip_tags(trim($_POST["referencesName2"]));
$referencesName3 = strip_tags(trim($_POST["referencesName3"]));
$referencesPhone1 = strip_tags(trim($_POST["referencesPhone1"]));
$referencesPhone2 = strip_tags(trim($_POST["referencesPhone2"]));
$referencesPhone3 = strip_tags(trim($_POST["referencesPhone3"]));
$referencesAddress1 = strip_tags(trim($_POST["referencesAddress1"]));
$referencesAddress2 = strip_tags(trim($_POST["referencesAddress2"]));
$referencesAddress3 = strip_tags(trim($_POST["referencesAddress3"]));




require('../../../fpdf/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Times','B',10);
$pdf->Cell(0,10,"1. Personal Information ");

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(15,10,'Full Name: ');
$pdf->SetFont('Times','',9);
$pdf->Cell(10,10,$idName);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(18,10,'Date of Birth: ');
$pdf->SetFont('Times','',9);
$pdf->Cell(50,10, $idDob);
$pdf->SetFont('Times','I',9);
$pdf->Cell(24,10,'Social Security #: ');
$pdf->SetFont('Times','',9);
$pdf->Cell(50,10, $idSs);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(12,10,'Address: ');
$pdf->SetFont('Times','',9);
$pdf->Cell(10,10,$idAddress);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(7,10,'City: ');
$pdf->SetFont('Times','',9);
$pdf->Cell(61,10,$idCity);
$pdf->SetFont('Times','I',9);
$pdf->Cell(8,10,'State: ');
$pdf->SetFont('Times','',9);
$pdf->Cell(40,10,$idState);
$pdf->SetFont('Times','I',9);
$pdf->Cell(15,10,'ZIP Code: ');
$pdf->SetFont('Times','',9);
$pdf->Cell(40,10,$idZip);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(21,10,'Phone Number: ');
$pdf->SetFont('Times','',9);
$pdf->Cell(47,10, $idPhone);
$pdf->SetFont('Times','I',9);
$pdf->Cell(10,10,'Email: ');
$pdf->SetFont('Times','',9);
$pdf->Cell(50,10, $idEmail);

$pdf->Ln(5);
$pdf->SetFont('Times','B',9);
$pdf->Cell(0,10,"2. EDUCATION");
$pdf->Ln(5);
$pdf->SetFont('Times','',9);
$pdf->Cell(10,10, 'List your addresses of residency for the past 3 years below:  ');
$pdf->Ln(10);
$pdf->SetFont('Times','B',9);
$pdf->Cell(70,5,'School',0,'L',0);
$pdf->Cell(70,5,'Degree',0,'L',0);
$pdf->Cell(40,5,'Graduation Date',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Times','',9);
$pdf->SetFillColor(247,247,247);
$pdf->Cell(70,5, $eduSchool0,0,'L',0,true);
$pdf->Cell(70,5, $eduDegree0,0,'L',0,true);
$pdf->Cell(40,5, $eduGraduation0,0,'L',0,true);
$pdf->Ln(5);

$pdf->Cell(70,5, $eduSchool1,0,'L',0);
$pdf->Cell(70,5, $eduDegree1,0,'L',0);
$pdf->Cell(40,5, $eduGraduation1,0,'L',0);
$pdf->Ln(5);
$pdf->Cell(70,5, $eduSchool2,0,'L',0,true);
$pdf->Cell(70,5, $eduDegree2,0,'L',0,true);
$pdf->Cell(40,5, $eduGraduation2,0,'L',0,true);
$pdf->Ln(5);
$pdf->Cell(70,5, $eduSchool3,0,'L',0);
$pdf->Cell(70,5, $eduDegree3,0,'L',0);
$pdf->Cell(40,5, $eduGraduation3,0,'L',0);
$pdf->Ln(5);
$pdf->Cell(70,5, $eduSchool4,0,'L',0,true);
$pdf->Cell(70,5, $eduDegree4,0,'L',0,true);
$pdf->Cell(40,5, $eduGraduation4,0,'L',0,true);
$pdf->Ln(5);
$pdf->Cell(70,5, $eduSchool5,0,'L',0);
$pdf->Cell(70,5, $eduDegree5,0,'L',0);
$pdf->Cell(40,5, $eduGraduation5,0,'L',0);
$pdf->Ln(5);
$pdf->Cell(70,5, $eduSchool6,0,'L',0,true);
$pdf->Cell(70,5, $eduDegree6,0,'L',0,true);
$pdf->Cell(40,5, $eduGraduation6,0,'L',0,true);
$pdf->Ln(5);
$pdf->Cell(70,5, $eduSchool7,0,'L',0);
$pdf->Cell(70,5, $eduDegree7,0,'L',0);
$pdf->Cell(40,5, $eduGraduation7,0,'L',0);
$pdf->Ln(5);
$pdf->Cell(70,5, $eduSchool8,0,'L',0,true);
$pdf->Cell(70,5, $eduDegree8,0,'L',0,true);
$pdf->Cell(40,5, $eduGraduation8,0,'L',0,true);
$pdf->Ln(5);
$pdf->Cell(70,5, $eduSchool9,0,'L',0);
$pdf->Cell(70,5, $eduDegree9,0,'L',0);
$pdf->Cell(40,5, $eduGraduation9,0,'L',0);

$pdf->MultiCell(0,10,$eduCertifications,0, 'L',0);
$pdf->MultiCell(0,10,$eduSkills,0, 'L',0);

$pdf->Ln(1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(0,10,"Employer  #1");
$pdf->Ln(6);
$pdf->SetFont('Times','I',9);
$pdf->Cell(17,5,"Company:");
$pdf->SetFont('Times','',9);
$pdf->Cell(70,5, $employmentCompany0);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,'Supervisor:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentSupervisor0);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentPhone0);
$pdf->SetFont('Times','I',9);
$pdf->Cell(19,5,'Email:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentEmail0);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(13,5,"Address:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(70,5, $employmentAddress0);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentJob0);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Date Worked From:");
$pdf->SetFont('Times','',9);
$pdf->Cell(60,5, $employmentDateFrom0);
$pdf->SetFont('Times','I',9);
$pdf->Cell(24,5,'Date Worked To:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentDateTo0);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Responsibilities:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentRespons0,0, 'L',0);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Reason for Leaving:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentReason0,0, 'L',0);


$pdf->Ln(1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(0,10,"Employer  #2");
$pdf->Ln(6);
$pdf->SetFont('Times','I',9);
$pdf->Cell(17,5,"Company:");
$pdf->SetFont('Times','',9);
$pdf->Cell(70,5, $employmentCompany1);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,'Supervisor:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentSupervisor1);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentPhone1);
$pdf->SetFont('Times','I',9);
$pdf->Cell(19,5,'Email:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentEmail1);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(13,5,"Address:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(70,5, $employmentAddress1);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentJob1);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Date Worked From:");
$pdf->SetFont('Times','',9);
$pdf->Cell(60,5, $employmentDateFrom1);
$pdf->SetFont('Times','I',9);
$pdf->Cell(24,5,'Date Worked To:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentDateTo1);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Responsibilities:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentRespons1,0, 'L',0);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Reason for Leaving:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentReason1,0, 'L',0);

$pdf->Ln(1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(0,10,"Employer  #3");
$pdf->Ln(6);
$pdf->SetFont('Times','I',9);
$pdf->Cell(17,5,"Company:");
$pdf->SetFont('Times','',9);
$pdf->Cell(70,5, $employmentCompany2);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,'Supervisor:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentSupervisor2);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentPhone2);
$pdf->SetFont('Times','I',9);
$pdf->Cell(19,5,'Email:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentEmail2);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(13,5,"Address:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(70,5, $employmentAddress2);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentJob2);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Date Worked From:");
$pdf->SetFont('Times','',9);
$pdf->Cell(60,5, $employmentDateFrom2);
$pdf->SetFont('Times','I',9);
$pdf->Cell(24,5,'Date Worked To:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentDateTo2);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Responsibilities:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentRespons2,0, 'L',0);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Reason for Leaving:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentReason2,0, 'L',0);

$pdf->Ln(1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(0,10,"Employer  #4");
$pdf->Ln(6);
$pdf->SetFont('Times','I',9);
$pdf->Cell(17,5,"Company:");
$pdf->SetFont('Times','',9);
$pdf->Cell(70,5, $employmentCompany3);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,'Supervisor:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentSupervisor3);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentPhone3);
$pdf->SetFont('Times','I',9);
$pdf->Cell(19,5,'Email:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentEmail3);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(13,5,"Address:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(70,5, $employmentAddress3);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentJob3);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Date Worked From:");
$pdf->SetFont('Times','',9);
$pdf->Cell(60,5, $employmentDateFrom3);
$pdf->SetFont('Times','I',9);
$pdf->Cell(24,5,'Date Worked To:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentDateTo3);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Responsibilities:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentRespons3,0, 'L',0);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Reason for Leaving:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentReason3,0, 'L',0);

$pdf->Ln(1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(0,10,"Employer  #5");
$pdf->Ln(6);
$pdf->SetFont('Times','I',9);
$pdf->Cell(17,5,"Company:");
$pdf->SetFont('Times','',9);
$pdf->Cell(70,5, $employmentCompany4);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,'Supervisor:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentSupervisor4);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentPhone4);
$pdf->SetFont('Times','I',9);
$pdf->Cell(19,5,'Email:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentEmail4);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(13,5,"Address:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(70,5, $employmentAddress4);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentJob4);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Date Worked From:");
$pdf->SetFont('Times','',9);
$pdf->Cell(60,5, $employmentDateFrom4);
$pdf->SetFont('Times','I',9);
$pdf->Cell(24,5,'Date Worked To:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentDateTo4);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Responsibilities:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentRespons4,0, 'L',0);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Reason for Leaving:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentReason4,0, 'L',0);

$pdf->Ln(1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(0,10,"Employer  #6");
$pdf->Ln(6);
$pdf->SetFont('Times','I',9);
$pdf->Cell(17,5,"Company:");
$pdf->SetFont('Times','',9);
$pdf->Cell(70,5, $employmentCompany5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,'Supervisor:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentSupervisor5);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentPhone5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(19,5,'Email:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentEmail5);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(13,5,"Address:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(70,5, $employmentAddress5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentJob5);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Date Worked From:");
$pdf->SetFont('Times','',9);
$pdf->Cell(60,5, $employmentDateFrom5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(24,5,'Date Worked To:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentDateTo5);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Responsibilities:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentRespons5,0, 'L',0);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Reason for Leaving:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentReason5,0, 'L',0);


$pdf->Ln(1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(0,10,"Employer  #7");
$pdf->Ln(6);
$pdf->SetFont('Times','I',9);
$pdf->Cell(17,5,"Company:");
$pdf->SetFont('Times','',9);
$pdf->Cell(70,5, $employmentCompany6);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,'Supervisor:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentSupervisor6);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentPhone6);
$pdf->SetFont('Times','I',9);
$pdf->Cell(19,5,'Email:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentEmail6);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(13,5,"Address:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(70,5, $employmentAddress6);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentJob6);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Date Worked From:");
$pdf->SetFont('Times','',9);
$pdf->Cell(60,5, $employmentDateFrom6);
$pdf->SetFont('Times','I',9);
$pdf->Cell(24,5,'Date Worked To:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentDateTo6);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Responsibilities:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentRespons6,0, 'L',0);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Reason for Leaving:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentReason6,0, 'L',0);


$pdf->Ln(1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(0,10,"Employer  #8");
$pdf->Ln(6);
$pdf->SetFont('Times','I',9);
$pdf->Cell(17,5,"Company:");
$pdf->SetFont('Times','',9);
$pdf->Cell(70,5, $employmentCompany7);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,'Supervisor:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentSupervisor7);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentPhone7);
$pdf->SetFont('Times','I',9);
$pdf->Cell(19,5,'Email:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentEmail7);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(13,5,"Address:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(70,5, $employmentAddress7);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentJob7);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Date Worked From:");
$pdf->SetFont('Times','',9);
$pdf->Cell(60,5, $employmentDateFrom7);
$pdf->SetFont('Times','I',9);
$pdf->Cell(24,5,'Date Worked To:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentDateTo7);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Responsibilities:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentRespons7,0, 'L',0);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Reason for Leaving:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentReason7,0, 'L',0);


$pdf->Ln(1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(0,10,"Employer  #9");
$pdf->Ln(6);
$pdf->SetFont('Times','I',9);
$pdf->Cell(17,5,"Company:");
$pdf->SetFont('Times','',9);
$pdf->Cell(70,5, $employmentCompany8);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,'Supervisor:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentSupervisor8);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentPhone8);
$pdf->SetFont('Times','I',9);
$pdf->Cell(19,5,'Email:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentEmail8);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(13,5,"Address:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(70,5, $employmentAddress8);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentJob8);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Date Worked From:");
$pdf->SetFont('Times','',9);
$pdf->Cell(60,5, $employmentDateFrom8);
$pdf->SetFont('Times','I',9);
$pdf->Cell(24,5,'Date Worked To:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentDateTo8);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Responsibilities:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentRespons8,0, 'L',0);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Reason for Leaving:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentReason8,0, 'L',0);


$pdf->Ln(1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(0,10,"Employer  #10");
$pdf->Ln(6);
$pdf->SetFont('Times','I',9);
$pdf->Cell(17,5,"Company:");
$pdf->SetFont('Times','',9);
$pdf->Cell(70,5, $employmentCompany9);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,'Supervisor:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentSupervisor9);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentPhone9);
$pdf->SetFont('Times','I',9);
$pdf->Cell(19,5,'Email:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentEmail9);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(13,5,"Address:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(70,5, $employmentAddress9);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Phone Number:");
$pdf->SetFont('Times','',9);
$pdf->Cell(65,5, $employmentJob9);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Date Worked From:");
$pdf->SetFont('Times','',9);
$pdf->Cell(60,5, $employmentDateFrom9);
$pdf->SetFont('Times','I',9);
$pdf->Cell(24,5,'Date Worked To:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $employmentDateTo9);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(22,5,"Responsibilities:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentRespons9,0, 'L',0);

$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(27,5,"Reason for Leaving:");
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,5,$employmentReason9,0, 'L',0);

$pdf->AddPage();
$pdf->SetFont('Times','B',9);
$pdf->Cell(0,10,"4. PERSONAL REFERENCES");
$pdf->Ln(5);
$pdf->SetFont('Times','',10);
$pdf->MultiCell(0,10,'List three (3) persons for references, other than family members, who have knowledge of your safety habits. ',0, 'L',0);
$pdf->SetFont('Times','B',10);
$pdf->Cell(0,10,'Reference #1',0,0);
$pdf->Ln(8);
$pdf->SetFont('Times','I',9);
$pdf->Cell(10,5,"Name:");
$pdf->SetFont('Times','',9);
$pdf->Cell(70,5, $referencesName1);
$pdf->SetFont('Times','I',9);
$pdf->Cell(12,5,'Phone:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $referencesPhone1);
$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(13,5,"Address:");
$pdf->SetFont('Times','',9);
$pdf->Cell(83,5, $referencesAddress1);


$pdf->Ln(5);
$pdf->SetFont('Times','B',10);
$pdf->Cell(0,10,'Reference #2',0,0);
$pdf->Ln(8);
$pdf->SetFont('Times','I',9);
$pdf->Cell(10,5,"Name:");
$pdf->SetFont('Times','',9);
$pdf->Cell(70,5, $referencesName2);
$pdf->SetFont('Times','I',9);
$pdf->Cell(12,5,'Phone:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $referencesPhone2);
$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(13,5,"Address:");
$pdf->SetFont('Times','',9);
$pdf->Cell(83,5, $referencesAddress2);



$pdf->Ln(5);
$pdf->SetFont('Times','B',10);
$pdf->Cell(0,10,'Reference #3',0,0);
$pdf->Ln(8);
$pdf->SetFont('Times','I',9);
$pdf->Cell(10,5,"Name:");
$pdf->SetFont('Times','',9);
$pdf->Cell(70,5, $referencesName3);
$pdf->SetFont('Times','I',9);
$pdf->Cell(12,5,'Phone:');
$pdf->SetFont('Times','',9);
$pdf->Cell(15,5, $referencesPhone3);
$pdf->Ln(5);
$pdf->SetFont('Times','I',9);
$pdf->Cell(13,5,"Address:");
$pdf->SetFont('Times','',9);
$pdf->Cell(83,5, $referencesAddress3);
$pdf->Ln(8);


$attachment= $pdf->Output($idName.' Application.pdf', 'S');


/*	----------------------------------------------------------------------
	: DB CONFIG
	----------------------------------------------------------------------- 	

	// Attempt insert query execution
	$sql = "INSERT INTO `driver` (idName, idDob, idSs, idAddress, idCity) VALUES ('$idName', '$idDob', '$idSs', '$idAddress', '$idCity')";
	if(mysqli_query($link, $sql)){
	    echo "Records added successfully.";
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	 
	// Close connection
	mysqli_close($link);


*/


/*	----------------------------------------------------------------------
	: Prepare form field variables for CSV export
	----------------------------------------------------------------------- */	
	if($generateCSV == true){
		$csvFile = $csvFileName;	
		$csvData = array(
			"$idName",
			"$idDob",
			"$idEmail",
			"$telephone",
			"$company",
			"$industry",
			"$address1",
			"$address2",
			"$city",
			"$zip",
			"$project_title",
			"$contact_person",
			"$services",
			"$bugdet",
			"$start_date",
			"$end_date",
			"$website",
			"$goals",
			"$extras_list_csv"						
		);
	}

/*	-------------------------------------------------------------------------
	: Prepare serverside validation 
	------------------------------------------------------------------------- */ 
	$errors = array();
	
	/* Validate First Name
	------------------------------------------------------- */
	if(isset($_POST["idName"])){
			if (!$idName) {
				$errors[] = "Please enter idName";
			}
	}
	
	/* Validate Last Name
	------------------------------------------------------- */
	if(isset($_POST["idDob"])){
			if (!$idDob) {
				$errors[] = "Please enter idDob";
			}
	}

	
	/* Validate Email
	------------------------------------------------------- */
	if(isset($_POST["idEmail"])){
		if (!$idEmail) {
			$errors[] = "Please enter your email";
		} else if (!validEmail($idEmail)) {
			$errors[] = "You must enter a VALID email";
		}
	}
	
	// /* Validate Telephone
	// ------------------------------------------------------ */
	// if(isset($_POST["telephone"])){
	// 	if (!$telephone) {
	// 		$errors[] = "Please enter your telephone";
	// 	} elseif(!preg_match('/^[0-9]+$/', $telephone))  {
	// 		$errors[] = "Please enter numbers only";
	// 	}
	// }		
		
	
	// /* Validate project title
	// ------------------------------------------------------- */
	// if(isset($_POST["project_title"])){
	// 	if (!$project_title) {
	// 		$errors[] = "Please enter the project title";
	// 	}
	// }
	
	// /* Contact person
	// ------------------------------------------------------- */
	// if(isset($_POST["contact_person"])){
	// 	if (!$contact_person) {
	// 		$errors[] = "Please enter contact person";
	// 	}
	// }
	
	// /* Validate services
	// ------------------------------------------------------- */
	// if(isset($_POST["services"])){
	// 	if (!$services) {
	// 		$errors[] = "Please select services";
	// 	}
	// }		
	
	// /* Validate Budget
	// ------------------------------------------------------- */
	// if(isset($_POST["budget"])){
	// 	if (!$budget) {
	// 		$errors[] = "Please select project budget";
	// 	}
	// }
	
	// /* Validate CAPTCHA
	// ------------------------------------------------------- */
	// if(isset($_POST["captcha"])){
	// 	if (!$captcha) {
	// 		$errors[] = "You must enter the captcha code";
	// 	} else if (($captcha) != $_SESSION['gfm_captcha']) {
	// 		$errors[] = "Captcha code is incorrect";
	// 	}
	// }
	
	if ($errors) {
		//Output errors in a list
		$errortext = "";
		foreach ($errors as $error) {
			$errortext .= '<li>'. $error . "</li>";
		}
	
		echo '<div class="alert notification alert-error">The following errors occured:<br><ul>'. $errortext .'</ul></div>';
	
	} 	else	{
			


			include dirname(__FILE__).'/phpmailer/PHPMailerAutoload.php';
			include dirname(__FILE__).'/templates/smartmessage.php';
				
			$mail = new PHPMailer();	
			$mail->isSMTP();                                      
			$mail->Host = $SMTP_host;                    
			$mail->SMTPAuth = true;                              
			$mail->Username = $SMTP_username;               
			$mail->Password = $SMTP_password;               
			$mail->SMTPSecure = $SMTP_protocol;                            
			$mail->Port = $SMTP_port;
			$mail->IsHTML(true);
			$mail->setFrom($idEmail,$idName);
			$mail->CharSet = "UTF-8";
			$mail->Encoding = "base64";
			$mail->Timeout = 200;
			$mail->ContentType = "text/html";
			$mail->addAddress($receiver_email, $receiver_name);
			$mail->Subject = $receiver_subject;
			$mail->Body = $message;
			$mail->AltBody = "Use an HTML compatible email client";

			$mail->AddStringAttachment($attachment, $idName.' Application.pdf');

			foreach ($_FILES["attachment"]["name"] as $k => $v) {
			    $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
			}
			// For multiple email recepients from the form 
			// Simply change recepients from false to true
			// Then enter the recipients email addresses
			// echo $message;
			$recipients = false;
			if($recipients == true){
				$recipients = array(
					"address@example.com" => "Recipient Name",
					"address@example.com" => "Recipient Name",
				);
				
				foreach($recipients as $email => $name){
					$mail->AddBCC($email, $name);
				}	
			}
			
			if($mail->Send()) {
			/*	-----------------------------------------------------------------
				: Generate the CSV file and post values if its true
				----------------------------------------------------------------- */		
				if($generateCSV == true){	
					if (file_exists($csvFile)) {
						$csvFileData = fopen($csvFile, 'a');
						fputcsv($csvFileData, $csvData );
					} else {
						$csvFileData = fopen($csvFile, 'a'); 
						$headerRowFields = array(
							"First Name",
							"Last Name",
							"Email",
							"Telephone",
							"Company",
							"Industry",
							"Address1",
							"Address2",
							"Cirt",
							"Zip",
							"Project Title",
							"Contact Person",
							"Services",
							"Budget",
							"Start Date",
							"End Date",
							"Website",
							"Goals",
							"Extras"																							
						);
						fputcsv($csvFileData,$headerRowFields);
						fputcsv($csvFileData, $csvData );
					}
					fclose($csvFileData);
				}			
				
			/*	---------------------------------------------------------------------
				: Send the auto responder message if its true
				--------------------------------------------------------------------- */
				if($autoResponder == true){
				
					include dirname(__FILE__).'/templates/autoresponder.php';
					
					$automail = new PHPMailer();	
					$automail->isSMTP();                                      
					$automail->Host = $SMTP_host;                    
					$automail->SMTPAuth = true;                              
					$automail->Username = $SMTP_username;               
					$automail->Password = $SMTP_password;               
					$automail->SMTPSecure = $SMTP_protocol;                            
					$automail->Port = $SMTP_port;
					$automail->setFrom($receiver_email,$receiver_name);
					$automail->isHTML(true);                                 
					$automail->CharSet = "UTF-8";
					$automail->Encoding = "base64";
					$automail->Timeout = 200;
					$automail->ContentType = "text/html";
					$automail->AddAddress('donotreply@russotransport.com', 'New Applicant');
					$automail->Subject = "Thank you for contacting us";
					$automail->Body = $automessage;
					$automail->AltBody = "Use an HTML compatible email client";
					$automail->Send();	 
				}
				
				if($redirectForm == true){
					echo '<script>setTimeout(function () { window.location.replace("'.$redirectForm_url.'") }, 8000); </script>';
				}
							
			  	echo '<div class="alert notification alert-success">Your application has been sent successfully!</div>';
			} 
			else {
			  	echo '<div class="alert notification alert-error">Application not sent - server error occured!</div>'; 
			}
	}

?>