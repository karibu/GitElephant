
/**
    private $originalPath;
    private $destinationPath;
    /**
     * Class constructor
     *
     * @param array $lines output lines for the diff
     */
    /**
     * toString magic method
     *
     * @return mixed
     */
        return $this->originalPath;
    /**
     * Find the diff chunks
     *
     * @param array $lines output lines for the diff
     */
        $arrayChunks = Utilities::pregSplitArray($lines, '/^@@ -(\d+,\d+)|(\d+) \+(\d+,\d+)|(\d+) @@(.*)$/');
    /**
     * look for the path in the line
     *
     * @param string $line line content
     */
            $this->originalPath    = $matches[1];
            $this->destinationPath = $matches[2];
    /**
     * find the line mode
     *
     * @param string $line line content
     */
    /**
     * chunks getter
     *
     * @return array
     */
    /**
     * destinationPath getter
     *
     * @return string
     */
    public function getDestinationPath()
        return $this->destinationPath;
    /**
     * mode getter
     *
     * @return string
     */
    /**
     * originalPath getter
     *
     * @return string
     */
    public function getOriginalPath()
        return $this->originalPath;

    /**
     * ArrayAccess interface
     *
     * @param int $offset offset
     *
     * @return bool
     */
    /**
     * ArrayAccess interface
     *
     * @param int $offset offset
     *
     * @return null
     */
    /**
     * ArrayAccess interface
     *
     * @param int   $offset offset
     * @param mixed $value  value
     */
    /**
     * ArrayAccess interface
     *
     * @param int $offset offset
     */
    /**
     * Countable interface
     *
     * @return int
     */
    /**
     * Iterator interface
     *
     * @return mixed
     */
    /**
     * Iterator interface
     */
    /**
     * Iterator interface
     *
     * @return int
     */
    /**
     * Iterator interface
     *
     * @return bool
     */
    /**
     * Iterator interface
     */