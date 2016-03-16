getMediaSourcePath 1.0.0
===============

Version:    1.0.0<br />
Author:     Jim Forsyth (jpforsyth.com)<br />
Copyright:  2016 Jim Forsyth<br />
License:    MIT<br />

Installation
------------
Install via MODx Package Management (coming soon) or upload getresourcefield-1.0.3-pl.transport.zip and install from local source.

Description
-----------

getMediaSourcePath is a snippet that returns the correct media source path for a given template variable. It’s possible to use either the TV name or id when calling the snippet.

Example 1:
----------
<pre>[[getMediaSourcePath? &id=MY_TV_ID]]</pre>

Example 2:
----------
<pre>[[getMediaSourcePath? &name=`MY_TV_NAME`]]</pre>

Example 3:
----------
<pre>$media_source_path = $modx->runSnippet('getMediaSourcePath',array(
  'id' => MY_TV_ID
));</pre>

Example 4:
----------
<pre>$media_source_path = $modx->runSnippet('getMediaSourcePath',array(
  'name' => `MY_TV_NAME`
));</pre>

Properties
----------

<table>
<tr>
	<th>Property</th><th>Description</th><th>Type</th><th>Optional</th><th>Default</th></tr>
<tr>
  <td>id</td>
  <td>The template variable id</td>
	<td>Integer</td>
	<td>True</td>
	<td></td>
</tr><tr>
  <td>name</td>
  <td>The template variable name</td>
	<td>String</td>
	<td>True</td>
	<td></td>
</tr>
</table>

Notes
-----

At least one of the options must be set (e.g. you need to specify either an 'id' or 'name').
