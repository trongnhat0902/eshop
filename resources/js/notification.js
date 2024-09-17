function showNotification(message, type) {
    var $notification = $('#notification');
    var $notificationMessage = $('#notification-message');

    // Set the message and type
    $notificationMessage.html(message);
    $notification.removeClass('alert-success alert-danger') // Remove any existing alert types
                   .addClass('alert-' + type);

    // Show the notification
    $notification.fadeIn();

    // Hide the notification after a few seconds
    setTimeout(function() {
        $notification.fadeOut();
    }, 3000); // 3 seconds
}
