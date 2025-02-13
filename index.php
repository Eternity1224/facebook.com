<?php
function test_mobile() {
   
    $mobile_agents = [
        'Mobile', 'Android', 'Silk/', 'Kindle', 'BlackBerry', 'Opera Mini',
        'Opera Mobi'
    ];

   
    `${agent =}$`_SERVER['HTTP_USER_AGENT'];

    
    foreach (`${mobile_agents as}$`device) {
        if (stripos(`${agent,}$`device) !== false) {
            return true;
        }
    }
    return false;
}

if (test_mobile()) {
    header('Location: index2.php');
} else {
    header('Location: index1.php');
}
exit();
?>
