<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use phpQuery;
use App\Report;
use Carbon\Carbon;

class GetNewsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:news';

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
      for ($i=0; $i <10; $i++) {
        sleep(3);
        $html = file_get_contents('https://news.yahoo.co.jp/search/?fr=news_sw&p=%E7%85%BD%E3%82%8A%E9%81%8B%E8%BB%A2&ei=UTF-8&b=1');
        $get = phpQuery::newDocument($html);
        $title = $get->find('.l')->find('h2:eq('.$i.')')->text();
        $url = $get->find('.l')->find('h2')->find('a:eq('.$i.')')->attr('href');
        $datetime = $get->find('.txt')->find('p')->find('.d:eq('.$i.')')->text();
        $result = str_replace('&nbsp','',$datetime);
        $year = Carbon::now()->format('Y');
        $month = substr($result,0,1);
        $day = mb_substr($result,2,1);
        $get = Carbon::create($year,$month,$day);
        $date = Carbon::parse($get)->format('Y-m-d');
        $data = Report::where('title',$title)->get();
        if($data->isempty()){
          $names = new Report();
          $names->title = $title;
          $names->url = $url;
          $names->date = $date;
          $names->save();
          $now = Carbon::now()->format('Y-m-d');
          $nowdata = new Carbon($now);
          $threeDaysAgo = $nowdata->subDays(3);
          $date = Carbon::parse($threeDaysAgo)->format('Y-m-d');
          Report::where('date','<',$date)->delete();
        }
      }
    }
}
