function handle_contact_form() {
    if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) ) {
        $name = sanitize_text_field( $_POST['name'] );
        $email = sanitize_email( $_POST['email'] );
        $message = sanitize_textarea_field( $_POST['message'] );
        
        $admin_email = get_option('admin_email');
        $subject = "New contact form submission from: $name";
        $headers = "From: $name <$email>" . "\r\n";
        
        if ( wp_mail($admin_email, $subject, $message, $headers) ) {
            // Success! Optionally, redirect or display a success message.
            wp_redirect( home_url('/thank-you/') );
            exit;
        } else {
            // Email failed. Handle the error.
            echo "There was an error sending the email.";
        }
    }
}
add_action( 'admin_post_nopriv_contact_form', 'handle_contact_form' );
add_action( 'admin_post_contact_form', 'handle_contact_form' );
