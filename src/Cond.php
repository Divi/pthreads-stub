<?php

/**
 * pthreads extension stub file for code completion purposes
 *
 * @author Lisachenko Alexander <lisachenko.it@gmail.com>
 * @version 2.0.0
 */

/**
 * Condition class
 *
 * The static methods contained in the Cond class provide direct access to Posix Condition Variables.
 *
 * @link http://www.php.net/manual/en/class.cond.php
 */
class Cond
{
    /**
     * Broadcast to all Threads blocking on a call to Cond::wait().
     *
     * @param int $condition A handle to a Condition Variable returned by a previous call to Cond::create()
     *
     * @link http://www.php.net/manual/en/cond.broadcast.php
     * @return bool A boolean indication of success
     */
    final public static function broadcast($condition) {}

    /**
     * Creates a new Condition Variable for the caller.
     *
     * @link http://www.php.net/manual/en/cond.create.php
     * @return int A handle to a Condition Variable
     */
    final public static function create() {}

    /**
     * Destroy a condition
     *
     * Destroying Condition Variable handles must be carried out explicitly by the programmer when they are
     * finished with the Condition Variable.
     * No Threads should be blocking on a call to Cond::wait() when the call to Cond::destroy() takes place.
     *
     * @param int $condition A handle to a Condition Variable returned by a previous call to Cond::create()
     *
     * @link http://www.php.net/manual/en/cond.destroy.php
     * @return bool A boolean indication of success
     */
    final public static function destroy($condition) {}

    /**
     * Signal a Condition
     *
     * @param int $condition A handle to a Condition Variable returned by a previous call to Cond::create()
     *
     * @link http://www.php.net/manual/en/cond.signal.php
     * @return bool A boolean indication of success
     */
    final public static function signal($condition) {}

    /**
     * Wait for a signal on a Condition Variable, optionally specifying a timeout to limit waiting time.
     *
     * @param int $condition A handle to a Condition Variable returned by a previous call to Cond::create()
     * @param int $mutex A handle returned by a previous call to Mutex::create() and owned (locked) by the caller.
     * @param int $timeout An optional timeout, in microseconds
     *
     * @return bool A boolean indication of success
     */
    final public static function wait($condition, $mutex, $timeout = null) {}
}