<?php

/**
 * Return path to backend resources
 */
function backend_assets_directory($path = '') {

    if( is_ssl() ) {

        return secure_asset("/backend{$path}");

    }

    return asset("/backend{$path}"); // for dev only


}

/**
 * Return path to frontend resources
 */
function frontend_assets_directory($path = '') {

    if( is_ssl() ) {
        return secure_asset("/frontend{$path}");
    }

    return asset("/frontend{$path}"); // for dev only

}

/**
 * Return path to plugins resources
 */
function plugins_directory($path = '') {

    if( is_ssl() ) {
        return secure_asset("/plugins{$path}");
    }

    return asset("/plugins{$path}"); // for dev only


}

/**
 * Return path to images resources
 */
function images_directory($path = '') {

    if( is_ssl() ) {
        return secure_asset("/images{$path}");
    }

    return asset("/images{$path}"); // for dev only
}

/**
 * @return [url] path to logo.png
 */
function get_logo() {
    return images_directory("/logo.png");
}

/**
 * @return [url] path to logo.png
 */
function get_dark_logo() {
    return images_directory("/logo-dark.png");
}

/**
 * @return [url] path to favicon.ico
 */
function get_favicon() {
    return images_directory("/favicon.ico");
}

/**
 * Return path to uploads resources
 */
function uploads_directory($path = '') {

    if( is_ssl() ) {
        return secure_asset("/uploads{$path}");
    }

    return asset("/uploads{$path}"); // for dev only

}

/**
 * @param  $height
 * @param  $width
 * @return [dummy_image_url] url
 */
function get_dummy_image_url($height='1000', $width='600') {
    return "http://i.pravatar.cc/{$height}x{$width}";
}

/**
 * @return mixed string
 */
function get_custom_hash() {
    $length = 10;
    $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }

    return Hash::make($str);
}

/**
 * @return Mixed HTML
 */
function get_content() {
    return "
        <h1>Lorem ipsum dolor</h1><br /><br />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <em>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</em> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br /><br />
        <h2>Lorem ipsum dolor</h2><br /><br />
        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</strong> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><ul><li>Lorem ipsum dolor sit amet</li><li>consectetur adipiscing elit</li></ul><h3>Lorem ipsum dolor</h3><ol><li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li><li>Ut enim ad minim veniam</li></ol><h4>Lorem ipsum dolor</h4><br /><br />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br />
        ";
}
