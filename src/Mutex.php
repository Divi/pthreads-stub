<?php

/**
 * pthreads extension stub file for code completion purposes
 *
 * @author Lisachenko Alexander <lisachenko.it@gmail.com>
 * @version 2.0.0
 */

/**
 * Mutex class
 *
 * The static methods contained in the Mutex class provide direct access to Posix Mutex functionality.
 *
 * @link http://www.php.net/manual/en/class.mutex.php
 */
class Mutex
{

    /**
     * Create, and optionally lock a new Mutex for the caller
     *
     * @param bool $lock Setting lock to true will lock the Mutex for the caller before returning the handle
     *
     * @link http://www.php.net/manual/en/mutex.create.php
     * @return int A newly created and optionally locked Mutex handle
     */
    final public static function create($lock = false) {}

    /**
     * Destroy mutex
     *
     * Destroying Mutex handles must be carried out explicitly by the programmer when they are
     * finished with the Mutex handle.
     *
     * @param int $mutex A handle returned by a previous call to Mutex::create().
     *
     * @link http://www.php.net/manual/en/mutex.destroy.php
     * @return bool A boolean indication of success
     */
    final public static function destroy($mutex) {}

    /**
     * Attempt to lock the Mutex for the caller.
     *
     * An attempt to lock a Mutex owned (locked) by another Thread will result in blocking.
     *
     * @param int $mutex A handle returned by a previous call to Mutex::create().
     *
     * @link http://www.php.net/manual/en/mutex.lock.php
     * @return bool A boolean indication of success
     */
    final public static function lock($mutex) {}

    /**
     * Attempt to lock the Mutex for the caller without blocking if the Mutex is owned (locked) by another Thread.
     *
     * @param int $mutex A handle returned by a previous call to Mutex::create().
     *
     * @link http://www.php.net/manual/en/mutex.trylock.php
     * @return bool A boolean indication of success
     */
    final public static function trylock($mutex) {}

    /**
     * Release mutex
     *
     * Attempts to unlock the Mutex for the caller, optionally destroying the Mutex handle.
     * The calling thread should own the Mutex at the time of the call.
     *
     * @param int $mutex A handle returned by a previous call to Mutex::create().
     * @param bool $destroy When true pthreads will destroy the Mutex after a successful unlock.
     *
     * @link http://www.php.net/manual/en/mutex.unlock.php
     * @return bool A boolean indication of success
     */
    final public static function unlock($mutex, $destroy = false) {}
}