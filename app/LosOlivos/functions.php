<?php

function isActive($path) {
    return (request()->path() == $path) ? 'class=active' : '';
}