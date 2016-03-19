<?php
    class clIncluder {
        function __construct() {
            include Q_PATH.'/application/core/controller.php';
            include Q_PATH.'/application/core/model.php';
            include Q_PATH.'/application/core/view.php';
            include Q_PATH.'/application/core/route.php';
            
            include Q_PATH.'/application/additional classes/exploder.php';
            include Q_PATH.'/application/additional classes/settings.php';
            include Q_PATH.'/application/additional classes/main_page.php';
            include Q_PATH.'/application/additional classes/readusersettings.php';
            include Q_PATH.'/db/connection.php';
        }
    }
    
    $bootclass = new clIncluder();
    
    Route::Start();