<?php

$idName = strip_tags(trim($_POST['idName']));
$idDob = strip_tags(trim($_POST['idDob']));
$idSs = strip_tags(trim($_POST['idSs']));
$idAddress = strip_tags(trim($_POST['idAddress']));
$idCity = strip_tags(trim($_POST['idCity']));
$idState = strip_tags(trim($_POST['idState']));
$idZip = strip_tags(trim($_POST['idZip']));
$idPhone = strip_tags(trim($_POST['idPhone']));
$idEmail = strip_tags(trim($_POST['idEmail']));
$idPhysical = strip_tags(trim($_POST['idPhysical']));
$idRusso = strip_tags(trim($_POST['idRusso']));
$idWorkedFrom = strip_tags(trim($_POST['idWorkedFrom']));
$idWorkedTo = strip_tags(trim($_POST['idWorkedTo']));
$idWorkedReason = strip_tags(trim($_POST['idWorkedReason']));


//Previous Addresses
foreach ($_POST["prevAddress"] as $key=>$value) {
    $prevAddress[$key] = strip_tags(trim($value));
}

foreach ($_POST["prevCity"] as $key=>$value) {
    $prevCity[$key] = strip_tags(trim($value));
}

foreach ($_POST["prevState"] as $key=>$value) {
    $prevState[$key] = strip_tags(trim($value));
}

foreach ($_POST["prevZip"] as $key=>$value) {
    $prevZip[$key] = strip_tags(trim($value));
}

foreach ($_POST["prevDate"] as $key=>$value) {
    $prevDate[$key] = strip_tags(trim($value));
}

foreach ($_POST["prevFatalities"] as $key=>$value) {
    $prevFatalities[$key] = strip_tags(trim($value));
}

foreach ($_POST["prevInjuries"] as $key=>$value) {
    $prevInjuries[$key] = strip_tags(trim($value));
}


foreach ($_POST["drCdl"] as $key=>$value) {
    $drCdl[$key] = strip_tags(trim($value));
}

foreach ($_POST["drState"] as $key=>$value) {
    $drState[$key] = strip_tags(trim($value));
}

foreach ($_POST["drDate"] as $key=>$value) {
    $drDate[$key] = strip_tags(trim($value));
}

foreach ($_POST["drClass"] as $key=>$value) {
    $drClass[$key] = strip_tags(trim($value));
}

foreach ($_POST["drEndorsement"] as $key=>$value) {
    $drEndorsement[$key] = strip_tags(trim($value));
}

// DRIVING EXPERIENCE 1

// Expirience Truck
$expTruckFrom = strip_tags(trim($_POST["expTruckFrom"]));
$expTruckTo = strip_tags(trim($_POST["expTruckTo"]));
$expTruckMiles = strip_tags(trim($_POST["expTruckMiles"]));

// Expirience Tractor
$expTractorFrom = strip_tags(trim($_POST["expTractorFrom"]));
$expTractorTo = strip_tags(trim($_POST["expTractorTo"]));
$expTractorMiles = strip_tags(trim($_POST["expTractorMiles"]));


// Expirience Trailer
$expTrailerFrom = strip_tags(trim($_POST["expTrailerFrom"]));
$expTrailerTo = strip_tags(trim($_POST["expTrailerTo"]));
$expTrailerMiles = strip_tags(trim($_POST["expTrailerMiles"]));

// Expirience Other
$expOtherFrom = strip_tags(trim($_POST["expOtherFrom"]));
$expOtherTo = strip_tags(trim($_POST["expOtherTo"]));
$expOtherMiles = strip_tags(trim($_POST["expOtherMiles"]));

// DRIVING EXPERIENCE 2
$alabama = strip_tags(trim($_POST["alabama"]));
$alaska = strip_tags(trim($_POST["alaska"]));
$arizona = strip_tags(trim($_POST["arizona"]));
$arkansas = strip_tags(trim($_POST["arkansas"]));
$california = strip_tags(trim($_POST["california"]));
$colorado = strip_tags(trim($_POST["colorado"]));
$connecticut = strip_tags(trim($_POST["connecticut"]));
$delaware = strip_tags(trim($_POST["delaware"]));
$florida = strip_tags(trim($_POST["florida"]));
$georgia = strip_tags(trim($_POST["georgia"]));
$hawaii = strip_tags(trim($_POST["hawaii"]));
$idaho = strip_tags(trim($_POST["idaho"]));
$illinois = strip_tags(trim($_POST["illinois"]));
$indiana = strip_tags(trim($_POST["indiana"]));
$iowa = strip_tags(trim($_POST["iowa"]));
$kansas = strip_tags(trim($_POST["kansas"]));
$kentucky = strip_tags(trim($_POST["kentucky"]));
$louisiana = strip_tags(trim($_POST["louisiana"]));
$maine = strip_tags(trim($_POST["maine"]));
$maryland = strip_tags(trim($_POST["maryland"]));
$massachusetts = strip_tags(trim($_POST["massachusetts"]));
$michigan = strip_tags(trim($_POST["michigan"]));
$minnesota = strip_tags(trim($_POST["minnesota"]));
$mississippi = strip_tags(trim($_POST["mississippi"]));
$missouri = strip_tags(trim($_POST["missouri"]));
$montana = strip_tags(trim($_POST["montana"]));
$nebraska = strip_tags(trim($_POST["nebraska"]));
$nevada = strip_tags(trim($_POST["nevada"]));
$newhampshire = strip_tags(trim($_POST["newhampshire"]));
$newjersey = strip_tags(trim($_POST["newjersey"]));
$newmexico = strip_tags(trim($_POST["newmexico"]));
$newyork = strip_tags(trim($_POST["newyork"]));
$northcarolina = strip_tags(trim($_POST["northcarolina"]));
$northdakota = strip_tags(trim($_POST["northdakota"]));
$ohio = strip_tags(trim($_POST["ohio"]));
$oklahoma = strip_tags(trim($_POST["oklahoma"]));
$oregon = strip_tags(trim($_POST["oregon"]));
$pennsylvania = strip_tags(trim($_POST["pennsylvania"]));
$rhodeisland = strip_tags(trim($_POST["rhodeisland"]));
$southcarolina = strip_tags(trim($_POST["southcarolina"]));
$southdakota = strip_tags(trim($_POST["southdakota"]));
$tennessee = strip_tags(trim($_POST["tennessee"]));
$texas = strip_tags(trim($_POST["texas"]));
$utah = strip_tags(trim($_POST["utah"]));
$vermont = strip_tags(trim($_POST["vermont"]));
$virginia = strip_tags(trim($_POST["virginia"]));
$washington = strip_tags(trim($_POST["washington"]));
$westvirginia = strip_tags(trim($_POST["westvirginia"]));
$wisconsin = strip_tags(trim($_POST["wisconsin"]));
$wyoming = strip_tags(trim($_POST["wyoming"]));

$expDrivingCourses = strip_tags(trim($_POST["expDrivingCourses"]));
$expSafeDriving = strip_tags(trim($_POST["expSafeDriving"]));

// Accident Record


// function assignVar(post,var){
//  foreach (post as $key=>$value) {
//      ${var}[$key] = strip_tags(trim($value));
//  }
// }

// assignVar($_POST["accidentNature"],"accidentNature")
// assignVar($_POST["accidentLocation"],"accidentLocation")
// assignVar($_POST["accidentDate"],"accidentDate")
// assignVar($_POST["accidentFatalities"],"accidentFatalities")
// assignVar($_POST["accidentInjuries"],"accidentInjuries")



foreach ($_POST["accidentNature"] as $key=>$value) {
    $accidentNature[$key] = strip_tags(trim($value));
}

foreach ($_POST["accidentLocation"] as $key=>$value) {
    $accidentLocation[$key] = strip_tags(trim($value));
}
foreach ($_POST["accidentDate"] as $key=>$value) {
    $accidentDate[$key] = strip_tags(trim($value));
}


$accidentFatalities0 = strip_tags(trim($_POST["accidentFatalities0"]));
$accidentFatalities1 = strip_tags(trim($_POST["accidentFatalities1"]));
$accidentFatalities2 = strip_tags(trim($_POST["accidentFatalities2"]));
$accidentFatalities3 = strip_tags(trim($_POST["accidentFatalities3"]));
$accidentFatalities4 = strip_tags(trim($_POST["accidentFatalities4"]));
$accidentFatalities5 = strip_tags(trim($_POST["accidentFatalities5"]));
$accidentFatalities6 = strip_tags(trim($_POST["accidentFatalities6"]));
$accidentFatalities7 = strip_tags(trim($_POST["accidentFatalities7"]));
$accidentFatalities8 = strip_tags(trim($_POST["accidentFatalities8"]));
$accidentFatalities9 = strip_tags(trim($_POST["accidentFatalities9"]));

$accidentInjuries0 = strip_tags(trim($_POST["accidentInjuries0"]));
$accidentInjuries1 = strip_tags(trim($_POST["accidentInjuries1"]));
$accidentInjuries2 = strip_tags(trim($_POST["accidentInjuries2"]));
$accidentInjuries3 = strip_tags(trim($_POST["accidentInjuries3"]));
$accidentInjuries4 = strip_tags(trim($_POST["accidentInjuries4"]));
$accidentInjuries5 = strip_tags(trim($_POST["accidentInjuries5"]));
$accidentInjuries6 = strip_tags(trim($_POST["accidentInjuries6"]));
$accidentInjuries7 = strip_tags(trim($_POST["accidentInjuries7"]));
$accidentInjuries8 = strip_tags(trim($_POST["accidentInjuries8"]));
$accidentInjuries9 = strip_tags(trim($_POST["accidentInjuries9"]));


// Record of Violations

foreach ($_POST["violationOffense"] as $key=>$value) {
    $violationOffense[$key] = strip_tags(trim($value));
}

foreach ($_POST["violationLocation"] as $key=>$value) {
    $violationLocation[$key] = strip_tags(trim($value));
}

foreach ($_POST["violationDate"] as $key=>$value) {
    $violationDate[$key] = strip_tags(trim($value));
}

foreach ($_POST["violationPenalty"] as $key=>$value) {
    $violationPenalty[$key] = strip_tags(trim($value));
}

foreach ($_POST["violationOperated"] as $key=>$value) {
    $violationOperated[$key] = strip_tags(trim($value));
}

// DRS Section

$drsDenied = strip_tags(trim($_POST["drsDenied"]));
$drsDeniedDetail = strip_tags(trim($_POST["drsDeniedDetail"]));

$drsSuspended = strip_tags(trim($_POST["drsSuspended"]));
$drsSuspendedDetail = strip_tags(trim($_POST["drsSuspendedDetail"]));

$drsUnable = strip_tags(trim($_POST["drsUnable"]));
$drsUnableDetail = strip_tags(trim($_POST["drsUnableDetail"]));

$drsMedication = strip_tags(trim($_POST["drsMedication"]));
$drsMedicationDetail = strip_tags(trim($_POST["drsMedicationDetail"]));



// 8. PREVIOUS RESULTS FOR CONTROLLED SUBSTANCES TESTS

$csVerified = strip_tags(trim($_POST["csVerified"]));
$csAlcohol = strip_tags(trim($_POST["csAlcohol"]));
$csRefused = strip_tags(trim($_POST["csRefused"]));
$csName = strip_tags(trim($_POST["csName"]));
$csAddress = strip_tags(trim($_POST["csAddress"]));
$csPhone = strip_tags(trim($_POST["csPhone"]));
$csDate = strip_tags(trim($_POST["csDate"]));

// 9. PREVIOUS CONTACTS WITH MOTOR CARRIERS

foreach ($_POST["carrierName"] as $key=>$value) {
    $carrierName[$key] = strip_tags(trim($value));
}

foreach ($_POST["carrierAddress"] as $key=>$value) {
    $carrierAddress[$key] = strip_tags(trim($value));
}

foreach ($_POST["carrierPhone"] as $key=>$value) {
    $carrierPhone[$key] = strip_tags(trim($value));
}

foreach ($_POST["carrierFax"] as $key=>$value) {
    $carrierFax[$key] = strip_tags(trim($value));
}

foreach ($_POST["carrierDateFrom"] as $key=>$value) {
    $carrierDateFrom[$key] = strip_tags(trim($value));
}

foreach ($_POST["carrierDateTo"] as $key=>$value) {
    $carrierDateTo[$key] = strip_tags(trim($value));
}

foreach ($_POST["carrierReason"] as $key=>$value) {
    $carrierReason[$key] = strip_tags(trim($value));
}

foreach ($_POST["carrierSubject"] as $key=>$value) {
    $carrierSubject[$key] = strip_tags(trim($value));
}

$carrierSubject0 = strip_tags(trim($_POST["carrierSubject0"]));
$carrierSubject1 = strip_tags(trim($_POST["carrierSubject1"]));
$carrierSubject2 = strip_tags(trim($_POST["carrierSubject2"]));
$carrierSubject3 = strip_tags(trim($_POST["carrierSubject3"]));
$carrierSubject4 = strip_tags(trim($_POST["carrierSubject4"]));
$carrierSubject5 = strip_tags(trim($_POST["carrierSubject5"]));
$carrierSubject6 = strip_tags(trim($_POST["carrierSubject6"]));
$carrierSubject7 = strip_tags(trim($_POST["carrierSubject7"]));
$carrierSubject8 = strip_tags(trim($_POST["carrierSubject8"]));
$carrierSubject9 = strip_tags(trim($_POST["carrierSubject9"]));

$carrierDesginated0 = strip_tags(trim($_POST["carrierDesginated0"]));
$carrierDesginated1 = strip_tags(trim($_POST["carrierDesginated1"]));
$carrierDesginated2 = strip_tags(trim($_POST["carrierDesginated2"]));
$carrierDesginated3 = strip_tags(trim($_POST["carrierDesginated3"]));
$carrierDesginated4 = strip_tags(trim($_POST["carrierDesginated4"]));
$carrierDesginated5 = strip_tags(trim($_POST["carrierDesginated5"]));
$carrierDesginated6 = strip_tags(trim($_POST["carrierDesginated6"]));
$carrierDesginated7 = strip_tags(trim($_POST["carrierDesginated7"]));
$carrierDesginated8 = strip_tags(trim($_POST["carrierDesginated8"]));
$carrierDesginated9 = strip_tags(trim($_POST["carrierDesginated9"]));


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

// Certification
$certificationName = strip_tags(trim($_POST["certificationName"]));
$certificationDate = strip_tags(trim($_POST["certificationDate"]));

// RECORD OF VIOLTIONS 49 CFR § 391.27
foreach ($_POST["rovDate"] as $key=>$value) {
    $rovDate[$key] = strip_tags(trim($value));
}

foreach ($_POST["rovOffence"] as $key=>$value) {
    $rovOffence[$key] = strip_tags(trim($value));
}

foreach ($_POST["rovLocation"] as $key=>$value) {
    $rovLocation[$key] = strip_tags(trim($value));
}

foreach ($_POST["rovVehicle"] as $key=>$value) {
    $rovVehicle[$key] = strip_tags(trim($value));
}

$rovCertification = strip_tags(trim($_POST["rovCertification"]));
$rovFullname = strip_tags(trim($_POST["rovFullname"]));
$rovAction = strip_tags(trim($_POST["rovAction"]));

// AUTHORIZATION TO RELEASE DRUG AND ALCOHOL TESTING INFORMATION

foreach ($_POST["authCompany"] as $key=>$value) {
    $authCompany[$key] = strip_tags(trim($value));
}

foreach ($_POST["authContact"] as $key=>$value) {
    $authContact[$key] = strip_tags(trim($value));
}
foreach ($_POST["authPhone"] as $key=>$value) {
    $authPhone[$key] = strip_tags(trim($value));
}
foreach ($_POST["authFax"] as $key=>$value) {
    $authFax[$key] = strip_tags(trim($value));
}
foreach ($_POST["authAddress"] as $key=>$value) {
    $authAddress[$key] = strip_tags(trim($value));
}
foreach ($_POST["authCity"] as $key=>$value) {
    $authCity[$key] = strip_tags(trim($value));
}
foreach ($_POST["authState"] as $key=>$value) {
    $authState[$key] = strip_tags(trim($value));
}
foreach ($_POST["authZip"] as $key=>$value) {
    $authZip[$key] = strip_tags(trim($value));
}

$authName = strip_tags(trim($_POST["authName"]));
$authSs = strip_tags(trim($_POST["authSs"]));
$authDate = strip_tags(trim($_POST["authDate"]));

$ackDate = strip_tags(trim($_POST["ackDate"]));
$ackName = strip_tags(trim($_POST["ackName"]));

$dapolicyDate = strip_tags(trim($_POST["dapolicyDate"]));
$dapolicyName = strip_tags(trim($_POST["dapolicyName"]));



?>