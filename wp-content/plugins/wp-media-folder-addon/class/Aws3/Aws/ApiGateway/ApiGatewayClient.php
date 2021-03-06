<?php
namespace WP_Media_Folder\Aws\ApiGateway;

use WP_Media_Folder\Aws\AwsClient;
use WP_Media_Folder\Aws\CommandInterface;
use WP_Media_Folder\Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **AWS API Gateway** service.
 *
 * @method \WP_Media_Folder\Aws\Result createApiKey(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createApiKeyAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createAuthorizer(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createAuthorizerAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createBasePathMapping(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createBasePathMappingAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createDeployment(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createDocumentationPart(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createDocumentationPartAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createDocumentationVersion(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createDocumentationVersionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createDomainName(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createDomainNameAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createModel(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createModelAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createRequestValidator(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createRequestValidatorAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createRestApi(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createRestApiAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createStage(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createStageAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createUsagePlan(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createUsagePlanAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createUsagePlanKey(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createUsagePlanKeyAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createVpcLink(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createVpcLinkAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteApiKey(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteApiKeyAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteAuthorizer(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteAuthorizerAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteBasePathMapping(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteBasePathMappingAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteClientCertificate(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteClientCertificateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteDeployment(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteDeploymentAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteDocumentationPart(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteDocumentationPartAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteDocumentationVersion(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteDocumentationVersionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteDomainName(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteDomainNameAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteGatewayResponse(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteGatewayResponseAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteIntegration(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteIntegrationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteIntegrationResponse(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteIntegrationResponseAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteMethod(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteMethodAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteMethodResponse(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteMethodResponseAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteModel(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteModelAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteRequestValidator(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteRequestValidatorAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteRestApi(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteRestApiAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteStage(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteStageAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteUsagePlan(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteUsagePlanAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteUsagePlanKey(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteUsagePlanKeyAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteVpcLink(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteVpcLinkAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result flushStageAuthorizersCache(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise flushStageAuthorizersCacheAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result flushStageCache(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise flushStageCacheAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result generateClientCertificate(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise generateClientCertificateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getAccount(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getAccountAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getApiKey(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getApiKeyAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getApiKeys(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getApiKeysAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getAuthorizer(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getAuthorizerAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getAuthorizers(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getAuthorizersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getBasePathMapping(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getBasePathMappingAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getBasePathMappings(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getBasePathMappingsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getClientCertificate(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getClientCertificateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getClientCertificates(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getClientCertificatesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getDeployment(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getDeploymentAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getDeployments(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getDeploymentsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getDocumentationPart(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getDocumentationPartAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getDocumentationParts(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getDocumentationPartsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getDocumentationVersion(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getDocumentationVersionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getDocumentationVersions(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getDocumentationVersionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getDomainName(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getDomainNameAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getDomainNames(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getDomainNamesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getExport(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getExportAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getGatewayResponse(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getGatewayResponseAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getGatewayResponses(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getGatewayResponsesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getIntegration(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getIntegrationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getIntegrationResponse(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getIntegrationResponseAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getMethod(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getMethodAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getMethodResponse(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getMethodResponseAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getModel(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getModelAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getModelTemplate(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getModelTemplateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getModels(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getModelsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getRequestValidator(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getRequestValidatorAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getRequestValidators(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getRequestValidatorsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getResources(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getResourcesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getRestApi(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getRestApiAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getRestApis(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getRestApisAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getSdk(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getSdkAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getSdkType(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getSdkTypeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getSdkTypes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getSdkTypesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getStage(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getStageAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getStages(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getStagesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getTags(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getTagsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getUsage(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getUsageAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getUsagePlan(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getUsagePlanAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getUsagePlanKey(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getUsagePlanKeyAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getUsagePlanKeys(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getUsagePlanKeysAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getUsagePlans(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getUsagePlansAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getVpcLink(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getVpcLinkAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getVpcLinks(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getVpcLinksAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result importApiKeys(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise importApiKeysAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result importDocumentationParts(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise importDocumentationPartsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result importRestApi(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise importRestApiAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result putGatewayResponse(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise putGatewayResponseAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result putIntegration(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise putIntegrationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result putIntegrationResponse(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise putIntegrationResponseAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result putMethod(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise putMethodAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result putMethodResponse(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise putMethodResponseAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result putRestApi(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise putRestApiAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result tagResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result testInvokeAuthorizer(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise testInvokeAuthorizerAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result testInvokeMethod(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise testInvokeMethodAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result untagResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateAccount(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateAccountAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateApiKey(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateApiKeyAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateAuthorizer(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateAuthorizerAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateBasePathMapping(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateBasePathMappingAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateClientCertificate(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateClientCertificateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateDeployment(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateDeploymentAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateDocumentationPart(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateDocumentationPartAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateDocumentationVersion(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateDocumentationVersionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateDomainName(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateDomainNameAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateGatewayResponse(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateGatewayResponseAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateIntegration(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateIntegrationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateIntegrationResponse(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateIntegrationResponseAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateMethod(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateMethodAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateMethodResponse(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateMethodResponseAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateModel(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateModelAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateRequestValidator(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateRequestValidatorAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateRestApi(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateRestApiAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateStage(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateStageAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateUsage(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateUsageAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateUsagePlan(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateUsagePlanAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateVpcLink(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateVpcLinkAsync(array $args = [])
 */
class ApiGatewayClient extends AwsClient
{
    public function __construct(array $args)
    {
        parent::__construct($args);
        $stack = $this->getHandlerList();
        $stack->appendBuild([__CLASS__, '_add_accept_header']);
    }

    public static function _add_accept_header(callable $handler)
    {
        return function (
            CommandInterface $command,
            RequestInterface $request
        ) use ($handler) {
            $request = $request->withHeader('Accept', 'application/json');

            return $handler($command, $request);
        };
    }
}
