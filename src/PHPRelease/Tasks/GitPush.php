<?php
namespace PHPRelease\Tasks;

class GitPush extends BaseTask
{
    public function options($options)
    {
        $options->add('remote+','git remote names for pushing.');
    }

    public function execute()
    {
        $branch = system('git rev-parse --abbrev-ref HEAD');
        $remotes = array('origin');
        if ( $this->options->remote === 'all' ) {
            $remotes = explode("\n",shell_exec('git remote'));
        } elseif ( $this->options->remote ) {
            $remotes = $this->options->remote;
        }
        foreach ( $remotes as $remote ) {
            passthru("git push $remote $branch", $retval);
            if ( $retval != 0 )
                return false;
        }
        return true;
    }
}

