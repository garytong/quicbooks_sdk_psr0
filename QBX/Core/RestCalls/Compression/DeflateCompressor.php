<?php

namespace QBX\Core\RestCalls\Compression;

use QBX\Core\Interfaces\ICompressor;
use QBX\Core\RestCalls\Compression\DataCompressionFormat;

/**
 * Deflate compressor.
 */
class DeflateCompressor extends ICompressor
{

    const DataCompressionFormat = DataCompressionFormat::Deflate;

    /**
     * Compresses the input byte array into stream.
     * @param curl_headers Curl headers, pre-compression
     * @param requestBody POST body, pre-compression
     */
    public function Compress(&$curl_headers, &$requestBody)
    {
        if (!function_exists('gzencode')) return;

        $requestBody = gzencode($requestBody);

        $curl_headers['content-encoding'] = 'deflate';
        $curl_headers['content-length'] = strlen($requestBody);
    }

    /**
     * Prepares a request header that requests compressed output
     * @param curl_headers Curl headers, pre-compression
     */
    public function PrepareDecompress(&$curl_headers)
    {
        $curl_headers['accept-encoding'] = 'deflate';
    }

    /**
     * Decompresses the output response stream.
     * @param $responseBody Response body.
     * @param $response_headers Response headers
     * @return Decompressed response body.
     */
    public function Decompress($responseBody, $response_headers)
    {
        return gzinflate(substr($responseBody, 10, -8));
    }

}

?>
