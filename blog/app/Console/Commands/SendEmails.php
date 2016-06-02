<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use App\DripEmailer;


class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($this->confirm('Hello man start your project now')) {

            $number = $this->ask('How many tables');
            while ($number-- > 0) {
                $name = $this->ask('What is table'.$number.'name?');
                $this->call('make:model learning/blog/app/Model', ['name' => $name]);
                $this->call('make:controller', ['name' => "{$name}Controller"]);
            }
            // $rows = $this->ask('how many rows?');


            // $this->table(['a'], [['b']]);

            // $this->info('your name: ' . $name);

            // $password = $this->secret('What is the password?');

            // $this->info('your password: ' . $password);
             
            //  $this->ask('How many modules?');
             
            //  $name = $this->anticipate('What is your name?', ['Taylor', 'Dayle']);

            //  $name = $this->choice('What is your name?', ['Taylor', 'Dayle'], false);
            //  $headers = ['Name', 'Email'];
             
            // //$users = App\User::all(['name', 'email'])->toArray();

            // $this->table($headers, $users);
               
          // 
        }
         
          
          

    }
}
