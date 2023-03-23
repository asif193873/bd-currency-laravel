<?php

if (! function_exists('pass')) {
    /**
     * Return the instance of toastr.
     *
     * @return Brian2694\Toastr\Toastr
     */
    function pass()
    {
        return app('pass');
    }
}