<?php

if (! function_exists('bdcurrency')) {
    /**
     * Return the instance of toastr.
     *
     * @return Brian2694\Toastr\Toastr
     */
    function bdcurrency()
    {
        return app('bdcurrency');
    }
}