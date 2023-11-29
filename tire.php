<pre>
<?php

class tire {
    public $size;
    public $type;
    private $quality;

    function __construct($size, $type, $quality)
    {
        $this->size = $size;
        $this->type = $type;
        $this->quality = $quality;
    }

    function __destruct()
    {
        echo "BOOM";
    }



}
