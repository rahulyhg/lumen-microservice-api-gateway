<?php
use GuzzleHttp\Client;

trait ConsumeExternalServices
{
    /**
     * Send a request to any external service
     * @return string Response from service
     */
    public function executeRequest($method, $requestUrl, $formParams = [], $headers = [])
    {
        $client = new Client([
            'base_uri' => $this->baseUri,
        ]);

        $response = $client->request($method, $requestUrl, [
            'form_params' => $formParams,
            'headers' => $headers,
        ]);

        return $response->getBody()->getContents();
    }
}
