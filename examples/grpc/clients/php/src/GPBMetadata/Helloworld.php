<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: helloworld.proto

namespace GPBMetadata;

use Google\Protobuf\Internal\DescriptorPool;

class Helloworld
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0aae010a1068656c6c6f776f726c642e70726f746f120a68656c6c6f776f" .
            "726c64221c0a0c48656c6c6f52657175657374120c0a046e616d65180120" .
            "012809221d0a0a48656c6c6f5265706c79120f0a076d6573736167651801" .
            "2001280932490a0747726565746572123e0a0873617948656c6c6f12182e" .
            "68656c6c6f776f726c642e48656c6c6f526571756573741a162e68656c6c" .
            "6f776f726c642e48656c6c6f5265706c792200620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

