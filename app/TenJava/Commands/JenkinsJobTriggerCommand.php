<?php
namespace TenJava\Commands;

use App;
use Config;
use Exception;
use Github\Api\Repository\Hooks;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Input\InputOption;
use TenJava\CI\BuildTriggerInterface;
use TenJava\Models\Application;
use TenJava\Repository\RepositoryActionInterface;

class JenkinsJobTriggerCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'tenjava:jenkbuild';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Builds jenkins job.';

    /**
     * @var \TenJava\CI\BuildTriggerInterface
     */
    private $buildTrigger;

    /**
     * Create a new command instance.
     *
     * @param \TenJava\CI\BuildTriggerInterface $buildTrigger
     * @return \TenJava\Commands\JenkinsJobTriggerCommand
     */
    public function __construct(BuildTriggerInterface $buildTrigger) {
        parent::__construct();
        $this->buildTrigger = $buildTrigger;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire() {
        $this->buildTrigger->setToken(Config::get("webhooks.jenkins_token"));
        $this->buildTrigger->triggerBuild("lol768-t1", "Manual cmd");
    }

}
