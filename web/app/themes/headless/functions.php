<?php

add_filter('rest_allow_anonymous_comments', function ($allow_anonymous, $request) {
    return true;
}, 10, 2);
