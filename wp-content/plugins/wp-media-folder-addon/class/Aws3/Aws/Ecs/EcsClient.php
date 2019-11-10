<?php
namespace WP_Media_Folder\Aws\Ecs;

use WP_Media_Folder\Aws\AwsClient;

/**
 * This client is used to interact with **Amazon ECS**.
 *
 * @method \WP_Media_Folder\Aws\Result createCluster(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createClusterAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createService(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createServiceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteAccountSetting(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteAccountSettingAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteCluster(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteClusterAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteService(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteServiceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deregisterContainerInstance(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deregisterContainerInstanceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deregisterTaskDefinition(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deregisterTaskDefinitionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeClusters(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeClustersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeContainerInstances(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeContainerInstancesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeServices(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeServicesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeTaskDefinition(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeTaskDefinitionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeTasks(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeTasksAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result discoverPollEndpoint(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise discoverPollEndpointAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listAccountSettings(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listAccountSettingsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listClusters(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listClustersAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listContainerInstances(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listContainerInstancesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listServices(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listServicesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listTagsForResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listTaskDefinitionFamilies(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listTaskDefinitionFamiliesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listTaskDefinitions(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listTaskDefinitionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listTasks(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listTasksAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result putAccountSetting(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise putAccountSettingAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result putAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise putAttributesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result registerContainerInstance(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise registerContainerInstanceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result registerTaskDefinition(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise registerTaskDefinitionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result runTask(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise runTaskAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result startTask(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise startTaskAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result stopTask(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise stopTaskAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result submitContainerStateChange(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise submitContainerStateChangeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result submitTaskStateChange(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise submitTaskStateChangeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result tagResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result untagResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateContainerAgent(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateContainerAgentAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateContainerInstancesState(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateContainerInstancesStateAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateService(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateServiceAsync(array $args = [])
 */
class EcsClient extends AwsClient {}
