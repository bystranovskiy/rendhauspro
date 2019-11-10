<?php
namespace WP_Media_Folder\Aws\ElasticBeanstalk;

use WP_Media_Folder\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Elastic Beanstalk** service.
 *
 * @method \WP_Media_Folder\Aws\Result abortEnvironmentUpdate(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise abortEnvironmentUpdateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result applyEnvironmentManagedAction(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise applyEnvironmentManagedActionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result checkDNSAvailability(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise checkDNSAvailabilityAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result composeEnvironments(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise composeEnvironmentsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createApplication(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createApplicationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createApplicationVersion(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createApplicationVersionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createConfigurationTemplate(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createConfigurationTemplateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createEnvironment(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createEnvironmentAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createPlatformVersion(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createPlatformVersionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createStorageLocation(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createStorageLocationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteApplication(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteApplicationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteApplicationVersion(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteApplicationVersionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteConfigurationTemplate(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteConfigurationTemplateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteEnvironmentConfiguration(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteEnvironmentConfigurationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deletePlatformVersion(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deletePlatformVersionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeAccountAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeApplicationVersions(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeApplicationVersionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeApplications(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeApplicationsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeConfigurationOptions(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeConfigurationOptionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeConfigurationSettings(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeConfigurationSettingsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeEnvironmentHealth(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeEnvironmentHealthAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeEnvironmentManagedActionHistory(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeEnvironmentManagedActionHistoryAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeEnvironmentManagedActions(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeEnvironmentManagedActionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeEnvironmentResources(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeEnvironmentResourcesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeEnvironments(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeEnvironmentsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeEvents(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeEventsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeInstancesHealth(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeInstancesHealthAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describePlatformVersion(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describePlatformVersionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listAvailableSolutionStacks(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listAvailableSolutionStacksAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listPlatformVersions(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listPlatformVersionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listTagsForResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result rebuildEnvironment(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise rebuildEnvironmentAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result requestEnvironmentInfo(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise requestEnvironmentInfoAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result restartAppServer(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise restartAppServerAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result retrieveEnvironmentInfo(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise retrieveEnvironmentInfoAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result swapEnvironmentCNAMEs(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise swapEnvironmentCNAMEsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result terminateEnvironment(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise terminateEnvironmentAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateApplication(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateApplicationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateApplicationResourceLifecycle(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateApplicationResourceLifecycleAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateApplicationVersion(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateApplicationVersionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateConfigurationTemplate(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateConfigurationTemplateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateEnvironment(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateEnvironmentAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateTagsForResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateTagsForResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result validateConfigurationSettings(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise validateConfigurationSettingsAsync(array $args = [])
 */
class ElasticBeanstalkClient extends AwsClient {}
