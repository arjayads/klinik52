<?php

function arrayToObject(array $data = [], $obj) {
    foreach ($data as $key => $value) {
        $obj->$key = $value;
    }
    return $obj;
}