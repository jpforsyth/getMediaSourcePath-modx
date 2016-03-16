<?php
/**
 * @package getmigxtv
 * @subpackage build
 */
function getSnippetContent($filename) {
    $o = file_get_contents($filename);
    $o = trim(str_replace(array('<?php','?>'),'',$o));
    return $o;
}
$snippets = array();

/* course snippets */
$snippets[1]= $modx->newObject('modSnippet');
$snippets[1]->fromArray(array(
    'id' => 1,
    'name' => 'getMediaSourcePath',
    'description' => 'A MODx snippet for retrieving the media source path for a template variable from a given resource.',
    'snippet' => getSnippetContent($sources['elements'].'snippets/snippet.getmediasourcepath.php'),
),'',true,true);

return $snippets;
