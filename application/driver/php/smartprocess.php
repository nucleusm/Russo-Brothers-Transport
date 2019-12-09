<!-- <?php//  error_reporting(-1); ?>
<?php//  ini_set('display_errors', true); ?> -->

<?php 
	







	if (!isset($_SESSION)) session_start(); 
	if(!$_POST) exit;
	
	include dirname(__FILE__).'/settings/settings.php';
	include dirname(__FILE__).'/functions/emailValidation.php';
	
	
	/* Current Date Year
	------------------------------- */		
	$currYear = date("Y");	
	

			

/*	---------------------------------------------------------------------------
	: Register all form field variables here
	--------------------------------------------------------------------------- */
	
/*	---------------------------------------------------------------------------
	: Connect to Database
	--------------------------------------------------------------------------- 
	$link = mysqli_connect("russo.driverbt.com", "russobrothers", "RussoBrothers1!", "russobrotherstransport");

	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
*/


include ('form-vars.php')


require('../../../fpdf/fpdf.php');
			$pdf = new FPDF('P','mm','A4');
			$pdf->AddPage();
			$pdf->SetFont('Times','B',10);
			$pdf->Cell(0,10,'APPLICATION PRIOR TO OPERATION OF MOTOR VEHICLES 49 CFR§ 391.21',0,0,'C');
			$pdf->Ln(10);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,'In compliance with 49 CFR § 391.21, the following application shall be completed and signed by Operator prior to the operation of commercial motor vehicles on behalf of Russo Brothers Transport Inc. a federally registered motor carrier with office at 8200 Berry Ave Suite 160 Sacramento, CA 95828 ');
			$pdf->MultiCell(0,5,"Operator is hereby notified, pursuant to 49 CFR § 391.23, that the information provided in this application will be used by of RUSSO BROTHERS TRANSPORT INC. to make inquiries to each State where Operator held or holds a commercial driver's license and to contact motor carriers for whom Operator rendered services in the past 10 years for the purpose of investigating Operator's safety performance history. Operator has the following rights regarding the information provided to of Russo Brothers Transport Inc. by other motor carriers:");
			$pdf->Ln(2);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,"(1)The right to review such information;");
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,"(2)The right to have errors in the information corrected by the motor carrier who provided it and re-sent to Russo Brothers Transport Inc. ");
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,"(3)The right to have a rebuttal statement attached to the alleged erroneous information, if the motor carrier and Operator cannot agree on the accuracy of the information. ");
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"1. OWNER'S IDENTIFICATION ");

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
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(42,10,'Physical Exam Expiration Date: ');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(26,10, $idPhysical);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(55,10,'Have you worked for this company before: ');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(50,10, $idRusso);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(27,10,'Date Worked From: ');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(41,10, $idWorkedFrom);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(24,10,'Date Worked To: ');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(50,10, $idWorkedTo);
			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(27,3,'Reason for Leaving:');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, $idWorkedReason);

			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"2. PREVIOUS ADDRESSES");
			$pdf->Ln(5);
			$pdf->SetFont('Times','',9);
			$pdf->Cell(10,10, 'List your addresses of residency for the past 3 years below:  ');
			$pdf->Ln(10);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(70,5,'Address',0,'L',0);
			$pdf->Cell(40,5,'City',0,'L',0);
			$pdf->Cell(40,5,'State',0,'L',0);
			$pdf->Cell(30,5,'ZIP Code',0,'L',0);
			$pdf->Ln(5);
			$pdf->SetFont('Times','',9);
			$pdf->SetFillColor(247,247,247);
			$pdf->Cell(70,5, $prevAddress[0],0,'L',0,true);
			$pdf->Cell(40,5, $prevCity[0],0,'L',0,true);
			$pdf->Cell(40,5, $prevState[0],0,'L',0,true);
			$pdf->Cell(30,5, $prevZip[0],0,'L',0,true);
			$pdf->Ln(5);
			
			$pdf->Cell(70,5, $prevAddress[1],0,'L',0);
			$pdf->Cell(40,5, $prevCity[1],0,'L',0);
			$pdf->Cell(40,5, $prevState[1],0,'L',0);
			$pdf->Cell(30,5, $prevZip[1],0,'L',0);
			$pdf->Ln(5);
			$pdf->Cell(70,5, $prevAddress[2],0,'L',0,true);
			$pdf->Cell(40,5, $prevCity[2],0,'L',0,true);
			$pdf->Cell(40,5, $prevState[2],0,'L',0,true);
			$pdf->Cell(30,5, $prevZip[2],0,'L',0,true);
			$pdf->Ln(5);
			$pdf->Cell(70,5, $prevAddress[3],0,'L',0);
			$pdf->Cell(40,5, $prevCity[3],0,'L',0);
			$pdf->Cell(40,5, $prevState[3],0,'L',0);
			$pdf->Cell(30,5, $prevZip[3],0,'L',0);
			$pdf->Ln(5);
			$pdf->Cell(70,5, $prevAddress[4],0,'L',0,true);
			$pdf->Cell(40,5, $prevCity[4],0,'L',0,true);
			$pdf->Cell(40,5, $prevState[4],0,'L',0,true);
			$pdf->Cell(30,5, $prevZip[4],0,'L',0,true);
			$pdf->Ln(5);
			$pdf->Cell(70,5, $prevAddress[5],0,'L',0);
			$pdf->Cell(40,5, $prevCity[5],0,'L',0);
			$pdf->Cell(40,5, $prevState[5],0,'L',0);
			$pdf->Cell(30,5, $prevZip[5],0,'L',0);
			$pdf->Ln(5);
			$pdf->Cell(70,5, $prevAddress[6],0,'L',0,true);
			$pdf->Cell(40,5, $prevCity[6],0,'L',0,true);
			$pdf->Cell(40,5, $prevState[6],0,'L',0,true);
			$pdf->Cell(30,5, $prevZip[6],0,'L',0,true);
			$pdf->Ln(5);
			$pdf->Cell(70,5, $prevAddress[7],0,'L',0);
			$pdf->Cell(40,5, $prevCity[7],0,'L',0);
			$pdf->Cell(40,5, $prevState[7],0,'L',0);
			$pdf->Cell(30,5, $prevZip[7],0,'L',0);
			$pdf->Ln(5);
			$pdf->Cell(70,5, $prevAddress[8],0,'L',0,true);
			$pdf->Cell(40,5, $prevCity[8],0,'L',0,true);
			$pdf->Cell(40,5, $prevState[8],0,'L',0,true);
			$pdf->Cell(30,5, $prevZip[8],0,'L',0,true);
			$pdf->Ln(5);
			$pdf->Cell(70,5, $prevAddress[9],0,'L',0);
			$pdf->Cell(40,5, $prevCity[9],0,'L',0);
			$pdf->Cell(40,5, $prevState[9],0,'L',0);
			$pdf->Cell(30,5, $prevZip[9],0,'L',0);

			$pdf->Ln(8);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"3. DRIVER'S LICENSE'S");
			$pdf->Ln(5);
			$pdf->SetFont('Times','',9);
			$pdf->Cell(10,10, 'List each unexpired Commercial Driver License or Commercial Learning Permit (CLP)that has been issued to you: ');
			$pdf->Ln(10);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(50,5,'CDL/CPL #',0,'L',0);
			$pdf->Cell(30,5,'State',0,'L',0);
			$pdf->Cell(30,5,'Expiration Date',0,'L',0);
			$pdf->Cell(15,5,'Class',0,'L',0);
			$pdf->Cell(55,5,'Endorsements',0,'L',0);
			$pdf->Ln(5);
			$pdf->SetFont('Times','',9);
			$pdf->Cell(50,5, $drCdl[0],0,'L',0,true);
			$pdf->Cell(30,5, $drState[0],0,'L',0,true);
			$pdf->Cell(30,5, $drDate[0],0,'L',0,true);
			$pdf->Cell(15,5, $drClass[0],0,'L',0,true);
			$pdf->Cell(55,5, $drEndorsement[0],0,'L',0,true);
			$pdf->Ln(5);
			
			$pdf->Cell(50,5, $drCdl[1],0,'L',0);
			$pdf->Cell(30,5, $drState[1],0,'L',0);
			$pdf->Cell(30,5, $drDate[1],0,'L',0);
			$pdf->Cell(15,5, $drClass[1],0,'L',0);
			$pdf->Cell(55,5, $drEndorsement[1],0,'L',0);
			$pdf->Ln(5);

			$pdf->Cell(50,5, $drCdl[2],0,'L',0,true);
			$pdf->Cell(30,5, $drState[2],0,'L',0,true);
			$pdf->Cell(30,5, $drDate[2],0,'L',0,true);
			$pdf->Cell(15,5, $drClass[2],0,'L',0,true);
			$pdf->Cell(55,5, $drEndorsement[2],0,'L',0,true);
			$pdf->Ln(5);
			
			$pdf->Cell(50,5, $drCdl[3],0,'L',0);
			$pdf->Cell(30,5, $drState[3],0,'L',0);
			$pdf->Cell(30,5, $drDate[3],0,'L',0);
			$pdf->Cell(15,5, $drClass[3],0,'L',0);
			$pdf->Cell(55,5, $drEndorsement[3],0,'L',0);
			$pdf->Ln(5);
			$pdf->Cell(50,5, $drCdl[4],0,'L',0,true);
			$pdf->Cell(30,5, $drState[4],0,'L',0,true);
			$pdf->Cell(30,5, $drDate[4],0,'L',0,true);
			$pdf->Cell(15,5, $drClass[4],0,'L',0,true);
			$pdf->Cell(55,5, $drEndorsement[4],0,'L',0,true);
			$pdf->Ln(5);
			
			$pdf->Cell(50,5, $drCdl[5],0,'L',0);
			$pdf->Cell(30,5, $drState[5],0,'L',0);
			$pdf->Cell(30,5, $drDate[5],0,'L',0);
			$pdf->Cell(15,5, $drClass[5],0,'L',0);
			$pdf->Cell(55,5, $drEndorsement[5],0,'L',0);
			$pdf->Ln(5);
			$pdf->Cell(50,5, $drCdl[6],0,'L',0,true);
			$pdf->Cell(30,5, $drState[6],0,'L',0,true);
			$pdf->Cell(30,5, $drDate[6],0,'L',0,true);
			$pdf->Cell(15,5, $drClass[6],0,'L',0,true);
			$pdf->Cell(55,5, $drEndorsement[6],0,'L',0,true);
			$pdf->Ln(5);
			
			$pdf->Cell(50,5, $drCdl[7],0,'L',0);
			$pdf->Cell(30,5, $drState[7],0,'L',0);
			$pdf->Cell(30,5, $drDate[7],0,'L',0);
			$pdf->Cell(15,5, $drClass[7],0,'L',0);
			$pdf->Cell(55,5, $drEndorsement[7],0,'L',0);
			$pdf->Ln(5);
			$pdf->Cell(50,5, $drCdl[8],0,'L',0,true);
			$pdf->Cell(30,5, $drState[8],0,'L',0,true);
			$pdf->Cell(30,5, $drDate[8],0,'L',0,true);
			$pdf->Cell(15,5, $drClass[8],0,'L',0,true);
			$pdf->Cell(55,5, $drEndorsement[8],0,'L',0,true);
			$pdf->Ln(5);
			
			$pdf->Cell(50,5, $drCdl[9],0,'L',0);
			$pdf->Cell(30,5, $drState[9],0,'L',0);
			$pdf->Cell(30,5, $drDate[9],0,'L',0);
			$pdf->Cell(15,5, $drClass[9],0,'L',0);
			$pdf->Cell(55,5, $drEndorsement[9],0,'L',0);
			
			$pdf->AddPage();

			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"4. DRIVING EXPERIENCE");
			$pdf->Ln(5);
			$pdf->SetFont('Times','',9);
			$pdf->Cell(10,10, 'State your previous experience in the operation of motor vehicles: ');
			$pdf->Ln(10);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(45,5,'Type of Equipment',0,'L',0);
			$pdf->Cell(45,5,'Date From',0,'L',0);
			$pdf->Cell(45,5,'Date To',0,'L',0);
			$pdf->Cell(45,5,'Apprx. # of Miles',0,'L',0);
			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(45,5, "Truck",0,'L',0,true);
			$pdf->SetFont('Times','',9);
			$pdf->Cell(45,5, $expTruckFrom,0,'L',0,true);
			$pdf->Cell(45,5, $expTruckTo,0,'L',0,true);
			$pdf->Cell(45,5, $expTruckMiles,0,'L',0,true);
			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(45,5, "Truck-Tractor",0,'L',0);
			$pdf->SetFont('Times','',9);
			$pdf->Cell(45,5, $expTractorFrom,0,'L',0);
			$pdf->Cell(45,5, $expTractorTo,0,'L',0);
			$pdf->Cell(45,5, $expTractorMiles,0,'L',0);
			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(45,5, "Semitrailer Full Trailer",0,'L',0,true);
			$pdf->SetFont('Times','',9);
			$pdf->Cell(45,5, $expTrailerFrom,0,'L',0,true);
			$pdf->Cell(45,5, $expTrailerTo,0,'L',0,true);
			$pdf->Cell(45,5, $expTrailerMiles,0,'L',0,true);
			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(45,5, "Others",0,'L',0);
			$pdf->SetFont('Times','',9);
			$pdf->Cell(45,5, $expOtherFrom,0,'L',0);
			$pdf->Cell(45,5, $expOtherTo,0,'L',0);
			$pdf->Cell(45,5, $expOtherMiles,0,'L',0);
			

			$pdf->Ln(8);
			$pdf->SetFont('Times','',9);
			$pdf->Cell(10,10, 'Select States operated in for the last 5 years:');
			$pdf->Ln(8);
			$pdf->Cell(32,5,'Alabama',0,'L',0);
			if($alabama == true)
			$checkAlabama = "X"; else $checkAlabama = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkAlabama, 'LTRB');
			$pdf->SetFont('Times','',9);
	
			$pdf->Cell(32,5,'Hawaii',0,'L',0);
			if($hawaii == true)
			$checkHawaii = "X"; else $checkHawaii = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkHawaii, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Massachusetts',0,'L',0);
			if($massachusetts == true)
			$checkMassachusetts = "X"; else $checkMassachusetts = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkMassachusetts, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'New Mexico',0,'L',0);
			if($newmexico == true)
			$checkNewMexico = "X"; else $checkNewMexico = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkNewMexico, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'South Dakota',0,'L',0);
			if($southdakota == true)
			$checkSouthDakota = "X"; else $checkSouthDakota = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkSouthDakota, 'LTRB');
			$pdf->SetFont('Times','',9);

			


			$pdf->Ln(5);
			$pdf->Cell(32,5, 'Alaska',0,'L',0);
			if($alaska == true)
			$checkAlaska = "X"; else $checkAlaska = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkAlaska, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5, 'Illinois',0,'L',0);
			if($illinois == true)
			$checkIllinois = "X"; else $checkIllinois = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkIllinois, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5, 'Michigan',0,'L',0);
			if($michigan == true)
			$checkMichigan = "X"; else $checkMichigan = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkMichigan, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'New York',0,'L',0);
			if($newyork == true)
			$checkNewYork = "X"; else $checkNewYork = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkNewYork, 'LTRB');
			$pdf->SetFont('Times','',9);
			
			$pdf->Cell(32,5,'Tennessee',0,'L',0);
			if($tennessee == true)
			$checkTennessee = "X"; else $checkTennessee = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkTennessee, 'LTRB');
			$pdf->SetFont('Times','',9);



			$pdf->Ln(5);
			$pdf->Cell(32,5,'Arizona',0,'L',0);
			if($arizona == true)
			$checkArizona = "X"; else $checkArizona = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkArizona, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Idaho',0,'L',0);
			if($idaho == true)
			$checkIdaho = "X"; else $checkIdaho = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkIdaho, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Minnesota',0,'L',0);
			if($minnesota == true)
			$checkMinnesota = "X"; else $checkMinnesota = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkMinnesota, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'North Carolina',0,'L',0);
			if($northcarolina == true)
			$checkNorthCarolina = "X"; else $checkNorthCarolina = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkNorthCarolina, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Texas',0,'L',0);
			if($texas == true)
			$checkTexas = "X"; else $checkTexas = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkTexas, 'LTRB');
			$pdf->SetFont('Times','',9);

			


			$pdf->Ln(5);
			$pdf->Cell(32,5,'Arkansas',0,'L',0);
			if($arkansas == true)
			$checkArkansas = "X"; else $checkArkansas = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkArkansas, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Indiana',0,'L',0);
			if($indiana == true)
			$checkIndiana = "X"; else $checkIndiana = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkIndiana, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Mississippi',0,'L',0);
			if($mississippi == true)
			$checkMississippi = "X"; else $checkMississippi = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkMississippi, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'North Dakota',0,'L',0);
			if($northdakota == true)
			$checkNorthDakota = "X"; else $checkNorthDakota = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkNorthDakota, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Utah',0,'L',0);
			if($utah == true)
			$checkUrah = "X"; else $checkUrah = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkUrah, 'LTRB');
			$pdf->SetFont('Times','',9);

			


			$pdf->Ln(5);
			$pdf->Cell(32,5,'California',0,'L',0);
			if($california == true)
			$checkCalifornia = "X"; else $checkCalifornia = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCalifornia, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Iowa',0,'L',0);
			if($iowa == true)
			$checkIowa = "X"; else $checkIowa = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkIowa, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Missouri',0,'L',0);
			if($missouri == true)
			$checkMissouri = "X"; else $checkMissouri = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkMissouri, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Ohio',0,'L',0);
			if($ohio == true)
			$checkOhio = "X"; else $checkOhio = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkOhio, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Vermont',0,'L',0);
			if($vermont == true)
			$checkVermont = "X"; else $checkVermont = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkVermont, 'LTRB');
			$pdf->SetFont('Times','',9);

			


			$pdf->Ln(5);
			$pdf->Cell(32,5,'Colorado',0,'L',0);
			if($colorado == true)
			$checkColorado = "X"; else $checkColorado = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkColorado, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Kansas',0,'L',0);
			if($kansas == true)
			$checkKansas = "X"; else $checkKansas = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkKansas, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Montana',0,'L',0);
			if($montana == true)
			$checkMontana = "X"; else $checkMontana = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkMontana, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Oklahoma',0,'L',0);
			if($oklahoma == true)
			$checkOklahoma = "X"; else $checkOklahoma = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkOklahoma, 'LTRB');
			$pdf->SetFont('Times','',9);
			
			$pdf->Cell(32,5,'Virginia',0,'L',0);
			if($virginia == true)
			$checkVirginia = "X"; else $checkVirginia = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkVirginia, 'LTRB');
			$pdf->SetFont('Times','',9);



			$pdf->Ln(5);
			$pdf->Cell(32,5, 'Connecticut',0,'L',0);
			if($connecticut == true)
			$checkConnecticut = "X"; else $checkConnecticut = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkConnecticut, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5, 'Kentucky',0,'L',0);
			if($kentucky == true)
			$checkKentucky = "X"; else $checkKentucky = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkKentucky, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Nebraska',0,'L',0);
			if($nebraska == true)
			$checkNebraska = "X"; else $checkNebraska = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkNebraska, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Oregon',0,'L',0);
			if($oregon == true)
			$checkOregon = "X"; else $checkOregon = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkOregon, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Washington',0,'L',0);
			if($washington == true)
			$checkWashington = "X"; else $checkWashington = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkWashington, 'LTRB');
			$pdf->SetFont('Times','',9);



			$pdf->Ln(5);
			$pdf->Cell(32,5,'Delaware',0,'L',0);
			if($delaware == true)
			$checkDelaware = "X"; else $checkDelaware = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkDelaware, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Louisiana',0,'L',0);
			if($louisiana == true)
			$checkLouisiana = "X"; else $checkLouisiana = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkLouisiana, 'LTRB');
			$pdf->SetFont('Times','',9);
			
			$pdf->Cell(32,5,'Nevada',0,'L',0);
			if($nevada == true)
			$checkNevada = "X"; else $checkNevada = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkNevada, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Pennsylvania',0,'L',0);
			if($pennsylvania == true)
			$checkPennsylvania = "X"; else $checkPennsylvania = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkPennsylvania, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'West Virginia',0,'L',0);
			if($westvirginia == true)
			$checkWestVirginia = "X"; else $checkWestVirginia = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkWestVirginia, 'LTRB');
			$pdf->SetFont('Times','',9);



			$pdf->Ln(5);
			$pdf->Cell(32,5,'Florida',0,'L',0);
			if($florida == true)
			$checkFlorida = "X"; else $checkFlorida = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkFlorida, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Maine',0,'L',0);
			if($maine == true)
			$checkMaine = "X"; else $checkMaine = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkMaine, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'New Hampshire',0,'L',0);
			if($newhampshire == true)
			$checkNewHampshire = "X"; else $checkNewHampshire = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkNewHampshire, 'LTRB');
			$pdf->SetFont('Times','',9);
			
			$pdf->Cell(32,5,'Rhode Island',0,'L',0);
			if($rhodeisland == true)
			$checkRhodeIsland = "X"; else $checkRhodeIsland = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkRhodeIsland, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Wisconsin',0,'L',0);
			if($wisconsin == true)
			$checkWisconsin = "X"; else $checkWisconsin = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkWisconsin, 'LTRB');
			$pdf->SetFont('Times','',9);



			$pdf->Ln(5);
			$pdf->Cell(32,5,'Georgia',0,'L',0);
			if($georgia == true)
			$checkGeorgia = "X"; else $checkGeorgia = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkGeorgia, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Maryland',0,'L',0);
			if($maryland == true)
			$checkMaryland = "X"; else $checkMaryland = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkMaryland, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'New Jersey',0,'L',0);
			if($newjersey == true)
			$checkNewJersey = "X"; else $checkNewJersey = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkNewJersey, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'South Carolina',0,'L',0);
			if($southcarolina == true)
			$checkSouthCarolina = "X"; else $checkSouthCarolina = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkSouthCarolina, 'LTRB');
			$pdf->SetFont('Times','',9);

			$pdf->Cell(32,5,'Wyoming',0,'L',0);
			if($wyoming == true)
			$checkWyoming = "X"; else $checkWyoming = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkWyoming, 'LTRB');
			$pdf->SetFont('Times','',9);


			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(75,10,'List driving courses, if any (PTD/DDC, Haz Mat, etc.) :');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(10,10,$expDrivingCourses);
			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(44,10,'List Safe Driving awards, if any:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(10,10,$expSafeDriving);



			$pdf->Ln(8);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"5. ACCIDENT RECORD");
			$pdf->Ln(5);
			$pdf->SetFont('Times','',9);
			$pdf->Cell(10,10, 'List of all motor vehicle accidents in which you were involved during the past 3 years:');

			$pdf->Ln(10);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(60,5,'Nature of Accident',0,'L',0);
			$pdf->Cell(60,5,'Location',0,'L',0);
			$pdf->Cell(20,5,'Date',0,'L',0);
			$pdf->Cell(20,5,'Fatalities',0,'L',0);
			$pdf->Cell(20,5,'Injuries',0,'L',0);
			$pdf->Ln(5);

			$pdf->SetFont('Times','',9);
			$pdf->Cell(60,5, $accidentNature[0],0,'L',0);
			$pdf->Cell(60,5, $accidentLocation[0],0,'L',0);
			$pdf->Cell(20,5, $accidentDate[0],0,'L',0);
			$pdf->Cell(20,5, $accidentFatalities0,0,'L',0);
			$pdf->Cell(20,5, $accidentInjuries0,0,'L',0);

			$pdf->Cell(60,5, $accidentNature[1],1,'L',0,true);
			$pdf->Cell(60,5, $accidentLocation[1],1,'L',0,true);
			$pdf->Cell(20,5, $accidentDate[1],1,'L',0,true);
			$pdf->Cell(20,5, $accidentFatalities1,1,'L',0,true);
			$pdf->Cell(20,5, $accidentInjuries1,1,'L',0,true);
			$pdf->Ln(5);

			$pdf->Cell(60,5, $accidentNature[2],0,'L',0);
			$pdf->Cell(60,5, $accidentLocation[2],0,'L',0);
			$pdf->Cell(20,5, $accidentDate[2],0,'L',0);
			$pdf->Cell(20,5, $accidentFatalities2,0,'L',0);
			$pdf->Cell(20,5, $accidentInjuries2,0,'L',0);
			$pdf->Ln(5);

			$pdf->Cell(60,5, $accidentNature[3],0,'L',0,true);
			$pdf->Cell(60,5, $accidentLocation[3],0,'L',0,true);
			$pdf->Cell(20,5, $accidentDate[3],0,'L',0,true);
			$pdf->Cell(20,5, $accidentFatalities3,0,'L',0,true);
			$pdf->Cell(20,5, $accidentInjuries3,0,'L',0,true);
			$pdf->Ln(5);

			$pdf->Cell(60,5, $accidentNature[4],0,'L',0);
			$pdf->Cell(60,5, $accidentLocation[4],0,'L',0);
			$pdf->Cell(20,5, $accidentDate[4],0,'L',0);
			$pdf->Cell(20,5, $accidentFatalities4,0,'L',0);
			$pdf->Cell(20,5, $accidentInjuries4,0,'L',0);
			$pdf->Ln(5);

			$pdf->Cell(60,5, $accidentNature[5],0,'L',0,true);
			$pdf->Cell(60,5, $accidentLocation[5],0,'L',0,true);
			$pdf->Cell(20,5, $accidentDate[5],0,'L',0,true);
			$pdf->Cell(20,5, $accidentFatalities5,0,'L',0,true);
			$pdf->Cell(20,5, $accidentInjuries5,0,'L',0,true);
			$pdf->Ln(5);

			$pdf->Cell(60,5, $accidentNature[6],0,'L',0);
			$pdf->Cell(60,5, $accidentLocation[6],0,'L',0);
			$pdf->Cell(20,5, $accidentDate[6],0,'L',0);
			$pdf->Cell(20,5, $accidentFatalities6,0,'L',0);
			$pdf->Cell(20,5, $accidentInjuries6,0,'L',0);
			$pdf->Ln(5);

			$pdf->Cell(60,5, $accidentNature[7],0,'L',0,true);
			$pdf->Cell(60,5, $accidentLocation[7],0,'L',0,true);
			$pdf->Cell(20,5, $accidentDate[7],0,'L',0,true);
			$pdf->Cell(20,5, $accidentFatalities7,0,'L',0,true);
			$pdf->Cell(20,5, $accidentInjuries7,0,'L',0,true);
			$pdf->Ln(5);

			$pdf->Cell(60,5, $accidentNature[8],0,'L',0);
			$pdf->Cell(60,5, $accidentLocation[8],0,'L',0);
			$pdf->Cell(20,5, $accidentDate[8],0,'L',0);
			$pdf->Cell(20,5, $accidentFatalities8,0,'L',0);
			$pdf->Cell(20,5, $accidentInjuries8,0,'L',0);
			$pdf->Ln(5);

			$pdf->Cell(60,5, $accidentNature[9],0,'L',0,true);
			$pdf->Cell(60,5, $accidentLocation[9],0,'L',0,true);
			$pdf->Cell(20,5, $accidentDate[9],0,'L',0,true);
			$pdf->Cell(20,5, $accidentFatalities9,0,'L',0,true);
			$pdf->Cell(20,5, $accidentInjuries9,0,'L',0,true);



			$pdf->Ln(8);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"6. RECORD OF VIOLATIONS");
			$pdf->Ln(8);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5, 'List all violations of motor vehicle laws (other those involving only parking) of which you were convicted or forfeited bond or collateral during the past 3 years:');
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(40,5,'Offense',0,'L',0);
			$pdf->Cell(50,5,'Location',0,'L',0);
			$pdf->Cell(30,5,'Date of Conviction',0,'L',0);
			$pdf->Cell(30,5,'Vehicle Operated',0,'L',0);
			$pdf->Cell(30,5,'Penalty',0,'L',0);
			$pdf->Ln(5);
			$pdf->SetFont('Times','',9);

			$pdf->Cell(40,5, $violationOffense[0],0,'L',0,true);
			$pdf->Cell(50,5, $violationLocation[0],0,'L',0,true);
			$pdf->Cell(30,5, $violationDate[0],0,'L',0,true);
			$pdf->Cell(30,5, $violationOperated[0],0,'L',0,true);
			$pdf->Cell(30,5, $violationPenalty[0],0,'L',0,true);
			$pdf->Ln(5);
			
			$pdf->Cell(40,5, $violationOffense[1],0,'L',0);
			$pdf->Cell(50,5, $violationLocation[1],0,'L',0);
			$pdf->Cell(30,5, $violationDate[1],0,'L',0);
			$pdf->Cell(30,5, $violationOperated[1],0,'L',0);
			$pdf->Cell(30,5, $violationPenalty[1],0,'L',0);
			$pdf->Ln(5);

			$pdf->Cell(40,5, $violationOffense[2],0,'L',0,true);
			$pdf->Cell(50,5, $violationLocation[2],0,'L',0,true);
			$pdf->Cell(30,5, $violationDate[2],0,'L',0,true);
			$pdf->Cell(30,5, $violationOperated[2],0,'L',0,true);
			$pdf->Cell(30,5, $violationPenalty[2],0,'L',0,true);
			$pdf->Ln(5);
			
			$pdf->Cell(40,5, $violationOffense[3],0,'L',0);
			$pdf->Cell(50,5, $violationLocation[3],0,'L',0);
			$pdf->Cell(30,5, $violationDate[3],0,'L',0);
			$pdf->Cell(30,5, $violationOperated[3],0,'L',0);
			$pdf->Cell(30,5, $violationPenalty[3],0,'L',0);
			$pdf->Ln(5);
			$pdf->Cell(40,5, $violationOffense[4],0,'L',0,true);
			$pdf->Cell(50,5, $violationLocation[4],0,'L',0,true);
			$pdf->Cell(30,5, $violationDate[4],0,'L',0,true);
			$pdf->Cell(30,5, $violationOperated[4],0,'L',0,true);
			$pdf->Cell(30,5, $violationPenalty[4],0,'L',0,true);
			$pdf->Ln(5);
			
			$pdf->Cell(40,5, $violationOffense[5],0,'L',0);
			$pdf->Cell(50,5, $violationLocation[5],0,'L',0);
			$pdf->Cell(30,5, $violationDate[5],0,'L',0);
			$pdf->Cell(30,5, $violationOperated[5],0,'L',0);
			$pdf->Cell(30,5, $violationPenalty[5],0,'L',0);
			$pdf->Ln(5);

			$pdf->Cell(40,5, $violationOffense[6],0,'L',0,true);
			$pdf->Cell(50,5, $violationLocation[6],0,'L',0,true);
			$pdf->Cell(30,5, $violationDate[6],0,'L',0,true);
			$pdf->Cell(30,5, $violationOperated[6],0,'L',0,true);
			$pdf->Cell(30,5, $violationPenalty[6],0,'L',0,true);
			$pdf->Ln(5);
			
			$pdf->Cell(40,5, $violationOffense[7],0,'L',0);
			$pdf->Cell(50,5, $violationLocation[7],0,'L',0);
			$pdf->Cell(30,5, $violationDate[7],0,'L',0);
			$pdf->Cell(30,5, $violationOperated[7],0,'L',0);
			$pdf->Cell(30,5, $violationPenalty[7],0,'L',0);
			$pdf->Ln(5);
			$pdf->Cell(40,5, $violationOffense[8],0,'L',0,true);
			$pdf->Cell(50,5, $violationLocation[8],0,'L',0,true);
			$pdf->Cell(30,5, $violationDate[8],0,'L',0,true);
			$pdf->Cell(30,5, $violationOperated[8],0,'L',0,true);
			$pdf->Cell(30,5, $violationPenalty[8],0,'L',0,true);
			$pdf->Ln(5);
			
			$pdf->Cell(40,5, $violationOffense[9],0,'L',0);
			$pdf->Cell(50,5, $violationLocation[9],0,'L',0);
			$pdf->Cell(30,5, $violationDate[9],0,'L',0);
			$pdf->Cell(30,5, $violationOperated[9],0,'L',0);
			$pdf->Cell(30,5, $violationPenalty[9],0,'L',0);
			$pdf->Ln(5);


			$pdf->Ln(8);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"7. DENIAL, REVOCATION OR SUSPENSION OF DRIVER'S LICENSE/PERMIT ");
			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(125,10,'Have you ever been denied a license, permit or privilege to operate a commercial motor vehicle?');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(5,10, $drsDenied);
			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Explain:');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5, $drsDeniedDetail);

			$pdf->SetFont('Times','I',9);
			$pdf->Cell(142,10,'Has you ever had a license, permit or privilege to operate a commercial motor vehicle suspended or revoked?');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(5,10, $drsSuspended);
			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Explain:');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5, $drsSuspendedDetail);

			$pdf->SetFont('Times','I',9);
			$pdf->Cell(134,10,'Is there any reason you might be unable to perform the functions of the job for which you have applied?');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(5,10, $drsUnable);
			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Explain:');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5, $drsUnableDetail);

			$pdf->SetFont('Times','I',9);
			$pdf->Cell(90,10,'Are you taking any medications which will limit your ability to drive?');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(5,10, $drsMedication);
			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Explain:');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5, $drsMedicationDetail);


			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"8. PREVIOUS RESULTS FOR CONTROLLED SUBSTANCES TESTS");
			$pdf->Ln(8);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,"CFR Part 40.25(j) requires the employer to ask any applicant, whether he or she has tested positive, or refused to test, on any preemployment drug or alcohol test administered by an employer to which the employee applied for, but did not obtain, safety-sensitive transportation work covered by DOT agency drug and alcohol rules during the past two years. If the potential employee admits that he or she had a positive test or refusal to test, we must not use the employee to perform safety- sensitive functions, until and unless the potential employee provides documentation of successful completion of the return-to-duty process (See Section 40.25(b)(5) and (e)).");
			$pdf->Ln(2);
			$pdf->MultiCell(0,5,"In the past two years, have you been:");
			$pdf->Ln(2);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(125,5,'A. Obtained verified positive results for controlled substance tests required by other companies?');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(5,5, $csVerified);
			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(107,5,'B. Obtained alcohol tests results indicating 0.04 or higher alcohol concentration?');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(5,5, $csAlcohol);
			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(120,5,'C. Refused to undergo alcohol or controlled substance testing required by other companies?');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(5,5, $csRefused);
			$pdf->Ln(8);
			$pdf->MultiCell(0,5,'If you answered "yes" to any of the questions above, provide the following information about the Substance Abuse Professional (SAP) that you consulted:');
			$pdf->Ln(2);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(20,5,'Name of SAP:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(80,5, $csName);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,'Phone Number:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $csPhone);
			
			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Address:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(88,5, $csAddress);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(18,5,'Date Visited:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $csDate);




			$pdf->Ln(8);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"9. PREVIOUS CONTACTS WITH MOTOR CARRIERS ");
			$pdf->Ln(8);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,"Give a complete record of all employment for the past three (3) years, including any unemployment or self-employment and all commercial driving experience for the past ten (10) years.");





			$pdf->SetFont('Times','B',10);
			$pdf->Cell(0,10,'Employer #1',0,0);

			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(30,5,"Motor Carrier's Name:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $carrierName[0]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Address:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierAddress[0]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(10,5,"Phone:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(90,5, $carrierPhone[0]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(7,5,'Fax:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierFax[0]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Date From:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierDateFrom[0]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Date To:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierDateTo[0]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(28,5,"Reason for Leaving:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierReason[0]);

			$pdf->Ln(8);
			if($carrierSubject[0] == "Yes")
			$checkCarrierSubject[0] = "X"; else $checkCarrierSubject[0] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierSubject[0], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Were you subject to the FMCSRs while employed here?',0,'L',0);

			$pdf->Ln(2);
			if($carrierDesignated[0] == "Yes")
			$checkCarrierDesignated[0] = "X"; else $checkCarrierDesignated[0] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierDesignated[1], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Was your job designated as a safety-sensitive function in any DOT-Regulated mode subject to the drug and alcohol testing requirement of 49 CFR Part 40?',0,'L',0);
			$pdf->Ln(1);

			$pdf->SetFont('Times','B',10);
			$pdf->Cell(0,10,'Employer #2',0,0);

			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(30,5,"Motor Carrier's Name:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $carrierName[1]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Address:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierAddress[1]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(10,5,"Phone:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(90,5, $carrierPhone[1]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(7,5,'Fax:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierFax[1]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Date From:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierDateFrom[1]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Date To:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierDateTo[1]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(28,5,"Reason for Leaving:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierReason[1]);

			$pdf->Ln(8);
			if($carrierSubject[1] == "Yes")
			$checkCarrierSubject[1] = "X"; else $checkCarrierSubject[1] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierSubject[1], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Were you subject to the FMCSRs while employed here?',0,'L',0);

			$pdf->Ln(2);
			if($carrierDesignated[1] == "Yes")
			$checkCarrierDesignated[1] = "X"; else $checkCarrierDesignated[1] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierDesignated[1], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Was your job designated as a safety-sensitive function in any DOT-Regulated mode subject to the drug and alcohol testing requirement of 49 CFR Part 40?',0,'L',0);
			$pdf->Ln(1);


			$pdf->SetFont('Times','B',10);
			$pdf->Cell(0,10,'Employer #3',0,0);

			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(30,5,"Motor Carrier's Name:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $carrierName[2]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Address:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierAddress[2]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(10,5,"Phone:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(90,5, $carrierPhone[2]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(7,5,'Fax:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierFax[2]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Date From:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierDateFrom[2]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Date To:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierDateTo[2]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(28,5,"Reason for Leaving:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierReason[2]);

			$pdf->Ln(8);
			if($carrierSubject[2] == "Yes")
			$checkCarrierSubject[2] = "X"; else $checkCarrierSubject[2] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierSubject[2], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Were you subject to the FMCSRs while employed here?',0,'L',0);

			$pdf->Ln(2);
			if($carrierDesignated[2] == "Yes")
			$checkCarrierDesignated[2] = "X"; else $checkCarrierDesignated[2] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierDesignated[2], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Was your job designated as a safety-sensitive function in any DOT-Regulated mode subject to the drug and alcohol testing requirement of 49 CFR Part 40?',0,'L',0);
			$pdf->Ln(1);



			$pdf->SetFont('Times','B',10);
			$pdf->Cell(0,10,'Employer #4',0,0);

			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(30,5,"Motor Carrier's Name:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $carrierName[3]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Address:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierAddress[3]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(10,5,"Phone:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(90,5, $carrierPhone[3]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(7,5,'Fax:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierFax[3]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Date From:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierDateFrom[3]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Date To:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierDateTo[3]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(28,5,"Reason for Leaving:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierReason[3]);

			$pdf->Ln(8);
			if($carrierSubject[3] == "Yes")
			$checkCarrierSubject[3] = "X"; else $checkCarrierSubject[3] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierSubject[3], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Were you subject to the FMCSRs while employed here?',0,'L',0);

			$pdf->Ln(2);
			if($carrierDesignated[3] == "Yes")
			$checkCarrierDesignated[3] = "X"; else $checkCarrierDesignated[3] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierDesignated[3], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Was your job designated as a safety-sensitive function in any DOT-Regulated mode subject to the drug and alcohol testing requirement of 49 CFR Part 40?',0,'L',0);
			$pdf->Ln(1);


			$pdf->SetFont('Times','B',10);
			$pdf->Cell(0,10,'Employer #5',0,0);

			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(30,5,"Motor Carrier's Name:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $carrierName[4]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Address:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierAddress[4]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(10,5,"Phone:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(90,5, $carrierPhone[4]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(7,5,'Fax:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierFax[4]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Date From:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierDateFrom[4]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Date To:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierDateTo[4]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(28,5,"Reason for Leaving:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierReason[4]);

			$pdf->Ln(8);
			if($carrierSubject[4] == "Yes")
			$checkCarrierSubject[4] = "X"; else $checkCarrierSubject[4] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierSubject[4], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Were you subject to the FMCSRs while employed here?',0,'L',0);

			$pdf->Ln(2);
			if($carrierDesignated[4] == "Yes")
			$checkCarrierDesignated[4] = "X"; else $checkCarrierDesignated[4] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierDesignated[4], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Was your job designated as a safety-sensitive function in any DOT-Regulated mode subject to the drug and alcohol testing requirement of 49 CFR Part 40?',0,'L',0);
			$pdf->Ln(1);


			$pdf->SetFont('Times','B',10);
			$pdf->Cell(0,10,'Employer #6',0,0);

			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(30,5,"Motor Carrier's Name:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $carrierName[5]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Address:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierAddress[5]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(10,5,"Phone:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(90,5, $carrierPhone[5]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(7,5,'Fax:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierFax[5]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Date From:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierDateFrom[5]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Date To:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierDateTo[5]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(28,5,"Reason for Leaving:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierReason[5]);

			$pdf->Ln(8);
			if($carrierSubject[5] == "Yes")
			$checkCarrierSubject[5] = "X"; else $checkCarrierSubject[5] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierSubject[5], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Were you subject to the FMCSRs while employed here?',0,'L',0);

			$pdf->Ln(2);
			if($carrierDesignated[5] == "Yes")
			$checkCarrierDesignated[5] = "X"; else $checkCarrierDesignated[5] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierDesignated[5], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Was your job designated as a safety-sensitive function in any DOT-Regulated mode subject to the drug and alcohol testing requirement of 49 CFR Part 40?',0,'L',0);
			$pdf->Ln(1);


			$pdf->SetFont('Times','B',10);
			$pdf->Cell(0,10,'Employer #7',0,0);

			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(30,5,"Motor Carrier's Name:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $carrierName[6]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Address:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierAddress[6]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(10,5,"Phone:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(90,5, $carrierPhone[6]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(7,5,'Fax:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierFax[6]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Date From:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierDateFrom[6]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Date To:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierDateTo[6]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(28,5,"Reason for Leaving:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierReason[6]);

			$pdf->Ln(8);
			if($carrierSubject[6] == "Yes")
			$checkCarrierSubject[6] = "X"; else $checkCarrierSubject[6] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierSubject[6], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Were you subject to the FMCSRs while employed here?',0,'L',0);

			$pdf->Ln(2);
			if($carrierDesignated[6] == "Yes")
			$checkCarrierDesignated[6] = "X"; else $checkCarrierDesignated[6] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierDesignated[6], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Was your job designated as a safety-sensitive function in any DOT-Regulated mode subject to the drug and alcohol testing requirement of 49 CFR Part 40?',0,'L',0);
			$pdf->Ln(1);


			$pdf->SetFont('Times','B',10);
			$pdf->Cell(0,10,'Employer #8',0,0);

			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(30,5,"Motor Carrier's Name:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $carrierName[7]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Address:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierAddress[7]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(10,5,"Phone:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(90,5, $carrierPhone[7]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(7,5,'Fax:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierFax[7]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Date From:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierDateFrom[7]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Date To:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierDateTo[7]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(28,5,"Reason for Leaving:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierReason[7]);

			$pdf->Ln(8);
			if($carrierSubject[7] == "Yes")
			$checkCarrierSubject[7] = "X"; else $checkCarrierSubject[7] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierSubject[7], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Were you subject to the FMCSRs while employed here?',0,'L',0);

			$pdf->Ln(2);
			if($carrierDesignated[7] == "Yes")
			$checkCarrierDesignated[7] = "X"; else $checkCarrierDesignated[7] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierDesignated[7], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Was your job designated as a safety-sensitive function in any DOT-Regulated mode subject to the drug and alcohol testing requirement of 49 CFR Part 40?',0,'L',0);
			$pdf->Ln(1);


			$pdf->SetFont('Times','B',10);
			$pdf->Cell(0,10,'Employer #9',0,0);

			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(30,5,"Motor Carrier's Name:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $carrierName[8]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Address:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierAddress[8]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(10,5,"Phone:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(90,5, $carrierPhone[8]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(7,5,'Fax:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierFax[8]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Date From:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierDateFrom[8]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Date To:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierDateTo[8]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(28,5,"Reason for Leaving:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierReason[8]);

			$pdf->Ln(8);
			if($carrierSubject[8] == "Yes")
			$checkCarrierSubject[8] = "X"; else $checkCarrierSubject[8] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierSubject[8], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Were you subject to the FMCSRs while employed here?',0,'L',0);

			$pdf->Ln(2);
			if($carrierDesignated[8] == "Yes")
			$checkCarrierDesignated[8] = "X"; else $checkCarrierDesignated[8] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierDesignated[8], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Was your job designated as a safety-sensitive function in any DOT-Regulated mode subject to the drug and alcohol testing requirement of 49 CFR Part 40?',0,'L',0);
			$pdf->Ln(1);


			$pdf->SetFont('Times','B',10);
			$pdf->Cell(0,10,'Employer #10',0,0);

			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(30,5,"Motor Carrier's Name:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $carrierName[9]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Address:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierAddress[9]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(10,5,"Phone:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(90,5, $carrierPhone[9]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(7,5,'Fax:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierFax[9]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Date From:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierDateFrom[9]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Date To:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $carrierDateTo[9]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(28,5,"Reason for Leaving:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(83,5, $carrierReason[9]);

			$pdf->Ln(8);
			if($carrierSubject[9] == "Yes")
			$checkCarrierSubject[9] = "X"; else $checkCarrierSubject[9] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierSubject[9], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Were you subject to the FMCSRs while employed here?',0,'L',0);

			$pdf->Ln(2);
			if($carrierDesignated[9] == "Yes")
			$checkCarrierDesignated[9] = "X"; else $checkCarrierDesignated[9] = "";
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(4,4,$checkCarrierDesignated[9], 'LTRB');
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,4, 'Was your job designated as a safety-sensitive function in any DOT-Regulated mode subject to the drug and alcohol testing requirement of 49 CFR Part 40?',0,'L',0);
			$pdf->Ln(1);


			


			$pdf->AddPage();
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"10. PERSONAL REFERENCES");
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

			$pdf->AddPage();
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"11. CERTIFICATION");
			$pdf->Ln(8);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,"391.23(i)(1) The prospective employer must expressly notify drivers with Department of Transportation regulated employment during the preceding three years-via the application form or other written document prior to any hiring decision-that he or she has the following rights regarding the investigative information that will be provided to the prospective employer pursuant to paragraphs (d) and (e) of this section:");
			$pdf->MultiCell(0,5,"(i)(1)(i) The right to review information provided by previous employers;");
			$pdf->MultiCell(0,5,"(i)(1)(ii) The right to have errors in the information corrected by the previous employer and for that previous employer to re-send the corrected information to the prospective employer;");
			$pdf->MultiCell(0,5,"(i)(1)(iii) The right to have a rebuttal statement attached to the alleged erroneous information, if the previous employer and the driver cannot agree on the accuracy of the information.");
			$pdf->MultiCell(0,5,"(i)(2) Drivers who have previous Department of Transportation regulated employment history in the preceding three years, and wish to review previous employer-provided investigative information must submit a written request to the prospective employer, which may be done at any time, including when applying, or as late as 30 days after being employed or being notified of denial of employment. The prospective employer must provide this information to the applicant within five (5) business days of receiving the written request. If the prospective employer has not yet received the requested information from the previous employer(s), then the five-business day’s deadline will begin when the prospective employer receives the requested safety performance history information. If the driver has not arranged to pick up or receive the requested records within thirty (30) days of the prospective employer making them available, the prospective motor carrier may consider the driver to have waived his/her request to review the records. Visit www.fmcsa.dot.gov to review the regulations.");
			$pdf->Ln(5);
			$pdf->MultiCell(0,5,"This certifies that this application was completed by me, and that all entries on it and information in it are true and complete to the best of my knowledge.");

			$pdf->Ln(120);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Full Name:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $certificationName);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(12,5,'Date:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $certificationDate);


			$pdf->AddPage();
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"AUTHORIZATION TO RELEASE DRUG AND ALCOHOL TESTING INFORMATION ");
			$pdf->Ln(8);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,"Pursuant to 49 CFR §40.25, I hereby authorize the companies listed below to furnish to RUSSO BROTHERS TRANSPORT INC, with address at 8200 Berry Ave Suite 160 Sacramento, CA 95828, the following information concerning controlled substances and alcohol tests I have been involved during the last 3 years: (1) whether I had alcohol tests with a result of 0.04 or higher alcohol concentration, the dates of such test(s) and the alcohol concentration then recorded; (2) whether I had verified positive drug tests, the date of such test(s) and the controlled substance(s) involved; (3) whether I have refused to be tested (including verified adulterated or substituted drug test results) and the dates of refusal; (4) whether I committed other violations of DOT drug and alcohol testing regulations and the dates and circumstances of each violation. I further authorize the companies listed below to furnish the name and phone number of any Substance Abuse Professional who evaluated me during the past three years, all supporting documentation and follow-up tests in accordance with 49 CFR §40.25(b)(5).");


			$pdf->Ln(1);


			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"Contact #1");
			$pdf->Ln(6);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Company:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $authCompany[0]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,'Contact Name:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authContact[0]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,"Phone Number:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(65,5, $authPhone[0]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(19,5,'Fax Number:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authFax[0]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(13,5,"Address:");
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(70,5, $authAddress[0]);
			$pdf->Cell(13,5,"");
			$pdf->Cell(70,5, ''.$authCity[0].' '.$authState[0].' '.$authZip[0].'');

			$pdf->Ln(4);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"Contact #2");
			$pdf->Ln(6);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Company:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $authCompany[1]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,'Contact Name:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authContact[1]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,"Phone Number:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(65,5, $authPhone[1]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(19,5,'Fax Number:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authFax[1]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(13,5,"Address:");
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(70,5, ' '.$authAddress[1].'');
			$pdf->Cell(13,5,"");
			$pdf->MultiCell(70,5, ' '.$authCity[1].' '.$authState[1].' '.$authZip[1].'' );


			$pdf->Ln(4);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"Contact #3");
			$pdf->Ln(6);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Company:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $authCompany[2]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,'Contact Name:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authContact[2]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,"Phone Number:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(65,5, $authPhone[2]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(19,5,'Fax Number:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authFax[2]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(13,5,"Address:");
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(70,5, ''.$authAddress[2].'');
			$pdf->Cell(13,5,"");
			$pdf->MultiCell(70,5, ' '.$authCity[2].' '.$authState[2].' '.$authZip[2].'' );


			$pdf->Ln(4);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"Contact #4");
			$pdf->Ln(6);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Company:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $authCompany[3]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,'Contact Name:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authContact[3]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,"Phone Number:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(65,5, $authPhone[3]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(19,5,'Fax Number:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authFax[3]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(13,5,"Address:");
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(70,5, ''.$authAddress[3].'');
			$pdf->Cell(13,5,"");
			$pdf->MultiCell(70,5, ' '.$authCity[3].' '.$authState[3].' '.$authZip[3].'' );


			$pdf->Ln(4);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"Contact #5");
			$pdf->Ln(6);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Company:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $authCompany[4]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,'Contact Name:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authContact[4]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,"Phone Number:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(65,5, $authPhone[4]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(19,5,'Fax Number:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authFax[4]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(13,5,"Address:");
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(70,5, ''.$authAddress[4].'');
			$pdf->Cell(13,5,"");
			$pdf->MultiCell(70,5, ' '.$authCity[4].' '.$authState[4].' '.$authZip[4].'' );


			$pdf->Ln(4);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"Contact #6");
			$pdf->Ln(6);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Company:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $authCompany[5]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,'Contact Name:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authContact[5]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,"Phone Number:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(65,5, $authPhone[5]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(19,5,'Fax Number:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authFax[5]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(13,5,"Address:");
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(70,5, ''.$authAddress[5].'');
			$pdf->Cell(13,5,"");
			$pdf->MultiCell(70,5, ' '.$authCity[5].' '.$authState[5].' '.$authZip[5].'' );



			$pdf->Ln(5);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"Contact #7");
			$pdf->Ln(6);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Company:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $authCompany[6]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,'Contact Name:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authContact[6]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,"Phone Number:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(65,5, $authPhone[6]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(19,5,'Fax Number:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authFax[6]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(13,5,"Address:");
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(70,5, ''.$authAddress[6].'');
			$pdf->Cell(13,5,"");
			$pdf->MultiCell(70,5, ' '.$authCity[6].' '.$authState[6].' '.$authZip[6].'' );


			$pdf->AddPage();
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"Contact #8");
			$pdf->Ln(6);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Company:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $authCompany[7]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,'Contact Name:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authContact[7]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,"Phone Number:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(65,5, $authPhone[7]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(19,5,'Fax Number:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authFax[7]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(13,5,"Address:");
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(70,5, ''.$authAddress[7].'');
			$pdf->Cell(13,5,"");
			$pdf->MultiCell(70,5, ' '.$authCity[7].' '.$authState[7].' '.$authZip[7].'' );



			$pdf->Ln(4);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"Contact #9");
			$pdf->Ln(6);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Company:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $authCompany[8]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,'Contact Name:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authContact[8]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,"Phone Number:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(65,5, $authPhone[8]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(19,5,'Fax Number:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authFax[8]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(13,5,"Address:");
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(70,5, ''.$authAddress[8].'');
			$pdf->Cell(13,5,"");
			$pdf->MultiCell(70,5, ' '.$authCity[8].' '.$authState[8].' '.$authZip[8].'' );

			$pdf->Ln(4);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"Contact #10");
			$pdf->Ln(6);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Company:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $authCompany[9]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,'Contact Name:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authContact[9]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,"Phone Number:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(65,5, $authPhone[9]);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(19,5,'Fax Number:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $authFax[9]);

			$pdf->Ln(5);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(13,5,"Address:");
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(70,5, ''.$authAddress[9].'');
			$pdf->Cell(13,5,"");
			$pdf->MultiCell(70,5, ' '.$authCity[9].' '.$authState[9].' '.$authZip[9].'' );

			
			

			$pdf->Ln(15);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(17,5,"Full Name:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(40,5, $authName);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(22,5,'Social Security:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(50,5, $authSs);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(9,5,'Date:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(40,5, $authDate);




			$pdf->AddPage();
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(0,10,"RECORD OF VIOLTIONS 49 CFR § 391.27");
			$pdf->Ln(10);


			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,"This policy statement acknowledgment is intended to comply with all applicable Drug Free Workplace regulations governing anti-drug programs in the workplace. Those programs mandate urine drug testing and breathalyzer or saliva alcohol testing and prevent performance of job duties when there is a positive test result.");
			$pdf->Ln(2);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(129,5,'As an independent contractor rendering services for RUSSO BROTHERS TRANSPORT INC,');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(9,5,'I am prohibited from taking the following');
			$pdf->Ln(5);
			$pdf->SetFont('Times','',9);
			$pdf->Cell(9,5,'controlled substances:');
			$pdf->Ln(6);
			$pdf->SetFont('Times','U',9);
			$pdf->Cell(9,5,'Drugs:');
			$pdf->Ln(6);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,'6-Acetylmorphine, Amphetamines, Cocaine Metabolites, Marijuana Metabolites, MDA-Analogues, Opiates, Opiates (Semi-Synthetic), Oxycodone’s, Phencyclidine.');
			$pdf->Ln(2);
			$pdf->SetFont('Times','U',9);
			$pdf->Cell(9,5,'Alcohol:');
			$pdf->Ln(6);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,'This use of beverages or substances, including any medication containing alcohol such that it is present in the body at a level in excess of that stated in Department of Transportation guidelines while actually performing, ready to perform, or immediately available to perform is prohibited. "Alcohol" is defined as: the intoxicating agent in beverage alcohol, ethyl alcohol, or other low molecular-weight alcohol, including ethyl or isopropyl alcohol.');
			$pdf->Ln(2);
			$pdf->SetFont('Times','B',9);
			$pdf->Cell(129,5,'Under Drug Free Workplace Regulation:');
			$pdf->Ln(6);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,'1. I may not engage in the unlawful manufacture, distribution, dispensing, possession or use of a controlled substance or alcohol while performing my job duties.');
			$pdf->MultiCell(0,5,'2. I may not be impaired or under the influence of a prohibited substance, or not be fit for duty. If I fail to pass (where there is a quantifiable presence of a prohibited substance in the body above the minimum thresholds defined by Federal Guidelines) a controlled substance or alcohol test, I will remain off duty and seek treatment. I may not report for duty or remain on duty when my ability to perform job is adversely affected by alcohol or when I have a breath alcohol concentration of 0.04 or greater. I may not use alcohol within four hours of reporting for duty nor during hours that I am on call.');
			$pdf->MultiCell(0,5,'3. I am subject to controlled substance testing and breathe alcohol testing and may not refuse to comply with a request for testing, provide false information in connection with a test or attempt to falsify test results through tampering, contamination, adulteration, or substitution. Refusal to submit to a test can include an inability to provide a urine specimen or breathe sample without a valid medical explanation, as well as a verbal declaration, obstructive behavior or physical absence resulting in the inability to conduct the test.');
			$pdf->MultiCell(0,5,'4. If I test positive for controlled substances or alcohol, I must: (1) be evaluated by a Substance Abuse Professional (SAP), (2) participate in and complete the rehabilitation program required by the SAP, (3) be released to duty by the SAP, and (4) test negative on a return-to-duty controlled substances and/or alcohol test before returning to duty. In addition, I will be required to undergo unannounced follow-up controlled substance and/or alcohol breath testing following returning to duty. The duration and frequency will be determined by the SAP. However, it shall not be less than 6 tests during the first 12 months, or longer than 60 months in total, following return to duty.');
			$pdf->Ln(2);
			$pdf->SetFont('Times','B',9);
			$pdf->MultiCell(0,5,'As an independent contractor rendering services for RUSSO BROTHERS TRANSPORT INC, I may be tested under any of the following circumstances:');
			$pdf->Ln(2);
			$pdf->SetFont('Times','U',9);
			$pdf->Cell(9,5,'Pre-Enrollment Testing:');
			$pdf->Ln(6);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,'A operator of motor vehicles who wishes to render services for RUSSO BROTHERS TRANSPORT INC. will be required to undergo urine controlled substance testing prior to the commencement of services. Receipt of satisfactory test result is required and failure of a controlled substance test will disqualify me from performing services for Russo Brothers Transport, Inc.');
			$pdf->Ln(2);
			$pdf->SetFont('Times','U',9);
			$pdf->Cell(9,5,'Reasonable Suspicion Testing:');
			$pdf->Ln(6);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,'I will be subject to urine and/or breath testing when there is a reason to believe that controlled substances or alcohol use is adversely affecting my performance of services that I agreed to render to RUSSO BROTHERS TRANSPORT INC. A reasonable suspicion referral for testing may be made by a trained employee RUSSO BROTHERS TRANSPORT INC. on the basis of documented objective facts and circumstances which are consistent with the effects of substance abuse.');
			
			$pdf->AddPage();
			$pdf->Cell(9,5,'Examples of reasonable suspicion include, but are limited to, the following:');
			$pdf->Ln(6);
			$pdf->MultiCell(0,5,'1. Adequate documentation of unsatisfactory performance of contracted services or of inadequate behavior while performing services.');

			$pdf->MultiCell(0,5,'2. Physical signs and symptoms consistent with prohibited substance use.');
			$pdf->MultiCell(0,5,'3. Occurrence of a serious or potentially serious accident that may have been caused by human error.');
			$pdf->MultiCell(0,5,'4. Fights (to mean physical contact), assaults and flagrant disregard or violations of estimated safety, security, or other operation procedures.');


			$pdf->Ln(2);
			$pdf->SetFont('Times','U',9);
			$pdf->Cell(9,5,'Post-Accident Testing:');
			$pdf->Ln(6);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,"I will be required to undergo controlled substance and/or breath alcohol testing if I am involved in an accident which results in a fatality, results in injuries requiring transportation to a medical treatment facility, where there is significant property damage, or if there is an injury as defined by Worker's Compensation Guidelines.");
			$pdf->MultiCell(0,5,"Following an accident, I must be tested as soon as possible, but not to exceed 8 hours for alcohol and 32 hours for controlled substances. I may not leave the scene of the accident without appropriate authorization from law enforcement prior to submission to controlled substance and/or alcohol testing.");

			$pdf->Ln(2);
			$pdf->SetFont('Times','U',9);
			$pdf->Cell(9,5,'Random Testing:');
			$pdf->Ln(6);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,"I will be subjected to random, unannounced testing. The random selection will be by a scientifically valid method. I will have an equal chance of being tested each time selections are made.");
			$pdf->Ln(2);
			$pdf->SetFont('Times','U',9);
			$pdf->Cell(9,5,'Follow-Up Testing:');
			$pdf->Ln(6);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,"I understand that I will be subject to at least six unannounced follow-up alcohol and/or controlled substances testing as directed by a substance abuse professional, if company determines that I am in need of assistance in resolving problems associated with alcohol misuse and/or use of controlled substances. Title 49, Part 382.811.");
			$pdf->Ln(2);
			$pdf->SetFont('Times','U',9);
			$pdf->Cell(9,5,'Return-to-services Testing:');
			$pdf->Ln(6);
			$pdf->SetFont('Times','',9);
			$pdf->MultiCell(0,5,"If tested positive for controlled substances or if my alcohol concentration is above the limits set forth by the DOT regulations, I must be assessed by a Substance Abuse Professional (SAP). An SAP is a licensed physician, psychologist, social worker, employee assistance professional or addiction counselor with knowledge of and clinical experience in the diagnosis and treatment of alcohol related disorders. The Sap will evaluate me to determine what assistance, if any, I need in resolving problems associated with abuse of controlled substances.");

			$pdf->Ln(100);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(10,5,"Name:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $ackName);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(30,5,'Date of Certification:');
			$pdf->SetFont('Times','',9);
			$pdf->Cell(15,5, $ackDate);



			$pdf->AddPage();
			$pdf->MultiCell(0,5,"I, ".$dapolicyName." hereby certify that I have received a copy of the Drug and Alcohol Policy and that I am familiar with all of the information contained within it.");
			$pdf->Ln(8);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(10,5,"Date:");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, $ackDate);
			$pdf->Ln(12);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(75,5,"Russo Brothers Transport, Inc. Authorized Representative: ");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, "________________________________________________");
			$pdf->Ln(12);
			$pdf->SetFont('Times','I',9);
			$pdf->Cell(8,5,"Title: ");
			$pdf->SetFont('Times','',9);
			$pdf->Cell(70,5, "________________________________________________");

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
			foreach ($_FILES["attachment2"]["name"] as $k => $v) {
			    $mail->AddAttachment( $_FILES["attachment2"]["tmp_name"][$k], $_FILES["attachment2"]["name"][$k] );
			}
			foreach ($_FILES["attachment3"]["name"] as $k => $v) {
			    $mail->AddAttachment( $_FILES["attachment3"]["tmp_name"][$k], $_FILES["attachment3"]["name"][$k] );
			}
			foreach ($_FILES["attachment4"]["name"] as $k => $v) {
			    $mail->AddAttachment( $_FILES["attachment4"]["tmp_name"][$k], $_FILES["attachment4"]["name"][$k] );
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
					$automail->AddAddress($idEmail, $idName);
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