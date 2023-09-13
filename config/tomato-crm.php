<?php

return [
    /*
     * Features of Tomato CRM
     *
     * accounts: Enable/Disable Accounts Feature
     */
    "features" => [
        "accounts" => true,
        "groups" => true,
        "locations" => true,
        "contacts" => true,
        "activites" => false,
        "notifications" => true,
        "apis" => true,
        "send_otp" => true
    ],

    /*
     * Accounts Configurations
     *
     * resource: User Resource Class
     */
    "resource" => null,

    /*
     * Accounts Configurations
     *
     * login_by: Login By Phone or Email
     */
    "login_by" => "email",

    /*
     * Accounts Configurations
     *
     * required_otp: Enable/Disable OTP Verification
     */
    "required_otp" => true,

    /*
     * Accounts Configurations
     *
     * model: User Model Class
     */
    "model" => \TomatoPHP\TomatoCrm\Models\Account::class,

    /*
     * Accounts Configurations
     *
     * guard: Auth Guard
     */
    "guard" => "accounts"
];
