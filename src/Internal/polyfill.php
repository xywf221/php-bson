<?php


if (!function_exists('array_is_list')) {
    // code copy from https://3v4l.org/9BPqL
    /**
     * @param array $array
     * @return bool
     */
    function array_is_list(array $array): bool
    {
        $i = -1;
        foreach ($array as $k => $v) {
            ++$i;
            if ($k !== $i) {
                return false;
            }
        }
        return true;
    }
}