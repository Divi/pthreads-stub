<?php

/**
 * pthreads extension stub file for code completion purposes
 *
 * @author Lisachenko Alexander <lisachenko.it@gmail.com>
 * @version 2.0.0
 */

/**
 * Worker
 *
 * Worker Threads have a persistent context, as such should be used over Threads in most cases.
 *
 * When a Worker is started, the run method will be executed, but the Thread will not leave until one
 * of the following conditions are met:
 *   - the Worker goes out of scope (no more references remain)
 *   - the programmer calls shutdown
 *   - the script dies
 * This means the programmer can reuse the context throughout execution; placing objects on the stack of
 * the Worker will cause the Worker to execute the stacked objects run method.
 *
 * @link http://www.php.net/manual/en/class.worker.php
 */
class Worker extends Thread
{

    /**
     * Returns the number of threaded tasks waiting to be executed by the referenced Worker
     *
     * @link http://www.php.net/manual/en/worker.getstacked.php
     * @return int An integral value
     */
    public function getStacked() {}

    /**
     * Tell if the referenced Worker has been shutdown
     *
     * @link http://www.php.net/manual/en/worker.isshutdown.php
     * @return bool A boolean indication of state
     */
    public function isShutdown() {}

    /**
     * Tell if a Worker is executing threaded tasks
     *
     * @link http://www.php.net/manual/en/worker.isworking.php
     * @return bool A boolean indication of state
     */
    public function isWorking() {}

    /**
     * Shuts down the Worker after executing all the threaded tasks previously stacked
     *
     * @link http://www.php.net/manual/en/worker.shutdown.php
     * @return bool A boolean indication of success
     */
    public function shutdown() {}

    /**
     * Appends the referenced object to the stack of the referenced Worker
     *
     * @param Threaded $work Threaded object to be executed by the referenced Worker
     *
     * @link http://www.php.net/manual/en/worker.stack.php
     * @return int The new length of the stack
     */
    public function stack(Threaded &$work) {}

    /**
     * Removes the referenced object ( or all objects if parameter is null ) from stack of the referenced Worker
     *
     * @param Threaded $work Threaded object previously stacked onto Worker
     *
     * @link http://www.php.net/manual/en/worker.unstack.php
     * @return int The new length of the stack
     */
    public function unstack(Threaded &$work = null) {}
}