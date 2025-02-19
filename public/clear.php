<?php
echo "<pre>";
chdir(__DIR__.'/../'); // Laravel clear chache from root file
passthru('php artisan config:clear');
passthru('php artisan cache:clear');
passthru('php artisan config:cache');
passthru('php artisan route:clear');
passthru('php artisan view:clear');
echo "Cache cleared!";
?>
