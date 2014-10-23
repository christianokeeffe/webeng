<?php
class displayRdfView{
    
    public function __construct($path) {

        $foaf = new EasyRdf_Graph($path);
        $foaf->load();

        $dump = $foaf->dump('graph');

        print preg_replace_callback("/ href='([^#][^']*)'/", 'makeLinkLocal', $dump);
    }

    function makeLinkLocal($matches)
    {
        $href = $matches[1];
        return " href='?uri=".urlencode($href)."#$href'";
    }
}
?>