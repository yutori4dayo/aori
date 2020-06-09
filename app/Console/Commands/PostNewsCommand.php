<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use phpQuery;
use App\Report;
use Carbon\Carbon;

class PostNewsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:news';

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
      $datas = Report::where('post_flg',0)->pluck('id')->toArray();
      if(!empty($datas)){
        $data = Report::where('id',$datas)->first();
        $connection = new TwitterOAuth(env('CONSUMER_KEY'), env('COMSUMER_CEACRET_KEY'), env('ACCESS_TOKEN'), env('ACCESS_TOKEN_CEACRET'));
        $result = $connection->post("statuses/update", [
            "status" =>
            $data->itemName.PHP_EOL.
            ''.PHP_EOL.
            '#煽り運転  #危険運転'.PHP_EOL.
            $data->url
        ]);
        if($result){
          Report::where('id',$data->id)->update(['post_flg'=>1]);
        }
      }else {
        $this->info("新しいニュースはありません");
      }
    }
}
