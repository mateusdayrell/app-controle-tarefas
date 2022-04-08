<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TarefasExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return auth()->user()->tarefas()->get();
    }

    public function headings():array {
        return [
            'ID_da_Tarefa', 
            'ID_do_Usuario', 
            'Tarefa', 
            'Data_limite_conclusao', 
            'Data_criacao', 
            'Data_atualizacao'
        ];
    }
}
