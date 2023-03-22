<?php
$con = mysqli_connect('localhost','root','','bloodbank');
$fire = mysqli_query($con,"select * from bloodinfo");
$xml =  new XMLWriter();
$xml->openURI("php://output");
$xml->startDocument();
$xml->setIndent(true);
$xml->startElement('bloodinfo');
	while ($row = mysqli_fetch_assoc($fire)) {
			$xml->startElement('BloodGroup');
			$xml->startElement('Quantity');
				$xml->writeRaw($row['bg']);
				$xml->writeRaw($row['quantity']);
			$xml->endElement();
			$xml->endElement();

	}
$xml->endElement();
header('Content-type: text/xml');
$xml->flush();0
?>