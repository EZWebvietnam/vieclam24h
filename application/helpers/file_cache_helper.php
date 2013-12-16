<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/**
  * file_cache_helper
  *
  * This is a cache system that has been built for use in the 
  * Codeigniter Framework.
  *
  * @author     Matthew Craig <matt@taggedzi.com> 
  * @copyright  Matthew Craig 2011-03-28
  * @version    1.0
  * @link       http://taggedzi.com/ 
  * @package    file_cache_helper 
  */

/**
Licence 

Copyright (c) 2011, Matthew Craig <matt@taggedzi.com>
All rights reserved.

Permitted Use

You are permitted to use, copy, modify, and distribute the Software and its 
documentation, with or without modification, for any purpose, provided that 
the following conditions are met:

1. A copy of this license agreement must be included with the distribution.
2. Redistributions of source code must retain the above copyright notice in 
all source code files.
3. Redistributions in binary form must reproduce the above copyright notice 
in the documentation and/or other materials provided with the distribution.
4. Any files that have been modified must carry notices stating the nature of 
the change and the names of those who changed them.
5. Products derived from the Software must include an acknowledgment that they 
are derived from this code in their documentation and/or other materials 
provided with the distribution.

Indemnity

You agree to indemnify and hold harmless the authors of the Software and any 
contributors for any direct, indirect, incidental, or consequential 
third-party claims, actions or suits, as well as any related expenses, 
liabilities, damages, settlements or fees arising from your use or misuse of 
the Software, or a violation of any terms of this license.

Disclaimer of Warranty

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESSED OR 
IMPLIED, INCLUDING, BUT NOT LIMITED TO, WARRANTIES OF QUALITY, PERFORMANCE, 
NON-INFRINGEMENT, MERCHANTABILITY, OR FITNESS FOR A PARTICULAR PURPOSE.

Limitations of Liability

YOU ASSUME ALL RISK ASSOCIATED WITH THE INSTALLATION AND USE OF THE SOFTWARE. 
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS OF THE SOFTWARE BE LIABLE 
FOR CLAIMS, DAMAGES OR OTHER LIABILITY ARISING FROM, OUT OF, OR IN CONNECTION 
WITH THE SOFTWARE. LICENSE HOLDERS ARE SOLELY RESPONSIBLE FOR DETERMINING THE 
APPROPRIATENESS OF USE AND ASSUME ALL RISKS ASSOCIATED WITH ITS USE, INCLUDING 
BUT NOT LIMITED TO THE RISKS OF PROGRAM ERRORS, DAMAGE TO EQUIPMENT, LOSS OF 
DATA OR SOFTWARE PROGRAMS, OR UNAVAILABILITY OR INTERRUPTION OF OPERATIONS.

*/

/**
 * save_cache 
 * 
 * This function use used to store data in a "file cache" in a location
 * specified in the application/config/file_cache.php
 * @param   string  $key    The Key used to access the data. (the "name" of the data)
 * @param   mixed   $data   The data to be stored, can be any type that can be serialized.
 * @param   int     $ttl    The time to live in seconds from the time of storage.
 * @access  public
 * @return  boolean     Returns TRUE if successful / FALSE if not.
 */
if( ! function_exists('save_cache'))
{
    function save_cache ($key = null, $data = null, $ttl = 3600)
    {
        // if there is no key... stop
        if(is_null($key)) { return FALSE; }

        // if there is no data... stop
        if(is_null($data)) { return FALSE; }

        // Sanity Check on ttl
        settype($ttl, 'integer');
        if(($ttl <= 0) || ($ttl > PHP_INT_MAX)) { return FALSE; }

        // setup the TTL
        $actual_ttl = time() + $ttl;

        // if the TTL is larger than PHP can handle truncate it
        // to the INT max for the platform.
        if ($actual_ttl > PHP_INT_MAX) {
            $actual_ttl = PHP_INT_MAX;
        }
        
        // Load the CI instance so that we can get the config var.
        $CI =& get_instance();
        $CI->config->load('file_cache', TRUE);
        $file_path = $CI->config->item('file_cache_path', 'file_cache') . 
            $CI->config->item('prefix', 'file_cache') . '_' . md5($key) . 
            '.' . $CI->config->item('file_extension', 'file_cache');


        // opening the file
        $h = fopen($file_path,'w');

        // If the file failed to open...
        if ($h === FALSE) { return FALSE; }
        
        // serializing along with the ttl
        $data = serialize(array($actual_ttl,$data));

         // Check to see if encryption is turned on.
        if ( $CI->config->item('encrypt_cache', 'file_cache'))
        {
            $CI->load->library('encrypt');
            // Encrypt the serialized data
            $data = $CI->encrypt->encode($data);
        }

        // Write the serialized data to the file.
        if (fwrite($h,$data)===false) {
            return FALSE;
        }

        // Close the file
        fclose($h);

        // If we made it this far all must be well.
        return TRUE;
    }
}

/**
 * get_cache 
 * 
 * This function retreives a cached file by its "key"
 * @param   string  $key 
 * @access  public
 * @return  mixed   This returns FALSE if no data found, or returns the stored data.
 */
if( ! function_exists('get_cache')) 
{
   function get_cache($key = null)
    {
        $CI =& get_instance();
        $CI->config->load('file_cache', TRUE);
        $file_path = $CI->config->item('file_cache_path', 'file_cache') . 
            $CI->config->item('prefix', 'file_cache') . $CI->config->item('delimiter', 'file_cache') . 
            md5($key) . '.' . $CI->config->item('file_extension', 'file_cache');

        // Get the file and un-serialize the data.

        if (file_exists($file_path))
        {
            $data = file_get_contents($file_path);

            // Check to see if encryption is turned on.
            if ( $CI->config->item('encrypt_cache', 'file_cache'))
            {
                $CI->load->library('encrypt');
                // Encrypt the serialized data
                $data = $CI->encrypt->decode($data);
            }

            $data = @unserialize($data);

            // Check if the data was able to be retrieved.
            if ($data === FALSE)
            {
                unlink($file_path);
                return FALSE;
            }

            // Check the TTL
            if (time() > $data[0]) 
            {
                unlink($file_path);
                return FALSE;
            }

            // Return the un-serialized data.
            return $data[1];
        } else {
            // There was no file.
            return FALSE;
        }
    }
}

/**
 * remove_cache_key 
 * 
 * This function clears a single cache key.
 * @param   string      $key 
 * @access  public
 * @return  boolean     True if cleared, FALSE if not.
 */
if( ! function_exists('remove_cache_key')) 
{
   function remove_cache_key($key = null)
    {
        // if no key is called... we can't clear that key can we?
        if (is_null($key)) { return FALSE; }

        // Load the CI instance so that we can get the config var.
        $CI =& get_instance();
        $CI->config->load('file_cache', TRUE);
        $file_path = $CI->config->item('file_cache_path', 'file_cache') . 
            $CI->config->item('prefix', 'file_cache') . '_' . md5($key) . 
            '.' . $CI->config->item('file_extension', 'file_cache');

        if(file_exists($file_path)) {
            @unlink($file_path);
            return TRUE;
        } else {
            return FALSE;
        }   
    }
}

/**
 * flush_cache 
 * 
 * This function removes all files associated with the cache
 * from the cache directory.
 * @access public
 * @return void
 */
if ( ! function_exists('flush_cache'))
{
   function flush_cache()
    {

        $CI =& get_instance();
        $CI->config->load('file_cache', TRUE);
        $CI->load->helper('file_helper');
        $file_list = get_filenames($CI->config->item('file_cache_path', 'file_cache'));

        $removed_file_list = array();

        // These are all boolean checks used to make sure we don't 
        // delete files that are not part of the cache.
        $prefix_check = $extension_check = $ttl_check = FALSE;

        foreach($file_list as $file_name)
        {
            // Get the cache path from the config.
            $file_path = $CI->config->item('file_cache_path', 'file_cache') . $file_name;
            // setup the checks for safety.
            $prefix_check = $extension_check = $ttl_check = FALSE;

            // Make sure the file has the right prefix.
            $temp   = explode($CI->config->item('delimiter', 'file_cache'), $file_name);
            $prefix = $temp[0];
            if ($prefix == $CI->config->item('prefix', 'file_cache')) 
            { 
                // The prefix did match... trigger the check
                $prefix_check = TRUE;
            }

            // Make sure the file has the righ extension.
            $temp       = explode('.', $file_name);
            $extension  = end($temp);
            if ($extension == $CI->config->item('file_extension', 'file_cache')) 
            { 
                // The extension matched... trigger the check
                $extension_check = TRUE;
            }

            // Open the file and make sure the file has TTL data 
            if(file_exists($file_path)) {

                $data = file_get_contents($file_path);

                // Check to see if encryption is turned on.
                if ( $CI->config->item('encrypt_cache', 'file_cache'))
                {
                    $CI->load->library('encrypt');
                    // Encrypt the serialized data
                    $data = $CI->encrypt->decode($data);
                }

                $data = @unserialize($data);
                // check to see if we could unserialize the file data..
                if($data !== FALSE) 
                {
                    // check to make sure the first array entry is an integer
                    if(is_int($data[0]))
                    {
                        $ttl_check = TRUE;
                    }
                }
            }

            // IF all of the checks passed... delete the file.
            if ($prefix_check && $extension_check && $ttl_check)
            {
                @unlink($file_path);
                $removed_file_list[] = $file_path;
            }
        }
        return $removed_file_list;
    }
}

/**
 * cache_check_ttl 
 * 
 * This function checks the status of a cache file and 
 * deletes it if it is corrupt OR the TTL has expired.
 *
 * WARNING!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 *
 * This function is not meant to be used by the user, but by the internal
 * function "clean_cache".  If you call this with a regular file there is
 * all most a 100% chance IT WILL DELETE IT.  Since mostly likely your 
 * file does not contain valid serialized data.
 *
 * END WARNING !!!!!!!!!!!!!!!!!!!!!!!!!
 *
 * @param   string  $file_name  This is NOT the key, this is the generated filename.
 * @access  public
 * @return  void
 */
if( ! function_exists('check_cache_ttl'))
{
    function check_cache_ttl ($file_name)
    {
        // if there is no key... stop
        if(is_null($file_name)) { return FALSE; }

        // Load the CI instance so that we can get the config var.
        $CI =& get_instance();
        $CI->config->load('file_cache', TRUE);
        $file_path = $CI->config->item('file_cache_path', 'file_cache') . $file_name;

        // Check the prefix and file extension. as safety.

        $temp   = explode($CI->config->item('delimiter', 'file_cache'), $file_name);
        $prefix = $temp[0];
        if ($prefix != $CI->config->item('prefix', 'file_cache')) 
        { 
            // The prefix did not match... it must not be the cache we are looking for.
            return FALSE; 
        }

        $temp       = explode('.', $file_name);
        $extension  = end($temp);
        if ($extension != $CI->config->item('file_extension', 'file_cache')) 
        { 
            // The  extension not match... it must not be the cache we are looking for.
            return FALSE; 
        }

        // Get the file and un-serialize the data.
        $data = file_get_contents($file_path);

        // Check to see if encryption is turned on.
        if ( $CI->config->item('encrypt_cache', 'file_cache'))
        {
            $CI->load->library('encrypt');
            // Encrypt the serialized data
            $data = $CI->encrypt->decode($data);
        }

        $data = @unserialize($data);

        // Check if the data was able to be retrieved.
        if ($data === FALSE)
        {
            unlink($file_path);
            return TRUE;
        }

        // Check the TTL
        if (time() > $data[0]) 
        {
            unlink($file_path);
            return TRUE;
        }

        // If we made it this far all must be well.
        return FALSE;
    }
}

/**
 * clean_cache 
 * 
 * This is a helper function that goes through the "cache"
 * directory and has expired, or corrupted data deleted.
 * @access public
 * @return void
 */
if( ! function_exists('clean_cache'))
{
   function clean_cache() {
        $CI =& get_instance();
        $CI->config->load('file_cache', TRUE);
        $CI->load->helper('file_helper');
        $file_list = get_filenames($CI->config->item('file_cache_path', 'file_cache'));

        $removed_file_list = array();

        foreach($file_list as $cache_file)
        {
            if(check_cache_ttl($cache_file)) 
            {
                $removed_file_list[] = $cache_file;
            }
        }
        return $removed_file_list;
    }
}

/* End of file file_cache_helper.php */
/* Location: ./application/helpers/file_cache_helper.php */
