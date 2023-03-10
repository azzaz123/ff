<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT! (protoc-gen-twirp_php 0.8.1)
# source: livekit_ingress.proto

declare(strict_types=1);

namespace Livekit;

/**
 *
 *
 * Generated from protobuf service <code>livekit.Ingress</code>
 */
interface Ingress
{
    /**
     * Create a new Ingress
     *
     * Generated from protobuf method <code>livekit.Ingress/CreateIngress</code>
     *
     * @throws \Twirp\Error
     */
    public function CreateIngress(array $ctx, \Livekit\CreateIngressRequest $req): \Livekit\IngressInfo;

    /**
     * Update an existing Ingress. Ingress can only be updated when it's in ENDPOINT_WAITING state.
     *
     * Generated from protobuf method <code>livekit.Ingress/UpdateIngress</code>
     *
     * @throws \Twirp\Error
     */
    public function UpdateIngress(array $ctx, \Livekit\UpdateIngressRequest $req): \Livekit\IngressInfo;

    /**
     *
     *
     * Generated from protobuf method <code>livekit.Ingress/ListIngress</code>
     *
     * @throws \Twirp\Error
     */
    public function ListIngress(array $ctx, \Livekit\ListIngressRequest $req): \Livekit\ListIngressResponse;

    /**
     *
     *
     * Generated from protobuf method <code>livekit.Ingress/DeleteIngress</code>
     *
     * @throws \Twirp\Error
     */
    public function DeleteIngress(array $ctx, \Livekit\DeleteIngressRequest $req): \Livekit\IngressInfo;
}
