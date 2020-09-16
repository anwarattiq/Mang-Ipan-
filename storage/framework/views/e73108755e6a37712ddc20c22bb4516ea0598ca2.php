importScripts('//www.gstatic.com/firebasejs/7.2.0/firebase-app.js');
importScripts('//www.gstatic.com/firebasejs/7.2.0/firebase-messaging.js');

<?php echo $__env->make('vendor.notifications.init_firebase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
    console.log('[firebase-messaging-sw.js] Received background message ', payload);
    // Customize notification here
    const notificationTitle = payload.data.title;
    const notificationOptions = {
    body: payload.data.body,
    icon: payload.data.icon,
};

return self.registration.showNotification(notificationTitle,notificationOptions);
});
// <?php echo e(env('APP_NAME')); ?>

<?php /**PATH C:\xampp\htdocs\multi-restaurants\resources\views/vendor/notifications/sw_firebase.blade.php ENDPATH**/ ?>