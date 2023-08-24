<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    
    <label for="message">Message:</label>
    <textarea name="message" required></textarea>
    
    <input type="hidden" name="action" value="contact_form">
    <input type="submit" value="Send">
</form>
