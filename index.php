<?php 
		// $soapclient = new SoapClient('https://www.w3schools.com/xml/tempconvert.asmx?WSDL');

		// $params = array('Celsius' => '25');
		// $response = $soapclient->CelsiusToFahrenheit($params);

    // echo '<pre>';
		// 	var_dump($soapclient);
		// echo '</pre>';

    try {
      $client = new SoapClient("https://www.w3schools.com/xml/tempconvert.asmx?WSDL");
      // $result = $client->SomeFunction(/* ... */);
  } catch (SoapFault $fault) {
      trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
  }
		?>
		  <p>testae</p>
      <hr>
		<?php 
		echo '<pre>';
			var_dump($client);
		echo '</pre>';

	;?>