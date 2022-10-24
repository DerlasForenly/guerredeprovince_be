<?php

namespace Modules\Newspaper\Services;

use Illuminate\Support\Facades\Http;

/**
 * Class NyckelService
 */
class NyckelService
{
    /**
     * Authority
     */
    const API_URL     = 'https://www.nyckel.com/';

    /**
     * Function id
     */
    const FUNCTION_ID = 'pvoevz3bwe5y3c8g';

    /**
     * @param string|null $accessToken
     */
    public function __construct(private ?string $accessToken = null)
    {
    }

    /**
     * Create access token
     *
     * @return string|null
     */
    private function createAccessToken(): ?string
    {
        $api          = 'connect/token';
        $clientId     = config('newspaper.nyckel.client_id');
        $clientSecret = config('newspaper.nyckel.client_secret');
        $data = [
            'client_id'     => $clientId,
            'client_secret' => $clientSecret,
            'grant_type'    => 'client_credentials',
        ];

        $response = Http::asForm()->post(self::API_URL . $api, $data);

        $this->accessToken = $response->json('access_token');

        return $this->accessToken;
    }

    public function invokeTextFunction(string $text, int $labelCount = 1, bool $includeMetadata = false)
    {
        $api = 'v1/functions/' . self::FUNCTION_ID . "/invoke?labelCount=$labelCount&includeMetadata=$includeMetadata";

        $data = [
            'data' => $text,
        ];

        return $this->makePost($api, $data)->json();
    }

    public function createTextSample(string $text, int $labelId, string $labelName, string $externalId = null)
    {
        $api = 'v1/functions/pvoevz3bwe5y3c8g/samples';

        $data = [
            'data' => $text,
            'annotation' => [
                'labelId' => $labelId,
                'labelName' => $labelName,
            ]
        ];

        if ($externalId) {
            $data['externalId'] = $externalId;
        }

        return $this->makePost($api, $data)->json();
    }

    /**
     * Get list of labels (categories)
     *
     * @return array
     */
    public function getLabels(): array
    {
        $api = 'v1/functions/' . self::FUNCTION_ID . '/labels';

        return $this->makeGet($api)->json();
    }

    private function makePost(string $api, array $data)
    {
        $response = $this->prepareRequest()->post(self::API_URL . $api, $data);

        return $response;
    }

    private function makeGet(string $api)
    {
        return $this->prepareRequest()->get(self::API_URL . $api);
    }

    private function prepareRequest()
    {
        return Http::acceptJson()->withToken($this->getToken());
    }

    public function getToken(): string
    {
        return $this->accessToken ?: $this->createAccessToken();
    }
}
