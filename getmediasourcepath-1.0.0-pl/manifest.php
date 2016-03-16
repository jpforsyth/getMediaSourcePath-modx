<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included
in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

Software Copyright (c) 2016 Jim Forsyth
',
    'readme' => '--------------------
Extra: getMediaSourcePath
--------------------

Version:    1.0.0
Author:     Jim Forsyth (jpforsyth.com)
Copyright:  2016 Jim Forsyth
License:    MIT

Description:
A MODx snippet for retrieving the media source path for a template variable from a given resource.

Options:
id:          (Optional - id or name must be set) The template variable id (integer)
name:        (Optional - id or name must be set) The template variable name (string)

Example 1:
[[getMediaSourcePath? &id=MY_TV_ID]]

Example 2:
[[getMediaSourcePath? &name=`MY_TV_NAME`]]

Example 3:
$media_source_path = $modx->runSnippet(\'getMediaSourcePath\',array(
  \'id\' => MY_TV_ID
));

Example 4:
$media_source_path = $modx->runSnippet(\'getMediaSourcePath\',array(
  \'name\' => `MY_TV_NAME`
));
',
    'changelog' => 'Changelog file for getMediaSourcePath extra.

getMediaSourcePath 1.0.0
====================================
- This is a fresh extra. Nothing to report.
',
    'setup-options' => 'getmediasourcepath-1.0.0-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '821a6ae971c7f75c9a59750816a07667',
      'native_key' => 1,
      'filename' => 'modCategory/04dd86a23446d4db333a8b178e3da1b7.vehicle',
    ),
  ),
);