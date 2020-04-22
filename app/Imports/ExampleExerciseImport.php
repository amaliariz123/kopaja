<?php

namespace App\Imports;

use App\Models\ExampleExercise;
use Maatwebsite\Excel\Concerns\ToModel;

class ExampleExerciseImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ExampleExercise([
            'id_tax' => $row[1],
            'title' => $row[2],
            'question_text' => $row[3],
            'question_image' => $row[4],
            'answer_text' => $row[5],
            'answer_image' => $row[6],
        ]);
    }
}
