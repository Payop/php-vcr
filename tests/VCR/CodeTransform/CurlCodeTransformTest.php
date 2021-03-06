<?php

namespace VCR\CodeTransform;

use lapistano\ProxyObject\ProxyBuilder;
use PHPUnit\Framework\TestCase;

class CurlCodeTransformTest extends TestCase
{
    /**
     * @dataProvider codeSnippetProvider
     */
//    public function testTransformCode($expected, $code)
//    {
//        $proxy = new ProxyBuilder('\VCR\CodeTransform\CurlCodeTransform');
//        $filter = $proxy
//            ->setMethods(['transformCode'])
//            ->getProxy();
//
//        $this->assertEquals($expected, $filter->transformCode($code));
//    }

    public function codeSnippetProvider()
    {
        return [
            ['\VCR\LibraryHooks\CurlHook::curl_init(', 'CURL_INIT ('],
            ['\VCR\LibraryHooks\CurlHook::curl_exec(', 'curl_exec('],
            ['\VCR\LibraryHooks\CurlHook::curl_getinfo(', 'curl_getinfo('],
            ['\VCR\LibraryHooks\CurlHook::curl_setopt(', 'curl_setopt('],
            ['\VCR\LibraryHooks\CurlHook::curl_multi_add_handle(', 'curl_multi_add_handle('],
            ['\VCR\LibraryHooks\CurlHook::curl_multi_remove_handle(', 'curl_multi_remove_handle('],
            ['\VCR\LibraryHooks\CurlHook::curl_multi_exec(', 'curl_multi_exec('],
            ['\VCR\LibraryHooks\CurlHook::curl_multi_info_read(', 'curl_multi_info_read('],
            ['\VCR\LibraryHooks\CurlHook::curl_reset(', 'curl_reset('],

            ['\VCR\LibraryHooks\CurlHook::curl_init(', '\\CURL_INIT ('],
            ['\VCR\LibraryHooks\CurlHook::curl_exec(', '\\curl_exec('],
            ['\VCR\LibraryHooks\CurlHook::curl_getinfo(', '\\curl_getinfo('],
            ['\VCR\LibraryHooks\CurlHook::curl_setopt(', '\\curl_setopt('],
            ['\VCR\LibraryHooks\CurlHook::curl_multi_add_handle(', '\\curl_multi_add_handle('],
            ['\VCR\LibraryHooks\CurlHook::curl_multi_remove_handle(', '\\curl_multi_remove_handle('],
            ['\VCR\LibraryHooks\CurlHook::curl_multi_exec(', '\\curl_multi_exec('],
            ['\VCR\LibraryHooks\CurlHook::curl_multi_info_read(', '\\curl_multi_info_read('],
            ['\VCR\LibraryHooks\CurlHook::curl_reset(', '\\curl_reset('],

            ['SomeClass::CURL_INIT (', 'SomeClass::CURL_INIT ('],
            ['SomeClass::curl_exec(', 'SomeClass::curl_exec('],
            ['SomeClass::curl_getinfo(', 'SomeClass::curl_getinfo('],
            ['SomeClass::curl_setopt(', 'SomeClass::curl_setopt('],
            ['SomeClass::curl_multi_add_handle(', 'SomeClass::curl_multi_add_handle('],
            ['SomeClass::curl_multi_remove_handle(', 'SomeClass::curl_multi_remove_handle('],
            ['SomeClass::curl_multi_exec(', 'SomeClass::curl_multi_exec('],
            ['SomeClass::curl_multi_info_read(', 'SomeClass::curl_multi_info_read('],
            ['SomeClass::curl_reset(', 'SomeClass::curl_reset('],

            ['$object->CURL_INIT (', '$object->CURL_INIT ('],
            ['$object->curl_exec(', '$object->curl_exec('],
            ['$object->curl_getinfo(', '$object->curl_getinfo('],
            ['$object->curl_setopt(', '$object->curl_setopt('],
            ['$object->curl_multi_add_handle(', '$object->curl_multi_add_handle('],
            ['$object->curl_multi_remove_handle(', '$object->curl_multi_remove_handle('],
            ['$object->curl_multi_exec(', '$object->curl_multi_exec('],
            ['$object->curl_multi_info_read(', '$object->curl_multi_info_read('],
            ['$object->curl_reset(', '$object->curl_reset('],

            ['function send_http_asynchronous_curl_exec(', 'function send_http_asynchronous_curl_exec('],
        ];
    }
}
