<?php
namespace WP_Media_Folder\Aws\DirectConnect;

use WP_Media_Folder\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Direct Connect** service.
 *
 * @method \WP_Media_Folder\Aws\Result allocateConnectionOnInterconnect(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise allocateConnectionOnInterconnectAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result allocateHostedConnection(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise allocateHostedConnectionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result allocatePrivateVirtualInterface(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise allocatePrivateVirtualInterfaceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result allocatePublicVirtualInterface(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise allocatePublicVirtualInterfaceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result associateConnectionWithLag(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise associateConnectionWithLagAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result associateHostedConnection(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise associateHostedConnectionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result associateVirtualInterface(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise associateVirtualInterfaceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result confirmConnection(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise confirmConnectionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result confirmPrivateVirtualInterface(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise confirmPrivateVirtualInterfaceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result confirmPublicVirtualInterface(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise confirmPublicVirtualInterfaceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createBGPPeer(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createBGPPeerAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createConnection(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createConnectionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createDirectConnectGateway(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createDirectConnectGatewayAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createDirectConnectGatewayAssociation(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createDirectConnectGatewayAssociationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createInterconnect(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createInterconnectAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createLag(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createLagAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createPrivateVirtualInterface(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createPrivateVirtualInterfaceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result createPublicVirtualInterface(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise createPublicVirtualInterfaceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteBGPPeer(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteBGPPeerAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteConnection(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteConnectionAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteDirectConnectGateway(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteDirectConnectGatewayAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteDirectConnectGatewayAssociation(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteDirectConnectGatewayAssociationAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteInterconnect(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteInterconnectAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteLag(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteLagAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result deleteVirtualInterface(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise deleteVirtualInterfaceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeConnectionLoa(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeConnectionLoaAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeConnections(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeConnectionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeConnectionsOnInterconnect(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeConnectionsOnInterconnectAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeDirectConnectGatewayAssociations(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeDirectConnectGatewayAssociationsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeDirectConnectGatewayAttachments(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeDirectConnectGatewayAttachmentsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeDirectConnectGateways(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeDirectConnectGatewaysAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeHostedConnections(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeHostedConnectionsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeInterconnectLoa(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeInterconnectLoaAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeInterconnects(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeInterconnectsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeLags(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeLagsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeLoa(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeLoaAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeLocations(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeLocationsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeTags(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeVirtualGateways(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeVirtualGatewaysAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result describeVirtualInterfaces(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise describeVirtualInterfacesAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result disassociateConnectionFromLag(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise disassociateConnectionFromLagAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result tagResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result untagResource(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateLag(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateLagAsync(array $args = [])
 * @method \WP_Media_Folder\Aws\Result updateVirtualInterfaceAttributes(array $args = [])
 * @method \WP_Media_Folder\GuzzleHttp\Promise\Promise updateVirtualInterfaceAttributesAsync(array $args = [])
 */
class DirectConnectClient extends AwsClient {}
