<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    /**
     * Setting up
     */
    function setup()
    {
        $this->_exec('pwd');
        $this->say("Running a setup taks finished.");
    }
}
