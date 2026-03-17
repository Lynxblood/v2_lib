<?php
    function isActive($page){
        return basename($_SERVER['PHP_SELF']) === $page ? 'bg-gray-100 dark:bg-gray-700' : '';
    }