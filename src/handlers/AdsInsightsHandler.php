<?php

namespace iamgold\facebook\ads\handlers;

use iamgold\phppipeline\HandlerInterface;
use iamgold\phppipeline\HandlerTrait;

/**
 * This handler is used to prepare API domain of insights
 *
 * @author Eric Huang <iamgold0105@gmail.com>
 * @version 1.0.0
 */
class AdsInsightsHandler implements HandlerInterface
{
    // use handler trait
    use HandlerTrait;

    /**
     * Implement execute method
     *
     * @param mixed $payload
     * @return mixed
     */
    public function handle($payload)
    {
        try {
            if (!isset($payload['path']))
                $payload['path'] = [];

            $payload['path'][] = 'insights';

            if ($this->next)
                return $this->next->handle($payload);

            return $params;
        } catch (Exception $e) {
            throw $e;
        }
    }
}
