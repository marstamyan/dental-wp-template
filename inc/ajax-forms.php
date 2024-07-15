<?php

//popup form
add_action( 'wp_ajax_submit_form', 'submit_popup_form_callback' );
add_action( 'wp_ajax_nopriv_submit_form', 'submit_popup_form_callback' );

function submit_popup_form_callback()
{
	if ( !wp_verify_nonce( $_POST['nonce'], 'submit_form_nonce' ) ) {
		wp_die( 'Data sent from an incorrect address' . $_POST['nonce'] );
	}

	$name = isset($_POST['name']) ? sanitize_text_field( $_POST['name'] ) : '';
	$phone = isset($_POST['phone']) ? sanitize_text_field( $_POST['phone'] ) : '';

	if ( !empty($name) && !empty($phone) ) {
		$to = 'marstamyan@gmail.com';
		$subject = pll__( 'Новая заявка' );
		$message = '<html><body><h2>New request</h2><table>';
		$message .= '<tr><td><strong>Name:</strong></td><td>' . $name . '</td></tr>';
		$message .= '<tr><td><strong>Phone:</strong></td><td>' . $phone . '</td></tr>';
		$message .= '</table></body></html>';
		$headers = array('Content-Type: text/html; charset=UTF-8');

		if ( wp_mail( $to, $subject, $message, $headers ) ) {
			echo 'success';
		} else {
			echo 'error_sending_email';
		}
	} else {
		echo 'error_missing_fields';
	}

	wp_die();
}
