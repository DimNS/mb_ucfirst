<?php
/**
 * Check that the mb_ucfirst function is not declared
 * and mbstring Extension (Multibyte String Functions) is enabled
 */
if (!function_exists('mb_ucfirst') && extension_loaded('mbstring')) {
    /**
     * Converts the first character to uppercase
     *
     * @param string $str      - String to convert
     * @param string $encoding - Encoding, default null
     *
     * @return string
     *
     * @version 2019-05-31
     * @author  DimNS <atomcms@ya.ru>
     */
    function mb_ucfirst($str, $encoding = null)
    {
        if (empty($encoding)) {
            $encoding = mb_detect_encoding($str);
        }

        $str = mb_ereg_replace('^[\ ]+', '', $str);

        // First line character
        $first_char = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding);

        // String without first character
        $last = mb_substr($str, 1, mb_strlen($str), $encoding);

        $str = $first_char . $last;

        return $str;
    }
}
