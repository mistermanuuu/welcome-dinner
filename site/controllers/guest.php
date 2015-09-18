<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 11/09/15
 * Time: 15:06
 *
 * Controller to handle the contact form requests
 *
 */


return function($site, $pages, $page) {

	$alert = null;
	$date = new DateTime();
	$timeStamp = $date->getTimestamp();
	$timeString = date('Ymd',$timeStamp);
	$bookingDate = date('Y-m-d H:i:s',$timeStamp);

	if(get('submit')) {
		$Iam = get('whoAmI');

		if (empty($country = get('country'))) $country = 'n.a.';
		$specialFood = 'n.a';
		if (count(get('special-food')) > 0) $specialFood = implode(' AND ', get('special-food'));

		$data = array(
			'date' => $bookingDate
		, 'gender' => get('gender')
		, 'name' => get('name')
		, 'street' => get('street')
		, 'place' => get('place')
		, 'email' => get('email')
		, 'phone' => get('phone')
		, 'friends' => get('friends')
		, 'kids' => get('kids')
		, 'country' => $country
		, 'language' => get('language')
		, 'special-food' => $specialFood
		, 'text' => get('text')
		);

		error_log(print_r($data,1));

		$rules = array(
			'name'  => array('required'),
			'email' => array('required', 'email'),
			'text'  => array('required', 'min' => 3, 'max' => 3000),
		);

		$messages = array(
			'name'  => 'Please enter a valid name',
			'email' => 'Please enter a valid email address',
			'text'  => 'Please enter a text between 3 and 3000 characters'
		);

		// some of the data is invalid
		if($invalid = invalid($data, $rules, $messages)) {
			$alert = $invalid;

			// the data is fine, let's send the email
		} else {

			// create the body from a simple snippet
			$body  = snippet('contactmail', $data, true);

			// build the email
			$email = email(array(
				'to'      => 'marcel.zauche@denkwerk.com',
				'from'    => 'contactform@welcome-dinner.com',
				'subject' => 'New contact request',
				'replyTo' => $data['email'],
				'body'    => $body
			));

			$file = fopen($_SERVER['DOCUMENT_ROOT'].'/site/contact_data/' . $Iam . '/' . $timeString, 'a' );
			fputcsv($file, $data);
			fclose($file);

			// try to send it and redirect to the
			// thank you page if it worked
			if($email->send()) {

				go('contact/thank-you/');
				// add the error to the alert list if it failed
			} else {
				$alert = array($email->error());
			}

		}

	}

	return compact('alert');

};

