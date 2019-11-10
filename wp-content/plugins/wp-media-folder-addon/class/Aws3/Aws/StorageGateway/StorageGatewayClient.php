<?php
namespace WP_Media_Folder\Aws\StorageGateway;

use WP_Media_Folder\Aws\AwsClient;

/**
 * AWS Storage Gateway client.
 *
 * @method \WP_Media_Folder\Aws\Result activateGateway(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise activateGatewayAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result addCache(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise addCacheAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result addTagsToResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result addUploadBuffer(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise addUploadBufferAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result addWorkingStorage(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise addWorkingStorageAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result cancelArchival(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise cancelArchivalAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result cancelRetrieval(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise cancelRetrievalAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createCachediSCSIVolume(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createCachediSCSIVolumeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createNFSFileShare(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createNFSFileShareAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createSMBFileShare(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createSMBFileShareAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createSnapshot(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createSnapshotFromVolumeRecoveryPoint(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createSnapshotFromVolumeRecoveryPointAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createStorediSCSIVolume(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createStorediSCSIVolumeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createTapeWithBarcode(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createTapeWithBarcodeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createTapes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createTapesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteBandwidthRateLimit(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteBandwidthRateLimitAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteChapCredentials(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteChapCredentialsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteFileShare(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteFileShareAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteGateway(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteGatewayAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteSnapshotSchedule(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteSnapshotScheduleAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteTape(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteTapeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteTapeArchive(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteTapeArchiveAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteVolume(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteVolumeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeBandwidthRateLimit(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeBandwidthRateLimitAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeCache(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeCacheAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeCachediSCSIVolumes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeCachediSCSIVolumesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeChapCredentials(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeChapCredentialsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeGatewayInformation(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeGatewayInformationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeMaintenanceStartTime(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeMaintenanceStartTimeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeNFSFileShares(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeNFSFileSharesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeSMBFileShares(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeSMBFileSharesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeSMBSettings(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeSMBSettingsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeSnapshotSchedule(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeSnapshotScheduleAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeStorediSCSIVolumes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeStorediSCSIVolumesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeTapeArchives(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeTapeArchivesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeTapeRecoveryPoints(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeTapeRecoveryPointsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeTapes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeTapesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeUploadBuffer(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeUploadBufferAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeVTLDevices(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeVTLDevicesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeWorkingStorage(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeWorkingStorageAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result disableGateway(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise disableGatewayAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result joinDomain(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise joinDomainAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listFileShares(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listFileSharesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listGateways(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listGatewaysAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listLocalDisks(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listLocalDisksAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listTagsForResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listTapes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listTapesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listVolumeInitiators(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listVolumeInitiatorsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listVolumeRecoveryPoints(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listVolumeRecoveryPointsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result listVolumes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise listVolumesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result notifyWhenUploaded(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise notifyWhenUploadedAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result refreshCache(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise refreshCacheAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result removeTagsFromResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result resetCache(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise resetCacheAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result retrieveTapeArchive(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise retrieveTapeArchiveAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result retrieveTapeRecoveryPoint(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise retrieveTapeRecoveryPointAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result setLocalConsolePassword(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise setLocalConsolePasswordAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result setSMBGuestPassword(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise setSMBGuestPasswordAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result shutdownGateway(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise shutdownGatewayAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result startGateway(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise startGatewayAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateBandwidthRateLimit(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateBandwidthRateLimitAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateChapCredentials(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateChapCredentialsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateGatewayInformation(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateGatewayInformationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateGatewaySoftwareNow(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateGatewaySoftwareNowAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateMaintenanceStartTime(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateMaintenanceStartTimeAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateNFSFileShare(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateNFSFileShareAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateSMBFileShare(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateSMBFileShareAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateSnapshotSchedule(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateSnapshotScheduleAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateVTLDeviceType(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateVTLDeviceTypeAsync(array $args = [])
 */
class StorageGatewayClient extends AwsClient {}
