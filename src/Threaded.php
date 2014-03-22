<?php

/**
 * pthreads extension stub file for code completion purposes
 *
 * @author Lisachenko Alexander <lisachenko.it@gmail.com>
 * @version 2.0.0
 */
 
/**
 * The default inheritance mask used when starting Threads and Workers
 */
define('PTHREADS_INHERIT_ALL', 0x111111);

/**
 * Nothing will be inherited by the new context
 */
define('PTHREADS_INHERIT_NONE', 0);

/**
 * Determines whether the ini entries are inherited by the new context
 */
define('PTHREADS_INHERIT_INI', 0x1);

/**
 * Determines whether the constants are inherited by the new context
 */
define('PTHREADS_INHERIT_CONSTANTS', 0x10);

/**
 * Determines whether the class table is inherited by the new context
 */
define('PTHREADS_INHERIT_CLASSES', 0x100);

/**
 * Determines whether the function table is inherited by the new context
 */
define('PTHREADS_INHERIT_FUNCTIONS', 0x100);

/**
 * Determines whether the included_files table is inherited by the new context
 */
define('PTHREADS_INHERIT_INCLUDES', 0x10000);

/**
 * Determines whether the comments are inherited by the new context
 */
define('PTHREADS_INHERIT_COMMENTS', 0x100000);

/**
 * Allow output headers from the threads
 */
define('PTHREADS_ALLOW_HEADERS', 0x1000000);

/**
 * Allow global inheritance for new threads
 */
define('PTHREADS_ALLOW_GLOBALS', 0x10000000);

/**
 * Threaded class
 *
 * Threaded objects form the basis of pthreads ability to execute user code asynchronously;
 * they expose and include synchronization methods and various useful interfaces.
 *
 * Threaded objects, most importantly, provide implicit safety for the programmer;
 * all operations on the object scope are safe.
 *
 * @link http://www.php.net/manual/en/class.threaded.php
 * @since 2.0.0
 */
class Threaded implements Traversable, Countable, ArrayAccess
{
    /**
     * Fetches a chunk of the objects properties table of the given size
     *
     * @param int $size The number of items to fetch
     *
     * @link http://www.php.net/manual/en/threaded.chunk.php
     * @return array An array of items from the objects member table
     */
    public function chunk($size) {}

    /**
     * {@inheritdoc}
     */
    public function count() {}

    /**
     * Retrieves terminal error information from the referenced object
     *
     * @link http://www.php.net/manual/en/threaded.getterminationinfo.php
     * @return array|bool array containing the termination conditions of the referenced object
     */
    public function getTerminationInfo() {}

    /**
     * Tell if the referenced object is executing
     *
     * @link http://www.php.net/manual/en/threaded.isrunning.php
     * @return bool A boolean indication of state
     */
    public function isRunning() {}

    /**
     * Tell if the referenced object exited, suffered fatal errors, or threw uncaught exceptions during execution
     *
     * @link http://www.php.net/manual/en/threaded.isterminated.php
     * @return bool A boolean indication of state
     */
    public function isTerminated() {}

    /**
     * Tell if the referenced object is waiting for notification
     *
     * @link http://www.php.net/manual/en/threaded.iswaiting.php
     * @return bool A boolean indication of state
     */
    public function isWaiting() {}

    /**
     * Lock the referenced objects property table
     *
     * @link http://www.php.net/manual/en/threaded.lock.php
     * @return bool A boolean indication of state
     */
    public function lock() {}

    /**
     * Merges data into the current object
     *
     * @param mixed $from The data to merge
     * @param bool $overwrite Overwrite existing keys flag, by default true
     *
     * @link http://www.php.net/manual/en/threaded.merge.php
     * @return bool A boolean indication of success
     */
    public function merge($from, $overwrite = true) {}

    /**
     * Send notification to the referenced object
     *
     * @link http://www.php.net/manual/en/threaded.notify.php
     * @return bool A boolean indication of success
     */
    public function notify() {}

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset) {}

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value) {}

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset) {}

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset) {}

    /**
     * Pops an item from the objects property table
     *
     * @link http://www.php.net/manual/en/threaded.pop.php
     * @return mixed The last item from the objects properties table
     */
    public function pop() {}

    /**
     * The programmer should always implement the run method for objects that are intended for execution.
     *
     * @link http://www.php.net/manual/en/threaded.run.php
     * @return void The methods return value, if used, will be ignored
     */
    public function run() {}

    /**
     * Shifts an item from the objects properties table
     *
     * @link http://www.php.net/manual/en/threaded.shift.php
     * @return mixed The first item from the objects properties table
     */
    public function shift() {}

    /**
     * Executes the block while retaining the synchronization lock for the current context.
     *
     * @param \Closure $function The block of code to execute
     * @param mixed $args... Variable length list of arguments to use as function arguments to the block
     *
     * @link http://www.php.net/manual/en/threaded.synchronized.php
     * @return mixed The return value from the block
     */
    public function synchronized(\Closure $function, $args = null) {}

    /**
     * Unlock the referenced objects storage for the calling context
     *
     * @link http://www.php.net/manual/en/threaded.unlock.php
     * @return bool A boolean indication of success
     */
    public function unlock() {}

    /**
     * Waits for notification from the Stackable
     *
     * @param int $timeout An optional timeout in microseconds
     *
     * @link http://www.php.net/manual/en/threaded.wait.php
     * @return bool A boolean indication of success
     */
    public function wait($timeout) {}
}