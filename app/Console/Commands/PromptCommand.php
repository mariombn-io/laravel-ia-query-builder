<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use MariombnIo\IaQueryBuilder\PromptProcessor;

class PromptCommand extends Command
{
    protected $signature = 'prompt';

    protected $description = 'Command description';

    public function handle(): void
    {
        $promptProcessor = app(PromptProcessor::class);

        $response = $promptProcessor->generate('Preciso de um relatório de todos os usuários que tenham mais de 10 posts publicados');

        dd($response);
    }
}
