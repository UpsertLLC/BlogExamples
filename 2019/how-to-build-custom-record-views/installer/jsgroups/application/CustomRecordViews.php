<?php

foreach ($js_groupings as $key => $groupings) {
    $target = current(array_values($groupings));
    if ($target == 'include/javascript/sugar_grp7.min.js') {
        $js_groupings[$key]['custom/include/JavaScript/myCustomRoutes.js'] = 'include/javascript/sugar_grp7.min.js';
    }
}
