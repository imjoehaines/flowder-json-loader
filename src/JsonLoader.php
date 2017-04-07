<?php

namespace Imjoehaines\FlowderJson;

use Imjoehaines\Flowder\Loader\LoaderInterface;

final class JsonLoader implements LoaderInterface
{
    /**
     * Loads the given JSON file
     *
     * @param string $file
     * @return iterable
     */
    public function load($file)
    {
        $table = pathinfo($file, PATHINFO_FILENAME);

        $json = file_get_contents($file);

        $data = json_decode($json, true);

        yield $table => $data;
    }
}
