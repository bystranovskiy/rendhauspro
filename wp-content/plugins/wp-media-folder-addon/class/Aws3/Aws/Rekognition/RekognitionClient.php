<?php
namespace WP_Media_Folder\Aws\Rekognition;

use WP_Media_Folder\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Rekognition** service.
 * @method \WP_Media_Folder\Aws\Result compareFaces(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise compareFacesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createCollection(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createCollectionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createStreamProcessor(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createStreamProcessorAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteCollection(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteCollectionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteFaces(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteFacesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteStreamProcessor(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteStreamProcessorAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeCollection(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeCollectionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeStreamProcessor(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeStreamProcessorAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result detectFaces(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise detectFacesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result detectLabels(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise detectLabelsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result detectModerationLabels(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise detectModerationLabelsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result detectText(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise detectTextAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getCelebrityInfo(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getCelebrityInfoAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getCelebrityRecognition(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getCelebrityRecognitionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getContentModeration(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getContentModerationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getFaceDetection(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getFaceDetectionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getFaceSearch(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getFaceSearchAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getLabelDetection(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getLabelDetectionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result getPersonTracking(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise getPersonTrackingAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result indexFaces(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise indexFacesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listCollections(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listCollectionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listFaces(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listFacesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listStreamProcessors(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listStreamProcessorsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result recognizeCelebrities(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise recognizeCelebritiesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result searchFaces(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise searchFacesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result searchFacesByImage(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise searchFacesByImageAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result startCelebrityRecognition(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise startCelebrityRecognitionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result startContentModeration(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise startContentModerationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result startFaceDetection(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise startFaceDetectionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result startFaceSearch(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise startFaceSearchAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result startLabelDetection(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise startLabelDetectionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result startPersonTracking(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise startPersonTrackingAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result startStreamProcessor(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise startStreamProcessorAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result stopStreamProcessor(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise stopStreamProcessorAsync(array $args = [])
 */
class RekognitionClient extends AwsClient {}
