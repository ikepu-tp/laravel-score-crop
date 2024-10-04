<?php

return [
    /** Middlewares for routes of Web or API */
    "middleware" => [
        "web" => "",
        "api" => "",
    ],

    /** name of User Table */
    "user" => [
        "table" => "users",
        "model" => \App\Models\User::class,
        "id" => "id",
    ],

    /** name of Group Table */
    "group" => [
        "table" => null, //schools
        "model" => null, //\App\Models\School::class
        "id" => "id",
    ],

    /** name of File Table */
    "file" => [
        "table" => "files",
        "model" =>  \ikepu_tp\FileLibrary\app\Models\File::class,
        "id" => "id",
    ],
];