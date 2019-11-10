<?php
namespace WP_Media_Folder\Aws\CloudSearch;

use WP_Media_Folder\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudSearch** service.
 *
 * @method \WP_Media_Folder\Aws\Result buildSuggesters(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise buildSuggestersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createDomain(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result defineAnalysisScheme(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise defineAnalysisSchemeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result defineExpression(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise defineExpressionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result defineIndexField(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise defineIndexFieldAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result defineSuggester(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise defineSuggesterAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteAnalysisScheme(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteAnalysisSchemeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteDomain(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteExpression(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteExpressionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteIndexField(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteIndexFieldAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteSuggester(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteSuggesterAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeAnalysisSchemes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeAnalysisSchemesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeAvailabilityOptions(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeAvailabilityOptionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeDomains(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeDomainsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeExpressions(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeExpressionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeIndexFields(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeIndexFieldsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeScalingParameters(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeScalingParametersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeServiceAccessPolicies(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeServiceAccessPoliciesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeSuggesters(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeSuggestersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result indexDocuments(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise indexDocumentsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listDomainNames(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listDomainNamesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateAvailabilityOptions(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateAvailabilityOptionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateScalingParameters(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateScalingParametersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateServiceAccessPolicies(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateServiceAccessPoliciesAsync(array $args = [])
 */
class CloudSearchClient extends AwsClient {}
