<?php

namespace App\Imports;

use App\Models\Projet;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;
use Illuminate\Support\Facades\Session;



class ProjetsImport implements ToModel,WithHeadingRow
{
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

     
        $spreadsheet = IOFactory::load(Session::get('exelFile'));
        $i = 0;
        foreach ($spreadsheet->getActiveSheet()->getDrawingCollection() as $drawing) {
            if ($drawing instanceof MemoryDrawing) {
                ob_start();
                call_user_func(
                    $drawing->getRenderingFunction(),
                    $drawing->getImageResource()
                );
                $imageContents = ob_get_contents();
                ob_end_clean();
                switch ($drawing->getMimeType()) {
                    case MemoryDrawing::MIMETYPE_PNG :
                        $extension = 'png';
                        break;
                    case MemoryDrawing::MIMETYPE_GIF:
                        $extension = 'gif';
                        break;
                    case MemoryDrawing::MIMETYPE_JPEG :
                        $extension = 'jpg';
                        break;
                }
            } else {
                $zipReader = fopen($drawing->getPath(), 'r');
                $imageContents = '';
                while (!feof($zipReader)) {
                    $imageContents .= fread($zipReader, 1024);
                }
                fclose($zipReader);
                $extension = $drawing->getExtension();
            }

            $myFileName = time() .++$i. '.' . $extension;
            file_put_contents('images/projets/' . $myFileName, $imageContents);

        }
        return new Projet([
            'name'     => $row[0],
            'image'    => $myFileName, 
            'consistance'    => $row[2], 
            'titre_finance'    => $row[3], 
            'superfice'    => $row[4], 
            'adress'    => $row[5], 
            'ville'    => $row[6], 
            'autorisation'    => $row[7], 
            'datedebut'    => $row[8], 
            'datefin'    => $row[9], 
        ]);
    }
}
