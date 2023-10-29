<?php

namespace MiniBus\Transport;

use MiniBus\Envelope\EnvelopeCollection;

interface Receiver
{
    /**
     * @return EnvelopeCollection
     */
    public function fetch();

    public function ack(EnvelopeCollection $envelopes);

    public function reject(EnvelopeCollection $envelopes);

    public function retry(EnvelopeCollection $envelopes);
}