<?php

/**
 * pthreads extension stub file for code completion purposes
 *
 * @author Lisachenko Alexander <lisachenko.it@gmail.com>
 * @version 2.0.0
 */

/**
 * Basic thread implementation
 *
 * An implementation of a Thread should extend this declaration, implementing the run method.
 * When the start method of that object is called, the run method code will be executed in separate Thread.
 *
 * @link http://www.php.net/manual/en/class.thread.php
 */
class Thread extends Threaded
{

    /**
     * Detaches a thread
     *
     * @return bool A boolean indication of success
     */
    public function detach() {}

    /**
     * Will return the identity of the Thread that created the referenced Thread
     *
     * @link http://www.php.net/manual/en/thread.getcreatorid.php
     * @return int A numeric identity
     */
    public function getCreatorId() {}

    /**
     * Will return the instance of currently executing thread
     *
     * @return static
     */
    public static function getCurrentThread() {}

    /**
     * Will return the identity of the currently executing thread
     *
     * @link http://www.php.net/manual/en/thread.getcurrentthreadid.php
     * @return int
     */
    public static function getCurrentThreadId() {}

    /**
     * Will return the identity of the referenced Thread
     *
     * @link http://www.php.net/manual/en/thread.getthreadid.php
     * @return int
     */
    public function getThreadId() {}

    /**
     * Tell if the referenced Thread has been joined by another context
     *
     * @link http://www.php.net/manual/en/thread.isjoined.php
     * @return bool A boolean indication of state
     */
    public function isJoined() {}

    /**
     * Tell if the referenced Thread has been started
     *
     * @link http://www.php.net/manual/en/thread.isstarted.php
     * @return bool A boolean indication of state
     */
    public function isStarted() {}

    /**
     * Causes the calling context to wait for the referenced Thread to finish executing
     *
     * @link http://www.php.net/manual/en/thread.join.php
     * @return bool A boolean indication of state
     */
    public function join() {}

    /**
     * Kills the referenced thread, dangerously !
     *
     * @link http://www.php.net/manual/en/thread.kill.php
     */
    public function kill() {}

    /**
     * Will start a new Thread to execute the implemented run method
     *
     * @param int $options An optional mask of inheritance constants, by default PTHREADS_INHERIT_ALL
     *
     * @link http://www.php.net/manual/en/thread.start.php
     * @return bool A boolean indication of success
     */
    public function start($options = PTHREADS_INHERIT_ALL) {}
    
    /**
     * Will execute the Callable in the global scope
     *
     * @param Callable $block   The code to execute
     * @param ...      $args    Variable length list of arguments to pass to the Callable upon execution
     * @link http://www.php.net/manual/en/thread.start.php
     * @return bool A boolean indication of success
     */
    public static function globally(Callable $block [, $args]) {}
}