<?php
namespace WP_Media_Folder\Aws\ElasticsearchService;

use WP_Media_Folder\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Elasticsearch Service** service.
 *
 * @method \WP_Media_Folder\Aws\Result addTags(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result cancelElasticsearchServiceSoftwareUpdate(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise cancelElasticsearchServiceSoftwareUpdateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createElasticsearchDomain(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createElasticsearchDomainAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteElasticsearchDomain(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteElasticsearchDomainAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteElasticsearchServiceRole(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteElasticsearchServiceRoleAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeElasticsearchDomain(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeElasticsearchDomainAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeElasticsearchDomainConfig(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeElasticsearchDomainConfigAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeElasticsearchDomains(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeElasticsearchDomainsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeElasticsearchInstanceTypeLimits(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeElasticsearchInstanceTypeLimitsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeReservedElasticsearchInstanceOfferings(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeReservedElasticsearchInstanceOfferingsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeReservedElasticsearchInstances(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeReservedElasticsearchInstancesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getCompatibleElasticsearchVersions(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getCompatibleElasticsearchVersionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getUpgradeHistory(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getUpgradeHistoryAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getUpgradeStatus(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getUpgradeStatusAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listDomainNames(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listDomainNamesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listElasticsearchInstanceTypes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listElasticsearchInstanceTypesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listElasticsearchVersions(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listElasticsearchVersionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listTags(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listTagsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result purchaseReservedElasticsearchInstanceOffering(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise purchaseReservedElasticsearchInstanceOfferingAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result removeTags(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result startElasticsearchServiceSoftwareUpdate(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise startElasticsearchServiceSoftwareUpdateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateElasticsearchDomainConfig(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateElasticsearchDomainConfigAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result upgradeElasticsearchDomain(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise upgradeElasticsearchDomainAsync(array $args = [])
 */
class ElasticsearchServiceClient extends AwsClient {}
